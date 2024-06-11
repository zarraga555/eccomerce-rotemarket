<footer class="main">
    <x-eccomerce.layouts.footer.newsletter/>
    <x-eccomerce.layouts.footer.featured/>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col">
                    <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp"
                         data-wow-delay="0">
                        <div class="logo">
                            <a href="/" class="mb-15"><x-eccomerce.layouts.logo style="max-width: 55%"/></a>
                            {{-- <p class="font-lg text-heading">Awesome grocery store website template</p> --}}
                        </div>
                        <x-eccomerce.layouts.footer.contactinfo/>
                    </div>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <h4 class=" widget-title">{{__("Company")}}</h4>
                <ul class="footer-list mb-sm-5 mb-md-0">
                    <li><a href="{{ route('aboutUs') }}">{{__("About Us")}}</a></li>
                    <li><a href="{{ route('shippingPolicy') }}">{{__("Delivery Information")}}</a></li>
                    <li><a href="{{ route('privacyPolicy') }}">{{__("Privacy Policy")}}</a></li>
                    <li><a href="{{ route('termsAndConditions') }}">{{__("Terms & Conditions")}}</a></li>
                    <li><a href="{{ route('contactUs') }}">{{__("Contact Us")}}</a></li>
                    <li><a href="{{ route('assistanceCenter') }}">{{__("Support Center")}}</a></li>
                    <li><a href="{{ route('jobOffers') }}">{{__("Careers")}}</a></li>
                </ul>
            </div>
            <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <h4 class="widget-title">{{__("Account")}}</h4>
                <ul class="footer-list mb-sm-5 mb-md-0">
                    <li><a href="{{ route('login') }}">{{__("Sign In")}}</a></li>
                    <li><a href="{{ route('myCart') }}">{{__("View Cart")}}</a></li>
                    <li><a href="{{ route('wishlist') }}">{{__("My Wishlist")}}</a></li>
                    <li><a href="{{ route('trackOrder') }}">{{__("Track My Order")}}</a></li>
                    <li><a href="{{ route('helpTickets') }}">{{__("Help Ticket")}}</a></li>
                    <li><a href="{{ route('shippingDetails') }}">{{__("Shipping Details")}}</a></li>
                    {{-- <li><a href="#">Compare products</a></li> --}}
                </ul>
            </div>
            {{-- <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <h4 class="widget-title">Corporate</h4>
                <ul class="footer-list mb-sm-5 mb-md-0">
                    <li><a href="#">Become a Vendor</a></li>
                    <li><a href="#">Affiliate Program</a></li>
                    <li><a href="#">Farm Business</a></li>
                    <li><a href="#">Farm Careers</a></li>
                    <li><a href="#">Our Suppliers</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Promotions</a></li>
                </ul>
            </div>
            <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <h4 class="widget-title">Popular</h4>
                <ul class="footer-list mb-sm-5 mb-md-0">
                    <li><a href="#">Milk & Flavoured Milk</a></li>
                    <li><a href="#">Butter and Margarine</a></li>
                    <li><a href="#">Eggs Substitutes</a></li>
                    <li><a href="#">Marmalades</a></li>
                    <li><a href="#">Sour Cream and Dips</a></li>
                    <li><a href="#">Tea & Kombucha</a></li>
                    <li><a href="#">Cheese</a></li>
                </ul>
            </div> --}}
            <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp"
                 data-wow-delay=".5s">
                <h4 class="widget-title">{{__("Install App")}}</h4>
                <p class="">{{__("From App Store or Google Play")}}</p>
                <div class="download-app">
                    <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active"
                                                                      src="assets/imgs/theme/app-store.jpg" alt=""/></a>
                    <a href="#" class="hover-up mb-sm-2"><img src="assets/imgs/theme/google-play.jpg" alt=""/></a>
                </div>
                <p class="mb-20">{{__("Secured Payment Gateways")}}</p>
                <img class="" src="assets/imgs/theme/payment-method.png" alt=""/>
            </div>
        </div>
    </section>
    <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
        <div class="row align-items-center">
            <div class="col-12 mb-30">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <p class="font-sm mb-0">&copy; {{now()->year}}, <strong class="text-brand">Nest</strong> - HTML Ecommerce Template
                    <br/>{{__("All rights reserved")}}</p>
            </div>
            {{-- <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                <div class="hotline d-lg-inline-flex mr-30">
                    <img src="assets/imgs/theme/icons/phone-call.svg" alt="hotline"/>
                    <p>1900 - 6666<span>Working 8:00 - 22:00</span></p>
                </div>
                <div class="hotline d-lg-inline-flex">
                    <img src="assets/imgs/theme/icons/phone-call.svg" alt="hotline"/>
                    <p>1900 - 8888<span>24/7 Support Center</span></p>
                </div>
            </div> --}}
            <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                <div class="mobile-social-icon">
                    <h6>{{__("Follow Us")}}</h6>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt=""/></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt=""/></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt=""/></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt=""/></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt=""/></a>
                </div>
                {{-- <p class="font-sm">Up to 15% discount on your first subscribe</p> --}}
            </div>
        </div>
    </div>
</footer>
