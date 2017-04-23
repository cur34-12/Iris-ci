<head>
	<title>Create Issue - Logi</title>
</head>

<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">EquipmentID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="equipmentID" placeholder="">
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
			<input type="text" class="form-control" name="make" placeholder="Eg. Chainsaw took a fall and now the break no longer engages when activated.">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reporting User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="reporterID" placeholder="">
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Reported Date</label>
	        <div class='input-group date' id='datetimepicker1'>
	            <input type='text' class="form-control" name="reported_date"/>
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
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
			<select id="assigned_user" name="assigned_user" class="form-control" >
				<?php foreach($usernames as $username): ?>
        				<option value="user_id"><?php echo $username['username']: ?></option>
        		<?php endforeach: ?>
			</select>
		</div>
	</div>
	<div class="form-group" style="display: none;">
		<div class="col-sm-10">
			<input type="text" class="form-control" name="status" value="New">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Created By</label>
		<div class="col-sm-10">
			<input id="createdByID" type="text" class="form-control" name="createdByID" placeholder="" readonly>
		</div>
	</div>
	<script>
		$(function() {
			$( '#createdByID' ).val('<?php echo $auth_username; ?>'); 
		});
	</script>


	<button type="submit" class="btn btn-default">Create</button>
</form>