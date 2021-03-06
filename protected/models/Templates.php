<?php
class Templates extends CActiveRecord {

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'templates';
    }

    public function rules()
    {
        return array(
            array('id, firstName, lastName, middleName, birthdate, passport, psprt_date, citizenship, gender, phone, email, group_id, user_id', 'safe'),
        );
    }

    public function scopes()
    {
        return array(
            'owner' => array(
                'condition' => 'user_id = :user_id',
                'params' => array(
                    ':user_id' => Yii::app()->user->id
                )
            ),
        );
    }

    public function relations()
    {
        return array(
            //'templates' => array(self::HAS_MANY, 'Templates', 'group_id'),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('firstName', $this->firstName, true);
        $criteria->compare('lastName', $this->lastName, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('gender', $this->gender, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getName() {
        return $this->firstName;
    }

    protected function beforeSave(){
        if(parent::beforeSave()){
            if(!$this->user_id)
                $this->user_id = Yii::app()->user->id;
        }
        return true;
    }

    public function attributeLabels()
    {
        return array(
            'id' => '#',
            'title' => 'Название:',
            'firstName' => 'Имя:',
            'middleName' => 'Фамилия:',
            'lastName' => 'Отчество:',
            'birthdate' => 'Дата рождения:',
            'passport' => 'Номер паспорта:',
            'psprt_date' => 'Дата выдачи паспорта:',
            'citizenship' => 'Гражданство:',
            'phone' => 'Телефон:',
            'email' => 'Емейл:',
            'gender' => 'Пол:',
        );
    }
    /*
    public function behaviors()
    {
        return array(
            'LoggerBehavior' => array(
                'class' => 'behaviors.LoggerBehavior',
                'name' => 'Шаблон',
                'linkExpression' => function($model) {
                        return CHtml::link($model->name, array('/privatoffice/templates/view', 'id' => $model->id));
                    },
                'titleExpression' => function($model) {
                        return $model->name;
                    },
            ),
        );
    }*/
}