@extends('layouts.admin')

@section('content')
    <div class="main">

        <div class="main-inner">

            <div class="container">

                <div class="row">

                    <div class="span12">

                        <div class="widget ">

                            <div class="widget-header">
                                <i class="icon-user"></i>
                                <h3>资料修改</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">



                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="{{ (count($errors) == 0) ? 'active':'' }}">
                                            <a href="#formcontrols" data-toggle="tab">公司信息</a>
                                        </li>
                                        <li class="{{ (count($errors) > 0) ? 'active':'' }}"><a href="#jscontrols" data-toggle="tab">个人资料</a></li>
                                    </ul>

                                    <br>

                                    @if(Session::has('message'))
                                        <div class="alert alert-info"> {{Session::get('message')}}
                                        </div>
                                    @endif

                                    <div class="tab-content">
                                        <div class="tab-pane {{ (count($errors) == 0) ? 'active':'' }}" id="formcontrols">
                                            <form id="edit-profile" class="form-horizontal" action="{{ url('info') }}" method="POST">
                                                {{ csrf_field() }}
                                                <fieldset>

                                                    <div class="control-group">
                                                        <label class="control-label" for="username">企业名称</label>
                                                        <div class="controls">
                                                            <input type="text" name="co_name" class="span6 disabled" id="username" placeholder="填写您的企业名称" value="{{ $company->co_name or '' }}" >
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->


                                                    <div class="control-group">
                                                        <label class="control-label" for="firstname">企业简介</label>
                                                        <div class="controls">
                                                            <div style=" margin-top: -5px;">
                                                                <div class="col-md-12">

                                                                    <div class="btn-toolbar cf-toolbar" id="page-toolbar-a794381c" style="margin-bottom:4px;">
                                                                        <div class="btn-group">
                                                                            <a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B" target="_blank" unselectable="on"><i class="fa fa-bold"></i></a>
                                                                            <a class="btn btn-default" data-wysihtml5-command="italic" title="CTRL+I" target="_blank" unselectable="on"><i class="fa fa-italic"></i></a>
                                                                            <a class="btn btn-default" data-wysihtml5-command="underline" title="CTRL+U" target="_blank" unselectable="on"><i class="fa fa-underline"></i></a>
                                                                            <a class="btn btn-default" data-wysihtml5-command="strikethrough" target="_blank" unselectable="on"><i class="fa fa-strikethrough"></i></a>
                                                                        </div>

                                                                        <div class="btn-group">
                                                                            <a class="btn btn-default" data-wysihtml5-command="formatInline" data-wysihtml5-command-value="code" title="文字、代码片段 " target="_blank" unselectable="on"><code>片段</code></a>
                                                                            <div class="btn-group transit extra-part hideit" id="page-toolbar-a794381c-s-text"><!--text-->
                                                                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" target="_blank" unselectable="on">属性&nbsp;<span class="caret"></span></a>
                                                                                <ul class="dropdown-menu" role="menu">
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-text" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="text-muted" unselectable="on"><span class="text-muted">次要 / 弱化</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-text" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="text-primary" unselectable="on"><span class="text-primary">首要 / 最佳</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-text" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="text-info" unselectable="on"><span class="text-info">信息 / 数据</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-text" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="text-warning" unselectable="on"><span class="text-warning">提醒 / 警告</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-text" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="text-success" unselectable="on"><span class="text-success">成功 / 好结果</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-text" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="text-danger" unselectable="on"><span class="text-danger">危险 / 坏结果</span></a></li>
                                                                                    <li></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="btn-group extra-part transit hideit" id="page-toolbar-a794381c-s-tag"><!--tag-->
                                                                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" target="_blank" unselectable="on">标签&nbsp;<span class="caret"></span></a>
                                                                                <ul class="dropdown-menu cf change-label" role="menu">
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-tag" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="label label-default" unselectable="on"><span class="label label-default">默认 / 普通</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-tag" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="label label-primary" unselectable="on"><span class="label label-primary">首要 / 最佳</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-tag" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="label label-info" unselectable="on"><span class="label label-info">信息 / 数据</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-tag" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="label label-warning" unselectable="on"><span class="label label-warning">提醒 / 警告</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-tag" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="label label-success" unselectable="on"><span class="label label-success">成功 / 好结果</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-tag" target="_blank" data-wysihtml5-command="myClass" data-wysihtml5-command-value="label label-danger" unselectable="on"><span class="label label-danger">危险 / 坏结果</span></a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                        <div class="btn-group">
                                                                            <a class="btn btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" title=" 引用 " target="_blank" unselectable="on"><i class="fa fa-quote-left"></i></a>
                                                                            <a class="btn btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="pre" title=" 代码块 " target="_blank" unselectable="on"><i class="fa fa-code"></i></a>
                                                                            <a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title=" 无序列表 " target="_blank" unselectable="on"><i class="fa fa-list"></i></a>
                                                                            <a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title=" 有序列表 " target="_blank" unselectable="on"><i class="fa fa-list-ol"></i></a>
                                                                            <div class="btn-group tb-bg extra-part transit hideit" id="page-toolbar-a794381c-s-bg"><!--bg-->
                                                                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" target="_blank" unselectable="on">背景&nbsp;<span class="caret"></span></a>
                                                                                <ul class="dropdown-menu cf change-label" role="menu">
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-bg" target="_blank" data-wysihtml5-command="bgColor" data-wysihtml5-command-value="bg-primary" unselectable="on"><span class="bg-primary">首要 / 最佳</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-bg" target="_blank" data-wysihtml5-command="bgColor" data-wysihtml5-command-value="bg-info" unselectable="on"><span class="bg-info">信息 / 数据</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-bg" target="_blank" data-wysihtml5-command="bgColor" data-wysihtml5-command-value="bg-success" unselectable="on"><span class="bg-success">成功 / 好结果</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-bg" target="_blank" data-wysihtml5-command="bgColor" data-wysihtml5-command-value="bg-warning" unselectable="on"><span class="bg-warning">提醒 / 警告</span></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-bg" target="_blank" data-wysihtml5-command="bgColor" data-wysihtml5-command-value="bg-danger" unselectable="on"><span class="bg-danger">危险 / 坏结果</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="btn-group tb-alert extra-part transit hideit" id="page-toolbar-a794381c-s-alert"><!--alert-->
                                                                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" target="_blank" unselectable="on">突显&nbsp;<span class="caret"></span></a>
                                                                                <ul class="dropdown-menu cf change-label" role="menu">
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-alert" target="_blank" data-wysihtml5-command="myAlert" data-wysihtml5-command-value="info" unselectable="on"><p class="alert alert-info">信息 / 数据</p></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-alert" target="_blank" data-wysihtml5-command="myAlert" data-wysihtml5-command-value="success" unselectable="on"><p class="alert alert-success">成功 / 好结果</p></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-alert" target="_blank" data-wysihtml5-command="myAlert" data-wysihtml5-command-value="warning" unselectable="on"><p class="alert alert-warning">提醒 / 警告</p></a></li>
                                                                                    <li><a href="javascript:void(0);" selector="#page-toolbar-a794381c-s-alert" target="_blank" data-wysihtml5-command="myAlert" data-wysihtml5-command-value="danger" unselectable="on"><p class="alert alert-danger">危险 / 坏结果</p></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="btn-group extra-part result-wrap transit hideit">
                                                                                <a class="btn btn-default" data-wysihtml5-command="myResult" data-wysihtml5-command-value="thumbnail" title=" 运行结果 " target="_blank" unselectable="on"><i class="fa fa-terminal"></i></a>
                                                                            </div>

                                                                        </div>


                                                                        <div class="btn-group">


                                                                            <a id="page-toolbar-a794381cLBID" dialog="#page-toolbar-a794381cLMID" class="btn btn-default" href="javascript:void(0);" data-wysihtml5-command="createLink" title="链接" unselectable="on"><i class="fa fa-link"></i></a>

                                                                        </div> <!-- btn-group-->
                                                                        <script>

                                                                            if ( typeof jQuery != 'undefined' ) {
                                                                                $('#page-toolbar-a794381cLMID').appendTo('body');
                                                                            }
                                                                            else {
                                                                            }
                                                                        </script>
                                                                        <script>
                                                                            $('#page-toolbar-a794381cLBID').attr('data-wysihtml5-command','createLink').attr('title','链接');
                                                                            $('#page-toolbar-a794381cLMID').attr('data-wysihtml5-dialog','createLink');
                                                                        </script>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <textarea name="co_profile" id="id-page-editor-a794381c" class="cfeditor" placeholder="填写企业简介" >{{ $company->co_profile or '' }}</textarea>

                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->


                                                    <div class="control-group">
                                                        <label class="control-label" for="tel">联系电话</label>
                                                        <div class="controls">
                                                            <input type="text" name="mobile" class="span4" id="tel" placeholder="填写您的手机号" value="{{ $company->mobile or '' }}">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->


                                                    <div class="control-group">
                                                        <label class="control-label" for="Address">联系地址</label>
                                                        <div class="controls">
                                                            <input type="text" name="address" class="span6" id="Address" placeholder="填写您的联系地址" value="{{ $company->address or '' }}">
                                                        </div> <!-- /controls -->
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="domain">网址</label>
                                                        <div class="controls">
                                                            <input type="text" name="domain" class="span2" id="domain"  placeholder="dome" value="{{ $company->domain or '' }}"> .bolinwl.com
                                                            <p class="help-block">用于访问店铺微站。</p>
                                                        </div> <!-- /controls -->
                                                    </div><!-- /control-group -->


                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-primary">提交</button>
                                                        <button class="btn">重置</button>
                                                    </div> <!-- /form-actions -->
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="tab-pane {{ (count($errors) > 0) ? 'active':'' }}" id="jscontrols">
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form id="edit-profile" class="form-horizontal" action="{{ url('changePassword') }}" method="POST">
                                                {{ csrf_field() }}
                                                <fieldset>

                                                    <div class="control-group">
                                                        <label class="control-label" for="username">用户名</label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 disabled" id="username" value="{{ Auth::user()->name }}" disabled="">
                                                            <p class="help-block">您的用户名用于登录，无法更改。</p>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->


                                                    <div class="control-group">
                                                        <label class="control-label" for="oldpassword">原密码</label>
                                                        <div class="controls">
                                                            <input type="password" class="span6" id="oldpassword" name="oldpassword" value="">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="control-group">
                                                        <label class="control-label" for="password">新密码</label>
                                                        <div class="controls">
                                                            <input type="password" class="span6" id="password" name="password" value="">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="control-group">
                                                        <label class="control-label" for="password_confirmation">确认密码</label>
                                                        <div class="controls">
                                                            <input type="password" class="span6" id="password_confirmation" name="password_confirmation" value="">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->


                                                    <div class="control-group">
                                                        <label class="control-label" for="email">Email</label>
                                                        <div class="controls">
                                                            <input type="text" class="span4" id="email" name="email" value="{{ Auth::user()->email }}">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <br>


                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-primary">保存</button>
                                                        <button class="btn">取消</button>
                                                    </div> <!-- /form-actions -->
                                                </fieldset>
                                            </form>
                                        </div>

                                    </div>


                                </div>





                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->

                    </div> <!-- /span8 -->




                </div> <!-- /row -->

            </div> <!-- /container -->

        </div> <!-- /main-inner -->

    </div>
    <!-- /main -->
    </div><div class="modal fade noautofocus" id="page-toolbar-a794381cLMID" tabindex="-1" role="dialog" aria-labelledby="page-toolbar-a794381cLMIDLabel" aria-hidden="true" style="display:none" data-wysihtml5-dialog="createLink">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    <h3 class="modal-title" id="page-toolbar-a794381cLMIDLabel">链接</h3>

                </div>
                <div class="modal-body">

                    <input class="form-control" data-wysihtml5-dialog-field="href" value="http://">

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel">取消</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">确定（Enter）</button>

                </div>


            </div>
        </div>
    </div>
@endsection

@section('js')


    <link rel="stylesheet" href="bootstrap/css/bootstrap-2014-10-23-e2373d4a.min.css">
    <link href="CFEditor-master/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <script src="CFEditor-master/js/global.js"></script>

    <script src="CFEditor-master/wysihtml5/main.js"></script>
    <script src="CFEditor-master/wysihtml5/classfoo-editor.js"></script>

    <style>
        .well.cf,.panel.cf{border-color:#d8d8d8;-webkit-box-shadow:0 1px 0 #cfcfcf;-moz-box-shadow:0 1px 0 #cfcfcf;box-shadow:0 1px 0 #cfcfcf}
        .transit {
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out
        }

        .cfeditor {
            padding: 10px;
            overflow: auto;
            width: 80%;
            height: 350px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            outline: 0
        }

        div.cf-toolbar a.wysihtml5-command-active {
            background-image: none;
            -webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
            background-color: #E6E6E6;
            background-color: #D9D9D9;
            outline: 0
        }

    </style>

    <script>

        var href = 'CFEditor-master/bootstrap/css/bootstrap-2014-10-23-e2373d4a.min.css'

        var editor = new wysihtml5.Editor(
            "id-page-editor-a794381c",{
                name: "page-editor-a794381c",
                style: true,
                toolbar:  "page-toolbar-a794381c",
                parserRules:  ToolBarRules,
                useLineBreaks: false,
                stylesheets: href
            });
    </script>
@endsection
