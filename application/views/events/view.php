<h2><?php echo $event['event_title']; ?></h2>
<table class="table table-striped table-hover ">
	<tbody>
		<tr><td style="font-weight: bold">Title</td><td><?php echo $event['event_title']; ?></td></tr>
		<tr><td style="font-weight: bold">All Day Event</td><td><?php echo $event['event_allday']; ?></td></tr>
		<tr><td style="font-weight: bold">Start Date</td><td><?php echo $event['event_start']; ?></td></tr>
		<tr><td style="font-weight: bold">End Date</td><td><?php echo $event['event_end']; ?></td></tr>
		<tr><td style="font-weight: bold">Related Asset</td><td><?php echo $event['event_relatedasset']; ?></td></tr>
		<tr><td style="font-weight: bold">Event Owner</td><td><?php echo $event['event_owner']; ?></td></tr>
		<tr><td style="font-weight: bold">Event Description</td><td><?php echo $event['event_description']; ?></td></tr>
		<tr><td style="font-weight: bold">Event Category</td><td><?php echo $event['event_category']; ?></td></tr>
		<tr><td style="font-weight: bold">Created By</td><td><?php echo $event['event_createdby']; ?></td></tr>
		<tr><td style="font-weight: bold">Created On</td><td><?php echo $event['event_createddate']; ?></td></tr>
		<tr><td style="font-weight: bold">Last Edited By</td><td><?php echo $event['event_modifiedby']; ?></td></tr>
		<tr><td style="font-weight: bold">Last Edited On</td><td><?php echo $event['event_lastmodified']; ?></td></tr>
	</tbody>
</table>
<hr />
<a class="btn btn-outline-info" role="button" href="<?php echo site_url('/events'); ?>">Calendar</a>
<a class="btn btn-outline-primary" role="button" href="<?php echo site_url('/events/create'); ?>">Create Event</a>
<a class="btn btn-outline-warning" role="button" href="<?php echo site_url('/events/edit/'. $event['event_id']); ?>">Edit Event</a>
<a class="btn btn-outline-danger" role="button" href="<?php echo site_url('/events/delete/'. $event['event_id']); ?>">Delete Event</a>