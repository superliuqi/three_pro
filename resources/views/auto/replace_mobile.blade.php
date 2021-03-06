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
    <input type="hidden" class="check-security-type" value="1" />
    <div class="content-car-bg">
        <div class="content-car-one">
            <div>
                <b>
                    <img src="{{url()}}/images/logo_01.png" />
                    <p><a class="btn_back">返回</a></p>
                </b>
            </div>
            <div>
                <b>
                    <section>
                        <p>新手机号码</p>
                        <input class="phone" type="text" placeholder="新手机号" />
                    </section>
                    <section class="input-security">
                        <p>验证码</p>
                        <input class="security" type="text" placeholder="验证码" />
                        <label class="security-get-btn">获取验证码</label>
                        <label class="security-time-btn">60秒</label>
                    </section>
                    <button class="change-phone-btn">提交</button>
                </b>
            </div>
        </div>
        <aside class="error-remind"></aside>
    </div>
    {!! HTML::script('js/auto/zepto.min.js') !!}
    {!! HTML::script('js/auto/login.js') !!}
</body>
</html>