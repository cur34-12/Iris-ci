<head>
	<title><?php echo strtoupper($equipment['name']); ?> - Logi</title>
</head>
<h2><?php echo $equipment['name']; ?></h2>

<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/equipment/create'); ?>">Create Equipment</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/vehicles/edit/'. $vehicle['name']); ?>">Edit Equipment</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/equipment/delete/'.$equipment['name'], $attributes); ?>
	<input type="submit" value="Delete Equipment" class="btn btn-danger"/>
</form>

