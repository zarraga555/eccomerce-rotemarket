<div>
    <main class="main">
        <x-eccomerce.breadcrumb>
            <x-slot name="breadcrumbs">
                <span></span> {{__("Shop")}}
                <span></span> {{__("Wishlist")}}
            </x-slot>
        </x-eccomerce.breadcrumb>
        <div class="container mb-30 mt-50">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="mb-50">
                        <h1 class="heading-2 mb-10">{{ __('Your Wishlist') }}</h1>
                        <h6 class="text-body">{{__('There are') }} <span class="text-brand">5</span> {{ __('products in this list') }}</h6>
                    </div>
                    <div class="table-responsive shopping-summery">
                        <x-eccomerce.wishlist.table/>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
