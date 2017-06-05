<h2 style="text-transform: uppercase;">Create Location</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('locations/create', $attributes); ?>
	<div class="form-group">
		<label class="control-label col-sm-2">Location Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loc_name" placeholder="Eg. Wet Store">
		</div>
	</div>
    <div class="form-group">
        <label class="control-label col-sm-2">Location Manager</label>
        <div class="col-sm-10">
            <select id="loc_manager" name="loc_manager" class="form-control" >
                <?php foreach($usernames as $username): ?>
                    <option value="<?php echo $username['id']; ?>"><?php echo $username['username']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<button type="submit" class="btn btn-outline-primary">Create</button>
</form>