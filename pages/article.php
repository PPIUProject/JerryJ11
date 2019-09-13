<?php
      $result1=$conn->query("SELECT * FROM `tbl_art` WHERE id=".$_GET['article']);
      $row1 = $result1->fetch_assoc();
      // var_dump($row1);
?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="content-container">
                        <div class="title justify-content-center"><?php echo $row1['title'] ?>​ </div>
                        <hr>
                        <div class="news-content">
                               <p class="jr"><?php echo $row1['content'] ?></p>
                               <div class="image">
                                <img width="100%" src="https://ichef.bbci.co.uk/news/976/media/images/83351000/jpg/_83351965_explorer273lincolnshirewoldssouthpicturebynicholassilkstone.jpg" alt="">
                            	</div>
                            
                            
                            </div>
                       
                    </div>
                </div>
                <div class="col-xs-12 hidden-sm col-md-3 col-lg-3">
					
                	<div class="row">
                		<div class="ad" style="margin-top: 60px;background-image: url('http://cdn.sabay.com/cdn/ads.sabay.com/images/e2e68f52104c85e2584b7f3d402b65ad.gif')"></div>
                	</div>	
                </div>
            
            </div>
        </div>
    </div>
























    