<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);

?>















<div class="container" align="center">
<h4>PROPORCIONE EL USUARIO Y CONTRASEÑA</h4>  




<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	), 'htmlOptions'=>array(
        'class'=>'form-control',
    ),

)
        ); ?>

	
    
        
      

  
    <table class="table table-responsive table-condensed table-hover">
    <th>
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->textField($model,'username'); ?>		
    </th>
    
    <th>
    	<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
    
    <?php echo $form->labelEx($model,'password'); ?>	
    </th>
    
    
    
    
    
 
    
    
<tr>
	<td><button class="btn btn-primary btn-mini" name="login" type="submit">LOGIN</button></td>
	<td></td>
</tr>

    </table>
    




<?php $this->endWidget(); ?>
    
    
    
</div><!-- form -->
