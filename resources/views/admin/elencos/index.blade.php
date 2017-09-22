@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.elenco.title')</h3>
    @can('elenco_create')
    <p>
        <a href="{{ route('admin.elencos.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }} @can('elenco_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('elenco_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('global.users.fields.fotoprincipal')</th>
                        <th>@lang('global.users.fields.nomeartistico')</th>
                        <th>@lang('global.users.fields.email')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                @can('elenco_delete')
                                    <td></td>
                                @endcan

                                <td field-key='fotoprincipal'>@if($user->fotoprincipal)<a href="{{ asset(env('UPLOAD_PATH').'/' . $user->fotoprincipal) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $user->fotoprincipal) }}"/></a>@endif</td>
                                <td field-key='nomeartistico'>{{ $user->nomeartistico }}</td>
                                <td field-key='email'>{{ $user->email }}</td>
                                                                <td>
                                    @can('elenco_view')
                                    <a href="{{ route('admin.elencos.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('elenco_edit')
                                    <a href="{{ route('admin.elencos.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('elenco_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.elencos.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="53">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('elenco_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.elencos.mass_destroy') }}';
        @endcan

    </script>
@endsection