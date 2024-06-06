<x-app-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ session('status') }}
        </div>
    @endif

    <x-validation-errors class="mb-4"/>

    <main class="main pages">
        <x-eccomerce.breadcrumb>
            <x-slot name="breadcrumbs">
                <span></span> {{__("My Account")}}
            </x-slot>
        </x-eccomerce.breadcrumb>

        <div class="page-content pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 m-auto">
                        <div class="login_wrap widget-taber-content background-white">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <img class="border-radius-15" src="assets/imgs/page/forgot_password.svg"
                                         alt="password"/>
                                    <h2 class="mb-15 mt-15">{{__("Forgot your password?")}}</h2>
                                    <p class="mb-30">{{__("Not to worry, we got you! Let’s get you a new password. Please enter your email address or your Username.")}}</p>
                                </div>
                                <x-eccomerce.users.forgot.form/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</x-app-layout>
