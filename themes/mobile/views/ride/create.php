<?php
/* @var $this RideController */
/* @var $model Ride */
?>




<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ride-form',
	'enableAjaxValidation'=>true,
)); ?>

	
<input type="hidden" id="datetime" name="datetime"/>   
	<?php echo $form->errorSummary($model); ?>
    
    
        <div data-role="fieldcontain">
        <label for="select-choice-1" class="select">התחל נסיעה:</label>
        <select name="ride_type" id="ride_type" data-native-menu="false" style="text-align: right;">
                <option value="">בחר...</option>
                        <?php
                            foreach ($taarif_types as $type)
                    {
                        echo "<option value='$type->id' taarif='$type->taarif'>$type->name</option>";
                    }
                ?>
	</select>
        </div>
<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time'); ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taarif_id'); ?>
		<?php echo $form->textField($model,'taarif_id'); ?>
		<?php echo $form->error($model,'taarif_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>
 */ ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'אישור' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    
</script>