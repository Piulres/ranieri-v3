<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Elencofoto
 *
 * @package App
 * @property string $elenco
 * @property string $foto
 * @property tinyInteger $ativo
*/
class Elencofoto extends Model
{
    use SoftDeletes;

    protected $fillable = ['foto', 'ativo', 'elenco_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setElencoIdAttribute($input)
    {
        $this->attributes['elenco_id'] = $input ? $input : null;
    }
    
    public function elenco()
    {
        return $this->belongsTo(User::class, 'elenco_id');
    }
    
}
