<?php
const DATA_PATH = "./data/";

function readDataAsArray(string $fileName):array{
    $fullPath = DATA_PATH.$fileName;
    return json_decode(file_get_contents($fullPath) , true);
}
?>