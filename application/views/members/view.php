<h2><?php echo $member['$member_name']; ?></h2>
<hr />
<table class="table table-striped table-hover ">
    <tbody>
    <tr><td style="font-weight: bold">Member ID</td><td><?php echo $member['$member_id']; ?></td></tr>
    <tr><td style="font-weight: bold">Member Name</td><td><?php echo $member['$member_name']; ?></td></tr>
    </tbody>
</table>
<hr />

<h3>Items on Loan</h3>
<table class="table table-striped table-hover striped">
    <thead class="thead-inverse">
        <th>Item</th>
        <th>Qty</th>
        <th>Loan Date</th>
    </thead>
    <tbody>
        <?php foreach($loanitems as $loanitem) : ?>
            <tr>
                <td><?php echo $loanitem['$loan_something']); ?></td>
                <td><?php echo $loanitem['$loan_something']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<hr />

<a class="btn btn-primary" role="button" href="<?php echo site_url('/members/create'); ?>">Create Member</a>
<a class="btn btn-warning" role="button" href="<?php echo site_url('/members/edit/'. $member['$member_id']); ?>">Edit Member</a>


