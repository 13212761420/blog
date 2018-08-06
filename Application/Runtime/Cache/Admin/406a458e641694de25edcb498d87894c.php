<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加博文</title>
    <link href="../../../Public/hou/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../Public/hou/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../Public/hou/css/animate.min.css" rel="stylesheet">
    <link href="../../../Public/hou/css/style.min862f.css?v=4.1.0" rel="stylesheet">
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="ibox-tools"></div>
                </div>
                <div class="ibox-content">
                    <form action='/admin/article/save_list' method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title" value="<?php echo ($art["title"]); ?>" placeholder="请输入收件人...">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">博文类型</label>
                            <div class="col-sm-8">
                                <select class="form-control m-b" name="cid">
                                    <?php if(is_array($clrm)): foreach($clrm as $key=>$value): ?><option value="<?php echo ($value["id"]); ?>"><?php echo ($value["classify"]); ?></option><?php endforeach; endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">博文内容</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="text" value=""><?php echo ($art["text"]); ?></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">博文图片</label>
                            <div class="col-sm-8">
                                <button class="btn btn-info" type="button" id="btnUpload">
                                    <span class='glyphicon glyphicon-cloud'></span>上传图片
                                </button>
                                <input type="file" name="file" id="input-file" class="hidden" value="">
                                <br><span id="file-info"></span>
                                <br><img id="preview" src="<?php echo ($art["img"]); ?>" style="width:200px;">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <input type="hidden" name="id" value="<?php echo ($art["id"]); ?>">
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit" style="margin-right:20px;width:100px;">提交</button>
                                <button class="btn btn-white" type="submit" style="margin-left:20px;width:100px;">取消</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var inputFile = document.getElementById('input-file');
    var labelInfo = document.getElementById('file-info')

    var friendlySize = function(size) {
        var kb = size / 1024;
        if(kb < 1) return size.toFixed(2) + 'b';
        var mb = kb / 1024;
        if(mb < 1) return kb.toFixed(2) + 'kb';
        var gb = mb / 1024;
        if(gb < 1) return mb.toFixed(2) + 'mb';
        return gb.toFixed(2) + 'gb'
    };
    document.getElementById('btnUpload').addEventListener('click', function () {
        inputFile.click();
    });
    inputFile.addEventListener('change', function(){
        var size = this.files[0].size;
        labelInfo.innerHTML = '<span class="font-bold">大小:</span>' + friendlySize(size);

        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
        };
        reader.readAsDataURL(this.files[0]);

    }, false);
</script>

</body>
</html>