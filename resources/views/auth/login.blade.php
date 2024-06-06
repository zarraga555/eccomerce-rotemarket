<x-app-layout>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

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
                                <x-eccomerce.users.image url="assets/imgs/page/login-1.png" alt="login"/>
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h1 class="mb-5">{{__("Login")}}</h1>
                                                <p class="mb-30">{{__("Don't have an account?")}} <a href="{{ route('register') }}">{{__("Create here")}}</a></p>
                                            </div>
                                            <x-eccomerce.users.login.form/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-app-layout>
