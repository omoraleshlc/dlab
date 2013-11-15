<?php
/* @var $this CatcajasController */
/* @var $data Catcajas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyCatC')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyCatC), array('view', 'id'=>$data->keyCatC)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoCaja')); ?>:</b>
	<?php echo CHtml::encode($data->codigoCaja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionCaja')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionCaja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />


</div>