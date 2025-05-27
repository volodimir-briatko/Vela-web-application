<header id="header">
	<div class="wrapper">
    	<a href="/"><img src="/images/logo.png" alt="" class="logo" width="223" height="95"></a>
        <div class="tels"><a href="tel:0433557877">0433 557 877</a>      <a href="tel:0414061626">0414 061 626</a></div>
        <div class="bascet">
        	<div class="wishes">{$wish_count}</div>
            <div class="link">wish list<br> <a href="/wishlist/">MAKE A QUOTE</a></div>
        </div>
        <a href="javascript:;" id="menu_button"><span></span></a>
         <nav id="menu">
            {foreach $header_menu as $k=>$v}
               {if $v['inmenu']==1}
		<a href="/{$v['url']}/" class="{if $smarty.get.url==$v['url']}active{/if} {if $v['url']=='menu'}{$active_menu}{/if}">{$v['page_name']}</a>
			{/if}
            {/foreach}
             </nav>
    </div>
</header>