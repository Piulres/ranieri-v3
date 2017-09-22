@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.selecaoelenco.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.selecaoelenco.fields.selecaoelencov2')</th>
                            <td field-key='selecaoelencov2'>{{ $selecaoelenco->selecaoelencov2->selecaonome or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.selecaoelenco.fields.atorselecao')</th>
                            <td field-key='atorselecao'>{{ $selecaoelenco->atorselecao->nomeartistico or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.selecaoelenco.fields.statusator')</th>
                            <td field-key='statusator'>{{ $selecaoelenco->statusator }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.selecaoelenco.fields.observacaoselecao')</th>
                            <td field-key='observacaoselecao'>{!! $selecaoelenco->observacaoselecao !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.selecaoelencos.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
