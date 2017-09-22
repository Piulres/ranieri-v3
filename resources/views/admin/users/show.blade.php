@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.users.title')</h3>

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
                            <th>@lang('global.users.fields.role')</th>
                            <td field-key='role'>
                                @foreach ($user->role as $singleRole)
                                    <span class="label label-info label-many">{{ $singleRole->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.nomeartistico')</th>
                            <td field-key='nomeartistico'>{{ $user->nomeartistico }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.datanascimento')</th>
                            <td field-key='datanascimento'>{{ $user->datanascimento }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.sexo')</th>
                            <td field-key='sexo'>{{ $user->sexo }}</td>
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
                            <th>@lang('global.users.fields.facebook')</th>
                            <td field-key='facebook'>{{ $user->facebook }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.instagram')</th>
                            <td field-key='instagram'>{{ $user->instagram }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.fotoprincipal')</th>
                            <td field-key='fotoprincipal'>@if($user->fotoprincipal)<a href="{{ asset(env('UPLOAD_PATH').'/' . $user->fotoprincipal) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $user->fotoprincipal) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.apresentacao')</th>
                            <td field-key='apresentacao'>{!! $user->apresentacao !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.curriculum')</th>
                            <td field-key='curriculum'>@if($user->curriculum)<a href="{{ asset(env('UPLOAD_PATH').'/' . $user->curriculum) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.peso')</th>
                            <td field-key='peso'>{{ $user->peso }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.altura')</th>
                            <td field-key='altura'>{{ $user->altura }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.calcado')</th>
                            <td field-key='calcado'>{{ $user->calcado }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.manequim')</th>
                            <td field-key='manequim'>{{ $user->manequim }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.camisa')</th>
                            <td field-key='camisa'>{{ $user->camisa }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.terno')</th>
                            <td field-key='terno'>{{ $user->terno }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.busto')</th>
                            <td field-key='busto'>{{ $user->busto }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.cintura')</th>
                            <td field-key='cintura'>{{ $user->cintura }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.quadril')</th>
                            <td field-key='quadril'>{{ $user->quadril }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.pele')</th>
                            <td field-key='pele'>{{ $user->pele }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.cabelocor')</th>
                            <td field-key='cabelocor'>{{ $user->cabelocor }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.cabelotipo')</th>
                            <td field-key='cabelotipo'>{{ $user->cabelotipo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.olhos')</th>
                            <td field-key='olhos'>{{ $user->olhos }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.rg')</th>
                            <td field-key='rg'>{{ $user->rg }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.cpf')</th>
                            <td field-key='cpf'>{{ $user->cpf }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.nacionalidade')</th>
                            <td field-key='nacionalidade'>{{ $user->nacionalidade }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.escolaridade')</th>
                            <td field-key='escolaridade'>{{ $user->escolaridade }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.escolacurso')</th>
                            <td field-key='escolacurso'>{{ $user->escolacurso }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.estadocivil')</th>
                            <td field-key='estadocivil'>{{ $user->estadocivil }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.profissao')</th>
                            <td field-key='profissao'>{{ $user->profissao }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.rgufemissor')</th>
                            <td field-key='rgufemissor'>{{ $user->rgufemissor }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.rgorgaoemissor')</th>
                            <td field-key='rgorgaoemissor'>{{ $user->rgorgaoemissor }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.exclusividade')</th>
                            <td field-key='exclusividade'>{{ Form::checkbox("exclusividade", 1, $user->exclusividade == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.orgaoprofissional')</th>
                            <td field-key='orgaoprofissional'>{{ $user->orgaoprofissional }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.registroprofissional')</th>
                            <td field-key='registroprofissional'>{{ $user->registroprofissional }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#elencofotos" aria-controls="elencofotos" role="tab" data-toggle="tab">Elenco Fotos</a></li>
<li role="presentation" class=""><a href="#elencovideos" aria-controls="elencovideos" role="tab" data-toggle="tab">Elenco Videos</a></li>
<li role="presentation" class=""><a href="#selecaoelenco" aria-controls="selecaoelenco" role="tab" data-toggle="tab">Selecao Elenco</a></li>
<li role="presentation" class=""><a href="#selecoesv2" aria-controls="selecoesv2" role="tab" data-toggle="tab">Selecoes</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Gerenciar</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="elencofotos">
<table class="table table-bordered table-striped {{ count($elencofotos) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.elencofotos.fields.elenco')</th>
                        <th>@lang('global.elencofotos.fields.foto')</th>
                        <th>@lang('global.elencofotos.fields.ativo')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($elencofotos) > 0)
            @foreach ($elencofotos as $elencofoto)
                <tr data-entry-id="{{ $elencofoto->id }}">
                    <td field-key='elenco'>{{ $elencofoto->elenco->name or '' }}</td>
                                <td field-key='foto'>@if($elencofoto->foto)<a href="{{ asset(env('UPLOAD_PATH').'/' . $elencofoto->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $elencofoto->foto) }}"/></a>@endif</td>
                                <td field-key='ativo'>{{ Form::checkbox("ativo", 1, $elencofoto->ativo == 1 ? true : false, ["disabled"]) }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.elencofotos.restore', $elencofoto->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.elencofotos.perma_del', $elencofoto->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('elencofoto_view')
                                    <a href="{{ route('admin.elencofotos.show',[$elencofoto->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('elencofoto_edit')
                                    <a href="{{ route('admin.elencofotos.edit',[$elencofoto->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('elencofoto_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.elencofotos.destroy', $elencofoto->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="elencovideos">
<table class="table table-bordered table-striped {{ count($elenco_videos) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.elenco-videos.fields.elenco')</th>
                        <th>@lang('global.elenco-videos.fields.urlvideo')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($elenco_videos) > 0)
            @foreach ($elenco_videos as $elenco_video)
                <tr data-entry-id="{{ $elenco_video->id }}">
                    <td field-key='elenco'>{{ $elenco_video->elenco->name or '' }}</td>
                                <td field-key='urlvideo'>{{ $elenco_video->urlvideo }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.elenco_videos.restore', $elenco_video->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.elenco_videos.perma_del', $elenco_video->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('elenco_video_view')
                                    <a href="{{ route('admin.elenco_videos.show',[$elenco_video->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('elenco_video_edit')
                                    <a href="{{ route('admin.elenco_videos.edit',[$elenco_video->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('elenco_video_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.elenco_videos.destroy', $elenco_video->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="selecaoelenco">
<table class="table table-bordered table-striped {{ count($selecaoelencos) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.selecaoelenco.fields.selecaoelencov2')</th>
                        <th>@lang('global.selecaoelenco.fields.atorselecao')</th>
                        <th>@lang('global.selecaoelenco.fields.statusator')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($selecaoelencos) > 0)
            @foreach ($selecaoelencos as $selecaoelenco)
                <tr data-entry-id="{{ $selecaoelenco->id }}">
                    <td field-key='selecaoelencov2'>{{ $selecaoelenco->selecaoelencov2->selecaonome or '' }}</td>
                                <td field-key='atorselecao'>{{ $selecaoelenco->atorselecao->nomeartistico or '' }}</td>
                                <td field-key='statusator'>{{ $selecaoelenco->statusator }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.selecaoelencos.restore', $selecaoelenco->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.selecaoelencos.perma_del', $selecaoelenco->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('selecaoelenco_view')
                                    <a href="{{ route('admin.selecaoelencos.show',[$selecaoelenco->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('selecaoelenco_edit')
                                    <a href="{{ route('admin.selecaoelencos.edit',[$selecaoelenco->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('selecaoelenco_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.selecaoelencos.destroy', $selecaoelenco->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="selecoesv2">
<table class="table table-bordered table-striped {{ count($selecoesv2s) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.selecoesv2.fields.selecaonome')</th>
                        <th>@lang('global.selecoesv2.fields.datafimselecao')</th>
                        <th>@lang('global.selecoesv2.fields.produtoraelenco')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($selecoesv2s) > 0)
            @foreach ($selecoesv2s as $selecoesv2)
                <tr data-entry-id="{{ $selecoesv2->id }}">
                    <td field-key='selecaonome'>{{ $selecoesv2->selecaonome }}</td>
                                <td field-key='datafimselecao'>{{ $selecoesv2->datafimselecao }}</td>
                                <td field-key='produtoraelenco'>{{ $selecoesv2->produtoraelenco->name or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.selecoesv2s.restore', $selecoesv2->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.selecoesv2s.perma_del', $selecoesv2->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('selecoesv2_view')
                                    <a href="{{ route('admin.selecoesv2s.show',[$selecoesv2->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('selecoesv2_edit')
                                    <a href="{{ route('admin.selecoesv2s.edit',[$selecoesv2->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('selecoesv2_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.selecoesv2s.destroy', $selecoesv2->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped {{ count($tasks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.tasks.fields.name')</th>
                        <th>@lang('global.tasks.fields.description')</th>
                        <th>@lang('global.tasks.fields.status')</th>
                        <th>@lang('global.tasks.fields.tag')</th>
                        <th>@lang('global.tasks.fields.attachment')</th>
                        <th>@lang('global.tasks.fields.due-date')</th>
                        <th>@lang('global.tasks.fields.user')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <tr data-entry-id="{{ $task->id }}">
                    <td field-key='name'>{{ $task->name }}</td>
                                <td field-key='description'>{!! $task->description !!}</td>
                                <td field-key='status'>{{ $task->status->name or '' }}</td>
                                <td field-key='tag'>
                                    @foreach ($task->tag as $singleTag)
                                        <span class="label label-info label-many">{{ $singleTag->name }}</span>
                                    @endforeach
                                </td>
                                <td field-key='attachment'>@if($task->attachment)<a href="{{ asset(env('UPLOAD_PATH').'/' . $task->attachment) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='due_date'>{{ $task->due_date }}</td>
                                <td field-key='user'>{{ $task->user->name or '' }}</td>
                                                                <td>
                                    @can('task_view')
                                    <a href="{{ route('admin.tasks.show',[$task->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('task_edit')
                                    <a href="{{ route('admin.tasks.edit',[$task->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('task_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="12">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
