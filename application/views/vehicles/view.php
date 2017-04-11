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


<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;', 'id' => 'deleteVehicleForm'); ?>
<?php echo form_open('/vehicles/delete/'.$vehicle['name'], $attributes); ?>
	<input type="submit" value="Delete Vehicle" class="btn btn-danger"/>
</form>

<script>
$("#deleteVehicleForm").submit(function() {
    if ($("input[type='submit']").val() == "Confirm Delete") {
        alert("Are you sure you want to delte this vehicle?");
        $("input[type='submit']").val("Confirm Delete");
        return false;
    }
});
</script>