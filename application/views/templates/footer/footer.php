</div>
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
    $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isOpen = true;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isOpen == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isOpen = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isOpen = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });
</script>

<!-- /#wrapper -->

</body>
</html>