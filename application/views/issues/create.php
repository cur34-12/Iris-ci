<head>
	<title>Create Issue - Logi</title>
</head>

<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">EquipmentID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="equipmentID" placeholder="">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="title" placeholder="Eg. Chainbreak non-functional">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="make" placeholder="Eg. Chainsaw took a fall and now the break no longer engages when activated.">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reporting User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="reporterID" placeholder="">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Reported Date</label>
	        <div class='col-sm-10 input-group date' id='datetimepicker1'>
	            <input type='text' class="form-control" />
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
	<div class="form-group" style="display: none;">
		<div class="col-sm-10">
			<input type="text" class="form-control" name="status" value="new">
		</div>
	</div>
	<button type="submit" class="btn btn-default">Create</button>
</form>