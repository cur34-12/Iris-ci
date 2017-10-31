<h2><?php echo $event['event_title']; ?></h2>
<table class="table table-striped table-hover ">
	<tbody>
		<tr><td style="font-weight: bold">Title</td><td style="text-transform: uppercase;"><?php echo strtoupper($vehicle['veh_name']); ?></td></tr>
		<tr><td style="font-weight: bold">All Day Event</td><td><?php echo $vehicle['veh_rego']; ?></td></tr>
		<tr><td style="font-weight: bold">Start Date</td><td><?php echo $vehicle['veh_capacity']; ?></td></tr>
		<tr><td style="font-weight: bold">End Date</td><td><?php echo $vehicle['veh_category']; ?></td></tr>
		<tr><td style="font-weight: bold">Related Asset</td><td><?php echo $vehicle['veh_license_type']; ?></td></tr>
		<tr><td style="font-weight: bold">Event Owner</td><td><?php echo $vehicle['veh_make']; ?></td></tr>
		<tr><td style="font-weight: bold">Event Description</td><td><?php echo $vehicle['veh_year']; ?></td></tr>
=
	</tbody>
</table>
<hr />
<a class="btn btn-outline-secondary" role="button" href="<?php echo site_url('/events'); ?>">Calendar</a>
<a class="btn btn-outline-primary" role="button" href="<?php echo site_url('/events/create'); ?>">Create Event</a>
<a class="btn btn-outline-warning" role="button" href="<?php echo site_url('/events/edit/'. $vehicle['veh_id']); ?>">Edit Event</a>