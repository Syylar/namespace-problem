<?php

function redirectIfAuthenticated(){
    return User::isAuthenticated();
}

function preventSubmitBeforeTokenValidation(){
    
}

function adminOnly(){
    return !User::hasRoleAdmin();
}
