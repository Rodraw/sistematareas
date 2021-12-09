<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Becario extends Model
{
    protected $fillable =[
        'name',
        'correo',
        'contraseña',
        'telefono',
    ];
    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $this->convertStringToDate($value);
    }

 
    public function setCorreoAttribute($value)
    {
        $this->attributes['correo'] = $this->clearField($value);
    }


    public function setContraseñaAttribute($value)
    {
        $this->attributes['contraseña'] = $this->clearField($value);
    }

    public function setTelefonoAttribute($value)
    {
        $this->attributes['telefono'] = $this->clearField($value);
    }

    private function convertStringToDate(?string $param)
    {
        if(empty($param)){
            return null;
        }

        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');
    }

    private function clearField(?string $param)
    {
        if(empty($param)){
            return '';
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
