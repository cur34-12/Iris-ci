<h2 style="text-transform: uppercase;">Edit Location - <?php echo $location['loc_name']; ?></h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('locations/update', $attributes); ?>
	<div class="form-group">
		<label class="control-label col-sm-2">Location ID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loc_id"  value="<?php echo $location['loc_id']; ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loc_name" value="<?php echo $location['loc_name']; ?>" />
		</div>
	</div>
    <div class="form-group">
        <label class="control-label col-sm-2">Location Manager</label>
        <div class="col-sm-10">
            <select id="loc_manager" name="loc_manager" class="form-control" >
                <?php foreach($usernames as $username): ?>
                    <option value="<?php echo $username['username']; ?>"><?php echo $username['username']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <script>
            $(function() {
                $( '#loc_manager' ).val('<?php echo $location['loc_manager']; ?>');
            });
        </script>
    </div>
	<button type="submit" class="btn btn-default">Update</button>
	<a class="btn btn-info" role="button" href="/locations">Cancel</a>
</form>