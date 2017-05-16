<head>
	<title>Loans - Delete</title>
</head>
<h2 style="text-transform: uppercase;">Delete - Select a Loans Component</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<td>Loans</td>
</thead>
<?php foreach($loans as $loans) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/loans/delete/'. $loans['loan_id']); ?>"><?php echo $loans['loan_id']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>