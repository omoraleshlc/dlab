<?php
/* @var $this AdministracionController */

$this->breadcrumbs=array(
	'Catálogos',
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




<div class="barra_separadora">
     
     <span >Catálogos Generales</span>
     
</div>


   
<br>

   <script>
function cambiarBorde(id)
{
document.getElementById(id).style.border="1px #42C0FB solid";
document.getElementById(id).style.background ='';
}
</script>

<script>
function normal(id)
{
document.getElementById(id).style.border="";
document.getElementById(id).style.background ="";
}
</script>




<div class="row-fluid" >
            <ul class="thumbnails">
              
                
                
                <a href="index.php?r=/clientes">  
              <li class="span2">
                  
                <div id="1" class="thumbnail" onmouseover="javascript:cambiarBorde('1');" onmouseout="normal('1');">
                  <img height="40" src="./images/labClientes.jpg" width="40" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <small>Clientes</small>                
                    
                  </div>
                </div>
                  
              </li>
                </a>
              
                
                  
               <li class="span2">
                <div id="2" class="thumbnail" onmouseover="javascript:cambiarBorde('2');" onmouseout="normal('2');">
                    <a href="index.php?r=/usuarios">
                        <div align="center"><img height="40" width="40" src="./images/labUsuarios.jpg" data-src="holder.js/160x120" alt=""></div>
                  <div class="caption" align="center">
                   <small>Usuarios</small>       
                   
                  </div>
                  </a>
                </div>
              </li>
                
          </div>
         </div>