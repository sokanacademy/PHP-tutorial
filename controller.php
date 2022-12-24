<?php
//This file prepare all the logic and business files

//The path of controllers
const CONTROLLER_PATH = "./controllers/";

//The controlle's extention
const FILE_EXT = ".php";

//The controllers need to help this functions
include_once("./helpers/fileHelper.php");

//The list of controllers
$sections = [
    "mainData",
    "aboutData",
    "educationData",
    "experienceData",
    "skillsData",
    "awardsData",
    "interestsData"
];

//All data wrapped in an array
$wrappedData = array();

foreach($sections as $section){
    $controllerFullPath = CONTROLLER_PATH.$section.FILE_EXT;

    include_once($controllerFullPath);

    $wrappedData = array_merge($wrappedData , $content);
}
?>