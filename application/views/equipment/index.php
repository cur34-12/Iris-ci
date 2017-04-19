<head>
	<title>Equipment - Logi</title>
</head>
<!--This table needs to be changed to be relevant for equipment, once its done it can be copied to any other relevant page that lists equipment-->

<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Assembly</th>
			<th>Category</th>	
			<th>Consumable</th>
			<th>Size</th>
			<th>Brand</th>
			<th>Supplier</th>
			<th>In Service</th>
			<th>Inspection Frequency</th>
			<th>Equipment ID</th>
			<th>Barcode</th>
			<th>QR Code</th>
			<th>Edit</th>
		</tr>
	</thead>
	<!--Fields must be added to this table if an extra field is added to the relevant table in the database-->
	<tbody>
		<?php foreach($equipment as $equipment) : ?>
			<tr>
					<td><a href="<?php echo site_url('/equipment/'. $equipment['equipmentID']); ?>"><?php echo $equipment['name']; ?></a></td>
					<td><?php echo $equipment['description']; ?></td>
					<td><?php echo $equipment['assemblyID']; ?></td>
					<td><?php echo $equipment['category']; ?></td>
					<td><?php echo $equipment['consumable']; ?></td>
					<td><?php echo $equipment['size']; ?></td>
					<td><?php echo $equipment['brand']; ?></td>
					<td><?php echo $equipment['supplier']; ?></td>
					<td><?php echo $equipment['in_service']; ?></td>
					<td><?php echo $equipment['inspection_frequency']; ?></td>
					<td><?php echo $equipment['equipmentID']; ?></td>
					<td><img src="<?php echo site_url('/barcodes/equipment/EAN7-'. $equipment['equipmentID'].'.jpg'); ?>" /></td>
					<td><img src="<?php echo site_url('/barcodes/equipment/QR-'. $equipment['equipmentID'].'.jpg'); ?>" /></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="equipment/edit/<?php echo $equipment['equipmentID']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="equipment/create">Create Equipment</a>
<a class="btn btn-info" role="button" href="equipment/edit">Edit Equipment</a>
<a class="btn btn-danger" role="button" href="equipment/delete">Delete Equipment</a> 