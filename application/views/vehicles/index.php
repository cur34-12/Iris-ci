<head>
	<title>Vehicles - Logi</title>
</head>
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Name</th>
			<th>Rego</th>
			<th>Capacity</th>
			<th>LR License</th>
			<th>Make</th>
			<th>Model</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($vehicles as $vehicle) : ?>
			<tr>
					<td style="text-transform: uppercase;"><a href="<?php echo site_url('/vehicles/'. $vehicle['name']); ?>"><?php echo $vehicle['name']; ?></a></td>
					<td><?php echo $vehicle['rego']; ?></td>
					<td><?php echo $vehicle['capacity']; ?></td>
					<td><?php echo $vehicle['lr']; ?></td>
					<td><?php echo $vehicle['make']; ?></td>
					<td><?php echo $vehicle['model']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="vehicles/edit/<?php echo $vehicle['name']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a class="btn btn-default" role="button" href="vehicles/create">Create Vehicle</a>
<a class="btn btn-info" role="button" href="vehicles/create">Edit Vehicle</a>
<a class="btn btn-danger" role="button" href="vehicles/delete">Delete Vehicle</a>