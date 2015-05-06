
<div class="panel-body white-bg">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>讨论社区</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="homepage/index">首页</a>
                </li>
                <li class="active">
                    <strong>发布帖子</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="ibox ">
                <div class="ibox-content">
                    <div class="row">

                        <div class="mail-box-header">
                            <div class="pull-right tooltip-demo">

                            </div>
                            <h2>
                                上传新作品
                            </h2>
                        </div>
                        <div class="mail-box">


                            <div class="mail-body">

                                <form class="form-horizontal" name="workform" id="workform" method="post" role="form" action="topdetail/addworksucess" enctype="multipart/form-data">
                                    <div class="form-group"><label class="col-sm-2 control-label">项目题目:</label>

                                        <div class="col-sm-10"><input type="text" name="worktitle" class="form-control" value=""></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">上传者 :</label>

                                        <div class="col-sm-10"><input type="text" name="workauthor" class="form-control" value=""></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">获奖次数:</label>

                                        <div class="col-sm-10"><input type="text" name="workreward" class="form-control" value=""></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">项目图片:</label>

                                        <div class="col-sm-10"><input type="file" name="image" class="form-control" value=""></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">项目文件:</label>

                                        <div class="col-sm-10"><input type="file" name="pdf" class="form-control" value=""></div>
                                    </div>
                                    <br>
                                        <div class="chat-message-form">

                                            <div class="form-group">
                                                <textarea class="form-control message-input h-200" name="worktext" placeholder="添加描述..."></textarea>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                </form>

                            </div>

                            <div class="mail-body text-right tooltip-demo">
                                <a href="homepage/index" class="btn btn-white btn-sm"><i class="fa fa-times"></i> 取 消</a>
                                <button class="btn btn-primary btn-sm" onclick="document.workform.submit()"><i class="fa fa-pencil"></i> 上 传</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>

    </div>
</div>

</div>
</div>

</div>

</body>

