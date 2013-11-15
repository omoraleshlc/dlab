<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->keyClientes,
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'Actualizar Clientes', 'url'=>array('update', 'id'=>$model->keyClientes)),
	array('label'=>'Eliminar Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyClientes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Modificar Clientes', 'url'=>array('admin')),
);
?>

<h1>Lista de Clientes #<?php echo $model->keyClientes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyClientes',
		'numCliente',
		'nomCliente',
		'ciudad',
		'estado',
		'cp',
		'telCasa',
		'telTrabajo',
		'responsable',
		'nombreCorto',
		'rfc',
		'pais',
		'calle',
		'colonia',
		'delegacion',
		'nivel',
		'ID_AUXILIAR',
		'usuario',
		'fecha',
		'banderaCXCT',
		'tipoCliente',
		'ID_CTAMAYOR',
		'entidad',
		'baseParticular',
		'plazoPago',
		'contraRecibo',
		'subCliente',
		'clientePrincipal',
		'tipo',
		'pagoEfectivo',
		'credenciales',
		'razonSocial',
		'convenioExclusivo',
		'cargoNomina',
		'razonSocial1',
		'gpoProducto',
		'requiereExpediente',
		'requiereMatricula',
		'saldoInicial',
		'facturacionPreconfigurada',
		'permiteReferidos',
	),
)); ?>
