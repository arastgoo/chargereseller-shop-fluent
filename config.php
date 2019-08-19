<?php
$config = array(
    'siteTitle' => 'شارژریسلر',
	'title' => 'فروشگاه شارژ و خدمات برخط',
	'description' => 'خرید شارژ تلفن همراه، شارژ مستقیم، کارت شارژ ، شارژ وایمکس ایرانسل، گیفت کارت، آنتی ویروس و پرداخت قبوض',
	'keywords' => 'شارژ آسان تلفن همراه,شارژ موبایل,شارژ مستقیم,شارژ مستقیم,فروش شارژ,شارژ ایرانسل,شارژ همراه اول, رایتل,تالیا,کارت شارژ,شارژ مستقیم,خرید آنتی ویروس,خرید گیفت کارت,گیفت کارت آیتونز,گیفت کارت مایکروسافت,گیفت کارت گوگل پلی,گیفت کارت آمازون,گیفت کارت پلی استیشن,پرداخت قبوض',
	'webserviceID' => 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX',
    'social' => array(
        'twitter' => '',
        'telegram' => '',
        'instagram' => ''
    )
);

$slashPos = strrpos($_SERVER['SCRIPT_NAME'], '/');
$root = 'http://' . $_SERVER['SERVER_NAME'] . substr($_SERVER['SCRIPT_NAME'], 0, $slashPos);