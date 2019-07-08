<?php
/**
 * Created by PhpStorm.
 * User: Jin
 * Date: 2019-07-08
 * Time: 오전 11:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'CASE_TB';
    protected $primaryKey = 'ca_idx';
    public $timestamps = false;

    protected $fillable = [
        'ca_title',
        'u_idx'
    ];
}