<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Modificar Usuarios', 'url'=>array('admin')),
);
?>


<span class="label label-info">Lista de Usuarios  <i class="icon-search"></i></span>

<i class="icon-search icon-white"></i>


<br>
<br><br />


<table width="570" class="table table-condensed table-hover">

    <tr>
         <th  >#</th>

      <th  >Usuario</th>
      <th  >Nombre</th>
      <th  >Tipo</th>
     <th></th>
    </tr>
<?php	
$connection=Yii::app()->db;   // assuming you have configured a "db" connection
$cI=null;
$clientes=null;
	  
#####variables para exportar


$fecha1=date("Y-m-d");
$users=Usuarios::model()->findByAttributes(array('usuario'=>Yii::app()->user->name));
$entidad=$users->entidad;
$usuario=Yii::app()->user->name;
$role=$users->role;
$a=NULL;
$sSQL= "SELECT *
FROM
usuarios 
ORDER BY nombre ASC";

$command4=$connection->createCommand($sSQL);
$dataReader4=$command4->query();
while(($myrow=$dataReader4->read())!==false) {  
$a+=1;
 
/*
$sSQLf= "SELECT *
FROM
clientesInternos 
WHERE 
entidad='".$entidad."'
AND
folioVenta='".$myrow['folioVenta']."'";
*/
//$command4=$connection->createCommand($sSQLf);
//$dataReaderf=$commandf->query();
//$rowf=$dataReaderf->read(); 
//$cI=ClientesInternos::model()->findByAttributes(array('entidad'=>$myrow['entidad'],'folioVenta'=>$myrow['folioVenta']));


/*
if(isset($cI->seguro)){
$cli=Clientes::model()->findByAttributes(array('entidad'=>$myrow['entidad'],'numCliente'=>$cI->seguro));
//$result40=mysql_db_query($basedatos,$sSQL40);
//$myrow40 = mysql_fetch_array($result40);
//print $cli->nomCliente;
}else{
$myrow40['nomCliente']='Particular';
}
	*/  ?>    
    
    
   <tr  > 
       
             <td >
             	
             		<?php echo $a;?>
             		<i class="icon-search icon-white"></i>
             		
             	</td>
             
       
       
       
      <td ><?php echo $myrow['usuario'];
?></td>
      
      

      
      
       <td ><?php echo $myrow['nombre'].' '.$myrow['aPaterno'].' '.$myrow['aMaterno'];
?></td>     
      
           <td ><?php echo $myrow['tipoUsuario'];
?></td>        
        
        
            <td >
            	<span class="glyphicon glyphicon-search"></span>
<a href="index.php?r=usuarios/view&amp;id=<?php echo $myrow['folio'];?>">
	Editar
</a>
            </td>         
        
     </tr>
           
    <?php  }?>
    
     
</table>





<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
