<head>
	<title>Loans - Edit</title>
</head>
<h2 style="text-transform: uppercase;">Edit - Select a Loan</h2>
<?php $attributes = array('class' => 'form-horizontal'); ?>

<table class="table table-striped table-hover ">
<thead>
<th>Loan ID</th>
<th>Member</th>
<th>Issued Date</th>
</thead>
<?php foreach($loans as $loan) : ?>
<tr>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/loans/edit/'. $loan['loan_id']); ?>"><?php echo $loan['loan_id']; ?></a></td>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/loans/edit/'. $loan['loan_id']); ?>"><?php echo $loan['member_name']; ?></a></td>
<td style="text-transform: uppercase;"><a href="<?php echo site_url('/loans/edit/'. $loan['loan_id']); ?>"><?php echo $loan['loan_out_date']; ?></a></td>
</tr>
<?php endforeach; ?>
</table>