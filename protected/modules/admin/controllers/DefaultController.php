<?
class DefaultController extends AdminController {

    public $layout = '/layouts/main';

    public function actionIndex() {
        $this->render('index');
    }

}