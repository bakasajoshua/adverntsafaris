
<!-- End of other page contents -->
    <div class="container footer">
    	<div class="sub_footerA">
        	<div class="row in_sub_footerA">
            	<div class="footer_classA col-md-4">
                	<div class="foot_strip" style="height:34px; border-bottom:dotted thin #FFF;">
                    	<h1 style="color:#FFF;">Monthly Newsletter</h1></div>
                    	<div class="foot_strip" style="height:55px;">
                        <h2>Leave us your E-mail address to get 
                        our monthly read, we believe in you thus a worthy read...</h2></div>
                        
                        <div class="foot_strip" style="height:45px; margin-top:10px;">

                        <!-- Monthly News letter form -->
	                        <form method="POST" action="<?php echo base_url('home/subscribe');?>">
		                        <input type="email" name="subscribe" class="text_footer" placeholder="email address" 
		                        style="margin-top:5px; width:250px; height:25px;"/>
		                        <input class="submit" type="submit" value="SUBMIT" style="width:120px;"/>
	                        </form>
                        <!-- End of the Monthly NewsLetter -->

                        </div>
                </div>
                
                <div class="col-md-4 footer_classB" style="margin-left:15px;">
                	<div class="foot_strip" style="height:35px; border-bottom:dotted thin #FFF;">
                    	<h1 style="color:#FFF;">About Us</h1>
                    </div>
                    	<div class="footer-class-google-plus">
                            <div class="g-person" data-width="340" data-href="https://plus.google.com/101854743505501687649" data-theme="dark" data-layout="landscape" data-rel="author"></div>
                        </div>
                </div>
                
                <div class="col-md-4 footer_classB" style="margin-left:15px; text-align:right;">
                    <div class="foot_strip" style="height:35px; border-bottom:dotted thin #FFF;">
                        <h1 style="color:#FFF;">Contact Us</h1>
                    </div>
                	<br /><br /><br />
                	&copy;Market and Advertise You Africa. <?php echo date ("Y")?>.<br /> All rights reserved.
                </div>
            </div>
        </div>
    </div>

<!-- End of Footer -->
    
</div><!--End of class hero(header_view)-->
</div><!--End of class container(header_view)-->
</body>
</html>
