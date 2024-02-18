<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public $timestamps= false;
    protected $table= 'permissions';
    protected $primaryKey = 'id';

    protected $fillable=['name','guard_name','created_at','updated_at'];

}
