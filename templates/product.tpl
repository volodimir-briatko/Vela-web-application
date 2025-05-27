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
            	{if $categories}
                <ul class="leftmain">
                {foreach $categories as $category}
                	<li class="{if $product_cat==$category['id']}active{/if} {if $category['parent_id']>0}submenu{else}menu{/if}" {if $category['parent_id']>0}value="{$category['parent_id']}"{else}val="{$category['id']}"{/if}><a href="/menu/{$category['url']}/">{$category['page_name']}</a></li>
                    {/foreach}
                </ul>
                {/if}
                {$page_text}
                
                <div class="clear"></div>
            </aside>
            <div class="menu_block">
            	<div class="product_card">
                     <div class="big_photo">{if {$page['image_middle']}}<a href="javascript:;" rel="prettyPhoto[gallery2]"><img src="{$middle_photo_path}{$page['image_middle']}" alt=""><span class="zoom"></span></a>{else}<img src="/images/image_coming_soon_card.jpg" alt="">{/if}</div>
                    <!--{$big_photo_path}{$page['image_big']}-->
                    
                    <div class="about_product">
                    	<a href="/{$next_url}/" class="next"></a>
                    	<a href="/{$prev_url}/" class="prev"></a>
                    	<div class="category">{$page['type']}</div>
                        <div class="product_name">{$page['page_name']}</div>
                        <p>{$page['short_text']}</p>
                        <div class="select_button">
                            {if $page['fav']}
                        <a href="javascript:;" val="{$page['id']}" class="selected">selected</a>
                        {else}
                            <a href="javascript:;" val="{$page['id']}">select</a>
                            <div class="hint"><span></span>This meal is ready<br>to order</div>
                            {/if}
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