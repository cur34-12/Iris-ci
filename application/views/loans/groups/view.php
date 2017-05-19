<head>
	<title><?php echo $loan['loangroup_name']; ?> - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Loan - <?php echo $loan['loangroup_name']; ?> - <?php echo $loan['member_name']; ?></h2>

<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Loan Group ID</td><td><?php echo $loangroup['loangroup_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Name</td><td><?php echo $loangroup['loangroup_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Member</td><td><a href="<?php echo site_url('/members/'. $loangroup['member_id']); ?>"><?php echo $loangroup['member_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Last Modified</td><td><?php echo $loangroup['loangroup_last_modified']; ?></a></td></tr>
	<tr><td style="font-weight: bold">Loan Group Last Modified by</td><td><?php echo $loangroup['loangroup_last_modified_user']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Created Date</td><td><?php echo $loan['loangroup_created_date']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Created By</td><td><?php echo $loan['loangroup_created_by']; ?></td></tr>
</table>

<hr />

<h3>Loaned Items</h3>

<table class="table table-striped table-hover ">
	<!-- Future location of the foreach loan object in the loangroup -->
</table>



<a class="btn btn-default" role="button" href="<?php echo site_url('/loans/groups/create'); ?>">Create Loan</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/loans/groups/edit/'. $loan['loan_id']); ?>">Edit Loan</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/loans/delete/'.$loan['loan_id'], $attributes); ?>
	<input type="submit" value="Delete Loan" class="btn btn-danger"/>
</form>

