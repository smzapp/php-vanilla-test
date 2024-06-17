<?php

function validate_email($email)
{
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
    if (!preg_match($pattern, $email)) {
        throw new \Exception('Email Address is invalid');
    }
}
