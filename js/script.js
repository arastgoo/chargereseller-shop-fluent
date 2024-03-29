$(document).ready(function () {
    var kind;
    var cellphone = '';
    var products;
    var paymentGateways;
    var selectedProduct;
    var saveMobile;
    var sendForm = false;
    var isTarabord = false;
    var downloadURL = "";
    var customAmount = false;
    var simType = '';
    var internetPackageFilter = {"type": "همه", "duration": "همه"};
    var action = '';
    var kindsTitle = {
        "TopUp": "شارژ مستقیم",
        "Pin": "کارت شارژ",
        "InternetPackage": "بسته اینترنت",
        "Antivirus": "آنتی ویروس",
        "GiftCard": "گیفت کارت"
    };
    var operators = {
        "MTN": "ایرانسل",
        "MTN!": "شگفت انگیز ایرانسل",
        "MTN#": "ایرانسل",
        "WiMax": "وایمکس",
        "MCI": "همراه اول",
        "RTL": "رایتل",
        "RTL!": "شورانگیز رایتل"
    };
    var activeDialog;
    var cellphoneFormats = {
        "mtn": /(0)?9([0,3]{1})/,
        "mci": /(0)?9([1,9]{1})/,
        "tdlte": /(0)?94/,
        "rtl": /([0]{1})([9]{1})([2]{1})([1,2,0]{1})/
    };
    //Get products from chargereseller
    $.ajax({
        type: 'GET',
        url: "https://chr724.ir/services/v3/EasyCharge/initializeDataCategorizedFormat",
        data: "{}",
        async: false,
        contentType: "application/json",
        dataType: 'jsonp',
        crossDomain: true,
        success: function (data) {
            products = data.products;
            paymentGateways = data.paymentGateways;
            $('.support-number').html(data.support.phone || '');

            getApplication();
            initialize();
        },
        error: function (e) {
            $('.loading img').hide();
            $(".loading h4").html("در حال حاضر امکان برقرار ارتباط با سرور وجود ندارد. (خطا: " + e.status + ")لطفاً بعداً مراجعه نمایید.", "خطا");
        }
    });

    //save mobile number on check
    $('.savemobile').on('change', function () {
        saveMobile = $(this).is(':checked');
    });
    // tarabord functionality
    $('.isTarabord').on('change', function () {
        if($(this).is(':checked')){
            $('.operators-container').css('display', 'flex');
        }else{
            $('.operators-container').css('display', 'none');
            isTarabord = false;
            $(document).find('div[data-kind="' + kind + '"').find('input[data-name="cellphone"]').trigger('input');
            $(document).find('div[data-kind="' + kind + '"').find('.custom-radio.operator').removeClass('active');
        }
    });
    $('.custom-radio.operator').on('click',function () {
        $('.operators-container').find('.custom-radio.operator').removeClass('active');
        $(this).addClass('active');
        isTarabord = true;
        simType = $(this).data('type');
        $(document).find('div[data-kind="' + kind + '"').find('input[data-name="cellphone"]').trigger('input');
    });
    //Check for application
    function getApplication() {
        $.ajax({
            type: 'POST',
            url: 'https://www.chargereseller.com/webservices/downloadApplication/android',
            data: {"WebserviceId": $('#dataWebserviceId').val()},
            async: false,
            contentType: "application/json",
            dataType: 'jsonp',
            crossDomain: true,
            success: function (data) {
                if (data.result.Status === "Success") {
                    downloadURL = data.result.DownloadURL;
                } else {
                    $('.application').hide();
                    $('.responsive-menu').find('*[data-target="android"]').fadeOut();
                }
                $('.loading').fadeOut();
            },
            error: function (e) {
                $('.loading').fadeOut();
            }
        });
    }

    //Download application
    $('.download-application').on('click', function () {
        window.location.href = downloadURL;
    });
    //Menu functionality
    $('.menu-item').on('click', function () {
        kind = $(this).data('kind');
        var savedCellphone = getCookie('savedCellphone');
        $('#dataType').val('');
        if (savedCellphone !== null) {
            $(document).find('input[data-name="cellphone"]').val(savedCellphone);
            $(document).find('input[data-name="cellphone"]').trigger('input');
        }
        $('div[data-kind="' + kind + '"]').find('.purchase-products').find('div:not(".hidden"):first-child').trigger('click');
        resetForms();
        $('.menu').fadeOut('fast', function () {
            $('.purchase[data-kind="' + kind + '"]').css('display', 'flex');
        });
    });

    //guide menu functionality
    $('.guide-menu button').on('click', function () {
        var target = $(this).data('target');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('.guide-content').removeClass('active');
        $('.guide-content[data-kind="' + target + '"]').addClass('active');
    });

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        document.cookie = name + '=; Max-Age=-99999999;';
    }

    //Set Value for selected dialog item
    $(document).on('click', '.dialog-toggle-item', function () {
        switch ($(this).data('name')) {
            case 'ProductId':
                if (kind === 'Pin') {
                    $('#dataProductId').val('CC-' + $('#dataType').val() + '-' + $(this).data('value'));
                } else {
                    $('#dataProductId').val($(this).data('value'));
                }
                break;
            case 'PackageId':
                $('#dataPackageId').val($(this).data('value'));
                $('#dataAmount').val($(this).data('price'));
                break;
            case 'Amount':
                customAmount = false;
                if ($(this).data('value') === 'custom-amount') {
                    customAmount = true;
                    $('.custom-amount').show();
                    $('#dataAmount').val($('.custom-amount').find('input[data-name="custom-amount"]').val());
                } else {
                    $('#dataAmount').val($(this).data('value'));
                }
                //&& $.inArray($('#dataType').val(), ['MTN', 'MTN#']) === -1
                if ($(this).data('value') !== 'custom-amount') {
                    $('.custom-amount').hide();
                    $('.custom-amount').find('input').val(500);
                }
                break;
            case 'Type':
                if ($(this).hasClass('custom-radio') && !$(this).find('input[type=checkbox]').prop('checked')) {
                    $('#dataType').val(simType.toUpperCase());
                } else {
                    $('#dataType').val($(this).data('value'));
                }
                if (($('#dataType').val() === 'MTN!' || $('#dataType').val() === 'RTL!') && $(this).hasClass('custom-radio') && $(this).find('input[type=checkbox]').prop('checked')) {
                    $('#TopUpDialog').find('.dialog-toggle-item[data-value="custom-amount"]').addClass('hidden');
                    if ($(this).data('value') === 'RTL!') {
                        $('#TopUpDialog').find('.dialog-toggle-item[data-value="1000"]').addClass('hidden');
                    }
                    if ($('.custom-amount').css('display') !== 'none' || ($(this).data('value') === 'RTL!' && $('#dataAmount').val() === '1000')) {
                        $('.custom-amount').hide();
                        $('#dataAmount').val('');
                        $(document).find('*[data-placeholder-name="topup"]').html('انتخاب مبلغ شارژ');
                    }
                } else {
                    $('#TopUpDialog').find('.dialog-toggle-item').removeClass('hidden');
                }

                if (kind === 'Pin') {
                    simType = $('#dataType').val().toLowerCase();
                    setPurchaseOptions();
                }
                break;
        }
        if ($(this).data('title')) {
            $(document).find('*[data-placeholder-name="' + $(this).data('placeholder-element') + '"]').html($(this).data('title'));
        } else {
            $(document).find('*[data-placeholder-name="' + $(this).data('placeholder-element') + '"]').html($(this).html());
        }
        $('#' + activeDialog).hide()
    });

    //Set purchase options
    function setPurchaseOptions() {
        switch (kind) {
            case 'TopUp':
                $(document).find('div[data-kind="TopUp"]').find('.purchase-options').hide();
                if (simType !== '') {
                    $(document).find('div[data-kind="TopUp"]').find('.purchase-options.' + simType).show();
                    if (simType === 'mtn' || simType === 'rtl') {
                        $(document).find('li[data-value="custom-amount"]').show();
                    } else {
                        $(document).find('li[data-value="custom-amount"]').hide();
                        $(document).find('.custom-amount').hide();
                        $('#dataAmount').val('');
                        $(document).find('*[data-placeholder-name="topup"]').html('انتخاب مبلغ شارژ');
                        $('.custom-amount').find('input').val(500);
                    }
                } else {
                    $(document).find('li[data-value="custom-amount"]').show();
                    $(document).find('div[data-kind="TopUp"]').find('.purchase-options').find('input[type=checkbox]').prop('checked', false);
                }
                break;

            case  "Pin":
                $('#PinDialog').find('.dialog-toggle-item').css('display', 'block');
                $(document).find('.dialog-toggle-item').find('.operator-img').removeClass('active');
                $(document).find('.dialog-toggle-item[data-value="' + $('#dataType').val() + '"]').find('.operator-img').addClass('active');
                $(document).find('*[data-placeholder-name="pin"]').html('انتخاب مبلغ کارت شارژ');
                $('#dataProductId').val('');
                if (simType !== 'mci') {
                    $('#PinDialog').find('.dialog-toggle-item[data-value=1000]').css('display', 'none');
                }
                break;
            case 'InternetPackage':
                var tempInternet = products['internetPackage'];
                if (simType !== '') {
                    $('.dialog-list.internet-package').html('');
                    $(document).find('.internet-filter[data-filter-type="type"]').html('');
                    $(document).find('.internet-filter[data-filter-type="duration"]').html('');
                    $.each(tempInternet[simType], function (mainCategoryKey, mainCategoryValue) {
                        switch (simType) {
                            case 'mtn':
                                if (cellphone.substring(0, 3) === '094' && !mainCategoryKey.includes('ثابت')) {
                                    return;
                                }
                                if (cellphone.substring(0, 3) !== '094' && mainCategoryKey.includes('ثابت')) {
                                    return;
                                }
                                break;

                            case 'rtl':
                                if (cellphone.substring(0, 4) === '0920' && !mainCategoryKey.includes('دایمی')) {
                                    return;
                                }
                                if (cellphone.substring(0, 4) !== '0920' && mainCategoryKey.includes('دایمی')) {
                                    return;
                                }
                                break;
                        }
                        if ($(document).find('.internet-filter[data-filter-type="type"]').find('option[data-value="' + mainCategoryKey + '"]').length === 0) {
                            $(document).find('.internet-filter[data-filter-type="type"]').append('<option class="text-grey" data-value="' + mainCategoryKey + '">' + mainCategoryKey + '</option>');
                        }
                        $.each(mainCategoryValue, function (durationCategoryKey, durationCategoryValue) {
                            if ($(document).find('.internet-filter[data-filter-type="duration"]').find('option[data-value="' + durationCategoryKey + '"]').length === 0) {
                                $(document).find('.internet-filter[data-filter-type="duration"]').append('<option class="text-grey" data-value="' + durationCategoryKey + '">' + durationCategoryKey + '</option>');
                            }
                            $.each(durationCategoryValue, function (packagesKey, packagesValue) {
                                if ($(document).find('.dialog-toggle-item[data-value="' + packagesValue.id + '"]').length === 0) {
                                    $('.dialog-list.internet-package').append('<li class="flex flex-column dialog-toggle-item" data-duration="' + durationCategoryKey + '"  data-type="' + mainCategoryKey + '" data-placeholder-element="internet-package" data-name="PackageId" data-title="' + packagesValue.simType + ' ' + packagesValue.name + '" data-price="' + packagesValue.price + '" data-value="' + packagesValue.id + '"><span class="label label-orange flex-self-start b-radius-3 label-sm font-4">' + packagesValue.simType + '</span>' + packagesValue.name + ' ' + packagesValue.price + ' تومان' + '</li>');
                                }
                            })
                        });
                    });
                    $('.internet-filter[data-filter-type="type"]').val($('.internet-filter[data-filter-type="type"]').find('option:first-child').data('value')).trigger('change');
                    $('.internet-filter[data-filter-type="duration"]').val($('.internet-filter[data-filter-type="duration"]').find('option:first-child').data('value')).trigger('change');
                } else {
                    resetForms();
                }
                break;
        }
    }

    //Responsive Menu functionality
    $('.responsive-menu-sections-toggle').on('click', function () {
        var target = $(this).data('target');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('.responsive-menu-sections div').removeClass('active');
        $('.responsive-menu-sections div[data-section="' + target + '"]').addClass('active');
        if (target === 'home') {
            $('.responsive-menu-sections').css('display', 'none');
        } else {
            $('.responsive-menu-sections').css('display', 'flex');
        }
    });
    $('.purchase-return-btn').on('click', function () {
        $('.purchase').css('display', 'none');
        $('.menu').css('display', 'flex');
    });

    $('.dialog-toggle').on('click', function () {
        requiredParamFilled = false;
        if ($(this).data('required-param')) {
            requiredParamValue = $('#' + $(this).data('required-param')).val();
            requiredParamFilled = (requiredParamValue !== '' || requiredParamValue.length !== 0);

        } else {
            requiredParamFilled = true;
        }
        if (requiredParamFilled) {
            $('#' + $(this).data('dialog')).css('display', 'flex').hide().show();
            activeDialog = $(this).data('dialog');
        } else {
            var requiredParamMessage = $(this).data('required-param-message') ? $(this).data('required-param-message') : 'قبل از این عمل ابتدا ' + $(this).data('required-param') + " را پر کنید.";
            swal('توجه!', requiredParamMessage, 'warning');
        }
    });
    //Dialog functionality
    $(document).on('click', function (event) {
        if (!$(event.target).closest(".dialog-box,.dialog-toggle,.purchase-payment-btn-alt,.purchase").length) {
            $("body").find(".dialog").hide();
            $('.purchase[data-kind="' + kind + '"]').find('.purchase-payment').removeClass('active');
            $('.purchase[data-kind="' + kind + '"]').find('.purchase-payment-fixed').replaceWith($('.purchase[data-kind="' + kind + '"]').find('.purchase-payment-fixed').contents());
        }
    });
    /* when user clicks on payment alternative on mobile size */
    $('.purchase-payment-btn-alt').on('click', function (event) {
        checkForm();
        if (sendForm) {
            $('.purchase[data-kind="' + kind + '"]').find('.purchase-payment').wrap('<div class="purchase-payment-fixed"></div>');
            $('.purchase[data-kind="' + kind + '"]').find('.purchase-payment').addClass('active');
        }
    });

    //Set max length for custom amount field
    $(document).find('input[data-name="custom-amount"]').on('input', function () {
        if ($(this).val().length > $(this).attr('maxLength')) {
            $(this).val($(this).val().slice(0, $(this).attr('maxLength')));
        }
        $(this).val(convertToEnglishDigit($(this).val()).replace(/[^\d\.\-]/g, ''));
        $('#dataAmount').val($(this).val());
        1
    });

    //Set max length for bill id and payment id
    $(document).find('input[data-name="bill-id"]').on('input', function () {
        if ($(this).val().length >= $(this).attr('maxLength')) {
            $(document).find('input[data-name="payment-id"]').focus();
            $(this).val($(this).val().slice(0, $(this).attr('maxLength')));
        }
        $(this).val(convertToEnglishDigit($(this).val()).replace(/[^\d\.\-]/g, ''));
        $('#dataBillId').val($(this).val());
    });
    $(document).find('input[data-name="payment-id"]').on('input', function () {
        if ($(this).val().length > $(this).attr('maxLength')) {
            $(this).val($(this).val().slice(0, $(this).attr('maxLength')));
        }
        $(this).val(convertToEnglishDigit($(this).val()).replace(/[^\d\.\-]/g, ''));
        $('#dataPaymentId').val($(this).val());
    });
    $(document).find('input[data-name="email"]').on('input', function () {
        $('#dataEmail').val($(this).val());
    });
    //Set max length for cellphone
    $(document).find('input[data-name="cellphone"]').on('input', function () {
        if ($(this).val().length > $(this).attr('maxLength')) {
            $(this).val($(this).val().slice(0, $(this).attr('maxLength')));
        }
        $(this).val(convertToEnglishDigit($(this).val()).replace(/[^\d\.\-]/g, ''));
        $('#dataCellphone').val($(this).val());
        //check cellphone operator type
        cellphone = $(this).val();
        if(!isTarabord){
            if (cellphoneFormats['mtn'].test(cellphone.substring(0, 3))) {
                simType = 'mtn';
            } else if ((kind === 'InternetPackage' || kind === 'TopUp') && cellphoneFormats['tdlte'].test(cellphone.substring(0, 3))) {
                simType = 'mtn';
            }
            else if (cellphoneFormats['mci'].test(cellphone.substring(0, 3))) {
                simType = 'mci'
            } else if (cellphoneFormats['rtl'].test(cellphone.substring(0, 4))) {
                if(kind === 'TopUp' && cellphone.substring(0, 4) === '0920'){
                    simType = '';
                    $('#dataType').val('');
                }
                else{
                    simType = 'rtl';
                }
            } else if (kind !== 'Pin' ) {
                simType = '';
                $('#dataType').val('');
                $('#TopUpDialog').find('.dialog-toggle-item').removeClass('hidden');
                // $('#dataAmount').val('');
                // $('.custom-amount').hide();

            }
        }
        $(document).find('div[data-kind="' + kind + '"').find('.custom-input .operator-img').hide();
        if (simType !== '') {
            $(document).find('div[data-kind="' + kind + '"').find('.custom-input .operator-img.' + simType).show();
            $(document).find('div[data-kind="' + kind + '"').find('.custom-input .operator-img.' + simType).show();
            if ($.inArray($('#dataType').val(), ['MTN!', 'MTN#', 'WiMax']) === -1 && kind !== 'Pin') {
                $('#dataType').val(simType.toUpperCase());
            }
        }
        if (kind !== 'Pin') {
            setPurchaseOptions();
        }
    });

    //Reset variables on  switching between menus
    function resetForms() {
        $('#dataAmount').val('');
        $('#dataProductId').val('');
        $('#dataPackageId').val('');
        $('#dataIsTarabord').val('');
        $('.purchase-payment-gateways').find('li').removeClass('active');
        $('.purchase-payment-gateways').find('li[data-value="Default"]').addClass('active');
        $('#dataIssuer').val('');
        $('#dataBillId').val('');
        $('#dataEmail').val('');
        $('#dataPaymentId').val('');
        $('input[data-name="bill-id"]').val('');
        $('input[data-name="payment-id"]').val('');
        $(document).find('input[data-name="email"]').val('');
        $(document).find('*[data-placeholder-name="topup"]').html('انتخاب مبلغ شارژ');
        $(document).find('*[data-placeholder-name="pin"]').html('انتخاب مبلغ کارت شارژ');
        $(document).find('*[data-placeholder-name="antivirus"]').html('انتخاب نوع آنتی ویروس');
        $(document).find('*[data-placeholder-name="giftcard"]').html('انتخاب نوع گیفت کارت');
        $(document).find('*[data-placeholder-name="internet-package"]').html('انتخاب بسته اینترنت');
        $(document).find('.dialog-toggle-item').find('.operator-img').removeClass('active');
        $('#PinDialog').find('.dialog-toggle-item').css('display', 'block');
        $('.js-range-slider').data('ionRangeSlider').reset();
        $('#dataCount').val('1');
        simType = '';
        isTarabord = false;
        $(document).find('.operators-container').css('display','none');
        $(document).find('.isTarabord').prop('checked',false);
        $(document).find('div[data-kind="' + kind + '"').find('.custom-radio.operator').removeClass('active');
        $('.dialog-list').find('.dialog-toggle-item').removeClass('hidden');
    }

    //Convert Persian number to English digits
    function convertToEnglishDigit(string) {
        return string.replace(/[۰-۹]/g, function (w) {
            var persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
            return persian.indexOf(w);
        })
    }

    //upper case first letter of string
    function ucfirst(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function checkBillElement(element) {
        var checkSum = element.substr(element.length - 1, 1);
        element = element.substr(0, element.length - 1);
        element = element.split("");
        coefficient = 2;
        billLength = element.length;
        sum = 0;
        for (i = (billLength - 1); i >= 0; i--) {
            sum += coefficient * element[i];
            coefficient++;
            if (coefficient == 8) {
                coefficient = 2;
            }
        }

        calculatedCheckSum = sum % 11;
        if (calculatedCheckSum == 1 || calculatedCheckSum == 0) {
            calculatedCheckSum = 0;
        } else {
            calculatedCheckSum = 11 - calculatedCheckSum;
        }

        if (calculatedCheckSum == checkSum) {
            return true;
        }
        return false;
    }

    var jsSlider = $(".js-range-slider").ionRangeSlider({
        type: "single",
        min: 1,
        max: 5,
        from: 1,
        grid: false,
        skin: "round",
        cursor: "pointer",
        onChange: function (data) {
            $('#dataCount').val(data.from);
        },
    });
    //Internet package filter
    $('.internet-filter').on('change', function () {
        // alert(':D');
        $('.dialog-list.internet-package').find('li').addClass('hidden');
        $('.dialog-list.internet-package').find('p').remove();
        $(document).find('.internet-filter[data-filter-type="duration"]').find('option').removeClass('hidden');
        var filterType = $(this).data('filter-type');
        var filterValue = $(this).val();
        internetPackageFilter[filterType] = filterValue;
        if (internetPackageFilter.duration === 'همه' && internetPackageFilter.type === 'همه') {
            $('.dialog-list.internet-package').find('li').removeClass('hidden');
        } else {
            $('.dialog-list.internet-package').find('li' + (internetPackageFilter.duration === 'همه' ? '' : '[data-duration="' + internetPackageFilter.duration + '"]') + (internetPackageFilter.type === 'همه' ? '' : '[data-type="' + internetPackageFilter.type + '"]')).removeClass('hidden');
        }
        if ($('.dialog-list.internet-package').find('li:not(".hidden")').length === 0) {
            $('.dialog-list.internet-package').append('<p class="text-grey">.بسته ای در این دسته وجود ندارد</p>');
        }
    });
    //Generate Purchase title
    setInterval(function () {
        $('.purchase-title').html('-');
        $('.purchase-amount').html('-');
        switch (kind) {
            case 'TopUp':
                if ($('#dataType').val() !== '' && $('#dataAmount').val() !== '') {
                    $('.purchase[data-kind="TopUp"]').find('.purchase-title').html(kindsTitle[kind] + ' ' + operators[$('#dataType').val()]);
                    $('.purchase[data-kind="TopUp"]').find('.purchase-amount').html($('#dataAmount').val() + ' ' + ' تومان ');
                    action = 'TopUp';
                }
                break;
            case 'Pin':
                if ($('#dataType').val() !== '' && $('#dataProductId').val() !== '' && $('#dataCount').val() !== '') {
                    var amount = $('#dataProductId').val().substr(7);
                    $('.purchase[data-kind="Pin"]').find('.purchase-title').html($('#dataCount').val() + ' عدد ' + kindsTitle[kind] + ' ' + operators[$('#dataType').val()] + ' ' + amount + ' ' + 'تومانی ');
                    $('.purchase[data-kind="Pin"]').find('.purchase-amount').html((amount * $('#dataCount').val()) + ' تومان ');
                    action = 'BuyProduct';
                }
                break;
            case 'Bill':
                action = 'bill';
                var billLabel = $(document).find('input[data-name="bill-id"]').siblings('.error-label');
                var paymentLabel = $(document).find('input[data-name="payment-id"]').siblings('.error-label');
                var billId = $('#dataBillId').val();
                var paymentId = $('#dataPaymentId').val();
                var compareBill = true;
                $(billLabel).html('');
                $(paymentLabel).html('');
                $('.purchase[data-kind="Bill"]').find('.purchase-icon').removeClass('bills');
                if (billId === '' || isNaN(billId) === -1) {
                    compareBill = false;
                    $(billLabel).html('لطفا شناسه قبض را وارد کنید.')
                } else if (!checkBillElement(billId)) {
                    compareBill = false;
                    $(billLabel).html('شناسه قبض وارد شده نامعتبر است.')
                }

                if (paymentId === '' || isNaN(paymentId) === -1) {
                    compareBill = false;
                    $(paymentLabel).html('لطفا شناسه پرداخت را وارد کنید.')
                } else if (!checkBillElement(paymentId.substr(0, paymentId.length - 1))) {
                    compareBill = false;
                    $(paymentLabel).html('شناسه پرداخت وارد شده نامعتبر است.')
                }

                if (compareBill) {
                    if (!checkBillElement(billId + paymentId)) {
                        $(paymentLabel).html('شناسه قبض و شناسه پرداخت همخوانی ندارند.')
                    } else {
                        var billTypesPersian = ["آب", "بــرق", "گـــاز", "تلفن ثابت", "تلفن همراه", "عوارض شهرداری", "", "", "جریمه راهنمایی و رانندگی", "بیمه پاسارگاد", "سایر"];
                        var billTypesEnglish = ["water", "electricity", "gas", "telephone", "cellphone", "mayoralty", "", "", "police", "pasargad", "others"];
                        var billLength = billId.length;
                        var paymentLength = paymentId.length;
                        var billType = billId.substr((billLength - 2), 1) - 1;
                        if (billType === -1) {
                            billCoNumber = billId.substr((billLength - 5), 3);
                            if(billCoNumber  == 102){
                                billType = 9;
                            }else{
                                billType = 10;
                            }
                        }
                        var billAmount = paymentId.substr(0, (paymentLength - 5)) * 100; // toman
                        $("#dataAmount").val(billAmount);
                        $('.purchase[data-kind="Bill"]').find('.purchase-title').html(' قبض ' + billTypesPersian[billType]);
                        $('.purchase[data-kind="Bill"]').find('.purchase-icon').addClass('bills');
                        $('.purchase[data-kind="Bill"]').find('.purchase-icon').addClass(billTypesEnglish[billType]);
                        $('.purchase[data-kind="Bill"]').find('.purchase-amount').html(billAmount + " تومان");
                    }
                }
                break;
            case 'Giftcard':
                if ($('#dataProductId').val() !== '' && $('#dataCount').val() !== '') {
                    var productName = $(document).find('*[data-placeholder-name="giftcard"]').html().split('-')[0];
                    var amount = $(document).find('*[data-placeholder-name="giftcard"]').html().split('-')[1];
                    $('.purchase[data-kind="Giftcard"]').find('.purchase-title').html($('#dataCount').val() + ' عدد ' + productName + ' ' + amount + ' ' + 'تومانی ');
                    $('.purchase[data-kind="Giftcard"]').find('.purchase-amount').html((amount * $('#dataCount').val()) + ' تومان ');
                    action = 'BuyProduct';
                }
                break;
            case 'Antivirus':
                if ($('#dataProductId').val() !== '' && $('#dataCount').val() !== '') {
                    var productName = $(document).find('*[data-placeholder-name="antivirus"]').html().split('-')[0];
                    var amount = $(document).find('*[data-placeholder-name="antivirus"]').html().split('-')[1];
                    $('.purchase[data-kind="Antivirus"]').find('.purchase-title').html($('#dataCount').val() + ' عدد ' + productName + ' ' + amount + ' ' + 'تومانی ');
                    $('.purchase[data-kind="Antivirus"]').find('.purchase-amount').html((amount * $('#dataCount').val()) + ' تومان ');
                    action = 'BuyProduct';
                }
                break;
            case 'InternetPackage':
                if ($('#dataPackageId').val() !== '') {
                    var productName = $(document).find('*[data-placeholder-name="internet-package"]').html();
                    $('.purchase[data-kind="InternetPackage"]').find('.purchase-title').html(kindsTitle[kind] + ' ' + operators[$('#dataType').val()] + ' ' + productName);
                    $('.purchase[data-kind="InternetPackage"]').find('.purchase-amount').html($('#dataAmount').val() + ' تومان ');
                    action = 'internetRecharge';
                }
                break;
        }
    }, 100);
    //select giftcard and antivirus functionality
    $(document).find('.purchase-products').on('click', 'div', function () {
        var jsonKey = {"Antivirus": ["antivirus", "آنتی ویروس"], "Giftcard": ["giftCard", "گیفت کارت"]};
        if (selectedProduct !== $(this).data('product')) {
            $(document).find('*[data-placeholder-name="' + kind.toLowerCase() + '"]').html('انتخاب نوع ' + jsonKey[kind][1]);
            $('#dataProductId').val('');
        }
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('.' + kind.toLowerCase() + '.dialog-list').html('');
        $.each(products[jsonKey[kind][0]][$(this).data('product')], function (key, val) {
            $('.' + kind.toLowerCase() + '.dialog-list').append('<li class="dialog-toggle-item" data-placeholder-element="' + kind.toLowerCase() + '" data-name="ProductId" data-value="' + val.id + '">' + val.name + '-' + val.price + '- تومان' + '</li>')
        });
        selectedProduct = $(this).data('product');
    });

    //select payment gateway functionality
    $('.purchase-payment-gateways').on('click', 'li', function () {
        $('.purchase-payment-gateways').find('li').removeClass('active');
        $(this).addClass('active');
        $('#dataIssuer').val($(this).data('value'));
    });

    //Process purchase data sent to webservice
    function doProccess(data) {
        if (data.status == 'Success') {
            window.location.replace(data.paymentInfo.url);
        } else {
            $('.loading').fadeOut();
            swal('خطا!', data.errorMessage, 'error');
        }
    }

    //Submit form functionality
    $('.purchase-payment-btn').on('click', function () {
        $('#dataIsTarabord').val(isTarabord);
        checkForm();
        if (sendForm) {
            $('.loading').fadeIn();
            $('.loading h4').text('دریافت اطلاعات ...');
            $.ajax({
                type: 'POST',
                url: 'https://chr724.ir/services/v3/EasyCharge/' + action,
                data: $('form#myForm').serialize(),
                async: false,
                contentType: "application/json",
                dataType: 'jsonp',
                crossDomain: true,
                success: function (data) {
                    $('.loading h4').text('انتقال به بانک ...');
                    doProccess(data);
                },
                error: function (e) {
                    $('.loading').fadeOut();
                }
            });
        }
    });

    //Check form validation
    function checkForm() {
        sendForm = false;
        var emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if ($('#dataEmail').val().length !== 0 && !emailRegex.test($('#dataEmail').val())) {
            swal('توجه!', 'ایمیل وارد شده صحیح نیست.', 'warning');
            return;
        }
        switch (kind) {
            case 'TopUp':
                if (cellphone.length !== 11) {
                    swal('توجه!', 'لطفا شماره موبایل را وارد کنید.', 'warning');
                    return;
                }
                if ((jQuery.inArray(cellphone.substring(0, 3), ['093', '090', '091','099']) === -1 && jQuery.inArray(cellphone.substring(0, 4), ['0921', '0922', '0990','0991']) === -1) && $('#dataType').val() !== 'WiMax') {
                    swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    return;
                }
                if (cellphone.substring(0, 3) !== '094' && $('#dataType').val() === 'WiMax') {
                    swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    return;
                }
                if ($('#dataAmount').val() === '' || $('#dataAmount').val().length === 0 || isNaN($('#dataAmount').val())) {
                    swal('توجه!', 'لطفا مبلغ شارژ را انتخاب کنید.', 'warning');
                    return;
                }
                if ($('#dataAmount').val() < 500 || $('#dataAmount').val() > 50000) {
                    swal('توجه!', 'مبلغ وارد شده میبایست بزرگتر از 500 و کوچک تر از 50،000 تومان باشد.', 'warning');
                    return;
                }
                break;
            case 'Pin':
                if ($('#dataType').val() === '') {
                    swal('توجه!', 'لطفا اپراتور کارت شارژ مد نظر خود را انتخاب کنید.', 'warning');
                    return;
                }
                if (cellphone.length !== 11) {
                    swal('توجه!', 'جهت استفاده از خدمات پشتیبانی، شماره موبایل خود را وارد نمایید.', 'warning');
                    return;
                }
                if (jQuery.inArray(cellphone.substring(0, 3), ['093', '090', '091', '092','099']) === -1 && jQuery.inArray(cellphone.substring(0, 4), ['0921', '0922', '0920', '0990','0991']) === -1) {
                    swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    return;
                }
                if ($('#dataProductId').val() === '' || $('#dataProductId').val().length === 0) {
                    swal('توجه!', 'لطفا یک کارت شارژ انتخاب کنید.', 'warning');
                    return;
                }
                break;

            case 'InternetPackage':
                if (cellphone.length !== 11 || isNaN(cellphone)) {
                    swal('توجه!', 'شماره موبایل خود را وارد کنید.', 'warning');
                    return;
                }
                var regex = cellphoneFormats[isTarabord ? simType:$('#dataType').val().toLowerCase()];
                var selectedType = $('.purchase[data-kind="InternetPackage"]').find('.purchase-title').html();
                if (selectedType.includes('ثابت')) {
                    regex = cellphoneFormats['tdlte'];
                }
                if ($('#dataType').val() === '' || $('#dataType').val().length === 0) {
                    swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    return;
                }
                if(isTarabord){
                    if (jQuery.inArray(cellphone.substring(0, 3), ['093', '090', '091', '092','099']) === -1 && jQuery.inArray(cellphone.substring(0, 4), ['0921', '0922', '0920', '0990','0991']) === -1) {
                        swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    }
                }else{
                    if(!regex.test(cellphone)){
                        swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    }
                }
                if ($('#dataPackageId').val() === '' || $('#dataPackageId').val().length === 0) {
                    swal('توجه!', 'لطفا یک بسته اینترنت انتخاب کنید.', 'warning');
                    return;
                }
                break;

            case 'Bill':
                var billId = $('#dataBillId').val();
                var paymentId = $('#dataPaymentId').val();
                if (billId === '' || isNaN(billId) === -1) {
                    swal('توجه!', 'لطفا شناسه قبض را وارد کنید.', 'warning');
                    return;
                } else if (!checkBillElement(billId)) {
                    swal('توجه!', 'شناسه قبض وارد شده نامعتبر است.', 'warning');
                    return;
                }

                if (paymentId === '' || isNaN(paymentId) === -1) {
                    swal('توجه!', 'لطفا شناسه پرداخت را وارد کنید.', 'warning');
                    return;
                } else if (!checkBillElement(paymentId.substr(0, paymentId.length - 1))) {
                    swal('توجه!', 'شناسه پرداخت وارد شده نامعتبر است.', 'warning');
                    return;
                }

                if (!checkBillElement(billId + paymentId)) {
                    swal('توجه!', 'شناسه قبض و شناسه پرداخت همخوانی ندارند.', 'warning');
                    return;
                }
                if (cellphone.length !== 11) {
                    swal('توجه!', 'جهت استفاده از خدمات پشتیبانی، شماره موبایل خود را وارد نمایید.', 'warning');
                    return;
                }
                if (jQuery.inArray(cellphone.substring(0, 3), ['093', '090', '091', '092','099']) === -1 && jQuery.inArray(cellphone.substring(0, 4), ['0990','0991','0921', '0922', '0920',]) === -1) {
                    swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    return;
                }
                break;
            case 'Antivirus':
                if ($('#dataProductId').val() === '' || $('#dataProductId').val().length === 0) {
                    swal('توجه!', 'لطفا یک آنتی ویروس انتخاب کنید.', 'warning');
                    return;
                }
                if (cellphone.length !== 11) {
                    swal('توجه!', 'جهت ارسال سریال آنتی ویروس، شماره موبایل خود را وارد نمایید.', 'warning');
                    return;
                }
                if (jQuery.inArray(cellphone.substring(0, 3), ['093', '090', '091', '092','099']) === -1 && jQuery.inArray(cellphone.substring(0, 4), ['0921', '0922', '0920', '0990','0991']) === -1) {
                    swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    return;
                }
                break;
            case 'Giftcard':
                if ($('#dataProductId').val() === '' || $('#dataProductId').val().length === 0) {
                    swal('توجه!', 'لطفا یک گیفت کارت انتخاب کنید.', 'warning');
                    return;
                }
                if (cellphone.length !== 11) {
                    swal('توجه!', 'جهت ارسال سریال گیفت کارت، شماره موبایل خود را وارد نمایید.', 'warning');
                    return;
                }
                if (jQuery.inArray(cellphone.substring(0, 3), ['093', '090', '091', '092','099']) === -1 && jQuery.inArray(cellphone.substring(0, 4), ['0921', '0922', '0920', '0990','0991']) === -1) {
                    swal('توجه!', 'شماره موبایل وارد شده صحیح نیست.', 'warning');
                    return;
                }
                break;
        }

        if (saveMobile) {
            setCookie('savedCellphone', cellphone, 365)
        }

        sendForm = true;
    }

    //initialize products
    function initialize() {
        $.each(products.antivirus, function (key, val) {
            var lowerKey = key.toLowerCase();
            $(document).find('div[data-kind="Antivirus"]').find('.purchase-products').append('<div class="' + lowerKey + ' b-radius-1' + ((val !== '' && val != null && val.length != 0) ? '' : ' hidden') + '" data-product="' + key + '"></div>');
        });

        $.each(products.giftCard, function (key, val) {
            var lowerKey = key.toLowerCase();
            $(document).find('div[data-kind="Giftcard"]').find('.purchase-products').append('<div class="' + lowerKey + ' b-radius-1' + ((val !== '' && val != null && val.length != 0) ? '' : ' hidden') + '" data-product="' + key + '"></div>');
        });
        //check not available product in giftcard and antivirus
        $('.purchase-products').each(function () {
            if ($(this).find('div:not(".hidden")').length === 0) {
                var rootNode = $(this).parent().parent().parent();
                $(rootNode).find('.purchase-payment').hide();
                $(rootNode).find('.purchase-kinds-form').hide();
                $(rootNode).append($('.not-available-product:first').clone());
                $(rootNode).find('.not-available-product').css('display', 'flex');
            }
        });

        //Add payment gateways to form
        paymentGateways = paymentGateways.filter(gateway => gateway == 'Zarinpal' || gateway == 'Emtiyaz');
        paymentGateways.push('Default');
        paymentGateways.reverse();
        if (paymentGateways.length > 1) {
            $.each(paymentGateways, function (gatewayKey, gatewayValue) {
                $('.purchase-payment-gateways').each(function () {
                    $(this).append('<li class="' + gatewayValue.toLowerCase() + ' b-radius-1" data-value="' + gatewayValue + '"></li>');
                });
            });
        }
        //Check for manual navigation in url
        var url = window.location.href;
        if (url.match("#topup$")) {
            $('div[data-kind="TopUp"]').trigger("click");
        } else if (url.match("#pin$")) {
            $('div[data-kind="Pin"]').trigger("click");
        } else if (url.match("#internetpackage$")) {
            $('div[data-kind="InternetPackage"]').trigger("click");
        } else if (url.match("#bill$")) {
            $('div[data-kind="Bill"]').trigger("click");
        } else if (url.match("#giftcard$")) {
            $('div[data-kind="Giftcard"]').trigger("click");
        } else if (url.match("#antivirus$")) {
            $('div[data-kind="Antivirus"]').trigger("click");
        }
    }

    //make radio button uncheck
    $("input:checkbox").on('click', function () {
        $(this).parent().siblings().find('input[type=checkbox]').prop('checked', false);
    });
});
