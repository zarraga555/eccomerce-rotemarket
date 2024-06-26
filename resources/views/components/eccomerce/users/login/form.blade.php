<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <input type="text" required name="email" placeholder="{{__("Username or Email *")}}" />
    </div>
    <div class="form-group">
        <input required type="password" name="password" placeholder="{{__("Your password *")}}"/>
    </div>
    {{--                                            Captcha commit--}}
    {{--                                            <div class="login_footer form-group">--}}
    {{--                                                <div class="chek-form">--}}
    {{--                                                    <input type="text" required="" name="email" placeholder="Security code *" />--}}
    {{--                                                </div>--}}
    {{--                                                <span class="security-code">--}}
    {{--                                                    <b class="text-new">8</b>--}}
    {{--                                                    <b class="text-hot">6</b>--}}
    {{--                                                    <b class="text-sale">7</b>--}}
    {{--                                                    <b class="text-best">5</b>--}}
    {{--                                                </span>--}}
    {{--                                            </div>--}}
    <div class="login_footer form-group mb-50">
        <div class="chek-form">
            <div class="custome-checkbox">
                <x-checkbox id="remember_me" name="remember"  class="form-check-input"/>
{{--                <input class="form-check-input" type="checkbox" name="remember" id="remember_me"/>--}}
                <label class="form-check-label" for="remember_me"><span>{{__("Remember me")}}</span></label>
            </div>
        </div>
            <a class="text-muted" href="{{ route('password.request') }}">{{__("Forgot password?")}}</a>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-heading btn-block hover-up" name="login">{{__("Login")}}</button>
    </div>
</form>
