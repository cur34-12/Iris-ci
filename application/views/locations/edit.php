<head>
	<title>Vehicles - Edit</title>
</head>
<h2 style="text-transform: uppercase;">Edit - Select a Vehicle</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<td>Vehicle</td>
</thead>
<?php foreach($vehicles as $vehicle) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/vehicles/edit/'. $vehicle['veh_name']); ?>"><?php echo $vehicle['veh_name']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>