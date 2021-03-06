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
                       <a href="/admin/Article/addlist" class="btn btn-primary btn-sm">&nbsp;菜单添加&nbsp;</a>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>CID</th>
                                    <th>标题</th>
                                    <th>博文</th>
                                    <th>图片</th>
                                    <th>发表时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($article)): foreach($article as $key=>$value): ?><tr>
                                        <td><?php echo ($value["id"]); ?></td> 
                                        <td><?php echo ($value["cid"]); ?></td>   
                                        <td><?php echo ($value["title"]); ?></td>
                                        <td><?php echo (mb_substr($value["text"],0,40)); ?>...</td>
                                        <td><img src="<?php echo ($value["img"]); ?>" alt="" style="width:80px;"></td>
                                        <td><?php echo ($value["create_itme"]); ?></td>
                                        <td style="width:260px;"><a href="/admin/article/save_list?id=<?php echo ($value["id"]); ?>" class="btn-yangshi" style="background-color:#2b7cd4;border:1px solid #2b7cd4;">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn-yangshi" style="background-color:#e50e1c;border:1px solid #e50e1c;" data-toggle="modal" data-target="#myModal" data-id="<?php echo ($value["id"]); ?>">删除</a></td>
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
                    <input type="hidden" value="<?php echo ($value["id"]); ?>">
                    <h3 class="modal-title" id="myModalLabel">
                        确定删除？
                    </h3>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <button type="button" class="btn btn-primary" id="shanchu" data-id="">
                        确定
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <script src="../../../Public/hou/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../Public/hou/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="../../../Public/hou/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../../../Public/hou/js/content.min.js?v=1.0.0"></script>
    <script src="../../../Public/hou/js/plugins/iCheck/icheck.min.js"></script>
    <script src="../../../Public/hou/js/demo/peity-demo.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
        $(function(){
             $("#shanchu").on('click', function(){
                var id = $(this).attr('data-id');
                $.ajax({
                    type : 'GET',
                    url: '/admin/article/delete',
                    data:{'id':id},
                    dataType: 'json',
                    success: function(res) {
                        if(res.status == 0){
                            alert(res.msg);
                            window.location.reload();
                        }else{
                            alert(res.msg);
                            window.location.reload();
                        }
                    }
                });
            })
             $('#myModal').on('show.bs.modal', function(event){
                var button = $(event.relatedTarget);
                var id = button.data('id');
                $('#shanchu').attr('data-id', id);
             });
        })
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    
</body>
</html>