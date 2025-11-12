<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MS STUDIO SMK - Console Table</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


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

    <!-- bread crum  -->
    <div class="container-fluid py-5 position-relative" style="height: 200px; background-image: url('assets/img/Dining_table.jpeg'); background-size: cover; background-position: center;">
        <!-- Dark overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

        <!-- Breadcrumb content -->
        <div class="container position-relative" style="z-index: 1;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-warning" aria-current="page">Console Table</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- pro details -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <!-- Section Header -->
            <h2 class="text-center mb-4" data-aos="zoom-in">Our Product Details</h2>
            <p class="text-center mb-5" data-aos="flip-right" data-aos-delay="500" data-aos-duration="1200">
                Explore our premium range of furniture crafted for style, durability, and comfort. Each product is designed to enhance your space beautifully.
            </p>

            <!-- Product Row -->
            <div class="row align-items-center g-4">
                <!-- Product Image -->
                <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/img/Console_table.jpeg" class="img-fluid rounded shadow" alt="Console Table" style="width:100%; object-fit:cover;">
                </div>

                <!-- Product Details -->
                <div class="col-lg-6 col-md-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="p-3">
                        <h2 class="mb-3" data-aos="zoom-in" data-aos-delay="200">Console Table</h2>
                        <p data-aos="fade-up" data-aos-delay="400">
                            Our Console Table is a perfect blend of elegance and functionality. Ideal for your living room or hallway, it adds sophistication while providing practical storage space.
                        </p>
                        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="600">
                            <li>✔ Crafted from premium quality wood</li>
                            <li>✔ Sleek, modern design with sturdy construction</li>
                            <li>✔ Perfect for decor display or storage</li>
                        </ul>
                        <div class=" mt-4" data-aos="fade-up" data-aos-delay="800">
                            <a href="" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-primary btn-lg rounded-pill">Enquiry Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>