@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.elenco-videos.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.elenco-videos.fields.elenco')</th>
                            <td field-key='elenco'>{{ $elenco_video->elenco->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.elenco-videos.fields.urlvideo')</th>
                            <td field-key='urlvideo'>{{ $elenco_video->urlvideo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.elenco-videos.fields.ativo')</th>
                            <td field-key='ativo'>{{ Form::checkbox("ativo", 1, $elenco_video->ativo == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.elenco_videos.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
