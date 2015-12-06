<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Burger House</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.4.min.js"); ?>"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="<?php echo base_url("DataTables-1.10.9/media/css/jquery.dataTables.css"); ?>" />

    <!-- DataTables -->
    <script type="text/javascript" src="<?php echo base_url("DataTables-1.10.9/media/js/jquery.dataTables.js"); ?>"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
                        <a href="user">Order</a>
                    </li>
                    <li>
                        <a href="viewOrderHistory">Order History</a>
                    </li>
                    <li>
                        <a href="inventorypage">Inventory</a>
                    </li>
                    <li>
                        <a href="view">Logout</a>
                    </li>
                    
                    </ul>
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <?php $this->load->library('session');?>
                                <?php $sessname = $this->session->userdata('username');?>
                                <a href="#"><?php echo $sessname?></a>
                            </li>
                        </ul>
                    </div>
                    </div><!--/.navbar-collapse -->
                  </div>
                </nav>
        <br>
