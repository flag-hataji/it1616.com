<script type="text/javascript">
 $(document).ready( function(){	
		// buttons for next and previous item						 
		var buttons = { previous:$('#jslidernews1 .button-previous') ,
						next:$('#jslidernews1 .button-next') };			
		 $('#jslidernews1').lofJSidernews( { interval : 8000,
											direction		: 'opacitys',	
											easing			: 'easeInOutExpo',
											duration		: 1800,
											auto		 	: true,
											maxItemDisplay  : 4,
											navPosition     : 'horizontal', // horizontal
											navigatorHeight : 46,
											navigatorWidth  : 80,
											mainWidth		: 978,
											buttons			: buttons } );	
	});
</script>
<div id="MainSlider">
	<div id="MainSliderInner" class="clearfix">
<div id="jslidernews1" class="lof-slidecontent" style="width:978px; height:340px;">
	<div class="preload"><div></div></div>
    		 <!-- MAIN CONTENT --> 
              <div class="main-slider-content" style="width:978px; height:340px;">
                <ul class="sliders-wrap-inner">
                    <li>
                      <?php $bcBaser->img('/img/slider/01.jpg',array('title'=>'Newsflash 1','border'=>'0')) ?>           
                          <div class="slider-description">
                            <div class="slider-meta"><a target="_parent" title="Newsflash 1" href="construction">米砂亜環境株式会社</a> <i>2012年4月</i></div>
                            <h4>地球に優しい家電製品 その1</h4>
                             <p>ここにページまたは商品のコメントを記載します。
                            <!-- <a class="readmore" href="#">Read more </a> -->
                            </p>
                         </div>
                    </li> 
                   <li>
                     <?php $bcBaser->img('/img/slider/02.jpg',array('title'=>'Newsflash 2','border'=>'0')) ?>           
                          <div class="slider-description">
                            <div class="slider-meta"><a target="_parent" title="Newsflash 2" href="construction">米砂亜環境株式会社</a> <i>2012年5月</i></div>
                            <h4>地球に優しい家電製品 その2</h4>
                            <p>ここにページまたは商品のコメントを記載します。
<!--                             <a class="readmore" href="#">Read more </a> -->
                            </p>
                         </div>
                    </li> 
                   <li>
                      <?php $bcBaser->img('/img/slider/03.jpg',array('title'=>'Newsflash 3','border'=>'0')) ?>            
                          <div class="slider-description">
                            <div class="slider-meta"><a target="_parent" title="Newsflash 3" href="construction">米砂亜環境株式会社</a> <i>2012年6月</i></div>
                            <h4>地球に優しい家電製品 その3</h4>
                            <p>ここにページまたは商品のコメントを記載します。
<!--                             <a class="readmore" href="#">Read more </a> -->
                            </p>
                         </div>
                    </li> 
                    <li>
                      <?php $bcBaser->img('/img/slider/04.jpg',array('title'=>'Newsflash 4','border'=>'0')) ?>            
                          <div class="slider-description">
                            <div class="slider-meta"><a target="_parent" title="Newsflash 4" href="construction">米砂亜環境株式会社</a> <i>2012年7月</i></div>
                            <h4>地球に優しい家電製品 その4</h4>
                            <p>ここにページまたは商品のコメントを記載します。
<!--                             <a class="readmore" href="#">Read more </a> -->
                            </p>
                         </div>
                    </li> 
                   </ul>  	
            </div>
 		   <!-- END MAIN CONTENT --> 
           <!-- NAVIGATOR -->
           	<div class="navigator-content">
<!--                   <div class="button-next">Next</div> -->
                  <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                           <li><?php $bcBaser->img('/img/slider/tm01.jpg',array('title'=>'Newsflash 1','border'=>'0')) ?></li>
                           <li><?php $bcBaser->img('/img/slider/tm02.jpg',array('title'=>'Newsflash 2','border'=>'0')) ?></li>
                           <li><?php $bcBaser->img('/img/slider/tm03.jpg',array('title'=>'Newsflash 3','border'=>'0')) ?></li>
                           <li><?php $bcBaser->img('/img/slider/tm04.jpg',array('title'=>'Newsflash 4','border'=>'0')) ?></li>
                        </ul>
                  </div>
<!--                   <div  class="button-previous">Previous</div> -->
             </div> 
          <!----------------- END OF NAVIGATOR --------------------->
          <!-- BUTTON PLAY-STOP -->
          <div class="button-control"><span></span></div>
           <!-- END OF BUTTON PLAY-STOP -->
          
 </div> 
</div>
</div>
