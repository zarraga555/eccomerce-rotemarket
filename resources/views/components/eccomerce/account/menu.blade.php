<ul class="nav flex-column" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>{{ __('Dashboard') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>{{ __('Orders') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>{{ __('Track Your Order') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>{{ __('My Address') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>{{ __('Account details') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fi-rs-sign-out mr-10"></i>{{ __('Sign out') }}</a>
    </li>
</ul>

<form id="logout-form-menu" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
