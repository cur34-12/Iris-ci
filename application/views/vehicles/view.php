<h2><?php echo strtoupper($vehicle['veh_name']); ?></h2>
<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Name</td><td style="text-transform: uppercase;"><?php echo strtoupper($vehicle['veh_name']); ?></td></tr>
	<tr><td style="font-weight: bold">Rego</td><td><?php echo $vehicle['veh_rego']; ?></td></tr>
	<tr><td style="font-weight: bold">Capacity</td><td><?php echo $vehicle['veh_capacity']; ?></td></tr>
	<tr><td style="font-weight: bold">Category</td><td><?php echo $vehicle['veh_category']; ?></td></tr>
	<tr><td style="font-weight: bold">License Type</td><td><?php echo $vehicle['veh_license_type']; ?></td></tr>
	<tr><td style="font-weight: bold">Make</td><td><?php echo $vehicle['veh_make']; ?></td></tr>
	<tr><td style="font-weight: bold">Year</td><td><?php echo $vehicle['veh_year']; ?></td></tr>
	<tr><td style="font-weight: bold">Model</td><td><?php echo $vehicle['veh_model']; ?></td></tr>
</table>
<hr />
<!--Action buttons-->

<!--Create Button buttons-->
<a class="btn btn-default" role="button" href="<?php echo site_url('/vehicles/create'); ?>">Create Vehicle</a>

<!--Edit Button-->
<a class="btn btn-info" role="button" href="<?php echo site_url('/vehicles/edit/'. $vehicle['veh_id']); ?>">Edit Vehicle</a>

<a href="<?php echo site_url('/vehicles/delete/'. $vehicle['veh_id']); ?>"
   class="btn btn-large btn-primary" data-toggle="confirmation"
   data-btn-ok-label="Delete" data-btn-ok-icon="glyphicon glyphicon-ban-circle"
   data-btn-ok-class="btn-danger"
   data-btn-cancel-label="Return" data-btn-cancel-icon="glyphicon glyphicon-share-alt"
   data-btn-cancel-class="btn-success"
   data-title="Confirm Deletion" data-content="Are you sure you want to delete?">
    Delete
</a>
<script>
    $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]',
        // other options
    });
</script>