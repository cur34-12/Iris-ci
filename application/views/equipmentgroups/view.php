<head>
	<title><?php echo $equipmentgroup['eqgroup_name']; ?> - Logi</title>

</head>

<?php $bar = new BARCODE(); ?>

<h2 style="text-transform: uppercase;">Equipment Group - <?php echo $equipmentgroup['eqgroup_name']; ?></h2>

<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Name</td><td><?php echo $equipmentgroup['eqgroup_name']; ?></a></td>
	<tr><td style="font-weight: bold">Description</td><td><?php echo $equipmentgroup['eqgroup_description']; ?></td>
	<tr><td style="font-weight: bold">Category</td><td><?php echo $equipmentgroup['eqgroup_category']; ?></td>
	<tr><td style="font-weight: bold">Inspection Frequency</td><td><?php echo $equipmentgroup['eqgroup_inspection_frequency']; ?></td>
	<tr><td style="font-weight: bold">Last Checked</td><td><?php echo $equipmentgroup['eqgroup_last_checked']; ?></td>
	<tr><td style="font-weight: bold">Location</td><td><?php echo $equipmentgroup['eqgroup_location']; ?></td>		
	<tr><td style="font-weight: bold">Barcode</td><td><img src='<?php $bar = new BARCODE(); echo $bar->BarCode_link("Code39", $equipmentgroup['eqgroup_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td></tr>
	<tr><td style="font-weight: bold">QR</td><td><img src='<?php $bar = new BARCODE(); echo $bar->QRCode_link('text', site_url('/equipment-groups/'. $equipmentgroup['eqgroup_id']), 100, 2); ?>' /></td></tr>
</table>

<h3>Equipment</h3>
<table class="table table-striped table-hover ">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Consumable</th>
		<th>Barcode</th>
	</thead>
	<tbody>
		<?php foreach($items as $item) : ?>
			<tr>
				<td><a href="/equipment/<?php echo $item['eq_id']; ?>"><?php echo $item['eq_id']; ?></a></td>
				<td><a href="/equipment/<?php echo $item['eq_id']; ?>"><?php echo $item['eq_name']; ?></a></td>
				<td><?php echo $item['eq_description']; ?></td>
				<td><?php echo $item['eq_consumable']; ?></td>
				<td><img src='<?php $bar = new BARCODE(); echo $bar->BarCode_link("Code39", $item['eq_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/equipment-groups/create'); ?>">Create Equipment Group</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/equipment-groups/edit/'. $equipmentgroup['eqgroup_id']); ?>">Edit Equipment Group</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/equipment-groups/delete/'.$equipmentgroup['eqgroup_id'], $attributes); ?>
	<input type="submit" value="Delete Equipment Group" class="btn btn-danger"/>
</form>

