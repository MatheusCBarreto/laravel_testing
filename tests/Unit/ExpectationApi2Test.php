<?php

describe('Test Expectation modifiers and chaning', function () {
    it('tests the and() modifier', function () {
        $name = "Matheus";
        $surname = "Carvalho";

        expect($name)->toBe("Matheus")->and($surname)->toBe("Carvalho");
    });

    it('tests if value is one or another', function () {
        $value = 10;

        // valida se $value = 10 ou 20
        expect($value)->toBeIn([10, 20]);
    });

    it('tests the not() modifier', function () {
        $value = 20;

        // valida se o value é != de 10
        expect($value)->not()->toBe(10);
    });

    it('tests the sequence() modifier', function () {
        $values = [1, 2, 3, 4, 5];

        // valida se a sequencia é de fato o conjunto de 1, 2, 3, 4, 5
        expect($values)->sequence(
            fn($value) => $value->toBeInt()->toBe(1),
            fn($value) => $value->toBeInt()->toBe(2),
            fn($value) => $value->toBeInt()->toBe(3),
            fn($value) => $value->toBeInt()->toBe(4),
            fn($value) => $value->toBeInt()->toBe(5)
        );
    });
});
