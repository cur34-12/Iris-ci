<h2 style="text-transform: uppercase;">Edit Event - <?php echo $event['event_title']; ?></h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('events/update', $attributes); ?>
	<input type="hidden" class="form-control" name="event_id" value="<?php echo $event['event_id']; ?>">	
	<div class="form-group">
        <label class="control-label col-sm-2">Event Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="event_title" value="<?php echo $event['event_title']; ?>">
        </div>
    </div>
    <div class="form-group">
		<label class="control-label col-sm-2">All Day Event</label>
		<div class="col-sm-10">
			<select id="event_allday" name="event_allday" class="form-control">
				<option value="false">false</option>
				<option value="true">true</option>
			</select>
            <script>
				$(function() {
					$( '#event_allday' ).val('<?php echo $event['event_allday']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Start Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="event_start" name="event_start" data-date-format="yyyy-mm-ddThh:ii" value="<?php echo $event['event_start']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">End Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="event_end" name="event_end" data-date-format="yyyy-mm-ddThh:ii" value="<?php echo $event['event_end']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Related Asset</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_relatedasset" value="<?php echo $event['event_relatedasset']; ?>">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Event Owner</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_owner" value="<?php echo $event['event_owner']; ?>">
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
	<button type="submit" name="submit" class="btn btn-primary">Update</button>
	<a class="btn btn-warning" role="button" href="/events">Cancel</a>
</form>
<script type="text/javascript">
$(function () {
    $("#event_start").datetimepicker({
		format: "dd/mm/yy hh:ii",
		minView: 0,
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
    $("#event_end").datetimepicker({
		format: "yyyy-mm-dd hh:ii",
		minView: 0,
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
	});
});
</script>   