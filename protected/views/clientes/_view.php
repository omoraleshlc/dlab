<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyClientes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyClientes), array('view', 'id'=>$data->keyClientes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numCliente')); ?>:</b>
	<?php echo CHtml::encode($data->numCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomCliente')); ?>:</b>
	<?php echo CHtml::encode($data->nomCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telCasa')); ?>:</b>
	<?php echo CHtml::encode($data->telCasa); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->telTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable')); ?>:</b>
	<?php echo CHtml::encode($data->responsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCorto')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCorto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfc')); ?>:</b>
	<?php echo CHtml::encode($data->rfc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calle')); ?>:</b>
	<?php echo CHtml::encode($data->calle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colonia')); ?>:</b>
	<?php echo CHtml::encode($data->colonia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delegacion')); ?>:</b>
	<?php echo CHtml::encode($data->delegacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_AUXILIAR')); ?>:</b>
	<?php echo CHtml::encode($data->ID_AUXILIAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banderaCXCT')); ?>:</b>
	<?php echo CHtml::encode($data->banderaCXCT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoCliente')); ?>:</b>
	<?php echo CHtml::encode($data->tipoCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CTAMAYOR')); ?>:</b>
	<?php echo CHtml::encode($data->ID_CTAMAYOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baseParticular')); ?>:</b>
	<?php echo CHtml::encode($data->baseParticular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plazoPago')); ?>:</b>
	<?php echo CHtml::encode($data->plazoPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contraRecibo')); ?>:</b>
	<?php echo CHtml::encode($data->contraRecibo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subCliente')); ?>:</b>
	<?php echo CHtml::encode($data->subCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientePrincipal')); ?>:</b>
	<?php echo CHtml::encode($data->clientePrincipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagoEfectivo')); ?>:</b>
	<?php echo CHtml::encode($data->pagoEfectivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credenciales')); ?>:</b>
	<?php echo CHtml::encode($data->credenciales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonSocial')); ?>:</b>
	<?php echo CHtml::encode($data->razonSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convenioExclusivo')); ?>:</b>
	<?php echo CHtml::encode($data->convenioExclusivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargoNomina')); ?>:</b>
	<?php echo CHtml::encode($data->cargoNomina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonSocial1')); ?>:</b>
	<?php echo CHtml::encode($data->razonSocial1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpoProducto')); ?>:</b>
	<?php echo CHtml::encode($data->gpoProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requiereExpediente')); ?>:</b>
	<?php echo CHtml::encode($data->requiereExpediente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requiereMatricula')); ?>:</b>
	<?php echo CHtml::encode($data->requiereMatricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldoInicial')); ?>:</b>
	<?php echo CHtml::encode($data->saldoInicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facturacionPreconfigurada')); ?>:</b>
	<?php echo CHtml::encode($data->facturacionPreconfigurada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permiteReferidos')); ?>:</b>
	<?php echo CHtml::encode($data->permiteReferidos); ?>
	<br />

	*/ ?>

</div>