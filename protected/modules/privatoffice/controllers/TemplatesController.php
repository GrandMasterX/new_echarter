<?php

class TemplatesController extends PrivatofficeController {

    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Templates();
        $this->performAjaxTemplateValidation($model);

        if(isset($_POST['Templates']))
        {
            $model->attributes=$_POST['Templates'];
            if($model->save()) {
                Yii::app()->user->setFlash('success', 'Запись успешно добавлена.');
                $this->redirect('/privatoffice/templates/all');
                //$this->redirect(array('view','id'=>$model->id));
            }
        }

        $this->render('all',array(
            'model'=>$model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        $this->performAjaxTemplateValidation($model);

        if(isset($_POST['Templates']))
        {
            $model->attributes=$_POST['Templates'];
            if($model->save()) {
                Yii::app()->user->setFlash('success', 'Запись успешно изменена.');
                $this->redirect(array('view','id'=>$model->id));
            }
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if($id)
        {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_GET['ajax'])) {
                Yii::app()->user->setFlash('success', 'Запись успешно удалена');
                $this->redirect('/privatoffice/templates/all');
            }
        }
        else
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
    }

    public function actionAll() {
        $model = new Templates();
        if(isset($_GET['Templates']))
            $model->attributes = $_GET['Templates'];
        $this->render('admin',array('model'=>$model));
    }




    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model=Templates::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxTemplateValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
} 