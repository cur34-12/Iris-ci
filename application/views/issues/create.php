<head>
	<title>Create Issue - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Create Issue</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">Related Equipment</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_eq_id" id="iss_eq_id">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Test Label</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="testInput" id="testInput">
			<input type="hidden" id="testInput-id">
			<p id="testInput-description"></p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="title" placeholder="Eg. Chainbreak non-functional">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="iss_make" placeholder="Eg. Chainsaw took a fall and now the break no longer engages when activated."></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reporting Member</label>
		<div class="col-sm-10">
			<select id=iss_reporter_id" name="iss_reporter_id" class="form-control" >
				<?php foreach($members as $member): ?>
        				<option value="<?php echo $member['member_id']; ?>"><?php echo $member['member_name']; ?></option>
        		<?php endforeach; ?>
        	</select>
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Reported Date</label>
	        <div class='col-sm-10 input-group date'>
	            <input type='text' class="form-control" id='iss_reported_date' name="iss_reported_date"/>
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Assigned User</label>
		<div class="col-sm-10">
			<select id="iss_assigned_user" name="iss_assigned_user" class="form-control" >
				<?php foreach($usernames as $username): ?>
        				<option value="<?php echo $username['id']; ?>"><?php echo $usernames['username']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
	</div>

	<!-- Hidden Values -->
	<div class="form-group">
		<!-- New Status -->
		<input type="text" class="form-control" name="iss_status" value="New" hidden>
		<!-- Created By User -->
		<input id="iss_creator_id" type="text" class="form-control" name="iss_creator_id" placeholder="" value="<?php echo $this->ion_auth->user()->row()->username; ?>" hidden>
	</div>

	<button type="submit" class="btn btn-default">Create</button>
</form>

<script type="text/javascript">
$(function() {
    
    //autocomplete
    $("#iss_eq_id").autocomplete({
        source: "/search-equipment.php",
        minLength: 3
    });                

});
$( function() {
    var projects = [
      {
        eq_name: "jquery",
        searchValue: "the write less, do more, JavaScript library"
      },
      {
        eq_name: "jquery-ui",
        searchValue: "the official user interface library for jQuery"
      },
      {
        eq_name: "sizzlejs",
        searchValue: "a pure-JavaScript CSS selector engine"
      }
    ];

        $( "#testInput" ).autocomplete({
      minLength: 0,
      //source: projects,
      source: "/search-equipment.php",
      focus: function( event, ui ) {
        $( "#testInput" ).val( ui.item.eq_name );
        return false;
      },
      select: function( event, ui ) {
        $( "#testInput" ).val( ui.item.eq_name );
        $( "#testInput-id" ).val( ui.item.eq_name );
        $( "#testInput-description" ).html( ui.item.searchValue );

        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.eq_name + "<br>" + item.searchValue + "</div>" )
        .appendTo( ul );
    };
  } );

</script>
1
<script type="text/javascript">
	$('#iss_reported_date').datepicker({
	    format: "dd/mm/yyyy",
	    todayBtn: "linked",
	    clearBtn: true,
	    autoclose: true,
	    todayHighlight: true
	});
</script>
