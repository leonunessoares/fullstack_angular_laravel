<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Pessoa;
Use Log;

class PessoaController extends Controller
{

    public function getAll(){
      $data = Pessoa::get();
      return response()->json($data, 200);
    }

    public function create(Request $request){
      $data['nome'] = $request['nome'];
      Pessoa::create($data);
      return response()->json([
          'message' => "Registro criado!",
          'success' => true
      ], 200);
    }

    public function delete($id){
      $res = Pessoa::find($id)->delete();
      return response()->json([
          'message' => "Registro excluído!",
          'success' => true
      ], 200);
    }

    public function get($id){
      $data = Pessoa::find($id);
      return response()->json($data, 200);
    }

    public function update(Request $request,$id){
      $data['nome'] = $request['nome'];
      Pessoa::find($id)->update($data);
      return response()->json([
          'message' => "Registro atualizado!",
          'success' => true
      ], 200);
    }
}