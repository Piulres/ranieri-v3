@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.produtoras.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.endcidade')</th>
                            <td field-key='endcidade'>{{ $user->endcidade }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.enduf')</th>
                            <td field-key='enduf'>{{ $user->enduf }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.cep')</th>
                            <td field-key='cep'>{{ $user->cep }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.endrua')</th>
                            <td field-key='endrua'>{{ $user->endrua }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.endnumero')</th>
                            <td field-key='endnumero'>{{ $user->endnumero }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.endcomplemento')</th>
                            <td field-key='endcomplemento'>{{ $user->endcomplemento }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.celular')</th>
                            <td field-key='celular'>{{ $user->celular }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.celular2')</th>
                            <td field-key='celular2'>{{ $user->celular2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.telefone1')</th>
                            <td field-key='telefone1'>{{ $user->telefone1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.telefone2')</th>
                            <td field-key='telefone2'>{{ $user->telefone2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.apresentacao')</th>
                            <td field-key='apresentacao'>{!! $user->apresentacao !!}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->


            <p>&nbsp;</p>

            <a href="{{ route('admin.produtoras.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
