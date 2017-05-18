<head>
	<title><?php echo strtoupper($issue['iss_id']); ?> - Logi</title>
</head>
<h2><?php echo $issue['iss_title']; ?></h2>
<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Title</td><td><?php echo $issue['iss_title']; ?></td></tr>
	<tr><td style="font-weight: bold">Equipment</td><td><a href="/equipment/view/<?php echo['eq_id']; ?>"><?php echo $issue['eq_name']; ?></a></td></tr>
	<tr><td style="font-weight: bold">Status</td><td><?php echo $issue['iss_status']; ?></td></tr>
	<tr><td style="font-weight: bold">Description</td><td><?php echo $issue['iss_description']; ?></td></tr>
	<tr><td style="font-weight: bold">Reported By</td><td><?php echo $issue['iss_reporter_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Assigned User</td><td><?php echo $issue['iss_assigned_user']; ?></td></tr>
	<tr><td style="font-weight: bold">Reported Date</td><?php echo '<td style="font-weight: bold"><script type="text/javascript">var rp_date; $rp_date = moment(\''.$issue['iss_reported_date'].'\').format(\'DD-MM-YYYY\'); document.write($rp_date);</script></td>'; ?></tr>
	<tr><td style="font-weight: bold">Resolution Date</td><?php echo '<td style="font-weight: bold"><script type="text/javascript">var res_date; $res_date = moment(\''.$issue['iss_resolution_date'].'\').format(\'DD-MM-YYYY\'); document.write($res_date);</script></td>'; ?></tr>
	<tr><td style="font-weight: bold">Created By</td><td><?php echo $issue['iss_creator_id']; ?></td></tr>
</table>
<hr />

<!--Action buttons-->
<!--Create Button buttons-->
<a class="btn btn-default" role="button" href="<?php echo site_url('/issues/create'); ?>">Create Issue</a>

<!--Edit Button-->
<a class="btn btn-info" role="button" href="<?php echo site_url('/vissues/edit/'. $issue['iss_id']); ?>">Edit Issue</a>

<!--Delete Button (as form to protect against abuse)-->
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/issues/delete/'.$issue['iss_id'], $attributes); ?>
	<input type="submit" value="Delete Issue" class="btn btn-danger"/>
</form>