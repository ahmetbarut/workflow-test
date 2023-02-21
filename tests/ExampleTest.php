<?php

test('example', function () {
    expect(true)->toBeTrue();
});


test('example 2', function () {
    expect(false)->toBeTrue();
});


test('example 3', function () {
    expect([1, 2, 3])->toBeBool();
});

