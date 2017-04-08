<head>
	<title>Create Vehicle - Logi</title>
</head>
<form>
	<div class="form-group">
		<label>Vehicle Name</label>
		<input type="text" class="form-control" name="name" placeholder="Eg. HBY18">
	</div>
	<div class="form-group">
		<label>Make</label>
		<input type="text" class="form-control" name="make" placeholder="Eg. Mitsubishi">
	</div>
	<div class="form-group">
		<label>Model</label>
		<input type="text" class="form-control" name="make" placeholder="Eg. 2006 Pajero">
	</div>
	<div class="form-group">
		<label>Capacity</label>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
		</select>
	</div>
	<div class="form-group">
		<label>LR License Required?</label>
		<select class="form-control">
			<option>No</option>
			<option>Yes</option>
		</select>
	</div>
	<button type="submit" class="btn btn-default">Create</button>
</form>