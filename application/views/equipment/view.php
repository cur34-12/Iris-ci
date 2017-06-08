<?php $bar = new BARCODE(); ?>
<div class="row">
    <div class="col">
        <h2 style="text-transform: uppercase;">Equipment - <?php echo $equipment['eq_name']; ?></h2>
        <table class="table table-striped table-hover ">
            <tbody>
            	<tr><td style="font-weight: bold">Name</td><td><?php echo $equipment['eq_name']; ?></td></tr>
            	<tr><td style="font-weight: bold">Group</td><td><a href="/equipment/groups/<?php echo $equipment['eqgroup_id']; ?>"><?php echo $equipment['eqgroup_name']; ?></a></td></tr>
            	<tr><td style="font-weight: bold">Description</td><td><?php echo $equipment['eq_description']; ?></td></tr>
            	<tr><td style="font-weight: bold">Consumable?</td><td><?php echo $equipment['eq_consumable']; ?></td></tr>
            	<tr><td style="font-weight: bold">Category</td><td><?php echo $equipment['eq_category']; ?></td></tr>
            	<tr><td style="font-weight: bold">Size</td><td><?php echo $equipment['eq_size']; ?></td></tr>
            	<tr><td style="font-weight: bold">Brand</td><td><?php echo $equipment['eq_brand']; ?></td></tr>
            	<tr><td style="font-weight: bold">Supplier</td><td><?php echo $equipment['eq_supplier']; ?></td></tr>
            	<tr><td style="font-weight: bold">Item in service?</td><td><?php echo $equipment['eq_in_service']; ?></td></tr>
            	<tr><td style="font-weight: bold">Inspection Frequency</td><td><?php echo $equipment['eq_inspection_frequency']; ?></td></tr>
            	<tr><td style="font-weight: bold">Equipment ID</td><td><?php echo $equipment['eq_id']; ?></td></tr>
            	<tr><td style="font-weight: bold">Serial</td><td><?php echo $equipment['eq_serial']; ?></td></tr>
                <tr><td style="font-weight: bold">Model</td><td><?php echo $equipment['eq_model']; ?></td></tr>
            	<tr><td style="font-weight: bold">Barcode</td><td><img src='<?php $bar = new BARCODE(); echo $bar->BarCode_link("Code39", $equipment['eq_id'], 50, 1, "#ffffff", "#000000"); ?>' /></td></tr>
            	<tr><td style="font-weight: bold">QR</td><td><img src='<?php $bar = new BARCODE(); echo $bar->QRCode_link('text', site_url('/equipment/'. $equipment['eq_id']), 100, 2); ?>' /></td></tr>
            </tbody>
        </table>
        <a class="btn btn-primary" role="button" href="<?php echo site_url('/equipment/create'); ?>">Create Equipment</a>
        <a class="btn btn-warning" role="button" href="<?php echo site_url('/equipment/edit/'. $equipment['eq_id']); ?>">Edit Equipment</a>
    </div>    
    <div class="col">
        <h3>Locations </h3>
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-inverse">
                <th>Name</th>
                <th>Qty</th>
                <th style="text-align: right;"><a class="btn btn-primary btn-sm" role="button" href="/?/create/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add</a></th>
            </thead>
            <tbody>
                <?php foreach($locations as $location) : ?>
                    <tr>
                        <td style="vertical-align: middle;"><a href="/locations/<?php echo $location['loc_id']; ?>"><?php echo $location['loc_name']; ?></a></td>
                        <td style="vertical-align: middle;"><?php echo $location['eqloc_quantity']; ?></td>
                        <td style="text-align: right;">
                            <a class="btn btn-basic btn-sm" role="button" href="/?/edit/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <a class="btn btn-basic btn-sm" role="button" href="/?/remove/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <hr />
        <h3>Issues</h3>
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-inverse">
                <th>Title</th>
                <th>Reported Date</th>
                <th>Status</th>
                <th style="text-align: right;"><a class="btn btn-primary btn-sm" role="button" href="/issues/create/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add</a></th>
            </thead>
            <tbody>
            <?php foreach($issues as $issue) : ?>
                <tr>
                    <td><a href="/issues/<?php echo $issue['iss_id']; ?>"><?php echo $issue['iss_title']; ?></a></td>
                    <td><?php echo $issue['iss_reported_date']; ?></td>
                    <td><?php echo $issue['iss_status']; ?></td>
                    <td><a class="btn btn-basic btn-sm" role="button" href="/?/edit/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<hr />

