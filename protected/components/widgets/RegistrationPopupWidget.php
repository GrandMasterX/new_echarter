<?php
class RegistrationPopupWidget extends CWidget
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
        $registration = new User('registration');
        return $this->render('/user/registration_form', array('model'=>$model),true);
    }


}