<head>
	<title>Update Loan Group - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Update Loan Group</h2>

<!-- Set up the form using the CI form engine -->
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('loangroup/update', $attributes); ?>

<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->

	<!--Loan Group Name-->
	<div class="form-group">
		<label class="control-label col-sm-2">Group Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loangroup_name" value="CHANGEME">
		</div>
	</div>

	<!--Loan Group member-->
	<div class="form-group">
		<label class="control-label col-sm-2">Group Member</label>
		<div class="col-sm-10">
			<select id="loangroup_member" name="loangroup_member" class="form-control" >
				<?php foreach($members as $member): ?>
        				<option value="<?php echo $members['member_id']; ?>"><?php echo $members['member_name']; ?></option>
        		<?php endforeach; ?>
        	<script>
				$(function() {
					$( '#loangroup_member' ).val('<?php echo $loangroup['loangroup_member']; ?>'); 
				});
		</script>
		</div>
	</div>



	<!--Hidden Elements-->
	<div class="form-group">
		<!--Last Modified By User-->
		<input type="text" class="form-control" name="loangroup_last_modified_user" value="<?php echo $this->ion_auth->user()->row()->id; ?>" hidden>
	</div>	

	<button type="submit" class="btn btn-default">Update</button>
</form>