@auth
    <li>
        <div class="shopping-cart-img">
            <a href="shop-product-right.html"><img alt="Nest"
                                                   src="assets/imgs/shop/thumbnail-3.jpg"/></a>
        </div>
        <div class="shopping-cart-title">
            <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
            <h4><span>1 × </span>$800.00</h4>
        </div>
        <div class="shopping-cart-delete">
            <a href="#"><i class="fi-rs-cross-small"></i></a>
        </div>
    </li>
    <li>
        <div class="shopping-cart-img">
            <a href="shop-product-right.html"><img alt="Nest"
                                                   src="assets/imgs/shop/thumbnail-2.jpg"/></a>
        </div>
        <div class="shopping-cart-title">
            <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
            <h4><span>1 × </span>$3200.00</h4>
        </div>
        <div class="shopping-cart-delete">
            <a href="#"><i class="fi-rs-cross-small"></i></a>
        </div>
    </li>
@endauth

@guest
    <p>{{__('You have not added any products that you are waiting for, log in and start shopping')}}</p>
@endguest
