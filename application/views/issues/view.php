<h2><?php echo $issue['iss_title']; ?></h2>
<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Title</td><td><?php echo $issue['iss_title']; ?></td></tr>
	<tr><td style="font-weight: bold">Equipment</td><td><a href="/equipment/view/<?php echo $issue['eq_id']; ?>"><?php echo $issue['eq_name']; ?></a></td></tr>
	<tr><td style="font-weight: bold">Status</td><td><?php echo $issue['iss_status']; ?></td></tr>
	<tr><td style="font-weight: bold">Description</td><td><?php echo $issue['iss_description']; ?></td></tr>
	<tr><td style="font-weight: bold">Reported By</td><td><?php echo $issue['iss_reporter_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Assigned User</td><td><?php echo $issue['iss_assigned_user']; ?></td></tr>
	<tr><td style="font-weight: bold">Reported Date</td><?php echo '<td style="font-weight: bold"><script type="text/javascript">var rp_date; $rp_date = moment(\''.$issue['iss_reported_date'].'\').format(\'DD-MM-YYYY\'); document.write($rp_date);</script></td>'; ?></tr>
	<tr><td style="font-weight: bold">Resolution Date</td><?php echo '<td style="font-weight: bold"><script type="text/javascript">var res_date; $res_date = moment(\''.$issue['iss_resolution_date'].'\').format(\'DD-MM-YYYY\'); document.write($res_date);</script></td>'; ?></tr>
	<tr><td style="font-weight: bold">Created By</td><td><?php echo $issue['iss_creator_id']; ?></td></tr>
</table>

<h2>Comments</h2>
<table class="table table-striped table-hover table-sm">
    <thead class="thead-inverse">
        <th>Date / Time</th>
        <th>User</th>
        <th>Comment</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?php foreach($comments as $comment) : ?>
            <tr>
                <td><?php echo $comment['isscom_date']; ?></td>
                <td><?php echo $comment['isscom_user']; ?></td>
                <td><?php echo $comment['isscom_comment']; ?></td>
                <td><a class="btn btn-outline-warning" role="button" href="<?php echo site_url('/issues/delete-comment/'. $comment['isscom_id']); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/new-comment', $attributes); ?>
<div class="form-group" style="display: none;">
    <label class="control-label col-sm-2">Related Issue</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="isscom_related_iss" name="isscom_related_iss" value="<?php echo $issue['iss_id']; ?>">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">New Comment</label>
    <div class="col-sm-10">
        <textarea rows="3" class="form-control" id="isscom_comment" name="iss_comment" placeholder="Eg. Chainsaw now at the stihl shop."></textarea>
    </div>
    <div class="col-sm-10">
        <a class="btn btn-outline-info" role="button" href="<?php echo site_url('issues/comment/'. $issue['iss_id']); ?>">Add Comment</a>
    </div>
</div>
<div class="form-group" style="display: none;">
    <label class="control-label col-sm-2">Creator ID</label>
    <div class="col-sm-10">
        <!-- Created By User -->
        <input id="isscom_user" type="text" name="isscom_user" value="<?php echo $this->ion_auth->user()->row()->username; ?>">
    </div>
</div>
</form>
<hr />
<a class="btn btn-outline-primary" role="button" href="<?php echo site_url('/issues/create'); ?>">Create Issue</a>
<a class="btn btn-outline-warning" role="button" href="<?php echo site_url('/issues/edit/'. $issue['iss_id']); ?>">Edit Issue</a>
