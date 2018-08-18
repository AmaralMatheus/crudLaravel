<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id','created_at', 'update_at'];
    protected $table = 'category';
}