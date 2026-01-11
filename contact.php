<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample HTML Page</title> 

    <!-- css for page-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">


</head>
<body>  
    <?php include 'preloader.php'; ?>
    <?php include 'header.php'; ?>
    
    <main>
        <section class="contact-section">
    <div class="container">
        <div class="project-header text-center mb-5">
            <h1>Get in Touch</h1>
            <p class="text-muted">Please contact me via the platform below for any inquiries.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="contact-card shadow-sm">
                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h5>Email</h5>
                    <a href="mailto:suffianbakar2@gmail.com" class="contact-link">suffianbakar2@gmail.com</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="contact-card shadow-sm">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h5>Phone / WhatsApp</h5>
                    <a href="https://wa.me/+601111562807" target="_blank" class="contact-link">+6011-11562807</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="contact-card shadow-sm">
                    <div class="contact-icon">
                        <i class="bi bi-linkedin"></i>
                    </div>
                    <h5>LinkedIn</h5>
                    <a href="https://linkedin.com/in/suffianbakar" target="_blank" class="contact-link">linkedin.com/in/suffianbakar</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="contact-card shadow-sm">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h5>Location</h5>
                    <span class="contact-link">Rawang, Malaysia</span>
                </div>
            </div>
        </div>
    </div>
</section>
    </main>
    <footer>
        &copy; 2024 Suffian Bakar. All rights reserved.
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>