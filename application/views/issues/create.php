<head>
	<title>Create Issue - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Create Issue</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">Related Equipment</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_eq_id" id="iss_eq_id">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="title" placeholder="Eg. Chainbreak non-functional">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="iss_make" placeholder="Eg. Chainsaw took a fall and now the break no longer engages when activated."></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reporting User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_reporter_id" placeholder="">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Reported Date</label>
	        <div class='input-group date' id='iss_reported_date'>
	            <input type='text' class="form-control" name="iss_reported_date"/>
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#iss_reported_date').datetimepicker({
            	useCurrent: true,
            	showTodayButton: true,
            	sideBySide: true,
            	format: 'YYYY-MM-DD',
            });
        });
    </script>
	<div class="form-group">
		<label class="control-label col-sm-2">Assigned User</label>
		<div class="col-sm-10">
			<select id="iss_assigned_user" name="iss_assigned_user" class="form-control" >
				<?php foreach($usernames as $username): ?>
        				<option value="<?php echo $username['username']; ?>"><?php echo $username['username']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group" style="display: none;">
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_status" value="New">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Created By</label>
		<div class="col-sm-10">
			<input id="iss_creator_id" type="text" class="form-control" name="iss_creator_id" placeholder="" readonly>
		</div>
	</div>
	<script>
		$(function() {
			$( '#iss_creator_id' ).val('<?php echo $auth_username; ?>'); 
		});
	</script>


	<button type="submit" class="btn btn-default">Create</button>
</form>

<script type="text/javascript">
$(function() {
    
    //autocomplete
    $("#iss_eq_id").autocomplete({
        source: "search-equipment.php",
        minLength: 3
    });                

});
</script>