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

    


<ul class="nav nav-tabs" id="myTab">

    <li><a href="#altaOrden" name="altaOrden"><small>Nueva </small> <span class="glyphicon glyphicon-plus"></span></a></li>
    <li><a href="#pendientes" name="pendientes"><small>Pendientes </small><span class="glyphicon glyphicon-list-alt"></span>
</a></li>
    <li><a href="#enProceso" name="enProceso"><small>En Proceso <span class="glyphicon glyphicon-list-alt"></span>
</small></a></li>
    <li><a href="#terminadas" name="terminadas"><small>Terminadas <span class="glyphicon glyphicon-list-alt"></span>
</small></a></li>
    <li><a href="#resumen" name="resumen"><small>Resumen <span class="glyphicon glyphicon-stats"></span>
</small></a></li>
   
</ul>

    
    
    
    
<div class="tab-content"  ><!--TAB CONTENT-->
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="tab-pane" id="altaOrden"><!--TAB1 #altaOrden-->
            
        <br>
        <div class="panel panel-primary">
            
                 
                 
                 



      <div class="panel-heading"></div>   












                <form name="formaCaptura" class="form" method="post"  >


          




                    
       
                    


          <table width="800" class="table table-condensed table-hover" >

              

    
               




       <tr>
              <td width="152" scope="col"><div align="left"><h6>Usuario</h6></div></td>
              <td width="451" scope="col"><label> </label>
                  <div align="left">
                    <input class="form-control input-sm span2" tabindex = "1" placeholder="Usuario Solicitante" id="focusedInput" type="text" name="nombre" value=""/>
                </div></td>
            </tr>





          


















            





<script>

var win = null;
function nueva(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
if(win.window.focus){win.window.focus();}
}

</script>

              <tr>

                
                  
              <td ><div  align="left"><small>Tipo Soporte</small><a href="#altaOrden" onClick="nueva('../ventanas/v_tipo_soporte.php?almacen=')">
          <span data-toggle="tooltip" title="Agregar tipos de soporte.." class="glyphicon glyphicon-plus-sign small"></span>
</a></div></td>
              
            </tr>









            



              <tr>

              <td scope="col"><div align="left"><h6>Extension</h6></div></td>
              <td scope="col">

                <small>

                    <input class="form-control input-sm span1" tabindex = "6" placeholder="" id="focusedInput" type="text" name="extension" value=""></input>

                </small>

              </label></td>
            </tr>



     

      <tr>
          <td width="152" scope="col"><div align="left"><h6>Usuario Ejecutor</h6></div></td>
              <td width="451" scope="col">                  
                  <div align="left">
                    <input class="form-control input-sm span2" tabindex = "7" placeholder="Usuario Ejecutor" id="focusedInput" type="text" name="usuarioAplicacion" value=""/>
                </div></td>
            </tr> 
           



              <tr>
              <td width="152" scope="col"><div align="left"><h6>Descripción del Servicio</h6></div></td>
              <td width="451" >
                  <div align="left">
                    <textarea name="observaciones" tabindex = "8" class="form-control input-sm span2" placeholder="Observaciones" cols="50" rows="5"  /></textarea>
                </div></td>
            </tr> 

     

               <tr>
              <td  >&nbsp;</td>
              <td ><input class="btn btn-primary btn-sm span2" tabindex = "9" name="generaOrden" type="submit"  id="actualizar" value="Generar Orden" /></td>
            </tr>    

          </table>





        </form>
    







                      </div>   
    </div>
    
    
    

        
        
            
            
            
            
            
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          
        
<div class="tab-pane" id="pendientes"><!--TAB2 #pendientes-->
    
  
    
    <br>


             <!--pendientes-->    
         <div class="panel panel-primary">
                <div class="panel-heading"></div>     



          <table  width="800"  class="table table-condensed table-hover" >


              <form>


 
                  
                  
                  
                  
                 
                

          </table>
            
       
            
            
            
         </div>
             
   
             
             
             
             
             







             
             
        </div><!--DIV DEL TAB FINALIZA-->

    
    
    
    
    
            

           
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="tab-pane" id="enProceso"><!--TAB3 #enProceso-->
                
                
                
                
     
                



                 <!--en proceso-->    
 

<div class="panel panel-primary">
      <div class="panel-heading"></div>     
    
    
            <table width="800"  class="table table-condensed table-hover" >
 
          


              
                      
              
              
              
              

                          




            <td>
  <!-- Button trigger modal -->
  
  

  
  
  
  
<!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $a3;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Observaciones</h4>
        </div>
        <div class="modal-body">
            
<form name="forma1" method="post">

<table  width="400" class="table table-striped"  align="center">
    
<tr>      
 

    
     <td scope="col"><div align="center">
<input type="hidden" value="" name="keySOP">
    <input type="hidden" value="<?php //echo $_GET['entidad'];?>" name="entidad">
<textarea name="descripcion" cols="50" rows="5"></textarea>
              
     
    </div></td>
    
    

    
</tr>
    <tr>
         <td>
    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-success" name="ADDOS" value="Guardar"></input>
        </div>        
        
    </td>   
    </tr>      
      
  
            
                  
      
      

              
              
         

    
    
<tr>    

  
 
  
  
  
     <td >
 
       
   </td>
  
    
      
      
      
      
      
      
    </tr>
    </table>
    


</form>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->    
                
            </td>


                    <td >




                  </td>



                  </tr> 


              </table>
</div>
                
    










<br>
    <div class="alert alert-warning">
    No existen registros!
    </div>



    </div>
    
    
    
    
     
            
            
            
                            

            
            
            
            
            
            
            


                   

            
            
            
            
            
                       
              
    </div> 
  
  
  
  
  
  
  
    




   
</div>    <!--div de container tabs-->





















<script>
    //$("#nav nav-tabs").tabs("div.tab-pane", {event:'mouseover'});
    //$('#myTab a').click(function (e) {
    $('#myTab a').mouseover(function (e) {
        e.preventDefault()
        $(this).tab('show')
         $('li.selected a').focus()
    });    


function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name,"",-1);
}

$("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
    createCookie("tabActive",$(e.target).attr("href").substr(1),1);
    console.log(readCookie("tabActive"));
});
//console.log(document.cookie);

var id=readCookie("tabActive");
console.log(id);
$('#myTab a[href="#' + id + '"]').tab('show');
$("#myTab").tabs("div.description", {event:'mouseover'});
//console.log(readCookie("tabActive"));
    /*
    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
    $("#myTab").tabs("div.description", {event:'mouseover'});
    */
</script> 


    
    
    
    
    
    
    
    
    
    <!--
  <script src="../bt/js/jquery-1.8.3.min.js"></script>
<script>
    var $j = jQuery.noConflict();
$j(document).ready(function() {
    $j("#content div").hide(); // Initially hide all content
    $j("#tabs li:first").attr("id","current"); // Activate first tab
    $j("#content div:first").fadeIn(); // Show first tab content
    
    $j('#tabs a').mouseover(function(e) {
        e.preventDefault();
        if ($j(this).closest("li").attr("id") == "current"){ //detection for current tab
         return       
        }
        else{             
        $j("#content div").hide(); //Hide all content
        $j("#tabs li").attr("id",""); //Reset id's
        $j(this).parent().attr("id","current"); // Activate this
        $j('#' + $j(this).attr('name')).fadeIn(); // Show content for current tab
        }
    });
});
</script>        
    -->
    
    
    <script>  
        $('.datepicker').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true,
            dateFormat: "yy-mm-dd"      
        });
    </script>  
    
  
  
  
  
  
  
