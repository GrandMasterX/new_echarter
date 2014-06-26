<?php

class SiteController extends Bus {

    public $layout = 'main';
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

    public function actionIndex() {
        $form = $this->actionCreateSession($_POST, '/api/form');
        $registration = '';new UserRegistration();
        $user = '';//User::model()->findByPk(Yii::app()->user->getId());
        //$tpl = $this->renderPartial('/forms/search_result',array('data'=>$form),true);
        $this->render('index', array('form' => $form, 'registration' => $registration, 'user'=>$user));
    }

    public function actionRegister() {
        if(isset($_POST['User'])) {

            $model = new User('registration');
            $model->attributes = $_POST['User'];

            if($model->validate() && $model->save()) {
                Yii::app()->user->setFlash('registration_ok','Thank you for registration! Check your email and for now you could log in');

                //Отправляем сообщение пользователю о успешной регистрации
                Yii::app()->getModule('mail')->send($model->email, 'zgrandmasterz@gmail.com', 'successRegister', array(
                    'siteNameLink' => CHtml::link('localhost', Yii::app()->createAbsoluteUrl(Yii::app()->homeUrl)),
                    'username' => $model->email,
                    'password' => $model->password,
                    'confirmLink'=>Yii::app()->createAbsoluteUrl('/user/auth/activation', array('code'=>$model->confirm_code))
                ));
                Yii::app()->request->redirect(Yii::app()->user->returnUrl);
            }
        }
    }

    public function actionContacts() {
        $this->layout = '/layouts/contacts';
        $form = $this->actionCreateSession($_POST, '/api/small_form');
        $registration = new UserRegistration();
        $this->render('contacts', array('form' => $form, 'registration' => $registration ));
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
        $this->layout = '/layouts/reservation';
        $this->render('reservation',array('tn'=>$_GET['tn'], 'start_date'=>$_GET['start_date'],'data'=>$data));
    }

    public function actionRedemption() {
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

        $this->layout = '/layouts/redemption';
        $this->render('redemption_order',$get);
    }

    public function actionContent($alias) {
        //$model = Content::model()->findByAttributes(array('alias'=>$alias));
        $form = $this->actionCreateSession($_POST, '/api/small_form');
        $this->render('index',array(/*'model'=>$model,*/'form'=>$form));
    }

	/**
	 * This is the action to handle external exceptions.
	 */

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
        if (!isset($_GET['provider']))
        {
            $this->redirect('/site/index');
        }
        try
        {
            Yii::import('ext.components.HybridAuthIdentity');
            $haComp = new HybridAuthIdentity();
            if (!$haComp->validateProviderName($_GET['provider']))
                throw new CHttpException ('500', 'Invalid Action. Please try again.');

            $haComp->adapter = $haComp->hybridAuth->authenticate($_GET['provider']);
            $haComp->userProfile = $haComp->adapter->getUserProfile();
            $haComp->login();  //further action based on successful login or re-direct user to the required url
        }
        catch (Exception $e)
        {
            //process error message as required or as mentioned in the HybridAuth 'Simple Sign-in script' documentation
            $this->redirect('/site/index');
            return;
        }
    }

    public function actionAbout() {
        $form = $this->actionCreateSession($_POST, '/api/small_form');
        $this->render('about',array('form'=>$form));
    }

    public function actionFeedback() {
        $this->render('feedback', array('form'));
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
