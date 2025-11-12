<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" data-aos="zoom-in">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="enquiryForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" id="number" placeholder="Your Number" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                                required></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg rounded-pill">Send via WhatsApp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--  Modal Styles -->
<style>
    .modal-content {
        border-radius: 15px;
    }

    #enquiryForm input,
    #enquiryForm textarea {
        border-radius: 10px;
        border: 1px solid #198754;
        padding: 10px;
    }

    #enquiryForm input:focus,
    #enquiryForm textarea:focus {
        border-color: #25d366;
        box-shadow: 0 0 10px rgba(37, 211, 102, 0.5);
        outline: none;
    }

    .btn-success {
        background: linear-gradient(135deg, #25d366, #198754);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #198754, #128c7e);
        transform: scale(1.05);
    }
</style>

<!-- Modal JS to Send WhatsApp -->
<script>
    document.getElementById('enquiryForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let number = document.getElementById('number').value;
        let subject = document.getElementById('subject').value;
        let message = document.getElementById('message').value;

        let whatsappMessage = `*Enquiry Form Submission*\n\nName: ${name}\nEmail: ${email}\nNumber: ${number}\nSubject: ${subject}\nMessage: ${message}`;

        // Replace with your WhatsApp number (with country code)
        let whatsappNumber = "919810404460";
        let whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

        window.open(whatsappURL, '_blank');
    });
</script>

<!-- WhatsApp Script -->
<script>
    document.getElementById("whatsappBtn").addEventListener("click", function() {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        const phoneNumber = "919810404460"; // Your WhatsApp number (without +)

        if (name && email && message) {
            const whatsappURL = `https://wa.me/${phoneNumber}?text=*New%20Enquiry%20from%20Website*%0A%0A*Name:*%20${encodeURIComponent(name)}%0A*Email:*%20${encodeURIComponent(email)}%0A*Message:*%20${encodeURIComponent(message)}`;
            window.open(whatsappURL, "_blank");
        } else {
            alert("Please fill out all fields before sending your message.");
        }
    });
</script>

<!-- footer -->
<footer class="footer-section"
    style="background-color: #FAF3E0; padding: 60px 0; font-family: 'Poppins', sans-serif; color: #3E3E3E;">
    <div class="container">
        <div class="row">
            <!-- Brand Info -->
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <h5 class="footer-heading"
                    style="color: #8B5E3C; font-family: 'Playfair Display', serif; margin-bottom: 15px;">MS STUDIO
                    SMK</h5>
                <p class="footer-text" style="line-height: 1.6;">Crafting Quality Furniture with Passion and
                    Precision.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <h5 class="footer-heading" style="color: #8B5E3C; margin-bottom: 15px;">Quick Links</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="#" style="color: #4A7856; text-decoration: none; transition: color 0.3s;">Home</a>
                    </li>
                    <li><a href="#" style="color: #4A7856; text-decoration: none; transition: color 0.3s;">About</a>
                    </li>
                    <li><a href="#"
                            style="color: #4A7856; text-decoration: none; transition: color 0.3s;">Products</a></li>
                    <li><a href="#"
                            style="color: #4A7856; text-decoration: none; transition: color 0.3s;">Services</a></li>
                    <li><a href="#"
                            style="color: #4A7856; text-decoration: none; transition: color 0.3s;">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <h5 class="footer-heading" style="color: #8B5E3C; margin-bottom: 15px;">Contact Us</h5>
                <p class="footer-text" style="line-height: 1.6;">Plot No. B-19, Block-B, Sector-57, Noida, Gautam
                    Buddha Nagar, Uttar Pradesh, 201301</p>
                <p class="footer-text" style="line-height: 1.6;">Email: <a href="mailto:Info@studiosmk.com"
                        style="color: #4A7856;">Info@studiosmk.com</a> || <a href="mailto:Sudhir@studiosmk.com"
                        style="color: #4A7856;">Sudhir@studiosmk.com</a></p>
                <p class="footer-text" style="line-height: 1.6;">Phone: <a href="tel:+919810404460"
                        style="color: #4A7856;">+91 9810404460</a></p>
            </div>

            <!-- Newsletter -->
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="400">
                <h5 class="footer-heading" style="color: #8B5E3C; margin-bottom: 15px;">Newsletter</h5>
                <p class="footer-text" style="line-height: 1.6;">Subscribe to our newsletter for the latest
                    furniture trends and exclusive offers.</p>
                <form>
                    <div style="display: flex; width: 50%; max-width: 60%;">
                        <input type="email" placeholder="Your Email" max-width="50px"
                            style="padding:10px; flex: 1; border:1px solid #C19A6B; border-radius:4px 0 0 4px; box-sizing: border-box;">
                        <button type="submit"
                            style="background-color:#4A7856; color:#FAF3E0; border:none; padding:10px 20px; border-radius:0 4px 4px 0; cursor:pointer; transition: background 0.3s; box-sizing: border-box;">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom text-center mt-4" style="color: #3E3E3E; font-size: 14px;">
            &copy; 2025 MS Studio SMK. All Rights Reserved. <span>Design By <a
                    href="https://trade4export.com/">Trade4Export</a></span>
        </div>
    </div>
</footer>

<!-- Optional: AOS Library for Fade Animations -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

<!-- Hover Effect CSS -->
<style>
    .footer-links li a:hover {
        color: #8B5E3C;
    }

    .footer-section input:focus {
        outline: none;
        border-color: #8B5E3C;
        box-shadow: 0 0 5px rgba(139, 94, 60, 0.5);
    }

    .footer-section button:hover {
        background-color: #8B5E3C;
    }
</style>
<!-- JS for Accordion -->
<script>
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const icon = question.querySelector('.faq-icon');
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                icon.textContent = '+';
            } else {
                // Close all other answers
                document.querySelectorAll('.faq-answer').forEach(ans => ans.style.display = 'none');
                document.querySelectorAll('.faq-icon').forEach(ic => ic.textContent = '+');
                // Open clicked answer
                answer.style.display = 'block';
                icon.textContent = '-';
            }
        });
    });
</script>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>