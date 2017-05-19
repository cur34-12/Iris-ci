<head>
	<title>Loan Groups - Logi</title>
</head>
<!--This table needs to be changed to be relevant for equipment, once its done it can be copied to any other relevant page that lists equipment-->

<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Member</th>
			<th>Created Date</th>	
			<th>Last Updated</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($loangroups as $loangroup) : ?>
			<tr>
					<td><?php echo $loangroup['loangroup_id']; ?></td>
					<td><a href="<?php echo site_url('/loangroups/'. $loangroup['loangroup_id']); ?>"><?php echo $loangroup['loangroup_name']; ?></a></td>
					<td><?php echo $loangroup['member_name']; ?></td>
					<td><?php echo $loangroup['loangroup_created_date']; ?></td>
					<td><?php echo $loangroup['loangroup_last_modified']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="loans-groups/edit/<?php echo $loangroup['loangroup_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="loan-groups/create">New Loan Group</a>
<a class="btn btn-info" role="button" href="loan-groups/edit">Edit Loan Group</a>
<a class="btn btn-danger" role="button" href="loan-groups/delete">Delete Loan Group</a> 