<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>Ticket Thread</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">Tickets Thread</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Ticket Thread</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="ticketList block-style">
                            <div class="ticket">
                                <div class="left-part go_back">
                                    <input type="button" class="yBtn hidden-xs hidden-sm" value="Go back" onclick="history.back()">
                                    <h3><?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></h3>
                                    <div class="ticketpostbarbadgeblue">
                                    </div>
                                </div>
                                <div class="right-part">
                                    <div class="date">
                                        <?php echo date('d F Y h:m A', strtotime($ticket['created_at'])) ?></div>
                                    <div class="email">
                                        Email: support@auctionglauto.com
                                    </div>
                                </div>
                            </div>
                            <?php for($i=sizeof($thread) - 1; $i>=1; $i--){?>
                            <div class="post">
                                <?php echo $thread[$i]['message'] ?> 
                            </div>
                            <div class="ticket">
                                <div class="left-part go_back">
                                    <input type="button" class="yBtn hidden-xs hidden-sm" value="Go back" onclick="history.back()">
                                    <h3><?php echo $thread[$i]['first_name'] ?> <?php echo $thread[$i]['last_name'] ?></h3>
                                    <div class="ticketpostbarbadgeblue">
                                    </div>
                                </div>
                                <div class="right-part">
                                    <div class="date">
                                        <?php echo date('d F Y h:m A', strtotime($thread[$i]['created_at'])) ?> </div>
                                    <div class="email">
                                        Email: support@auctionglauto.com
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="post">
                                <?php echo $ticket['Message'] ?>
                                <div class="file">
                                    <a target="_blank" href="<?php echo base_url($ticket['FIle']) ?>"><?php echo str_replace('/uploads/', '', $ticket['FIle']) ?></a>
                                </div>
                            </div>
                        </div>
                        <?php if ($ticket['status'] == 1) {?>
                        <div class="ticketList-answer block-style">
                            <div class="group-title">
                                <span style="text-align: center">Add answer</span>
                            </div>
                            <form id="repost-form" action="" method="post">
                                <textarea name="message" id="RepostTicketForm_message"></textarea> 
                                <input class="yBtn_24" type="submit"  value="Add"> </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 450px;"></div>
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<style type="text/css">
.ticketList>div:first-child input.yBtn {
    display: block;
}
.go_back input {
    float: left;
    padding-left: 20px;
    line-height: 23px;
    background: url(https://sca.auction/img/arrow_left.png) no-repeat 10% 50% transparent;
    border: 2px solid #CCCCCC;
    font-size: 12px;
    -webkit-appearance: button;
    cursor: pointer;
}
.ticketList .ticket h3 {
    font-size: 16px;
    margin-top: 0;
    line-height: 1.9;
}
    .ticketList .post {
    color: #666666;
    padding-bottom: 20px;
    line-height: 1.7;
    word-break: break-word;
}
.ticketList .ticket {
    background-color: #ccc;
    margin-bottom: 10px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
    display: table;
    width: 100%;
}
.ticketList .left-part, .ticketList .right-part {
    background-color: #fff;
    padding: 5px 0;
    display: table-cell;
    vertical-align: top;
}
.ticketList .left-part {
    margin-right: 20px;
    height: 100%;
    width: 60%;
}
.ticketList>div input.yBtn {
    display: none;
}
.ticketList input.yBtn {
    margin-right: 10px;
}
.ticketList .ticket h3 {
    font-size: 16px;
    margin-top: 0;
    line-height: 1.9;
}
.ticketList .right-part {
    overflow: hidden;
    height: 100%;
    width: 40%;
    text-align: right;
}
.ticketList .date, .ticketList .email, .ticketList .post {
    color: #888888;
    font-size: 13px;
}
.ticketList .post .file {
    padding-top: 10px;
}
.block-style {
    background-color: #ffffff;
    border: 1px solid #ececec;
    border-bottom: 2px solid #ececec;
    padding: 15px;
}
.ticketList-answer .group-title {
    padding-bottom: 10px;
}
.group-title {
    background-color: #ffffff;
    color: #333333;
    text-align: center;
    padding: 0 15px;
    font-size: 18px;
    font-weight: bold;
    /* text-transform: uppercase; */
    position: relative;
    overflow: hidden;
    text-overflow: ellipsis;
}
.ticketList-answer #repost-form {
    text-align: center;
}
#repost-form textarea {
    height: 170px !important;
    width: 100%;
    border: 1px solid #e4e4e4;
    border-radius: 3px;
    resize: none;
}
.yBtn_24 {
    padding: 0 15px;
    height: 40px;
    line-height: 40px;
    font-size: 18px;
    background: #1E69B8;
    border-radius: 3px;
    text-align: center;
    min-width: 25%;
    color: #fff;
    font-weight: bold;
    border: none;
}
</style>