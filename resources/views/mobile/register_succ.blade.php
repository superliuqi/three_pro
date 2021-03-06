<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {!! HTML::style('css/mobile/login_base.css') !!}
</head>
<body>
    @if (count($data) > 0)
        @foreach ($data as $k=>$v)
                <input type="hidden" name="{!!$k!!}" value="{!!$v!!}">
        @endforeach
    @endif
    <div class="content-bg">
        <div class="content-two">
            <header>
                <p><img src="{!! $data['loginLogo'] !!}" />道客账户</p>
                <p></p>
                <p>账户注册</p>
            </header>
            <section>
                <div>
                    <img src="{{url()}}/images/register_succ_hook.png" alt="">
                    <p>账户注册成功，<span class="succ-countdown"></span>秒后跳转登录</p>
                </div>
            </section>
        </div>
    </div>
    {!! HTML::script('js/mobile/zepto.min.js') !!}
    {!! HTML::script('js/mobile/login.js') !!}
</body>
</html>