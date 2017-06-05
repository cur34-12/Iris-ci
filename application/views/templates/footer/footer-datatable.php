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