<h2 style="text-transform: uppercase;">Edit - Select a Location</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<table class="table table-striped table-hover ">
	<thead class="thead-inverse">
		<td>Vehicle</td>
	</thead>
	<?php foreach($locations as $location) : ?>
		<tr>
			<td>
				<a href="<?php echo site_url('/locations/edit/'. $location['loc_id']); ?>"><?php echo $location['loc_name']; ?></a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>