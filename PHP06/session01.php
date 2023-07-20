<?php

// セッションを利用します
session_start();

$name = 'ふくしま';
$age = '12';
echo $name . $age;

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;