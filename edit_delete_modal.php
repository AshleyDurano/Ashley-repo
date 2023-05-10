<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">

			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" readonly>
					</div>
				</div>

			

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" value="<?php echo $row->firstname; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row->lastname; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">School:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Gender:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gender" value="<?php echo $row->gender; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Course:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="course" value="<?php echo $row->course; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Department:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="department" value="<?php echo $row->department; ?>">
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
				<div class="two-button">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="remove">❌</span> Cancel</button>  
				<button type="submit" name="edit" class="btn-save"><span class="floppy">✔️</span> Update</a>
			</div>
					
			</form>
            </div>
 
        </div>
    </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body-delete">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center">Name: <?php echo $row->firstname.' '.$row->lastname; ?></h2>
			</div>
            <div class="modal-footer">
				<div class="two-button">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="remove">❌</span> Cancel</button> 
                <a href="delete.php?id=<?php echo $row->id; ?>" class="btn-save" style="text-decoration: none;"><span class="floppy">✔️</span> Yes</a>
            </div>
			</div>
 
        </div>
    </div>
</div>