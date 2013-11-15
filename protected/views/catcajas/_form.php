<?php
/* @var $this CatcajasController */
/* @var $model Catcajas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'catcajas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoCaja'); ?>
		<?php echo $form->textField($model,'codigoCaja',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionCaja'); ?>
		<?php echo $form->textField($model,'descripcionCaja',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcionCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->