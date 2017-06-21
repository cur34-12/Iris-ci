</div>
</div>
<div style="padding-bottom: 2%;">
</div>
</div>

<!-- JQuery / UI -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/components/jqueryui/jquery-ui.min.js"></script>

<!-- materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<!-- Moment Time Parser-->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/moment/moment/moment.js"></script>

<!-- D3 -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/mbostock/d3/d3.js"></script>

<!-- Full Calendar -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/fullcalendar/fullcalendar/dist/fullcalendar.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.15/af-2.2.0/cr-1.3.3/r-2.1.1/sc-1.4.2/se-1.2.2/datatables.min.js"></script>

<!-- Init of Moment-->
<script>
    moment().format();
</script>

<!-- Init of DataTable-->
<script>
    $(document).ready(function(){
        $('#content').dataTable( {
            "columnDefs": [ {
                "targets": [ -1, -2 ],
                "orderable": false
            } ],
            "pageLength": 100
        } );
    });
</script>

<!--Sidebar-->
<script>
    // Initialize collapse button
    //    $('.button-collapse').sideNav({
    //        menuWidth: 300, // Default is 300
     //       edge: 'left' // Choose the horizontal origin
     //       }
     //   );

     // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        $('.collapsible').collapsible();
</script>
</main>
</div>
</div>
</div>
<!-- /#wrapper -->

</body>
</html>