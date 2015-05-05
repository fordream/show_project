
<div class="panel-body white-bg">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>作品详情</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="homepage/index">首页</a>
                </li>
                <li class="active">
                    <strong>详情页面</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if($show_edit == true) { ?>    // 只有登录了才能编辑项目
                                    <div class="m-b-md">
                                        <a href="#" class="btn btn-white btn-xs pull-right">编辑项目</a>
                                        <h2><?php echo $workinfo[0]['title']?></h2>
                                    </div>
                                <?php } ?>
                                <dl class="dl-horizontal">
                                    <dt>状态:</dt> <dd><span class="label label-primary">Active</span></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <dl class="dl-horizontal">

                                    <dt>上 传:</dt> <dd><?php echo $workinfo[0]['author']?></dd>
                                    <dt>获 赞:</dt> <dd>  <?php echo $workinfo[0]['vote']?></dd>
                                    <dt>时 间:</dt> <dd> 	<?php echo $workinfo[0]['uploadtime']?> </dd>
                                </dl>
                            </div>
                            <div class="col-lg-7" id="cluster_info">
                                <dl class="dl-horizontal" >

                                    <dt>最后编辑时间:</dt> <dd><?php echo $workinfo[0]['lastupdate']?></dd>
                                    <dt>获奖次数:</dt> <dd> 	<?php echo $workinfo[0]['reward']?> &nbsp; times</dd>
                                    <dt>合作人员:</dt>
                                    <dd class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a3.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a1.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a2.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a4.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a5.jpg"></a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mail-box-header">
                                <div class="pull-right tooltip-demo">
                                    <a class="btn btn-sm btn-white"><i class="fa fa-thumbs-up"></i> <?php echo $workinfo[0]['vote']?> </a>
                                    <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
                                </div>
                                <div class="mail-tools tooltip-demo m-t-md">
                                    <h3>
                                        <span class="font-noraml">项 目: </span><?php echo $workinfo[0]['title']?>
                                    </h3>
                                    <h5>
                                        <span class="pull-right font-noraml"><?php echo $workinfo[0]['uploadtime']?></span>
                                        <span class="font-noraml">From: </span>www.t-uvw.xyz
                                    </h5>
                                </div>
                            </div>
                            <div class="mail-box">


                                <div class="mail-body">
                                    <p>
                                        项目表述 :
                                        <br/>
                                        <br/>
                                        随着企业的经营规模不断扩大，信息数据急剧增加，有关超市管理的各种信息也成倍增长。面对庞大的信息量，有必要开发超市管理系统来提高信息管理工作的效率。今天我们使用计算机对超市管理信息进行管理，具有手工管理所无法比拟的优点。通过这样的系统，可以做到信息的规范管理、科学统计和快速查询，从而减少管理方面的工作量,有效地提高管理的<strong>工作效率</strong>。

                                    </p>
                                    <p>
                                        本超市管理系统包括各类信息输入、输出信息管理、信息查询、数据表查看管理以及系统登录等几大模块。以及在这几大模块构建中简要介绍了表单的制作过程，程序的编写，添加，最后的编译过程。并且叙述了作者在软件开发过程中的<a href="#" class="text-navy">心得体会</a>管理员通过身份验证后可以拥有完全的权限管理系统。
                                    </p>
                                    <p>
                                        本系统采用<strong>JSP(JAVA SERVER PAGES) 2.0</strong>为开发工具，后台数据库采用SQLSERVER2005，操作系统为Windows XP。利用软件工程原理，采用面向对象的编程方法，其开发主要包括后台数据库的建立和维护以及前端应用程序的开发两个方面，实现了超市管理的自动化和信息化。
                                    </p>
                                    <p>
                                        关键词 : 超市管理 系统开发 信息管理
                                    </p>
                                </div>
                                <div class="mail-attachment">
                                    <p>
                                        <span><i class="fa fa-paperclip"></i> 2 附件 - </span>
                                        <a href="#">Download all</a>
                                        |
                                        <a href="#">View all images</a>
                                    </p>

                                    <div class="attachment">
                                        <div class="file-box">
                                            <div class="file">
                                                <a href="#">
                                                    <span class="corner"></span>

                                                    <div class="image">
                                                        <img alt="image" class="img-responsive" src="<?php echo base_url().IMG_DIR;?>/<?php echo $workinfo[0]['imgpath']?>">
                                                    </div>
                                                    <div class="file-name">
                                                        project_face_<?php echo $workinfo[0]['id']?>.jpg
                                                        <br/>
                                                        <small><?php echo $workinfo[0]['uploadtime']?></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <div class="file">
                                                <a href="#">
                                                    <span class="corner"></span>

                                                    <div class="icon">
                                                        <i class="fa fa-file-pdf-o" style="color: #ff7851"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        project_<?php echo $workinfo[0]['id']?>.pdf
                                                        <br/>
                                                        <small><?php echo $workinfo[0]['uploadtime']?></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="mail-body text-right tooltip-demo">
                                    <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-arrow-right"></i> 追贴</a>
                                    <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> 联系 他/她</button>
                                    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-heart"></i> 喜欢</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        </div>
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab-1" data-toggle="tab">评论</a></li>
                                                <li class=""><a href="#tab-2" data-toggle="tab">项目动态</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-1">
                                                <div class="feed-activity-list">
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a2.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right">2h ago</small>
                                                            <small><strong>小明</strong> 对 <strong><?php echo $workinfo[0]['author']?></strong> 说 </small><br>
                                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                                            <div class="well">
                                                                完成的好赞，我也做过和这个相关的工作，不过没有做到这样细致。很有意义的工作，继续加油!!!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="<?php echo base_url().IMG_DIR;?>/a5.jpg">
                                                        </a>
                                                        <div class="media-body ">
                                                            <small class="pull-right">2h ago</small>
                                                            <small><strong>张三</strong> 对 <strong><?php echo $workinfo[0]['author']?></strong> 说 </small><br>
                                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                                            <div class="well">
                                                                完成的好赞，我也做过和这个相关的工作，不过没有做到这样细致。很有意义的工作，继续加油!!!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab-2">

                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>状态</th>
                                                        <th>主题</th>
                                                        <th>时间</th>
                                                        <th>备注</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                        </td>
                                                        <td>
                                                            创建项目
                                                        </td>
                                                        <td>
                                                            <?php echo $workinfo[0]['uploadtime']?>
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                首次上传项目，希望大家喜欢。
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                        </td>
                                                        <td>
                                                            添加项目描述
                                                        </td>
                                                        <td>
                                                            <?php echo $workinfo[0]['uploadtime']?>
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                不要笑话小弟的文风
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                        </td>
                                                        <td>
                                                            上传文件
                                                        </td>
                                                        <td>
                                                            <?php echo $workinfo[0]['uploadtime']?>
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                文件共享，大家都来看看
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="wrapper wrapper-content project-manager">
                <h4>作者简介</h4>
                <img src="<?php echo base_url().IMG_DIR;?>/zender_logo.png" class="img-responsive">
                <p class="small">
                    <?php echo $workinfo[0]['author']?>,一个极具悠长历史内涵的名字，出现于各个领域，尤其在文化教育方面做出了不可磨灭的贡献，他活跃于各种应用试题中，穿梭于各种作文中，是霸占各类教科书N年之久的人物，并伴随着我们的学龄成长，是课本题海中当之无愧的男主角，他丰碑式的出现具有划时代的意义。我国最有影响力的人物没有之一，并代表中国冲出亚洲走向世界。与小红，小刚并称铁三角。
                </p>
                <p class="small font-bold">
                    <span><i class="fa fa-circle text-warning"></i> </span>
                </p>
                <h5>项目标签</h5>
                <ul class="tag-list" style="padding: 0">
                    <li><a href=""><i class="fa fa-tag"></i> IA32逻辑功能</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> C++实现</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> 仿真实现</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> MySQL</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
</div>

</div>

</body>

