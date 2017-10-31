<h2 style="text-transform: uppercase;">Create Event</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('events/create', $attributes); ?>
    <div class="form-group">
        <label class="control-label col-sm-2">Event Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="event_title" placeholder="Eg. Maintenance Day">
        </div>
    </div>
    <div class="form-group">
		<label class="control-label col-sm-2">All Day Event</label>
		<div class="col-sm-10">
			<select id="event_all_day" name="event_all_day" class="form-control">
				<option value="No">No</option>
				<option value="Yes">Yes</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Start Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_start" placeholder="">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">End Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_end" placeholder="">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Related Asset</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_related_asset" placeholder="Eg. 00003453">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Event Owner</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_owner" placeholder="Eg. Steven Stevenson">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Event Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_related_asset" placeholder="Eg.Large">
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Create</button>
	<a class="btn btn-warning" role="button" href="/events">Cancel</a>
</form>