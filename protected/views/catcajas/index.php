<?php
/* @var $this CatcajasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Catálogo de Cajas',
);

$this->menu=array(
	array('label'=>'Crear Caja', 'url'=>array('create')),
	array('label'=>'Administrar Cajas ', 'url'=>array('admin')),
);
?>

<h1>Catcajases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
