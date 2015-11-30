<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">The Burger House</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                    <li>
                        <a href="admin">Order</a>
                    </li>
                    <li>
                        <a href="vieworderhistory">Order History</a>
                    </li>
                    <li>
                        <a href="inventorypage">Inventory</a>
                    </li>
                    <li>
                        <a href="view">Logout</a>
                    </li>
                    
                </ul>
                    </div><!--/.navbar-collapse -->
                  </div>
                </nav>
        
   <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order History
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div>
            <a href="generateSOR" class="btn btn-primary">Generate Sales Order Report</a>
        </div>
        <br>

        <div  style="float:left;">
        <table class="table table-striped table-bordered" id="ordertable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>

            <?php foreach ($query as $row): { ?>
            <tr>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['time'];?></td>
                <td><?php echo $row['pname'];?></td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['price'];?></td>
            </tr>    
            <?php } ?>
            <?php endforeach; ?>


        </table>
        <br>
    </div>
    <div>

    </div>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#ordertable').DataTable();
        } );
        </script>


    <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirm Purchase</h4>
              </div>
              <div class="modal-body">
              <form method = "post" action="addinventory" name="addinventory">
                  <p>What inventory item would you like to add?</p>
                  <input type="text" placeholder="Item Name" class="form-control" id="invname" name="invname">
                  <input type="number" placeholder="Item Quantity" class="form-control" id="invqty" name="invqty">
                  <input type="number" placeholder="Item Classification" class="form-control" id="invclass" name="invclass">
    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                <input type="submit" class = "btn btn-primary" value="Confirm">
                </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->
