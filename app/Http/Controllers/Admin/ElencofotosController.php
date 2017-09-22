<?php

namespace App\Http\Controllers\Admin;

use App\Elencofoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreElencofotosRequest;
use App\Http\Requests\Admin\UpdateElencofotosRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class ElencofotosController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Elencofoto.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('elencofoto_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('elencofoto_delete')) {
                return abort(401);
            }
            $elencofotos = Elencofoto::onlyTrashed()->get();
        } else {
            $elencofotos = Elencofoto::all();
        }

        return view('admin.elencofotos.index', compact('elencofotos'));
    }

    /**
     * Show the form for creating new Elencofoto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('elencofoto_create')) {
            return abort(401);
        }
        
        $elencos = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        return view('admin.elencofotos.create', compact('elencos'));
    }

    /**
     * Store a newly created Elencofoto in storage.
     *
     * @param  \App\Http\Requests\StoreElencofotosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElencofotosRequest $request)
    {
        if (! Gate::allows('elencofoto_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $elencofoto = Elencofoto::create($request->all());



        return redirect()->route('admin.elencofotos.index');
    }


    /**
     * Show the form for editing Elencofoto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('elencofoto_edit')) {
            return abort(401);
        }
        
        $elencos = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        $elencofoto = Elencofoto::findOrFail($id);

        return view('admin.elencofotos.edit', compact('elencofoto', 'elencos'));
    }

    /**
     * Update Elencofoto in storage.
     *
     * @param  \App\Http\Requests\UpdateElencofotosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElencofotosRequest $request, $id)
    {
        if (! Gate::allows('elencofoto_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $elencofoto = Elencofoto::findOrFail($id);
        $elencofoto->update($request->all());



        return redirect()->route('admin.elencofotos.index');
    }


    /**
     * Display Elencofoto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('elencofoto_view')) {
            return abort(401);
        }
        $elencofoto = Elencofoto::findOrFail($id);

        return view('admin.elencofotos.show', compact('elencofoto'));
    }


    /**
     * Remove Elencofoto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('elencofoto_delete')) {
            return abort(401);
        }
        $elencofoto = Elencofoto::findOrFail($id);
        $elencofoto->delete();

        return redirect()->route('admin.elencofotos.index');
    }

    /**
     * Delete all selected Elencofoto at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('elencofoto_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Elencofoto::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Elencofoto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('elencofoto_delete')) {
            return abort(401);
        }
        $elencofoto = Elencofoto::onlyTrashed()->findOrFail($id);
        $elencofoto->restore();

        return redirect()->route('admin.elencofotos.index');
    }

    /**
     * Permanently delete Elencofoto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('elencofoto_delete')) {
            return abort(401);
        }
        $elencofoto = Elencofoto::onlyTrashed()->findOrFail($id);
        $elencofoto->forceDelete();

        return redirect()->route('admin.elencofotos.index');
    }
}
