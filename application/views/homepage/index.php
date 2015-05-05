<div class="panel-heading white-bg">
    <div class="panel-options">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1">首页</a></li>
            <li class=""><a data-toggle="tab" href="#tab-2">分类</a></li>
            <li class=""><a data-toggle="tab" href="#tab-3">讨论社区</a></li>
            <li class=""><a data-toggle="tab" href="#tab-4">搜索</a></li>
        </ul>
    </div>
</div>
            <div class="panel-body white-bg">

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>本期优秀作品</h5> <span class="label label-primary">Hot</span>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php for ($i=0;$i<4;$i++) { ?>
                                            <div class="file-box col-lg-3">
                                                <div class="file">
                                                    <a href="topdetail/index/<?php echo $hotwork[$i]['id']?>">
                                                        <span class="corner"></span>

                                                        <div class="image">
                                                            <img alt="image" class="img-responsive" src=" <?php echo base_url().IMG_DIR;?>/<?php echo $hotwork[$i]['imgpath']?> ">
                                                        </div>
                                                        <div class="file-name">
                                                            <?php echo $hotwork[$i]['title']?>
                                                            <br/>
                                                            <small>Added: Jan 6, 2014</small> <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> <?php echo $hotwork[$i]['vote']?> </a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php for ($i=4;$i<8;$i++) { ?>
                                            <div class="file-box col-lg-3">
                                                <div class="file">
                                                    <a href="topdetail/index/<?php echo $hotwork[$i]['id']?>">
                                                        <span class="corner"></span>

                                                        <div class="image">
                                                            <img alt="image" class="img-responsive" src=" <?php echo base_url().IMG_DIR;?>/<?php echo $hotwork[$i]['imgpath']?> ">
                                                        </div>
                                                        <div class="file-name">
                                                            <?php echo $hotwork[$i]['title']?>
                                                            <br/>
                                                            <small>Added: Jan 6, 2014</small> <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> <?php echo $hotwork[$i]['vote']?> </a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
<div class="row">
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>最新作品</h5> <span class="label label-primary">NEW</span>
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
            <div class="ibox-content">
                <div>
                    <?php
                        $nlabel = array(
                            '0' => 'success',
                            '1' => 'info',
                            '2' => 'primary',
                            '3' => 'default',
                            '4' => 'primary'
                        );
                    ?>
                    <ul class="list-group clear-list m-t">
                        <?php for($i=0;$i<5;$i++) { ?>
                            <a href="topdetail/index/<?php echo $newwork[$i]['id']?>">
                                <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                        <?php echo $newwork[$i]['uploadtime']?>
                                    </span>
                                    <span class="label label-<?php echo $nlabel[$i]?>"><?php echo $i+1?></span> &nbsp; <?php echo $newwork[$i]['title']?>
                                </li>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>推荐作品</h5> <span class="label label-primary">IN+</span>
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
            <div class="ibox-content">
                <div>
                    <?php
                    $plabel = array(
                        '0' => 'success',
                        '1' => 'info',
                        '2' => 'primary',
                        '3' => 'primary',
                        '4' => 'default'
                    );
                    ?>
                    <ul class="list-group clear-list m-t">
                        <?php for($i=0;$i<5;$i++) { ?>
                            <a href="topdetail/index/<?php echo $pushwork[$i]['id']?>">
                                <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                        <?php echo $pushwork[$i]['uploadtime']?>
                                    </span>
                                    <span class="label label-<?php echo $plabel[$i]?>"><?php echo $i+1?></span> &nbsp; <?php echo $pushwork[$i]['title']?>
                                </li>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>最新帖子</h5> <span class="label label-primary">NEW</span>
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
                                    <div class="ibox-content">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <?php for($i=0;$i<5;$i++) { ?>
                                                    <a href="topdetail/notedetail/<?php echo $newnote[$i]['id']?>">
                                                        <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                        <?php echo $newnote[$i]['createtime']?>
                                    </span>
                                                            <span class="label label-<?php echo $nlabel[$i]?>"><?php echo $i+1?></span> &nbsp; <?php echo $newnote[$i]['title']?>
                                                        </li>
                                                    </a>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>热门讨论</h5> <span class="label label-primary">IN+</span>
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
                                    <div class="ibox-content">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <?php for($i=0;$i<5;$i++) { ?>
                                                    <a href="topdetail/notedetail/<?php echo $hotnote[$i]['id']?>">
                                                        <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                        <?php echo $hotnote[$i]['createtime']?>
                                    </span>
                                                            <span class="label label-<?php echo $plabel[$i]?>"><?php echo $i+1?></span> &nbsp; <?php echo $hotnote[$i]['title']?>
                                                        </li>
                                                    </a>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>友情链接</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        中国知网
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        万方数据知识服务平台
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        万方论文检测
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        毕业设计网
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        学府网
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        计算机网络技术
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        百度学术
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        Google学术搜索
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        道客巴巴
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        小木虫
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        中国科技情报网
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        中国科学技术信息所
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        万方视频
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        数字图书馆论坛
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        维普网
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        中国论文网
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p>大学生毕业设计展示平台 <br>
                                    Copyright t-uvw.xyz © 2015</p>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div id="tab-2" class="tab-pane">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>院系分类</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        计算机与科学技术
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        软件工程
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        数学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        物理学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        化学
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        逻辑学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        应用经济学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        金融
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        天文学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        地理学
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        生命科学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        环境与资源
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        材料学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        车辆工程
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        微电子
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <a href="#">
                                                    <li class="list-group-item fist-item">
                                                        土木工程
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        通信工程
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        农学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        园艺学
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-group-item">
                                                        临床医学
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ibox-content forum-container">
                            <?php
                                $faarray = array(
                                    '0' => 'shield',
                                    '1' => 'bolt',
                                    '2' => 'calendar',
                                    '3' => 'star',
                                    '4' => 'clock-o',
                                    '5' => 'bomb',
                                    '6' => 'bookmark',
                                    '7' => 'ambulance'
                                );
                            ?>
                            <div class="forum-title">
                                <h3>热门项目</h3>
                            </div>
                            <?php for($i=0;$i<8;$i++) { ?>
                                <div class="forum-item active">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="forum-icon">
                                                <i class="fa fa-<?php echo $faarray[$i]?>"></i>
                                            </div>
                                            <a href="topdetail/index/<?php echo $hotwork[$i]['id']?>" class="forum-item-title"><?php echo $hotwork[$i]['title']?></a>
                                            <div class="forum-sub-title">Talk about sports, entertainment, music, movies, your favorite color, talk about enything.</div>
                                        </div>
                                        <div class="col-md-1 forum-info">
                                        <span class="views-number">
                                            <small><?php echo $hotwork[$i]['author']?></small>
                                        </span>
                                            <div>
                                                <small>上传</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1 forum-info">
                                        <span class="views-number">
                                            <?php echo $hotwork[$i]['vote']?>
                                        </span>
                                            <div>
                                                <small>获赞</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1 forum-info">
                                        <span class="views-number">
                                            <?php echo $hotwork[$i]['reward']?>
                                        </span>
                                            <div>
                                                <small>获奖</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                                    <button class="btn btn-white  active">1</button>
                                    <button class="btn btn-white">2</button>
                                    <button class="btn btn-white">3</button>
                                    <button class="btn btn-white">4</button>
                                    <button class="btn btn-white">5</button>
                                    <button class="btn btn-white">6</button>
                                    <button class="btn btn-white">7</button>
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                                </div>
                            </div>

                        </div>



                    </div>

                    <div id="tab-3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>最新帖子</h5> <span class="label label-primary">NEW</span>
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
                                    <div class="ibox-content">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <?php for($i=0;$i<5;$i++) { ?>
                                                    <a href="topdetail/notedetail/<?php echo $newnote[$i]['id']?>">
                                                        <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                        <?php echo $newnote[$i]['createtime']?>
                                    </span>
                                                            <span class="label label-<?php echo $nlabel[$i]?>"><?php echo $i+1?></span> &nbsp; <?php echo $newnote[$i]['title']?>
                                                        </li>
                                                    </a>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>热门讨论</h5> <span class="label label-primary">IN+</span>
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
                                    <div class="ibox-content">
                                        <div>
                                            <ul class="list-group clear-list m-t">
                                                <?php for($i=0;$i<5;$i++) { ?>
                                                    <a href="topdetail/notedetail/<?php echo $hotnote[$i]['id']?>">
                                                        <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                        <?php echo $hotnote[$i]['createtime']?>
                                    </span>
                                                            <span class="label label-<?php echo $plabel[$i]?>"><?php echo $i+1?></span> &nbsp; <?php echo $hotnote[$i]['title']?>
                                                        </li>
                                                    </a>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>所有帖子</h5>
                                <div class="ibox-tools">
                                    <a href="" class="btn btn-primary btn-xs">发表帖子</a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row m-b-sm m-t-sm">
                                    <div class="col-md-1">
                                        <button type="button" id="loading-example-btn" class="btn btn-white btn-sm" ><i class="fa fa-refresh"></i> Refresh</button>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="input-group"><input type="text" placeholder="搜索" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                    </div>
                                </div>

                                <div class="project-list">

                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Contract with Zender Company</a>
                                                <br/>
                                                <small>Created 14.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 48%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a1.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a2.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a4.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a5.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">There are many variations of passages</a>
                                                <br/>
                                                <small>Created 11.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 28%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 28%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a7.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a6.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-default">Unactive</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Many desktop publishing packages and web</a>
                                                <br/>
                                                <small>Created 10.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 8%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 8%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a5.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Letraset sheets containing</a>
                                                <br/>
                                                <small>Created 22.07.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 83%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 83%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a2.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a1.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a7.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Contrary to popular belief</a>
                                                <br/>
                                                <small>Created 14.07.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 97%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 97%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a4.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Contract with Zender Company</a>
                                                <br/>
                                                <small>Created 14.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 48%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a1.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a2.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a4.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a5.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">There are many variations of passages</a>
                                                <br/>
                                                <small>Created 11.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 28%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 28%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a7.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a6.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-default">Unactive</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Many desktop publishing packages and web</a>
                                                <br/>
                                                <small>Created 10.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 8%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 8%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a5.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Letraset sheets containing</a>
                                                <br/>
                                                <small>Created 22.07.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 83%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 83%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a2.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a1.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Contrary to popular belief</a>
                                                <br/>
                                                <small>Created 14.07.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 97%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 97%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a4.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">There are many variations of passages</a>
                                                <br/>
                                                <small>Created 11.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 28%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 28%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a7.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a6.jpg"></a>
                                                <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

<!--                                    <div class="hr-line-dashed"></div>-->
                                    <div class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                                            <button class="btn btn-white">1</button>
                                            <button class="btn btn-white  active">2</button>
                                            <button class="btn btn-white">3</button>
                                            <button class="btn btn-white">4</button>
                                            <button class="btn btn-white">5</button>
                                            <button class="btn btn-white">6</button>
                                            <button class="btn btn-white">7</button>
                                            <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="tab-4" class="tab-pane">
                        <div class="animation-efect-links text-center">
                            <h2 class="text-center">
                                <span class="text-navy">标签云</span>
                            </h2> <br>

                            <!--<h5 class="text-navy">Attention Seekers</h5>-->
                            <a href="#" class="btn btn-primary animation_select" data-animation="bounce">bounce</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="flash">flash</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="pulse">pulse</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="rubberBand">rubberBand</a>
                            <a href="#" class="btn btn-white animation_select" data-animation="shake">shake</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="swing">swing</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="tada">tada</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="wobble">wobble</a>


                            <!--<h5 class="text-navy">Bouncing Entrances</h5>-->
                            <a href="#" class="btn btn-white animation_select" data-animation="bounceIn">bounceIn</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="bounceInDown">bounceInDown</a>
                            <a href="#" class="btn btn-success animation_select" data-animation="bounceInLeft">bounceInLeft</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="bounceInRight">bounceInRight</a>
                            <a href="#" class="btn btn-success animation_select" data-animation="bounceInUp">bounceInUp</a>


                            <!--<h5 class="text-navy">Bouncing Exits</h5>-->
                            <a href="#" class="btn btn-warning animation_select" data-animation="bounceOut">bounceOut</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="bounceOutDown">bounceOutDown</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="bounceOutLeft">bounceOutLeft</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="bounceOutRight">bounceOutRight</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="bounceOutUp">bounceOutUp</a>
                            <!--<h5 class="text-navy">Fading Entrances</h5>-->
                            <a href="#" class="btn btn-success animation_select" data-animation="fadeIn">fadeIn</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="fadeInDown">fadeInDown</a>
                            <a href="#" class="btn btn-white animation_select" data-animation="fadeInDownBig">fadeInDownBig</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="fadeInLeft">fadeInLeft</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="fadeInLeftBig">fadeInLeftBig</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="fadeInRight">fadeInRight</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="fadeInRightBig">fadeInRightBig</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="fadeInUp">fadeInUp</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="fadeInUpBig">fadeInUpBig</a>
                            <br><br><br>
                        </div>

                        <div class="ibox-content">
                            <h2 class="text-center">
                                <span class="text-navy">请输入关键词</span>
                            </h2>
                            <small>Request time  (0.23 seconds)</small>

                            <div class="search-form">
                                <form action="index.html" method="get">
                                    <div class="input-group">
                                        <input type="text" placeholder="Admin Theme" name="search" class="form-control input-lg">
                                        <div class="input-group-btn">
                                            <button class="btn btn-lg btn-primary" type="submit">
                                                Search
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="search-result">
                                <h3><a href="#">INSPINIA IN+ Admin Theme</a></h3>
                                <a href="#" class="search-link">www.inspinia.com/inspinia</a>
                                <p>
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites
                                    still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="search-result">
                                <h3><a href="#">WrapBootstrap - Bootstrap Themes & Templates</a></h3>
                                <a href="#" class="search-link">https://wrapbootstrap.com/‎</a>
                                <p>
                                    WrapBootstrap is a marketplace for premium Bootstrap themes and templates. Impress your clients and visitors while using a single, rock-solid foundation.
                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="search-result">
                                <h3><a href="#">WrapBootstrap | Facebook</a></h3>
                                <a href="#" class="search-link">https://www.facebook.com/wrapbootstrap‎</a>
                                <p>
                                    WrapBootstrap. 13672 likes · 508 talking about this. Marketplace for premium Bootstrap themes and templates. https://wrapbootstrap.com/
                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="search-result">
                                <h3><a href="#">Wrapbootstrap - Quora</a></h3>
                                <a href="#" class="search-link">www.quora.com/Wrapbootstrap‎‎</a>
                                <p>
                                    If you are familiar with using any other HTML/CSS themes or WordPress themes then you shouldn't have any problems. If you have some experience using the ...
                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="search-result">
                                <h3><a href="#">Newspaper Template - Wrapbootstrap Free download ...</a></h3>
                                <a href="#" class="search-link">https://wrapbootstrap.com/‎‎</a>
                                <p>
                                    What's black, white and red all over? The answer is Newspaper. A stylish magazine/news style theme inspired by black and white newsprint. The theme is.
                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="search-result">
                                <h3><a href="#">Admin Themes Wrapbootstrap</a></h3>
                                <a href="#" class="search-link">https://wrapbootstrap.com/themes/admin‎‎</a>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                                    <button class="btn btn-white">1</button>
                                    <button class="btn btn-white  active">2</button>
                                    <button class="btn btn-white">3</button>
                                    <button class="btn btn-white">4</button>
                                    <button class="btn btn-white">5</button>
                                    <button class="btn btn-white">6</button>
                                    <button class="btn btn-white">7</button>
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

</body>

