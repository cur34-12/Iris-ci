<h2 style="text-transform: uppercase;">Add Comment</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('comments/new', $attributes); ?>
<div class="form-group" style="display: none;">
    <label class="control-label col-sm-2">Related Issue</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="isscom_related_iss" name="isscom_related_iss" value="<?php echo $issue['$iss_id']; ?>">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Comment</label>
    <div class="col-sm-10">
        <textarea rows="3" class="form-control" id="isscom_comment" name="iss_comment" placeholder="Eg. Chainsaw now at the stihl shop."></textarea>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Reported Date</label>
    <div class='col-sm-10 input-group date'>
        <input type='text' class="form-control" id='iss_reported_date' name="iss_reported_date"/>
        <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>
<div class="form-group" style="display: none;">
    <label class="control-label col-sm-2">Creator ID</label>
    <div class="col-sm-10">
        <!-- Created By User -->
        <input id="isscom_user" type="text" name="isscom_user" value="<?php echo $this->ion_auth->user()->row()->username; ?>">
    </div>
</div>

<button type="submit" class="btn btn-outline-primary">Create</button>
<a class="btn btn-outline-warning" role="button" href="/issues/<?php echo $issue['$iss_id']; ?>">Cancel</a>
</form>
