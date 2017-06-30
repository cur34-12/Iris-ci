<h2 style="text-transform: uppercase;">Create Equipment</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
    <div class="form-group">
        <label class="control-label col-sm-2">Equipment ID <strong>(ONLY ENTER THIS IF KNOWN)</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="eq_id" placeholder="Eg. 588">
        </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eq_name" placeholder="Eg. Axe">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eq_description" placeholder="Eg. Large Red Felling Axe, wooden handle">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Size</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eq_size" placeholder="Eg.Large">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Brand</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eq_brand" placeholder="Eg. Husqvarna">
		</div>
	</div>
    <div class="form-group">
        <label class="control-label col-sm-2">Supplier</label>
        <div class="col-sm-10">
            <select id="eq_supplier" name="eq_supplier" class="form-control">
                <option value="N/A">N/A</option>
                <option value="Unknown">Unknown</option>
                <option>Add a supplier...</option>
                <?php foreach($suppliers as $supplier): ?>
                    <option value="<?php echo $supplier['supplier_id']; ?>"><?php echo $supplier['supplier_name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Consumable</label>
		<div class="col-sm-10">
			<select id="eq_consumable" name="eq_consumable" class="form-control">
				<option value="No">No</option>
				<option value="Yes">Yes</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">In Service</label>
		<div class="col-sm-10">
			<select id="eq_in_service" name="in_service" class="form-control">
				<option value="No">No</option>
				<option value="Yes">Yes</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Inspection Frequency</label>
		<div class="col-sm-10">
			<select id="eq_inspection_frequency" name="eq_inspection_frequency" class="form-control">
				<option value="1 Week">1 Week</option>
				<option value="1 Month">1 Month</option>
				<option value="6 Months">6 Months</option>
				<option value="1 Year">1 Year</option>
				<option value="2 Years">2 Years</option>
			</select>
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Date Purchased</label>
        <div class='input-group date col-sm-10' id='eq_date_purchased'>
            <input type='text' class="form-control" name="eq_date_purchased"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <script type="text/javascript">
	        $(function () {
	            $('#eq_date_purchased').datetimepicker({
	            	format: 'DD-MM-YYYY'
	            });
	        });
		</script>
    </div>
    <div class="form-group">
		<label class="control-label col-sm-2">End of Life date</label>
        <div class='input-group date col-sm-10' id='eq_end_life'>
            <input type='text' class="form-control" name="eq_end_life"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
	    <script type="text/javascript">
			$(function () {
			    $('#eq_end_life').datetimepicker({
			    	format: 'DD-MM-YYYY'
			    });
			});
    	</script>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2 col-sm-10">Purchase Type</label>
		<div class="col-sm-10">
			<select id="eq_purchase_type" name="eq_purchase_type" class="form-control">
				<option value="Donation">Donation</option>
				<option value="Unit Funts">Unit Funds</option>
				<option value="Region Funds">Region Funds</option>
				<option value="USHQ Funds">SHQ Funds</option>
				<option value="Emergency Order">Emergency Order</option>
			</select>
		</div>
	</div>
    <div class="form-group">
        <label class="control-label col-sm-2">Model</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="eq_model" placeholder="Eg. XT5467">
        </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Serial Number</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eq_serial" id="eq_serial" placeholder="Eg. 34783698">
		</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<select id="eq_category" name="eq_category" class="form-control" >
				<?php foreach($categories as $category): ?>
        				<option value="<?php echo $category['eqcat_name']; ?>"><?php echo $category['eqcat_name']; ?></option>
        		<?php endforeach; ?>
        	</select>
		</div>
	</div>
	<!--Dan to add the live search functionality to the group select tool here-->
	<div class="form-group">
		<label class="control-label col-sm-2">Equipment Group</label>
		<div class="col-sm-10">
			<select id="eq_group_id" name="eq_group_id" class="form-control">
						<option value="">N/A</option>
				<?php foreach($equipmentgroups as $equipmentgroup): ?>
        				<option value="<?php echo $equipmentgroup['eqgroup_id']; ?>"><?php echo $equipmentgroup['eqgroup_name']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Location</label>
		<div class="col-sm-10">
			<select id="eqloc_loc_id" name="eqloc_loc_id" class="form-control">
				<?php foreach($equipmentlocations as $equipmentlocation): ?>
        				<option value="<?php echo $equipmentlocation['loc_id']; ?>"><?php echo $equipmentlocation['loc_name']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
		<label class="control-label col-sm-2">Quantity</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eqloc_quantity" placeholder="Eg. 1">
		</div>
	</div>	
	<button type="submit" class="btn btn-primary">Create</button>
	<a class="btn btn-warning" role="button" href="/equipment">Cancel</a>
</form>