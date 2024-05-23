<header class="header-area header-style-1 header-height-2">
    <div class="mobile-promotion">
        <span>{{__("Grand opening")}}, <strong>{{__("up to")}} 15%</strong> {{__("off all items. Only")}} <strong>3 {{__('days left')}}</strong></span>
    </div>
    @if(Request::route()->getName() != 'loginCustomer')
        <x-eccomerce.layouts.header.headertop/>
    @endif
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/"><x-eccomerce.layouts.logo style="height: 62px;"/></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active">
                                <option>{{__("All Categories")}}</option>
                                <option>Milks and Dairies</option>
                                <option>Wines & Alcohol</option>
                                <option>Clothing & Beauty</option>
                                <option>Pet Foods & Toy</option>
                                <option>Fast food</option>
                                <option>Baking material</option>
                                <option>Vegetables</option>
                                <option>Fresh Seafood</option>
                                <option>Noodles & Rice</option>
                                <option>Ice cream</option>
                            </select>
                            <input type="text" placeholder="{{__("Search for items...")}}"/>
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="search-location">
                                <form action="#">
                                    <select class="select-active">
                                        <option>{{__("Your Location")}}</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                        <option>Indiana</option>
                                        <option>Maryland</option>
                                        <option>Nevada</option>
                                        <option>New Jersey</option>
                                        <option>New Mexico</option>
                                        <option>New York</option>
                                    </select>
                                </form>
                            </div>
                            {{-- <div class="header-action-icon-2">
                                <a href="shop-compare.html">
                                    <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-compare.svg"/>
                                    <span class="pro-count blue">3</span>
                                </a>
                                <a href="shop-compare.html"><span class="lable ml-0">{{__("Compare")}}</span></a>
                            </div> --}}
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg"/>
                                    <span class="pro-count blue">6</span>
                                </a>
                                <a href="shop-wishlist.html"><span class="lable">{{__("Wishlist")}}</span></a>
                            </div>
                            <x-eccomerce.layouts.header.middleheader.cart.cartoption/>
                            <x-eccomerce.layouts.header.middleheader.account.accountoption/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><x-eccomerce.layouts.logo style="width: 100px;
                        min-width: 100px;"/></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <x-eccomerce.layouts.header.bottomheader.categories/>
                    <x-eccomerce.layouts.header.bottomheader.menu/>
                </div>
                    <x-eccomerce.layouts.header.bottomheader.contact/>

                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg"/>
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="#">
                                <img alt="Nest" src="assets/imgs/theme/icons/icon-cart.svg"/>
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <x-eccomerce.layouts.header.middleheader.cart.cartdetails/>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <x-eccomerce.layouts.header.middleheader.cart.shopppingcartfooter/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
