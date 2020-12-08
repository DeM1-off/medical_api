<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{

    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'clients';


    /**
     * @var string[]
     */
    protected $fillable = ['name', 'address'];

    public function getComplaint()
    {
        return $this->belongsToMany(ComplaintModel::class);
    }

}
