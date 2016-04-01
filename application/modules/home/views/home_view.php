
    <div class="wrapper">
    
        <div class="row slide_coover">
            
    <!--start of the posts section  -->
            <div class ="col-md-9">
            <!-- Import of the the preview views -->
                <!-- Carousel================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="first-slide" src="<?php echo base_url().'assets/bg-images/safari.jpg'?>" alt="First slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>Discover the World.</h1>
                          <p>Get to hear stories of the adventures people experience and plan for your own.</p>
                          <?php if(!$this->session->userdata('is_logged_in')){?>
                            <p><a class="btn btn-lg btn-primary" href="<?php echo base_url().'signup'?>" role="button">Sign up today</a></p>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img class="second-slide" src="<?php echo base_url().'assets/bg-images/nature.jpg'?>" alt="Second slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>Share your experience.</h1>
                          <p>Tell others of the amazing experience you have had as you travelled and enjoyed the beauty the world has to offer.</p>
                          <?php if(!$this->session->userdata('is_logged_in')){?>
                          <p><a class="btn btn-lg btn-primary" href="<?php echo base_url().'login'?>" role="button">Sign In</a></p>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img class="third-slide" src="<?php echo base_url().'assets/bg-images/wildlife-africa.jpg'?>" alt="Third slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>Relate.</h1>
                          <p>Share stories with others just like you who have been able to enjoy the beauty and plan for more adventure.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!-- /.carousel -->
                <!--Beginning of posts-->
                <div class="row">
                  <ul class="cd-items cd-container">
                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->

                    <li class="cd-item">
                      <img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Item Preview">
                      <a href="#0" class="cd-trigger">Quick View</a>
                    </li> <!-- cd-item -->
                  </ul> <!-- cd-items -->

                  <div class="cd-quick-view">
                    <div class="cd-slider-wrapper">
                      <ul class="cd-slider">
                        <li class="selected"><img src="<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg" alt="Product 1"></li>
                        <li><img src="<?php echo base_url();?>assets/plugins/quickview/img/item-2.jpg" alt="Product 2"></li>
                        <li><img src="<?php echo base_url();?>assets/plugins/quickview/img/item-3.jpg" alt="Product 3"></li>
                      </ul> <!-- cd-slider -->

                      <ul class="cd-slider-navigation">
                        <li><a class="cd-next" href="#0">Prev</a></li>
                        <li><a class="cd-prev" href="#0">Next</a></li>
                      </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->

                    <div class="cd-item-info">
                      <h2>Adventures</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam eveniet quo, ullam itaque expedita impedit. Eveniet, asperiores amet iste repellendus similique reiciendis, maxime laborum praesentium.</p>

                      <ul class="cd-item-action">
                        <li><button class="add-to-cart">Read More</button></li>         
                      </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                    <a href="#0" class="cd-close">Close</a>
                  </div> <!-- cd-quick-view -->
                </div>
                <!--End of posts-->
            </div>
    <!-- end of the posts section -->
            <div class="col-md-3 in_slideA">
                <div class="top_strip" style="border-bottom:thin dotted #c7cdd0;">
                    <div class="top_stripA" style="text-indent:5px;">Adverntsafaris on twitter</div>
                    <!-- <div class="top_stripB"><center><img src="<?php// echo base_url() .'assets/icons/2_.png'?>" style="height:20px;"/></center></div> -->
                </div>

                <!--embeded twitter timelines -->
                <div class="mid_in_slideA">
                     <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mayakenya777" data-widget-id="560375035853287424">AdverntSafaris on Twitter</a>
                     <script src="<?php echo base_url() .'assets/js/social_media/twitter.js'?>"></script>
                    
                </div>
                <!-- End of embede twitter timelines -->
                <!-- Footer of the partnership column -->
                <div class="top_strip" style="border-top:thin dotted #c7cdd0;">
                    <div class="top_stripA" style="margin-top:0px; color:#FFF; text-indent:5px;"><a href="#">Recommended tours </a></div>
                    <!-- <div class="top_stripB"><center><img src="<?php //echo base_url() . 'assets/icons/2__.png'?>" style="height:20px;"/></center></div> -->
                </div>
            
            </div>
        </div>
    

    </div>