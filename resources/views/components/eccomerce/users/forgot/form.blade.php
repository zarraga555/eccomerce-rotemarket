<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
        <input type="text" required="" name="email" placeholder="{{__("Username or Email *")}}"/>
    </div>
{{--                                    Captcha commit--}}
{{--                                    <div class="login_footer form-group">--}}
{{--                                        <div class="chek-form">--}}
{{--                                            <input type="text" required="" name="email" placeholder="Security code *"/>--}}
{{--                                        </div>--}}
{{--                                        <span class="security-code">--}}
{{--                                            <b class="text-new">8</b>--}}
{{--                                            <b class="text-hot">6</b>--}}
{{--                                            <b class="text-sale">7</b>--}}
{{--                                            <b class="text-best">5</b>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
    <div class="login_footer form-group mb-50">
        <div class="chek-form">
            <div class="custome-checkbox">
                <input class="form-check-input" type="checkbox" name="checkbox"
                       id="exampleCheckbox1" value=""/>
                <label class="form-check-label" for="exampleCheckbox1"><span>{{__("I agree to terms & Policy.")}}</span></label>
            </div>
        </div>
        <a class="text-muted" href="{{ route('privacyPolicy') }}">{{__("Learn more")}}</a>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-heading btn-block hover-up" name="login">
            {{ __('Email Password Reset Link') }}
        </button>
    </div>
</form>
