<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {!! HTML::style('css/auto/car_login_base.css') !!}
</head>
<body>
    @if (count($data) > 0)
        @foreach ($data as $k=>$v)
                <input type="hidden" name="{!!$k!!}" value="{!!$v!!}">
        @endforeach
    @endif
    <div class="content-car-bg">
        <div class="content-car-one">
            <div>
                <b>
                    <img src="{!! $data['loginLogo'] !!}" />
                    <p><a href="{!! $data['register_mobile'] !!}">切换手机号注册</a></p>
                    <p><a href="{!! $data['register_username'] !!}">切换用户名注册</a></p>
                    <p><a href="{!! $data['loginURL'] !!}">已有账号登录</a></p>
                </b>
            </div>
            <div>
                <b>
                     <section>
                        <p>邮箱</p>
                        <input class="email" type="text" placeholder="邮箱" />
                    </section>
                    <section>
                        <p>密码</p>
                        <input class="oldPsw" type="password" placeholder="至少六位" />
                    </section>
                    <section>
                        <p>姓名</p>
                        <input class="compellation" type="text" placeholder="中文" />
                    </section>
                    <button class="register-email-btn">注册</button>
                </b>
            </div>
        </div>
        <aside class="error-remind"></aside>
    </div>
    {!! HTML::script('js/auto/zepto.min.js') !!}
    {!! HTML::script('js/auto/login.js') !!}
</body>
</html>