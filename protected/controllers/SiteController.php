<?php

class SiteController extends Bus {

    public $layout = '/layouts/main';
	/**
	 * Declares class-based actions.
	 */
    public function actions()
    {
        return array(
            'oauth' => array(
                // the list of additional properties of this action is below
                'class'=>'ext.hoauth.HOAuthAction',
                // Yii alias for your user's model, or simply class name, when it already on yii's import path
                // default value of this property is: User
                'model' => 'User',
                // map model attributes to attributes of user's social profile
                // model attribute => profile attribute
                // the list of avaible attributes is below
                'attributes' => array(
                    'email' => 'email',
                    'fname' => 'firstName',
                    'lname' => 'lastName',
                    'gender' => 'genderShort',
                    'birthday' => 'birthDate',
                    // you can also specify additional values,
                    // that will be applied to your model (eg. account activation status)
                    'acc_status' => 1,
                ),
            ),
        );
    }

    public function actionIndex($page = '') {
        $this->layout = '/layouts/main';
        $form = $this->actionCreateSession($_POST, '/api/form');
        //$data = $this->actionGetTimeTable($_POST);
        $tpl = $this->renderPartial('/forms/search_result',array('data'=>$form),true);
        $this->render('index', array('form' => $form, 'page'=>$page));
    }

    public function actionRegistration() {

        $registration = new User;
        $registration->setScenario('registration');
        if(isset($_POST) && !empty($_POST)) {
            $registration->attributes = $_POST;
            if($registration->validate()) {
                $registration->save();
                Yii::app()->user->setFlash('registration_ok','Спасибо Вам за регистрацию! Теперь Вы можете залогиниться.');

                //Отправляем сообщение пользователю о успешной регистрации
                Yii::app()->getModule('mail')->send($registration->email, 'zakaz@echarter.com.ua', 'successRegister', array(
                    'siteNameLink' => '<a href="http://echarter.com.ua/remind">E-charter</a>',
                    'username' => $registration->email,
                    'password' => $_POST['password'],
                    'remindUrl' => '<a href="http://echarter.com.ua/remind">Восстановление пароля</a>',
                    'feedBack' => '<a href="mailto:zakaz@echarter.com.ua">zakaz@echarter.com.ua</a>',
                    //'confirmLink'=>Yii::app()->createAbsoluteUrl('/user/auth/activation', array('code'=>$registration->confirm_code))
                ));
                $identity = new UserIdentity($_POST['email'], User::hashPassword($_POST['password']));
                $identity->authenticate();
                Yii::app()->user->login($identity, $duration = 3600);
                Yii::app()->request->redirect('success_registration');
            }
        }
        $this->render('registration', array('registration' => $registration));
    }

    public function actionSuccessRegistration() {
        $this->layout = '/layouts/main';
        $this->render('success_registration');
    }

    public function actionRemind() {
        $remind = new User;
        $remind->scenario = 'remind';
        if(isset($_POST) && !empty($_POST)) {
            $remind->attributes = $_POST;
            if($remind->validate()) {
                $model = User::model()->findByAttributes(array('email'=>$_POST['email']));
                if(!empty($model)) {
                    $password = User::generatePassword();
                    @Yii::app()->getModule('mail')->send($model->email, 'zakaz@echarter.com.ua', 'remindPassword', array(
                        'siteNameLink' => '<a href="http://echarter.com.ua/remind">E-charter</a>',
                        //'username' => $_POST['email'],
                        'password' => $password,
                        'remindUrl' => '<a href="http://echarter.com.ua/remind">Восстановление пароля</a>',
                        'feedBack' => '<a href="mailto:zakaz@echarter.com.ua">zakaz@echarter.com.ua</a>',
                    ));
                    $model->password = $password;
                    $model->save();
                    Yii::app()->request->redirect('success_remind');
                }
            }
        }
        $this->layout = '/layouts/remind';
        $this->render('remind', array('remind' => $remind));
    }

    public function actionContacts() {
        $this->layout = '/layouts/contacts';
        $form = $this->actionCreateSession($_POST, '/api/small_form');
        $registration = new UserRegistration();
        $this->render('contacts', array('form' => $form, 'registration' => $registration ));
    }

    public function actionGetTemplates() {
        if(!Yii::app()->user->isGuest) {
            $model = Groups::model()->with('templates')->findAll();
            $empty = Templates::model()->findAllByAttributes(array('group_id'=>0));
            $user = User::model()->findByPk(Yii::app()->user->id);
            $tpl = $this->renderPartial('/forms/plus_container',array('model'=>$model,'user'=>$user,'empty'=>$empty),true);
            echo ($tpl);
        } else {
            echo ('');
        }
    }

    public function actionReservation() {
        if (!empty($_GET) && !empty($_GET['tn']) && !empty($_GET['start_date'])) {
            $ticketsIds = array($_GET['tn']);
            $ticketsDates = array($_GET['start_date']);

            $_GET['url1'] = 'http://echarter.com.ua/orderSuccess.php?r=1';
            $x = $this->actionGetRemoteData('http://api.e-travels.com.ua/apio/findReservation.php?', $_GET);
            if (!empty ($x[1])) {
                $data = json_decode($x[1], 1);
            }
        }
        $get = (isset($_GET['tn'])) ? array('tn'=>$_GET['tn'], 'start_date'=>$_GET['start_date']) : '';
        $get['data'] = (isset($data)) ?  $data : '';
        $this->layout = '/layouts/redemption_header';
        $this->render('reservation',$get);
    }

    public function actionRedemption() {
        $this->layout = '/layouts/redemption_header';
        if (!empty($_GET) && !empty($_GET['tn']) && !empty($_GET['start_date'])) {

            $ticketsIds = array($_GET['tn']);
            $ticketsDates = array($_GET['start_date']);

            $_GET['url1'] = 'http://echarter.com.ua/orderSuccess.php?r=1';
            $x = $this->actionGetRemoteData('http://api.e-travels.com.ua/apio/findReservation.php?', $_GET);
            if (!empty ($x[1])) {
                $data = json_decode($x[1], 1);
            }
        }

        $get = (isset($_GET['tn'])) ? array('tn'=>$_GET['tn'], 'start_date'=>$_GET['start_date'],'data'=>$data) : '';

        //$this->layout = '/layouts/redemption';
        $this->render('redemption_order',$get);
    }

    public function actionContent($alias) {
        //$model = Content::model()->findByAttributes(array('alias'=>$alias));
        $form = $this->actionCreateSession($_POST, '/api/small_form');
        $this->render('index',array(/*'model'=>$model,*/'form'=>$form));
    }

    public function actionGetCities() {
        $results = Yii::app()->db->createCommand()
            ->select('id, cid, country, city')
            ->from('cities_ru')
            ->where(array('or', 'city like '."'".$_POST['term'].'%'."'", 'country like '."'".$_POST['term'].'%'."'"))
            ->order('city asc')
            ->queryAll();
        foreach($results as $res) {
            if($res['country']!='')
                $data[] = array('label' => ($res['city'].', '. $res['country']), 'id' => $res['cid']);
            else
                $data[0] = array('label' => $res['city'], 'id' => $res['cid']);
        }

        $tpl = $this->renderPartial('list', array(
            'data' => $data,
        ), true);

        echo json_encode($tpl);
    }

	public function actionError()
	{
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error',array('data' =>$error));
        }
	}

    public function actionLogin() {
        //r4Hhqu
        if(isset($_POST) && !empty($_POST)) {
            $user = new User('signin');
            $user->attributes = $_POST;
            $model = User::model()->findByAttributes(array('email'=>$user->email,'password'=>User::hashPassword($user->password)));
            if($user->validate() && !empty($model)) {
                $identity = new UserIdentity($user->email, User::hashPassword($user->password));
                $identity->authenticate();
                Yii::app()->user->login($identity, $duration = 3600);
                //Session::model()->startSession(Yii::app()->user->getId());
                return $this->renderAjax('success', false, 'ok', Yii::app()->user->returnUrl);
            } else {
                return $this->renderAjaxError($user->getErrors());
            }
        }

        if (!isset($_GET['provider'])) {
            $this->redirect('/site/index');
        } try {
            Yii::import('ext.components.HybridAuthIdentity');
            $haComp = new HybridAuthIdentity();

            if (!$haComp->validateProviderName($_GET['provider']))
                throw new CHttpException ('500', 'Invalid Action. Please try again.');

            $haComp->adapter = $haComp->hybridAuth->authenticate($_GET['provider']);
            $haComp->userProfile = $haComp->adapter->getUserProfile();
            $haComp->login();  //further action based on successful login or re-direct user to the required url
        } catch (Exception $e) {
            //process error message as required or as mentioned in the HybridAuth 'Simple Sign-in script' documentation
            $this->redirect('/site/index');
            return;
        }
    }

    public function actionAbout() {
        $this->layout = '/layouts/about';
        $form = $this->actionCreateSession($_POST, '/api/small_form');
        $this->render('about',array('form'=>$form));
    }

    public function actionFeedback() {
        $this->render('feedback', array('form'));
    }

    public function actionSuccessRemind() {
        $this->layout = '/layouts/main';
        $this->render('success_remind');
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->user->returnUrl);
    }

    public function actionGetActionSalt() {
        $salt = $this->getActionSalt();
        echo json_encode($salt);
    }

}
