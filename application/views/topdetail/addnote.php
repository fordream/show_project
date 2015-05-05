<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url().CSS_DIR;?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().PUB_DIR;?>/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_DIR;?>/animate.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_DIR;?>/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_DIR;?>/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_DIR;?>/style.css" rel="stylesheet">
</head>

<body>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>发布新的讨论帖</h5> &nbsp;
                <button id="edit" class="btn btn-primary btn-xs m-l-sm" onclick="edit()" type="button">Edit</button>
                <button id="save" class="btn btn-primary  btn-xs" onclick="save()" type="button">Save</button>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content no-padding">

                <div class="click2edit wrapper p-md">
                    <h3>Lorem Ipsum is simply</h3>
                    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    <br/>
                    <br/>
                    <ul>
                        <li>Remaining essentially unchanged</li>
                        <li>Make a type specimen book</li>
                        <li>Unknown printer</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url().JS_DIR;?>/jquery-2.1.1.js"></script>
<script src="<?php echo base_url().JS_DIR;?>/bootstrap.min.js"></script>
<script src="<?php echo base_url().JS_DIR;?>/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url().JS_DIR;?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url().JS_DIR;?>/inspinia.js"></script>
<script src="<?php echo base_url().JS_DIR;?>/plugins/pace/pace.min.js"></script>

<!-- SUMMERNOTE -->
<script src="<?php echo base_url().JS_DIR;?>/plugins/summernote/summernote.min.js"></script>

<script>
    $(document).ready(function(){

        $('.summernote').summernote();

    });
    var edit = function() {
        $('.click2edit').summernote({focus: true});
    };
    var save = function() {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };
</script>

</body>

</html>
