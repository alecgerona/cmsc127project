<br>
<br>
<div class="row">
    <div style="padding-left:5%;">
        <a data-toggle="modal" data-target="#addAdmin" class = "btn btn-default">Add new Admin account</a>
        <a data-toggle="modal" data-target="#addUser" class = "btn btn-default">Add new User account</a>
    </div>

</div>
<br>


<div class="row" style="padding-left:1%;">

<?php foreach ($query as $row): { ?>
       <div class="col-lg-5">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object dp img-circle" src="http://placehold.it/700x400" style="width: 100px;height:100px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $row['name'];?><small> Admin</small></h4>
                <h5>@<?php echo $row['username'];?></h5>
                <h5>Password: <?php echo $row['password'];?></h5>
                <a data-toggle="modal" data-target="#myModal" class="btn-sm btn-warning" onclick="editselection('<?php echo $row['name'];?>', '<?php echo $row['username'];?>', '<?php echo $row['password'];?>', '<?php echo $row['adminid'];?>')">Edit</a>
                <a data-toggle="modal" data-target="#deleteModal" onclick="deleteadmin('<?php echo $row['name'];?>', '<?php echo $row['adminid'];?>')"class="btn-sm btn-danger">Delete</a>
                <hr style="margin:8px auto">
            </div>
        </div>

    </div>        

<?php } ?>
<?php endforeach; ?>
</div>
<br>

<div class ="row" style="padding-left:1%;">
<?php foreach ($query2 as $row): { ?>
       <div class="col-lg-5">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object dp img-circle" src="http://placehold.it/700x400" style="width: 100px;height:100px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $row['name'];?><small> User</small></h4>
                <h5>@<?php echo $row['username'];?></h5>
                <h5>Password: <?php echo $row['password'];?></h5>
                <a data-toggle="modal" data-target="#editUser" onclick="editUser('<?php echo $row['name'];?>', '<?php echo $row['username'];?>', '<?php echo $row['password'];?>', '<?php echo $row['userid'];?>')" class="btn-sm btn-warning">Edit</a>
                <a data-toggle="modal" data-target="#deleteUser" onclick="deleteuser('<?php echo $row['name'];?>', '<?php echo $row['userid'];?>')" class="btn-sm btn-danger">Delete</a>
                <hr style="margin:8px auto">
                
            </div>
        </div>

    </div>        

<?php } ?>
<?php endforeach; ?>
</div>

<!-- Add Modal for users -->
        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add User Account</h4>
              </div>
              <div class="modal-body">
              <form action="adduser" method="POST">
                <input type="text" class="form-control" id="addusername" name="addusername" placeholder="Name">
                <br>
                <input type="text" class="form-control" id="adduserusername" name="adduserusername" placeholder="Username">
                <br>
                <input type="text" class="form-control" id="adduserpassword" name="adduserpassword" placeholder="Password">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Confirm">
              </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->

<!-- Add Modal for admins -->
        <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Admin Account</h4>
              </div>
              <div class="modal-body">
              <form action="addadmin" method="POST">
                <input type="text" class="form-control" id="addadminname" name="addadminname" placeholder="Name">
                <br>
                <input type="text" class="form-control" id="addadminusername" name="addadminusername" placeholder="Username">
                <br>
                <input type="text" class="form-control" id="addadminpassword" name="addadminpassword" placeholder="Password">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Confirm">
              </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->

    <!-- Delete Modal for users -->
        <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete User Account</h4>
              </div>
              <div class="modal-body">
              <form action="deleteuser" method="POST">
                <p id="deleteusername"></p>
                <input type="hidden" class="form-control" id="deleteuserid" name="deleteuserid" value="">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Confirm">
              </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->

<!-- Edit Modal for users -->
        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit User Account</h4>
              </div>
              <div class="modal-body">
              <form action="updateuser" method="POST">
                <p>Name:</p>
                <input type="text" class="form-control" id="editusername" name="editusername" value="">
                <br>
                <p>Username:</p>
                <input type="text" class="form-control" id="edituserusername" name="edituserusername" value="">
                <br>
                <p>Password:</p>
                <input type="text" class="form-control" id="edituserpassword" name="edituserpassword" value="">
                <input type="hidden" class="form-control" id="edituseruserid" name="edituseruserid" value="">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Confirm">
              </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->

<!-- Delete Modal for admins -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Admin Account</h4>
              </div>
              <div class="modal-body">
              <form action="deleteadmin" method="POST">
                <p id="deleteadminname"></p>
                <input type="hidden" class="form-control" id="deleteadminadminid" name="deleteadminadminid" value="">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Confirm">
              </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->

<!-- Edit Modal for admins -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Admin Account</h4>
              </div>
              <div class="modal-body">
              <form action="updateadmin" method="POST">
                <p>Name:</p>
                <input type="text" class="form-control" id="inputadminname" name="inputadminname" value="">
                <br>
                <p>Username:</p>
                <input type="text" class="form-control" id="inputadminusername" name="inputadminusername" value="">
                <br>
                <p>Password:</p>
                <input type="text" class="form-control" id="inputadminpassword" name="inputadminpassword" value="">
                <input type="hidden" class="form-control" id="inputadminadminid" name="inputadminadminid" value="">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Confirm">
              </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->