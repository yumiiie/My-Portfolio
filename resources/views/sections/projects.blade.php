<!-- Projects Section -->
<section id="projects" class="projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">My Projects</h2>
            <p class="section-subtitle">Explore my work across different technologies and domains</p>
        </div>
        
        <!-- Project Filter -->
        <div class="project-filter">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="frontend">Frontend</button>
            <button class="filter-btn" data-filter="backend">Backend</button>
            <button class="filter-btn" data-filter="fullstack">Full-Stack</button>
            <button class="filter-btn" data-filter="mobile">Mobile</button>
        </div>
        
        <div class="projects-grid">
            <div class="project-card" data-category="fullstack">
                <div class="project-image">
                    <img src="{{ asset('assets/lucias-pos.png') }}" alt="Lucia's Point of Sale">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link" target="_blank" data-tooltip="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="https://github.com/Riuoo/Lucias-POS" class="project-link" target="_blank" data-tooltip="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-status">
                        <span class="status-badge completed">Completed</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-header">
                        <h3 class="project-title">Lucia's Point of Sale</h3>
                        <div class="project-year">2024</div>
                    </div>
                    <p class="project-description">
                        A comprehensive e-commerce platform featuring user authentication, payment processing, 
                        inventory management, and admin dashboard with real-time analytics.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-user-lock"></i>User Authentication</span>
                        <span class="feature-tag"><i class="fas fa-credit-card"></i>Payment Integration</span>
                        <span class="feature-tag"><i class="fas fa-chart-line"></i>Admin Dashboard</span>
                        <span class="feature-tag"><i class="fas fa-boxes"></i>Inventory Management</span>
                    </div>
                    <div class="project-tech">
                        <span class="tech-tag html"><i class="fab fa-html5"></i>HTML</span>
                        <span class="tech-tag css"><i class="fab fa-css3-alt"></i>CSS</span>
                        <span class="tech-tag js"><i class="fab fa-js-square"></i>JavaScript</span>
                        <span class="tech-tag php"><i class="fab fa-php"></i>PHP</span>
                        <span class="tech-tag mysql"><i class="fas fa-database"></i>MySQL</span>
                        <span class="tech-tag bootstrap"><i class="fab fa-bootstrap"></i>Bootstrap</span>
                    </div>
                </div>
            </div>

            <div class="project-card" data-category="fullstack">
                <div class="project-image">
                    <img src="{{ asset('assets/barmms.png') }}" alt="Barangay Management System">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="https://github.com/BARMMS" class="project-link" target="_blank" data-tooltip="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="https://github.com/Riuoo/BARMMS" class="project-link" target="_blank" data-tooltip="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-status">
                        <span class="status-badge completed">Completed</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-header">
                        <h3 class="project-title">Barangay Management System</h3>
                        <div class="project-year">2024</div>
                    </div>
                    <p class="project-description">
                        A comprehensive management system for barangay operations featuring citizen registration, 
                        document processing, and administrative tools for local government efficiency.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-users"></i>Citizen Registration</span>
                        <span class="feature-tag"><i class="fas fa-file-alt"></i>Document Management</span>
                        <span class="feature-tag"><i class="fas fa-sync-alt"></i>Real-time Updates</span>
                        <span class="feature-tag"><i class="fas fa-chart-line"></i>Admin Dashboard</span>
                    </div>
                    <div class="project-tech">
                        <span class="tech-tag html"><i class="fab fa-html5"></i>HTML5</span>
                        <span class="tech-tag css"><i class="fab fa-css3-alt"></i>CSS3</span>
                        <span class="tech-tag js"><i class="fab fa-js-square"></i>JavaScript</span>
                        <span class="tech-tag php"><i class="fab fa-php"></i>PHP</span>
                        <span class="tech-tag laravel"><i class="fab fa-laravel"></i>Laravel</span>
                        <span class="tech-tag tailwind"><i class="fab fa-css3-alt"></i>Tailwind CSS</span>
                    </div>
                </div>
            </div>

            <div class="project-card" data-category="mobile">
                <div class="project-image">
                    <img src="{{ asset('assets/checkme.png') }}" alt="CheckMe">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="https://github.com/Riuoo/CheckMe" class="project-link" target="_blank" data-tooltip="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="https://github.com/Riuoo/CheckMe" class="project-link" target="_blank" data-tooltip="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-status">
                        <span class="status-badge completed">Completed</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-header">
                        <h3 class="project-title">CheckMe</h3>
                        <div class="project-year">2024</div>
                    </div>
                    <p class="project-description">
                        A mobile application for task management and productivity tracking with intuitive UI, 
                        reminder notifications, and progress analytics.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-tasks"></i>Task Management</span>
                        <span class="feature-tag"><i class="fas fa-bell"></i>Notifications</span>
                        <span class="feature-tag"><i class="fas fa-chart-bar"></i>Progress Tracking</span>
                        <span class="feature-tag"><i class="fas fa-mobile-alt"></i>Mobile UI</span>
                    </div>
                    <div class="project-tech">
                        <span class="tech-tag java"><i class="fab fa-java"></i>Java</span>
                        <span class="tech-tag kotlin"><i class="fas fa-code"></i>Kotlin</span>
                        <span class="tech-tag android"><i class="fab fa-android"></i>Android</span>
                        <span class="tech-tag xml"><i class="fas fa-code"></i>XML</span>
                    </div>
                </div>
            </div>

            <div class="project-card" data-category="frontend">
                <div class="project-image">
                    <img src="{{ asset('assets/portfolio.png') }}" alt="Portfolio Website">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="https://roderick-tajos.netlify.app/" class="project-link" target="_blank" data-tooltip="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="https://github.com/Riuoo/My-Portfolio" class="project-link" target="_blank" data-tooltip="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-status">
                        <span class="status-badge completed">Completed</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-header">
                        <h3 class="project-title">Portfolio Website</h3>
                        <div class="project-year">2025</div>
                    </div>
                    <p class="project-description">
                        A responsive portfolio website showcasing projects and skills with modern design, 
                        smooth animations, and interactive elements built with vanilla technologies.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-desktop"></i>Responsive Design</span>
                        <span class="feature-tag"><i class="fas fa-adjust"></i>Dark/Light Mode</span>
                        <span class="feature-tag"><i class="fas fa-magic"></i>Smooth Animations</span>
                        <span class="feature-tag"><i class="fas fa-envelope"></i>Contact Form</span>
                    </div>
                    <div class="project-tech">
                        <span class="tech-tag html"><i class="fab fa-html5"></i>HTML5</span>
                        <span class="tech-tag css"><i class="fab fa-css3-alt"></i>CSS3</span>
                        <span class="tech-tag js"><i class="fab fa-js-square"></i>JavaScript</span>
                        <span class="tech-tag netlify"><i class="fas fa-cloud"></i>Netlify</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- No Projects Message -->
        <div class="no-projects-message" id="no-projects-message" style="display: none;">
            <div class="no-projects-content">
                <div class="no-projects-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="no-projects-title">No Projects Found</h3>
                <p class="no-projects-description">
                    No projects match the selected filter. Try selecting a different category or check back later for new projects.
                </p>
                <button class="btn btn-primary" onclick="document.querySelector('.project-filter .filter-btn[data-filter=\'all\']').click()">
                    <span>View All Projects</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

