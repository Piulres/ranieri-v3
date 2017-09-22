<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Elenco
 *
 * @package App
 * @property string $nome
 * @property string $nomeelenco
*/
class Elenco extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'nomeelenco'];
    
    
}
