<div class="header-action-icon-2">
    <a href="page-account.html">
        <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-user.svg"/>
    </a>
    <a href="page-account.html"><span class="lable ml-0">{{__("Account")}}</span></a>
    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
        @auth
        <ul>
            <x-eccomerce.layouts.header.middleheader.account.listAccount/>
        </ul>
        @endauth

        @guest
            <ul>
                <li>
                    <a href="{{ route('login') }}"><i class="fi fi-rs-sign-out mr-10"></i>{{__("Login")}}</a>
                </li>
            </ul>
        @endguest

    </div>
</div>
