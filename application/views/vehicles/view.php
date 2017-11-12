<h2><?php echo strtoupper($vehicle['veh_name']); ?></h2>
<table class="table table-striped table-hover ">
	<tbody>
		<tr><td style="font-weight: bold">Name</td><td style="text-transform: uppercase;"><?php echo strtoupper($vehicle['veh_name']); ?></td></tr>
		<tr><td style="font-weight: bold">Rego</td><td><?php echo $vehicle['veh_rego']; ?></td></tr>
		<tr><td style="font-weight: bold">Capacity</td><td><?php echo $vehicle['veh_capacity']; ?></td></tr>
		<tr><td style="font-weight: bold">Category</td><td><?php echo $vehicle['veh_category']; ?></td></tr>
		<tr><td style="font-weight: bold">License Type</td><td><?php echo $vehicle['veh_license_type']; ?></td></tr>
		<tr><td style="font-weight: bold">Make</td><td><?php echo $vehicle['veh_make']; ?></td></tr>
		<tr><td style="font-weight: bold">Year</td><td><?php echo $vehicle['veh_year']; ?></td></tr>
		<tr><td style="font-weight: bold">Model</td><td><?php echo $vehicle['veh_model']; ?></td></tr>
	</tbody>
</table>
<hr />

<a class="btn btn-primary" role="button" href="<?php echo site_url('/vehicles/create'); ?>">Create Vehicle</a>
<a class="btn btn-warning" role="button" href="<?php echo site_url('/vehicles/edit/'. $vehicle['veh_id']); ?>">Edit Vehicle</a>