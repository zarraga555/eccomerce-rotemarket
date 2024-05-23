<form method="post">
    <div class="form-group">
        <input type="text" required="" name="username" placeholder="{{__("Username")}}" />
    </div>
    <div class="form-group">
        <input type="text" required="" name="email" placeholder="{{__("Email")}}" />
    </div>
    <div class="form-group">
        <input required="" type="password" name="password" placeholder="{{__("Password")}}" />
    </div>
    <div class="form-group">
        <input required="" type="password" name="password" placeholder="{{__("Confirm password")}}" />
    </div>
{{--    Captcha comentado--}}
{{--    <div class="login_footer form-group">--}}
{{--        <div class="chek-form">--}}
{{--            <input type="text" required="" name="email" placeholder="Security code *" />--}}
{{--        </div>--}}
{{--        <span class="security-code">--}}
{{--                                                    <b class="text-new">8</b>--}}
{{--                                                    <b class="text-hot">6</b>--}}
{{--                                                    <b class="text-sale">7</b>--}}
{{--                                                    <b class="text-best">5</b>--}}
{{--                                                </span>--}}
{{--    </div>--}}
    <div class="payment_option mb-50">
        <div class="custome-radio">
            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="" hidden=""/>
        </div>
    </div>
    <div class="login_footer form-group mb-50">
        <div class="chek-form">
            <div class="custome-checkbox">
                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
                <label class="form-check-label" for="exampleCheckbox12"><span>{{__("I agree to terms")}} &amp; {{__("Policy")}}.</span></label>
            </div>
        </div>
        <a href="{{ route('privacyPolicy') }}"><i class="fi-rs-book-alt mr-5 text-muted"></i>{{__("Learn more")}}</a>
    </div>
    <div class="form-group mb-30">
        <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">{{__("Submit")}} &amp;
            {{__("Register")}}</button>
    </div>
    <p class="font-xs text-muted"><strong>{{__("Note")}}: </strong>{{__("Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy")}}</p>
</form>
