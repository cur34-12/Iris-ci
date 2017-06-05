<?php $bar = new BARCODE(); ?>
<h2><?php echo $location['loc_name']; ?></h2>
<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Name</td><td><?php echo $location['loc_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Manager</td><td><?php echo $location['loc_manager']; ?></td></tr>
</table>
<h3>Equipment</h3>
<table class="table table-striped table-hover table-sm">
    <thead class="thead-inverse">
      <th>Name</th>
      <th>Brand</th>
      <th>Size</th>
      <th>ID</th>
      <th>Qty</th>
      <th>Barcode</th>
    </thead>
    <tbody>
      <?php foreach($equipment as $equipments) : ?>
          <tr>
              <td><a href="/equipment/view/<?php echo $equipments['eq_id']; ?>"><?php echo $equipments['eq_name']; ?></a></td>
              <td><?php echo $equipments['eq_brand']; ?></td>
              <td><?php echo $equipments['eq_size']; ?></td>
              <td><?php echo $equipments['eq_id']; ?></td>
              <td><?php echo $equipments['eqloc_quantity']; ?></td>
              <td><img src='<?php echo $bar->BarCode_link("Code39", $equipments['eq_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td>
          </tr>
      <?php endforeach; ?>
    </tbody>
</table>

<hr />

<a class="btn btn-outline-primary" role="button" href="<?php echo site_url('/locations/create'); ?>">Create Location</a>
<a class="btn btn-outline-warning" role="button" href="<?php echo site_url('/locations/edit/'. $location['loc_id']); ?>">Edit Location</a>
