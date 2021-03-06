@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.elencofotos.title')</h3>
    
    {!! Form::model($elencofoto, ['method' => 'PUT', 'route' => ['admin.elencofotos.update', $elencofoto->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('elenco_id', trans('global.elencofotos.fields.elenco').'', ['class' => 'control-label']) !!}
                    {!! Form::select('elenco_id', $elencos, old('elenco_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('elenco_id'))
                        <p class="help-block">
                            {{ $errors->first('elenco_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($elencofoto->foto)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$elencofoto->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$elencofoto->foto) }}"></a>
                    @endif
                    {!! Form::label('foto', trans('global.elencofotos.fields.foto').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('foto', old('foto')) !!}
                    {!! Form::file('foto', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('foto_max_size', 8) !!}
                    {!! Form::hidden('foto_max_width', 4096) !!}
                    {!! Form::hidden('foto_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('foto'))
                        <p class="help-block">
                            {{ $errors->first('foto') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ativo', trans('global.elencofotos.fields.ativo').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('ativo', 0) !!}
                    {!! Form::checkbox('ativo', 1, old('ativo'), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ativo'))
                        <p class="help-block">
                            {{ $errors->first('ativo') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

