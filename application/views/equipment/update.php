<h2 style="text-transform: uppercase;">Edit - <?php echo $equipment['eq_name']; ?></h2>
<hr />
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment/update', $attributes); ?>
	<div class="form-group">
		<label class="control-label col-sm-1">Equipment ID</label>
		<div class="col-sm-7">
			<input type="text" id="eq_id" class="form-control" name="eq_id" value="<?php echo $equipment['eq_id']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Name</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="eq_name" id="eq_name" value="<?php echo $equipment['eq_name']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Description</label>
		<div class="col-sm-7">
			<textarea name="eq_description" id="eq_description" class="form-control" rows="3"><?php echo $equipment['eq_description']; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Size</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="eq_size" id="eq_size" value="<?php echo $equipment['eq_size']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Brand</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="eq_brand" id="eq_brand" value="<?php echo $equipment['eq_brand']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Supplier</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="eq_supplier" id="eq_supplier" value="<?php echo $equipment['eq_supplier']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Category</label>
		<div class="col-sm-7">
			<select id="eq_category" name="eq_category" class="form-control" >
				<?php foreach($categories as $category): ?>
        				<option value="<?php echo $category['eqcat_name']; ?>"><?php echo $category['eqcat_name']; ?></option>
        		<?php endforeach; ?>
        	</select>
		</div>
		<script>
			$(function() {
				$( '#eq_category' ).val('<?php echo $equipment['eq_category']; ?>'); 
			});
		</script>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Inspection Frequency</label>
		<div class="col-sm-7">
			<select id="eq_inspection_frequency" name="eq_inspection_frequency" class="form-control">
				<option value="1 Week">1 Week</option>
				<option value="1 Month">1 Month</option>
				<option value="6 Months">6 Months</option>
				<option value="1 Year">1 Year</option>
				<option value="2 Years">2 Years</option>
			</select>
			<script>
				$(function() {
					$( '#eq_inspection_frequency' ).val('<?php echo $equipment['eq_inspection_frequency']; ?>'); 
				});
			</script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">In Service</label>
		<div class="col-sm-7">
			<select id="eq_in_service" name="eq_in_service" class="form-control" >
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
			<script>
				$(function() {
					$( '#eq_in_service' ).val('<?php echo $equipment['eq_in_service']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-1">Date Purchased</label>
        <div class='input-group date col-sm-7' id='eq_date_purchased'>
            <input type='text' class="form-control" name="eq_date_purchased" value="<?php echo $equipment['eq_date_purchased']; ?>"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
	        <script type="text/javascript">
	        $(function () {
	            $('#eq_date_purchased').datetimepicker({
	            	useCurrent: true,
	            	showTodayButton: true,
	            	sideBySide: true,
	            	format: 'YYYY-MM-DD'
	            });
	        });
		</script>
    </div>
    <div class="form-group">
		<label class="control-label col-sm-1">End of Life date</label>
        <div class='input-group date col-sm-7' id='eq_end_life'>
            <input type='text' class="form-control" name="eq_end_life" value="<?php echo $equipment['eq_end_life']; ?>"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
	    <script type="text/javascript">
			$(function () {
			    $('#eq_end_life').datetimepicker({
			    	useCurrent: true,
			    	showTodayButton: true,
			    	sideBySide: true,
			    	format: 'YYYY-MM-DD'
			    });
			});
    	</script>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-1">Purchase Type</label>
		<div class="col-sm-7">
			<select id="eq_purchase_type" name="eq_purchase_type" class="form-control">
				<option value="Donation">Donation</option>
				<option value="Unit Funts">Unit Funds</option>
				<option value="Region Funds">Region Funds</option>
				<option value="SHQ Funds">SHQ Funds</option>
				<option value="Emergency Order">Emergency Order</option>
			</select>
			<script>
				$(function() {
					$( '#eq_purchase_type' ).val('<?php echo $equipment['eq_purchase_type']; ?>'); 
				});
			</script>
		</div>
	</div>
	<!--Dan to add the live search functionality to the group select tool here-->
	<div class="form-group">
			<label class="control-label col-sm-1">Equipment Group</label>
			<div class="col-sm-7">
				<select id="eq_group_id" name="eq_group_id" class="form-control">
							<option value="">N/A</option>
					<?php foreach($equipmentgroups as $equipmentgroup): ?>
	        				<option value="<?php echo $equipmentgroup['eqgroup_id']; ?>"><?php echo $equipmentgroup['eqgroup_name']; ?></option>
	        		<?php endforeach; ?>
				</select>
			</div>
			<script>
					$(function() {
						$( '#eq_group_id' ).val('<?php echo $equipment['eq_group_id']; ?>'); 
					});
			</script>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-1">Asset Number</label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="eq_asset_number" id="eq_asset_id" value="<?php echo $equipment['eq_asset_number']; ?>">
			</div>
		</div>
	    <div class="form-group">
	        <label class="control-label col-sm-1">Model</label>
	        <div class="col-sm-7">
	            <input type="text" class="form-control" name="eq_model" value="<?php echo $equipment['eq_model']; ?>">
	        </div>
	    </div>
		<div class="form-group">
			<label class="control-label col-sm-1">Serial Number</label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="eq_serial" id="eq_serial" value="<?php echo $equipment['eq_serial']; ?>">
			</div>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Update</button>
		<a class="btn btn-warning" role="button" href="/equipment">Cancel</a>
	</form>