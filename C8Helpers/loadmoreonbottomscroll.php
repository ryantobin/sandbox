<script type="text/javascript">
            jQuery.noConflict(  )
            jQuery144 = jQuery
            console.log(jQuery144, jQuery)
</script>
<!-- jQuery -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script>
jQuery(
  function($)
  {
    $('#flux').bind('scroll', function()
                              {
                                if($(this).scrollTop() + $(this).innerHeight()>=$(this)[0].scrollHeight)
                                {
                                  document.getElementById("flux").innerHTML = document.getElementById("flux").innerHTML + document.getElementById("flux").innerHTML;
                                }
                              })
  }
);
</script>

<style>
#flux{width:200px;height:150px;overflow:auto;}
</style>

<div id="flux">
Lorem ipsum dolor sit amet <br>
Consectetuer augue nibh lacus at <br>
Pretium Donec felis dolor penatibus <br>
Phasellus consequat Vivamus dui lacinia <br>
Ornare nonummy laoreet lacus Donec <br>
Ut ut libero Curabitur id <br>
Dui pretium hendrerit sapien Pellentesque <br>

</div>

