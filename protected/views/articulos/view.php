<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	$model->keyPA,
);

$this->menu=array(
	array('label'=>'List Articulos', 'url'=>array('index')),
	array('label'=>'Create Articulos', 'url'=>array('create')),
	array('label'=>'Update Articulos', 'url'=>array('update', 'id'=>$model->keyPA)),
	array('label'=>'Delete Articulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyPA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articulos', 'url'=>array('admin')),
);
?>

<h1>View Articulos #<?php echo $model->keyPA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyPA',
		'codigo',
		'descripcion',
		'descripcion1',
		'um',
		'gpoProducto',
		'activo',
		'cbarra',
		'usuario',
		'fecha',
		'laboratorio',
		'umVentas',
		'ventaPieza',
		'sustancia',
		'observaciones',
		'fechaActualizacion',
		'cajaCon',
		'hora',
		'referido',
		'laboratorioReferido',
		'medico',
		'entidad',
		'cargoAuto',
		'horaAuto',
		'generico',
		'id_cuarto',
		'servicio',
		'paquete',
		'cargosDirectos',
		'especialidad',
		'subEspecialidad',
		'random',
		'departamento',
		'procedimiento',
		'caducidad',
		'antibiotico',
		'maquilado',
		'etiqueta',
		'grupo',
	),
)); ?>
