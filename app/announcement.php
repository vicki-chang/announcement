<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    protected $table = "announce";
    //::find 預設id會改為尋找此欄位
}
