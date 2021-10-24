<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $config['title']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="<?php echo $config['description']; ?>"/>
    <meta name="keywords" content="<?php echo $config['keywords']; ?>"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <link type="image/x-icon" rel="icon" href="css/favicon.ico"/>
    <link type="text/css" rel="stylesheet" href="css/default.min.css?v=1.2">
    <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.min.css">
</head>
<body>
<div class="loading">
    <img src="img/loading.svg" alt="در حال بارگذاری"/>
    <h4 class="text-darkblue">در حال بارگذاری...</h4>
</div>
<div class="background-image"></div>
<div class="background-image-overflow"></div>
<div class="container">
    <header>
        <div class="header-title">
            <h1><?=$config['siteTitle']?></h1>
            <h2>فروشگاه شارژ و خدمات برخط</h2>
        </div>
        <div class="header-contact">
            <div class="">
                <button class="btn btn-white b-radius-3 font-4 font-medium dialog-toggle" data-dialog="SupportDialog">
                    <i class="fa fa-phone fa-flip-horizontal"></i>
                    پشتیبانی
                </button>
                <button class="btn btn-white b-radius-3 font-4 font-medium dialog-toggle" data-dialog="GuideDialog">
                    <i class="fa fa-question"></i>
                    راهنما
                </button>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="responsive-menu b-radius-3">
            <li class="font-2 active responsive-menu-sections-toggle" data-target="home"><i class="fa fa-home"></i></li>
            <li class="font-2  responsive-menu-sections-toggle" data-target="guide"><i class="fa fa-question"></i></li>
            <li class="font-2  responsive-menu-sections-toggle" data-target="support"><i class="fa fa-phone"></i></li>
            <li class="font-2  responsive-menu-sections-toggle" data-target="android"><i class="fab fa-android"></i>
            </li>
        </div>
        <div class="responsive-menu-sections">
            <div data-section="guide" class="text-grey flex-self-start">
                <h2 class="text-grey">
                    راهنمای خرید از <?=$config['siteTitle']?>
                </h2>
                <ul class="guide-menu">
                    <button class="btn  b-radius-1 active" data-target="topup">
                        <i class="fa fa-phone font-2"></i>
                        شارژ مستقیم
                    </button>
                    <button class="btn  b-radius-1" data-target="pin">
                        <i class="fa fa-credit-card font-2"></i>
                        کارت شارژ
                    </button>
                    <button class="btn  b-radius-1" data-target="internetpackage">
                        <i class="fab fa-internet-explorer font-2"></i>
                        بسته اینترنت
                    </button>
                    <button class="btn  b-radius-1" data-target="bill">
                        <i class="fa fa-receipt font-2"></i>
                        پرداخت قبض
                    </button>
                    <button class="btn  b-radius-1" data-target="antivirus">
                        <i class="fa fa-shield-alt font-2"></i>
                        آنتی ویروس
                    </button>
                    <button class="btn  b-radius-1" data-target="giftcard">
                        <i class="fa fa-gamepad font-2"></i>
                        گیفت کارت
                    </button>
                </ul>
                <section class="guide-content active" data-kind="topup">
                    <p class="text-grey">
                        در این روش، پس از خرید، گوشی شما به صورت مستقیم شارژ می شود و نیاز به ورود رمز شارژ نیست.
                        ضمناً شما از این روش می توانید وایمکس ایرانسل را نیز شارژ نمایید.
                    </p>
                    <p class="font-bold">مراحل خرید:</p>
                    <p class="text-grey">1. وارد کردن شماره موبایل</p>
                    <p class="text-grey">2. انتخاب مقدار شارژ مورد نظر</p>
                    <p class="text-grey">3. زدن دکمه پرداخت</p>
                    <p class="text-grey">پس از انجام مراحل بالا، شما وارد درگاه پرداخت اینترنتی می شوید و پس از پرداخت
                        مبلغ شارژ، گوشی شما شارژ خواهد شد.</p>
                </section>
                <section class="guide-content" data-kind="pin">
                    <p class="text-grey">
                        در این روش، پس از خرید، یک کد شارژ (رمز شارژ) در سایت به شما نمایش داده می شود که بعد از وارد
                        کردن این رمز (با توجه به کد دستوری اپراتور سیمکارتتان) در تلفن همراه خود، خط شما شارژ خواهد شد.
                    </p>
                    <p class="font-bold">مراحل خرید:</p>
                    <p class="text-grey">1. وارد کردن شماره موبایل</p>
                    <p class="text-grey">2. انتخاب مقدار شارژ مورد نظر</p>
                    <p class="text-grey">3. زدن دکمه پرداخت</p>
                    <p class="text-grey">پس از انجام مراحل بالا، شما وارد درگاه پرداخت اینترنتی می شوید و پس از پرداخت
                        مبلغ شارژ، یک رمز شارژ در سایت به شما نمایش داده می شود و بعد از وارد کردن رمز، خط شما شارژ
                        خواهد شد. </p>
                    <p class="font-bold">تذکر</p>
                    <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>

                </section>
                <section class="guide-content" data-kind="internetpackage">
                    <p class="text-grey">
                        در این روش پس از تکمیل خرید بسته اینترنت برای شما فعال می شود.
                    </p>
                    <p class="font-bold">مراحل خرید:</p>
                    <p class="text-grey">1. ابتدا شماره موبایل خود را انتخاب نمایید</p>
                    <p class="text-grey">2. بسته مورد نظر خود را انتخاب کنید.</p>
                    <p class="text-grey">3. زدن دکمه پرداخت</p>
                    <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
                </section>
                <section class="guide-content" data-kind="bill">
                    <p class="text-grey">
                        در این روش پس از تکمیل پرداخت قبض شما پرداخت می شود.
                    </p>
                    <p class="font-bold">مراحل پرداخت قبض:</p>
                    <p class="text-grey">1. ابتدا شناسه قبض و  شناسه پرداخت را به منظور تعیین نوع قبض و مبلغ قابل پرداخت وارد کنید.</p>
                    <p class="text-grey">2. به منظور پشتیبانی شماره موبایل خود را وارد کنید.</p>
                    <p class="text-grey">3. زدن دکمه پرداخت</p>
                    <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
                </section>
                <section class="guide-content" data-kind="antivirus">
                    <p class="text-grey">
                        در این روش پس از تکمیل خرید سریال آنتی ویروس از طریق پیامک برای شما ارسال می شود.
                    </p>
                    <p class="font-bold">مراحل خرید:</p>
                    <p class="text-grey">1. ابتدا آنتی ویروس مورد نظر خود را انتخاب نمایید</p>
                    <p class="text-grey">2. شماره موبایل خود را به منظور ارسال سریال آنتی ویروس وارد کنید.</p>
                    <p class="text-grey">3. زدن دکمه پرداخت</p>
                    <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
                </section>
                <section class="guide-content" data-kind="giftcard">
                    <p class="text-grey">
                        در این روش پس از تکمیل خرید سریال گیفت کارت از طریق پیامک برای شما ارسال می شود.
                    </p>
                    <p class="font-bold">مراحل خرید:</p>
                    <p class="text-grey">1. ابتدا گیفت کارت مورد نظر خود را انتخاب نمایید</p>
                    <p class="text-grey">2. شماره موبایل خود را به منظور ارسال سریال گیفت کارت وارد کنید.</p>
                    <p class="text-grey">3. زدن دکمه پرداخت</p>
                    <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
                </section>
            </div>
            <div data-section="support" class="text-grey">
                <img src="./img/chat.png" alt="پشتیبانی" width="75" height="75">
                <h2 class="text-grey">پشتیبانی</h2>
                <h4 class="text-grey text-center">
                    در صورت بروز هرگونه خطای احتمالی در خرید و
                    یا نیاز به راهنمایی، می توانید با واحد پشتیبانی
                    تماس حاصل فرمایید.
                </h4>
                <span class="label b-radius-1 label-md label-grey text-center support-number">88019574 - 021</span>
                <section class="text-grey footer-social font-4">
                    ما را در شبکه های اجتماعی دنبال کنید
                    <section>
                        <a href="<?=$config['social']['telegram']?>"><i class="fab fa-telegram text-grey font-3"></i></a>
                        <a href="<?=$config['social']['instagram']?>"><i class="fab fa-instagram text-grey font-3"></i></a>
                        <a href="<?=$config['social']['twitter']?>"><i class="fab fa-twitter text-grey font-3"></i></a>
                    </section>
                </section>
            </div>
            <div data-section="android" class="text-grey">
                <img src="./img/mobile-app.png" alt="اپلیکیشن" width="75" height="75">
                <h2 class="text-grey">
                    اپلیکیشن اندروید
                    <span class="text-blue"><?=$config['siteTitle']?></span>
                </h2>
                <ul class="text-grey text-center">
                    <li class="text-grey">خرید شارژ و کارت شارژ</li>
                    <li class="text-grey">خرید انواع بسته های اینترنت</li>
                    <li class="text-grey">پرداخت قبض های خدماتی</li>
                    <li class="text-grey">استعلام و پرداخت جریمه</li>
                    <li class="text-grey">پشتیبانی آنلاین</li>
                </ul>
                <button class="btn download-application btn-primary b-radius-3 font-4">
                    همین حالا دانلود کنید
                </button>
            </div>
        </div>
        <div class="purchase-verify b-radius-3">
            <?php
            $result = base64_decode(urldecode(htmlspecialchars($_GET['data'])));
            $result = json_decode($result, true);

            if ($result['status'] == 'Success') {
                ?>
                <div class="purchase-verify-status success">
                    <i class="fa fa-check font-1 text-white"></i>
                </div>
                <div class="purchase-verify-box">
                    <h2 class="text-grey">تراکنش با موفقیت انجام شد.</h2>
                    <div class=" b-radius-1 purchase-verify-info ">
                        <div class="purchase-verify-info-title flex-self-start">
                            <i class="fa fa-dot-circle text-grey"></i>
                            <span class="text-grey">کد پیگیری:</span>
                        </div>
                        <p class="text-grey text-ltr font-4"><?= $result['refId'] ?></p>
                    </div>
                    <div class=" b-radius-1 purchase-verify-info ">
                        <div class="purchase-verify-info-title flex-self-start">
                            <i class="fa fa-dot-circle text-grey"></i>
                            <span class="text-grey">زمان خرید:</span>
                        </div>
                        <p class="text-grey text-ltr font-4"><?= $result['date'] ?></p>
                    </div>
                    <?php
                    $transactionType = explode('-', $result['products']['type']);
                    $transactionType = $transactionType[0];
                    if ($transactionType == 'Bill') {
                        $billTypesPersian = array("آب", "بــرق", "گـــاز", "تلفن ثابت", "تلفن همراه", "عوارض شهرداری","","", "جریمه راهنمایی و رانندگی","بیمه پاسارگاد","سایر");
                        $billTypesEnglish = array("water", "electricity", "gas", "telephone", "cellphone", "mayoralty","","", "police","pasargad","others");
                        $billType = $result['products']['details']['billType'] - 1;
                        if($billType == -1){
                            $billCoNum = substr($result['products']['details']['billId'],strlen($result['products']['details']['billId'])-5,3);
                            if($billCoNum == 102){
                                $billType = 9;
                            }else{
                                $billType = 10;
                            }
                        }
                        ?>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">نوع قبض:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex">
                                <span class="bills <?php echo $billTypesEnglish[$billType]; ?>"></span>
                                <span class="text-grey"><?php echo $billTypesPersian[$billType]; ?></span>
                            </p>
                        </div>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">مبلغ قبض:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['price'] . ' تومان' ?></p>
                        </div>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">شناسه قبض:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['details']['billId'] ?></p>
                        </div>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">شناسه پرداخت:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['details']['paymentId'] ?></p>
                        </div>
                        <?php
                    } else if ($transactionType == 'TopUp') {
                        $operators = array('MCI' => 'همراه اول', 'MTN' => 'ایرانسل', 'RTL' => 'رایتل', 'TAL' => 'تالیا');
                        $operator = explode('-', $result['products']['type']);
                        ?>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">مبلغ شارژ:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['price'] . ' تومان' ?></p>
                        </div>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">اپراتور شارژ:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $operators[$operator[1]] ?></p>
                        </div>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">شماره تلفن همراه:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['details']['cellphone'] ?></p>
                        </div>
                        <?php
                    } else if ($transactionType == 'IN') {
                        ?>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">نام بسته:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['name'] ?></p>
                        </div>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">مبلغ بسته:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['price'] . ' تومان' ?></p>
                        </div>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">شماره تلفن همراه:</span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['details']['cellphone'] ?></p>
                        </div>
                        <?php
                    } else if (in_array($transactionType, array('CC', 'GC', 'AN', 'TC'))) {
                        $pinProductDescription = array(
                            'CC' => 'اکنون با وارد کردن کد شارژ از طریق صفحه کلید گوشی، تلفن همراه خود را شارژ نمایید.',
                            'GC' => 'با استفاده گیفت کارت خریداری شده می توانید از سرویس هایی همچون خرید نرم افزار، بازی، موسیقی، فیلم، کتاب و ... استفاده نمایید.',
                            'TC' => 'رمز مجوز را با اعداد انگلیسی به شماره 20001888 پیامک نمایید. پس از دریافت پیامک اعلام اعتبار می توانید پلاک خودرو خود را مطابق روال پیامک کنید.<br>در صورتی که برای نخستین بار از مجوز روزانه استفاده می کنید با شماره ندای ترافیک 87500-021 تماس بگیرید.',
                            'AN' => 'با وارد کردن رمز آنتی ویروس خود را فعال کنید.<br>جهت راهنمایی بیشتر به منوی «راهنما» مراجعه نمایید.'
                        );
                        $dataKeys = array('Serial' => 'سریال', 'Username' => 'نام کاربری', 'ExpireDate' => 'تاریخ انقضاء');
                        $productCount = count($result['products']['details']);
                        ?>
                        <div class=" b-radius-1 purchase-verify-info ">
                            <div class="purchase-verify-info-title flex-self-start">
                                <i class="fa fa-dot-circle text-grey"></i>
                                <span class="text-grey">محصول: </span>
                            </div>
                            <br>
                            <p class="text-grey font-4 flex"><?= $result['products']['name'] ?></p>
                        </div>
                        <?php if ($productCount > 1) { ?>
                            <div class=" b-radius-1 purchase-verify-info ">
                                <div class="purchase-verify-info-title flex-self-start">
                                    <i class="fa fa-dot-circle text-grey"></i>
                                    <span class="text-grey">تعداد: </span>
                                </div>
                                <br>
                                <p class="text-grey font-4 flex"><?= $result['products']['count'] ?></p>
                            </div>
                            <div class=" b-radius-1 purchase-verify-info ">
                                <div class="purchase-verify-info-title flex-self-start">
                                    <i class="fa fa-dot-circle text-grey"></i>
                                    <span class="text-grey">قیمت واحد: </span>
                                </div>
                                <br>
                                <p class="text-grey font-4 flex"><?= $result['products']['price'] . ' تومان' ?></p>
                            </div>
                            <div class=" b-radius-1 purchase-verify-info ">
                                <div class="purchase-verify-info-title flex-self-start">
                                    <i class="fa fa-dot-circle text-grey"></i>
                                    <span class="text-grey">قیمت کل: </span>
                                </div>
                                <br>
                                <p class="text-grey font-4 flex"><?= ($result['products']['price'] * $productCount) . ' تومان' ?></p>
                            </div>
                            <div class=" b-radius-1 purchase-verify-info ">
                                <div class="purchase-verify-info-title flex-self-start">
                                    <i class="fa fa-dot-circle text-grey"></i>
                                    <span class="text-grey">رمز: </span>
                                </div>
                                <br>
                                <p class="text-grey font-4 flex">پیامک شد.</p>
                            </div>
                        <?php } else { ?>
                            <div class=" b-radius-1 purchase-verify-info ">
                                <div class="purchase-verify-info-title flex-self-start">
                                    <i class="fa fa-dot-circle text-grey"></i>
                                    <span class="text-grey">قیمت: </span>
                                </div>
                                <br>
                                <p class="text-grey font-4 flex"><?= $result['products']['price'] . ' تومان' ?></p>
                            </div>
                            <div class=" b-radius-1 purchase-verify-info ">
                                <div class="purchase-verify-info-title flex-self-start">
                                    <i class="fa fa-dot-circle text-grey"></i>
                                    <span class="text-grey">رمز: </span>
                                </div>
                                <br>
                                <p class="text-grey font-4 flex"><?= $result['products']['details'][0]['pin'] ?></p>
                            </div>
                            <?php if ($transactionType == 'CC') { ?>
                                <div class=" b-radius-1 purchase-verify-info ">
                                    <div class="purchase-verify-info-title flex-self-start">
                                        <i class="fa fa-dot-circle text-grey"></i>
                                        <span class="text-grey">سریال: </span>
                                    </div>
                                    <br>
                                    <p class="text-grey font-4 flex"><?= $result['products']['details'][0]['serial'] ?></p>
                                </div>
                            <?php }
                        } ?>
                        <p class="text-grey"><?= $pinProductDescription[$transactionType] ?></p>
                        <?php
                    }
                    ?>
                    <a class="btn btn-primary b-radius-1" href="<?php echo $root . '/'; ?>">بازگشت به صفحه اصلی</a>
                </div>
            <?php } else { ?>
                <div class="purchase-verify-status error">
                    <i class="fa fa-times font-1 text-white"></i>
                </div>
                <div class="purchase-verify-box">
                    <h2 class="text-grey">تراکنش ناموفق بود.</h2>
                    <div class="flex-self-start">
                        <p class="text-grey font-3">تراکنش تایید نشد.</p>
                        <p class="text-grey font-4">چنانچه وجه از حساب شما کسر شده است، طی 72 ساعت کاری آینده
                            از طرف بانک وجه به حساب شما باز می گردد.
                        </p>
                    </div>
                    <a class="btn btn-primary b-radius-1" href="<?php echo $root . '/'; ?>">بازگشت به صفحه اصلی</a>
                </div>
            <?php } ?>
        </div>
    </div>
    <input class="hidden" id="dataWebserviceId" value="<?php echo $config['webserviceID']; ?>"/>
    <div class="application">
        <div class="application-container b-radius-3">
            <div class="application-details">
                <h2 class="font-medium">
                    اپلیکیشن اندروید
                    <span class="text-blue"><?=$config['siteTitle']?></span>
                </h2>
                <ul class="application-list font-4">
                    <li>خرید شارژ و کارت شارژ</li>
                    <li>خرید انواع بسته های اینترنت</li>
                    <li>پرداخت قبض های خدماتی</li>
                    <li>استعلام و پرداخت جریمه</li>
                    <li>پشتیبانی آنلاین</li>
                </ul>
            </div>
            <div class="application-download">
                <button class="btn btn-white b-radius-1 font-4">
                    <i class="fab text-white font-2 fa-android"></i>
                    همین حالا دانلود کنید...
                </button>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-grey font-4">
            تمامی حقوق مادی و معنوی این وبسایت متعلق به
            <a href="/" class="text-grey font-bold"> <?=$config['siteTitle']?> </a>
            می باشد.
        </div>
        <div class="text-grey footer-social font-4">
            ما را در شبکه های اجتماعی دنبال کنید
            <div>
                <a href="/"><i class="fab fa-telegram text-grey font-3"></i></a>
                <a href="/"><i class="fab fa-instagram text-grey font-3"></i></a>
                <a href="/"><i class="fab fa-twitter text-grey font-3"></i></a>
            </div>
        </div>
    </footer>
</div>
<!-- Dialogs !-->
<div class="dialog" id="SupportDialog">
    <div class="dialog-box b-radius-1 dialog-small">
        <img src="./img/chat.png" alt="پشتیبانی" width="75" height="75">
        <h2 class="text-grey">پشتیبانی</h2>
        <h4 class="text-grey text-center">
            در صورت بروز هرگونه خطای احتمالی در خرید و
            یا نیاز به راهنمایی، می توانید با واحد پشتیبانی
            تماس حاصل فرمایید.
        </h4>
        <span class="label b-radius-1 label-md label-grey text-center support-number">88019574 - 021</span>
    </div>
</div>
<div class="dialog" id="GuideDialog">
    <div class="dialog-box b-radius-1 dialog-large">
        <h2 class="text-grey">
            راهنمای خرید از <?=$config['siteTitle']?>
        </h2>
        <ul class="guide-menu">
            <button class="btn  b-radius-1 active" data-target="topup">
                <i class="fa fa-phone font-2"></i>
                شارژ مستقیم
            </button>
            <button class="btn  b-radius-1" data-target="pin">
                <i class="fa fa-credit-card font-2"></i>
                کارت شارژ
            </button>
            <button class="btn  b-radius-1" data-target="internetpackage">
                <i class="fab fa-internet-explorer font-2"></i>
                بسته اینترنت
            </button>
            <button class="btn  b-radius-1" data-target="bill">
                <i class="fa fa-receipt font-2"></i>
                پرداخت قبض
            </button>
            <button class="btn  b-radius-1" data-target="antivirus">
                <i class="fa fa-shield-alt font-2"></i>
                آنتی ویروس
            </button>
            <button class="btn  b-radius-1" data-target="giftcard">
                <i class="fa fa-gamepad font-2"></i>
                گیفت کارت
            </button>
        </ul>
        <section class="guide-content active" data-kind="topup">
            <p class="text-grey">
                در این روش، پس از خرید، گوشی شما به صورت مستقیم شارژ می شود و نیاز به ورود رمز شارژ نیست.
                ضمناً شما از این روش می توانید وایمکس ایرانسل را نیز شارژ نمایید.
            </p>
            <p class="font-bold">مراحل خرید:</p>
            <p class="text-grey">1. وارد کردن شماره موبایل</p>
            <p class="text-grey">2. انتخاب مقدار شارژ مورد نظر</p>
            <p class="text-grey">3. زدن دکمه پرداخت</p>
            <p class="text-grey">پس از انجام مراحل بالا، شما وارد درگاه پرداخت اینترنتی می شوید و پس از پرداخت مبلغ
                شارژ، گوشی شما شارژ خواهد شد.</p>
        </section>
        <section class="guide-content" data-kind="pin">
            <p class="text-grey">
                در این روش، پس از خرید، یک کد شارژ (رمز شارژ) در سایت به شما نمایش داده می شود که بعد از وارد کردن این
                رمز (با توجه به کد دستوری اپراتور سیمکارتتان) در تلفن همراه خود، خط شما شارژ خواهد شد.
            </p>
            <p class="font-bold">مراحل خرید:</p>
            <p class="text-grey">1. وارد کردن شماره موبایل</p>
            <p class="text-grey">2. انتخاب مقدار شارژ مورد نظر</p>
            <p class="text-grey">3. زدن دکمه پرداخت</p>
            <p class="text-grey">پس از انجام مراحل بالا، شما وارد درگاه پرداخت اینترنتی می شوید و پس از پرداخت مبلغ
                شارژ، یک رمز شارژ در سایت به شما نمایش داده می شود و بعد از وارد کردن رمز، خط شما شارژ خواهد شد.</p>
            <p class="font-bold">تذکر</p>
            <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>

        </section>
        <section class="guide-content" data-kind="internetpackage">
            <p class="text-grey">
                در این روش پس از تکمیل خرید بسته اینترنت برای شما فعال می شود.
            </p>
            <p class="font-bold">مراحل خرید:</p>
            <p class="text-grey">1. ابتدا شماره موبایل خود را انتخاب نمایید</p>
            <p class="text-grey">2. بسته مورد نظر خود را انتخاب کنید.</p>
            <p class="text-grey">3. زدن دکمه پرداخت</p>
            <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
        </section>
        <section class="guide-content" data-kind="bill">
            <p class="text-grey">
                در این روش پس از تکمیل پرداخت قبض شما پرداخت می شود.
            </p>
            <p class="font-bold">مراحل پرداخت قبض:</p>
            <p class="text-grey">1. ابتدا شناسه قبض و  شناسه پرداخت را به منظور تعیین نوع قبض و مبلغ قابل پرداخت وارد کنید.</p>
            <p class="text-grey">2. به منظور پشتیبانی شماره موبایل خود را وارد کنید.</p>
            <p class="text-grey">3. زدن دکمه پرداخت</p>
            <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
        </section>
        <section class="guide-content" data-kind="antivirus">
            <p class="text-grey">
                در این روش پس از تکمیل خرید سریال آنتی ویروس از طریق پیامک برای شما ارسال می شود.
            </p>
            <p class="font-bold">مراحل خرید:</p>
            <p class="text-grey">1. ابتدا آنتی ویروس مورد نظر خود را انتخاب نمایید</p>
            <p class="text-grey">2. شماره موبایل خود را به منظور ارسال سریال آنتی ویروس وارد کنید.</p>
            <p class="text-grey">3. زدن دکمه پرداخت</p>
            <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
        </section>
        <section class="guide-content" data-kind="giftcard">
            <p class="text-grey">
                در این روش پس از تکمیل خرید سریال گیفت کارت از طریق پیامک برای شما ارسال می شود.
            </p>
            <p class="font-bold">مراحل خرید:</p>
            <p class="text-grey">1. ابتدا گیفت کارت مورد نظر خود را انتخاب نمایید</p>
            <p class="text-grey">2. شماره موبایل خود را به منظور ارسال سریال گیفت کارت وارد کنید.</p>
            <p class="text-grey">3. زدن دکمه پرداخت</p>
            <p class="text-grey">در صورت بروز مشکل احتمالی، پشتیبانی آماده ی پاسخگویی به شماست.</p>
        </section>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/script.min.js?v=1.7"></script>
</body>
</html>