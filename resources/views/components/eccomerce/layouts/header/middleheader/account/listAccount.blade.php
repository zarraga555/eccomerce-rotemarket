<li>
    <a href="{{ route('myAccount') }}"><i class="fi fi-rs-user mr-10"></i>{{__("My Account")}}</a>
</li>
<li>
    <a href="{{ route('trackOrder') }}"><i class="fi fi-rs-location-alt mr-10"></i>{{__("Order Tracking")}}</a>
</li>
<li>
    <a href="{{ route('myVoucher') }}"><i class="fi fi-rs-label mr-10"></i>{{__("My Voucher")}}</a>
</li>
<li>
    <a href="{{ route('wishlist') }}"><i class="fi fi-rs-heart mr-10"></i>{{__("My Wishlist")}}</a>
</li>
<li>
    <a href="{{ route('accountDetails') }}"><i class="fi fi-rs-settings-sliders mr-10"></i>{{__("Setting")}}</a>
</li>
<li>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fi fi-rs-sign-out mr-10"></i>{{__("Sign out")}}</a>
</li>


<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
