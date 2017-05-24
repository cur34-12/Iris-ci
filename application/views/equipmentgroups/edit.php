<head>
	<title>Equipment - Edit</title>
</head>
<h2 style="text-transform: uppercase;">Edit - Select an Equipment Item</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<td>Equipment Items</td>
</thead>
<?php foreach($equipmentgroups as $equipmentgroup) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/equipment-groups/edit/'. $equipmentgroup['eqgroup_id']); ?>"><?php echo $equipmentgroup['eqgroup_name']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>