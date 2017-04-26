<head>
	<title>Issue - Edit</title>
</head>
<h2 style="text-transform: uppercase;">Edit - Select an issue</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<th>Issue ID</th><th>Title</th>
</thead>
<?php foreach($issues as $issue) : ?>
<tr>
<td><a href="<?php echo site_url('/issues/edit/'. $issue['iss_id']); ?>"><?php echo $issue['iss_id']; ?></a></td><td><a href="<?php echo site_url('/issues/edit/'. $issue['iss_id']); ?>"><?php echo $issue['iss_title']; ?></td>
</tr>
<?php endforeach; ?>
</table>