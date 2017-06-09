<h2 style="text-transform: uppercase;">Vehicles</h2>
<hr />
<table id="content" class="table table-striped table-hover dataTable">
	<thead class="thead-inverse">
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
	<tbody>
		<?php foreach($vehicles as $vehicle) : ?>
			<tr>
				<td style="text-transform: uppercase;"><a href="<?php echo site_url('/vehicles/view/'. $vehicle['veh_id']); ?>"><?php echo $vehicle['veh_name']; ?></a></td>
				<td><?php echo $vehicle['veh_rego']; ?></td>
				<td><?php echo $vehicle['veh_capacity']; ?></td>
				<td><?php echo $vehicle['veh_category']; ?></td>
				<td><?php echo $vehicle['veh_license_type']; ?></td>
				<td><?php echo $vehicle['veh_make']; ?></td>
				<td><?php echo $vehicle['veh_year']; ?></td>
				<td><?php echo $vehicle['veh_model']; ?></td>
				<td><a class="btn btn-warning btn-sm" role="button"  href="vehicles/edit/<?php echo $vehicle['veh_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a class="btn btn-primary" role="button" href="vehicles/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>
