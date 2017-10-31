<h2><?php echo $event['event_title']; ?></h2>
<table class="table table-striped table-hover ">
	<tbody>
		<tr><td style="font-weight: bold">Title</td><td style="text-transform: uppercase;"><?php echo $event['event_title']; ?></td></tr>
		<tr><td style="font-weight: bold">All Day Event</td><td><?php echo $event['event_all_day']; ?></td></tr>
		<tr><td style="font-weight: bold">Start Date</td><td><?php echo $event['event_start']; ?></td></tr>
		<tr><td style="font-weight: bold">End Date</td><td><?php echo $event['event_end']; ?></td></tr>
		<tr><td style="font-weight: bold">Related Asset</td><td><?php echo $event['event_related_asset']; ?></td></tr>
		<tr><td style="font-weight: bold">Event Owner</td><td><?php echo $event['event_owner']; ?></td></tr>
		<tr><td style="font-weight: bold">Event Description</td><td><?php echo $event['event_description']; ?></td></tr>
=
	</tbody>
</table>
<hr />
<a class="btn btn-outline-secondary" role="button" href="<?php echo site_url('/events'); ?>">Calendar</a>
<a class="btn btn-outline-primary" role="button" href="<?php echo site_url('/events/create'); ?>">Create Event</a>
<a class="btn btn-outline-warning" role="button" href="<?php echo site_url('/events/edit/'. $event['veh_id']); ?>">Edit Event</a>