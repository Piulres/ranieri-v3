<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class AprovaçãoDeCadastrosController extends Controller
{
    public function index()
    {
        if (! Gate::allows('aprovação_de_cadastro_access')) {
            return abort(401);
        }
        return view('admin.aprovação_de_cadastros.index');
    }
}
