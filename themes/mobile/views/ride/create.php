<?php
/* @var $this RideController */
/* @var $model Ride */
?>




<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ride-form',
	//'enableAjaxValidation'=>true,
)); ?>

	
<input type="hidden" id="datetime" name="datetime"/>   
	<?php echo $form->errorSummary($model); ?>
    
<?php /*        
        <div data-role="fieldcontain">
        <label for="select-choice-1" class="select">התחל נסיעה:</label>
        <select name="ride_type" id="ride_type" data-native-menu="false" style="text-align: right;">
                <option value="">בחר יעד...</option>
                <?php
                    foreach ($taarif_types as $type)
                    {
                        echo "<option value='$type->taarif'>$type->name</option>";
                        
                    }
                    echo "<option value='0' data-position-to='window'>אחר</option>";
                ?>
	</select>
        </div> */ ?>
        <a href="#sourcePopup" id="openSourcePopup" data-rel="popup" data-position-to="window" data-role="button" data-inline="true">התחל נסיעה</a>
        
        <label for="textAmount">הזן סכום:</label>
        <input type="text" id="textAmount" name="textAmount"/>
        
        <div data-role="popup" id="sourcePopup" data-overlay-theme="e" data-theme="a">
        <fieldset data-role="controlgroup" data-type="horizontal" id="source">
            <legend>מקור נסיעה</legend>
            <?php
                    foreach ($sources as $source)
                    {
                        echo "<input type='radio' name='source_id' id=$source->id value=$source->id />";
                        echo "<label for=$source->id>$source->name</label>";  
                    }
                ?>
        </fieldset>
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

<div data-role="popup" id="amountPopup" data-overlay-theme="e" data-theme="a">
    <label for="textAmount">הזן סכום:</label>
    <input type="text" id="textAmount" name="textAmount"/>
    <a href="#" id="amountSubmit" data-role="button" data-inline="true">אישור</a>
</div>
<a href="#amountPopup" id="openPopup" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" style="display: none">Pop</a>

<script type="text/javascript">
    
    $("#amountDialog").popup();
    
    $("#ride_type").change(function () {
        
        var taarif = "";
        var optionOther;
        
        $("#ride_type option:selected").each(function () {
            taarif = $(this).val();
            if (taarif == 0)
                {
                    optionOther = $(this);
                    $("#openPopup").click();
                }
            
        });
        
        $("#amountSubmit").click(function(){
            optionOther.val($("#textAmount").val());
            //alert(optionOther.attr('taarif'));
           $('#amountPopup').popup('close');
           
        });
        
        //alert(taarif)
    });
    
</script>