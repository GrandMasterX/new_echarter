<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    public $layout = '//layouts/main';
	public $pageTitle;
	public $title;
    const NOT_AJAX_REDIRECT = '/';


	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    public function init()
    {
        parent::init();

        if(Yii::app()->getRequest()->getIsAjaxRequest()) {
			Yii::app()->clientscript->scriptMap['jquery.js'] = false;  
			Yii::app()->clientscript->scriptMap['jquery.min.js'] = false;
			
			$this->layout = '//layouts/ajax';
		}
		$this->pageTitle = 'Aminka';
    }
	
	protected function performAjaxValidation($model, $form)
	{
        if(isset($_POST['ajax']) && $_POST['ajax']===$form)
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
	}

    public function renderAjaxError($error = null) {
        $this->renderAjax(false, !empty($error) ? $error : Yii::t('app', 'Your request is invalid.'));
        return true;
    }

    public function renderAjax($result, $error = false, $message = false, $redirect = false)
    {
        if (!Yii::app()->getRequest()->getIsAjaxRequest())
            $this->redirect(self::NOT_AJAX_REDIRECT);

        if(is_array($redirect)) {
            $route = isset($redirect[0]) ? $redirect[0] : '';
            $redirect = $this->createUrl($route, array_splice($redirect, 1));
        }
        if (is_array($error)) {
            $tmp = '<ul>';
            foreach ($error as $err) {
                if (is_array($err))
                    foreach ($err as $er)
                        $tmp .= '<li>'.htmlspecialchars($er).'</li>';
                else
                    $tmp .= '<li>'.htmlspecialchars($err).'</li>';
            }

            $tmp .= '</ul>';
            $error = $tmp;
        }

        $data = array(
            'error' => $error,
            'result' => $result,
            'message' => $message,
            'redirect' => $redirect
        );

        echo CJavaScript::jsonEncode($data);
        Yii::app()->end();

        return true;
    }
}