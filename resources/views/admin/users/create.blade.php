@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.users.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
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
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
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
                    {!! Form::select('role[]', $roles, old('role'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
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
                    {!! Form::label('nomeartistico', trans('global.users.fields.nomeartistico').'', ['class' => 'control-label']) !!}
                    {!! Form::text('nomeartistico', old('nomeartistico'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nomeartistico'))
                        <p class="help-block">
                            {{ $errors->first('nomeartistico') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('datanascimento', trans('global.users.fields.datanascimento').'', ['class' => 'control-label']) !!}
                    {!! Form::text('datanascimento', old('datanascimento'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('datanascimento'))
                        <p class="help-block">
                            {{ $errors->first('datanascimento') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sexo', trans('global.users.fields.sexo').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sexo'))
                        <p class="help-block">
                            {{ $errors->first('sexo') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('sexo', 'Feminino', false, []) !!}
                            feminino
                        </label>
                    </div>
                    
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
                    {!! Form::label('facebook', trans('global.users.fields.facebook').'', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook', old('facebook'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook'))
                        <p class="help-block">
                            {{ $errors->first('facebook') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('instagram', trans('global.users.fields.instagram').'', ['class' => 'control-label']) !!}
                    {!! Form::text('instagram', old('instagram'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('instagram'))
                        <p class="help-block">
                            {{ $errors->first('instagram') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('fotoprincipal', trans('global.users.fields.fotoprincipal').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('fotoprincipal', old('fotoprincipal')) !!}
                    {!! Form::file('fotoprincipal', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('fotoprincipal_max_size', 6) !!}
                    {!! Form::hidden('fotoprincipal_max_width', 4096) !!}
                    {!! Form::hidden('fotoprincipal_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('fotoprincipal'))
                        <p class="help-block">
                            {{ $errors->first('fotoprincipal') }}
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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('curriculum', trans('global.users.fields.curriculum').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('curriculum', old('curriculum')) !!}
                    {!! Form::file('curriculum', ['class' => 'form-control']) !!}
                    {!! Form::hidden('curriculum_max_size', 8) !!}
                    <p class="help-block"></p>
                    @if($errors->has('curriculum'))
                        <p class="help-block">
                            {{ $errors->first('curriculum') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('peso', trans('global.users.fields.peso').'', ['class' => 'control-label']) !!}
                    {!! Form::text('peso', old('peso'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('peso'))
                        <p class="help-block">
                            {{ $errors->first('peso') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('altura', trans('global.users.fields.altura').'', ['class' => 'control-label']) !!}
                    {!! Form::text('altura', old('altura'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('altura'))
                        <p class="help-block">
                            {{ $errors->first('altura') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('calcado', trans('global.users.fields.calcado').'', ['class' => 'control-label']) !!}
                    {!! Form::text('calcado', old('calcado'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('calcado'))
                        <p class="help-block">
                            {{ $errors->first('calcado') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('manequim', trans('global.users.fields.manequim').'', ['class' => 'control-label']) !!}
                    {!! Form::text('manequim', old('manequim'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('manequim'))
                        <p class="help-block">
                            {{ $errors->first('manequim') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('camisa', trans('global.users.fields.camisa').'', ['class' => 'control-label']) !!}
                    {!! Form::text('camisa', old('camisa'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('camisa'))
                        <p class="help-block">
                            {{ $errors->first('camisa') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('terno', trans('global.users.fields.terno').'', ['class' => 'control-label']) !!}
                    {!! Form::text('terno', old('terno'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('terno'))
                        <p class="help-block">
                            {{ $errors->first('terno') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('busto', trans('global.users.fields.busto').'', ['class' => 'control-label']) !!}
                    {!! Form::text('busto', old('busto'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('busto'))
                        <p class="help-block">
                            {{ $errors->first('busto') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cintura', trans('global.users.fields.cintura').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cintura', old('cintura'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cintura'))
                        <p class="help-block">
                            {{ $errors->first('cintura') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('quadril', trans('global.users.fields.quadril').'', ['class' => 'control-label']) !!}
                    {!! Form::text('quadril', old('quadril'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quadril'))
                        <p class="help-block">
                            {{ $errors->first('quadril') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pele', trans('global.users.fields.pele').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pele'))
                        <p class="help-block">
                            {{ $errors->first('pele') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('pele', 'Clara', false, []) !!}
                            Clara
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('pele', 'Outra Pele', false, []) !!}
                            Outra Pele
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cabelocor', trans('global.users.fields.cabelocor').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cabelocor'))
                        <p class="help-block">
                            {{ $errors->first('cabelocor') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('cabelocor', 'Escuro', false, []) !!}
                            Escuro
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('cabelocor', 'Outros', false, []) !!}
                            Outros
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cabelotipo', trans('global.users.fields.cabelotipo').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cabelotipo'))
                        <p class="help-block">
                            {{ $errors->first('cabelotipo') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('cabelotipo', 'Liso', false, []) !!}
                            Liso
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('cabelotipo', 'Cacheado', false, []) !!}
                            Cacheado
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('cabelotipo', 'Teste', false, []) !!}
                            Teste
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('olhos', trans('global.users.fields.olhos').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('olhos'))
                        <p class="help-block">
                            {{ $errors->first('olhos') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('olhos', 'Médio', false, []) !!}
                            Medio
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rg', trans('global.users.fields.rg').'', ['class' => 'control-label']) !!}
                    {!! Form::text('rg', old('rg'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rg'))
                        <p class="help-block">
                            {{ $errors->first('rg') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpf', trans('global.users.fields.cpf').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cpf', old('cpf'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpf'))
                        <p class="help-block">
                            {{ $errors->first('cpf') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nacionalidade', trans('global.users.fields.nacionalidade').'', ['class' => 'control-label']) !!}
                    {!! Form::text('nacionalidade', old('nacionalidade'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nacionalidade'))
                        <p class="help-block">
                            {{ $errors->first('nacionalidade') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('escolaridade', trans('global.users.fields.escolaridade').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('escolaridade'))
                        <p class="help-block">
                            {{ $errors->first('escolaridade') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('escolaridade', 'Médio', false, []) !!}
                            Medio
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('escolacurso', trans('global.users.fields.escolacurso').'', ['class' => 'control-label']) !!}
                    {!! Form::text('escolacurso', old('escolacurso'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('escolacurso'))
                        <p class="help-block">
                            {{ $errors->first('escolacurso') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('estadocivil', trans('global.users.fields.estadocivil').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('estadocivil'))
                        <p class="help-block">
                            {{ $errors->first('estadocivil') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('estadocivil', 'Médio', false, []) !!}
                            Medio
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('profissao', trans('global.users.fields.profissao').'', ['class' => 'control-label']) !!}
                    {!! Form::text('profissao', old('profissao'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('profissao'))
                        <p class="help-block">
                            {{ $errors->first('profissao') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rgufemissor', trans('global.users.fields.rgufemissor').'', ['class' => 'control-label']) !!}
                    {!! Form::text('rgufemissor', old('rgufemissor'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rgufemissor'))
                        <p class="help-block">
                            {{ $errors->first('rgufemissor') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rgorgaoemissor', trans('global.users.fields.rgorgaoemissor').'', ['class' => 'control-label']) !!}
                    {!! Form::text('rgorgaoemissor', old('rgorgaoemissor'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rgorgaoemissor'))
                        <p class="help-block">
                            {{ $errors->first('rgorgaoemissor') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('exclusividade', trans('global.users.fields.exclusividade').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('exclusividade', 0) !!}
                    {!! Form::checkbox('exclusividade', 1, false, []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('exclusividade'))
                        <p class="help-block">
                            {{ $errors->first('exclusividade') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('orgaoprofissional', trans('global.users.fields.orgaoprofissional').'', ['class' => 'control-label']) !!}
                    {!! Form::text('orgaoprofissional', old('orgaoprofissional'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('orgaoprofissional'))
                        <p class="help-block">
                            {{ $errors->first('orgaoprofissional') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('registroprofissional', trans('global.users.fields.registroprofissional').'', ['class' => 'control-label']) !!}
                    {!! Form::text('registroprofissional', old('registroprofissional'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('registroprofissional'))
                        <p class="help-block">
                            {{ $errors->first('registroprofissional') }}
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