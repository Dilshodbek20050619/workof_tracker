<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0ebeb;
        }

        .main {
            background-color: cadetblue;
        }

        .img {

            width: 100px;
            border-radius: 50%;
        }



        .container-fluid {
            background-color: yellowgreen;
            border-radius: 10px;
        }

        .bacround {
            padding-top: 150px;
            padding-left: 80px;
            height: 600px;
            background-size: cover;
            background-image: url('https://topaddress.ae/wp-content/uploads/2023/03/WhatsApp-Image-2023-03-31-at-23.30.55-1-1200x675.webp');

        }

        .text-t {
            color: green;
            padding-left: 250px;
        }

        #hello {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: burlywood;
        }

        /* #hello div{
            display:block;
        } */
        .main0 {
            width: 1000px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f5e7e6;
        }

        .main1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .box-img {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .img1 img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 150px;

        }

        .img2 img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
        }

        .box-text {
            margin-top: 50px;
            margin-left: 50px;
        }

        .box-text h6 {
            color: greenyellow;
        }

        .main2 {
            background-image: url('https://www.tooplate.com/screenshots-720/template-2133-moso-interior.jpg');
            height: 500px;
            padding-top: 50px;
            padding-left: 50px;

        }

        .time {
            /* border: 1px solid black; */
            padding-top: 5px;
            padding-left: 5px;
            border-radius: 10px;
            width: 400px;
            height: 200px;
            background-color: whitesmoke;
        }

        .time2 p {
            font-size: small;
            margin-left: 50px;
        }

        .time1 h1 {
            margin-top: 50px;
            margin-left: 20px;
            font-size: 24px;
        }

        .img_1 img {
            padding-top: 20px;
            width: 500px;
            height: 300px;
            padding-left: 50px;
            border-radius: 10px;
        }

        .img_2 img {
            width: 500px;
            height: 300px;
            padding-right: 50px;
        }

        .main3_1 {
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .text_1 h3 {
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <div class="main">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="img,border:50%">
                            <a class="navbar-brand" href="#"><img class="img border:50%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoqBYhbsETYesG3zh4-lsBKyv9KkW85pm3cA&s" alt="png"></a>

                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Shop
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div>

        </div>
        <div class="bacround">

            <div class="text-t">
                <h6>Welocome to Moso Interior</h6>
            </div>
            <h1>Decorate a beatiful interior
                for your space
            </h1>
            <!-- <div class="modal-body">
                <form class="card p-4" method="" id="hello">
                    <div class="mb-4">
                        <input type="text" class="form-control " name="name" id="name">
                    </div>
                    <div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Price</option>
                            <option value="1">$500-$900</option>
                            <option value="2">$1000-$1200</option>
                            <option value="2">$1300-$1500</option>
                            <option value="2">$1600-$1800</option>


                        </select>
                    </div>
                    <div class="mb-4">
                        <button>Search</button>
                    </div>
                </form>
            </div> -->

            <div class="main0">
                <div class="box_1">
                    <div>
                        <input type="text" class="form-control " name="name" id="name">
                    </div>
                </div>
                <div class="box_2">
                    <div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Price</option>
                            <option value="1">$500-$900</option>
                            <option value="2">$1000-$1200</option>
                            <option value="2">$1300-$1500</option>
                            <option value="2">$1600-$1800</option>


                        </select>
                    </div>
                </div>
                <div class="box_3">
                    <div>
                        <button>Search</button>
                    </div>
                </div>






            </div>


        </div>

        <div class="main1">
            <div class="box-text">
                <h6>Our Story</h6>
                <h2>Indoructing Moso</h2>
                <h3>Since 1986,We crafed interior products for better spaces</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ab aperiam, officiis nobis atque, nesciunt eum voluptatibus deleniti earum adipisci quas itaque accusamus consectetur? Dolor obcaecati odio mollitia accusantium nam.</p>

            </div>
            <div class="box-img">
                <div class="img1">
                    <img src="https://cdn.vseinstrumenti.ru/images/goods/stroitelnye-materialy/otdelochnye-materialy/4996176/1200x800/64812678.jpg" alt="jpg">
                </div>
                <div class="img2">
                    <img src="https://i.pinimg.com/736x/97/8d/e6/978de6579f993adea9b3382a85bb737f.jpg" alt="jpg">

                </div>
            </div>
        </div>

        <div class="main2">
            <div class="time">
                <div class="time1">
                    <h1>Opening Hours</h1>
                </div>
                <div class="time2">
                    <p>Monday-Friday-> <strong>8:00 AM 6:00 PM</strong></p>
                    <p>Saturday-> <strong>10:00 AM 10:00 PM</strong></p>
                    <p>Sunday->Closed</p>
                </div>

            </div>

        </div>
        <div class="main3">
            <div class="main3_1">
                <div class="img_1">
                    <img src="https://i.pinimg.com/originals/9a/16/a3/9a16a3173431f57c3ee7d0f5e1a33d9f.jpg" alt="jpg">
                    <div class="text_1">
                        <h3>Bathroom</h3>
                    </div>
                </div>
                <div class="img_1">
                    <img src="https://i.pinimg.com/originals/35/b0/e9/35b0e9e0ceef2751286ac76f38b36be2.jpg" alt="jpg">

                    <div class="text_1">
                        <h3>Dinign</h3>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>