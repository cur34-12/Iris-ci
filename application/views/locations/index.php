<h2 style="text-transform: uppercase;">Locations</h2>
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Manager</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($locations as $location) : ?>
			<tr>
					<td><a href="<?php echo site_url('/locations/'. $location['loc_id']); ?>"><?php echo $location['loc_id']; ?></a></td>
					<td><a href="<?php echo site_url('/locations/'. $location['loc_id']); ?>"><?php echo $location['loc_name']; ?></td>
					<td><?php echo $location['loc_manager']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="locations/edit/<?php echo $location['loc_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a class="btn btn-default" role="button" href="locations/create">Create Location</a>
<!--<a class="btn btn-info" role="button" href="locations/edit">Edit Location</a>-->
<a class="btn btn-danger" role="button" href="locations/delete">Delete Location</a>