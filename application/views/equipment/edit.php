<h2 style="text-transform: uppercase;">Edit - Select an Equipment Item</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<table class="table table-striped table-hover ">
	<thead>
		<td>Equipment Items</td>
	</thead>
	<tbody>
		<?php foreach($equipment as $equipment) : ?>
			<tr>
				<td style="text-transform: uppercase;"><a href="<?php echo site_url('/equipment/edit/'. $equipment['eq_id']); ?>"><?php echo $equipment['eq_name']; ?></a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>