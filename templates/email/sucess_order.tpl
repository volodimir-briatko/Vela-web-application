<table width="500" border="1" cellpadding="2" cellspacing="2">
	<tr>
    	<td>Number of order</td>
        <td>{$ins_id}</td>
    </tr>
     <tr>
    	<td>Create date</td>
        <td>{$creating}</td>
    </tr>
    <tr>
    	<td>Your name</td>
        <td>{$lastname}</td>
    </tr>
    <tr>
    	<td>Event</td>
        <td>{$event}</td>
    </tr>
    <tr>
    	<td>Number of persons</td>
        <td>{$persnum}</td>
    </tr>
    <tr>
    	<td>E-mail</td>
        <td>{$email}</td>
    </tr>
    <tr>
    	<td>Phone number</td>
        <td>{$tel}</td>
    </tr>
     <tr>
    	<td>Order</td>
        <td>
        {if $products}
        <ol>
        {foreach $products as $p}
        	<li>{$p['page_name']}</li>
        {/foreach}
        </ol>
        {/if}
        </td>
    </tr>
    
</table>