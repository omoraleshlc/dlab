<?php
/* @var $this GpoproductosController */
/* @var $model Gpoproductos */

$this->breadcrumbs=array(
	'Gpoproductoses'=>array('index'),
	$model->keyGP=>array('view','id'=>$model->keyGP),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gpoproductos', 'url'=>array('index')),
	array('label'=>'Create Gpoproductos', 'url'=>array('create')),
	array('label'=>'View Gpoproductos', 'url'=>array('view', 'id'=>$model->keyGP)),
	array('label'=>'Manage Gpoproductos', 'url'=>array('admin')),
);
?>

<h1>Update Gpoproductos <?php echo $model->keyGP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>