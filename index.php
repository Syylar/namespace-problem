<?php

include './src/vendor/util/utils.php';
include basecontext('src/client/route/paths.php'          );
include basecontext('src/client/components/dropdown.php'  );        
include basecontext('src/client/route/guards.php'         ); 
include basecontext('src/vendor/loader/Loader.php'        );        



spl_autoload_register(function($class) {
    $classPath = str_replace("\\", DIRECTORY_SEPARATOR , $class);
   
    include basecontext($classPath . '.php');
    
});



Loader::loadController();
