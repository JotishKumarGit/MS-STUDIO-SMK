<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MS STUDIO SMK - Blog Page</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

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
                    <li class="breadcrumb-item active text-warning" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>


   <!-- blog sections  -->
   <div class="container-fluid py-5 bg-light">
    <div class="container">
        <!-- Section Header -->
        <h2 class="text-center mb-4" data-aos="zoom-in">Our Blog & Insights</h2>
        <p class="text-center mb-5" data-aos="flip-right" data-aos-delay="500" data-aos-duration="1200">
            Discover the latest updates, tips, and stories from our world of premium furniture and home decor. 
            Learn about our products, trends, and expert advice to elevate your living and workspace.
        </p>

        <!-- Blog Cards -->
        <div class="row g-4">

            <!-- Sofa Blog Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;">
                    <img src="assets/img/Sofa.jpeg" class="card-img-top" alt="Luxury Sofa" style="height:250px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Sofa Trends 2025</h5>
                        <p class="card-text">Explore the latest designs in sofas combining comfort, style, and durability for your living room.</p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Mirror Blog Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;">
                    <img src="assets/img/Mirror.jpeg" class="card-img-top" alt="Elegant Mirror" style="height:250px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Decorative Mirrors for Every Room</h5>
                        <p class="card-text">Discover how mirrors can enhance the aesthetic and spatial feel of your interiors with style.</p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Dining Table Blog Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;">
                    <img src="assets/img/Dining_table.jpeg" class="card-img-top" alt="Modern Dining Table" style="height:250px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Choosing the Perfect Dining Table</h5>
                        <p class="card-text">Tips and ideas for selecting dining tables that fit your space, style, and family needs perfectly.</p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .card:hover {
        transform: translateY(-10px) scale(1.03);
        transition: transform 0.3s ease-in-out;
    }
    .card-title {
        font-weight: 600;
    }
    .card-text {
        font-size: 0.95rem;
        color: #555;
    }
</style>
   

    <!-- footer -->
    <?php include('footer.php') ?>