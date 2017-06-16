<h2 style="text-transform: uppercase; letter-spacing: 2px;">Duty Officer - Dashboard</h2>
<div class="row">
    <div class="col-md-4">
        <h3 style="text-align: center;"><strong>Duty Team:</strong> <?php echo $duties['duties_team']; ?></h3>
        <table class="table table-striped table-hover table-sm">
            <tr>
                <td>TL</td>
                <td><?php echo $duties['duties_tl']; ?></td>
            </tr>
            <tr>
                <td>TL No.</td>
                <td><?php echo $duties['duties_tl_no']; ?></td>
            </tr>
            <tr>
                <td>DTL</td>
                <td><?php echo $duties['duties_dtl']; ?></td>
            </tr>
            <tr>
                <td>DTL No.</td>
                <td><?php echo $duties['duties_dtl_no']; ?></td>
            </tr>
            <tr>
                <td>DOO</td>
                <td><?php echo $duties['duties_doo']; ?></td>
            </tr>
            <tr>
                <td>DOO No.</td>
                <td><?php echo $duties['duties_doo_no']; ?></td>
            </tr>
        </table>
        <span style="font-size: xx-small; color: grey;">Last Updated: <?php echo $duties['duties_lastupdated']; ?>, <?php echo $duties['duties_lastupdatedby']; ?></span>
    </div>
    <div class="col-md-8">
        <h3>Weather</h3>
        <table class="table table-striped table-hover table-sm">
            <?php foreach ($rss as $item) : ?>
            <tr>
                <td><?php echo $item['title']; ?></td>
                <td><?php echo $item['description']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>