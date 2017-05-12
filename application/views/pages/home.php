<head>
	<title>Logi</title>
</head>
<p>Welcome to Logi, an SES focused logistics resource planning system</p>



<div class="row">
	<div class="col-md-12 text-center">
		<br/>
		<h1>Search Dynamic Autocomplete using Bootstrap Typeahead JS</h1>	
			<input class="typeahead form-control" style="margin:0px auto;width:300px;" type="text">
	</div>
</div>

<script type="text/javascript">

	$('input.typeahead').typeahead({
	    source:  function (query, process) {
        return $.get('/search-equipment.php', { query: query }, function (data) {
        		console.log(data);
        		data = $.parseJSON(data);
	            return process(data);
	        });
	    }
	});

</script>