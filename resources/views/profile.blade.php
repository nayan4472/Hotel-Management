<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #00093c, #2d0b00);
            font-family: 'Quicksand', sans-serif;
        }

        .profile-card {
            width: 200px;
            height: 200px;
            background: #fff;
            padding: 30px;
            border-radius: 50%;
            box-shadow: 0 0 22px #3336;
            transition: .6s;
        }

        .profile-card:hover {
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            height: 300px;
        }

        .profile-card img {
            width: 100%;
            height: 100%;
            transition: .6s;
            z-index: 10;
        }

        .profile-card:hover img {
            transform: translateY(-60px);
        }

        img {
            width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 22px #3336;
            transition: .6s;
        }

        .profile-card:hover img {
            border-radius: 10px;
        }

        .caption {
            text-align: center;
            transform: translateY(-70px);
            opacity: 0;
            transition: .6s;
        }

        .profile-card:hover .caption {
            opacity: 1;
        }

        .caption h3 {
            font-size: 32px;
            font-weight: 600;
        }

        .caption p {
            position: relative;
            display: flex;
            width: 100%;
            justify-content: center;
            top: -25px;
            font-size: 15px;
            color: #0c52a1;

        }

        .social-links {
            display: flex;
            width: 100%;
            justify-content: space-around;
            position: relative;
            top: -35px;
        }

        @media only screen and (max-width: 700px) {
            .profile-card {
                margin-top: 45px;
            }

        }

        /* Arrow Styling */
        .container{
            float: left;
        }
        .backArrow {
            font-size: 25px;
            line-height: 25px;

            width: 1em;
            height: 1em;
            padding: 6px;

            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transform: rotate(180deg);

            color: white;
            border: 2px solid white;
            border-radius: 50%;

            -webkit-touch-callout: none;
            -khtml-user-select: none;
        }

        .backArrow:hover {
            background: rgba(255, 255, 255, .5);
        }

        .backArrow:active {
            position: relative;
            right: 2px;
        }
    </style>
</head>

<body>
    <div class="container" style="justify-content: left;" >

        <div title="Back to Menu" class="backArrow">

            <a href="ahome">&#10140;</a>
        </div>

    </div>
    
    <div class="profile-card">
        <div class="img">
            <img src="\user\images\profile.webp" oncontextmenu="return false">
        </div>
        <div class="caption">
            <h3>{{ session('user') }}</h3>
            <p>Senior App Developer</p>
            <div class="social-links">
                <a href="https://github.com/mihir183" target="_blank">
                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_cwqf5i6h.json"
                        background="transparent" speed="1" style="width: 60px; height: 60px;" loop autoplay>
                    </lottie-player>
                </a>
                <a href="https://codepen.io/" target="_blank">
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_UOeL1w.json"
                        background="transparent" speed="1" style="width: 60px; height: 60px;" loop autoplay>
                    </lottie-player>
                </a>
                <a href="https://www.linkedin.com/in/mihir-vaghela-6a24a8242/" target="_blank">
                    <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_0Cm1Y2.json"
                        background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay>
                    </lottie-player>
                </a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>
