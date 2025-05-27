<!-- content begin -->
  <div id="content"> 
  <div class="gallery_box">
  	<div class="wrapper">
    	<div class="close"></div>
        <div class="prev"></div>
        <div class="next"></div>
        <div class="img"><img src="/pics/img_19.jpg" alt=""></div>
    	<div class="clear"></div>
    </div>
  </div>
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
      	<ul class="gallery_list">
        {foreach $galleries as $photo}
        	<li><a href="{$big_photo_path}{$photo['foto_b']}"><img src="{$small_photo_path}{$photo['foto_m']}" alt="{$photo['page_name']}"><span class="zoom"></span></a></li>
        {/foreach}
        </ul>
        {/if}
        {if $photos_in_photoalbum>0}
        <div class="add_one_more"></div>
        <script type="text/javascript">
			 	var url = "{$url2}";
				var photos_in_photoalbum = {$photos_in_photoalbum};
			 </script>
        {/if}
   {if $for_gal_count}
	{assign var="i" value="0"}
    <script type="text/javascript">
 	var gallery_photos = new Array;
	var gallery_url = new Array;
	{foreach $for_gal_count as $photo}
	gallery_photos[{$i}]="{$big_photo_path}{$photo['foto_b']}";
	gallery_url[{$i}]="{$photo['url']}";  
	{$i=$i+1}
	{/foreach}
	</script>
  {/if}	
		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end -->