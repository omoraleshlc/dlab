<?php
/* @var $this GpoproductosController */
/* @var $model Gpoproductos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gpoproductos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoGP'); ?>
		<?php echo $form->textField($model,'codigoGP',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'codigoGP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionGP'); ?>
		<?php echo $form->textField($model,'descripcionGP',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcionGP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nvalor'); ?>
		<?php echo $form->textField($model,'nvalor',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nvalor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctaContableCostoGP'); ?>
		<?php echo $form->textField($model,'ctaContableCostoGP',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ctaContableCostoGP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctaContableIngresoGP'); ?>
		<?php echo $form->textField($model,'ctaContableIngresoGP',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ctaContableIngresoGP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tasaGP'); ?>
		<?php echo $form->textField($model,'tasaGP',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tasaGP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaPrecio'); ?>
		<?php echo $form->textField($model,'fechaPrecio',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fechaPrecio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prefijo'); ?>
		<?php echo $form->textField($model,'prefijo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'prefijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coaseguro'); ?>
		<?php echo $form->textField($model,'coaseguro',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'coaseguro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargosDirectos'); ?>
		<?php echo $form->textField($model,'cargosDirectos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cargosDirectos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'impresionEspecial'); ?>
		<?php echo $form->textField($model,'impresionEspecial',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'impresionEspecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionImpresion'); ?>
		<?php echo $form->textField($model,'descripcionImpresion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcionImpresion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afectaExistencias'); ?>
		<?php echo $form->textField($model,'afectaExistencias',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'afectaExistencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicos'); ?>
		<?php echo $form->textField($model,'medicos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'medicos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rutaModifica'); ?>
		<?php echo $form->textField($model,'rutaModifica',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rutaModifica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeParticular'); ?>
		<?php echo $form->textField($model,'porcentajeParticular'); ?>
		<?php echo $form->error($model,'porcentajeParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeAseguradora'); ?>
		<?php echo $form->textField($model,'porcentajeAseguradora'); ?>
		<?php echo $form->error($model,'porcentajeAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioPorAlmacen'); ?>
		<?php echo $form->textField($model,'precioPorAlmacen',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'precioPorAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoReporte'); ?>
		<?php echo $form->textField($model,'tipoReporte',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipoReporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'separadoAlmacen'); ?>
		<?php echo $form->textField($model,'separadoAlmacen',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'separadoAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'impresionFactura'); ?>
		<?php echo $form->textField($model,'impresionFactura',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'impresionFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'honorarios'); ?>
		<?php echo $form->textField($model,'honorarios',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'honorarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamento'); ?>
		<?php echo $form->textField($model,'medicamento',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'medicamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maximo'); ?>
		<?php echo $form->textField($model,'maximo'); ?>
		<?php echo $form->error($model,'maximo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimo'); ?>
		<?php echo $form->textField($model,'minimo'); ?>
		<?php echo $form->error($model,'minimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reorden'); ?>
		<?php echo $form->textField($model,'reorden'); ?>
		<?php echo $form->error($model,'reorden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'politicaPrecios'); ?>
		<?php echo $form->textField($model,'politicaPrecios',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'politicaPrecios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afectaPS'); ?>
		<?php echo $form->textField($model,'afectaPS',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'afectaPS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->