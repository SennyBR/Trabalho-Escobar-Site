<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Veiculo;
class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::where('user_id', Auth::id())->orderBy('created_at','desc')->paginate(10);
        return view('admin.index', compact('veiculos'));
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $req)
    {
        $data = $req->validate([
            'nome_veiculo'=>'required|string|max:255',
            'marca'=>'required|string|max:100',
            'modelo'=>'required|string|max:100',
            'cor'=>'required|string|max:100',
            'ano'=>'required|digits:4|integer',
            'quilometragem'=>'required|integer',
            'valor'=>'required|numeric',
            'foto1'=>'required|url',
            'foto2'=>'required|url',
            'foto3'=>'required|url',
            'descricao'=>'nullable|string',
            'contato'=>'nullable|string',
            'proprietario'=>'nullable|string',
        ]);
        $data['user_id'] = Auth::id();
        Veiculo::create($data);
        return redirect()->route('admin.veiculos.index')->with('success','Veículo criado');
    }
    public function edit($id)
    {
        $veiculo = Veiculo::where('id',$id)->where('user_id', Auth::id())->firstOrFail();
        return view('admin.edit', compact('veiculo'));
    }
    public function update(Request $req, $id)
    {
        $veiculo = Veiculo::where('id',$id)->where('user_id', Auth::id())->firstOrFail();
        $data = $req->validate([
            'nome_veiculo'=>'required|string|max:255',
            'marca'=>'required|string|max:100',
            'modelo'=>'required|string|max:100',
            'cor'=>'required|string|max:100',
            'ano'=>'required|digits:4|integer',
            'quilometragem'=>'required|integer',
            'valor'=>'required|numeric',
            'foto1'=>'required|url',
            'foto2'=>'required|url',
            'foto3'=>'required|url',
            'descricao'=>'nullable|string',
            'contato'=>'nullable|string',
            'proprietario'=>'nullable|string',
        ]);
        $veiculo->update($data);
        return redirect()->route('admin.veiculos.index')->with('success','Veículo atualizado');
    }
    public function destroy($id)
    {
        $veiculo = Veiculo::where('id',$id)->where('user_id', Auth::id())->firstOrFail();
        $veiculo->delete();
        return redirect()->route('admin.veiculos.index')->with('success','Veículo excluído');
    }
}
