<?php

Describe('Test expectation function API', function () {
    it('tests the toBe() function', function () {
        $value = 10;
        // valida se o valor é 10
        expect($value)->toBe(10);

        // valida se o valor é inteiro e é igual a 10
        expect($value)->toBeInt()->toBe(10);
    });

    it('tests the toBeTrue() and toBeFalse() functions', function () {
        $value1 = true;
        $value2 = false;

        // valida se o valor1 é verdadeiro
        expect($value1)->toBeTrue();

        // valida se o valor2 é falso
        expect($value2)->toBeFalse();
    });

    it('tests the toBeNull() function', function () {
        $value = null;

        // valida se o valor é null
        expect($value)->toBeNull();
    });

    it('tests the toBeEmpty() function', function () {
        $value = "";

        // valida se o valor é uma string vazia
        expect($value)->toBeEmpty();
    });

    it('tests the toBeArray() function', function () {
        $value = [1, 2, 3];

        // valida se o valor é um array
        expect($value)->toBeArray();
    });

    it('tests the toBeIn() function', function () {
        $value = 10;
        $array = [10, 20, 30];

        // verifica se o valor da variável $value está presente dentro do array $array
        expect($value)->toBeIn($array);
    });

    it('tests the toBeJson() function', function () {
        $value = '{
            "name": "Matheus"
        }';

        // valida se o valor da variával é um json válido
        expect($value)->toBeJson();
    });

    it('test the toMatch() function', function () {
        $value = "Hello, World";

        // valida se o valor bate certo com uma expressão regular
        expect($value)->toMatch('/Hello/');
    });

    it('tests the toBeUppercase() function', function () {
        $value = 'HELLOWORLD';

        //valida se a string é upper
        expect($value)->toBeUppercase();
    });
});
