<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class MinhaselecoesController extends Controller
{
    public function index()
    {
        if (! Gate::allows('minhaseleco_access')) {
            return abort(401);
        }
        return view('admin.minhaselecoes.index');
    }
}
