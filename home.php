<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontanwome/fontawesome-6/css/all.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <title>MASTER CODE-HOME PAGE</title>
</head>

<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        :root {
            --color: rgb(236, 111, 9);
            --bg: #11272c;
            --back: black;
            --white: white;
            --bg1: #317786;
        }

        body {
            /* background: #11272c; */
        }

        nav {
            height: 50px;
            background: #11272c;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .icon {
            display: none;
        }

        .icon i {
            font-size: 30px;
            color: var(--bg1);
            margin-left: 10px;
        }

        nav .menu {
            display: flex;
        }

        nav .menu a {
            margin-left: 60px;
            text-transform: uppercase;
            color: var(--bg1);
            font-family: li;
        }

        .profile {
            margin-right: 40px;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .profile i {
            font-size: 25px;
            margin-right: 5px;
            color: var(--bg1);
        }

        .profile p {
            font-size: 22px;
            color: var(--bg1);
            font-weight: 700;
            margin-bottom: -10px;
            margin-right: 5px;
        }

        .thenav {
            padding: 40px 0px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
        }



        .thenav .menu {
            display: flex;
            flex-direction: column;
        }

        .thenav .menu a {
            font-size: 20px;
            text-transform: uppercase;
            margin: 10px;
            color: var(--bg1);
            font-family: li;
        }

        @media(max-width:570px) {
            nav .menu a {
                margin-left: 20px;
            }
        }

        @media(max-width:570px) {
            nav .menu a {
                margin-left: 20px;
            }
        }

        @media(max-width:240px) {
            .profile {
                margin-right: 0px;
            }
            .profile i{
                font-size:18px;
            }
            .profile p{
                font-size: 17px;
                margin-bottom: 0px;
            }
            .icon i{
                font-size: 19px;
            }



        }

        @media(max-width:450px) {
            .icon {
                display: flex;
            }

            nav .menu {
                display: none;
            }

            .thenav.active {
                display: flex;
                background: var(--bg);
            }


        }

        .holder {
            width: 100%;
            padding: 50px 0px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .g {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .box {
            width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 20px;
            text-align: center;
        }

        .box i {
            margin-bottom: 20px;
            font-size: 40px;
            color: var(--bg);
        }

        .box p {
            margin-top: 10px;
            color: black;
            font-weight: 900;
            font-family: li;
            font-size: 20px;
        }

        .box h1 {
            font-family: h1;
        }

        .box button {
            margin-top: 10px;
            width: 200px;
            height: 40px;
            background-color: var(--bg);
            border: none;
            border-radius: 5px;
            color: white;
            font-family:p ;
            font-size: 18px;
        }


        @media(max-width:1030px) {
            .g {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width:700px) {
            .g {
                grid-template-columns: repeat(1, 1fr);
            }

            .box {
                width: 400px;
            }
        }

        @media(max-width:450px) {
            .g {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .box {
                width: 95%;
            }

            .box button {
                width: 80%;
            }
        }

        @media(max-width:280px) {
            .box h1 {
                font-size: 18px;
            }
        }
    </style>

    <nav>
        <div class="icon">
            <i class="fas fa-bars"></i>
        </div>
        <div class="menu">
            <a href="">home</a>
            <a href="">example</a>
            <a href="">source code</a>
        </div>
        <div class="profile">
            <i class="fas fa-user"></i>
            <p>micheal</p>
        </div>
    </nav>
    <div class="thenav">
        <div class="menu">
            <a href="">home</a>
            <a href="">example</a>
            <a href="">source code</a>
        </div>
    </div>
    <section class="holder">
        <div class="g">
            <div class="box">
                <i class="fas fa-e"></i>
                <h1 class="">EXAMPLE</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium</p>
                <button>VIEW</button>
            </div>
            <div class="box">
                <i class="fas fa-book"></i>
                <h1 class="">DOCUMENTATION</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium</p>
                <button>VIEW</button>
            </div>
            <div class="box">
                <i class="fas fa-download"></i>
                <h1 class="">SOURCE CODE</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium</p>
                <button>VIEW</button>
            </div>
            <div class="box">
                <i class="fas fa-b"></i>
                <h1 class="">MC BOOTSTRAP</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium</p>
                <button>VIEW</button>
            </div>
            <div class="box">
                <i class="fas fa-c"></i>
                <h1 class="">CODE CHALLENGE</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium</p>
                <button>VIEW</button>
            </div>
            <div class="box">
                <i class="fas fa-c"></i>
                <h1 class="">CODE CHALLENGE RESULT</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium</p>
                <button>VIEW</button>
            </div>
        </div>
    </section>

    <?php include('./include/footer.php') ?>




    <script>
        let nav = document.querySelector('nav')
        let thenav = document.querySelector('.thenav')
        nav.addEventListener('click', (e) => {
            const icon = e.target
            if (icon.classList.contains('fas')) {
                if (icon.classList.contains('fa-bars')) {
                    icon.classList.remove('fa-bars')
                    icon.classList.add('fa-times')
                    thenav.classList.add('active')
                } else {
                    icon.classList.add('fa-bars')
                    icon.classList.remove('fa-times')
                    thenav.classList.remove('active')
                }
            }
        })

    </script>

</body>

</html>