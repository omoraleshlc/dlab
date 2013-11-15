<?php
/* @var $this CatcajasController */
/* @var $model Catcajas */

$this->breadcrumbs=array(
	'Catcajases'=>array('index'),
	$model->keyCatC,
);

$this->menu=array(
	array('label'=>'List Catcajas', 'url'=>array('index')),
	array('label'=>'Create Catcajas', 'url'=>array('create')),
	array('label'=>'Update Catcajas', 'url'=>array('update', 'id'=>$model->keyCatC)),
	array('label'=>'Delete Catcajas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyCatC),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Catcajas', 'url'=>array('admin')),
);
?>

<h1>View Catcajas #<?php echo $model->keyCatC; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyCatC',
		'codigoCaja',
		'descripcionCaja',
		'status',
		'entidad',
	),
)); ?>
