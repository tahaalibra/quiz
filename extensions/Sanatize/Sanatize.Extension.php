<?php

class Sanatize
{
    public static function string($string)
    {
        trim($string);
        filter_var($string, FILTER_SANITIZE_STRING);
        return $string; 
    }
    
    public static function url($url)
    {
        trim($url);
        filter_var($url, FILTER_SANITIZE_URL);
        return $url; 
    }
    
    public static function url($email)
    {
        trim($email);
        filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email; 
    }
    
    public static function getpost($_POST)
    {
    $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        return $_POST;
    }
    
    
}