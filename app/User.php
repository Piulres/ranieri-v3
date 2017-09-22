<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use Carbon\Carbon;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $nomeartistico
 * @property string $datanascimento
 * @property string $sexo
 * @property string $endcidade
 * @property string $enduf
 * @property string $cep
 * @property string $endrua
 * @property string $endnumero
 * @property string $endcomplemento
 * @property string $celular
 * @property string $celular2
 * @property string $telefone1
 * @property string $telefone2
 * @property string $facebook
 * @property string $instagram
 * @property string $fotoprincipal
 * @property text $apresentacao
 * @property string $curriculum
 * @property double $peso
 * @property double $altura
 * @property double $calcado
 * @property double $manequim
 * @property double $camisa
 * @property double $terno
 * @property double $busto
 * @property double $cintura
 * @property double $quadril
 * @property string $pele
 * @property string $cabelocor
 * @property string $cabelotipo
 * @property string $olhos
 * @property string $rg
 * @property string $cpf
 * @property string $nacionalidade
 * @property string $escolaridade
 * @property string $escolacurso
 * @property string $estadocivil
 * @property string $profissao
 * @property string $rgufemissor
 * @property string $rgorgaoemissor
 * @property tinyInteger $exclusividade
 * @property string $orgaoprofissional
 * @property string $registroprofissional
*/
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name', 'email', 'password', 'remember_token', 'nomeartistico', 'datanascimento', 'sexo', 'endcidade', 'enduf', 'cep', 'endrua', 'endnumero', 'endcomplemento', 'celular', 'celular2', 'telefone1', 'telefone2', 'facebook', 'instagram', 'fotoprincipal', 'apresentacao', 'curriculum', 'peso', 'altura', 'calcado', 'manequim', 'camisa', 'terno', 'busto', 'cintura', 'quadril', 'pele', 'cabelocor', 'cabelotipo', 'olhos', 'rg', 'cpf', 'nacionalidade', 'escolaridade', 'escolacurso', 'estadocivil', 'profissao', 'rgufemissor', 'rgorgaoemissor', 'exclusividade', 'orgaoprofissional', 'registroprofissional'];
    
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDatanascimentoAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['datanascimento'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['datanascimento'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDatanascimentoAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setPesoAttribute($input)
    {
        if ($input != '') {
            $this->attributes['peso'] = $input;
        } else {
            $this->attributes['peso'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setAlturaAttribute($input)
    {
        if ($input != '') {
            $this->attributes['altura'] = $input;
        } else {
            $this->attributes['altura'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCalcadoAttribute($input)
    {
        if ($input != '') {
            $this->attributes['calcado'] = $input;
        } else {
            $this->attributes['calcado'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setManequimAttribute($input)
    {
        if ($input != '') {
            $this->attributes['manequim'] = $input;
        } else {
            $this->attributes['manequim'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCamisaAttribute($input)
    {
        if ($input != '') {
            $this->attributes['camisa'] = $input;
        } else {
            $this->attributes['camisa'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setTernoAttribute($input)
    {
        if ($input != '') {
            $this->attributes['terno'] = $input;
        } else {
            $this->attributes['terno'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setBustoAttribute($input)
    {
        if ($input != '') {
            $this->attributes['busto'] = $input;
        } else {
            $this->attributes['busto'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCinturaAttribute($input)
    {
        if ($input != '') {
            $this->attributes['cintura'] = $input;
        } else {
            $this->attributes['cintura'] = null;
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setQuadrilAttribute($input)
    {
        if ($input != '') {
            $this->attributes['quadril'] = $input;
        } else {
            $this->attributes['quadril'] = null;
        }
    }
    
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    
    public function topics() {
        return $this->hasMany(MessengerTopic::class, 'receiver_id')->orWhere('sender_id', $this->id);
    }

    public function inbox()
    {
        return $this->hasMany(MessengerTopic::class, 'receiver_id');
    }

    public function outbox()
    {
        return $this->hasMany(MessengerTopic::class, 'sender_id');
    }
    

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }
}
