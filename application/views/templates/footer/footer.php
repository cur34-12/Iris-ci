</div>
</div>
</div>
</div>

<!-- JQuery UI -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/components/jqueryui/jquery-ui.min.js"></script>

<!-- materialize -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/components/bootstrap/js/bootstrap.js"></script>

<!-- Moment Time Parser-->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/moment/moment/moment.js"></script>

<!-- D3 -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/mbostock/d3/d3.js"></script>

<!-- Full Calendar -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/fullcalendar/fullcalendar/dist/fullcalendar.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/datatables/datatables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/datatables/datatables/media/js/dataTables.material.js"></script>

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
            "pageLength": 50
        } );
    });
</script>

<!--Sidebar-->
<script>
     // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        $('.collapsible').collapsible();
</script>

<!-- /#wrapper -->

</body>
</html>