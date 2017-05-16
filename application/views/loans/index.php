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
			<th>Comment</th>
			<th>Last Modified</th>
			<th>Las Modified By</th>
		</tr>
	</thead>
	<!--Fields must be added to this table if an extra field is added to the relevant table in the database-->
	<tbody>
		<?php foreach($loan as $loan) : ?>
			<tr>
					<td><a href="<?php echo site_url('/loans/'. $loan['loan_id']); ?>"><?php echo $loan['loan_name']; ?></a></td>
					<td><?php echo $loan['loan_member']; ?></td>
					<td><?php echo $loan['loan_equipment']; ?></td>
					<td><?php echo $equipment['loan_out_date']; ?></td>
					<td><?php echo $equipment['loan_in_date']; ?></td>
					<td><?php echo $equipment['loan_user']; ?></td>
					<td><?php echo $equipment['loan_created_date']; ?></td>
					<td><a href="<?php echo site_url('/loans/groups/'. $equipment['loangroup_id']); ?>"><?php echo $loan['loangroup_name']; ?></td>
					<td><?php echo $equipment['loan_coment']; ?></td>
					<td><?php echo $equipment['eq_inspection_frequency']; ?></td>
					<td><?php echo $equipment['eq_id']; ?></td>
					<td><img src="<?php echo site_url('/barcodes/equipment/EAN7-'. $equipment['eq_id'].'.jpg'); ?>" /></td>
					<td><img src="<?php echo site_url('/barcodes/equipment/QR-'. $equipment['eq_id'].'.jpg'); ?>" /></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="equipment/edit/<?php echo $equipment['eq_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="equipment/create">Create Equipment</a>
<a class="btn btn-info" role="button" href="equipment/edit">Edit Equipment</a>
<a class="btn btn-danger" role="button" href="equipment/delete">Delete Equipment</a> 