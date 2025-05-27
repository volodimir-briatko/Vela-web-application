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
      <div class="gallery_page">
      	{if $galleries}
        <ul class="gallery_albums">
        {foreach $galleries as $gallery}
        	<li><a href="/gallery/{$gallery['url']}/"><img src="{$gallery['image']}" alt=""></a>
            	<div class="name"><a href="/gallery/{$gallery['url']}/">{$gallery['page_name']}</a></div>
                <div class="photo_qvon"><span>{$gallery['image_count']}</span> photos</div>
            </li>
            {/foreach}
        </ul>
        {/if}
        <div class="add_one_more"><a href="#"></a></div>
		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end -->
  