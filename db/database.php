<?php
require_once __DIR__ . '/../Models/product.php';
require_once __DIR__ . '/../Models/accessory.php';
require_once __DIR__ . '/../Models/food.php';
require_once __DIR__ . '/../Models/toy.php';
require_once __DIR__ . '/../Models/category.php';


$categoryArr = [
    $dogExpire = new Category('dog', true),
    $dogNotExpire = new Category('dog', false),
    $catNotExpire = new Category('cat', false),
    $catExpire = new Category('cat', true),
];


$productArr = [
    $feededDog = new Food(1, 'Happy Dog Food', 'HDF', 12.99, $dogExpire, 10, ['beef', 'chicken'], 'meat'),
    $happyDog = new Toy(1, 'Happy Dog Food', 'HDF', 12.99, $dogNotExpire, 10, 'not so funny', 'big'),
    $happyCat = new Toy(2, 'Happy Cat Toy', 'HCT', 10.99, $catNotExpire, 'very funny', 'medium'),

    $prettyCat = new Accessory(3, 'Fabulous Cat', 'FC', 10.99, $catNotExpire, 'very pretty', 'medium'),

];

$happyDog->toggleAvaiable();
$prettyCat->toggleAvaiable();
