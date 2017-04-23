<head>
	<title><?php echo strtoupper($issue['issueID']); ?> - Logi</title>
</head>
<h2><?php echo strtoupper($issue['title']); ?></h2>
<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Name</td><td style="text-transform: uppercase;"><?php echo strtoupper($vehicle['name']); ?></td></tr>
	<tr><td style="font-weight: bold">Rego</td><td><?php echo $vehicle['rego']; ?></td></tr>
	<tr><td style="font-weight: bold">Capacity</td><td><?php echo $vehicle['capacity']; ?></td></tr>
	<tr><td style="font-weight: bold">Category</td><td><?php echo $vehicle['category']; ?></td></tr>
	<tr><td style="font-weight: bold">License Type</td><td><?php echo $vehicle['license_type']; ?></td></tr>
	<tr><td style="font-weight: bold">Make</td><td><?php echo $vehicle['make']; ?></td></tr>
	<tr><td style="font-weight: bold">Year</td><td><?php echo $vehicle['year']; ?></td></tr>
	<tr><td style="font-weight: bold">Model</td><td><?php echo $vehicle['model']; ?></td></tr>
</table>
<hr />
<!--Action buttons-->

<!--Create Button buttons-->
<a class="btn btn-default" role="button" href="<?php echo site_url('/vehicles/create'); ?>">Create Vehicle</a>

<!--Edit Button-->
<a class="btn btn-info" role="button" href="<?php echo site_url('/vehicles/edit/'. $vehicle['name']); ?>">Edit Vehicle</a>

<!--Delete Button (as form to protect against abuse)-->
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/vehicles/delete/'.$vehicle['name'], $attributes); ?>
	<input type="submit" value="Delete Vehicle" class="btn btn-danger"/>
</form>