<h2 style="text-transform: uppercase; letter-spacing: 2px;">Duty Officer - Dashboard</h2>
<div class="row">
    <div class="col-md-4">
        <h3 style="text-align: center;"><?php echo $duties['duties_team']; ?></h3>
        <table>
            <tr>
                <td>TL</td>
                <td><?php echo $duties['duties_tl']; ?></td>
            </tr>
            <tr>
                <td>TL No.</td>
                <td><?php echo $duties['duty_tl_no']; ?></td>
            </tr>
            <tr>
                <td>DTL</td>
                <td><?php echo $duties['duties_dtl']; ?></td>
            </tr>
            <tr>
                <td>DTL No.</td>
                <td><?php echo $duties['duty_dtl_no']; ?></td>
            </tr>
            <tr>
                <td>DOO</td>
                <td><?php echo $duties['duties_doo']; ?></td>
            </tr>
            <tr>
                <td>DOO No.</td>
                <td><?php echo $duties['duty_doo_no']; ?></td>
            </tr>
        </table>
        <span style="font-size: xx-small; color: grey;">Last Updated: <?php echo $duties['duty_lastupdated']; ?>, <?php echo $duties['duty_lastupdatedby']; ?></span>
    </div>
    <div class="col-md-8">.col-md-8</div>
</div>