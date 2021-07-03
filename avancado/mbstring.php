<?php

$string = 'Testes de integração com PHP'; #lembrando que acentos ocupam mais de 1byte

echo mb_strlen($string) . PHP_EOL; #extensão MB ajuda com strings multibyte
echo mb_strtoupper($string) . PHP_EOL;

$converter = mb_convert_encoding($string, to_encoding:ISO-8859-1, from_encoding:UTF-8);
 