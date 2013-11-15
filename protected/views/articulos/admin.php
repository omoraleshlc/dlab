<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Articulos', 'url'=>array('index')),
	array('label'=>'Create Articulos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articulos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Articuloses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyPA',
		'codigo',
		'descripcion',
		'descripcion1',
		'um',
		'gpoProducto',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
