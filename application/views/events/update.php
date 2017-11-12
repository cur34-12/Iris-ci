<h2 style="text-transform: uppercase;">Edit Event - <?php echo $event['event_title']; ?></h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('events/update', $attributes); ?>
    <div class="form-group">
        <label class="control-label col-sm-2">Event Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="event_title" value="<?php echo $event['event_title']; ?>">
        </div>
    </div>
    <div class="form-group">
		<label class="control-label col-sm-2">All Day Event</label>
		<div class="col-sm-10">
			<select id="event_all_day" name="event_all_day" class="form-control">
				<option value="No">No</option>
				<option value="Yes">Yes</option>
			</select>
            <script>
				$(function() {
					$( '#event_all_day' ).val('<?php echo $event['event_all_day']; ?>'); 
				});
		    </script>
		</div>
        
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Start Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_start" value="<?php echo $event['event_start']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">End Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_end" value="<?php echo $event['event_end']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Related Asset</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_related_asset" value="<?php echo $event['event_related_asset']; ?>">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Event Owner</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_owner" value="<?php echo $event['event_event_owner']; ?>">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Event Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_description" value="<?php echo $event['event_description']; ?>">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Event Category</label>
		<div class="col-sm-10">
			<select id="event_category" name="event_category" class="form-control">
				<option value="Operations">Operations</option>
                <option value="Duties">Duties</option>
				<option value="Equipment">Equipment</option>
                <option value="Fleet">Fleet</option>
                <option value="Member Leave">Member Leave</option>
			</select>
            <script>
				$(function() {
					$( '#event_category' ).val('<?php echo $event['event_category']; ?>'); 
				});
		    </script>
		</div>
	</div>


	<button type="submit" name="submit" class="btn btn-outline-primary">Update</button>
	<a class="btn btn-outline-warning" role="button" href="/vehicles">Cancel</a>
</form>