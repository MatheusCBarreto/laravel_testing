<?php

namespace App\Services;

class MainOperations
{

  public static function generateHash($numchars = 32): string
  {
    // gerar uma hash de 32 caracteres - letras e algorismos
    // return bin2hex(random_bytes((int)$numchars / 2));

    //nova implementação
    return bin2hex(random_bytes($numchars));
  }
}
