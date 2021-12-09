<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Asignada extends Model
{
    protected $fillable = ['name_std', 'user_id', 'becario_id', 'tareas_id', 'estatus', 'token_asignada','token_returned'];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function asignada()
    {
        return $this->belongsTo(Asignada::class, 'id');
    }

    public function becario()
    {
        return $this->belongsTo(Becario::class, 'becario_id');
    }

    public function tarea()
    {
        return $this->belongsTo(Tarea::class, 'tareas_id');
    }

    public function setDateAsignadaAttribute($value)
    {
        $this->attributes['token_asignada'] = $this->convertStringToDate($value);
    }

    public function getDateOfAsignadaAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function setDateReturnedAttribute($value)
    {
        $this->attributes['token_returned'] = $this->convertStringToDate($value);
    }

    public function getDateOfReturnedAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    private function convertStringToDate(?string $param)
    {
        if(empty($param)){
            return null;
        }

        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');
    }
}
