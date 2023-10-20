<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Men Salon Management System || Service List</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
table, th, td {
  border: 1px solid blue;
  border-collapse: collapse;
}
th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
</style>
</head>

<body style="background-color:#40E0D0; ">
   <?php include_once('includes/header.php');?>
    <div style="color:black; border-color: black;"><!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center><div style="color:black;">
                    <br>
                    <br>
                        <h2 style="font-size:50px" >Salon Service</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb" ">
                                <li><a href="index.php" style="color:black;">Home /</a></li>
                                <li class="active" style="color:black;">service list</li>
                            </ol>
                        </div>
                    </div></center>
                </div>
            </div>
        </div>
    </div><!-- /.page header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 heading-section text-center ftco-animate" style="padding-bottom: 20px; color:black;">
           
            <h2 class="mb-4">Our Service Prices</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
               <table style="  border: 20px blue;    border-style: solid;     background-color: black; color: #ffffff;   "> <thead> <tr> <th>#</th> <th>Service Name</th> <th>Service Price</th> <th>Service Description</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['ServiceName'];?></td> <td>₹<?php  echo $row['Cost'];?></td> <td><?php  echo $row['Description'];?></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
               
             
            </div>
        </div>
    </div>
    <div class="space-small bg-primary"  style="background-color:#3498DB;">
        <!-- call to action -->
        <div class="container" style="background-color:#3498DB;">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
                    <h1 class="cta-title" style="color:black;">Book your online appointment</h1>
                    <p class="cta-text" style="color:black;"> Call to action button for booking appointment.</p>
                </div>
                <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
                    <a href="appointment.php" class="btn btn-white btn-lg mt20">Book Appointment</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('includes/footer.php');?>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
