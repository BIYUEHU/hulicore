<?php
$title = '登录';
include(__DIR__ . '/head.php');
?>

<body>
    <section class="material-half-bg">
        <div class="cover">
        </div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>
                HULICore
            </h1>
        </div>
        <div class="login-box layui-form">
            <form class="login-form" id="admin-login">
                <h3 class="login-head">
                    <i class="fa fa-lg fa-fw fa-user"></i>用户 - <?php echo $title; ?>
                </h3>
                <div class="form-group">
                    <label class="control-label">账号</label>
                    <input class="form-control" id="account" type="text" required placeholder="请输入账号" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="control-label">密码</label>
                    <input class="form-control" id="password" type="password" required placeholder="请输入密码" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="control-label">验证码</label>
                    <div style="position: relative;">
                        <input class="form-control" style="width: 150px;" id="captchaimg" type="text" required placeholder="请输入验证码" autocomplete="off">
                        <img id="captchaimgImg" style="cursor:pointer;position: absolute;top: 3px;right: 0px;" src="/sys/captchaimg" onclick="javascript:this.src='/sys/captchaimg'" align="absmiddle">
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control" name="like1[write]" lay-skin="primary" title="记住密码">
                    <span>没有账号?<a href="./register">点击注册</a></span>
                </div>
<!--                 <div class="form-group">
                    <div id="embed-captcha">
                    </div>
                    <p id="wait" class="show">
                        正在加载验证码......
                    </p>
                    <p id="notice" class="hide">
                        请先完成验证
                    </p>
                </div> -->
                <div class="form-group btn-container">
                    <button onclick="doLogin();" class="btn btn-primary btn-block" id="embed-submit" type="submit" lay-submit lay-filter="login">
                        点击登录
                    </button>
                </div>
                <span style="color:#e60c0c">
                </span>
            </form>
        </div>
        <!-- Special -->
        <!-- <br>
        <div class="login-form">
            <button class="btn btn-primary btn-block">
                <a href="?sp" style="color:white;text-decoration: none;">
                    特制主题
                </a>
            </button>
        </div> -->
    </section>
    <script src="//cdn.staticfile.org/jquery/3.7.0/jquery.min.js"></script>
    <script src="//cdn.staticfile.org/layui/2.8.7/layui.js"></script>
    <script src="<? echo $CONFIG['path'] ?>/js/user/index.js"></script>
    <!-- Geetest -->
<!--     <style>
        .show {
            display: block;
        }

        .hide {
            display: none;
        }

        #notice {
            color: red;
        }
    </style> -->
    <!-- <script src="/assets/geetest/static/gt.js"></script> -->
</body>

</html>