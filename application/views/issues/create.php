<h2 style="text-transform: uppercase;">Create Issue</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/create', $attributes); ?>
	<div class="form-group">
		<label class="control-label col-sm-2">Related Equipment</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="iss_eq_name" name="iss_eq_name" value="<?php if (isset($equipment['eq_name'])) { echo $equipment['eq_name']; } ?>">
		</div>
	</div>
    <div class="form-group" style="display: none;">
        <label class="control-label col-sm-2">EQ ID</label>
        <div class="col-sm-10">
            <input type="text" name="iss_eq_id" id="iss_eq_id" value="<?php if (isset($equipment['eq_id'])) { echo $equipment['eq_id']; } ?>">
        </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issue Category</label>
		<div class="col-sm-10">
			<select id="iss_type" name="iss_type" class="form-control" >
					<option value="Repair/Fix"> Repair/Fix</option>
					<option value="Check/Inspection">Check/Inspection</option>
					<option value="Replacement">Replacement</option>
					<option value="Write Off">Write Off</option>
			</select>
		</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_title" id="iss_title" placeholder="Eg. Chainbreak non-functional">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" id="iss_description" name="iss_description" placeholder="Eg. Chainsaw took a fall and now the break no longer engages when activated."></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reporting Member</label>
		<div class="col-sm-10">
			<select id="iss_reporter_id" name="iss_reporter_id" class="form-control" >
				<?php foreach($members as $member): ?>
        				<option value="<?php echo $member['member_id']; ?>"><?php echo $member['member_name']; ?></option>
        		<?php endforeach; ?>
        	</select>
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Reported Date</label>
	        <div class='col-sm-10 input-group date'>
	            <input type='text' class="form-control" id='iss_reported_date' name="iss_reported_date" data-date="2012-10-16" data-date-format="yyyy-mm-dd" />
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Assigned User</label>
		<div class="col-sm-10">
			<select id="iss_assigned_user" name="iss_assigned_user" class="form-control" >
				<?php foreach($usernames as $username): ?>
        				<option value="<?php echo $username['user_id']; ?>"><?php echo $username['username']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
	</div>
    <div class="form-group" style="display: none;">
        <label class="control-label col-sm-2">Status</label>
        <div class="col-sm-10">
            <input type="text" name="iss_status" id="iss_status" value="New">
        </div>
    </div>
	<div class="form-group" style="display: none;">
		<label class="control-label col-sm-2">Creator ID</label>
		<div class="col-sm-10">
			<!-- Created By User -->
			<input id="iss_creator_id" type="text" name="iss_creator_id" value="">
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Create</button>
	<a class="btn btn-warning" role="button" href="/issues/">Cancel</a>
</form>

<script type="text/javascript">
$(function() {

    //autocomplete
    $("#iss_eq_name").autocomplete({
        source: "/search-equipment.php",
        minLength: 0,
		focus: function( event, ui ) {
        	$( "#iss_eq_name" ).val( ui.item.eq_name );
        	return false;
      	},
      	select: function( event, ui ) {
	        $( "#iss_eq_name" ).val( ui.item.eq_name );
        	$( "#iss_eq_id" ).val( ui.item.eq_id );
	        return false;
    	  }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
    	
      return $( "<li>" )
        .append( "<div>" + item.eq_name + " (" + "ID#: "+ item.eq_id + ", Serial#: " + item.eq_serial + ", Asset#:" + item.eq_asset_number + ")" )
        .appendTo( ul );
    };
  } );
</script>
<script type="text/javascript">
$(function () {
    $("#iss_reported_date").datetimepicker({
		format: "dd/mm/yy",
		minView: 2,
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
});
</script>   
