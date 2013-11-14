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

	
    
        
      

  
    
    <div class="controls">
    <?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
    </div>
   
 
    
    <div class="controls">
    <?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
    </div>


<button class="btn btn-primary"><?php echo CHtml::submitButton('LOGIN'); ?></button>
    




<?php $this->endWidget(); ?>
    
    
    
</div><!-- form -->
