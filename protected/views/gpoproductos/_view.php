<?php
/* @var $this GpoproductosController */
/* @var $data Gpoproductos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyGP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyGP), array('view', 'id'=>$data->keyGP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoGP')); ?>:</b>
	<?php echo CHtml::encode($data->codigoGP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionGP')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionGP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nvalor')); ?>:</b>
	<?php echo CHtml::encode($data->nvalor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctaContableCostoGP')); ?>:</b>
	<?php echo CHtml::encode($data->ctaContableCostoGP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctaContableIngresoGP')); ?>:</b>
	<?php echo CHtml::encode($data->ctaContableIngresoGP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tasaGP')); ?>:</b>
	<?php echo CHtml::encode($data->tasaGP); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
	<?php echo CHtml::encode($data->ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPrecio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPrecio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prefijo')); ?>:</b>
	<?php echo CHtml::encode($data->prefijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coaseguro')); ?>:</b>
	<?php echo CHtml::encode($data->coaseguro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargosDirectos')); ?>:</b>
	<?php echo CHtml::encode($data->cargosDirectos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impresionEspecial')); ?>:</b>
	<?php echo CHtml::encode($data->impresionEspecial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionImpresion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionImpresion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afectaExistencias')); ?>:</b>
	<?php echo CHtml::encode($data->afectaExistencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicos')); ?>:</b>
	<?php echo CHtml::encode($data->medicos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaModifica')); ?>:</b>
	<?php echo CHtml::encode($data->rutaModifica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeParticular')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeParticular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeAseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeAseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioPorAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->precioPorAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoReporte')); ?>:</b>
	<?php echo CHtml::encode($data->tipoReporte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('separadoAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->separadoAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impresionFactura')); ?>:</b>
	<?php echo CHtml::encode($data->impresionFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('honorarios')); ?>:</b>
	<?php echo CHtml::encode($data->honorarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamento')); ?>:</b>
	<?php echo CHtml::encode($data->medicamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maximo')); ?>:</b>
	<?php echo CHtml::encode($data->maximo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimo')); ?>:</b>
	<?php echo CHtml::encode($data->minimo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reorden')); ?>:</b>
	<?php echo CHtml::encode($data->reorden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('politicaPrecios')); ?>:</b>
	<?php echo CHtml::encode($data->politicaPrecios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afectaPS')); ?>:</b>
	<?php echo CHtml::encode($data->afectaPS); ?>
	<br />

	*/ ?>

</div>