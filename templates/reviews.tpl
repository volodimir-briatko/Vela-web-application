 <!-- content begin -->
  <div id="content"> 
    <!-- breadcramps begin -->
    <div id="breadcramps">
      <ul>
        <li><a href="#"><span class="home"></span>home</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <!-- breadcramps end -->
    <div class="wrapper"> 
      <!-- reviews_page begin -->
      <div class="reviews_page">
		  {if $reviews}
        <ul class="reviews_list">
        	{foreach $reviews as $p}
            <li>
            	<div class="raiting"><div class="active" style="width:{($p['rate']-0)*20}%;"></div></div>
                <div class="comment">
                	<div class="user">{$p['page_name']}</div>
                    <p>{$p['text']}</p>
                </div>
            </li>
            {/foreach}
        </ul>
        {else}
        <p class="no-reviews">there are not reviews here</p>
        {/if}
        
        <div class="add_review"><a href="javascript:;" class="green_button" onClick="open_popup('#add_review_popup')">add Testimonial</a></div>
		<div class="clear"></div>
      </div>
      <!-- reviews_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end -->