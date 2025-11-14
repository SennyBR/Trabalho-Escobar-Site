<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Veiculo extends Model
{
    protected $table = 'veiculos';
    protected $fillable = [
        'user_id',
        'nome_veiculo',
        'marca',
        'modelo',
        'cor',
        'ano','quilometragem',
        'valor',
        'descricao',
        'foto1','foto2','foto3',
        'contato',
        'proprietario'
    ];
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
