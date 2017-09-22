@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.produtoras.title')</h3>
    
    {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.produtoras.update', $user->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('global.users.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('global.users.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', trans('global.users.fields.password').'*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('role', trans('global.users.fields.role').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('role[]', $roles, old('role') ? old('role') : $user->role->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('role'))
                        <p class="help-block">
                            {{ $errors->first('role') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('endcidade', trans('global.users.fields.endcidade').'', ['class' => 'control-label']) !!}
                    {!! Form::text('endcidade', old('endcidade'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endcidade'))
                        <p class="help-block">
                            {{ $errors->first('endcidade') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('enduf', trans('global.users.fields.enduf').'', ['class' => 'control-label']) !!}
                    {!! Form::text('enduf', old('enduf'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('enduf'))
                        <p class="help-block">
                            {{ $errors->first('enduf') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cep', trans('global.users.fields.cep').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cep', old('cep'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cep'))
                        <p class="help-block">
                            {{ $errors->first('cep') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('endrua', trans('global.users.fields.endrua').'', ['class' => 'control-label']) !!}
                    {!! Form::text('endrua', old('endrua'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endrua'))
                        <p class="help-block">
                            {{ $errors->first('endrua') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('endnumero', trans('global.users.fields.endnumero').'', ['class' => 'control-label']) !!}
                    {!! Form::text('endnumero', old('endnumero'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endnumero'))
                        <p class="help-block">
                            {{ $errors->first('endnumero') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('endcomplemento', trans('global.users.fields.endcomplemento').'', ['class' => 'control-label']) !!}
                    {!! Form::text('endcomplemento', old('endcomplemento'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endcomplemento'))
                        <p class="help-block">
                            {{ $errors->first('endcomplemento') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('celular', trans('global.users.fields.celular').'', ['class' => 'control-label']) !!}
                    {!! Form::text('celular', old('celular'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('celular'))
                        <p class="help-block">
                            {{ $errors->first('celular') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('celular2', trans('global.users.fields.celular2').'', ['class' => 'control-label']) !!}
                    {!! Form::text('celular2', old('celular2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('celular2'))
                        <p class="help-block">
                            {{ $errors->first('celular2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('telefone1', trans('global.users.fields.telefone1').'', ['class' => 'control-label']) !!}
                    {!! Form::text('telefone1', old('telefone1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('telefone1'))
                        <p class="help-block">
                            {{ $errors->first('telefone1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('telefone2', trans('global.users.fields.telefone2').'', ['class' => 'control-label']) !!}
                    {!! Form::text('telefone2', old('telefone2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('telefone2'))
                        <p class="help-block">
                            {{ $errors->first('telefone2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('apresentacao', trans('global.users.fields.apresentacao').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('apresentacao', old('apresentacao'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('apresentacao'))
                        <p class="help-block">
                            {{ $errors->first('apresentacao') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
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