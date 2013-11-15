<?php
/* @var $this GpoproductosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gpoproductoses',
);

$this->menu=array(
	array('label'=>'Create Gpoproductos', 'url'=>array('create')),
	array('label'=>'Manage Gpoproductos', 'url'=>array('admin')),
);
?>

<h1>Gpoproductoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
