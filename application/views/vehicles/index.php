<head>
	<title>Vehicles - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Vehicles</h2>
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Name</th>
			<th>Rego</th>
			<th>Capacity</th>
			<th>Category</th>
			<th>License Type</th>
			<th>Make</th>
			<th>Year</th>
			<th>Model</th>
			<th>Edit</th>
		</tr>
	</thead>
	<!--Fields must be added to this table if an extra field is added to the vehicles table in the database-->
	<tbody>
		<?php foreach($vehicles as $vehicle) : ?>
			<tr>
					<td style="text-transform: uppercase;"><a href="<?php echo site_url('/vehicles/'. $vehicle['veh_name']); ?>"><?php echo $vehicle['veh_name']; ?></a></td>
					<td><?php echo $vehicle['veh_rego']; ?></td>
					<td><?php echo $vehicle['veh_capacity']; ?></td>
					<td><?php echo $vehicle['veh_category']; ?></td>
					<td><?php echo $vehicle['veh_license_type']; ?></td>
					<td><?php echo $vehicle['veh_make']; ?></td>
					<td><?php echo $vehicle['veh_year']; ?></td>
					<td><?php echo $vehicle['veh_model']; ?></td>
					<td><a href="<?php echo $vehicle['veh_list']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="vehicles/edit/<?php echo $vehicle['veh_name']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a class="btn btn-default" role="button" href="vehicles/create">Create Vehicle</a>
<a class="btn btn-info" role="button" href="vehicles/edit">Edit Vehicle</a> 
<a class="btn btn-danger" role="button" href="vehicles/delete">Delete Vehicle</a> 