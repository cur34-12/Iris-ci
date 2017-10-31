<h2 style="text-transform: uppercase;">Calendar</h2>
<hr />
<div id='calendar'></div>
<script>
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            header: {
                left: 'today prev,next prevYear,nextYear',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'

            },
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: false, // allow "more" link when too many events
            events: [
                <?php foreach($events as $event) : ?>
                    {
                        title:'<?php echo $event['event_title']; ?>',
                        start:'<?php echo $event['event_start']; ?>',
                        end:'<?php echo $event['event_end']; ?>',
                        url:'<?php echo site_url('/events/'. $event['event_id']); ?>',
                        allDay: '<?php echo $event['event_allday']; ?>'
                    }
                <?php endforeach; ?>
            ]
        });
    });
</script>