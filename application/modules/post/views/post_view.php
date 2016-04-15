<style type="text/css">
  #row{
    margin-top: 130px;
  }
  .posting{
    background-color: white;
    margin: 1.5em;
  }
  img {
    width: 280px;
    height: 200px;
  }
  textarea{
    width: 100%;
    margin-bottom: 1em;
  }
  .image-holder
    {
        width: 100%;
        padding: 40px;
    }

    #imagePreview
    {
        /*margin: 0 10px 0 100px;*/
        background-position: center center;
        background-size: cover;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
        background-image: url('<?php echo base_url();?>assets/plugins/quickview/img/item-1.jpg');
    }
</style>
<div class="row" id="row">
<div class="col-md-9">
  <div class="posting row">
  <form action="<?php echo base_url();?>post/submit" method="post" enctype="multipart/form-data">
    <div class="col-md-3">
      <div class = "image-holder" id = 'imagePreview' style=""></div>
      <div><input type = "file" class = "form-control" name = "cover" id = "uploadImage" required/></div>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="location" id="location" required>
      <label class="mdl-textfield__label" for="location">Location</label>
    </div>
    <div class="col-md-9 mdl-textfield mdl-js-textfield">
      <textarea class="mdl-textfield__input" type="text" rows= "10" id="post" name="post" required></textarea>
      <label class="mdl-textfield__label" for="post">Write Post...</label>
    </div>
    <div>
      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white;">
        Post
      </button>
    </div>
  </form>
  </div>
  
  <div>
  <!-- cd-items -->
  <!-- <ul class="cd-items cd-container">
    <?php echo $records; ?>
  </ul> -->
  <!-- cd-items -->
  <div class="row">
    <?php echo $records;?>
  </div>
 
  </div>
</div>
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
 <script type="text/javascript">
        $(document).ready(function(){
             

        width = $('.image-holder').width();
        
        height = width;
        width = height;
        
        $('.image-holder').height(height);
        $('.image-holder').width(width);
        

        $(function() {
            $("#uploadImage").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader)  return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadstart = function(){
                        $("#imagePreview").text('Please Wait...');
                        $("#imagePreview").css("background-color", "rgba(0,0,0,0.8)");
                    }
                    reader.onloadend = function(){ // set image data as background of div
                        $("#imagePreview").css("background-image", "url("+this.result+")");
                        $("#imagePreview").text('');
                    }
                }
            });
        });

        });

        function like_button_clicked(id)
        {
          $.get('<?php echo base_url();?>post/likes/'+id, function(data){
            obj =jQuery.parseJSON(data);
            $('#like_button'+id).html('<i class="glyphicon glyphicon-thumbs-up" style="margin-right: 0.2em;"></i><span class="badge">'+obj+'</span>');
          });
          // <i class="glyphicon glyphicon-thumbs-up" style="margin-right: 0.2em;"></i><span class="badge">'.$value['likes'].'</span>
        }
        
        </script>