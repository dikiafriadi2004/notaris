<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_akta',
        'date_report',
        'doc_report',
        'doc_findings',
        'notaris_ppat_id'
    ];

    public function notarisppat()
    {
        return $this->belongsTo(NotarisPpat::class);
    }
}
