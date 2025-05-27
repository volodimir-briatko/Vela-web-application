{if $slider}
<p class="jcarousel-pagination">&nbsp;</p>
<a class="jcarousel-control-prev" href="javascript:;"></a> <a class="jcarousel-control-next" href="javascript:;"></a>
<div class="jcarousel">
<ul>
{foreach $slider as $slide}
<li class="item">{if $slide['url']}<a href="{$slide['url']}">{/if}<img src="{$photo_path}{$slide['foto']}" alt="{$slide['page_name']}"  />{if $slide['url']}</a>{/if}</li>
{/foreach}
</ul>
</div>
{/if}