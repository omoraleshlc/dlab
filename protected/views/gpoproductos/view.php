<?php
/* @var $this GpoproductosController */
/* @var $model Gpoproductos */

$this->breadcrumbs=array(
	'Gpoproductoses'=>array('index'),
	$model->keyGP,
);

$this->menu=array(
	array('label'=>'List Gpoproductos', 'url'=>array('index')),
	array('label'=>'Create Gpoproductos', 'url'=>array('create')),
	array('label'=>'Update Gpoproductos', 'url'=>array('update', 'id'=>$model->keyGP)),
	array('label'=>'Delete Gpoproductos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyGP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gpoproductos', 'url'=>array('admin')),
);
?>

<h1>View Gpoproductos #<?php echo $model->keyGP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigoGP',
		'descripcionGP',
		'nvalor',
		'ctaContableCostoGP',
		'ctaContableIngresoGP',
		'tasaGP',
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
	),
)); ?>
