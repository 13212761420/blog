<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:01 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 基础表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../Public/hou/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../Public/hou/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../Public/hou/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../../../Public/hou/css/animate.min.css" rel="stylesheet">
    <link href="../../../Public/hou/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>
<style type="text/css">
    .btn-yangshi{padding:2px 15px;color:#f6f8fb;border-radius:4px;}
</style>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                       <a href="" id="class_add" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">&nbsp;菜单添加&nbsp;</a>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>名称</th>
                                    <th>地址</th>
                                    <th>类型</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($data)): foreach($data as $key=>$value): ?><tr>
                                        <td><?php echo ($value["id"]); ?></td>
                                        <td><?php echo ($value["classify"]); ?></td>
                                        <td><?php echo ($value["link"]); ?></td>
                                        <td><?php echo ($value["type"]); ?></td>
                                        <td style="width:260px;"><a href="" class="btn-yangshi" style="background-color:#2b7cd4;border:1px solid #2b7cd4;">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="btn-yangshi" style="background-color:#e50e1c;border:1px solid #e50e1c;">删除</a></td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        添加菜单
                    </h4>
                </div>
                <div class="modal-body">
                    <form action="/admin/index/menu" method="post" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="classify" placeholder="请输入名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-sm-2 control-label">地址</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="link" placeholder="请输入地址">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-sm-2 control-label">类型</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="type" placeholder="请输入类型">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                            </button>
                            <button type="submit" id="class_add" class="btn btn-primary">提交 </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../Public/hou/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../Public/hou/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="../../../Public/hou/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../../../Public/hou/js/content.min.js?v=1.0.0"></script>
    <script src="../../../Public/hou/js/plugins/iCheck/icheck.min.js"></script>
    <script src="../../../Public/hou/js/demo/peity-demo.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});



    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    




</body>
</html>