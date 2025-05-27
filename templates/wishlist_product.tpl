 <!-- content begin -->
  <div id="content"> 
  {if $page['image_big']}
 
  <div class="gallery_box card">
  	<div class="wrapper">
    	<div class="close"></div>
        <div class="img"><img src="{$big_photo_path}{$page['image_big']}" alt=""></div>
    	<div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  
  {/if}
    <!-- breadcramps begin -->
    <div id="breadcramps">
      <ul>
        <li><a href="/"><span class="home"></span>home</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <!-- breadcramps end -->
    <div class="wrapper"> 
      <!-- contact_page begin -->
      <div class="menu_page">
      		<aside id="sidebar">
            	<a href="/wishlist/" class="back">< back to your wish list</a>
                <div class="clear"></div>
            </aside>
            <div class="menu_block">
            	<div class="product_card">
                     <div class="big_photo">{if {$page['image_middle']}}<a href="javascript:;" rel="prettyPhoto[gallery2]"><img src="{$middle_photo_path}{$page['image_middle']}" alt=""><span class="zoom"></span></a>{else}<img src="/images/image_coming_soon_card.jpg" alt="">{/if}</div>
                    
                    <div class="about_product padding2" >
                    	<div class="category">{$page['type']}</div>
                        <div class="product_name">{$page['page_name']}</div>
                        <p>{$page['short_text']}</p>
                        <div class="select_button2">
                        <a href="javascript:;" val="{$page['id']}" class="remove">remove</a>
                        </div>
                        <div class="details">
                        	{$page['text']}
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
			<div class="clear"></div>
            </div>

		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end -->