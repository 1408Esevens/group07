<div class="row">
    <div class="col-md-12">
        <!-- BOX -->
        <div class="box border red" id="formWizard">
            <div class="box-title">
                <h4><i class="fa fa-bars"></i><span class="stepHeader"></h4>
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
            <div class="box-body form">
                <form id="wizForm"  class="form-horizontal" action="index.php?r=message/wen" method="post" >
                    <div class="wizard-form">
                        <div class="wizard-content">
                            <!--<ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#account" data-toggle="tab" class="wiz-step">
                                        <span class="step-number">1</span>
                                        <span class="step-name"><i class="fa fa-check"></i> 公众号添加 </span>
                                    </a>
                                </li>
                            </ul>-->
                            <div id="bar" class="progress progress-striped progress-sm active" role="progressbar">
                                <div class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="tab-content">
                                <!--开始-->
                                <div class="tab-pane active" id="account">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">规则名称<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="message_title" placeholder="Please tell us your name for the public."/>
                                            <span class="error-span"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">触发关键字<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="message_this" placeholder="Please tell us your test number appid"/>
                                            <span class="error-span"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">回复内容<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <textarea id="basic-content-basic-item-1"  class="span7 basic-content-new" autocomplete="off"  cols="70" style="height:200px;" placeholder="Please tell us what you want to reply." name="message_content"></textarea>
                                            <!--<input type="text" class="form-control" name="message_content" placeholder="Please tell us your test number appsecret"/>-->
                                            <span class="error-span"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-buttons">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" value="提交" class="btn btn-success submitBtn"/> <i class="fa fa-arrow-circle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--结束-->
                    </div>
                </form>
            </div>
        </div>

        <!-- /BOX -->
    </div>
</div>