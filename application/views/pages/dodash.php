<h2 style="text-transform: uppercase; letter-spacing: 2px;">Duty Officer - Dashboard</h2>
<div class="row">
    <div class="col-md-4">
        <h3 style="text-align: center;">Duty Team: <?php echo $duties['duties_team']; ?></h3>
        <h4 style="text-transform: uppercase; letter-spacing: 1px;">Team Leader</h4>
        <table class="table table-striped table-hover table-sm">
            <tr>
                <td>Name</td>
                <td><?php echo $duties['duties_tl']; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $duties['duties_tl_no']; ?></td>
            </tr>
        </table>
        <h4 style="text-transform: uppercase; letter-spacing: 1px;">Deputy Team Leader</h4>
        <table class="table table-striped table-hover table-sm">
            <tr>
                <td>Name</td>
                <td><?php echo $duties['duties_dtl']; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $duties['duties_dtl_no']; ?></td>
            </tr>
        </table>
        <h4 style="text-transform: uppercase; letter-spacing: 1px;">Duty Operations Officer</h4>
        <table class="table table-striped table-hover table-sm">
            <tr>
                <td>Name</td>
                <td><?php echo $duties['duties_doo']; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $duties['duties_doo_no']; ?></td>
            </tr>
        </table>
        <span style="font-size: xx-small; color: grey;">Last Updated: <?php echo $duties['duties_lastupdated']; ?>, <?php echo $duties['duties_lastupdatedby']; ?></span>
    </div>
    <h3 style="text-align: center;">Weather</h3>
    <h4 style="text-transform: uppercase; letter-spacing: 1px;">Warnings</h4>
    <table class="table table-striped table-sm">
        <?php foreach ($rss_warnings as $warning_item) : ?>
            <tr>
                <td><a target="_blank" href="<?php echo $warning_item['link']; ?>"><?php echo $warning_item['title']; ?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="col-md-8">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <h4 style="text-transform: uppercase; letter-spacing: 1px;">Forcast</h4>
                <table class="table table-striped table-sm">
                    <?php foreach ($rss_weather as $weather_item) : ?>
                        <tr>
                            <td><?php echo $weather_item['title'][0]; ?></td>
                            <td><?php echo $weather_item['description'][0]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-xs-4 col-sm-6">
                <h4 style="text-transform: uppercase; letter-spacing: 1px;">Forcast</h4>
                <table class="table table-striped table-sm">
                    <?php foreach ($rss_weather as $weather_item) : ?>
                        <tr>
                            <td><?php echo $weather_item['title'][1]; ?></td>
                            <td><?php echo $weather_item['description'][1]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>











    </div>
</div>