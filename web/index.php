<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ProjectName | PageName</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <style type="text/css">

        * {
            margin: 0;
            padding: 0;
            font-family: 'Arial', 'Helvetica', sans-serif;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        #main-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .banner img {
            width: 100%;
            height: auto;
            display: block;
        }

        .banner-title {
            background: #5e78ab;
            padding: 20px 50px;
            color: #ffffff;
        }

        .banner-title h1 {
            font-weight: normal;
            font-size: 23px;
            text-align: left;
        }

        .form-wrapper {
            max-width: 450px;
            margin: 0px auto 20px;
        }

        .input-wrap input[type="text"], .input-wrap input[type="email"], .input-wrap input[type="tel"] {
            border: 1px solid #ccc;
            width: 100%;
            border-radius: 4px;
            padding: 10px 15px;
            outline: none;
            font-size: 12px;
        }

        .input-wrap.error input[type="text"], .input-wrap.error input[type="email"], .input-wrap.error input[type="tel"] {
            border: 1px solid #d42232;
        }

        .input-wrap {
            margin-bottom: 10px;
        }

        .input-wrap.half {
            width: 50%;
            float: left;
            padding: 0px 10px;
        }

        .input-wrap label {
            margin-bottom: 3px;
            display: inline-block;
        }

        .input-wrap label span {
            color: #d42232;
        }

        .divider {
            margin: 0 -10px;
        }

        .divider:after, .divider:before {
            content: '';
            display: block;
            float: none;
            clear: both;
        }

        .input-wrap [type="submit"] {
            background: #eb8a15;
            padding: 12px 25px;
            border-radius: 4px;
            font-size: 16px;
            border: none;
            color: #fff;
            text-transform: uppercase;
            margin-top: 25px;
            display: inline-block;
            cursor: pointer;
            box-shadow: 0 8px 17px 0 rgba(0,0,0,0),0 6px 20px 0 rgba(0,0,0,0);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;

        }

        .input-wrap [type="submit"]:hover {
            background: #dd7f19;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        }

        .text-center {
            text-align: center;
        }


        .custom-select-wrapper {
            display: block;
            position: relative;
            height: 36px;
            background: #ffffff;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error .custom-select-wrapper {
            border: 1px solid red; }
        .custom-select-wrapper:after {
            content: '';
            position: absolute;
            top: 50%;
            right: 10px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #a7a9ac;
            margin-top: -4px;
        }

        .custom-select-wrapper.focus {
            border-bottom: 1px solid #b0c024; }

        .custom-select-wrapper .custom-select-display {
            display: block;
            height: 37px;
            margin-right: 25px;
            color: #8d8d8d;
            overflow: hidden;
            padding: 11px 8px 0px 8px;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .custom-select-wrapper select {
            -webkit-appearance: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            filter: alpha(opacity=0);
            opacity: 0;
            z-index: 1;
            cursor: pointer;
        }

        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            letter-spacing: 1px;
            font-size: 13px;
        }
        ::-moz-placeholder { /* Firefox 19+ */
            letter-spacing: 1px;
            font-size: 13px;
        }
        :-ms-input-placeholder { /* IE 10+ */
            letter-spacing: 1px;
            font-size: 13px;
        }
        :-moz-placeholder { /* Firefox 18- */
            letter-spacing: 1px;
            font-size: 13px;
        }

        .ty-message {
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            text-align: center;
        }

        .ty-message.active {
            opacity: 1;
            visibility: visible;
        }

        .ty-message h1 {
            font-weight: normal;
            color: #f15a29;
            font-size: 32px;
            margin: 20px 0 0;
            text-align: center;
        }

        .cw-form {
            position: relative;
        }

        .cw-form.overlay:before {
            content: '';
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.8);
            z-index: 99;
        }

        .cw-form.overlay .loading-spinner-wrapper {
            opacity: 1;
        }

        .loading-spinner-wrapper {
            position: absolute;
            width: 100%;
            left: 0;
            text-align: center;
            z-index: 1000;
            top: 50%;
            margin-top: -6px;
            opacity: 0;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease; }

        .loading-spinner {
            position: relative;
            vertical-align: middle;
            width: 50px;
            height: 12px;
            text-align: center;
            margin: 0 auto;
            display: block; }

        .loading-spinner i {
            position: absolute;
            top: 0;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: #f15a29;
            -webkit-animation: pulse 1s infinite ease-in-out;
            -moz-animation: pulse 1s infinite ease-in-out;
            animation: pulse 1s infinite ease-in-out;
            -webkit-animation-fill-mode: both;
            -moz-animation-fill-mode: both;
            animation-fill-mode: both; }

        .loading-spinner i.one {
            left: 0;
            -webkit-animation-delay: -.32s;
            -moz-animation-delay: -.32s;
            animation-delay: -.32s; }

        .loading-spinner i.two {
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            -webkit-animation-delay: -.16s;
            -moz-animation-delay: -.16s;
            animation-delay: -.16s; }

        .loading-spinner i.three {
            right: 0; }

        .loading-spinner i {
            background: #f15a29; }

        @-webkit-keyframes pulse {
            0%, 100%, 80% {
                opacity: 0; }
            40% {
                opacity: 1; } }

        @-moz-keyframes pulse {
            0%, 100%, 80% {
                opacity: 0; }
            40% {
                opacity: 1; } }

        @keyframes pulse {
            0%, 100%, 80% {
                opacity: 0; }
            40% {
                opacity: 1; } }

    </style>


    <!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
    <script src="js/html5.js"></script>
    <script src="js/lib/modernizr-2.8.3.min.js"></script>
    <script src="js/pace.min.js"></script>
</head>
<body>
<section id="main-container">
    <section id="main-wrapper">
        <div class="banner"><img src="images/cw-banner.jpg" alt=""></div>
        <div class="banner-title"><h1>Registration Form</h1></div>
        <div class="ty-message">
            <h1>You've registered succesfully!</h1>
            <p>As promised, you will be getting discounts on any CW Home Depot item.</p>
        </div>
        <div class="form-wrapper">
            <form method="" post="" class="cw-form" novalidate>
                <div class="loading-spinner-wrapper" id="app-loader">
                    <span class="loading-spinner">
                      <i class="one"></i>
                      <i class="two"></i>
                      <i class="three"></i>
                    </span>
                </div>
                <div class="input-wrap">
                    <label>Full Name <span>*</span>:</label>
                    <input id="full-name" type="text" name="" value="" />
                </div>
                <div class="divider">
                    <div class="input-wrap half">
                        <label>Age <span>*</span>:</label>
                        <input id="age-field" type="tel" name="" value="" />
                    </div>
                    <div class="input-wrap half" id="gender">
                        <label>Gender <span>*</span>:</label>
                        <select  class="custom-select">
                            <option value="0"></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="input-wrap">
                    <label>Email Address <span>*</span>:</label>
                    <input id="account-email" type="email" name="" value=""  placeholder="juan@gmail.com"/>
                </div>
                <div class="input-wrap">
                    <label>Contact Number <span>*</span>:</label>
                    <input id="contact-num" type="tel" name="" value="" maxLength="11" placeholder="0919 1234 567"/>
                </div>
                <div class="input-wrap" id="occupation">
                    <label>Occupation <span>*</span>:</label>
                    <select class="custom-select">
                        <option value="0"></option>
                        <option value="1">Web Developer</option>
                        <option value="2">Project Manager</option>
                    </select>
                </div>
                <div class="input-wrap" id="preffered-date">
                    <label>Preffered Date for Claiming Discount <span>*</span>: </label>
                    <select  class="custom-select">
                        <option value="0"></option>
                        <option value="2016-10-21">October 21, 2016</option>
                        <option value="2016-10-22">October 22, 2016</option>
                        <option value="2016-10-23">October 23, 2016</option>
                    </select>
                </div>
                <div class="input-wrap text-center">
                    <input type="submit" name="" value="register" />
                </div>
            </form>
        </div>
    </section>
</section>
<script src="js/lib/jquery.min.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        initCustomForm();

        $('.input-wrap input, .input-wrap select').focus(function(){
            $(this).closest('.input-wrap').removeClass('error');

        });


        $('.cw-form').submit(function(e){
            e.preventDefault();
            $('.input-wrap').addClass('error');
            isvalidate = false;

            if( IsEmail($('#account-email').val() )) {
                $('#account-email').closest('.input-wrap').removeClass('error');
                isvalidate = true;
            } else {
                isvalidate = false;
            }

            if( $('#gender select').val() != '0'){
                $('#gender').removeClass('error');
                isvalidate = true;

            } else {
                isvalidate = false;
            }

            if( !$('#full-name').val() == '') {
                $('#full-name').closest('.input-wrap').removeClass('error');
                isvalidate = true;
            } else {
                isvalidate = false;
            }

            if( !$('#age-field').val() == '') {
                $('#age-field').closest('.input-wrap').removeClass('error');
                isvalidate = true;
            } else {
                isvalidate = false;
            }

            if( $('#contact-num').val() != '' && $('#contact-num').val().length >= 11 ){
                $('#contact-num').closest('.input-wrap').removeClass('error');
                isvalidate = true;

            } else {
                isvalidate = false;
            }

            if( $('#occupation select').val() != '0'){
                $('#occupation').removeClass('error');
                isvalidate = true;

            } else {
                isvalidate = false;
            }


            if( $('#preffered-date select').val() != '0'){
                $('#preffered-date').removeClass('error');
                isvalidate = true;

            } else {
                isvalidate = false;
            }

            if( isvalidate == true && IsEmail($('#account-email').val())  ) {

                var formdata = {
                    email : $('#account-email').val(),
                    name : $('#full-name').val(),
                    age : $('#age-field').val(),
                    gender : $('#gender select').val(),
                    contact : $('#contact-num').val(),
                    occupation : $('#occupation select').val(),
                    date : $('#preffered-date select').val()
                };

                console.log('tama');
                $('.cw-form').addClass('overlay');

                $.post( "email-handler.php", formdata).done(function(data){
                    $('.cw-form').stop(true, false).slideUp(300);
                    if(data.status === 'success'){
                        $('.ty-message').addClass('active');
                    } else {
                        var err = $('<h1>' + data.data.message + '</h1>');
                        $('.ty-message').html(err);
                        $('.ty-message').addClass('active');
                    }
                });
            } else {
                console.log('error');
                e.preventDefault();
            }

        });
    });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function initCustomForm() {

        $('select.custom-select').each(function() {
            $(this).wrap('<div class="custom-select-wrapper" />');
            $(this).before('<div class="custom-select-display" />');
            $(this).change(function() {
                $(this).siblings('.custom-select-display').text( $(this).find('option:selected').text() );
            });
            $(this).keyup(function() {
                $(this).siblings('.custom-select-display').text( $(this).find('option:selected').text() );
            });
            $(this).change();
        });
    }
</script>
</body>
</html>
