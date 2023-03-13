<?php
#Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
function generate_password($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}[];:<>,.?/';
    $password = '';
    
    // generate a random password by selecting random characters from the character set
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    
    return $password;
}

$output_password = generate_password(12);
echo $output_password;
?>
