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
        <section class="section1">
            <div class="container">
                <div class="project-header text-center">
                    <h1>Resume</h1>
                    <p class="text-muted">A summary of my professional experience, technical skills and academic background.</p>
                    
                    <a href="assets/pdf/Muhammad Suffian Bin Abu Bakar - Resume.pdf" download class="btn-download-resume">
                        <i class="fa-solid fa-file-arrow-down"></i> Download Resume (PDF)
                    </a>
                </div>

                <div class="resume-viewer">
                    <iframe src="assets/pdf/Muhammad Suffian Bin Abu Bakar - Resume.pdf" width="100%" height="800px" style="border: none; border-radius: 10px;">
                        <p>This web browser does not support direct PDF viewing.
                        <a href="assets/pdf/Muhammad Suffian Bin Abu Bakar - Resume.pdf">Klik di sini untuk muat turun PDF.</a>
                        </p>
                    </iframe>
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