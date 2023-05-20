<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Model;



class ForumPost extends Model
{
 protected $table = 'forum';



 protected $fillable = ['username', 'text', 'date'];




}