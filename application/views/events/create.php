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
				<option value="False">False</option>
				<option value="True">True</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Start Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_start" placeholder="" data-date-format="yyyy-mm-ddThh:ii">
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">End Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_end" placeholder="" data-date-format="yyyy-mm-ddThh:ii">
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Related Asset</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="event_relatedasset" placeholder="Eg. 00003453">
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
		</div>
	</div>
	<input type="hidden" class="form-control" name="event_createddate" value="<?php echo date('Y-m-d H:i:s'); ?>">
	<button type="submit" class="btn btn-primary">Create</button>
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