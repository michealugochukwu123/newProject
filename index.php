<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontanwome/fontawesome-6/css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>MASTER CODE</title>
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
            background: #11272c;
        }

        

        /* FONT PAGE */
        .font {
            height: 400px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .write {
            margin-left: 100px;
        }

        .write h1 {
            font-weight: 300;
            font-size: 60px;
            color: white;
            font-family: h1;
        }

        .write p {
            color: white;
            font-size: 19px;
        }

        .btn_holder {
            display: flex;
            margin-top: 20px;
        }

        .btn_holder button {
            border-radius: 10px;
            background: var(--bg1);
            border: none;
            color: white;
            font-family: li;
            font-size: 19px;
            padding: 10px 50px;
        }

        .btn_holder div {
            display: flex;
            align-items: center;
            margin-left: 15px;
        }

        .btn_holder div i {
            font-size: 30px;
            color: var(--bg1);
        }

        .btn_holder div p {
            font-family: li;
        }

        @media(max-width:800px) {
            .write {
                margin-left: 50px;
            }
        }

        @media(max-width:500px) {
            .write {
                margin-left: 10px;
            }

            .write h1 {
                font-size: 40px;
            }
        }

        @media(max-width:330px) {
            .write {
                margin-left: 0;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .btn_holder {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .write h1 {
                font-size: 23px;
            }

            .write p {
                margin-top: 30px;
            }

            .btn_holder button {
                font-size: 19px;
                padding: 10px 0px;
                width: 90%;
                margin-top: 10px;
            }

            .btn_holder div {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: 0px;
                margin-top: 20px;
                width: 90%;
                padding: 10px 0px;
            }

            .btn_holder div p {
                margin-top: 0px;
            }

            .btn_holder div i {
                font-size: 23px;
            }

        }



        .course {
            height: 400px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .g {
            height: fit-content;
            width: fit-content;
            display: grid;
            grid-template-columns: repeat(3, 1fr)
        }

        .g_box {
            height: 300px;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px;
            text-align: center;
        }

        .g_box:hover {
            background-color: black;
            border-radius: 10px;
        }

        .g_box i {
            font-size: 40px;
            color: var(--bg1);
        }

        .g_box h6 {
            margin-top: 10px;
            font-family: h1;
            font-size: 30px;
            color: var(--bg1);
            font-weight: 100;
        }

        .g_box p {
            color: black;
            color: white;
            font-family: a;
            font-size: 20px;
            margin-top: 10px;
        }

        @media(max-width:985px) {
            .course {
                height: fit-content;
                padding: 30px 0px;
            }

            .g {

                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media(max-width:680px) {
            .g {

                grid-template-columns: repeat(1, 1fr)
            }
        }
        @media(max-width:380px){
            .g{
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .g_box{
                width: 90%;
            }
        }


        /* FOOTER */
        
    </style>

    <?php include('./include/nav.php') ?>

    <section class="font">
        <div class="write">
            <h1 class="">Welcome to Master Code</h1>
            <p>Master Code is an school for web developers, covering all the aspects of web development.
            </p>
            <div class="btn_holder">
                <a href="./login.php"><button>Get Start</button></a>
                <div>
                    <i class="fas fa-play-circle"></i>
                    <p>Watch videos</p>
                </div>
            </div>
        </div>
    </section>
    <section class="course">
        <div class="g">
            <div class="g_box">
                <i class="fas fa-check-circle"></i>
                <h6>Simple and free</h6>
                <p>Anyone can participate</p>
            </div>
            <div class="g_box">
                <i class="fas fa-users"></i>
                <h6>Rewarding Commisions</h6>
                <p>Get Points for every new friend that you invited</p>
            </div>
            <div class="g_box">
                <i class="fas fa-desktop"></i>
                <h6>Personalized Dashborde</h6>
                <p>You can ask question or answer another users question</p>
            </div>
        </div>
    </section>

    <?php include('./include/footer.php') ?>
    


    <script>

        let nav = document.querySelector('nav')
        let menu = document.querySelector('.menu')
        let themainnav = document.querySelector('.themainnav')

        nav.addEventListener('click', (e) => {
            const icon = e.target

            if (icon.classList.contains('fas')) {
                if (icon.classList.contains('fa-bars')) {
                    icon.classList.remove('fa-bars')
                    icon.classList.add('fa-times')
                    menu.classList.add('active')
                    themainnav.classList.add('active')
                } else {
                    icon.classList.add('fa-bars')
                    icon.classList.remove('fa-times')
                    menu.classList.remove('active')
                    themainnav.classList.remove('active')
                }
            }
        })

    </script>


</body>

</html>