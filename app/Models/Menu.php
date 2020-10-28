<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use DB;

class Menu extends Model
{
  protected $connection = 'mysql';
  protected $table = 'cmsmenu';

  public function getMenu()
  {
    return $this->belongsTo(self::class, 'idparent', 'noid');
  }

  public function getSubmenu()
  {
    return $this->hasMany(self::class,'idparent', 'noid');
  }

}


