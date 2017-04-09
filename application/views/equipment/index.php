<head>
	<title>Equipment - Logi</title>
</head>
<!--This table needs to be changed to be relevant for equipment, once its done it can be copied to any other relevant page that lists equipment-->
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Name</th>
			<th>Rego</th>
			<th>Capacity</th>
			<th>LR License</th>
			<th>Make</th>
			<th>Year</th>
			<th>Model</th>
			<th>Edit</th>
		</tr>
	</thead>
	<!--Fields must be added to this table if an extra field is added to the relevant table in the database-->
	<tbody>
		<?php foreach($equipment as $equipment) : ?>
			<tr>
					<td style="text-transform: uppercase;"><a href="<?php echo site_url('/equipment/'. $equipment['name']); ?>"><?php echo $equipment['name']; ?></a></td>
					<td><?php echo $equipment['rego']; ?></td>
					<td><?php echo $equipment['capacity']; ?></td>
					<td><?php echo $equipment['lr']; ?></td>
					<td><?php echo $equipment['make']; ?></td>
					<td><?php echo $equipment['year']; ?></td>
					<td><?php echo $equipment['model']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="equipment/edit/<?php echo $equipment['name']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a class="btn btn-default" role="button" href="equipment/create">Create Equipment</a>
<a class="btn btn-info" role="button" href="vequipment/create">Edit Equipment</a> <!-- Not yet implemented the dropdown list of vehicles page-->
<a class="btn btn-danger" role="button" href="equipment/delete">Delete Equipment</a> <!-- Not yet implemented the dropdown list of vehicles page-->