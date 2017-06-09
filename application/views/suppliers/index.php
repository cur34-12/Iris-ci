<h2 style="text-transform: uppercase;">Suppliers</h2>
<hr />
<table id="content" class="table table-striped table-hover table-condensed dataTable">
	<thead class="thead-inverse">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>On Account</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($suppliers as $supplier) : ?>
			<tr>
					<td><a href="<?php echo site_url('/suppliers/'. $supplier['supplier_id']); ?>"><?php echo $supplier['supplier_name']; ?></a></td>
					<td><?php echo $supplier['supplier_street']; ?> <?php echo $supplier['supplier_suburb']; ?></td>
                    <td><?php echo $supplier['supplier_number']; ?></td>
					<td><a class="btn btn-warning btn-sm" role="button" href="issues/edit/<?php echo $issue['iss_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-primary" role="button" href="suppliers/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>