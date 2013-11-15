<?php
/* @var $this CatcajasController */
/* @var $model Catcajas */

$this->breadcrumbs=array(
	'Catcajases'=>array('index'),
	$model->keyCatC=>array('view','id'=>$model->keyCatC),
	'Update',
);

$this->menu=array(
	array('label'=>'List Catcajas', 'url'=>array('index')),
	array('label'=>'Create Catcajas', 'url'=>array('create')),
	array('label'=>'View Catcajas', 'url'=>array('view', 'id'=>$model->keyCatC)),
	array('label'=>'Manage Catcajas', 'url'=>array('admin')),
);
?>

<h1>Update Catcajas <?php echo $model->keyCatC; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>