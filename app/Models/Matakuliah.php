<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matakuliah extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel di database
    protected $table = 'mata_kuliah';

    // Kolom yang tidak boleh diisi massal
    protected $guarded = ['id'];

    // UUID sebagai primary key
    public $incrementing = false;
    protected $keyType = 'string';

    // Kolom tanggal yang akan digunakan untuk soft delete
    protected $dates = ['deleted_at'];

    /**
     * Boot model untuk generate UUID otomatis saat create
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * Ambil semua data mata kuliah yang belum dihapus (soft delete)
     */
    public function getAllMK()
    {
        return $this->whereNull('deleted_at')->get();
    }
}
