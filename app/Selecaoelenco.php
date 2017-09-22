<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Selecaoelenco
 *
 * @package App
 * @property string $selecaoelencov2
 * @property string $atorselecao
 * @property string $statusator
 * @property text $observacaoselecao
*/
class Selecaoelenco extends Model
{
    use SoftDeletes;

    protected $fillable = ['statusator', 'observacaoselecao', 'selecaoelencov2_id', 'atorselecao_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setSelecaoelencov2IdAttribute($input)
    {
        $this->attributes['selecaoelencov2_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAtorselecaoIdAttribute($input)
    {
        $this->attributes['atorselecao_id'] = $input ? $input : null;
    }
    
    public function selecaoelencov2()
    {
        return $this->belongsTo(Selecoesv2::class, 'selecaoelencov2_id')->withTrashed();
    }
    
    public function atorselecao()
    {
        return $this->belongsTo(User::class, 'atorselecao_id');
    }
    
}
