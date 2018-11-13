<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BookBorrow extends Model {
 
    protected $fillable = [
        'id', 'book_id', 'users_id',
    ];

  
}

?>

           