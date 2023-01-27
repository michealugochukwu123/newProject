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
    <title>MASTER CODE-LOGIN PAGE</title>
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

        .holder {
            /* height: 80vh; */
            padding: 40px 0px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .yellow {
            width: 700px;
            height: 360px;
            background-color: var(--color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .black {
            height: 95%;
            width: 97%;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .oval {
            height: 50px;
            width: 100px;
            background-color: var(--bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo p {
            font-size: 20px;
        }

        .specialname {
            font-size: 30px;
            color: var(--color);
            color: var(--white);
            font-weight: bold;
        }

        .logo p {
            margin-bottom: 0px;
            margin-left: 10px;
            color: var(--white);
            font-size: 30px;
        }

        .input {
            margin-top: 20px;
            width: 70%;
            display: flex;
            flex-direction: column;
        }

        .input input {
            width: 100%;
            height: 40px;
            border: none;
            outline: none;
            margin: 5px;
            background: transparent;
            border-bottom: 1px solid var(--white);
            color: var(--white);
        }

        input:focus {
            border-bottom: 2px solid var(--color);
        }

        ::placeholder {
            font-family: li;
            font-size: 20px;
            color: var(--white);
        }

        .form_detail {
            width: 70%;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .fa-check-circle {
            color: var(--color);
            font-size: 30px;
        }

        .form_detail div:nth-child(1) {
            display: flex;
            align-items: center;
        }

        .form_detail div:nth-child(1) p {
            margin-left: 5px;
            margin-bottom: 0px;
            color: var(--white);
            font-family: li;
            font-size: 20px;
            text-transform: capitalize;
        }

        .form_detail div:nth-child(2) p {
            color: var(--white);
            font-family: li;
            font-size: 20px;
            text-transform: capitalize;
        }

        .btn {
            width: 70%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn button {
            height: 40px;
            width: 130px;
            text-transform: uppercase;
            border: none;
            outline: none;
            margin: 10px;
            font-family: li;
            font-weight: 300;
            border-radius: 5px;
        }

        button:nth-of-type(1) {
            background: var(--white);
            color: black;
            font-weight: 900;
        }

         button:nth-of-type(2) {
            background-color: transparent;
            color: var(--color);
            border: 1px solid var(--color);
        }
        button a{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: li;
            font-weight: 300;
            text-decoration: none;
        }
       
        

        @media(max-width:730px) {
            .yellow {
                width: 90%;
            }
        }

        @media(max-width:505px) {
            .yellow {
                width: 97%;
            }

            .input,
            .btn,
            .form_detail {
                width: 90%;
            }

        }

        @media(max-width:460px) {
            .form_detail div:nth-child(2) p {
                display: none;
            }

            .logo p {
                font-size: 18px;
            }

            .specialname {
                font-size: 23px;
            }
        }

        @media(max-width:245px) {
            .logo {
                flex-direction: column;
            }

            .btn {
                flex-direction: column;
            }

            .btn button {
                height: 40px;
                width: 130px;
                text-transform: uppercase;
                border: none;
                outline: none;
                margin: 10px;
                font-family: li;
                font-weight: 300;
                border-radius: 5px;

            }

            .yellow {
                height: fit-content;
                padding: 20px 0px;
            }

            .black {
                height: fit-content;
                padding: 40px 0px;
            }
        }
    </style>

    <section class="holder">
        <div class="yellow">
            <div class="black">
                <div class="logo">
                    <div class="oval specialname">MC</div>
                    <p class="specialname1">MASTER CODE</p>
                </div>
                <div class="input">
                    <input type="text" placeholder="Email Address">
                    <input type="text" placeholder="Password">
                </div>
                <div class="form_detail">
                    <div>
                        <i class="fas fa-check-circle"></i>
                        <p> Stay logged in</p>
                    </div>
                    <div>
                        <p>login with google</p>
                    </div>
                </div>
                <div class="btn">
                    <button>login</button>
                    
                        <button class="open">sign up</button>
                    
                </div>
            </div>
        </div>
    </section>
    <?php include('./include/footer.php') ?>


    <script>
        let btn = document.querySelector('.open')
        btn.onclick = ()=>{
            window.open('./reg.php','_self')
        }
    </script>







</body>

</html>