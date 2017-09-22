@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.elenco-videos.title')</h3>
    
    {!! Form::model($elenco_video, ['method' => 'PUT', 'route' => ['admin.elenco_videos.update', $elenco_video->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('elenco_id', trans('global.elenco-videos.fields.elenco').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('urlvideo', trans('global.elenco-videos.fields.urlvideo').'', ['class' => 'control-label']) !!}
                    {!! Form::text('urlvideo', old('urlvideo'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('urlvideo'))
                        <p class="help-block">
                            {{ $errors->first('urlvideo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ativo', trans('global.elenco-videos.fields.ativo').'', ['class' => 'control-label']) !!}
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

