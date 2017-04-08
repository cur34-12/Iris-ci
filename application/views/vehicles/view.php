<head>
	<title><?php echo strtoupper($vehicle['name']); ?> - Logi</title>
</head>
<h2><?php echo $vehicle['make']; ?></h2>

<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/vehicles/create'); ?>">Create Vehicle</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/vehicles/edit/'. $vehicle['name']); ?>">Edit Vehicle</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/vehicles/delete/'.$vehicle['name'], $attributes); ?>
	<input type="submit" value="Delete Vehicle" class="btn btn-danger"/>
</form>

