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
      <div class="menu_page">
      		<aside id="sidebar">
            	{if $categories}
                <ul class="leftmain">
                {foreach $categories as $category}
                	<li class="{if $smarty.get.category==$category['url']}active{/if} {if $category['parent_id']>0}submenu{else}menu{/if}" {if $category['parent_id']>0}value="{$category['parent_id']}"{else}val="{$category['id']}"{/if}><a href="/menu/{$category['url']}/">{$category['page_name']}</a></li>
                    {/foreach}
                </ul>
                {/if}
                {$page_text}
                
                <div class="clear"></div>
            </aside>
            <div class="menu_block">
                {if $products}
                <ul class="menu_list">
                    {foreach $products as $product}<li>
                    	<div class="img"><a href="/{$product['url']}/"><img src="{if $product['image']}{$photo_path}{$product['image']}{else}/images/image_coming_soon.jpg{/if}" alt=""></a></div>
                        <div class="category">&nbsp;{$product['type']}&nbsp;</div>
                        <div class="name">&nbsp;<a href="/{$product['url']}/">{$product['page_name']}</a>&nbsp; </div>
                        <div class="select">
                        {if $product['fav']}
                        <a href="javascript:;" val="{$product['id']}" class="selected">selected</a>
                        {else}
                        <a href="javascript:;" val="{$product['id']}">select</a>
                        <div class="hint"><span></span>This meal is ready<br>to order</div>
                        </div>
                        {/if}
                    </li>{/foreach}
                	
                </ul>
                {else}
                <div style=" padding:130px 0 0 0; text-align:center;">Empty category</div>
                {/if}
			 {if $products_on_page>0}
			 <div class="add_one_more"></div>
             <script type="text/javascript">
			 	var url = "{$url2}";
				var products_on_page = {$products_on_page};
			 </script>
             {/if}
            </div>
		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end -->