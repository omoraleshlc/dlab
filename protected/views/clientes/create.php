<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Clientes', 'url'=>array('index')),
	array('label'=>'Modificar Clientes', 'url'=>array('admin')),
);
?>

<h1>Create Clientes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>