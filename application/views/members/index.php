<h2 style="text-transform: uppercase;">Members</h2>
<table class="table table-striped table-hover">
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
					<td><a href="<?php echo site_url('/issues/'. $issue['iss_id']); ?>"><?php echo $issue['iss_id']; ?></a></td>
					<td><a href="<?php echo site_url('/issues/'. $issue['iss_id']); ?>"><?php echo $issue['eq_name']; ?></td>
					<td><a class="btn btn-outline-warning btn-sm" role="button" href="issues/edit/<?php echo $issue['iss_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-outline-primary" role="button" href="issues/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>

<script>
    document.body.innerHTML = document.body.innerHTML.replace(/Invalid date/g, '&nbsp;');
</script>