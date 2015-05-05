
<div class="panel-body white-bg">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>讨论社区</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="homepage/index">首页</a>
                </li>
                <li class="active">
                    <strong>话题中心</strong>
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
                        <div class="chat-discussion" style="height: auto">
                            <div class="chat-message">
                                <img class="message-avatar" src="<?php echo base_url().IMG_DIR;?>/a7.jpg" alt="" >
                                <div class="message">
                                    <h2 class="text-center">
                                        <span class="text-navy"><?php echo $noteinfo[0]['title']?></span>
                                    </h2>
                                    <a class="message-author" href="#"> <?php echo $noteinfo[0]['author']?> </a>
                                    <span class="message-date"> <?php echo $noteinfo[0]['createtime']?> </span>
                                            <span class="message-content">
                                            <br>
											    <?php echo $noteinfo[0]['text']?>
                                            <br>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="chat-discussion" style="height: auto">

                            <?php foreach($notecomments as $item): ?>
                                <div class="chat-message">
                                    <img class="message-avatar" src="<?php echo base_url().IMG_DIR;?>/<?php echo $item['comment_img'];?>" alt="" >
                                    <div class="message">
                                        <a class="message-author" href="#"> <?php echo $item['author'];?> </a>
                                        <span class="message-date"> <?php echo $item['createtime'];?> </span>
                                            <span class="message-content">
                                                <br>
											<?php echo $item['text'];?>
                                                <br>
                                            </span>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <br>
                            <textarea class="form-control message-input" name="message" placeholder="输入评论..."></textarea>

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

