<head>
	<title>Issues - Logi</title>
</head>
<!--This table needs to be changed to be relevant for equipment, once its done it can be copied to any other relevant page that lists equipment-->
<h2 style="text-transform: uppercase;">Issues</h2>
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Item</th>
			<th>Category</th>
			<th>Title</th>
			<th>Description</th>
			<th>Reporter</th>
			<th>Assigned User</th>
			<th>Reported Date</th>
			<th>Resolution Date</th>
			<th>Status</th>
			<th>Edit</th>
		</tr>
	</thead>
	<!--Fields must be added to this table if an extra field is added to the relevant table in the database-->
	<tbody>
		<?php foreach($issues as $issue) : ?>
			<tr>
					<td><a href="<?php echo site_url('/issues/'. $issue['iss_id']); ?>"><?php echo $issue['iss_id']; ?></a></td>
					<td><a href="<?php echo site_url('/equipment/view/'. $issue['eq_id']); ?>"><?php echo $issue['eq_name']; ?></a></td>
					<td><?php echo $issue['iss_type']; ?></td>
					<td><?php echo $issue['iss_title']; ?></td>
					<td><div data-toggle="tooltip" title="<?php echo $issue['iss_description']; ?>"><?php echo word_limiter($issue['iss_description'], 8); ?></div></td>
					<td><?php echo $issue['iss_reporter_id']; ?></td>
					<td><?php echo $issue['iss_assigned_user']; ?></td>
					<?php echo '<td><script type="text/javascript">var rp_date; $rp_date = moment(\''.$issue['iss_reported_date'].'\').format(\'DD-MM-YYYY\'); document.write($rp_date);</script></td>'; ?>
					<?php echo '<td><script type="text/javascript">var res_date; $res_date = moment(\''.$issue['iss_resolution_date'].'\').format(\'DD-MM-YYYY\'); document.write($res_date);</script></td>'; ?>
					<td><?php echo $issue['iss_status']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="issues/edit/<?php echo $issue['iss_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="issues/create">Create Issue</a>
<a class="btn btn-info" role="button" href="issues/edit">Edit Issue</a>
<a class="btn btn-danger" role="button" href="issues/delete">Delete Issue</a>

<script>
    document.body.innerHTML = document.body.innerHTML.replace(/Invalid date/g, '&nbsp;');
</script>