<?php

class CatalogosController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
		if(isset($_POST['generaOrden']))
		{
		
$model=new LoginForm;
if(isset($_POST['LoginForm']))
    $model->attributes=$_POST['LoginForm'];

		}
	}
   
        



public function actionCrear()
	{
		//$model=new Usuarios;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		//$this->redirect(array('view','id'=>$model->folio));
		if(isset($_POST['clientes']))
		{
			
			//$model->attributes=$_POST['clientes'];
			//if($model->save()){
			//	echo 'paso';
			//}
			
		}

		//$this->render('create',array(
		//	'model'=>$model,
		//));
	}


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}