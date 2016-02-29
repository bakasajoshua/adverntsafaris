<div class="header">
	<div class="logo_cover">
    	<div class="logo">
        	<div class="real_logo">
        		<a href="<?php echo base_url()?>home"><img src="<?php echo base_url() .'assets/logo/advernt-logo.png'?>" style="height:70px; width:189px; margin-top:2px;"/></a>
            </div>
            <div class="search_box">
	            <form>
	           		<input type="text" class="top_text" placeholder="Search"/>
	            </form>
            </div>
        </div>
    </div>
              
    <div class="after_head">
    	<div class="main_column">
<!-- Menu items contained here -->
        	<div class="menu_column">
            	<ul>
        			<li>
        				<a href="<?php echo base_url('home')?>" 
                            <?php if ($_SERVER['REQUEST_URI'] == ' '):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/maya/home'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/maya'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/maya/'):?> id="active"
                            <?php endif; ?>>Home
                        </a>
        			</li>
        			<li>
        				<a href="<?php echo base_url('news')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/maya/news'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/news'):?>
                            <?php endif; ?>>News and Events
                        </a>
        			</li>
        			<li>
        				<a href="<?php echo base_url('profiles')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/maya/profiles'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/profiles'):?>
                            <?php endif; ?>>startup profiles
                        </a>
        			</li>
        			<!-- Look up for the Blog page -->
        			<li>
        				<a href="http://www.blog.maya.co.ke/" target="_blank">Blog</a>
        			</li>
        			<!-- End of the Look up page -->
        			<li>
        				<a href="<?php echo base_url('contact')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/maya/contact'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/contact'):?>
                            <?php endif; ?>>Contact Us
                        </a>
        			</li>
		       </ul>
            </div>

<!-- End of the menu column -->

<!-- Beggining of the login section|class -->
        	<div class="after_column">

            <?php 

            if(!$this->session->userdata('is_logged_in')){?>
            	<a href="<?php echo base_url('login')?>">
                    <input type="submit" class="submit_top" style="float:right;width:80px; height:35px; margin-top:7.5px;" value="Register"/>
               	</a>

                <a href="<?php echo base_url('login')?>">    
                    <input type="submit" class="submit_top" style="float:right; width:80px; height:35px; margin-right:10px;
                     margin-top:7.5px;" value="Sign In"/>
                </a>
               <?php } 

            else { ?>

                <div class="session-box">
                 <?php  echo $this->session->userdata('f_name').' '.$this->session->userdata('l_name'); ?>
                </div>
                
              <?php  } ?>

                

            </div>
<!-- End of the loggin section|class -->
        </div>
    </div>
        
</div>