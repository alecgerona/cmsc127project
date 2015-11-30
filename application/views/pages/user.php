   <!-- Page Content -->

    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div id="sampletable" style="float:left; position:fixed">
        <table class="table table-hover" id="ordertable">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th></th> <!--Place holders for the delete and move up/down buttons -->
                </tr>
            </thead>


        </table>
        <h5>Total Cost:</h6>
        <p id="totalcost"></p>
        <button class = "btn btn-success" id="export-btn" data-toggle = "modal" data-target = "#purchaseModal"> Purchase </button>
        </div>

        
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onclick="add('Beefy Burger', bbprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Beefy Burger', bbprice)">Beefy Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Beefy Burger'";
                    $query = $this->db->query($sql);

                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;

                }
                 ?></p>
                 <script type="text/javascript">
                    var bbprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
                
            </div>
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onclick="add('Double Beefy Burger', dbprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Double Beefy Burger', dbprice)">Double Beefy Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Double Beefy Burger'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>

                 <script type="text/javascript">
                    var dbprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onclick="add('Triply Beefy Burger', tbprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Triply Beefy Burger', tbprice)">Triply Beefy Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Triply Beefy Burger'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var tbprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Cheesy Beefy Burger', cbbprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Cheesy Beefy Burger', cbbprice)">Cheesy Beefy Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Cheesy Beefy Burger'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var cbbprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Cheesy Doubly Beefy Burger', cdbbprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Cheesy Doubly Beefy Burger', cdbbprice)">Cheesy Doubly Beefy Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Cheesy Doubly Beefy Burger'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var cdbbprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Burger++', bprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Burger++', bprice)">Burger++</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Burger++'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var bprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Burger--', bminusprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Burger--', bminusprice)">Burger--</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Burger--'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var bminusprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>

            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Chiky Burger', chikyprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Chiky Burger', chikyprice)">Chiky Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Chiky Burger'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var chikyprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Veg-eta Burger', vegprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Veg-eta Burger', vegprice)">Veg-eta Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Veg-eta Burger'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var vegprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-2 portfolio-item"  style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Hotspot Burger', hotprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Hotspot Burger', hotprice)">Hotspot Burger</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Hotspot Burger'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var hotprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item" style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Burgerlette', bletteprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Burgerlette', bletteprice)">Burgerlette</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Burgerlette'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var bletteprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item" style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Fries', fprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Fries', fprice)">Fries</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Fries'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var fprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-2 portfolio-item" style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Nachos', nprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Nachos', nprice)">Nachos</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Nachos'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var nprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item" style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Nacho-Fries', nfprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Nacho-Fries', nfprice)">Nacho-Fries</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Nacho-Fries'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var nfprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
            <div class="col-md-2 portfolio-item" style="float:right;">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="" data-toggle="modal" data-target="#myModal" onClick="add('Drinks', dprice)">
                </a>
                <h4>
                    <a href="#" data-toggle="modal" data-target="#myModal" onClick="add('Drinks', dprice)">Drinks</a>
                </h4>
                <?php
                    $sql = "SELECT price FROM product where pname='Drinks'";
                    $query = $this->db->query($sql)
                ?>
                <p>Php <?php foreach($query->result() as $row){
                    echo $row->price;
                }
                 ?></p>
                 <script type="text/javascript">
                    var dprice = <?php foreach($query->result() as $row){
                                    echo $row->price;

                                }
                            ?>
                 </script>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    </div>
        
    <script type="text/javascript">
        var capnum = 0;
        var pname;
        var dropdown1;
        var currentprice;
        var totalprice;
        var selectedquantity = 1;
        var supertotalprice = 0;
        var orderlist = new Array();
        var orderqtylist = new Array();
        var orderpricelist = new Array();
        function add(pnamefromclick, currprice){
             pname = pnamefromclick;
             currentprice = currprice;
             document.getElementById("printproductname").innerHTML = pname;
        }



        function insert(){

            dropdown1 = document.getElementById("quantityselect");

            selectedquantity = document.getElementById("quantityselect").value;
            totalprice = selectedquantity * currentprice;

            supertotalprice += totalprice;
            document.getElementById("totalcost").innerHTML = supertotalprice;

            var table = document.getElementById("ordertable");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            cell1.innerHTML = "<div contenteditable>"+pname+"</div>";
            cell2.innerHTML = "<div contenteditable>"+selectedquantity+"</div>";
            cell3.innerHTML = "<div contenteditable>"+totalprice+"</div>";
            var bt = document.createElement("BUTTON");
            bt.className = 'table-remove glyphicon glyphicon-remove';
            cell4.appendChild(bt);

            
        }

        function cleartable(){
            var table = document.getElementById("ordertable");
            var rowCount = table.rows.length;
            while(table.rows.length > 1) {
              table.deleteRow(-1);
            }
        }

        function getOrderlist(){


        }
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

              <p id="printproductname"></p>
              <p>Choose how much to purchase.</p>
                <!-- Dropdown for quantity-->
                <select id="quantityselect">
                    <?php for ($i = 1; $i <= 100; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <!-- End of Dropdown for quantity-->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="insert()">Confirm</button>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->

    <!-- Modal -->
        <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirm Purchase</h4>
              </div>
              <div class="modal-body">

              <p>Are you sure you want to purchase?</p>
              <form action="purchase" method="POST">
                <input type="hidden" name="orderlist" id="orderlist" value="">
              

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                <input type="submit" class = "btn btn-success" value="Purchase">
                </form>
              </div>
            </div>
          </div>
        </div>
    <!--End Modal -->