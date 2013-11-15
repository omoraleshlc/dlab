<?php
/* @var $this GpoproductosController */
/* @var $model Gpoproductos */

$this->breadcrumbs=array(
	'Gpoproductoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Gpoproductos', 'url'=>array('index')),
	array('label'=>'Create Gpoproductos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gpoproductos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gpoproductoses</h1>

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
	'id'=>'gpoproductos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigoGP',
		'descripcionGP',
		'nvalor',
		'ctaContableCostoGP',
		'ctaContableIngresoGP',
		'tasaGP',
		/*
		'usuario',
		'fecha',
		'ip',
		'fechaPrecio',
		'porcentaje',
		'activo',
		'entidad',
		'prefijo',
		'coaseguro',
		'cargosDirectos',
		'impresionEspecial',
		'descripcionImpresion',
		'afectaExistencias',
		'medicos',
		'rutaModifica',
		'porcentajeParticular',
		'porcentajeAseguradora',
		'precioPorAlmacen',
		'stock',
		'tipoReporte',
		'separadoAlmacen',
		'impresionFactura',
		'honorarios',
		'medicamento',
		'maximo',
		'minimo',
		'reorden',
		'politicaPrecios',
		'afectaPS',
		'keyGP',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
