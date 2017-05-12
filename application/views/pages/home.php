<head>
	<title>Logi</title>
</head>
<p>Welcome to Logi, an SES focused logistics resource planning system</p>



<div class="container">
<h2>Autocomplete Search with Bootstrap Typeahead</h2>
<div class="row">
<div class="col-xs-2">
<br/>
<label>Search Name</label>
<input class="typeahead form-control" type="text" placeholder="Search Name....">
</div>
</div>
</div>

<script>
$( document ).ready(function() {
$('input.typeahead').typeahead({
source: function (query, process) {
return $.get('search-equipment.php', { query: query }, function (data) {
data = $.parseJSON(data);
return process(data);
});
},
showHintOnFocus:'all'
});
});
</script>