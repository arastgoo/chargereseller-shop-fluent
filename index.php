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
    <link type="text/css" rel="stylesheet" href="css/default.min.css?v=1.4">
    <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.min.css">
</head>
<body>
<div class="loading">
    <img src="img/loading.svg" alt="در حال بارگذاری"/>
    <h4 class="text-darkblue">در حال بارگذاری...</h4>
</div>

<div class="background-image-overflow"></div>
<div class="background-image"></div>
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
        <div class="menu">
            <div class="menu-item b-radius-3" data-kind="TopUp">
                <div class="menu-text">
                    <div class="text-darkblue font-2 font-bold">
                        شارژمستقیم
                        <span class="b-radius-3 menu-border"></span>
                    </div>
                </div>
                <div class="menu-footer">
                    <h4 class="text-darkblue flex-self-end menu-detail">
                        اپراتور ایرانسل، همراه اول
                        و رایتل
                    </h4>
                    <i class="text-blue menu-icon fa fa-mobile-alt"></i>
                </div>
            </div>
            <div class="menu-item b-radius-3" data-kind="Pin">
                <div class="menu-text">
                    <div class="text-darkblue font-2 font-bold">
                        کارت شارژ
                        <span class="b-radius-3 menu-border"></span>
                    </div>
                </div>
                <div class="menu-footer">
                    <h4 class="text-darkblue flex-self-end menu-detail">
                        رمز شارژ تمامی اپراتور ها
                    </h4>
                    <i class="text-blue menu-icon fa fa-credit-card"></i>
                </div>
            </div>
            <div class="menu-item b-radius-3" data-kind="InternetPackage">
                <div class="menu-text">
                    <div class="text-darkblue font-2 font-bold">
                        بسته اینترنت
                        <span class="b-radius-3 menu-border"></span>
                    </div>
                </div>
                <div class="menu-footer">
                    <h4 class="text-darkblue flex-self-end menu-detail">
                        روزانه، ساعتی، ماهیانه
                        و...
                    </h4>
                    <i class="text-blue menu-icon fab fa-internet-explorer"></i>
                </div>
            </div>
            <div class="menu-item b-radius-3" data-kind="Bill">
                <div class="menu-text">
                    <div class="text-darkblue font-2 font-bold">
                        پرداخت قبض
                        <span class="b-radius-3 menu-border"></span>
                    </div>
                </div>
                <div class="menu-footer">
                    <h4 class="text-darkblue flex-self-end menu-detail">
                        انواع قبض خدماتی: آب،
                        گاز و ....
                    </h4>
                    <i class="text-blue menu-icon fas fa-receipt"></i>
                </div>
            </div>
            <div class="menu-item b-radius-3" data-kind="Antivirus">
                <div class="menu-text">
                    <div class="text-darkblue font-2 font-bold">
                        آنتی ویروس
                        <span class="b-radius-3 menu-border"></span>
                    </div>
                </div>
                <div class="menu-footer">
                    <h4 class="text-darkblue flex-self-end menu-detail">
                        امنیت دستگاه خود را
                        تضمین کنید.
                    </h4>
                    <i class="text-blue menu-icon fas fa-shield-alt"></i>
                </div>
            </div>
            <div class="menu-item b-radius-3" data-kind="Giftcard">
                <div class="menu-text">
                    <div class="text-darkblue font-2 font-bold">
                        گیفت کارت
                        <span class="b-radius-3 menu-border"></span>
                    </div>
                </div>
                <div class="menu-footer">
                    <h4 class="text-darkblue flex-self-end menu-detail">
                        کارت هدیه انواع سرویس
                        های بازی و موسیقی ....
                    </h4>
                    <i class="text-blue menu-icon fas fa-gamepad"></i>
                </div>
            </div>
        </div>
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
                <img src="./img/chat.png" width="75" alt="پشتیبانی" height="75">
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
        <div class="purchase b-radius-3" data-kind="TopUp">
            <div class="purchase-form">
                <div class="purchase-heading">
                    <button class="btn btn-primary purchase-return-btn b-radius-3 font-2"><i
                                class="fa fa-arrow-right"></i>
                    </button>
                    <h2 class="text-darkblue">شارژ مستقیم</h2>
                </div>
                <div class="purchase-kinds-form">
                    <div class="flex flex-column">
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="09"
                                    type="tel"
                                    data-name="cellphone"
                                    autocomplete="off"
                                    maxlength="11"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شماره موبایل"></label>
                            <span class="operator-img mtn b-radius-1 text-grey"></span>
                            <span class="operator-img mci b-radius-1 text-grey"></span>
                            <span class="operator-img rtl b-radius-1 text-grey"></span>
                        </div>
                        <label class="custom-radio tarabord">
                            <input type="checkbox" class="isTarabord" name="isTarabord">
                            <span class="checkmark"></span>
                            <p class="text-grey font-4 font-medium">ترابرد کردم</p>
                        </label>
                        <div class="operators-container">
                            <label class="custom-radio operator" data-type="mtn">
                                <span class="operator-img mtn b-radius-1 text-grey" style="display: inline;"></span>
                            </label>
                            <label class="custom-radio operator" data-type="mci">
                                <span class="operator-img mci b-radius-1 text-grey" style="display: inline;"></span>
                            </label>
                            <label class="custom-radio operator" data-type="rtl">
                                <span class="operator-img rtl b-radius-1 text-grey" style="display: inline;"></span>
                            </label>
                        </div>
                        <button class="btn btn-transparent dialog-toggle b-radius-1 font-4 text-grey purchase-select"
                                data-dialog="TopUpDialog">
                            <span class="text-grey" data-placeholder-name="topup">انتخاب مبلغ شارژ</span>
                            <i class="fas fa-money-bill-alt  font-2"></i>
                        </button>
                        <div class="custom-input b-radius-1 custom-amount">
                            <input
                                    class="b-radius-1 text-right"
                                    type="number"
                                    autocomplete="off"
                                    min="500"
                                    max="50000"
                                    step="500"
                                    value="500"
                                    data-name="custom-amount"
                                    maxlength="5"
                            />
                            <label class="font-4 font-medium" title="09" data-title="ورود مبلغ (تومان)"></label>
                        </div>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="@"
                                    type="email"
                                    data-name="email"
                                    autocomplete="off"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="@" data-title="ایمیل"></label>
                        </div>
                    </div>
                    <div class="purchase-options mtn">
                        <label class="custom-radio dialog-toggle-item" data-name="Type" data-value="MTN!"
                               data-placeholder-element="">
                            <input type="checkbox" name="radio">
                            <span class="checkmark"></span>
                            <p class="text-grey font-4 font-medium">شارژ شگفت انگیز</p>
                        </label>
                        <label class="custom-radio dialog-toggle-item" data-name="Type" data-value="MTN#"
                               data-placeholder-element="">
                            <input type="checkbox" name="radio">
                            <span class="checkmark"></span>
                            <p class="text-grey font-4 font-medium">قبض(شارژ) دائمی ایرانسل</p>
                        </label>
                        <label class="custom-radio dialog-toggle-item" data-name="Type" data-value="WiMax"
                               data-placeholder-element="">
                            <input type="checkbox" name="radio">
                            <span class="checkmark"></span>
                            <p class="text-grey font-4 font-medium">شارژ وایمکس</p>
                        </label>
                    </div>
                    <div class="purchase-options rtl">
                        <label class="custom-radio dialog-toggle-item" data-name="Type" data-value="RTL!"
                               data-placeholder-element="">
                            <input type="checkbox" name="radio">
                            <span class="checkmark"></span>
                            <p class="text-grey font-4 font-medium">شارژ شور انگیز</p>
                        </label>
                    </div>
                    <label class="custom-radio">
                        <input type="checkbox" class="savemobile" name="radio">
                        <span class="checkmark"></span>
                        <p class="text-grey font-4 font-medium">ذخیره اطلاعات تماس</p>
                    </label>
                    <button class="btn btn-payment font-3 purchase-payment-btn-alt b-radius-1">ثبت خرید</button>
                </div>
            </div>
            <div class="purchase-payment b-radius-3">
                <h3 class="text-grey font-bold">صورتحساب</h3>
                <div class="purchase-payment-product">
                    <div class="text-grey font-medium">
                        <i class="fas fa-shopping-cart font-3 text-orange"></i>
                        محصول:
                    </div>
                    <div class="text-grey text-center purchase-title">-</div>
                </div>
                <div class="purchase-payment-price">
                    <div class="text-grey font-medium">
                        <i class="fas fa-coins font-3 text-orange"></i>
                        مبلغ قابل پرداخت:
                    </div>
                    <div class="text-grey text-center purchase-amount">-</div>
                </div>
                <div class="purchase-payment-gateways">
                </div>
                <button class="btn btn-payment font-3 purchase-payment-btn b-radius-1">پرداخت</button>
            </div>
        </div>
        <div class="purchase b-radius-3" data-kind="Pin">
            <div class="purchase-form">
                <div class="purchase-heading">
                    <button class="btn btn-primary purchase-return-btn b-radius-3 font-2"><i
                                class="fa fa-arrow-right"></i>
                    </button>
                    <h2 class="text-darkblue">کارت شارژ</h2>
                </div>
                <div class="purchase-kinds-form">
                    <div class="flex flex-column">
                        <div class="b-radius-3 operators">
                            <div class="bg-grey b-radius-1 dialog-toggle-item" data-name="Type" data-value="MTN">
                                <i class="operator-img mtn b-radius-1"></i>
                            </div>
                            <div class="bg-grey b-radius-1 dialog-toggle-item" data-name="Type" data-value="MCI">
                                <i class="operator-img mci b-radius-1"></i>
                            </div>
                            <div class="bg-grey b-radius-1 dialog-toggle-item" data-name="Type" data-value="RTL">
                                <i class="operator-img rtl b-radius-1"></i>
                            </div>
                        </div>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="09"
                                    type="tel"
                                    data-name="cellphone"
                                    autocomplete="off"
                                    maxlength="11"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شماره موبایل"></label>
                        </div>
                        <button class="btn btn-transparent dialog-toggle b-radius-1 font-4 text-grey purchase-select"
                                data-dialog="PinDialog" data-required-param="dataType"
                                data-required-param-message="لطفا ابتدا یک اپراتور را انتخاب کنید.">
                            <span class="text-grey" data-placeholder-name="pin">انتخاب مبلغ کارت شارژ</span>
                            <i class="fas fa-money-bill-alt  font-2"></i>
                        </button>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="@"
                                    type="email"
                                    data-name="email"
                                    autocomplete="off"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="@" data-title="ایمیل"></label>
                        </div>
                    </div>
                    <div>
                        <input type="text" class="js-range-slider" name="count" value=""/>
                        <p class="text-grey text-center">انتخاب تعداد</p>
                    </div>
                    <label class="custom-radio savemobile">
                        <input type="checkbox" name="radio">
                        <span class="checkmark"></span>
                        <p class="text-grey font-4 font-medium">ذخیره اطلاعات تماس</p>
                    </label>
                    <button class="btn btn-payment font-3 purchase-payment-btn-alt b-radius-1">ثبت خرید</button>
                </div>
            </div>
            <div class="purchase-payment b-radius-3">
                <h3 class="text-grey font-bold">صورتحساب</h3>
                <div class="purchase-payment-product">
                    <div class="text-grey font-medium">
                        <i class="fas fa-shopping-cart font-3 text-orange"></i>
                        محصول:
                    </div>
                    <div class="text-grey text-center purchase-title">-</div>
                </div>
                <div class="purchase-payment-price">
                    <div class="text-grey font-medium">
                        <i class="fas fa-coins font-3 text-orange"></i>
                        مبلغ قابل پرداخت:
                    </div>
                    <div class="text-grey text-center purchase-amount">-</div>
                </div>
                <div class="purchase-payment-gateways">
                </div>
                <button class="btn btn-payment font-3 purchase-payment-btn b-radius-1">پرداخت</button>
            </div>
        </div>
        <div class="purchase b-radius-3" data-kind="InternetPackage">
            <div class="purchase-form">
                <div class="purchase-heading">
                    <button class="btn btn-primary purchase-return-btn b-radius-3 font-2"><i
                                class="fa fa-arrow-right"></i>
                    </button>
                    <h2 class="text-darkblue">بسته اینترنت</h2>
                </div>
                <div class="purchase-kinds-form">
                    <div class="flex flex-column">
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="09"
                                    type="tel"
                                    data-name="cellphone"
                                    autocomplete="off"
                                    maxlength="11"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شماره موبایل"></label>
                            <span class="operator-img mtn b-radius-1 text-grey"></span>
                            <span class="operator-img mci b-radius-1 text-grey"></span>
                            <span class="operator-img rtl b-radius-1 text-grey"></span></div>
                        <label class="custom-radio tarabord">
                            <input type="checkbox" class="isTarabord" name="isTarabord">
                            <span class="checkmark"></span>
                            <p class="text-grey font-4 font-medium">ترابرد کردم</p>
                        </label>
                        <div class="operators-container">
                            <label class="custom-radio operator" data-type="mtn">
                                <span class="operator-img mtn b-radius-1 text-grey" style="display: inline;"></span>
                            </label>
                            <label class="custom-radio operator" data-type="mci">
                                <span class="operator-img mci b-radius-1 text-grey" style="display: inline;"></span>
                            </label>
                            <label class="custom-radio operator" data-type="rtl">
                                <span class="operator-img rtl b-radius-1 text-grey" style="display: inline;"></span>
                            </label>
                        </div>
                        <button class="btn btn-transparent dialog-toggle b-radius-1 font-4 text-grey purchase-select"
                                data-required-param="dataType"
                                data-required-param-message="برای انتخاب بسته اینترنت ابتدا شماره موبایل را وارد کنید."
                                data-dialog="InternetPackageDialog">
                            <span class="text-grey" data-placeholder-name="internet-package">انتخاب بسته اینترنت</span>
                            <i class="fas fa-money-bill-alt  font-2"></i>
                        </button>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="@"
                                    type="email"
                                    data-name="email"
                                    autocomplete="off"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="@" data-title="ایمیل"></label>
                        </div>
                    </div>
                    <label class="custom-radio savemobile">
                        <input type="checkbox" name="radio">
                        <span class="checkmark"></span>
                        <p class="text-grey font-4 font-medium">ذخیره اطلاعات تماس</p>
                    </label>
                    <button class="btn btn-payment font-3 purchase-payment-btn-alt b-radius-1">ثبت خرید</button>
                </div>

            </div>
            <div class="purchase-payment b-radius-3">
                <h3 class="text-grey font-bold">صورتحساب</h3>
                <div class="purchase-payment-product">
                    <div class="text-grey font-medium">
                        <i class="fas fa-shopping-cart font-3 text-orange"></i>
                        محصول:
                    </div>
                    <div class="text-grey text-center purchase-title">-</div>
                </div>
                <div class="purchase-payment-price">
                    <div class="text-grey font-medium">
                        <i class="fas fa-coins font-3 text-orange"></i>
                        مبلغ قابل پرداخت:
                    </div>
                    <div class="text-grey text-center purchase-amount">-</div>
                </div>
                <div class="purchase-payment-gateways">
                </div>
                <button class="btn btn-payment font-3 purchase-payment-btn b-radius-1">پرداخت</button>
            </div>
        </div>
        <div class="purchase b-radius-3" data-kind="Bill">
            <div class="purchase-form">
                <div class="purchase-heading">
                    <button class="btn btn-primary purchase-return-btn b-radius-3 font-2"><i
                                class="fa fa-arrow-right"></i>
                    </button>
                    <h2 class="text-darkblue">پرداخت قبض</h2>
                </div>
                <div class="purchase-kinds-form">
                    <div class="flex flex-column">
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    type="tel"
                                    data-name="bill-id"
                                    autocomplete="off"
                                    maxlength="13"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شناسه قبض"></label>
                            <label class="text-red error-label"></label>
                        </div>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    type="tel"
                                    data-name="payment-id"
                                    autocomplete="off"
                                    maxlength="13"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شناسه پرداخت"></label>
                            <label class="text-red error-label"></label>
                        </div>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="09"
                                    type="tel"
                                    data-name="cellphone"
                                    autocomplete="off"
                                    maxlength="11"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شماره موبایل"></label>
                        </div>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="@"
                                    type="email"
                                    data-name="email"
                                    autocomplete="off"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="@" data-title="ایمیل"></label>
                        </div>
                    </div>
                    <label class="custom-radio savemobile">
                        <input type="checkbox" name="radio">
                        <span class="checkmark"></span>
                        <p class="text-grey font-4 font-medium">ذخیره اطلاعات تماس</p>
                    </label>
                    <button class="btn btn-payment font-3 purchase-payment-btn-alt b-radius-1">ثبت خرید</button>
                </div>
            </div>
            <div class="purchase-payment b-radius-3">
                <h3 class="text-grey font-bold">صورتحساب</h3>
                <div class="purchase-payment-product">
                    <div class="text-grey font-medium">
                        <i class="fas fa-shopping-cart font-3 text-orange"></i>
                        محصول:
                    </div>
                    <div class="text-center bill-info">
                        <span class="purchase-icon"></span>
                        <span class="purchase-title text-grey">-</span>
                    </div>
                </div>
                <div class="purchase-payment-price">
                    <div class="text-grey font-medium">
                        <i class="fas fa-coins font-3 text-orange"></i>
                        مبلغ قابل پرداخت:
                    </div>
                    <div class="text-grey text-center purchase-amount">-</div>
                </div>
                <div class="purchase-payment-gateways">
                </div>
                <button class="btn btn-payment font-3 purchase-payment-btn b-radius-1">پرداخت</button>
            </div>
        </div>
        <div class="purchase b-radius-3" data-kind="Antivirus">
            <div class="purchase-form">
                <div class="purchase-heading">
                    <button class="btn btn-primary purchase-return-btn b-radius-3 font-2"><i
                                class="fa fa-arrow-right"></i>
                    </button>
                    <h2 class="text-darkblue">آنتی ویروس</h2>
                </div>
                <div class="purchase-kinds-form">
                    <div class="purchase-products b-radius-3 antivirus">
                    </div>
                    <div class="flex flex-column">
                        <button class="btn btn-transparent dialog-toggle b-radius-1 font-4 text-grey purchase-select"
                                data-dialog="AntivirusDialog">
                            <span class="text-grey" data-placeholder-name="antivirus">انتخاب نوع آنتی ویروس</span>
                            <i class="fas fa-money-bill-alt  font-2"></i>
                        </button>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="09"
                                    type="tel"
                                    data-name="cellphone"
                                    autocomplete="off"
                                    maxlength="11"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شماره موبایل"></label>
                        </div>
                        <div class="custom-input b-radius-1 m-0">
                            <input
                                    class="b-radius-1"
                                    placeholder="@"
                                    type="email"
                                    data-name="email"
                                    autocomplete="off"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="@" data-title="ایمیل"></label>
                        </div>
                    </div>
                    <div>
                        <input type="text" class="js-range-slider" name="count" value=""/>
                        <p class="text-grey text-center">انتخاب تعداد</p>
                    </div>
                    <label class="custom-radio savemobile">
                        <input type="checkbox" name="radio">
                        <span class="checkmark"></span>
                        <p class="text-grey font-4 font-medium">ذخیره اطلاعات تماس</p>
                    </label>
                    <button class="btn btn-payment font-3 purchase-payment-btn-alt b-radius-1">ثبت خرید</button>
                </div>
            </div>
            <div class="purchase-payment b-radius-3">
                <h3 class="text-grey font-bold">صورتحساب</h3>
                <div class="purchase-payment-product">
                    <div class="text-grey font-medium">
                        <i class="fas fa-shopping-cart font-3 text-orange"></i>
                        محصول:
                    </div>
                    <div class="text-grey text-center purchase-title">-</div>
                </div>
                <div class="purchase-payment-price">
                    <div class="text-grey font-medium">
                        <i class="fas fa-coins font-3 text-orange"></i>
                        مبلغ قابل پرداخت:
                    </div>
                    <div class="text-grey text-center purchase-amount">-</div>
                </div>
                <div class="purchase-payment-gateways">
                </div>
                <button class="btn btn-payment font-3 purchase-payment-btn b-radius-1">پرداخت</button>
            </div>
        </div>
        <div class="purchase b-radius-3" data-kind="Giftcard">
            <div class="purchase-form">
                <div class="purchase-heading">
                    <button class="btn btn-primary purchase-return-btn b-radius-3 font-2"><i
                                class="fa fa-arrow-right"></i>
                    </button>
                    <h2 class="text-darkblue">گیفت کارت</h2>
                </div>
                <div class="purchase-kinds-form">
                    <div class="purchase-products b-radius-3 giftcard">
                    </div>
                    <div class="flex flex-column">
                        <button class="btn btn-transparent dialog-toggle b-radius-1 font-4 text-grey purchase-select"
                                data-dialog="GiftcardDialog">
                            <span class="text-grey" data-placeholder-name="giftcard">انتخاب نوع گیفت کارت</span>
                            <i class="fas fa-money-bill-alt  font-2"></i>
                        </button>
                        <div class="custom-input b-radius-1">
                            <input
                                    class="b-radius-1"
                                    placeholder="09"
                                    type="tel"
                                    data-name="cellphone"
                                    autocomplete="off"
                                    maxlength="11"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="09" data-title="شماره موبایل"></label>
                        </div>
                        <div class="custom-input b-radius-1 m-0">
                            <input
                                    class="b-radius-1"
                                    placeholder="@"
                                    type="email"
                                    data-name="email"
                                    autocomplete="off"
                                    data-value=""
                            />
                            <label class="font-4 font-medium" title="@" data-title="ایمیل"></label>
                        </div>
                    </div>
                    <div>
                        <input type="text" class="js-range-slider" name="count" value=""/>
                        <p class="text-grey text-center">انتخاب تعداد</p>
                    </div>
                    <label class="custom-radio savemobile">
                        <input type="checkbox" name="radio">
                        <span class="checkmark"></span>
                        <p class="text-grey font-4 font-medium">ذخیره اطلاعات تماس</p>
                    </label>
                    <button class="btn btn-payment font-3 purchase-payment-btn-alt b-radius-1">ثبت خرید</button>
                </div>
            </div>
            <div class="purchase-payment b-radius-3">
                <h3 class="text-grey font-bold">صورتحساب</h3>
                <div class="purchase-payment-product">
                    <div class="text-grey font-medium">
                        <i class="fas fa-shopping-cart font-3 text-orange"></i>
                        محصول:
                    </div>
                    <div class="text-grey text-center purchase-title">-</div>
                </div>
                <div class="purchase-payment-price">
                    <div class="text-grey font-medium">
                        <i class="fas fa-coins font-3 text-orange"></i>
                        مبلغ قابل پرداخت:
                    </div>
                    <div class="text-grey text-center purchase-amount">-</div>
                </div>
                <div class="purchase-payment-gateways">
                </div>
                <button class="btn btn-payment font-3 purchase-payment-btn b-radius-1">پرداخت</button>
            </div>
        </div>
    </div>
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
                <button class="btn btn-white download-application b-radius-1 font-4">
                    <i class="fab text-white font-2 fa-android"></i>
                    همین حالا دانلود کنید...
                </button>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-grey font-4">
            تمامی حقوق مادی و معنوی این وبسایت متعلق به
            <a href="" class="text-grey font-bold"> <?=$config['siteTitle']?> </a>
            می باشد.
        </div>
        <div class="text-grey footer-social font-4">
            ما را در شبکه های اجتماعی دنبال کنید
            <div>
                <a href="<?=$config['social']['telegram']?>"><i class="fab fa-telegram text-grey font-3"></i></a>
                <a href="<?=$config['social']['instagram']?>"><i class="fab fa-instagram text-grey font-3"></i></a>
                <a href="<?=$config['social']['twitter']?>"><i class="fab fa-twitter text-grey font-3"></i></a>
            </div>
        </div>
    </footer>
</div>
<!-- Dialogs !-->
<div class="dialog" id="TopUpDialog">
    <div class="dialog-box b-radius-1 dialog-small">
        <h3 class="text-grey dialog-heading">انتخاب مبلغ شارژ</h3>
        <ul class="dialog-list mb-auto">
            <li class="dialog-toggle-item" data-placeholder-element="topup" data-name="Amount" data-value="1000">1000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="topup" data-name="Amount" data-value="2000">2000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="topup" data-name="Amount" data-value="5000">5000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="topup" data-name="Amount" data-value="10000">10000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="topup" data-name="Amount" data-value="20000">20000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="topup" data-name="Amount"
                data-value="custom-amount">مبلغ دلخواه
            </li>
        </ul>
    </div>
</div>
<div class="dialog" id="PinDialog">
    <div class="dialog-box b-radius-1 dialog-small">
        <h3 class="text-grey dialog-heading ">انتخاب مبلغ کارت شارژ</h3>
        <ul class="dialog-list mb-auto">
            <li class="dialog-toggle-item" data-placeholder-element="pin" data-name="ProductId" data-value="1000">1000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="pin" data-name="ProductId" data-value="2000">2000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="pin" data-name="ProductId" data-value="5000">5000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="pin" data-name="ProductId" data-value="10000">10000
                تومان
            </li>
            <li class="dialog-toggle-item" data-placeholder-element="pin" data-name="ProductId" data-value="20000">20000
                تومان
            </li>
        </ul>
    </div>
</div>
<div class="dialog" id="InternetPackageDialog">
    <div class="dialog-box b-radius-1 dialog-small">
        <h3 class="text-grey dialog-heading">انتخاب بسته</h3>
        <div class="flex mb-auto">
            <div class="custom-input b-radius-1">
                <select class="text-grey b-radius-1 internet-filter" data-filter-type="type">
                </select>
                <label class="font-4 font-medium" title="09" data-title="نوع بسته"></label>
            </div>
            <div class="custom-input b-radius-1">
                <select class="text-grey b-radius-1 internet-filter" data-filter-type="duration">
                </select>
                <label class="font-4 font-medium" title="09" data-title="مدت زمان"></label>
            </div>
        </div>
        <ul class="dialog-list mb-auto internet-package">
        </ul>
    </div>
</div>
<div class="dialog" id="AntivirusDialog">
    <div class="dialog-box b-radius-1 dialog-small">
        <h3 class="text-grey dialog-heading">انتخاب آنتی ویروس</h3>
        <ul class="antivirus dialog-list mb-auto">
        </ul>
    </div>
</div>
<div class="dialog giftcard" id="GiftcardDialog">
    <div class="dialog-box b-radius-1 dialog-small">
        <h3 class="text-grey dialog-heading">انتخاب گیفت کارت</h3>
        <ul class="giftcard dialog-list mb-auto">
        </ul>
    </div>
</div>
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

<!-- purchase form -->
<form id="myForm" method="post">
    <input type="text" name="data[type]" id="dataType" value="">
    <input type="text" name="data[ChargeKind]" id="dataChargeKind" value=""></input>
    <input type="text" name="data[amount]" id="dataAmount" value="">
    <input type="text" name="data[count]" id="dataCount" value="1">
    <input type="text" name="data[cellphone]" id="dataCellphone" value="">
    <input type="text" name="data[email]" id="dataEmail" value="">
    <input type="text" name="data[packageId]" id="dataPackageId" value="">
    <input type="text" name="data[billId]" id="dataBillId" value="">
    <input type="text" name="data[paymentId]" id="dataPaymentId" value="">
    <input type="text" name="data[productId]" id="dataProductId" value="">
    <input type="text" name="data[webserviceId]" id="dataWebserviceId" value="<?php echo $config['webserviceID']; ?>">
    <input type="text" name="data[redirectUrl]" id="dataRedirectUrl" value="<?php echo $root . '/verify.php'; ?>">
    <input type="text" name="data[issuer]" id="dataIssuer" value="">
    <input type="hidden" name="data[paymentDetails]" value="true">
    <input type="text" name="data[redirectToPage]" value="true">
    <input type="text" name="data[scriptVersion]" value="Script-fluent-1.7">
    <input type="text" name="data[firstOutputType]" value="json">
    <input type="hidden" name="data[isTarabord]" id="dataIsTarabord" >
    <input type="text" name="data[secondOutputType]" value="get">
</form>

<!-- Not Available Category -->
<div class="not-available-product">
    <img src="img/no-result.png"  alt="موجود نمی باشد." width="75" height="75">
    <h3 class="text-grey"> محصولی موجود نمی باشد!</h3>
    <p class="text-grey">در حال حاضر در این دسته محصولی موجود نمی باشد. لطفا بعدا مراجعه فرمایید.</p>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/script.min.js?v=1.8"></script>
</body>
</html>