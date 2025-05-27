<!-- content begin -->
  <div id="content"> 
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
      <div class="favorites_page">
      		<div class="create">
            	{$page['text']}
            </div>
            <div class="wish_list">
            	<div class="heading">Wish list</div>
                {if $wish_products}
                <ul class="favorites_list">
                {foreach $wish_products as $p}
                	<li>
                    	<div class="img"><a href="/wishlist/{$p['url']}/"><img src="{if $p['image']}{$photo_path}{$p['image']}{else}/images/image_coming_soon.jpg{/if}" alt=""></a></div>
                        <a href="javascript:;" class="close" val="{$p['id']}"></a>
                        <div class="category">&nbsp;{$p['type']}&nbsp;</div>
                        <div class="name">&nbsp;<a href="/wishlist/{$p['url']}/">{$p['page_name']}</a>&nbsp;</div>
                    </li>
                	
                    {/foreach}
                </ul>
                <div class="order_now"><a href="javascript:;" onClick="open_popup('#add_order_popup')">MAKE A QUOTE</a></div>
                {else}
                <p class="notovars">Your wishlist is empty.<br> Look at the <a href="/menu/">menu</a></p>
                {/if}
                
            </div>

		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end -->