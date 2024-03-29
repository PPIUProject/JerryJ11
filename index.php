
<!DOCTYPE html>
<html lang="en">
<?php
	require('config/dbconfig.php');
	
?>

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="SHORTCUT ICON" href="img/xD.ico" type="image/x-icon">
      <title>J11 News</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="js/jquery-3.4.0.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Koulen|Battambang" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton|Nunito+Sans" rel="stylesheet">
      <link rel="stylesheet" href="css/animate.css">
</head>

<body>
      <!-- Fixed navbar -->
      <div class="container-fluid ">
            <div class="row">
                  <nav class="navbar navbar-inverse navbar-fixed-top" style="background: black;">
                        <div class="container">
                              <div class="row">
                                    <div class="navbar-header">
                                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                          </button>
                                          <a class="navbar-brand" href="#"><img src="img/logo.png"
                                                      class="img-responsive" alt="Image"
                                                      style="transform: translateY(-9.5px);border-radius: 5px;"></a>
                                    </div>
                                    <div id="navbar" class="navbar-collapse collapse">
                                          <ul class="nav navbar-nav" style="font-family: Koulen;font-size: 20px;">
                                          <li ><a href="/PPIU_Project/JerryJ11/">ព័ត៍មាន</a></li>
								<?php
									$result=$conn->query("SELECT * FROM tbl_cat");
									while($row = $result->fetch_assoc()) {?>
										<li ><a href="?cate=<?php echo $row['en_name'] ?>"><?php echo $row['cate'] ?></a></li>
								<?php	  }
								?>
                                                
                                                <!-- <li><a href="pages/technology.html">បច្ចេកវិទ្យា</a></li>
                                                <li><a href="#">ជីវិតនិងសង្គម</a></li>
                                                <li><a href="#">កីឡា</a></li>
                                                <li><a href="#">សុខភាព</a></li>
                                                <li><a href="#">ប្លែកៗ</a></li> -->
                                          </ul>
                                          <ul class="nav navbar-nav navbar-right" style="font-size: 20px;">
                                                <li><a href="../navbar/"><i class="fa fa-facebook"
                                                                  aria-hidden="true"></i></a></li>
                                                <li><a href="../navbar-static-top/"><i class="fa fa-twitter"
                                                                  aria-hidden="true"></i></a></li>
                                                <li class="active"><a href="./"><i class="fa fa-instagram"
                                                                  aria-hidden="true"></i> <span
                                                                  class="sr-only">(current)</span></a></li>
                                          </ul>
                                    </div>
                              </div>
                              <!--/.nav-collapse -->
                        </div>
                  </nav>
            </div>
      </div>

      <div class="hidden-xs hidden-sm col-md-12 col-lg-12 ">
            <div class="row">
                  <div class="container-fluid" style="background: #e6e6e6;height: 326px;margin-top: 20px;">
                        <div class="container">
                              <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <div class="row">
                                                <img class="bads" src="img/2.gif" alt="Image">
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <?php
           
            if(isset($_GET['cate'])){
                  require('pages/technology.php');
            }elseif(isset($_GET['article'])){
                  require('pages/article.php');
            }
                  else {
                  require('pages/home.php');
            }
      ?>                                                  
     
      <div class="container-fluid footer">
            <div class="container">
                  <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="row">
                                    <div class="com">
                                          <p><i class="fa fa-commenting-o" aria-hidden="true"></i> COMMUNITY</p>
                                    </div>
                                    <div class="for1">
                                          <a href="#" class="color">Forums</a>
                                    </div>
                                    <div class="for2">
                                          <a href="#" class="color">Help</a>
                                    </div>
                                    <div class="for3">
                                          <a href="#" class="color">Request</a>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="row">
                                    <div class="com">
                                          <p><i class="fa fa-cloud" aria-hidden="true"></i> CONNECT</p>
                                    </div>
                                    <div class="for1">
                                          <a href="#" class="color">Jerry</a>
                                    </div>

                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="row">
                                    <div class="com">
                                          <p><i class="fa fa-info-circle" aria-hidden="true"></i> WEBSITE INFO</p>
                                    </div>
                                    <div class="for1">
                                          <a href="pages/aboutus.html" class="color">About Us</a>
                                    </div>
                                    <div class="for2">
                                          <a href="#" class="color">Contact Us</a>
                                    </div>

                              </div>
                        </div>
                  </div>
            </div>
      </div>


      <div class="container-fluid l-f">
            <div class="container">
                  <div class="row cc">
                        <p>© Copyright J11 News.<br>All Rights Reserved.</br></p>
                  </div>
            </div>
      </div>

      <script src="js/bootstrap.min.js"></script>
      <script src="js/wow.js"></script>
      <script>
      new WOW().init();
      </script>
</body>

</html>