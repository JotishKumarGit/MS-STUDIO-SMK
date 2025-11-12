<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS STUDIO SMK - Table Lamp</title>

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <style>
        img.img-fluid:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        ul li {
            margin-bottom: 10px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .btn-primary:hover {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
            transition: 0.3s;
        }
    </style>
</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- breadcrumb -->
    <div class="container-fluid py-5 position-relative" style="height: 200px; background-image: url('assets/img/Table_lamp.jpeg'); background-size: cover; background-position: center;">
        <!-- Dark overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

        <!-- Breadcrumb content -->
        <div class="container position-relative" style="z-index: 1;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-warning" aria-current="page">Table Lamp</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Product Details -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <!-- Section Header -->
            <h2 class="text-center mb-4" data-aos="zoom-in">Our Table Lamp Collection</h2>
            <p class="text-center mb-5" data-aos="flip-right" data-aos-delay="500" data-aos-duration="1200">
                Explore our stylish Table Lamps designed to brighten your space while adding elegance and style.
            </p>

            <!-- Product 1 -->
            <div class="row align-items-center g-4 mb-5">
                <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/img/Table_lamp.jpeg" class="img-fluid rounded shadow" alt="Modern Table Lamp" style="width:100%; object-fit:cover;">
                </div>
                <div class="col-lg-6 col-md-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="p-3">
                        <h2 class="mb-3" data-aos="zoom-in" data-aos-delay="200">Modern Table Lamp</h2>
                        <p data-aos="fade-up" data-aos-delay="400">
                            This Modern Table Lamp adds a touch of sophistication and functional lighting to any room. Perfect for study desks, living rooms, or bedside tables.
                        </p>
                        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="600">
                            <li>✔ Premium quality material with durable finish</li>
                            <li>✔ Sleek and contemporary design</li>
                            <li>✔ Soft and adjustable lighting</li>
                            <li>✔ Ideal for decor and practical use</li>
                        </ul>
                        <div class="mt-4" data-aos="fade-up" data-aos-delay="800">
                            <a href="" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-primary btn-lg rounded-pill">Enquiry Now</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>


