<head>
	<title>Edit Loan Group - Logi</title>
</head>

<!--Fields must be added to this form if an extra field is added to the vehicles table in the database-->
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('loans/update', $attributes); ?>
<h2 style="text-transform: uppercase;">Edit - <?php echo $loangroup['loan_group_name']; ?></h2>
	<div class="form-group">
		<label class="control-label col-sm-2">Group Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_group_name" value="<?php echo $loangroup['loan_group_name']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Member</label>
		<div class="col-sm-10">
			<select id="iss_assigned_user" name="iss_assigned_user" class="form-control" >
				<?php foreach($members as $member): ?>
        				<option value="<?php echo $member['member_name']; ?>"><?php echo $member['member_name']; ?></option>
        		<?php endforeach; ?>
			</select>
			<script>
				$(function() {
					$( '#loan_group_member' ).val('<?php echo $loangroup['loan_group_member']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Last Modified By User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_equipment" value="<?php echo $this->ion_auth->user()->row()->username; ?>" hidden>
		</div>
	</div>
	<button type="submit" class="btn btn-default">Update</button>
</form>