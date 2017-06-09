</div>
<div style="padding-top: 2%;">
</div>

<!-- JQuery / UI -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!--Bootstrap-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

<!-- Moment Time Parser-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>

<!-- Chart.js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<!-- Init of Moment-->
<script type="text/javascript">
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
            "pageLength": 25
        } );
    });
</script>

</body>
</html>