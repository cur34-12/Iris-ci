<head>
	<title>Equipment - Edit</title>
</head>
<h2 style="text-transform: uppercase;">Edit - Select a Component</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<td>Components</td>
</thead>
<?php foreach($equipment as $equipment) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/equipment/edit/'. $equipment['equipmentID']); ?>"><?php echo $equipment['name']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>