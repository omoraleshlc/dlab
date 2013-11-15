<?php
/* @var $this AlmacenesController */
/* @var $model Almacenes */

$this->breadcrumbs=array(
	'Almacenes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Almacenes', 'url'=>array('index')),
	array('label'=>'Manage Almacenes', 'url'=>array('admin')),
);
?>

<h1>Create Almacenes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>