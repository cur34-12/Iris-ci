<head>
	<title>Edit Equipment - Logi</title>
</head>

<!--Fields must be added to this form if an extra field is added to the vehicles table in the database-->
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('loans/update', $attributes); ?>
<h2 style="text-transform: uppercase;">Edit - <?php echo $loan['loan_id']; ?></h2>
	<div class="form-group">
		<label class="control-label col-sm-2">Loan ID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_id" value="<?php echo $loan['loan_id']; ?>" disabled>
		</div>
	</div>
		<div class="form-group">
		<label class="control-label col-sm-2">Member</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_member" value="<?php echo $loan['member_name']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issued Equipment</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_equipment" value="<?php echo $loan['eq_name']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issuing Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="loan_out_date" name="loan_out_date" value="<?php echo $loan['loan_out_date']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Return Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="loan_in_date" name="loan_out_date" value="<?php echo $loan['loan_in_date']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issuing Officer</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_user" value="<?php echo $loan['loan_user']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Created Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_created_date" value="<?php echo $loan['loan_created_date']; ?>" disabled>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Last Modified By</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_created_date" value="<?php echo $this->ion_auth->user()->row()->username; ?>" hidden>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Comments</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="loan_comments" value="<?php echo $loan['loan_comment']; ?>"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Loan Group</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_group" value="<?php echo $loan['loan_group_name']; ?>">
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
	<button type="submit" class="btn btn-default">Update</button>
</form>