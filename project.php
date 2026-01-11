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
    <div class="project-header">
        <h1>Projects</h1>
        <p class="text-muted">A collection of software development and ongoing projects.</p>
    </div>

    <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab">All</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-completed-tab" data-bs-toggle="pill" data-bs-target="#pills-completed" type="button" role="tab">Completed</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-ongoing-tab" data-bs-toggle="pill" data-bs-target="#pills-ongoing" type="button" role="tab">Ongoing</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Mango Leaf Disease Detection</h3>
                        <p class="text-muted">A CSC566 Mini Project by using CNN-Keras to classify mango leaf diseases.</p>
                        <div class="mt-2">
                            <span class="badge-tech">AI</span> 
                            <span class="badge-tech">Python</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/mango-leaf-disease-classification" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                        <a href="https://github.com/suffianbakar/mango-leaf-disease-classification-2" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Rakanku – Buddy Application</h3>
                        <p class="text-muted">A CSC557 Group Project that required create an Android application that act as buddy application - contain authentication features and friend birthday reminder.</p>
                        <div class="mt-2">
                            <span class="badge-tech">Android</span>
                            <span class="badge-tech">Java</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/rakanku-buddy-application" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Personal Application</h3>
                        <p class="text-muted">A CSC557 Individual Project that display personal information with basic Android user interface.</p>
                        <div class="mt-2">
                            <span class="badge-tech">Android</span>
                            <span class="badge-tech">Java</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/Personal-Application" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100" style="border-color: #ffc107;">
                        <span class="status-tag status-ongoing">🚧 Ongoing</span>
                        <h3>EGOVERNMENT FRAMEWORK FOR BUDGETING USING FUZZY RULES</h3>
                        <p class="text-muted">A Final Year Project that develop a framework in determine financial aid application eligibility by using integration of fuzzy rules and Analytical Hierarchical Process (AHP).</p>
                        <div class="mt-2">
                            <span class="badge-tech">FYP</span> 
                            <span class="badge-tech">Fuzzy Rules</span>
                            <span class="badge-tech">AHP</span>
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">MYSQL</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/eGOVERNMENT-BUDGETING-FRAMEWORK-USING-FUZZY-RULES-DECISIONMAKING" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Eco-Tech</h3>
                        <p class="text-muted">A CSC584 (Enterprise Programming) Group Project that used to manage sustainability data for projects and resources.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">Java</span>
                            <span class="badge-tech">JavaScript</span>
                            <span class="badge-tech">JSP</span>
                            <span class="badge-tech">Servlet</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/Eco-Tech" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Student Attendance Management System</h3>
                        <p class="text-muted">A CSC577 (Software Engineering) Group Project that implement AI in student attendance management system by using face recognition. Other subject, ICT502 (Software Engineering), this system database are using Oracle.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">JavaScript</span>
                            <span class="badge-tech">AI</span>
                            <span class="badge-tech">Python</span>
                            <span class="badge-tech">MYSQL</span>
                            <span class="badge-tech">Oracle</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/Student-Attendance-Management-System" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100" style="border-color: #ffc107;">
                        <span class="status-tag status-ongoing">🚧 Ongoing</span>
                        <h3>FELDA Civil Examination Management System (FCES)</h3>
                        <p class="text-muted">A partial prototype developed for Jabatan Pengurusan Modal Insan FELDA during my internship in 2023-2024. The project is not fully completed and some features may be missing or non-functional for certain reasons.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">JavaScript</span>
                            <span class="badge-tech">MYSQL</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/fcestrial" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Kerepek Funz Sales System</h3>
                        <p class="text-muted">A CSC584 (Introduction of Web and Mobile) group project that used to manage sales made by Kerepek Funz.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">MYSQL</span>
                            <span class="badge-tech">WEB HOSTING</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/KareOK" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>KareOK</h3>
                        <p class="text-muted">A CSC584 (Introduction of Web and Mobile) individual project by develop mobile application by using MIT Inventor App.</p>
                        <div class="mt-2">
                            <span class="badge-tech">Android</span>
                            <span class="badge-tech">Other</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/KareOK" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-completed" role="tabpanel">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Mango Leaf Disease Detection</h3>
                        <p class="text-muted">A CSC566 Mini Project by using CNN-Keras to classify mango leaf diseases.</p>
                        <div class="mt-2"><span class="badge-tech">AI</span> <span class="badge-tech">Python</span></div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/mango-leaf-disease-classification" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                        <a href="https://github.com/suffianbakar/mango-leaf-disease-classification-2" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Rakanku – Buddy Application</h3>
                        <p class="text-muted">A CSC557 Group Project that required create an Android application that act as buddy application - contain authentication features and friend birthday reminder.</p>
                        <div class="mt-2">
                            <span class="badge-tech">Android</span>
                            <span class="badge-tech">Java</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/rakanku-buddy-application" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Personal Application</h3>
                        <p class="text-muted">A CSC557 Individual Project that display personal information with basic Android user interface.</p>
                        <div class="mt-2">
                            <span class="badge-tech">Android</span>
                            <span class="badge-tech">Java</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/Personal-Application" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Eco-Tech</h3>
                        <p class="text-muted">A CSC584 (Enterprise Programming) Group Project that used to manage sustainability data for projects and resources.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">Java</span>
                            <span class="badge-tech">JavaScript</span>
                            <span class="badge-tech">JSP</span>
                            <span class="badge-tech">Servlet</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/Eco-Tech" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Student Attendance Management System</h3>
                        <p class="text-muted">A CSC577 (Software Engineering) Group Project that implement AI in student attendance management system by using face recognition. Other subject, ICT502 (Software Engineering), this system database are using Oracle.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">JavaScript</span>
                            <span class="badge-tech">AI</span>
                            <span class="badge-tech">Python</span>
                            <span class="badge-tech">MYSQL</span>
                            <span class="badge-tech">Oracle</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/Student-Attendance-Management-System" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>Kerepek Funz Sales System</h3>
                        <p class="text-muted">A CSC584 (Introduction of Web and Mobile) group project that used to manage sales made by Kerepek Funz.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">MYSQL</span>
                            <span class="badge-tech">WEB HOSTING</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/KareOK" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <span class="status-tag status-completed">✅ Completed</span>
                        <h3>KareOK</h3>
                        <p class="text-muted">A CSC584 (Introduction of Web and Mobile) individual project by develop mobile application by using MIT Inventor App.</p>
                        <div class="mt-2">
                            <span class="badge-tech">Android</span>
                            <span class="badge-tech">Other</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/KareOK" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-ongoing" role="tabpanel">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100" style="border-color: #ffc107;">
                        <span class="status-tag status-ongoing">🚧 Ongoing</span>
                        <h3>EGOVERNMENT FRAMEWORK FOR BUDGETING USING FUZZY RULES</h3>
                        <p class="text-muted">A Final Year Project that develop a framework in determine financial aid application eligibility by using integration of fuzzy rules and Analytical Hierarchical Process (AHP).</p>
                        <div class="mt-2">
                            <span class="badge-tech">FYP</span> 
                            <span class="badge-tech">Fuzzy Rules</span>
                            <span class="badge-tech">AHP</span>
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">MYSQL</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/eGOVERNMENT-BUDGETING-FRAMEWORK-USING-FUZZY-RULES-DECISIONMAKING" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100" style="border-color: #ffc107;">
                        <span class="status-tag status-ongoing">🚧 Ongoing</span>
                        <h3>FELDA Civil Examination Management System (FCES)</h3>
                        <p class="text-muted">A partial prototype developed for Jabatan Pengurusan Modal Insan FELDA during my internship in 2023-2024. The project is not fully completed and some features may be missing or non-functional for certain reasons.</p>
                        <div class="mt-2">
                            <span class="badge-tech">HTML</span>
                            <span class="badge-tech">PHP</span>
                            <span class="badge-tech">CSS</span>
                            <span class="badge-tech">JavaScript</span>
                            <span class="badge-tech">MYSQL</span>
                        </div>
                        <div class="project-card-footer">
                        <a href="https://github.com/suffianbakar/fcestrial" target="_blank" class="btn-github">
                            <i class="fa-brands fa-github"></i> GitHub
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>




    <footer>
        &copy; 2024 Suffian Bakar. All rights reserved.
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>