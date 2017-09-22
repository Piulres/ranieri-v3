@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.elencofotos.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.elencofotos.fields.elenco')</th>
                            <td field-key='elenco'>{{ $elencofoto->elenco->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.elencofotos.fields.foto')</th>
                            <td field-key='foto'>@if($elencofoto->foto)<a href="{{ asset(env('UPLOAD_PATH').'/' . $elencofoto->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $elencofoto->foto) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.elencofotos.fields.ativo')</th>
                            <td field-key='ativo'>{{ Form::checkbox("ativo", 1, $elencofoto->ativo == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.elencofotos.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
