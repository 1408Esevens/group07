<div class="row">
    <div class="col-md-12">
        <!-- BOX -->
        <div class="box border red" id="formWizard">
            <div class="box-title">
                <h4><i class="fa fa-bars"></i>Form Wizard - <span class="stepHeader">Step 1 of 3</h4>
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
                <form id="wizForm"  class="form-horizontal" action="index.php?r=num/insert" method="post" >
                    <div class="wizard-form">
                        <div class="wizard-content">
                            <ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#account" data-toggle="tab" class="wiz-step">
                                        <span class="step-number">1</span>
                                        <span class="step-name"><i class="fa fa-check"></i> 公众号添加 </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="bar" class="progress progress-striped progress-sm active" role="progressbar">
                                <div class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="tab-content">
                                <!--开始-->
                                <div class="tab-pane active" id="account">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">公众号名称<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="number_name" placeholder="Please tell us your name for the public."/>
                                            <span class="error-span"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">微信类型</label>
                                        <div class="col-md-4">
                                            <select name="we_type" id="" class="col-md-12 full-width-fix">
                                                <option value="微信公众平台">微信公众平台</option>
                                                <option value="易信公众平台">易信公众平台</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">公众号appid<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="we_appid" placeholder="Please tell us your test number appid"/>
                                            <span class="error-span"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">公众号appsecret<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="we_appsecret" placeholder="Please tell us your test number appsecret"/>
                                            <span class="error-span"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">微信号<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="we_num" placeholder="Please tell us your micro signal."/>
                                            <span class="error-span"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">原始号<span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="we_yuan" placeholder="Please tell us your original number."/>
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
                                        <input type="submit" value="添加" class="btn btn-success submitBtn"/> <i class="fa fa-arrow-circle-right"></i>
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