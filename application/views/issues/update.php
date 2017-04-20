<head>
	<title>Edit Issue - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Edit Issue <?php echo $issue['issueID']; ?></h2>
<!--Fields must be added to this form if an extra field is added to the vehicles table in the-->
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/update', $attributes); ?>
	<div class="form-group">
		<label class="control-label col-sm-2">Issue ID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="issueID" value="<?php echo $issue['issueID']; ?>" readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Equipment ID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="equipmentID"  value="<?php echo $issue['equipmentID']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="title" value="<?php echo $issue['title']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="make" value="<?php echo $issue['description']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Status</label>
		<div class="col-sm-10">
			<select id="status" name="status" class="form-control" >
				<option>New</option>
				<option>Current</option>
				<option>Referred</option>
				<option>Complete</option>
			</select>
			<script>
				$(function() {
					$( '#status' ).val('<?php echo $issue['status']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reporting User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="reporterID" value="<?php echo $issue['reporterID']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Assigned User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="assigned_user" value="<?php echo $issue['assigned_user']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reported Date</label>
		<div class="col-sm-10">
			<input id="reported_date" type="text" class="form-control" name="reported_date" value="<?php echo $issue['reported_date']; ?>" readonly>
		</div>
	</div>

	<script type="text/javascript">
		var parsed_date = moment('<?php echo $issue['reported_date']; ?>').format('DD-MM-YYYY'); 
		$(function() {
			$( '#reported_date' ).val('parsed_date'); 
		});
    </script>

    <div class="form-group">
		<label class="control-label col-sm-2">Date Resolved</label>
	        <div class='input-group date' id='datetimepicker1'>
	            <input type='text' class="form-control" name="resolution_date" value="<?php echo $issue['resolution_date']; ?>"/>
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
            	format: 'YYYY-MM-DD'
            });
        });
    </script>
	<button type="submit" class="btn btn-default">Update</button>
	<a class="btn btn-info" role="button" href="/issues">Cancel</a>
</form>