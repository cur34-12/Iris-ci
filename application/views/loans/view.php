<head>
	<title><?php echo $loan['loan_id']; ?> - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Loan - <?php echo $loan['loan_id']; ?></h2>

<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Loan ID</td><td><?php echo $loan['loan_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Member</td><td><?php echo $loan['member_name']; ?></td></tr><!--join from other table-->
	<tr><td style="font-weight: bold">Equipment</td><td><a href="<?php echo site_url('/equipment/'. $loan['eq_id']); ?>"><?php echo $loan['eq_name']; ?></a></td></tr>
	<tr><td style="font-weight: bold">Date Issued</td><td><?php echo $loan['loan_out_date']; ?></td></tr>
	<tr><td style="font-weight: bold">Date Returned</td><td><?php echo $loan['loan_in_date']; ?></td></tr>
	<tr><td style="font-weight: bold">Issuing Officer</td><td><?php echo $loan['loan_user']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Creation Date</td><td><?php echo $loan['loan_created_date']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group</td><td><a href="<?php echo site_url('/loan-groups/'. $loan['loangroup_id']); ?>"><?php echo $loan['loangroup_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Comment</td><td><?php echo $loan['loan_comment']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Last Modified</td><td><?php echo $loan['loan_last_modified']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Last Modified User</td><td><?php echo $loan['loan_last_modified_user']; ?></td></tr>
</table>

<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/loans/create'); ?>">Create Loan</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/loans/edit/'. $loan['loan_id']); ?>">Edit Loan</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/loans/delete/'.$loan['loan_id'], $attributes); ?>
	<input type="submit" value="Delete Loan" class="btn btn-danger"/>
</form>

