<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;  

class ShoesModel extends Model
{
    protected $table = 'tb_model';

    protected $fillable = [
        'nama_model',  
        'brand_id',   
    ];

    protected $primaryKey = 'model_id';


    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'brand_id'); 
    }
}
