<x-app-layout>
    <main class="main page-404">
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                        <p class="mb-20"><img src="assets/imgs/page/page-404.png" alt="" class="hover-up" /></p>
                        <h1 class="display-2 mb-30">{{__("Page Not Found")}}</h1>
                        <p class="font-lg text-grey-700 mb-30">
                            {{__("The link you clicked may be broken or the page may have been removed.")}}<br />
                            {{__("visit the")}} <a href="index.html"> <span> {{__("Homepage")}}</span></a> {{__("or")}} <a href="page-contact.html"><span>{{__("Contact us")}}</span></a> {{__("about the problem")}}
                        </p>
                        {{-- <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Search…" />
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div> --}}
                        <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="index.html"><i class="fi-rs-home mr-5"></i> {{__("Back To Home Page")}}</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>