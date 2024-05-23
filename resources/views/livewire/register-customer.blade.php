<div>
    <main class="main pages">
        <x-eccomerce.breadcrumb>
            <x-slot name="breadcrumbs">
                <span></span> {{__("My Account")}}
            </x-slot>
        </x-eccomerce.breadcrumb>
        <div class="page-content pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">{{__("Create an Account")}}</h1>
                                            <p class="mb-30">{{__("Already have an account?")}} <a href="{{ route('loginCustomer') }}">{{__("Login")}}</a></p>
                                        </div>
                                        <x-eccomerce.users.register.form/>
                                    </div>
                                </div>
                            </div>
                            <x-eccomerce.users.register.continuewith/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
