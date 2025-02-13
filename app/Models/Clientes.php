<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'cli_name',
        'cli_email',
        'cli_phone',
        'cli_address1',
        'cli_address2',
        'cli_zipcode',
        'cli_city',
        'cli_nif',
        'cli_rfidid'
    ];

    protected $table = 'clients';
}
