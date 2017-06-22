 <table id="content" class="table table-striped table-hover dataTable">
        <thead class="thead-inverse">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Group</th>
                <th>Category</th>
                <th>Consumable</th>
                <th>Size</th>
                <th>Brand</th>
                <th>In Service</th>
                <th>Model</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($equipment as $equipment) : ?>
                <tr>
                        <td><a href="<?php echo site_url('/equipment/'. $equipment['eq_id']); ?>"><?php echo $equipment['eq_name']; ?></a></td>
                        <td><?php echo $equipment['eq_description']; ?></td>
                        <td><a href="<?php echo site_url('/equipment-groups/'. $equipment['eqgroup_id']); ?>"><?php echo $equipment['eqgroup_name']; ?></td>
                        <td><?php echo $equipment['eq_category']; ?></td>
                        <td><?php echo $equipment['eq_consumable']; ?></td>
                        <td><?php echo $equipment['eq_size']; ?></td>
                        <td><?php echo $equipment['eq_brand']; ?></td>
                        <td><?php echo $equipment['eq_in_service']; ?></td>
                        <td><?php echo $equipment['eq_model']; ?></td>
                        <td><a class="btn btn-warning btn-sm" role="button" href="equipment/edit/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
         <script>
             document.getElementById("myImage").src = "landscape.jpg";
         </script>
    </table>
<a class="btn btn-primary" role="button" href="/equipment/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>