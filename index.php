<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid bg-primary">
            <div class="d-flex align-items-center justify-content-evenly collapse navbar-collapse mx-5">
                    <a href="index.php" class="navbar-brand fw-medium fs-1 text-light">Surway</a>

                    <ul class="navbar-nav ">
                        <li class="nav-item"><a href="index.php" class="nav-link text-light">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-light">Blog</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-light">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-light">About</a></li>
                    </ul>

                    <div style="grid-template-columns: 1fr 1fr;" class="d-grid gap-3">
                        <a href="register.html" class="btn btn-outline-light ">Sign Up</a>
                        <a href="login.html" class="btn btn-success">Sign In</a>
                    </div>
                </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <section>
        <div class="container mx-auto my-5">
            <!-- Row 1 -->
            <div class="row d-flex align-items-center justify-content-evenly">
                <!-- Product 1 -->
                <div class="card mb-3 col" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded start p-1" src="asset\img\Sony-WH-CH720N-Blue.jpg" alt="Headphone">
                        </div>

                        <div class="col-md-8 text-center">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sony-WH-CH720N - Blue</h5>
                                <p class="card-text">Wireless Headphones <br> หูฟังไร้สาย ตัดเสียงรบกวน</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                            </div>
                            <div class="text-center">
                                <div class="card-body">
                                    <button class="btn btn-danger w-25">Cancel</button>
                                    <button class="btn btn-primary w-25">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product 1 -->


                <!-- Product 2 -->
                <div class="card mb-3 col" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded start p-1" src="asset\img\Sony-WH-CH720N-White.jpg" alt="Headphone">
                        </div>

                        <div class="col-md-8 text-center">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sony-WH-CH720N - White</h5>
                                <p class="card-text">Wireless Headphones <br> หูฟังไร้สาย ตัดเสียงรบกวน</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                            </div>
                            <div class="text-center">
                                <div class="card-body">
                                    <button class="btn btn-danger w-25">Cancel</button>
                                    <button class="btn btn-primary w-25">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product 2 -->
            </div>
            <!-- End of First Row -->

                <!-- Row 2 -->
            <div class="row d-flex align-items-center justify-content-evenly">
                <!-- Product 1 -->
                <div class="card mb-3 col" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded start p-1" src="asset\img\Sony-WH-CH720N-White.jpg" alt="Headphone">
                        </div>

                        <div class="col-md-8 text-center">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sony-WH-CH720N - White</h5>
                                <p class="card-text">Wireless Headphones <br> หูฟังไร้สาย ตัดเสียงรบกวน</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                            </div>
                            <div class="text-center">
                                <div class="card-body">
                                    <button class="btn btn-danger w-25">Cancel</button>
                                    <button class="btn btn-primary w-25">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product 1 -->


                <!-- Product 2 -->
                <div class="card mb-3 col" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded start p-1" src="asset\img\Sony-WH-CH720N-Blue.jpg" alt="Headphone">
                        </div>

                        <div class="col-md-8 text-center">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sony-WH-CH720N - Blue</h5>
                                <p class="card-text">Wireless Headphones <br> หูฟังไร้สาย ตัดเสียงรบกวน</p>
                                <input type="color" name="blue" id="" class="rounded-circle color" style="width: 24px; height: 24px; border: none;">
                                <input type="color" name="white" id="" class="rounded-5 color" style="width: 24px; height: 24px; border: none;">
                                <input type="color" name="black" id="" class="rounded-5 color" style="width: 24px; height: 24px; border: none;">
                                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                            </div>
                            <div class="text-center">
                                <div class="card-body">
                                    <button class="btn btn-danger w-25">Cancel</button>
                                    <button class="btn btn-primary w-25">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product 2 -->
            </div>
            <!-- End of Second Row -->

                <!-- Row 3 -->
            <div class="row d-flex align-items-center justify-content-evenly">
                <!-- Product 1 -->
                <div class="card mb-3 col" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded start p-1" src="asset\img\Sony-WH-CH720N-Black.jpg" alt="Headphone">
                        </div>

                        <div class="col-md-8 text-center">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sony-WH-CH720N - Black</h5>
                                <p class="card-text">Wireless Headphones <br> หูฟังไร้สาย ตัดเสียงรบกวน</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                            </div>
                            <div class="text-center">
                                <div class="card-body">
                                    <button class="btn btn-danger w-25">Cancel</button>
                                    <button class="btn btn-primary w-25">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product 1 -->


                <!-- Product 2 -->
                <div class="card mb-3 col" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded start p-1" src="asset\img\Sony-WH-CH720N-White.jpg" alt="Headphone">
                        </div>

                        <div class="col-md-8 text-center">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sony-WH-CH720N - White</h5>
                                <p class="card-text">Wireless Headphones <br> หูฟังไร้สาย ตัดเสียงรบกวน</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                            </div>
                            <div class="text-center">
                                <div class="card-body">
                                    <button class="btn btn-danger w-25">Cancel</button>
                                    <button class="btn btn-primary w-25">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product 2 -->
            </div>
            <!-- End of Third Row -->
            </div>
            <!-- End of Product-card-container -->
    </section>

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="asset/js/script.js"></script>
</body>
</html>