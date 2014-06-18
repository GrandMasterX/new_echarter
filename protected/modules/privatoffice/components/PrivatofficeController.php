<?php

class PrivatofficeController extends Controller {

    public $layout = '/layouts/main';

    public $pageTitle = 'Личный кабинет';
    public $defaultAction = 'all';

    public function filters()
    {
        return array(
            'accessControl'
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'users'=>array('*'),
            ),
            array('deny',
                'users'=>array('*'),
                'deniedCallback' => function() {
                        Yii::app()->controller->redirect('/');
                    }
            ),
        );
    }

    public function init()
    {
        parent::init();

        /*if(Yii::app()->getRequest()->getIsAjaxRequest()) {
            Yii::app()->clientscript->scriptMap['jquery.js'] = false;
            Yii::app()->clientscript->scriptMap['jquery.min.js'] = false;

            $this->layout = '//layouts/ajax';
        }*/
    }


}