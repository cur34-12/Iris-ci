<head>
	<title>Equipment - Logi</title>
</head>

<?php $bar = new BARCODE(); ?>
<h2 style="text-transform: uppercase;">Equipment Groups</h2>
<table id="content" class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Category</th>	
			<th>Inspection Frequency</th>
			<th>Last Inspected</th>
			<th>Location</th>
			<th>Barcode</th>
			<th>Edit</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach($equipmentgroups as $equipmentgroup) : ?>
			<tr>
					<td><a href="<?php echo site_url('/equipment-groups/'. $equipmentgroup['eqgroup_id']); ?>"><?php echo $equipmentgroup['eqgroup_name']; ?></a></td>
					<td><?php echo $equipmentgroup['eqgroup_description']; ?></td>
					<td><?php echo $equipmentgroup['eqgroup_category']; ?></td>
					<td><?php echo $equipmentgroup['eqgroup_inspection_frequency']; ?></td>
					<td><?php echo $equipmentgroup['eqgroup_last_checked']; ?></td>
					<td><?php echo $equipmentgroup['eqgroup_location']; ?></td>
					<td><img src='<?php echo $bar->BarCode_link("Code39", $equipmentgroup['eqgroup_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="equipment-groups/edit/<?php echo $equipmentgroup['eqgroup_id']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="equipment-groups/create">Create Equipment Group</a>
<a class="btn btn-info" role="button" href="equipment-groups/edit">Edit Equipment Group</a>
<a class="btn btn-danger" role="button" href="equipment-groups/delete">Delete Equipment Group</a>

<script>
	$(document).ready(function(){
		$('#content').dataTable( {
		  "columnDefs": [ {
		      "targets": [ -1, -2 ],
		      "orderable": false
		    } ]
		} );
	});
</script>