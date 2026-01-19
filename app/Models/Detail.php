<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
 
    protected $table = 'tb_detail';

    
    protected $fillable = [
        'ukuran',  
        'warna',  
        'kondisi', 
        'harga',   
        'model_id',
    ];

    protected $primaryKey = 'detail_id';
    public $incrementing = true; 
    protected $keyType = 'int'; 

    public function model()
    {
        return $this->belongsTo(ShoesModel::class, 'model_id', 'model_id'); // Relasi dengan tb_model
    }

}
