<head>
	<title>Create Equipment - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Create Equipment</h2>
<!--<?php //echo validation_errors(); ?>-->
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
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
			<input type="text" class="form-control" name="eq_supplier" placeholder="Eg. GMC Thornleigh">
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
	            	useCurrent: true,
	            	showTodayButton: true,
	            	sideBySide: true,
	            	format: 'YYYY-MM-DD',
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
			    	useCurrent: true,
			    	showTodayButton: true,
			    	sideBySide: true,
			    	format: 'YYYY-MM-DD',
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
		<label class="control-label col-sm-2">Asset Number</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eq_asset_number" placeholder="Eg. 34783698">
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
	<div class="form-group">
		<label class="control-label col-sm-2">Assembly</label>
		<div class="col-sm-10">
			<select id="eq_assembly" name="eq_assembly" class="form-control">
				<?php foreach($assemblies as $assembly): ?>
        				<option value="<?php echo $assembly['ass_id']; ?>"><?php echo $assembly['ass_name']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
	</div>
	<button type="submit" class="btn btn-default">Create</button>
</form>