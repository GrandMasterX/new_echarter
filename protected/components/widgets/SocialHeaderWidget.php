<?php
class SocialHeaderWidget extends CWidget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        echo $this->renderBlock();
    }

    protected function renderBlock()
    {
        $user = User::model()->findByPk(Yii::app()->user->id);
        return $this->render('user/social_header', array('user'=>$user), true);
    }



}