<?php
/* @var $this AdministracionController */

$this->breadcrumbs=array(
	'Administracion',
);
?>
<script>
function cambiarBorde(id)
{
document.getElementById(id).style.border="1px #42C0FB solid";
document.getElementById(id).style.background ='#F8FBEF';
}
</script>

<script>
function normal(id)
{
document.getElementById(id).style.border="";
document.getElementById(id).style.background ="";
}
</script>

<div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">Módulo de Administración Hospitalaria</a>
              </div>
            </div>


    


<div class="tabbable"> <!-- Only required for left/right tabs -->
    
    <ul class="nav nav-tabs">
    <li class="active">
        <a href="#tab1" data-toggle="tab">
            Reportes
        </a>
    </li>
    
    <li>
        <a href="#tab2" data-toggle="tab">
            Transacciones
        </a>
    </li>
    </ul>
        
        
        
        
    <div class="tab-content">
    <div class="tab-pane active" id="tab1">
    
 
<div class="row-fluid" >  
<ul class="thumbnails">    
<?php ###MOSTRAR PROGRAMAS
            
           

$connection=Yii::app()->db;   // assuming you have configured a "db" connection
$entidad='01';
$sql4="SELECT *
FROM `extensionmodules`
WHERE 
entidad='".$entidad."'
    and
mainmodulename = 'ADMINISTRACION'
AND mainmodule = 'REPORTES'
ORDER BY name ASC

";            
//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command4=$connection->createCommand($sql4);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader4=$command4->query();
// calling read() repeatedly until it returns false


while(($row4=$dataReader4->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
   $b+=1;
       /* 
                  print '<td>'.$b.'</td>';
                  print '<td>'.strtolower($row4["name"]).'</td>';
                  print '<td><div align="top"><button class="btn btn-mini btn-primary" type="button">Entrar</button></div></td>';
                  */
       
?>
            

<li class="span2">
                <div id="<?php print '<td>'.$b.'</td>';?>" class="thumbnail" onmouseover="javascript:cambiarBorde('<?php print '<td>'.$b.'</td>';?>');" onmouseout="normal('<?php print '<td>'.$b.'</td>';?>');">
                  <img height="40" src="./images/admin.jpg" width="40" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <p><?php print '<td>'.strtolower($row4["name"]).'</td>';?></p>                    
                    <a href="index.php?r=/administracion/<?php echo basename($row4["ruta"], '.php');?>" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>    
            
            
  
            
            
<?php         
}  
?>
</ul>    
</div>      
        
    
    
    </div>
   
    
        
        
        
        
        
        
        
        
     
        
        
 <div class="tab-pane" id="tab2">
        
  
            
<div class="row-fluid" >  
<ul class="thumbnails">    
<?php ###MOSTRAR PROGRAMAS
            
           

//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
//$entidad='01';
$sql4="SELECT *
FROM `extensionmodules`
WHERE 
entidad='".$entidad."'
    and
mainmodulename = 'ADMINISTRACION'
AND mainmodule = 'TRANSACCIONES'
ORDER BY name ASC
";            
//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command4=$connection->createCommand($sql4);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader4=$command4->query();
// calling read() repeatedly until it returns false


while(($row4=$dataReader4->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
   $b+=1;
       /* 
                  print '<td>'.$b.'</td>';
                  print '<td>'.strtolower($row4["name"]).'</td>';
                  print '<td><div align="top"><button class="btn btn-mini btn-primary" type="button">Entrar</button></div></td>';
                  */
       
?>
            

<li class="span2">
                <div id="<?php print '<td>'.$b.'</td>';?>" class="thumbnail" onmouseover="javascript:cambiarBorde('<?php print '<td>'.$b.'</td>';?>');" onmouseout="normal('<?php print '<td>'.$b.'</td>';?>');">
                  <img height="40" src="./images/admin.jpg" width="40" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <p><?php print '<td>'.strtolower($row4["name"]).'</td>';?></p>                    
                    <a href="index.php?r=/administracion" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>    
            
            
  
            
            
<?php         
}  
?>
</ul>    
</div>   
    

    </div>
    </div>
    </div>
    



  
          
                      
          