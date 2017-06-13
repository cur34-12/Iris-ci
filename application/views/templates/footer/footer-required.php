</div>
</div>
<div style="padding-top: 2%;">
</div>
</div>

<!-- JQuery / UI -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!--Bootstrap-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

<!-- Moment Time Parser-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>

<!-- Chart.js -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>

<!-- Full Calendar -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.15/af-2.2.0/cr-1.3.3/r-2.1.1/sc-1.4.2/se-1.2.2/datatables.min.js"></script>

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

<!--Sidebar-->
<script>
    $(document).ready(function () {
        var trigger = $('.hamburger'),
            //overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed === true) {
                //overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                //overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });
</script>

</div>
<!-- /#wrapper -->

</body>
</html>