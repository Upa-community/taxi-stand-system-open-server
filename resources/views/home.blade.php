<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JamWatch</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h2 class="pt-2 text-white">JamWatch</h2>
            </a>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#congestion">Congestion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visualization">Visualization</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#weather">Weather</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#map">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">JamWatch 2023</h1>
                    <p class="text-white my-3">
                        全国のタクシー乗り場の情報を可視化して</br>利用者数の予測を行います。
                        
                    </p>
                    <a href="" class="btn btn-outline-light m-2">
                        <i class='bx bxl-github icon'></i>
                        GitHub
                    </a>
                    <a href="" class="btn btn-outline-light m-2">
                        <i class='bx bxl-twitter icon'></i>
                        Twitter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Services section -->
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="title">About</h6>
                    <h1>ダッシュボード</h1>
                    <p>
                    タクシー乗り場の情報を提供します。
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-sm-6" id="congestion">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-devices'></i>
                        </div>
                        <h5 class="mt-4 mb-2">混雑度</h5>
                        <p>
                            グラフで可視化します。
                        </p>
                        <a href="http://open.shonan.bunkyo.ac.jp/~kawai/">Official Site</a>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6" id="visualization">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bx-bar-chart-alt-2' ></i>
                        </div>
                        <h5 class="mt-4 mb-2">記録</h5>
                        <p>
                        グラフで可視化します。
                        </p>
                        <a href="https://github.com/projectd-team14">GitHub Repository</a>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6" id="weather">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-map-pin'></i>
                        </div>
                        <h5 class="mt-4 mb-2">天気</h5>
                        <p>
                            外部のAPiから取得します。
                        </p>
                        <a href="https://github.com/plateau-system">GitHub Repository</a>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6" id="map">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bx-palette'></i>
                        </div>
                        <h5 class="mt-4 mb-2">地図</h5>
                        <p>
                            Google MapかLeafletで表示します。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact" class="bg-light">
        <div class="container">
            <div class="row mb-4 ">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="title">Contact</h6>
                    <h1>お問い合わせ</h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere
                        itaque illum quo fugit, molestiae vero.
                    </p>
                </div>
            </div>

            <form action="" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter E-mail">
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-10">
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button class="btn btn-primary contact">Contact</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <h4 class="text-white">フッター</h4>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-white">Brand</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-white">More</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">FAQ&'s</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Warrantry</a></li>
                            <li><a href="#">Shipment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700;900&family=Sora:wght@400;700&display=swap");

    :root {
        --primary: #ff1493;
        --dark: #21252f;
        --body: #888;
        /* --orange: rgb(221, 155, 94); */
        --box-shadow: 0 8px 22px rgba(0, 0, 0, 0.2);
    }

    body {
        font-family: Sora, "sans-serif";
        line-height: 1.7;
        color: var(--body);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .display-4 {
        color: var(--dark);
        font-weight: 700;
    }

    a {
        color: var(--dark);
        text-decoration: none;
    }

    img {
        width: 100%;
    }

    .navbar {
        box-shadow: var(--box-shadow);
        background-color: #ff1493;
    }

    .logo {
        width: 160px;
    }

    .navbar .nav-link {
        font-size: 14px;
        font-weight: 700;
    }

    .navbar .nav-link {
        color: #fff !important;
    }

    .title {
        color: #ff1493;
    }

    .btn {
        padding: 14px 18px;
        border-width: 2px;
        border-radius: 0;
    }

    .hero {
        background-image: url(./images/home.jpg);
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        position: relative;
        z-index: 2;
    }

    .hero::after {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(37, 39, 71, 0.8);
        z-index: -1;
    }

    section {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .card-effect {
        box-shadow: var(--box-shadow);
        background-color: #fff;
        padding: 25px;
        transition: all 0.35s ease;
    }

    .card-effect:hover {
        box-shadow: none;
        transform: translateY(5px);
    }

    .icon {
        color: white;
        font-size: 32px;
        border-radius: 100px;
    }

    .iconbox {
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--primary);
        color: white;
        font-size: 32px;
        border-radius: 100px;
        flex: none;
    }

    .about {
        position: relative;
        z-index: 2;
        overflow: hidden;
    }
    .about::after {
        content: "";
        position: absolute;
        top: -100%;
        left: 0;
        background-color: var(--primary);
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0;
        transition: all 0.4s ease;
    }

    .about:hover h5,
    .about:hover p {
        color: white;
    }

    .about:hover .iconbox {
        background-color: #fff;
        color: var(--primary);
    }

    .about:hover::after {
        opacity: 1;
        top: 0;
    }

    /* development section */
    .col-img {
        background-image: url(/img/cover2.jpg);
        background-position: center;
        background-size: cover;
        min-height: 500px;
    }

    .social-icons {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-icons a {
        width: 34px;
        height: 34px;
        background-color: var(--primary);
        border: 2px solid var(--primary);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px;
        margin-left: 5px;
        transition: all 0.4s ease;
    }

    .social-icons a:hover {
        color: var(--primary);
        background-color: transparent;
    }

    form input.form-control {
        height: 56px;
    }

    form .form-control {
        border: transparent;
        border-radius: 0;
        background-color: rgba(0, 0, 0, 0.04);
    }

    .footer-top {
        padding-bottom: 90px;
        padding: 90px;
        background-color: var(--dark);
    }

    .footer-top a {
        color: var(--body);
    }

    .footer-top a:hover {
        color: #fff;
    }

    .navbar-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        border-color: white;
    }

    .contact {
        background-color: #ff1493;
        border-width: 0px;
    }
</style>
</html>