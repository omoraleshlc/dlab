<?php
/* @var $this ArticulosController */
/* @var $model Articulos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion1'); ?>
		<?php echo $form->textField($model,'descripcion1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'um'); ?>
		<?php echo $form->textField($model,'um',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'um'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gpoProducto'); ?>
		<?php echo $form->textField($model,'gpoProducto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gpoProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cbarra'); ?>
		<?php echo $form->textField($model,'cbarra',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'cbarra'); ?>
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
		<?php echo $form->labelEx($model,'laboratorio'); ?>
		<?php echo $form->textField($model,'laboratorio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'laboratorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'umVentas'); ?>
		<?php echo $form->textField($model,'umVentas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'umVentas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventaPieza'); ?>
		<?php echo $form->textField($model,'ventaPieza',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ventaPieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sustancia'); ?>
		<?php echo $form->textField($model,'sustancia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sustancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaActualizacion'); ?>
		<?php echo $form->textField($model,'fechaActualizacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fechaActualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cajaCon'); ?>
		<?php echo $form->textField($model,'cajaCon'); ?>
		<?php echo $form->error($model,'cajaCon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referido'); ?>
		<?php echo $form->textField($model,'referido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'referido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laboratorioReferido'); ?>
		<?php echo $form->textField($model,'laboratorioReferido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'laboratorioReferido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico'); ?>
		<?php echo $form->textField($model,'medico',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargoAuto'); ?>
		<?php echo $form->textField($model,'cargoAuto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargoAuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaAuto'); ?>
		<?php echo $form->textField($model,'horaAuto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'horaAuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'generico'); ?>
		<?php echo $form->textField($model,'generico',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'generico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cuarto'); ?>
		<?php echo $form->textField($model,'id_cuarto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_cuarto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'servicio'); ?>
		<?php echo $form->textField($model,'servicio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paquete'); ?>
		<?php echo $form->textField($model,'paquete',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'paquete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargosDirectos'); ?>
		<?php echo $form->textField($model,'cargosDirectos',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargosDirectos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subEspecialidad'); ?>
		<?php echo $form->textField($model,'subEspecialidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'subEspecialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'random'); ?>
		<?php echo $form->textField($model,'random',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'random'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->textField($model,'departamento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'procedimiento'); ?>
		<?php echo $form->textField($model,'procedimiento',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'procedimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caducidad'); ?>
		<?php echo $form->textField($model,'caducidad',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'caducidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antibiotico'); ?>
		<?php echo $form->textField($model,'antibiotico',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'antibiotico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maquilado'); ?>
		<?php echo $form->textField($model,'maquilado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'maquilado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etiqueta'); ?>
		<?php echo $form->textField($model,'etiqueta'); ?>
		<?php echo $form->error($model,'etiqueta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo'); ?>
		<?php echo $form->textField($model,'grupo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'grupo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->