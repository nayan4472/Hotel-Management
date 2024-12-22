<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Css/register.css">
    <link rel="icon" type="text/css" href="Css/image/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        /* Reset. */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-size: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Panels. */
        .splitview {
            position: relative;
            width: 100%;
            min-height: 45vw;
            overflow: hidden;
        }

        .panel {
            position: absolute;
            width: 100vw;
            min-height: 45vw;
            overflow: hidden;
        }

        .panel .content {
            position: absolute;
            width: 100vw;
            min-height: 45vw;
            color: #FFF;
        }

        .panel .description {
            width: 25%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }

        .panel img {
            box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.15);
            width: 35%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


        .bottom {
            background-color: rgb(44, 44, 44);
            z-index: 1;
        }

        .bottom .description {
            right: 5%;
        }

        .top {
            background-color: rgb(77, 69, 173);
            z-index: 2;
            width: 50vw;

            /*-webkit-clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);
    clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);*/
        }

        .top .description {
            left: 5%;
        }

        /* Handle. */
        .handle {
            height: 100%;
            position: absolute;
            display: block;
            background-color: rgb(253, 171, 0);
            width: 5px;
            top: 0;
            left: 50%;
            z-index: 3;
        }

        /* Skewed. */
        .skewed .handle {
            top: 50%;
            transform: rotate(30deg) translateY(-50%);
            height: 200%;
            -webkit-transform-origin: top;
            -moz-transform-origin: top;
            transform-origin: top;
        }

        .skewed .top {
            transform: skew(-30deg);
            margin-left: -1000px;
            width: calc(50vw + 1000px);
        }

        .skewed .top .content {
            transform: skew(30deg);
            margin-left: 1000px;
        }

        /* Responsive. */
        @media (max-width: 900px) {
            body {
                font-size: 75%;
            }
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html {
            font-size: 100%;
        }

        body {
            font-family: acumin-pro, system-ui, sans-serif;
            margin: 0;
            display: grid;
            grid-template-rows: auto 1fr auto;
            font-size: 14px;
            background-color: #f4f4f4;
            align-items: start;
            min-height: 100vh;
        }

        .footer {
            display: flex;
            flex-flow: row wrap;
            padding: 30px 30px 20px 30px;
            color: #2f2f2f;
            background-color: #fff;
            border-top: 1px solid #e5e5e5;
        }

        .footer>* {
            flex: 1 100%;
        }

        .footer__addr {
            margin-right: 1.25em;
            margin-bottom: 2em;
        }

        .footer__logo {
            font-family: 'Pacifico', cursive;
            font-weight: 400;
            text-transform: lowercase;
            font-size: 1.5rem;
        }

        .footer__addr h2 {
            margin-top: 1.3em;
            font-size: 15px;
            font-weight: 400;
        }

        .nav__title {
            font-weight: 400;
            font-size: 15px;
        }

        .footer address {
            font-style: normal;
            color: #999;
        }

        .footer__btn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 36px;
            max-width: max-content;
            background-color: rgb(33, 33, 33, 0.07);
            border-radius: 100px;
            color: #2f2f2f;
            line-height: 0;
            margin: 0.6em 0;
            font-size: 1rem;
            padding: 0 1.3em;
        }

        .footer ul {
            list-style: none;
            padding-left: 0;
        }

        .footer li {
            line-height: 2em;
        }

        .footer a {
            text-decoration: none;
        }

        .footer__nav {
            display: flex;
            flex-flow: row wrap;
        }

        .footer__nav>* {
            flex: 1 50%;
            margin-right: 1.25em;
        }

        .nav__ul a {
            color: #999;
        }

        .nav__ul--extra {
            column-count: 2;
            column-gap: 1.25em;
        }

        .legal {
            display: flex;
            flex-wrap: wrap;
            color: #999;
        }

        .legal__links {
            display: flex;
            align-items: center;
        }

        .heart {
            color: #2f2f2f;
        }

        @media screen and (min-width: 24.375em) {
            .legal .legal__links {
                margin-left: auto;
            }
        }

        @media screen and (min-width: 40.375em) {
            .footer__nav>* {
                flex: 1;
            }

            .nav__item--extra {
                flex-grow: 2;
            }

            .footer__addr {
                flex: 1 0px;
            }

            .footer__nav {
                flex: 2 0px;
            }
        }

                
    </style>
</head>

<body>
    {{-- headr --}}
    
    {{-- headr --}}
    {{-- Slider --}}
    <div class="splitview skewed">
        <div class="panel bottom">
            <div class="content">
                <div class="description">
                    <h1>The original image.</h1>
                    <p>This is how the image looks like before applying a duotone effect.</p>
                </div>

                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/original-image.jpg" alt="Original">
            </div>
        </div>

        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h1>The duotone image.</h1>
                    <p>This is how the image looks like after applying a duotone effect.</p>
                </div>

                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/duotone-image.jpg" alt="Duotone">
            </div>
        </div>

        <div class="handle"></div>
    </div>

    {{-- FOOTER --}}
    <header>
        <!-- Content -->
    </header>

    <main>
        <!-- Content -->
    </main>

    <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo">Something</h1>

            <h2>Contact</h2>

            <address>
                5534 Somewhere In. The World 22193-10212<br>

                <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
            </address>
        </div>

        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Media</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">Online</a>
                    </li>

                    <li>
                        <a href="#">Print</a>
                    </li>

                    <li>
                        <a href="#">Alternative Ads</a>
                    </li>
                </ul>
            </li>

            <li class="nav__item nav__item--extra">
                <h2 class="nav__title">Technology</h2>

                <ul class="nav__ul nav__ul--extra">
                    <li>
                        <a href="#">Hardware Design</a>
                    </li>

                    <li>
                        <a href="#">Software Design</a>
                    </li>

                    <li>
                        <a href="#">Digital Signage</a>
                    </li>

                    <li>
                        <a href="#">Automation</a>
                    </li>

                    <li>
                        <a href="#">Artificial Intelligence</a>
                    </li>

                    <li>
                        <a href="#">IoT</a>
                    </li>
                </ul>
            </li>

            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#">Terms of Use</a>
                    </li>

                    <li>
                        <a href="#">Sitemap</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="legal">
            <p>&copy; 2019 Something. All rights reserved.</p>

            <div class="legal__links">
                <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
            </div>
        </div>
    </footer>
    {{-- FOOTER --}}

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="slide.js"></script>
</body>

</html>
