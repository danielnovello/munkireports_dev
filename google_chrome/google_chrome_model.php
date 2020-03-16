<?php

use munkireport\models\MRModel as Eloquent;

class google_chrome_model extends Eloquent
{
    protected $table = 'google_chrome';

    protected $fillable = [
      'serial_number',
      'item1',
    ];

    public $timestamps = false;

}
