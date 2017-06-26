<h2>Create Supplier</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('suppliers/create', $attributes); ?>
<div class="form-group">
    <label class="control-label col-sm-2">Supplier Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="supplier_name" placeholder="Eg. GMC Thornleigh">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Street Address</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="supplier_street" placeholder="Eg. 67 Sefton Road">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Suburb</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="veh_make" placeholder="Eg. Thornleigh">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Phone Number</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="supplier_number" placeholder="Eg. 02 9980 6234">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Do we have an account?</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="supplier_account" placeholder="">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Account Reference</label>
    <div class="col-sm-10">
        <select id="veh_capacity" name="veh_capacity" class="form-control">
            <option>1</option>
            <option>2</option>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Capacity</label>
    <div class="col-sm-10">
        <select id="veh_capacity" name="veh_capacity" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Category</label>
    <div class="col-sm-10">
        <select id="veh_category" name="veh_category" class="form-control" >
            <option>Light Storm</option>
            <option>Medium Storm</option>
            <option>Heavy Storm</option>
            <option>Light GLR</option>
            <option>Medium GLR</option>
            <option>Heavy GLR</option>
            <option>Recon</option>
            <option>Transport</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Vehicle Type</label>
    <div class="col-sm-10">
        <select id="veh_type" name="veh_type" class="form-control">
            <option>Car</option>
            <option>Truck</option>
            <option>Raft</option>
            <option>Boat</option>
            <option>Trailer</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Location</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="veh_location_id" placeholder="NOT YET IMPLEMENTED">
    </div>
</div>
<button type="submit" class="btn btn-outline-primary">Create</button>
</form>