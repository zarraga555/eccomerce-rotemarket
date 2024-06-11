<div>
    <main class="main pages">
        <x-eccomerce.breadcrumb>
            <x-slot name="breadcrumbs">
                <span></span> {{__("My Account")}}
            </x-slot>
        </x-eccomerce.breadcrumb>

        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-menu">
                                    <x-eccomerce.account.menu/>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content account dashboard-content pl-50">
                                    <x-eccomerce.account.dashboard/>
                                    <x-eccomerce.account.orders/>
                                    <x-eccomerce.account.trackOrders/>
                                    <x-eccomerce.account.address/>
                                    <x-eccomerce.account.accountDetail/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
