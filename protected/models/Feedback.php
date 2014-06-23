<?php
class Feedback extends CActiveRecord {

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'feedback';
    }

    public function rules()
    {
        return array(
            array('id, name, alias, description, content, is_blocked, available', 'safe'),
        );
    }

    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id,true);
        $criteria->compare('name',$this->email,true);
        $criteria->compare('alias',$this->email,true);
        $criteria->compare('description',$this->password,true);
        $criteria->compare('content',$this->firstName,true);
        $criteria->compare('is_blocked',$this->middleName,true);
        $criteria->compare('available',$this->lastName,true);

        return new SearchDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}