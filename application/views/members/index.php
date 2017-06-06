<h2 style="text-transform: uppercase;">Members</h2>
<table id="content" class="table table-striped table-hover logiTable">
	<thead class="thead-inverse">
		<tr>
			<th>Member ID</th>
			<th>Name</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($members as $member) : ?>
			<tr>
					<td><a href="<?php echo site_url('/members/'. $member['member_id']); ?>"><?php echo $member['member_id']; ?></a></td>
					<td><a href="<?php echo site_url('/issues/'. $member['member_id']); ?>"><?php echo $member['member_name']; ?></td>
					<td><a class="btn btn-warning btn-sm" role="button" href="members/edit/<?php echo $member['member_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-primary" role="button" href="members/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>