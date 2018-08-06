<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="margin-top:10%;">
    <div class="col-md-6 col-md-offset-3">
        <form id="data-form" class="">
            <div class="form-group has-feedback">
                <label for="username">用户名</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input name="username" class="form-control" placeholder="请输入用户名" maxlength="20" type="text">
                </div>
            </div>
            <div class="form-group has-feedback">
                <label for="password">密码</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input name="password" class="form-control" placeholder="请输入密码" maxlength="20" type="password">
                </div>
            </div>
            <div class="form-group has-feedback">
                <label for="phoneNum">手机号码</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    <input name="phoneNum" class="form-control" placeholder="请输入手机号码" maxlength="11" type="text">
                </div>
            </div>
            <div class="form-group">
                <input class="form-control btn btn-primary" id="submit" value="立&nbsp;&nbsp;即&nbsp;&nbsp;注&nbsp;&nbsp;册" type="submit">
            </div>
            <div class="form-group">
                <input value="重置" id="reset" class="form-control btn btn-danger" type="reset">
            </div>
        </form>
    </div>
</div>
<div id="demo"></div>
<script type="text/javascript">
    $(function(){
        $('#data-form').submit(function(){
            $.ajax({
                url:"/home/index/login",
                data: $('#data-form').serialize(),
                type: "POST",
                dataType:"json",
                success:function(res){
                    $('#demo').html(res.msg);
                    alert(res.msg);
                },
            });
            return false;
        })
    })


</script>


</body>
</html>