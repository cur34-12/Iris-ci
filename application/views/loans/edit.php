<head>
	<title>Loans - Edit</title>
</head>
<h2 style="text-transform: uppercase;">Edit - Select a Loan</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<td>Loans</td>
</thead>
<?php foreach($loans as $loan) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/loans/edit/'. $loan['loan_id']); ?>"><?php echo $loan['loan_name']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>