<?php

use munkireport\models\MRModel as Eloquent;

class NoMAD_model extends Eloquent
{
    protected $table = 'NoMAD';

    protected $fillable = [
      'serial_number',
      'item1',
	    'item2',
	    'item3',
	    'item4',
    ];

    public $timestamps = false;

}
