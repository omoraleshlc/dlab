<?php
/* @var $this GpoproductosController */
/* @var $model Gpoproductos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigoGP'); ?>
		<?php echo $form->textField($model,'codigoGP',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionGP'); ?>
		<?php echo $form->textField($model,'descripcionGP',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nvalor'); ?>
		<?php echo $form->textField($model,'nvalor',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctaContableCostoGP'); ?>
		<?php echo $form->textField($model,'ctaContableCostoGP',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctaContableIngresoGP'); ?>
		<?php echo $form->textField($model,'ctaContableIngresoGP',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tasaGP'); ?>
		<?php echo $form->textField($model,'tasaGP',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPrecio'); ?>
		<?php echo $form->textField($model,'fechaPrecio',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prefijo'); ?>
		<?php echo $form->textField($model,'prefijo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coaseguro'); ?>
		<?php echo $form->textField($model,'coaseguro',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargosDirectos'); ?>
		<?php echo $form->textField($model,'cargosDirectos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impresionEspecial'); ?>
		<?php echo $form->textField($model,'impresionEspecial',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionImpresion'); ?>
		<?php echo $form->textField($model,'descripcionImpresion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afectaExistencias'); ?>
		<?php echo $form->textField($model,'afectaExistencias',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicos'); ?>
		<?php echo $form->textField($model,'medicos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rutaModifica'); ?>
		<?php echo $form->textField($model,'rutaModifica',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeParticular'); ?>
		<?php echo $form->textField($model,'porcentajeParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeAseguradora'); ?>
		<?php echo $form->textField($model,'porcentajeAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioPorAlmacen'); ?>
		<?php echo $form->textField($model,'precioPorAlmacen',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoReporte'); ?>
		<?php echo $form->textField($model,'tipoReporte',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'separadoAlmacen'); ?>
		<?php echo $form->textField($model,'separadoAlmacen',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impresionFactura'); ?>
		<?php echo $form->textField($model,'impresionFactura',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'honorarios'); ?>
		<?php echo $form->textField($model,'honorarios',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicamento'); ?>
		<?php echo $form->textField($model,'medicamento',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maximo'); ?>
		<?php echo $form->textField($model,'maximo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimo'); ?>
		<?php echo $form->textField($model,'minimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reorden'); ?>
		<?php echo $form->textField($model,'reorden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'politicaPrecios'); ?>
		<?php echo $form->textField($model,'politicaPrecios',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afectaPS'); ?>
		<?php echo $form->textField($model,'afectaPS',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyGP'); ?>
		<?php echo $form->textField($model,'keyGP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->