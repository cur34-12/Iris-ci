<head>
	<title><?php echo strtoupper($vehicle['name']); ?> - Logi</title>
</head>
<table>
	<tr><td style="text-transform: uppercase;"><a href="<?php echo site_url('/vehicles/'. $vehicle['name']); ?>"><?php echo $vehicle['name']; ?></a></td></tr>
	<tr><td><?php echo $vehicle['rego']; ?></td></tr>
	<tr><td><?php echo $vehicle['capacity']; ?></td></tr>
	<tr><td><?php echo $vehicle['category']; ?></td></tr>
	<tr><td><?php echo $vehicle['lr']; ?></td></tr>
	<tr><td><?php echo $vehicle['make']; ?></td></tr>
	<tr><td><?php echo $vehicle['year']; ?></td></tr>
	<tr><td><?php echo $vehicle['model']; ?></td></tr>
</table>
<hr />
<!--Action buttons-->

<!--Create Button buttons-->
<a class="btn btn-default" role="button" href="<?php echo site_url('/vehicles/create'); ?>">Create Vehicle</a>

<!--Edit Button-->
<a class="btn btn-info" role="button" href="<?php echo site_url('/vehicles/edit/'. $vehicle['name']); ?>">Edit Vehicle</a>

<!--Delete Button (as form to protect against abuse)-->
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'), 'onsubmit' => 'return confirm('Do you really want to delete <?php echo strtoupper($vehicle['name']); ?>'); ?>
<?php echo form_open('/vehicles/delete/'.$vehicle['name'], $attributes); ?>
	<form onsubmit="return confirm('Do you really want to delete <?php echo strtoupper($vehicle['name']); ?>?');">
	<input type="submit" value="Delete Vehicle" class="btn btn-danger"/>
</form>