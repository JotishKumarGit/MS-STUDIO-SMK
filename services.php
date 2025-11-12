<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MS STUDIO SMK - Services Page</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>


    <!-- bread crum -->
    <div class="container-fluid py-5 position-relative" style="height: 200px; background-image: url('assets/img/Dining_table.jpeg'); background-size: cover; background-position: center;">
        <!-- Dark overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

        <!-- Breadcrumb content -->
        <div class="container position-relative" style="z-index: 1;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-warning" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- services -->
       <div class="container-fluid py-5 " style="background-color: #FFF9EF;">
        <div class="container">
            <h2 class="text-center" data-aos="zoom-in">Our Services</h2>
            <p class="text-center" data-aos="flip-right" data-aos-delay="500" data-aos-duration="1200">We offer a wide
                range of furniture solutions tailored to meet your home and office needs. From design consultation to
                delivery and installation, our services ensure comfort, quality, and style in every corner of your
                space.</p>
            <div class="row justify-content-center">
                <!-- 1 -->
                <div class="col-md-4 mb-2">
                    <div class="service-box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <i class="bi bi-pencil-square service-icon"></i> <!-- changed icon for design -->
                        <h4 class="service-title">Custom Furniture Design</h4>
                        <p class="service-description" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1200">
                            Get furniture tailored to your style and space. Our experts create unique designs that
                            perfectly fit your home and needs.
                        </p>
                        <button><a href="contact.php" class="text-white text-decoration-none">Read More</a></button>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-md-4 mb-2">
                    <div class="service-box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <i class="bi bi-truck service-icon"></i> <!-- delivery icon -->
                        <h4 class="service-title">Home Delivery</h4>
                        <p class="service-description" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1200">
                            Fast and reliable delivery straight to your doorstep. We ensure your furniture arrives
                            safely and on time.
                        </p>
                           <button><a href="contact.php" class="text-white text-decoration-none">Read More</a></button>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-md-4 mb-2">
                    <div class="service-box" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <i class="bi bi-tools service-icon"></i> <!-- tools icon -->
                        <h4 class="service-title">Assembly & Installation</h4>
                        <p class="service-description" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1200">
                            Professional assembly and setup of your furniture for a perfect fit. Hassle-free
                            installation right at your home.
                        </p>
                           <button><a href="contact.php" class="text-white text-decoration-none">Read More</a></button>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-md-4 mb-2">
                    <div class="service-box" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <i class="bi bi-wrench service-icon"></i> <!-- wrench icon for repair -->
                        <h4 class="service-title">Furniture Repair & Maintenance</h4>
                        <p class="service-description" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1200">
                            Keep your furniture in perfect condition with our expert repair and maintenance services. We
                            fix damages and ensure long-lasting quality.
                        </p>
                           <button><a href="contact.php" class="text-white text-decoration-none">Read More</a></button>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-md-4 mb-2">
                    <div class="service-box" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <i class="bi bi-brush service-icon"></i> <!-- brush icon for interior/design -->
                        <h4 class="service-title">Interior Consultation</h4>
                        <p class="service-description" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1200">
                            Get expert advice on furniture layout and home décor. We help you create a stylish and
                            functional living space.
                        </p>
                         <button><a href="contact.php" class="text-white text-decoration-none">Read More</a></button>
                    </div>
                </div>

                <!-- 6 -->
                <div class="col-md-4 mb-2">
                    <div class="service-box" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                        <i class="bi bi-palette service-icon"></i> <!-- palette icon for materials/fabrics -->
                        <h4 class="service-title">Material & Fabric Selection</h4>
                        <p class="service-description" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1200">
                            Choose the perfect wood, upholstery, and finishes for your furniture. We guide you to select
                            materials that match style and durability.
                        </p>
                           <button><a href="contact.php" class="text-white text-decoration-none">Read More</a></button>
                    </div>
                </div>

                <!-- 7 -->
                <div class="col-md-4 mb-2">
                    <div class="service-box" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                        <i class="bi bi-shield-check service-icon"></i> <!-- shield icon for warranty/support -->
                        <h4 class="service-title">Warranty & Support</h4>
                        <p class="service-description" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1200">
                            Enjoy peace of mind with our warranty and dedicated support. We ensure your furniture stays
                            protected and maintained.
                        </p>
                           <button><a href="contact.php" class="text-white text-decoration-none">Read More</a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>