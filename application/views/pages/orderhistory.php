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
        <div align="center">
            <a href="generateSOR" class="btn btn-primary">Generate Sales Order Report</a>
        </div>
        <br>

        <div  align="center">
        <table class="table table-striped table-bordered" id="ordertable">
            <thead>
                <tr>
                    <th>Ordered by</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>

            <?php foreach ($query as $row): { ?>
            <tr>
                <td><?php echo $row['username'];?></td>
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
