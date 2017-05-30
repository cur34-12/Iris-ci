<h2 style="text-transform: uppercase;">Delete - Select a Loction</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<td>Vehicle</td>
</thead>
    <?php foreach($locations as $location) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/locations/delete/'. $location['loc_id']); ?>"><?php echo $location['loc_name']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>