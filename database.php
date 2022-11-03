<?php
$pdo = new PDO('mysql:dbname=cars; host=dbFinal', 'student', 'student');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);