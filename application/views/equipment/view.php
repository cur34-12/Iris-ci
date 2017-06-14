<?php $bar = new BARCODE(); ?>
<script>
function showEditLocation(locationID) {
    var editDiv = document.getElementById('loc_edit_'+locationID);
    var viewDiv = document.getElementById('loc_view_'+locationID);
    editDiv.style.display = '';
    viewDiv.style.display = 'none';
}
function hideEditLocation(locationID) {
    var editDiv = document.getElementById('loc_edit_'+locationID);
    var viewDiv = document.getElementById('loc_view_'+locationID);
    editDiv.style.display = 'none';
    viewDiv.style.display = '';
}
function showAddLocation() {
    var addTable = document.getElementById('loc_add');
    addTable.style.display = '';
    document.getElementById('addLocationButton').style.display = 'none';
}
function hideAddLocation() {
    var addTable = document.getElementById('loc_add');
    addTable.style.display = 'none';
    document.getElementById('addLocationButton').style.display = '';
}
</script>
<h2 style="text-transform: uppercase;">Equipment - <?php echo $equipment['eq_name']; ?></h2>
<hr />
<div class="row">
    <div class="col-md-6">
        <h3>Details</h3>
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
    <div class="col-md-6">
        <h3>Locations</h3>
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-inverse">
                <th>Name</th>
                <th>Qty</th>
                <th style="text-align: right;"><a class="btn btn-primary btn-sm" id='addLocationButton' role="button" href="#" onclick="showAddLocation()"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add</a></th>
            </thead>
            <tbody>
                <?php foreach($locations as $location) : ?>
                    <tr id="loc_view_<?php echo $location['loc_id']; ?>" class="loc_view">
                        <td style="vertical-align: middle;"><a href="/locations/<?php echo $location['loc_id']; ?>"><?php echo $location['loc_name']; ?></a></td>
                        <td style="vertical-align: middle;"><?php echo $location['eqloc_quantity']; ?></td>
                        <td style="text-align: right;vertical-align: middle;">
                            <a class="btn btn-basic btn-sm" role="button" href="#" onclick="showEditLocation('<?php echo $location['loc_id']; ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <a class="btn btn-basic btn-sm" role="button" href="/equipment/location/delete/<?php echo $equipment['eq_id']; ?>/<?php echo $location['eqloc_loc_id']; ?>"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> Remove</a>
                        </td>
                    </tr>
                    <!-- edit location row -->
                    <tr id="loc_edit_<?php echo $location['loc_id']; ?>" class="loc_edit" style="display:none;">
                        <td style="vertical-align: middle;"><a href="/locations/<?php echo $location['loc_id']; ?>"><?php echo $location['loc_name']; ?></a></td>
                        <td style="vertical-align: middle;">   
                            <?php echo form_open('equipment/location/update'); ?>
                                <input type="text" class="form-control" name="eqloc_quantity" value="<?php echo $location['eqloc_quantity']; ?>" style="width:50px;display:inline;" />
                                <input type="hidden" name="eqloc_loc_id" value="<?php echo $location['loc_id']; ?>" />
                                <input type="hidden" name="eqloc_eq_id" value="<?php echo $equipment['eq_id']; ?>" />
                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            </form>
                        </td>
                        <td style="text-align: right;vertical-align: middle;">
                            <a class="btn btn-basic btn-sm" role="button" href="#" onclick="hideEditLocation('<?php echo $location['loc_id']; ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cancel</a>
                            <a class="btn btn-basic btn-sm disabled" role="button" href="/equipment/location/delete/<?php echo $equipment['eq_id']; ?>/<?php echo $location['eqloc_loc_id']; ?>"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php echo form_open('equipment/location/add'); ?>
        <table class="table table-striped table-hover table-sm" id="loc_add"  class="loc_add" style="display:none;">
            <tbody>
                <!-- add location row -->
                <tr>
                    <td style="vertical-align: middle;">
                        <select id="eqloc_loc_id" name="eqloc_loc_id" class="form-control">
                            <?php foreach($equipmentlocations as $equipmentlocation): ?>
                                <option value="<?php echo $equipmentlocation['loc_id']; ?>"><?php echo $equipmentlocation['loc_name']; ?></option>
                            <?php endforeach; ?>
                        </select>   
                    </td>
                    <td style="vertical-align: middle;">   
                        <input type="text" class="form-control" name="eqloc_quantity" style="width:50px;display:inline;" />
                            <input type="hidden" name="eqloc_eq_id" value="<?php echo $equipment['eq_id']; ?>" />
                        </form>
                    </td>
                    <td style="text-align: right;vertical-align: middle;">
                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                        <a class="btn btn-basic btn-sm" role="button" href="#" onclick="hideAddLocation()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cancel</a>
                    </td>
                </tr>
            </tbody>
        </table>
</form>  
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
                    <td style="vertical-align: middle;"><a href="/issues/<?php echo $issue['iss_id']; ?>"><?php echo $issue['iss_title']; ?></a></td>
                    <td style="vertical-align: middle;"><?php echo $issue['iss_reported_date']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $issue['iss_status']; ?></td>
                    <td style="text-align: right;vertical-align: middle;"><a class="btn btn-basic btn-sm" role="button" href="/?/edit/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<hr />

