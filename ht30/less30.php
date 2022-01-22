<?php
// шифрование

$plaintext='Hello world, it is text for encode';
$algo="aes-192-cfb";
$key='123123';
$ivlen= openssl_cipher_iv_length($algo);
$iv= openssl_random_pseudo_bytes($ivlen);

$ciper_text=openssl_encrypt($plaintext, $algo, $key, $options=0, $iv, $tag);   //зашифрование

$original_text=openssl_decrypt($plaintext, $algo, $key, $options=0, $iv, $tag);  //расшифрование

echo $ciper_text;
echo $original_text;    // почему то зашифровается но обратно не расшировуетя и ошибки нет в терминале. просто нет моего исходного текста.






