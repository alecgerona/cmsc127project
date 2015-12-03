<br>
<br>
<div class="row">

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
                <a data-toggle="modal" data-target="#myModal" class="btn-sm btn-warning" onclick="editselection('<?php echo $row['name'];?>', '<?php echo $row['username'];?>', '<?php echo $row['password'];?>'')">Edit</a>
                <a href="#" class="btn-sm btn-danger">Delete</a>
                <hr style="margin:8px auto">
            </div>
        </div>

    </div>        

<?php } ?>
<?php endforeach; ?>
</div>

<div class ="row">
<?php foreach ($query2 as $row): { ?>
       <div class="col-lg-5">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object dp img-circle" src="http://placehold.it/700x400" style="width: 100px;height:100px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $row['fname'] . " " . $row['mname'] . ". " . $row['lname'];?><small> User</small></h4>
                <h5>@<?php echo $row['username'];?></h5>
                <hr style="margin:8px auto">
                <a data-toggle="modal" data-target="#myModal" class="btn-sm btn-warning">Edit</a>
                <a href="#" class="btn-sm btn-danger">Delete</a>
            </div>
        </div>

    </div>        

<?php } ?>
<?php endforeach; ?>
</div>

<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Account</h4>
              </div>
              <div class="modal-body">
              <form action="purchase" method="POST">
                <input type="text" class="form-control" id="username" name="username" value="">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->