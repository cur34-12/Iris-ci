<head>
	<title><?php echo strtoupper($location['loc_name']); ?> - Logi</title>
</head>
<h2><?php echo $location['loc_name']; ?></h2>
<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Name</td><td style="text-transform: uppercase;"><?php echo $location['loc_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Manager</td><td><?php echo $location['loc_manager']; ?></td></tr>
</table>
<hr />
<!--Action buttons-->

<!--Create Button buttons-->
<a class="btn btn-default" role="button" href="<?php echo site_url('/locations/create'); ?>">Create Location</a>

<!--Edit Button-->
<a class="btn btn-info" role="button" href="<?php echo site_url('/locations/edit/'. $location['loc_id']); ?>">Edit Location</a>

<!--Delete Button (as form to protect against abuse)-->
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/locations/delete/'.$location['loc_id'], $attributes); ?>
	<input type="submit" value="Delete Location" class="btn btn-danger"/>
</form>