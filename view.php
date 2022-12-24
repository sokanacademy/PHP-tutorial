<?php
//This file prepare all the presentation files

//The path of template file
const VIEW_PATH = "./template/";
//The extention of view file
const VIEW_FILE_EXT = ".php";

//The list of template file
$templateList = [
  "header",
  "about",
  "education",
  "experience",
  "skill",
  "interest",
  "award",
  "footer"
];

foreach($templateList as $section){
    $templateFullPath = VIEW_PATH.$section.VIEW_FILE_EXT;

    include_once($templateFullPath);
}

?>