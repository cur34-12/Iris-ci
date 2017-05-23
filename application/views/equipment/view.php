<head>
	<title><?php echo $equipment['eq_name']; ?> - Logi</title>

</head>

<?php $bar = new BARCODE(); ?>

<h2 style="text-transform: uppercase;">Equipment - <?php echo $equipment['eq_name']; ?></h2>

<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Name</td><td><?php echo $equipment['eq_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Description</td><td><?php echo $equipment['eq_description']; ?></td></tr>
	<tr><td style="font-weight: bold">Consumable?</td><td><?php echo $equipment['eq_consumable']; ?></td></tr>
	<tr><td style="font-weight: bold">Category</td><td><?php echo $equipment['eq_category']; ?></td></tr>
	<tr><td style="font-weight: bold">Size</td><td><?php echo $equipment['eq_size']; ?></td></tr>
	<tr><td style="font-weight: bold">Brand</td><td><?php echo $equipment['eq_brand']; ?></td></tr>
	<tr><td style="font-weight: bold">Supplier</td><td><?php echo $equipment['eq_supplier']; ?></td></tr>
	<tr><td style="font-weight: bold">Item in service?</td><td><?php echo $equipment['eq_in_service']; ?></td></tr>
	<tr><td style="font-weight: bold">Inspection Frequency</td><td><?php echo $equipment['eq_inspection_frequency']; ?></td></tr>
	<tr><td style="font-weight: bold">Equipment ID</td><td><?php echo $equipment['eq_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Serial</td><td><?php echo $equipment['eq_serial']; ?></td></tr>
	<tr><td style="font-weight: bold">Barcode</td><td><img src='<?php $bar = new BARCODE(); echo $bar->BarCode_link("Code39", $equipment['eq_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td></tr>
	<tr><td style="font-weight: bold">QR</td><td><img src='<?php $bar = new BARCODE(); echo $bar->QRCode_link('text', site_url('/equipment/'. $equipment['eq_id']), 100, 2); ?>' /></td></tr>
</table>
<h3>Issues</h3>
<table>
	<thead>
		<th>ID</th>
		<th>Title</th>
		<th>Reported Date</th>
		<th>Status</th>
	</thead>
	<tbody>
		<?php foreach($issues as $issue) : ?>
			<tr>
				<td><?php echo $issue['iss_id']; ?></td>
				<td><?php echo $issue['iss_title']; ?></td>
				<td><?php echo $issue['iss_reported_date']; ?></td>
				<td><?php echo $issue['iss_status']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<p>(note this is currently 'all' not just 'open')</p>


<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/equipment/create'); ?>">Create Equipment</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/equipment/edit/'. $equipment['eq_id']); ?>">Edit Equipment</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/equipment/delete/'.$equipment['eq_id'], $attributes); ?>
	<input type="submit" value="Delete Equipment" class="btn btn-danger"/>
</form>

