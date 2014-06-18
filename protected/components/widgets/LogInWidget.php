<?php
class LogInWidget extends CWidget
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
        $model = new User('signin');
        return $this->render('signin', array('model'=>$model),true);
    }


}