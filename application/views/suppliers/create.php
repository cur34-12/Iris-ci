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
        <select id="veh_capacity" name="supplier_account" class="form-control">
            <option>No</option>
            <option>Yes</option>
        </select>

    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Account Reference</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="supplier_acount_number" placeholder="Eg. HORNSBYSES#1663">
    </div>
</div>
<button type="submit" class="btn btn-outline-primary">Create</button>
</form>