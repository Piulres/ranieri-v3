@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.selecoesv2.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.selecoesv2s.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('selecaonome', trans('global.selecoesv2.fields.selecaonome').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('selecaonome', old('selecaonome'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('selecaonome'))
                        <p class="help-block">
                            {{ $errors->first('selecaonome') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('datafimselecao', trans('global.selecoesv2.fields.datafimselecao').'', ['class' => 'control-label']) !!}
                    {!! Form::text('datafimselecao', old('datafimselecao'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('datafimselecao'))
                        <p class="help-block">
                            {{ $errors->first('datafimselecao') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('descricao', trans('global.selecoesv2.fields.descricao').'', ['class' => 'control-label']) !!}
                    {!! Form::text('descricao', old('descricao'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('descricao'))
                        <p class="help-block">
                            {{ $errors->first('descricao') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('produtoraelenco_id', trans('global.selecoesv2.fields.produtoraelenco').'', ['class' => 'control-label']) !!}
                    {!! Form::select('produtoraelenco_id', $produtoraelencos, old('produtoraelenco_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('produtoraelenco_id'))
                        <p class="help-block">
                            {{ $errors->first('produtoraelenco_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop