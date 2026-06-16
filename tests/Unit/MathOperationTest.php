<?php

use App\Services\MainOperations;

describe('MainOperations - testar o método mathOperation', function () {

    it('tests the addition operation', function () {
        $a = 5;
        $b = 10;
        $operation = 'add';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(15);
    });

    it('tests the subtraction operation', function () {
        $a = 5;
        $b = 10;
        $operation = 'subtract';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(-5);
    });

    it('tests the multiplication operation', function () {
        $a = 5;
        $b = 10;
        $operation = 'multiply';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(50);
    });

    it('tests the division operation', function () {
        $a = 5;
        $b = 10;
        $operation = 'divide';

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(0.5);
    });
});
