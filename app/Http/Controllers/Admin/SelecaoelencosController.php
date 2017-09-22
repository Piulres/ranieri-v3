<?php

namespace App\Http\Controllers\Admin;

use App\Selecaoelenco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSelecaoelencosRequest;
use App\Http\Requests\Admin\UpdateSelecaoelencosRequest;
use Yajra\DataTables\DataTables;

class SelecaoelencosController extends Controller
{
    /**
     * Display a listing of Selecaoelenco.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('selecaoelenco_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('selecaoelenco_delete')) {
                return abort(401);
            }
            $selecaoelencos = Selecaoelenco::onlyTrashed()->get();
        } else {
            $selecaoelencos = Selecaoelenco::all();
        }

        return view('admin.selecaoelencos.index', compact('selecaoelencos'));
    }

    /**
     * Show the form for creating new Selecaoelenco.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('selecaoelenco_create')) {
            return abort(401);
        }
        
        $selecaoelencov2s = \App\Selecoesv2::get()->pluck('selecaonome', 'id')->prepend(trans('global.app_please_select'), '');
        $atorselecaos = \App\User::whereHas(
            'role', function($q){
                $q->where('role_id', '4'); //##ELENCO
            }
        )->get()->pluck('nomeartistico', 'id')->prepend(trans('global.app_please_select'), '');

        //@@TAUA@@

        return view('admin.selecaoelencos.create', compact('selecaoelencov2s', 'atorselecaos'));
    }

    /**
     * Store a newly created Selecaoelenco in storage.
     *
     * @param  \App\Http\Requests\StoreSelecaoelencosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSelecaoelencosRequest $request)
    {
        if (! Gate::allows('selecaoelenco_create')) {
            return abort(401);
        }
        $selecaoelenco = Selecaoelenco::create($request->all());



        return redirect()->route('admin.selecaoelencos.index');
    }


    /**
     * Show the form for editing Selecaoelenco.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('selecaoelenco_edit')) {
            return abort(401);
        }
        
        $selecaoelencov2s = \App\Selecoesv2::get()->pluck('selecaonome', 'id')->prepend(trans('global.app_please_select'), '');
        $atorselecaos = \App\User::get()->pluck('nomeartistico', 'id')->prepend(trans('global.app_please_select'), '');

        $selecaoelenco = Selecaoelenco::findOrFail($id);

        return view('admin.selecaoelencos.edit', compact('selecaoelenco', 'selecaoelencov2s', 'atorselecaos'));
    }

    /**
     * Update Selecaoelenco in storage.
     *
     * @param  \App\Http\Requests\UpdateSelecaoelencosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSelecaoelencosRequest $request, $id)
    {
        if (! Gate::allows('selecaoelenco_edit')) {
            return abort(401);
        }
        $selecaoelenco = Selecaoelenco::findOrFail($id);
        $selecaoelenco->update($request->all());



        return redirect()->route('admin.selecaoelencos.index');
    }


    /**
     * Display Selecaoelenco.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('selecaoelenco_view')) {
            return abort(401);
        }
        $selecaoelenco = Selecaoelenco::findOrFail($id);

        return view('admin.selecaoelencos.show', compact('selecaoelenco'));
    }


    /**
     * Remove Selecaoelenco from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('selecaoelenco_delete')) {
            return abort(401);
        }
        $selecaoelenco = Selecaoelenco::findOrFail($id);
        $selecaoelenco->delete();

        return redirect()->route('admin.selecaoelencos.index');
    }

    /**
     * Delete all selected Selecaoelenco at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('selecaoelenco_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Selecaoelenco::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Selecaoelenco from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('selecaoelenco_delete')) {
            return abort(401);
        }
        $selecaoelenco = Selecaoelenco::onlyTrashed()->findOrFail($id);
        $selecaoelenco->restore();

        return redirect()->route('admin.selecaoelencos.index');
    }

    /**
     * Permanently delete Selecaoelenco from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('selecaoelenco_delete')) {
            return abort(401);
        }
        $selecaoelenco = Selecaoelenco::onlyTrashed()->findOrFail($id);
        $selecaoelenco->forceDelete();

        return redirect()->route('admin.selecaoelencos.index');
    }
}
