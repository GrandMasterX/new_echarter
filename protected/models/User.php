<?php

class User extends CActiveRecord {

    public  $password_repeat;
    public  $password_check;
    private $password_old;
    private $_id;
    private $_name;
    private $_email;
    private $_model;
    private $fname;
    private $lname;
    private $acc_status;
    private $_isAuthenticated = false;
    private $_state = array();
    public  $unhashed_password;
    public  $auth_role;
    const ROLE_ADMIN = 'admin@admin';
    const SALT = 'ckFdFErhf}yS';
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(

            /* REGISTRATION*/
            array('email', 'email', 'on' => 'registration','message'=>'Неправильный формат электронной почты.'),
            array('email', 'unique', 'on' => 'registration', 'message' => "Эта электронная почта уже занята"),
            array('email', 'required', 'on' => 'registration','message'=>'Электронная почта обязательна для заполнения.'),
            array('password', 'required', 'on'=>'registration', 'message'=>'Пароль обязателен для заполнения!'),
            array('password', 'compare', 'compareAttribute'=>'password_retype', 'on'=>'registration', 'message'=>'Пароли должны совпадать.'),
            array('password_retype', 'required', 'on'=>'registration', 'message'=>'Повторный пароль обязателен для заполнения.'),
            array('password', 'length', 'max' => 128, 'min' => 4, 'message' => "Минимальная длинна пароля - 4 символа", 'on' => 'registration'),
            array('email, password, password_retype', 'required','on' => 'registration'),

            /* REMIN*/
            array('email', 'email', 'on' => 'remind','message'=>'Неправильный формат емейл адреса.'),
            array('email', 'required', 'on' => 'remind','message'=>'Электронная почта обязательна для заполнения'),

            /* SIGNIN*/
            array('email', 'email', 'on' => 'signin','message'=>'Неправильный формат емейл адреса.'),
            array('password', 'required', 'on' => 'signin', 'message'=>'Заполните пожайлуста пароль'),
            array('email', 'required', 'on' => 'signin', 'message'=>'Заполните пожайлуста електронную почту'),
            array('password', 'length', 'max' => 128, 'min' => 4, 'message' => "Минимальная длинна пароля - 4 символа", 'on' => 'signin'),



            array('id, firstName, lastName, email, password,password_retype', 'safe'),
        );
    }

    public function findByEmail($email)
    {
        return self::model()->findByAttributes(array('email' => $email));
    }

    public static function t($str = '', $params = array())
    {
        return Yii::t('user', $str, $params);
    }

    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;
        //$criteria->with = array('group');

        $criteria->compare('id',$this->id,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('password',$this->password,true);
        $criteria->compare('firstName',$this->firstName,true);
        $criteria->compare('middleName',$this->middleName,true);
        $criteria->compare('lastName',$this->lastName,true);
        $criteria->compare('role',$this->role,true);
        //$criteria->compare('create_time',$this->create_time,true);

        return new SearchDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public function getDisplayName() {
        //if (empty(Yii::app()->user->name))
            return preg_replace('/([^@]*).*/', '$1', $this->email);
        //else
            //return Yii::app()->user->name;
    }

    protected function beforeSave(){
        if(parent::beforeSave()){
            if($this->password) {
                $this->password = self::hashPassword($this->password);
            }
        }
        return true;
    }

    static public function hashPassword($password)
    {
        return md5(self::SALT . $password);
    }

    public function validatePassword($password)
    {
        return self::hashPassword($password) === $this->password;
    }

    public static function generatePassword($length = 6)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }
} 