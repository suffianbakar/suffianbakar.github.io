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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>  
    <?php include 'preloader.php'; ?>
    <?php include 'header.php'; ?>
    
    <main>
        <section id="section1">
            <div class="profile-container">
                <img src="assets/images/suffianbakar.jpg" alt="Profile Picture" class="profile-img">
                
                <div class="details">
                    <h3><strong>Muhammad Suffian Bin Abu Bakar</strong></h3>
                        <p style="font-style: italic; color: #555; border-left: 3px solid #ccc; padding-left: 10px; margin: 15px 0;">
                            Welcome to my official website. I am a Computer Science student with a deep interest in software development and system design. Apart from coding, I spend my time exploring political issues and indulging in music. I believe in building a 'solid' life in knowledge, yet choosing a simple path in every step.
                        </p>
                        <blockquote style="margin: 10px 0; font-weight: bold; color: #2c3e50;">
                            “Biarlah berlandasan, yang benar kebenaran, jadilah sederhana.” 
                            <span style="font-weight: normal; font-size: 0.9em;">— Hidup Sederhana, Wings.</span>
                        </blockquote>

                        <div style="margin-top: 15px; font-size: 0.9em;">
                            <p>📍 Rawang, Malaysia</p>
                            <p>📞 <a href="tel:+601111562807">011-11562807</a> <span class="separator">|</span> 📧 <a href="mailto:suffianbakar2@email.com">suffianbakar2@gmail.com</a></p>
                        </div>
                </div>
            </div>
        </section>


        <section id="section2">
    <h2 style="font-weight: 800; margin-bottom: 25px;">Portfolio & Exploration</h2>
    
    <div class="grid-container">
        <div class="card">
            <div>
                <h3><i class="fa-solid fa-rocket"></i> Project Overview</h3>
                <ul class="card-list">
                    <li>EGOVERNMENT FRAMEWORK FOR BUDGETING USING FUZZY RULES</li>
                    <li>Mango Leaf Disease Detection</li>
                    <li>Rakanku – Buddy Application</li>
                </ul>
            </div>
            <a href="project.php" class="btn-see-more">See more</a>
        </div>

        <div class="card">
            <div>
                <h3><i class="fa-solid fa-magnifying-glass"></i> Research Overview</h3>
                <ul class="card-list">
                    <li>SYSTEMATIC LITERATURE REVIEW OF ARTIFICIAL INTELLIGENCE (AI) IN MUSIC COMPOSITION</li>
                    <li>Case Study Of Kupi Borneo</li>
                </ul>
            </div>
            <a href="research.php" class="btn-see-more">See more</a>
        </div>

        <div class="card">
            <div>
                <h3><i class="fa-brands fa-github"></i> GitHub Repositories</h3>
                <div style="margin-bottom: 15px;">
                    <div style="background:#f5f5f5; padding:10px; border-radius:8px; margin-bottom:8px;">
                        <i class="fa-solid fa-folder-open" style="color:#f1c40f;"></i> mango-leaf-disease-classification
                    </div>
                    <div style="background:#f5f5f5; padding:10px; border-radius:8px; margin-bottom:8px;">
                        <i class="fa-solid fa-folder-open" style="color:#f1c40f;"></i> eGOVERNMENT-BUDGETING-FRAMEWORK-USING-FUZZY-RULES-DECISIONMAKING
                    </div>
                </div>
            </div>
            <a href="https://github.com/suffianbakar?tab=repositories" class="btn-see-more">See more</a>
        </div>

        <div class="card">
            <div>
                <h3><i class="fa-solid fa-code"></i> Tech Stack</h3>
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">Programming language and tools that I used:</p>
                
                <div class="slider-container">
                    <div class="slider-track">
                        <div class="slide-item">
                            <i class="fa-solid fa-code" style="color: #0010c4;"></i>
                            <span>C++</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-brands fa-html5" style="color: #E34F26;"></i>
                            <span>HTML</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-brands fa-bootstrap" style="color: #7952B3;"></i>
                            <span>Bootstrap</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-brands fa-css3-alt" style="color: #1572B6;"></i>
                            <span>CSS</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-brands fa-php" style="color: #2a5f8a;"></i>
                            <span>PHP</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-solid fa-database" style="color: #e7cc00;"></i>
                            <span>MySQL</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-solid fa-database" style="color: #c10000;"></i>
                            <span>Oracle</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-brands fa-java" style="color: #007396;"></i>
                            <span>Java</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-solid fa-laptop-code" style="color: #0063f8;"></i>
                            <span>Visual Studio Code</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-solid fa-laptop-code" style="color: #7d3a00;"></i>
                            <span>Netbean (JSP, Java EE)</span>
                        </div>
                        <div class="slide-item">
                            <i class="fa-solid fa-laptop-code" style="color: #ffe600;"></i>
                            <span>Google Colab</span>
                        </div>
                    </div>
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