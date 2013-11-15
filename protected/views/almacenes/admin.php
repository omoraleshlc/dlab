<?php
/* @var $this AlmacenesController */
/* @var $model Almacenes */

$this->breadcrumbs=array(
	'Almacenes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Almacenes', 'url'=>array('index')),
	array('label'=>'Create Almacenes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#almacenes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Almacenes</h1>

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
	'id'=>'almacenes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyAlmacenes',
		'almacenConsumo',
		'almacen',
		'descripcion',
		'tieneCuartos',
		'ctaContable',
		/*
		'fecha1',
		'usuario',
		'ID_CCOSTO',
		'modulo',
		'activo',
		'stock',
		'miniAlmacen',
		'almacenPadre',
		'id_medico',
		'entidad',
		'medico',
		'ventas',
		'altaPaciente',
		'altaEspecial',
		'cargosDirectos',
		'numConsultorio',
		'transacciones',
		'contieneReferidos',
		'contieneEmpleados',
		'compras',
		'ventasDirectas',
		'modificarPrecios',
		'cierreCuenta',
		'registroUrgencias',
		'credenciales',
		'medicamentosSueltos',
		'centroDistribucion',
		'permiteDevoluciones',
		'almacenCargo',
		'reporteSurtir',
		'statusCitas',
		'cambiarDescripcion',
		'gpoProducto',
		'puntoVenta',
		'actualizaPrecios',
		'especialidad',
		'maquila',
		'farmacia',
		'beneficencia',
		'manejaexpedientes',
		'listaexpedientes',
		'almacenExistencias',
		'precioEspecial',
		'tipoBeneficencia',
		'porcenajePE',
		'horaPE',
		'llenadoEspecial',
		'porcentajePE',
		'ventaBotiquinExternos',
		'imprimeTicket',
		'statusExistencias',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
