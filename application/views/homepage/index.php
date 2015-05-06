<div class="panel-heading white-bg">
    <div class="panel-options">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1">首页</a></li>
            <li class=""><a data-toggle="tab" href="#tab-2">分类</a></li>
            <li class=""><a data-toggle="tab" href="#tab-3">讨论社区</a></li>
            <li class=""><a data-toggle="tab" href="#tab-4">关于平台</a></li>
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
                                                <a href="http://www.cnki.net/">
                                                    <li class="list-group-item fist-item">
                                                        中国知网
                                                    </li>
                                                </a>
                                                <a href="http://www.wanfangdata.com.cn/">
                                                    <li class="list-group-item">
                                                        万方数据知识服务平台
                                                    </li>
                                                </a>
                                                <a href="http://www.gsiw.cn/">
                                                    <li class="list-group-item">
                                                        万方论文检测
                                                    </li>
                                                </a>
                                                <a href="http://www.biyenet.com.cn/">
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
                                                <a href="http://exuefu.com/">
                                                    <li class="list-group-item fist-item">
                                                        学府网
                                                    </li>
                                                </a>
                                                <a href="http://www.jsjbbs.cn/">
                                                    <li class="list-group-item">
                                                        计算机网络技术
                                                    </li>
                                                </a>
                                                <a href="http://xueshu.baidu.com/">
                                                    <li class="list-group-item">
                                                        百度学术
                                                    </li>
                                                </a>
                                                <a href="http://google.com">
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
                                                <a href="http://www.doc88.com/">
                                                    <li class="list-group-item fist-item">
                                                        道客巴巴
                                                    </li>
                                                </a>
                                                <a href="http://emuch.net/bbs/">
                                                    <li class="list-group-item">
                                                        小木虫
                                                    </li>
                                                </a>
                                                <a href="http://www.chinainfo.gov.cn">
                                                    <li class="list-group-item">
                                                        中国科技情报网
                                                    </li>
                                                </a>
                                                <a href="http://www.istic.ac.cn/">
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
                                                <a href="http://video.wanfangdata.com.cn/">
                                                    <li class="list-group-item fist-item">
                                                        万方视频
                                                    </li>
                                                </a>
                                                <a href="http://www.dlf.net.cn/index.asp">
                                                    <li class="list-group-item">
                                                        数字图书馆论坛
                                                    </li>
                                                </a>
                                                <a href="http://www.cqvip.com/">
                                                    <li class="list-group-item">
                                                        维普网
                                                    </li>
                                                </a>
                                                <a href="http://www.xzbu.com/">
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

                    <script>
                        function showUser(str)
                        {
                            if (str=="")
                            {
                                document.getElementById("txtHint").innerHTML="";
                                return;
                            }
                            if (window.XMLHttpRequest)
                            {// code for IE7+, Firefox, Chrome, Opera, Safari
                                xmlhttp=new XMLHttpRequest();
                            }
                            else
                            {// code for IE6, IE5
                                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                            }
                            xmlhttp.onreadystatechange=function()
                            {
                                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                {
                                    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                                }
                            }
                            xmlhttp.open("GET","./public/msearchwork.php?q="+str,true);
                            xmlhttp.send();
                        }
                    </script>

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
                                                <a onclick="showUser('1')">
                                                    <li class="list-group-item fist-item">
                                                        计算机与科学技术
                                                    </li>
                                                </a>
                                                <a onclick="showUser('2')">
                                                    <li class="list-group-item">
                                                        软件工程
                                                    </li>
                                                </a>
                                                <a onclick="showUser('3')">
                                                    <li class="list-group-item">
                                                        数学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('4')">
                                                    <li class="list-group-item">
                                                        物理学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('5')">
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
                                                <a onclick="showUser('6')">
                                                    <li class="list-group-item fist-item">
                                                        逻辑学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('7')">
                                                    <li class="list-group-item">
                                                        应用经济学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('8')">
                                                    <li class="list-group-item">
                                                        金融
                                                    </li>
                                                </a>
                                                <a onclick="showUser('9')">
                                                    <li class="list-group-item">
                                                        天文学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('10')">
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
                                                <a onclick="showUser('11')">
                                                    <li class="list-group-item fist-item">
                                                        生命科学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('12')">
                                                    <li class="list-group-item">
                                                        环境与资源
                                                    </li>
                                                </a>
                                                <a onclick="showUser('13')">
                                                    <li class="list-group-item">
                                                        材料学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('14')">
                                                    <li class="list-group-item">
                                                        车辆工程
                                                    </li>
                                                </a>
                                                <a onclick="showUser('15')">
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
                                                <a onclick="showUser('16')">
                                                    <li class="list-group-item fist-item">
                                                        土木工程
                                                    </li>
                                                </a>
                                                <a onclick="showUser('17')">
                                                    <li class="list-group-item">
                                                        通信工程
                                                    </li>
                                                </a>
                                                <a onclick="showUser('18')">
                                                    <li class="list-group-item">
                                                        农学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('19')">
                                                    <li class="list-group-item">
                                                        园艺学
                                                    </li>
                                                </a>
                                                <a onclick="showUser('20')">
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

                        <div class="ibox-content forum-container"  id="txtHint">
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
                                            <div class="forum-sub-title"><?php echo $hotwork[$i]['uploadtime'];?></div>
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
                            </div>
                            <div class="ibox-content">

                                <div class="project-list">

                                    <table class="table table-hover">
                                        <tbody>
                                        <?php foreach($allnote as $item):?>
                                            <tr>
                                                <td class="project-status">
                                                    <span class="label label-primary">Active</span>
                                                </td>
                                                <td class="project-title">
                                                    <a href="topdetail/notedetail/<?php echo $item['id'];?>"><?php echo $item['title']?></a>
                                                    <br/>
                                                    <small>发布 : &nbsp; <?php echo $item['createtime']?></small>
                                                </td>
                                                <td class="project-actions">
                                                    <span href="#" class=""><i class="fa fa-thumbs-up"></i>&nbsp; 赞 : <?php echo $item['vote']?> </span>  &nbsp;
                                                    <span href="#" class=""><i class="fa fa-thumbs-up"></i>&nbsp; 回复 : <?php echo $item['comments']?> </span>
                                                </td>
                                                <td class="project-actions">
                                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-share"></i> 转发 </a>
                                                    <a href="topdetail/notedetail/<?php echo $item['id'];?>" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 回复帖子 </a>
                                                </td>
                                            </tr>
                                        <?php endforeach?>
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                                            <button class="btn btn-white active">1</button>

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
                            <a href="#" class="btn btn-primary animation_select" data-animation="bounce">ruby</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="flash">spring</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="pulse">html5</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="rubberBand">jQueryUI</a>
                            <a href="#" class="btn btn-white animation_select" data-animation="shake">perl</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="swing">CSS</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="tada">bootsstrap</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="wobble">java</a>


                            <!--<h5 class="text-navy">Bouncing Entrances</h5>-->
                            <a href="#" class="btn btn-white animation_select" data-animation="bounceIn">C++</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="bounceInDown">Android</a>
                            <a href="#" class="btn btn-success animation_select" data-animation="bounceInLeft">phoneGap</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="bounceInRight">web</a>
                            <a href="#" class="btn btn-success animation_select" data-animation="bounceInUp">VirtualBox</a>


                            <!--<h5 class="text-navy">Bouncing Exits</h5>-->
                            <a href="#" class="btn btn-warning animation_select" data-animation="bounceOut">bounceOut</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="bounceOutDown">sas</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="bounceOutLeft">paypal</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="bounceOutRight">AngularJS</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="bounceOutUp">WebRTC</a>
                            <!--<h5 class="text-navy">Fading Entrances</h5>-->
                            <a href="#" class="btn btn-success animation_select" data-animation="fadeIn">mvc</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="fadeInDown">flash</a>
                            <a href="#" class="btn btn-white animation_select" data-animation="fadeInDownBig">SublimeText3</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="fadeInLeft">backbone</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="fadeInLeftBig">jdbc</a>
                            <a href="#" class="btn btn-danger animation_select" data-animation="fadeInRight">struts2</a>
                            <a href="#" class="btn btn-default animation_select" data-animation="fadeInRightBig">MongoDB</a>
                            <a href="#" class="btn btn-warning animation_select" data-animation="fadeInUp">foundation</a>
                            <a href="#" class="btn btn-primary animation_select" data-animation="fadeInUpBig">Blender</a>
                            <br><br><br>
                        </div>

                        <div class="ibox-content">
                            <h2 class="text-center">
                                <span class="text-navy">关于本平台</span>
                            </h2>
                            <br>
                            <ul class="notes">
                                <li>
                                    <div>
                                        <small>站长 12:03:28 05-05-2015</small>
                                        <h4>分享的平台</h4>
                                        <p>本网站旨在给同学提供一个良好的平台来分享，展示自己的毕业设计.</p>
                                        <a href="#"><i class="fa fa-thumbs-up "></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <small>站长 11:08:33 05-05-2015</small>
                                        <h4>共同进步的平台 </h4>
                                        <p>在提供资源分享的同时，我们开通了讨论区，你可以参与到讨论，点评的互动中来.</p>
                                        <a href="#"><i class="fa fa-thumbs-up "></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <small>站长 9:12:28 05-05-2015</small>
                                        <h4>享受的平台</h4>
                                        <p>希望能让更多的人参与进来，既能展示出自己的优秀作品同时也能感受到他人的创意，欣赏他人的作品</p>
                                        <a href="#"><i class="fa fa-thumbs-up "></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

</body>

