<?php
/* @var $this AlmacenesController */
/* @var $model Almacenes */

$this->breadcrumbs=array(
	'Almacenes'=>array('index'),
	$model->keyAlmacenes=>array('view','id'=>$model->keyAlmacenes),
	'Update',
);

$this->menu=array(
	array('label'=>'List Almacenes', 'url'=>array('index')),
	array('label'=>'Create Almacenes', 'url'=>array('create')),
	array('label'=>'View Almacenes', 'url'=>array('view', 'id'=>$model->keyAlmacenes)),
	array('label'=>'Manage Almacenes', 'url'=>array('admin')),
);
?>

<h1>Update Almacenes <?php echo $model->keyAlmacenes; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>