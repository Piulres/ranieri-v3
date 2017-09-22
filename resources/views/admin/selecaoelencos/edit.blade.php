@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.selecaoelenco.title')</h3>
    
    {!! Form::model($selecaoelenco, ['method' => 'PUT', 'route' => ['admin.selecaoelencos.update', $selecaoelenco->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('selecaoelencov2_id', trans('global.selecaoelenco.fields.selecaoelencov2').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('selecaoelencov2_id', $selecaoelencov2s, old('selecaoelencov2_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('selecaoelencov2_id'))
                        <p class="help-block">
                            {{ $errors->first('selecaoelencov2_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('atorselecao_id', trans('global.selecaoelenco.fields.atorselecao').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('atorselecao_id', $atorselecaos, old('atorselecao_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('atorselecao_id'))
                        <p class="help-block">
                            {{ $errors->first('atorselecao_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('statusator', trans('global.selecaoelenco.fields.statusator').'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('statusator'))
                        <p class="help-block">
                            {{ $errors->first('statusator') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('statusator', '5 - Ok', false, ['required' => '']) !!}
                            final
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('observacaoselecao', trans('global.selecaoelenco.fields.observacaoselecao').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('observacaoselecao', old('observacaoselecao'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('observacaoselecao'))
                        <p class="help-block">
                            {{ $errors->first('observacaoselecao') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

