<div id="shopping-cart" class="fr counter">
    <a href="{{url('checkout')}}" class="cart-btn">
    	<span class="ttl-cart">
    		<p>{{Shpcart::cart()->total_items()}}</p> 
        </span>
    </a>
</div>