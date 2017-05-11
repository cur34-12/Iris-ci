<head>
	<title>Logi</title>
</head>
<p>Welcome to Logi, an SES focused logistics resource planning system</p>


<style>
#custom-templates .empty-message {
  padding: 5px 10px;
 text-align: center;
}
</style>

<div id="custom-templates">
  <input class="typeahead" type="text" placeholder="Oscar winners for Best Picture">
</div>

<script>
$('#custom-templates .typeahead').typeahead(null, {
  name: 'best-pictures',
  display: 'value',
  source: bestPictures,
  templates: {
    empty: [
      '<div class="empty-message">',
        'unable to find any Best Picture winners that match the current query',
      '</div>'
    ].join('\n'),
    suggestion: Handlebars.compile('<div><strong>{{value}}</strong> – {{year}}</div>')
  }
});
</script>