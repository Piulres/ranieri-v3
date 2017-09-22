<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Produtora
 *
 * @package App
 * @property string $nome
*/
class Produtora extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome'];
    
    
}
