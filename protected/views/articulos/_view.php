<?php
/* @var $this ArticulosController */
/* @var $data Articulos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyPA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyPA), array('view', 'id'=>$data->keyPA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion1')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('um')); ?>:</b>
	<?php echo CHtml::encode($data->um); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpoProducto')); ?>:</b>
	<?php echo CHtml::encode($data->gpoProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cbarra')); ?>:</b>
	<?php echo CHtml::encode($data->cbarra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laboratorio')); ?>:</b>
	<?php echo CHtml::encode($data->laboratorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umVentas')); ?>:</b>
	<?php echo CHtml::encode($data->umVentas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventaPieza')); ?>:</b>
	<?php echo CHtml::encode($data->ventaPieza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sustancia')); ?>:</b>
	<?php echo CHtml::encode($data->sustancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaActualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaActualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cajaCon')); ?>:</b>
	<?php echo CHtml::encode($data->cajaCon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referido')); ?>:</b>
	<?php echo CHtml::encode($data->referido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laboratorioReferido')); ?>:</b>
	<?php echo CHtml::encode($data->laboratorioReferido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico')); ?>:</b>
	<?php echo CHtml::encode($data->medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargoAuto')); ?>:</b>
	<?php echo CHtml::encode($data->cargoAuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaAuto')); ?>:</b>
	<?php echo CHtml::encode($data->horaAuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('generico')); ?>:</b>
	<?php echo CHtml::encode($data->generico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cuarto')); ?>:</b>
	<?php echo CHtml::encode($data->id_cuarto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servicio')); ?>:</b>
	<?php echo CHtml::encode($data->servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paquete')); ?>:</b>
	<?php echo CHtml::encode($data->paquete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargosDirectos')); ?>:</b>
	<?php echo CHtml::encode($data->cargosDirectos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subEspecialidad')); ?>:</b>
	<?php echo CHtml::encode($data->subEspecialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('random')); ?>:</b>
	<?php echo CHtml::encode($data->random); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('procedimiento')); ?>:</b>
	<?php echo CHtml::encode($data->procedimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caducidad')); ?>:</b>
	<?php echo CHtml::encode($data->caducidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antibiotico')); ?>:</b>
	<?php echo CHtml::encode($data->antibiotico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maquilado')); ?>:</b>
	<?php echo CHtml::encode($data->maquilado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etiqueta')); ?>:</b>
	<?php echo CHtml::encode($data->etiqueta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo')); ?>:</b>
	<?php echo CHtml::encode($data->grupo); ?>
	<br />

	*/ ?>

</div>