<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MS STUDIO SMK - Home Page</title>
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
                    <li class="breadcrumb-item active text-warning" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- about us seections -->
    <div class="container-fluid py-5 " data-aos="zoom-out" style="background-color: #FFF9EF;">
        <div class="container">
            <h2 class="text-center" data-aos="zoom-in">About Us</h2>
            <p class="text-center" data-aos="flip-right" data-aos-delay="500" data-aos-duration="1200">
                Welcome to <strong>MS STUDIO SMK
                </strong>, your trusted destination for beautifully crafted furniture that brings comfort, style, and
                durability to your space.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 " data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                            <img src="assets/img/Dining_table.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="col-md-6 " data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <h2 class="h2_color">Our MS STUDIO SMK</h2>
                            <p>
                                Welcome to MS STUDIO SMK, your trusted partner in crafting exquisite furniture that
                                transforms spaces into works of art. With a legacy of craftsmanship and a passion for
                                design, we specialize in creating bespoke furniture pieces that blend functionality with
                                timeless elegance.
                            </p>
                            <p>
                                At MS STUDIO SMK, we believe that furniture is more than just utilitarian objects; they
                                are expressions of personality and style. Our team of skilled artisans and designers
                                work
                                closely with clients to bring their visions to life, ensuring every piece is a perfect
                                reflection of their unique taste and lifestyle.
                            </p>
                            <p>
                                From concept to creation, we prioritize quality, sustainability, and attention to
                                detail.
                                Explore our diverse range of furniture collections or collaborate with us for custom
                                designs that elevate your living or working environment.
                            </p>
                            <ul>
                                <li>Affordable Luxury</li>
                                <li>Sustainable Approach</li>
                                <li>Customer First</li>
                            </ul>
                            <button class="about-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php include('footer.php') ?>