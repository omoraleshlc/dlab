<?php
/* @var $this CatcajasController */
/* @var $model Catcajas */

$this->breadcrumbs=array(
	'Catcajases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Catcajas', 'url'=>array('index')),
	array('label'=>'Manage Catcajas', 'url'=>array('admin')),
);
?>

<h1>Create Catcajas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>