<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Box Settings</h4>
            </div>
            <div class="modal-body">
                Here goes box setting content.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
<div class="container">
    <div class="row">
        <div id="content" class="col-lg-12">
            <!-- PAGE HEADER-->
            <div class="row">
                <div class="col-sm-12">

                </div>
            </div>
            <!-- /PAGE HEADER -->
            <!-- DATA TABLES -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BOX -->
                    <div class="box border green">
                        <div class="box-title">
                            <h4><i class="fa fa-table"></i>Dynamic Data Tables</h4>
                            <div class="tools hidden-xs">
                                <a href="#box-config" data-toggle="modal" class="config">
                                    <i class="fa fa-cog"></i>
                                </a>
                                <a href="javascript:;" class="reload">
                                    <i class="fa fa-refresh"></i>
                                </a>
                                <a href="javascript:;" class="collapse">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a href="javascript:;" class="remove">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="box-body">
                            <table id="datatable1" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>规则名称</th>
                                    <th>触发关键字</th>
                                    <th>回复内容</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as  $k=>$v) {?>
                                    <tr class="gradeA">
                                        <td><?php echo $v['message_title']?></td>
                                        <td><?php echo $v['message_this']?></td>
                                        <td><?php echo $v['message_content']?></td>
                                        <td><a href="index.php?r=message/del&id=<?php echo $v['message_id']?>">删除</a>
                                            || <a href="index.php?r=message/up&id=<?php echo $v['message_id']?>">修改</a></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /BOX -->
                </div>
            </div>
            <!-- /DATA TABLES -->
            <div class="separator"></div>
            <!-- TABLE IN MODAL -->
            <div class="row">
            </div>
            <div class="separator"></div>
        </div><!-- /CONTENT-->
    </div>
</div>
</div>
<!-- CUSTOM SCRIPT -->
<script src="./common/js/script.js"></script>
<script>
    jQuery(document).ready(function() {
        App.setPage("dynamic_table");  //Set current page
        App.init(); //Initialise plugins and elements
    });
</script>
<!-- /JAVASCRIPTS -->
</body>
</html>
<script src=''></script>