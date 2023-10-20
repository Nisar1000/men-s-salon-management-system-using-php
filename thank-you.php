<?php
session_start();
error_reporting(0);

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
     <title>Men Salon Management System || Thank You Page</title>
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
</head>

<body style="background-color:#ffecb3;">
    <?php include_once('includes/header.php');?>
    <div >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title" style="color:black;font-size :50px;">Thank You</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb" ">
                                <li><a href="index.php" style="color:black;">Home</a></li>
                                <li class="active"style="color:black;">Thank You</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-block post-quote" style="background-color:#ffecb3;">
                        <div class="row ">
                        
                            <div class="col-md-12">
                                <div class="quote-content">
                                 <blockquote style="color:black;">“Thank you for Booking your Appointment Number is <b style="color:black; "><?php echo $_SESSION['aptno'];?> </b>take a screen shot or note this number ”</blockquote>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php include_once('includes/footer.php');?>
    
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
