<?php
class CitiesModule extends CWebModule
{
    public $layout='main';

    protected function init()
    {
        parent::init();

        //Yii::app()->theme = 'privatoffice';

        $this->setImport(array(
            'cities.models.*',
            'cities.components.*',
        ));

        Yii::app()->configure(array(
            'components'=>array(
                'errorHandler'=>array(
                    'errorAction'=>'cities/default/error',
                ),
            ),
        ));
    }

    public function beforeControllerAction($controller, $action)
    {
        if(parent::beforeControllerAction($controller, $action))
        {
            return true;
        }
        else
            return false;
    }
}