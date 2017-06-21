</head>
<body>
<ul id="slide-out" class="side-nav">
    <li><a href="<?php echo base_url(); ?>">Home</a></li>
    <li><a href="<?php echo base_url(); ?>about">About</a></li>
    <li><a href="<?php echo base_url(); ?>calendar">Calendar</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Equipment<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>equipment">List</a></li>
                        <li><a href="<?php echo base_url(); ?>equipment-groups">Groups</a></li>
                        <li><a href="<?php echo base_url(); ?>issues">Issues</a></li>
                        <li><a href="<?php echo base_url(); ?>suppliers">Suppliers</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a href="<?php echo base_url(); ?>vehicles">Vehicles</a></li>
    <li><a href="<?php echo base_url(); ?>members">Members</a></li>
    <li><a href="<?php echo base_url(); ?>locations">locations</a></li>
</ul>

<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>