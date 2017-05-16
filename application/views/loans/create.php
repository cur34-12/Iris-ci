<head>
	<title>Create Equipment - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Create Loan</h2>
<!--<?php //echo validation_errors(); ?>-->
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">Member</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_member" placeholder="CHANGEME">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issued Equipment</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_equipment" placeholder="CHANGEME">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issuing Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_out_date" placeholder="CHANGEME">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issuing Officer</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_user" placeholder="CHANGEME">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Created Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_created_date" value="<?php echo date('d/m/y');?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Comments</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="loan_comments" placeholder="CHANGEME"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Loan Group</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_group" placeholder="CHANGEME">
		</div>
	</div>
	<script type="text/javascript">
        $(function () {
            $('#loan_out_date').datetimepicker({
            	useCurrent: true,
            	showTodayButton: true,
            	sideBySide: true,
            	format: 'YYYY-MM-DD',
            });
        });
    </script>
	<button type="submit" class="btn btn-default">Create</button>
</form>