<head>
	<title>Loans - Logi</title>
</head>
<!--This table needs to be changed to be relevant for equipment, once its done it can be copied to any other relevant page that lists equipment-->

<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Member</th>
			<th>Item</th>
			<th>Loan Date</th>	
			<th>Return Date</th>
			<th>Issuing Officer</th>
			<th>Created Date</th>
			<th>Loan Group</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($loans as $loan) : ?>
			<tr>
					<td><a href="<?php echo site_url('/loans/'. $loan['loan_id']); ?>"><?php echo $loan['loan_id']; ?></a></td>
					<td><?php echo $loan['member_name']; ?></td>
					<td><?php echo $loan['eq_name']; ?></td>
					<td><?php echo $loan['loan_out_date']; ?></td>
					<td><?php echo $loan['loan_in_date']; ?></td>
					<td><?php echo $loan['loan_user']; ?></td>
					<td><?php echo $loan['loan_created_date']; ?></td>
					<td><a href="<?php echo site_url('/loan-groups/'. $loan['loangroup_id']); ?>"><?php echo $loan['loangroup_name']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="loans/edit/<?php echo $loan['loan_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="loans/create">New Loan</a>
<a class="btn btn-info" role="button" href="loans/edit">Edit Loan</a>
<a class="btn btn-danger" role="button" href="loans/delete">Delete Loan</a> 