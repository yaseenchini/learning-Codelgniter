         
        </div>
      </div>
    </div>
  </div>
	</div> 
	
</div>

  
	<script src="<?= base_url('assets/js/jquery.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.cookie/jquery.cookie.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.pushmenu/js/jPushMenu.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.nanoscroller/jquery.nanoscroller.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.sparkline/jquery.sparkline.min.js');?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/jquery.ui/jquery-ui.js');?>" ></script>
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.gritter/js/jquery.gritter.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/behaviour/core.js');?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/jquery.select2/select2.min.js');?>"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="<?= base_url('assets/js/bootstrap/dist/js/bootstrap.min.js');?>"></script>
      <style type="text/css">
    #color-switcher{
      position:fixed;
      background:#272930;
      padding:10px;
      top:50%;
      right:0;
      margin-right:-109px;
    }
    
    #color-switcher .toggle{
      cursor:pointer;
      font-size:15px;
      color: #FFF;
      display:block;
      position:absolute;
      padding:4px 10px;
      background:#272930;
      width:25px;
      height:30px;
      left:-24px;
      top:22px;
    }
    
    #color-switcher p{color: rgba(255, 255, 255, 0.6);font-size:12px;margin-bottom:3px;}
    #color-switcher .palette{padding:1px;}
    #color-switcher .color{width:15px;height:15px;display:inline-block;cursor:pointer;}
    #color-switcher .color.purple{background:#7761A7;}
    #color-switcher .color.green{background:#19B698;}
    #color-switcher .color.red{background:#EA6153;}
    #color-switcher .color.blue{background:#54ADE9;}
    #color-switcher .color.orange{background:#FB7849;}
    #color-switcher .color.prusia{background:#476077;}
    #color-switcher .color.yellow{background:#fec35d;}
    #color-switcher .color.pink{background:#ea6c9c;}
    #color-switcher .color.brown{background:#9d6835;}
    #color-switcher .color.gray{background:#afb5b8;}
 </style>
  <script type="text/javascript">
    var link = $('link[href="css/style.css"]');
    
    // if($.cookie("css")) {
    //   link.attr("href",'css/skin-' + $.cookie("css") + '.css');
    // }
    
    $(function(){
      $("#color-switcher .toggle").click(function(){
        var s = $(this).parent();
        if(s.hasClass("open")){
          s.animate({'margin-right':'-109px'},400).toggleClass("open");
        }else{
          s.animate({'margin-right':'0'},400).toggleClass("open");
        }
      });
      
      $("#color-switcher .color").click(function(){
        var color = $(this).data("color");
        $("body").fadeOut(function(){
          //link.attr('href','css/skin-' + color + '.css');
          $.cookie("css", color, {expires: 365, path: '/'});
          window.location.href = "";
          $(this).fadeIn("slow");
        });
      });
    });
  </script>   
  <script src="<?= base_url('assets/js/jquery.codemirror/lib/codemirror.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.codemirror/mode/xml/xml.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.codemirror/mode/css/css.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.codemirror/mode/htmlmixed/htmlmixed.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.codemirror/addon/edit/matchbrackets.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.vectormaps/jquery-jvectormap-1.2.2.min.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.vectormaps/maps/jquery-jvectormap-world-mill-en.js');?>"></script>
  <script src="<?= base_url('assets/js/behaviour/dashboard.js');?>"></script>



  <script type="text/javascript" src="<?= base_url('assets/js/jasny.bootstrap/extend/js/jasny-bootstrap.min.js');?>"></script>
  



  
  
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.js');?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.pie.js');?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.resize.js');?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.flot/jquery.flot.labels.js');?>"></script>




</body>

<!-- Mirrored from condorthemes.com/flatdream/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Dec 2014 07:41:16 GMT -->
</html>