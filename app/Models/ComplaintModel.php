<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ComplaintModel extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'complaints';


    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'text',
        'client_id',
        'in_work'
    ];


    public function getClient()
    {
        return $this->belongsToMany(ClientModel::class);
    }
}
