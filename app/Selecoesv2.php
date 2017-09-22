<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Selecoesv2
 *
 * @package App
 * @property string $selecaonome
 * @property string $datafimselecao
 * @property string $descricao
 * @property string $produtoraelenco
*/
class Selecoesv2 extends Model
{
    use SoftDeletes;

    protected $fillable = ['selecaonome', 'datafimselecao', 'descricao', 'produtoraelenco_id'];
    

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDatafimselecaoAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['datafimselecao'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['datafimselecao'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDatafimselecaoAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setProdutoraelencoIdAttribute($input)
    {
        $this->attributes['produtoraelenco_id'] = $input ? $input : null;
    }
    
    public function produtoraelenco()
    {
        return $this->belongsTo(User::class, 'produtoraelenco_id');
    }
    
}
