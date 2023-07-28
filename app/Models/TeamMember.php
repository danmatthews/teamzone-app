<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class TeamMember extends Model
{
    use \Orbit\Concerns\Orbital;
    use HasFactory;

    protected $fillable = ['name', 'timezone', 'avatar_url'];

    public static function schema(Blueprint $table)
    {
        $table->increments('id');
        $table->string('name');
        $table->string('timezone');
        $table->string('avatar_url')->nullable();
    }
}
