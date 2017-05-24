<head>
	<title>Edit Equipment - Logi</title>
</head>

<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment-groups/update', $attributes); ?>
<h2 style="text-transform: uppercase;">Edit - <?php echo $equipmentgroup['eqgroup_name']; ?></h2>
	<div class="form-group">
		<label class="control-label col-sm-2">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eqgroup_name" value="<?php echo $equipmentgroup['eqgroup_name']; ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eqgroup_description" value="<?php echo $equipmentgroup['eqgroup_description']; ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Inspection Frequency</label>
		<div class="col-sm-10">
			<select id="eqgroup_inspection_frequency" name="eqgroup_inspection_frequency" class="form-control">
				<option value="1 Week">1 Week</option>
				<option value="1 Month">1 Month</option>
				<option value="6 Months">6 Months</option>
				<option value="1 Year">1 Year</option>
				<option value="2 Years">2 Years</option>
			</select>
			<script>
				$(function() {
					$( '#eqgroup_inspection_frequency' ).val('<?php echo $equipment['eqgroup_inspection_frequency']; ?>'); 
				});
			</script>
		</div>
	</div>

    <div class="form-group">
		<label class="control-label col-sm-2">Last Inspection</label>
        <div class='input-group date col-sm-10' id='eqgroup_last_checked'>
            <input type='text' class="form-control" name="eqgroup_last_checked" value="<?php echo $equipmentgroup['eqgroup_last_checked']; ?>"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
	    <script type="text/javascript">
			$(function () {
			    $('#eqgroup_last_checked').datetimepicker({
			    	useCurrent: true,
			    	showTodayButton: true,
			    	sideBySide: true,
			    	format: 'YYYY-MM-DD',
			    });
			});
    	</script>
    </div>

	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<select id="eqgroup_category" name="eqgroup_category" class="form-control" >
				<?php foreach($categories as $category): ?>
        				<option value="<?php echo $category['eqcat_name']; ?>"><?php echo $category['eqcat_name']; ?></option>
        		<?php endforeach; ?>
        	</select>
        	<script>
				$(function() {
					$( '#eqgroup_category' ).val('<?php echo $equipmentgroup['eqgroup_category']; ?>'); 
				});
			</script>
		</div>
	</div>
	
	<!--Implement autocomplete search for a select box from the locations table-->
	<div class="form-group">
		<label class="control-label col-sm-2">Location</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eqgroup_location" id="eqgroup_location" value="<?php echo $equipmentgroup['eqcat_location']; ?>">
		</div>
	</div>

	<!--implement a related to system for linking groups together, eg 2 part HSK kit. Table format might be: relatedgroup_id | eqgroup_id | related_eqgroup_id -->

	<button type="submit" class="btn btn-default">Create</button>
</form>