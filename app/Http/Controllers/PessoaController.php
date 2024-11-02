
<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return response()->json($pessoas);
    }

    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return response()->json($pessoa);
    }

    public function store(Request $request)
    {
        $pessoa = Pessoa::create($request->all());
        return response()->json($pessoa, 201);
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());
        return response()->json($pessoa);
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return response()->json(null, 204);
    }
}
