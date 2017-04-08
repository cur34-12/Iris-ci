<head>
	<title>Vehicles - Logi</title>
</head>
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Name</th>
			<th>Capacity</th>
			<th>LR License</th>
			<th>Brand</th>
			<th>Model</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($vehicles as $vehicle) : ?>
			<tr>
					<td style="text-transform: uppercase;"><a href="<?php echo site_url('/vehicles/'. $vehicle['name']); ?>"><?php echo $vehicle['name']; ?></a></td>
					<td><?php echo $vehicle['capacity']; ?></td>
					<td><?php echo $vehicle['lr']; ?></td>
					<td><?php echo $vehicle['brand']; ?></td>
					<td><?php echo $vehicle['model']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>