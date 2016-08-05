<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {

	protected $table = 'funcionarios';

protected $fillable=['cod_user','nombres','apellidos','fecha_nacimiento','ci','telefono','correo','is_active'];

}
