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
                <hr style="margin:8px auto">
                <a href="#" class="btn-sm btn-warning">Edit</a>
                <a href="#" class="btn-sm btn-danger">Delete</a>
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
                <a href="#" class="btn-sm btn-warning">Edit</a>
                <a href="#" class="btn-sm btn-danger">Delete</a>
            </div>
        </div>

    </div>        

<?php } ?>
<?php endforeach; ?>
</div>
