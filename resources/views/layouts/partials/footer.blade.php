<footer id="footer" class="footer" style="background-color: #0d6efd; padding: 20px 0;">
    <!-- Main Footer Section -->
    <div class="footer-main d-flex flex-column align-items-center">
        <div class="container d-flex flex-wrap justify-content-between align-items-start">
            <!-- Quick Links -->
            <div class="col-lg-4 col-md-4 footer-widget text-center d-flex flex-column align-items-left">
    <h3 class="widget-title" style="color: #e9d349; font-size: 16px; text-align: justify;">Quick Links</h3>
    <ul style="list-style: none; padding: 0; margin: 0; font-size: 14px; color: #fcfbfb; text-align: justify;">
        <li>
            <a href="#" class="quick-link" style="color: #fcfbfb; text-decoration: none;">Latest News</a>
        </li>
        <li>
            <a href="#" class="quick-link" style="color: #fcfbfb; text-decoration: none;">Privacy Policy</a>
        </li>

    </ul>
</div>

<style>
    .quick-link:hover {
        color: #e9d349;
        background-color: rgba(255, 255, 255, 0.1);
        padding: 5px;
        border-radius: 5px;
    }
</style>

            {{-- <!-- Logo -->
            <div class="col-lg-4 col-md-4 footer-widget text-center d-flex flex-column align-items-center">
                <img class="footer-logo" src="images/logo.png" alt="College Logo" loading="lazy"
                    style="width: 100px; height: auto; margin-bottom: 10px;">
                <p style="margin: 0; color: #fff; font-size: 14px; text-align: center;">
                    Monkayo, Davao de Oro, Philippines
                </p>
                <p style="margin: 0; color: #fff; font-size: 14px; text-align: center;">
                    moncast_081908@yahoo.com
                </p>
                <p style="margin: 0; color: #fff; font-size: 14px; text-align: center;">
                    0915 427 8586
                </p>
            </div> --}}

<style>
    .social-link:hover {
        color: #e9d349;
        background-color: rgba(255, 255, 255, 0.1);
        padding: 5px;
        border-radius: 5px;
    }
</style>

        </div>
    </div>

    <!-- Bottom Footer Section -->
    <div class="copyright mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p style="color: #ffffffea; margin: 0; font-size: 14px; text-align: center;">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        This is a Footer. All Rights Reserved.
                        Designed and Developed by
                        <a href="https://www.infinitwebsolutions.com" style="color: #ffdf00;">Infinit Solutions</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back-to-Top Button -->
    <div id="back-to-top" class="back-to-top position-fixed" style="bottom: 15px; right: 15px; display: none;">
        <button class="btn btn-primary btn-sm" title="Back to Top" aria-label="Back to Top">
            <i class="fa fa-angle-double-up"></i>
        </button>
    </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    
    <style>
        /* Back to Top Button Visibility on Scroll */
        .back-to-top {
            z-index: 1000;
            display: none; /* Initially hidden */
        }
    
        /* Image Effects */
        img {
            transition: transform 0.4s ease-in-out, opacity 0.4s ease-in-out;
        }
    
        img:hover {
            transform: scale(1.5);
            opacity: 0.9;

        
        }

        .btn-primary {
            background: #dc3e90;
        }

        #back-to-top .btn.btn-primary {
            width: 36px;
            height: 36px;
            line-height: 36px;
                background: rgba(0, 0, 0, 0.9);
                border-radius: 3px;
                color: #dc3e90;
                font-weight: 700;
                font-size: 16px;
                padding: 0;
        }

    </style>

    <script>
        // Smooth Scroll to Top Functionality
        document.addEventListener("DOMContentLoaded", () => {
            const backToTopBtn = document.getElementById("back-to-top");
    
            // Show button on scroll
            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    backToTopBtn.style.display = "block";
                } else {
                    backToTopBtn.style.display = "none";
                }
            });
    
            // Smooth scroll to top when button is clicked
            backToTopBtn.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>
    
