<head>
	<title>Equipment - Delete</title>
</head>
<h2 style="text-transform: uppercase;">Delete - Select a Equipment Component</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<td>Components</td>
</thead>
<?php foreach($equipment as $equipment) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/equipment/delete/'. $equipment['eq_id']); ?>"><?php echo $equipment['eq_name']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>