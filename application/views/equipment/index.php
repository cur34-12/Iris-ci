<head>
	<title>Equipment - Logi</title>
</head>

<?php $bar = new BARCODE(); ?>

<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Group</th>
			<th>Category</th>	
			<th>Consumable</th>
			<th>Size</th>
			<th>Brand</th>
			<th>Supplier</th>
			<th>In Service</th>
			<th>Asset Number</th>
			<th>Serial Number</th>
			<th>Equipment ID</th>
			<th>Barcode</th>
			<th>Edit</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach($equipment as $equipment) : ?>
			<tr>
					<td><a href="<?php echo site_url('/equipment/'. $equipment['eq_id']); ?>"><?php echo $equipment['eq_name']; ?></a></td>
					<td><?php echo $equipment['eq_description']; ?></td>
					<td><a href="<?php echo site_url('/equipment/group/'. $equipment['eqgroup_id']); ?>"><?php echo $equipment['eqgroup_name']; ?></td>
					<td><?php echo $equipment['eq_category']; ?></td>
					<td><?php echo $equipment['eq_consumable']; ?></td>
					<td><?php echo $equipment['eq_size']; ?></td>
					<td><?php echo $equipment['eq_brand']; ?></td>
					<td><?php echo $equipment['eq_supplier']; ?></td>
					<td><?php echo $equipment['eq_in_service']; ?></td>
					<td><?php echo $equipment['eq_asset_number']; ?></td>
					<td><?php echo $equipment['eq_serial']; ?></td>
					<td><?php echo $equipment['eq_id']; ?></td>
					<td><img src='<?php echo $bar->BarCode_link("Code39", $equipment['eq_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="equipment/edit/<?php echo $equipment['eq_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="equipment/create">Create Equipment</a>
<a class="btn btn-info" role="button" href="equipment/edit">Edit Equipment</a>
<a class="btn btn-danger" role="button" href="equipment/delete">Delete Equipment</a> 