<?php

test('O meu segundo teste', function () {

    $name = "Matheus";
    expect($name)->toBeString();
});