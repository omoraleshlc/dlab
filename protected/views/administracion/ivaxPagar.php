<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Impuesto x pagar';
$this->breadcrumbs=array(
	'ivaxPagar',
);
?>
<?php require("menuAdministracion.php");?>

  
<script language="javascript" type="text/javascript">   

function vacio(q) {   
        for ( i = 0; i < q.length; i++ ) {   
                if ( q.charAt(i) != " " ) {   
                        return true   
                }   
        }   
        return false   
}   
  

function valida(F) {   
      
        if( vacio(F.almacen.value) == false ) {   
                alert("Por Favor, escoje el almacen/departamento!")   
                return false   
        } else if( vacio(F.descripcion.value) == false ) {   
                alert("Por Favor, escribe la descripci�n de este almacen!")   
                return false   
        } else if( vacio(F.ctaContable.value) == false ) {   
                alert("Por Favor, escoje la cuenta mayor!")   
                return false   
        }            
}   

</script> 


<script language=javascript> 
function ventanaSecundaria6 (URL){ 
   window.open(URL,"ventana6","width=600,height=300,scrollbars=YES") 
} 
</script> 

<script language=javascript> 
function ventanaSecundaria1 (URL){ 
   window.open(URL,"ventana1","width=600,height=400,scrollbars=YES") 
} 
</script> 
<script language=javascript> 
function ventanaSecundaria5 (URL){ 
   window.open(URL,"ventana5","width=700,height=600,scrollbars=YES") 
} 
</script>
<script language=javascript> 
function ventanaSecundaria51 (URL){ 
   window.open(URL,"ventanaSecundaria51","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundaria511 (URL){ 
   window.open(URL,"ventanaSecundaria511","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundariaA (URL){ 
   window.open(URL,"ventanaSecundariaA","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundariaA2 (URL){ 
   window.open(URL,"ventanaSecundariaA2","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundariaA1 (URL){ 
   window.open(URL,"ventanaSecundariaA1","width=800,height=600,scrollbars=YES") 
} 
</script>


<script language=javascript> 
function ventanaSecundaria5111(URL){ 
   window.open(URL,"ventanaSecundaria5111","width=800,height=600,scrollbars=YES") 
} 
</script>






<?php 



if($_POST['fv'] and !$_POST['resumen'] ){
 $random=rand(1,900000000);

$q = "insert into contador 
(
usuario,random)
values
('".$usuario."','".$random."')";
mysql_db_query($basedatos,$q);
echo mysql_error();

$sSQL7ab="SELECT * 
FROM
contador
WHERE
usuario='".$usuario."'
and
random='".$random."'
order by keyConta DESC

";
$result7ab=mysql_db_query($basedatos,$sSQL7ab);
$myrow7ab = mysql_fetch_array($result7ab);	
?>
<script>
//javascript:ventanaSecundaria511('despliegaxFV.php?numeroE=<?php echo $numeroE; ?>&nCuenta=<?php echo $nCuenta; ?>&paciente=<?php echo $_POST['paciente']; ?>&numeroConfirmacion=<?php echo $numeroConfirmacion; ?>&hora1=<?php echo $hora1; ?>&keyClientesInternos=<?php echo $myrow3['keyClientesInternos'];?>&random=<?php echo $myrow7ab['random'];?>&fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>');
//window.alert("Se genero el numero de reporte: <?php print $myrow7ab['random'];?>");

</script>
<?php 
}
?>













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


</head>

<body>

 <h4 align="center" >Impuesto por Pagar </h4>

    
    
        
<?php echo CHtml::beginForm(); ?>  

 
        <div class="well">
        <fieldset>    
    <p>Fecha Inicial</p>
    <div class="input-append date" id="dp1"  data-date="<?php echo date("Y-m-d");?>" data-date-format="yyyy-mm-dd">
    <input name="fechaInicial" class="span2" type="text" value="<?php echo $_POST['fechaInicial'];?>">
    <span class="add-on"><i class="icon-th"></i></span>
    </div>   
        
        
    <p>Fecha Final</p>
    <div class="input-append date" id="dp2" data-date="<?php echo date("Y-m-d");?>" data-date-format="yyyy-mm-dd">
    <input name="fechaFinal" class="span2" type="text" value="<?php echo $_POST['fechaFinal'];?>">
    <span class="add-on"><i class="icon-th"></i></span>
    </div> 
    
    <div class="input">
    <button type="submit" name="search" class="btn">Buscar</button>
    </div>
    </fieldset> 
    </div> 
 <?php echo CHtml::endForm(); ?>
 
 
        
    

    
   
       
 



   
   <?php if(isset($_POST['search'])!=null){  ?>
   
   
   


<div id="container">
<div >
    
<a href="javascript:ventanaSecundariaA('../ventanas/ivaPxExternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Ventas externos </a><br />
<a href="javascript:ventanaSecundariaA('../ventanas/ivaDetallesExternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles externos </a><a href="javascript:ventanaSecundariaA('../ivaPxInternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&entidad=<?php echo $entidad;?>');"></a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/ivaPxInternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Ventas internos </a>

<div >
<a href="javascript:ventanaSecundariaA('../ventanas/imprimirIvaDetalles.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles internos</a> <br />
<a href="javascript:ventanaSecundariaA('../ventanas/ivaVentasDirectas.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Ventas diectas</a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesVentasDirectas.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles ventas directas </a>
</div>


<div >
<a href="javascript:ventanaSecundariaA('../ventanas/imprimirAbonosAseguradoras.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Abonos aseguradoras</a> <br />
<a href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesAbonosAseguradoras.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles abonos aseguradoras </a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/imprimirAbonosOtros.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Abonos otros </a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesAbonosOtros.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles abonos otros </a>
</div>


</div>
</div>


   <?php } ?>
   
   <p align="center">
     <input type="hidden" name="bandera" id="bandera" value="<?php echo $a;?>" />
     
     
     <input type="hidden" name="random" id="random" value="<?php echo $random;?>" />
   </p>
   <p align="center">
<a href="javascript:ventanaSecundaria5111('resumenGlobalCerradas.php?numeroE=<?php echo $numeroE; ?>&nCuenta=<?php echo $nCuenta; ?>&paciente=<?php echo $_POST['paciente']; ?>&numeroConfirmacion=<?php echo $numeroConfirmacion; ?>&hora1=<?php echo $hora1; ?>&keyClientesInternos=<?php echo $myrow3['keyClientesInternos'];?>&random=<?php echo $myrow7ab['random'];?>&fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>')" ></a>   </p>

 
<p align="center">&nbsp;</p>
 </form>  

 
 <table class="table table-hover">
     
     <th>Pacientes Externos</th>     
     <th>Pacientes Internos</th>
     <th>Ventas Directas</th>
     
     <tr>
         <td>
         Detalles <i class="icon-print"></i>
         </td>
         
           <td>
         Detalles <i class="icon-print"></i>
         </td>
         
         <td>
         Detalles <i class="icon-print"></i>
         </td>
     </tr>
     
     
</table>
 
 
 
 
 
 

<?php /*
<div class="accordion" id="accordion2">
  
    
    <div class="accordion-group">
    
      <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
       Externos
      </a>
    </div>
    
      
      <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        ../ventanas/ivaPxExternos.php
      </div>
    </div>
  </div>
    
    
    
    
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Internos
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        ../ventanas/ivaPxExternos.php
      </div>
    </div>
  </div>
</div>
<?php */?>
 
 
 
 
 
 
 
 
 
 
<script src="./assets/bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'yyyy-mm-dd'
			});
			//$('#dp2').datepicker();
			//$('#dp3').datepicker();
			//$('#dp3').datepicker();
			//$('#dpYears').datepicker();
			//$('#dpMonths').datepicker();
			$('#dp2').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        
                        
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
</body>
</html>