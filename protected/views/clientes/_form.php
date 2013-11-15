<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numCliente'); ?>
		<?php echo $form->textField($model,'numCliente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'numCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomCliente'); ?>
		<?php echo $form->textArea($model,'nomCliente',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nomCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cp'); ?>
		<?php echo $form->textField($model,'cp',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telCasa'); ?>
		<?php echo $form->textField($model,'telCasa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telCasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telTrabajo'); ?>
		<?php echo $form->textField($model,'telTrabajo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreCorto'); ?>
		<?php echo $form->textField($model,'nombreCorto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreCorto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rfc'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php echo $form->textField($model,'pais',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calle'); ?>
		<?php echo $form->textField($model,'calle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'calle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colonia'); ?>
		<?php echo $form->textField($model,'colonia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'colonia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delegacion'); ?>
		<?php echo $form->textField($model,'delegacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'delegacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_AUXILIAR'); ?>
		<?php echo $form->textField($model,'ID_AUXILIAR',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ID_AUXILIAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banderaCXCT'); ?>
		<?php echo $form->textField($model,'banderaCXCT',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'banderaCXCT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoCliente'); ?>
		<?php echo $form->textField($model,'tipoCliente',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_CTAMAYOR'); ?>
		<?php echo $form->textField($model,'ID_CTAMAYOR',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ID_CTAMAYOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baseParticular'); ?>
		<?php echo $form->textField($model,'baseParticular',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'baseParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plazoPago'); ?>
		<?php echo $form->textField($model,'plazoPago',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'plazoPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraRecibo'); ?>
		<?php echo $form->textField($model,'contraRecibo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'contraRecibo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subCliente'); ?>
		<?php echo $form->textField($model,'subCliente',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'subCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientePrincipal'); ?>
		<?php echo $form->textField($model,'clientePrincipal',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'clientePrincipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagoEfectivo'); ?>
		<?php echo $form->textField($model,'pagoEfectivo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'pagoEfectivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credenciales'); ?>
		<?php echo $form->textField($model,'credenciales',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'credenciales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'razonSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convenioExclusivo'); ?>
		<?php echo $form->textField($model,'convenioExclusivo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'convenioExclusivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargoNomina'); ?>
		<?php echo $form->textField($model,'cargoNomina',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cargoNomina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razonSocial1'); ?>
		<?php echo $form->textField($model,'razonSocial1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'razonSocial1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gpoProducto'); ?>
		<?php echo $form->textField($model,'gpoProducto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'gpoProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requiereExpediente'); ?>
		<?php echo $form->textField($model,'requiereExpediente',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'requiereExpediente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requiereMatricula'); ?>
		<?php echo $form->textField($model,'requiereMatricula',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'requiereMatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldoInicial'); ?>
		<?php echo $form->textField($model,'saldoInicial',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'saldoInicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facturacionPreconfigurada'); ?>
		<?php echo $form->textField($model,'facturacionPreconfigurada',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'facturacionPreconfigurada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permiteReferidos'); ?>
		<?php echo $form->textField($model,'permiteReferidos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'permiteReferidos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->