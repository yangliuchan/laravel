@extends('layouts.admin')

@section('content')
    <div class="main">

        <div class="main-inner">

            <div class="container">

                <div class="row">
                    @foreach ( $templates as $template)

                    <div class="span6">

                        <div class="widget">

                            <div class="widget-header">
                                <i class="icon-star"></i>
                                <h3>{{ $template->title }}</h3>
                                <span class="pull-right">
                                    <input type="radio" name="switch" class="switch" value="{{ $template -> id }}" @if ( $template -> id == $company -> tid) checked @endif >
                                </span>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <img src="images/bg-header-overlay.png" title="" width="100%" height="100%">
                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->




                    </div>

                    @endforeach

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
    <script src="{{ url('/js/bootstrapSwitch.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('.switch').click(function () {
                $.ajax({
                    url:'{{ url('/changeTemplate') }}',
                    type:'POST',
                    data:{
                        tid:$(this).val(),_token:'{{ csrf_token() }}'
                    },
                    dataType:'json',
                    success:function(data){
                        console.log(data)
                    },
                    error:function(err){
                        console.log(err)
                    }
                })
            })
            
        })
    </script>
@endsection
