<?php

namespace App\Services;

class MainOperations
{

  public static function generateHash($numchars = 32): void
  {
    // gerar uma hash de 32 caracteres - letras e algorismos
    // return bin2hex(random_bytes((int)$numchars / 2));

    //nova implementação
    // return bin2hex(random_bytes($numchars));


  }

  public static function mathOperation($a, $b, $operation): int|float|null
  {
    switch ($operation) {
      case 'add':
        return $a + $b;
        break;
      case 'subtract':
        return $a - $b;
        break;
      case 'multiply';
        return $a * $b;
        break;
      case 'divide':
        return $b !== 0 ? $a / $b : null;
        break;
      default:
        return null;
        break;
    }
  }
}
