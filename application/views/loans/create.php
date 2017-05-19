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
			<select id="loan_member" name="loan_member" class="form-control" >
				<?php foreach($members as $member): ?>
    				<option value="<?php echo $member['member_id']; ?>"><?php echo $member['member_name']; ?></option>
    			<?php endforeach; ?>
        	</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issued Equipment</label>
		<div class="col-sm-10">
			<select id="loan_member" name="loan_equipment" class="form-control" >
				<?php foreach($equipment as $equipment): ?>
    				<option value="<?php echo $equipment['eq_id']; ?>"><?php echo $equipment['eq_name']; ?></option>
    			<?php endforeach; ?>
        	</select>
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
			<select id="iss_assigned_user" name="loan_user" class="form-control" >
				<?php foreach($usernames as $username): ?>
        				<option value="<?php echo $username['id']; ?>"><?php echo $username['username']; ?></option>
        		<?php endforeach; ?>
			</select>
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
			<textarea rows="3" class="form-control" name="loan_comments" placeholder="Eg. Replacement of old rainjacket"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Loan Group</label>
		<div class="col-sm-10">
			<select id="iss_assigned_user" name="loan_group" class="form-control" >
				<?php foreach($loangroups as $loangroup): ?>
        				<option value="<?php echo $loangroup['loangroup_id']; ?>"><?php echo $loangroup['loangroup_name']; ?> - <?php echo $loangroup['member_name']; ?></option>
        		<?php endforeach; ?>
			</select>
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