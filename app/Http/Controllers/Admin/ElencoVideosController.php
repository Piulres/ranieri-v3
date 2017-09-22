<?php

namespace App\Http\Controllers\Admin;

use App\ElencoVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreElencoVideosRequest;
use App\Http\Requests\Admin\UpdateElencoVideosRequest;
use Yajra\DataTables\DataTables;

class ElencoVideosController extends Controller
{
    /**
     * Display a listing of ElencoVideo.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('elenco_video_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('elenco_video_delete')) {
                return abort(401);
            }
            $elenco_videos = ElencoVideo::onlyTrashed()->get();
        } else {
            $elenco_videos = ElencoVideo::all();
        }

        return view('admin.elenco_videos.index', compact('elenco_videos'));
    }

    /**
     * Show the form for creating new ElencoVideo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('elenco_video_create')) {
            return abort(401);
        }
        
        $elencos = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        return view('admin.elenco_videos.create', compact('elencos'));
    }

    /**
     * Store a newly created ElencoVideo in storage.
     *
     * @param  \App\Http\Requests\StoreElencoVideosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElencoVideosRequest $request)
    {
        if (! Gate::allows('elenco_video_create')) {
            return abort(401);
        }
        $elenco_video = ElencoVideo::create($request->all());



        return redirect()->route('admin.elenco_videos.index');
    }


    /**
     * Show the form for editing ElencoVideo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('elenco_video_edit')) {
            return abort(401);
        }
        
        $elencos = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        $elenco_video = ElencoVideo::findOrFail($id);

        return view('admin.elenco_videos.edit', compact('elenco_video', 'elencos'));
    }

    /**
     * Update ElencoVideo in storage.
     *
     * @param  \App\Http\Requests\UpdateElencoVideosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElencoVideosRequest $request, $id)
    {
        if (! Gate::allows('elenco_video_edit')) {
            return abort(401);
        }
        $elenco_video = ElencoVideo::findOrFail($id);
        $elenco_video->update($request->all());



        return redirect()->route('admin.elenco_videos.index');
    }


    /**
     * Display ElencoVideo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('elenco_video_view')) {
            return abort(401);
        }
        $elenco_video = ElencoVideo::findOrFail($id);

        return view('admin.elenco_videos.show', compact('elenco_video'));
    }


    /**
     * Remove ElencoVideo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('elenco_video_delete')) {
            return abort(401);
        }
        $elenco_video = ElencoVideo::findOrFail($id);
        $elenco_video->delete();

        return redirect()->route('admin.elenco_videos.index');
    }

    /**
     * Delete all selected ElencoVideo at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('elenco_video_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ElencoVideo::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ElencoVideo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('elenco_video_delete')) {
            return abort(401);
        }
        $elenco_video = ElencoVideo::onlyTrashed()->findOrFail($id);
        $elenco_video->restore();

        return redirect()->route('admin.elenco_videos.index');
    }

    /**
     * Permanently delete ElencoVideo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('elenco_video_delete')) {
            return abort(401);
        }
        $elenco_video = ElencoVideo::onlyTrashed()->findOrFail($id);
        $elenco_video->forceDelete();

        return redirect()->route('admin.elenco_videos.index');
    }
}
