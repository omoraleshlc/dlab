<?php
/* @var $this GpoproductosController */
/* @var $model Gpoproductos */

$this->breadcrumbs=array(
	'Gpoproductoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gpoproductos', 'url'=>array('index')),
	array('label'=>'Manage Gpoproductos', 'url'=>array('admin')),
);
?>

<h1>Create Gpoproductos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>