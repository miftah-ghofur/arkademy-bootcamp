<?php 
function is_username_valid($username){
    if (preg_match('/{5,9}(?=^[A-Za-z])(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W])$/', $username))
        return true;
    else
        return false;
}
 
 
function is_password_valid($pwd){
    if (preg_match("#.*^(?=.{8,}(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*W).*$#", $pwd))
        return true;
    else
        return false;
}
 ?>