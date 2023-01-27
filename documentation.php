<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontanwome/fontawesome-6/css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/footer.css">
    
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Document</title>
</head>

<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
        .holder_box{
            height: 400px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section {
            height: 300px;
            width: 80%;
            overflow-y: auto;
        }

        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }
        .panel p{
            font-weight: 800;
            color: black;
            font-family: h1;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
            
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
            color: var(--color);
            font-size: 18px;
        }

        .active:after {
            content: "\2212";
            
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
        @media(max-width:450px){
            
        .section {
            height: 300px;
            width: 95%;
            overflow-y: auto;
        }

        }
    </style>



    <?php include('./include/nav.php') ?>

    <div class="holder_box">
        <section class="section">
            <button class="accordion">Section 1</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 2</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 3</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>
            <button class="accordion">Section 3</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>
            <button class="accordion">Section 3</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>
            <button class="accordion">Section 3</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>
            

        </section>
    </div>

    <?php include('./include/footer.php') ?>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }

        // FOR TOGGEL
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