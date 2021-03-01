<?php

session_start();

session_destroy();

//redirect('index');
header('Location: ../front/index.php');