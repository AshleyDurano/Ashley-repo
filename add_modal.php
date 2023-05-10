<!-- Add New -->
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

            <div class="modal-header">
                <center><h4>Registration Form</h4></center>
            </div>

        <div class="modal-body">
			<div class="container-fluid">
				<form method="POST" action="add.php">

					<div class="row form-group">
							<label class="control-label" >Username:</label>
							<input type="text" class="form-control" name="username" required>
					</div>
					<div class="row form-group">
							<label class="control-label" >Password:</label>
							<input type="password" class="form-control" name="password" required>
					</div>			
					<div class="two-button">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="remove">❌</span> Cancel</button>
						<button type="submit" name="add" class="btn-save"><span class="floppy">✔️</span> Save</a>
					</div>
				</form>
            </div>
		</div>
