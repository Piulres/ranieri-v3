<?php

namespace App\Http\Controllers\Admin;

use App\Selecoesv2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSelecoesv2sRequest;
use App\Http\Requests\Admin\UpdateSelecoesv2sRequest;
use Yajra\DataTables\DataTables;

class Selecoesv2sController extends Controller
{
    /**
     * Display a listing of Selecoesv2.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('selecoesv2_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('selecoesv2_delete')) {
                return abort(401);
            }
            $selecoesv2s = Selecoesv2::onlyTrashed()->get();
        } else {
            $selecoesv2s = Selecoesv2::all();
        }

        return view('admin.selecoesv2s.index', compact('selecoesv2s'));
    }

    /**
     * Show the form for creating new Selecoesv2.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('selecoesv2_create')) {
            return abort(401);
        }
        
        //@@TAUA@@
        $produtoraelencos = \App\User::whereHas(
            'role', function($q){
                $q->where('role_id', '5'); //##PRODUTORA
            }
        )->get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        return view('admin.selecoesv2s.create', compact('produtoraelencos'));
    }

    /**
     * Store a newly created Selecoesv2 in storage.
     *
     * @param  \App\Http\Requests\StoreSelecoesv2sRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSelecoesv2sRequest $request)
    {
        if (! Gate::allows('selecoesv2_create')) {
            return abort(401);
        }
        $selecoesv2 = Selecoesv2::create($request->all());



        return redirect()->route('admin.selecoesv2s.index');
    }


    /**
     * Show the form for editing Selecoesv2.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('selecoesv2_edit')) {
            return abort(401);
        }
        
        $produtoraelencos = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        $selecoesv2 = Selecoesv2::findOrFail($id);

        return view('admin.selecoesv2s.edit', compact('selecoesv2', 'produtoraelencos'));
    }

    /**
     * Update Selecoesv2 in storage.
     *
     * @param  \App\Http\Requests\UpdateSelecoesv2sRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSelecoesv2sRequest $request, $id)
    {
        if (! Gate::allows('selecoesv2_edit')) {
            return abort(401);
        }
        $selecoesv2 = Selecoesv2::findOrFail($id);
        $selecoesv2->update($request->all());



        return redirect()->route('admin.selecoesv2s.index');
    }


    /**
     * Display Selecoesv2.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('selecoesv2_view')) {
            return abort(401);
        }
        
        $produtoraelencos = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');$selecaoelencos = \App\Selecaoelenco::where('selecaoelencov2_id', $id)->get();

        $selecoesv2 = Selecoesv2::findOrFail($id);

        return view('admin.selecoesv2s.show', compact('selecoesv2', 'selecaoelencos'));
    }


    /**
     * Remove Selecoesv2 from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('selecoesv2_delete')) {
            return abort(401);
        }
        $selecoesv2 = Selecoesv2::findOrFail($id);
        $selecoesv2->delete();

        return redirect()->route('admin.selecoesv2s.index');
    }

    /**
     * Delete all selected Selecoesv2 at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('selecoesv2_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Selecoesv2::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Selecoesv2 from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('selecoesv2_delete')) {
            return abort(401);
        }
        $selecoesv2 = Selecoesv2::onlyTrashed()->findOrFail($id);
        $selecoesv2->restore();

        return redirect()->route('admin.selecoesv2s.index');
    }

    /**
     * Permanently delete Selecoesv2 from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('selecoesv2_delete')) {
            return abort(401);
        }
        $selecoesv2 = Selecoesv2::onlyTrashed()->findOrFail($id);
        $selecoesv2->forceDelete();

        return redirect()->route('admin.selecoesv2s.index');
    }
}
