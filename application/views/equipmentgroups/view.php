<head>
	<title><?php echo $equipmentgroup['eqgroup_name']; ?> - Logi</title>

</head>

<?php $bar = new BARCODE(); ?>

<h2 style="text-transform: uppercase;">Equipment Group - <?php echo $equipmentgroup['eqgroup_name']; ?></h2>

<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold"><a href="<?php echo site_url('/equipment/groups/'. $equipmentgroup['eqgroup_id']); ?>"><?php echo $equipmentgroup['eqgroup_name']; ?></a></td>
	<tr><td style="font-weight: bold"><?php echo $equipmentgroup['eqgroup_description']; ?></td>
	<tr><td style="font-weight: bold"><?php echo $equipmentgroup['eqgroup_category']; ?></td>
	<tr><td style="font-weight: bold"><?php echo $equipmentgroup['eqgroup_inspection_frequency']; ?></td>
	<tr><td style="font-weight: bold"><?php echo $equipmentgroup['eqgroup_last_checked']; ?></td>
	<tr><td style="font-weight: bold"><?php echo $equipmentgroup['eqgroup_location']; ?></td>		
	<tr><td style="font-weight: bold">Barcode</td><td><img src='<?php $bar = new BARCODE(); echo $bar->BarCode_link("Code39", $equipmentgroup['eqgroup_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td></tr>
	<tr><td style="font-weight: bold">QR</td><td><img src='<?php $bar = new BARCODE(); echo $bar->QRCode_link('text', site_url('/equipment/groups/'. $equipmentgroup['eqgroup_id']), 100, 2); ?>' /></td></tr>
</table>
<h3>Related Groups</h3>
<table class="table table-striped table-hover ">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Location</th>
	</thead>
	<tbody>
		<?php foreach($relatedgroups as $relatedgroup) : ?>
			<tr>
				<td><a href="/equipment/groups/<?php echo $relatedgroup['eqgroup_id']; ?>"><?php echo $relatedgroup['eqgroup_id']; ?></a></td>
				<td><a href="/equipment/groups/<?php echo $relatedgroup['eqgroup_id']; ?>"><?php echo $relatedgroup['eqgroup_name']; ?></a></td>
				<td><?php echo $relatedgroup['eqgroup_description']; ?></td>
				<td><?php echo $relatedgroup['eqgroup_location']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>


<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/equipment/groups/create'); ?>">Create Equipment Group</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/equipment/groups/edit/'. $equipment['eqgroup_id']); ?>">Edit Equipment Group</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/equipment/groups/delete/'.$equipmentgroup['eqgroup_id'], $attributes); ?>
	<input type="submit" value="Delete Equipment Group" class="btn btn-danger"/>
</form>

