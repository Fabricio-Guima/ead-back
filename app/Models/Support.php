<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['status','description'];

    //enum = vou retornar a letra e um label (texto ae)
    public $statusOptions = [
        'P' => 'Pendente, aguardando o professor',
        'A' => 'Pendente, aguardando o aluno',
        'C' => 'Finalizado',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
