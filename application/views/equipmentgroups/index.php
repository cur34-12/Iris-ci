<?php $bar = new BARCODE(); ?>
<h2 style="text-transform: uppercase;">Equipment Groups</h2>
<table id="content" class="table table-striped table-hover ">
	<thead class="thead-default">
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
					<td><?php echo $equipmentgroup['loc_name']; ?></td>
					<td><img src='<?php echo $bar->BarCode_link("Code39", $equipmentgroup['eqgroup_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td>
					<td><a class="btn btn-outline-warning btn-sm" role="button" href="equipment-groups/edit/<?php echo $equipmentgroup['eqgroup_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-outline-primary" role="button" href="equipment-groups/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>
<!--<a class="btn btn-outline-info" role="button" href="equipment-groups/edit">Edit Equipment Group</a>-->
<!--<a class="btn btn-outline-danger" role="button" href="equipment-groups/delete">Delete Equipment Group</a>-->

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