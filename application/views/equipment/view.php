<head>
	<title><?php echo $equipment['eq_name']; ?> - Logi</title>
</head>
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
	<tr><td style="font-weight: bold">Material ID</td><td><?php echo $equipment['material_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Barcode Number</td><td><?php echo $equipment['ass_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Barcode</td><td><img src="<?php echo site_url('/barcode/code39/code39_'. $equipment['equipmentID'].'.jpg'); ?>" /></td></tr>
	<tr><td style="font-weight: bold">QR</td><td><img src="<?php echo site_url('/barcode/qr/qr_'. $equipment['equipmentID'].'.jpg'); ?>" /></td></tr>
</table>

<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/equipment/create'); ?>">Create Equipment</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/equipment/edit/'. $equipment['equipmentID']); ?>">Edit Equipment</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/equipment/delete/'.$equipment['equipmentID'], $attributes); ?>
	<input type="submit" value="Delete Equipment" class="btn btn-danger"/>
</form>

