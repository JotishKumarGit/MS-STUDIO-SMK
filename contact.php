<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MS STUDIO SMK - Contact Page</title>
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
                    <li class="breadcrumb-item active text-warning" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- contact us form -->
    <div class="container-fluid py-5" style="background-color: #F1E4CF;">
        <div class="container">
            <h2 class="text-center" data-aos="zoom-in"
                style="color: #8B5E3C; font-family: 'Playfair Display', serif; margin-bottom: 20px;">
                Contact Us
            </h2>
            <p class="text-dark text-center" style="color: #3E3E3E; max-width: 700px; margin: 0 auto 40px auto;">
                Get in touch with us for inquiries, support, or custom furniture requests. Complete the form and our
                experts will respond as soon as possible.
            </p>

            <div class="row justify-content-center g-4 align-items-center">
                <!-- Left Side: Map -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.853125633632!2d77.3528560745717!3d28.60418268536923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce56d32abea3b%3A0xb7a79ca2cb4aa9f7!2sB-19%2C%20Block%20B%2C%20Sector%2057%2C%20Noida%2C%20Uttar%20Pradesh%20201309!5e0!3m2!1sen!2sin!4v1762760969878!5m2!1sen!2sin"
                        width="100%" height="400" style="border:0; border-radius: 8px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="col-md-6">
                    <form id="contactForm"
                        style="background-color: #FAF3E0; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <div class="mb-3">
                            <label for="name" class="form-label" style="color: #4A7856; font-weight: 600;">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                style="border: 1px solid #C19A6B;">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"
                                style="color: #4A7856; font-weight: 600;">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                style="border: 1px solid #C19A6B;">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label"
                                style="color: #4A7856; font-weight: 600;">Phone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number"
                                style="border: 1px solid #C19A6B;">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label"
                                style="color: #4A7856; font-weight: 600;">Message</label>
                            <textarea class="form-control" id="message" rows="5"
                                placeholder="Write your message here..." style="border: 1px solid #C19A6B;"></textarea>
                        </div>
                        <button type="button" id="whatsappBtn" class="btn"
                            style="background-color: #4A7856; color: #FAF3E0; font-weight: 600; width: 100%;">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>