<?php

namespace App\Models;

class Plants {
  public static function all() {
    return [
      [
        'id' => 1,
        'common-name' => 'Fichte',
        'latin-name' => 'Picea Abies',
        'description' => 'Lorem  Ipsum'
      ],
      [
        'id' => 2,
        'common-name' => 'Wermut',
        'latin-name' => 'Artemisia absinthium',
        'description' => 'Lorem  Ipsum'
      ]
    ];
  }

  public static function find($id) {
    $plants = self::all();
    
    foreach ($plants as $plant) {
      if($plant['id'] == $id) {
        return $plant;
      }
    }
  }
}

