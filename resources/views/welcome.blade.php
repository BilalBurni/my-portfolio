<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bilal | Creative Developer</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #ff3366;
            --secondary: #6366f1;
            --dark: #0f0f23;
            --darker: #0a0a1a;
            --light: #ffffff;
            --gray: #8b8b8b;
            --accent: #00d9ff;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--dark) 0%, var(--darker) 100%);
            color: var(--light);
            overflow-x: hidden;
            line-height: 1.6;
            cursor: none;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom Cursor */
        .cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            background: var(--primary);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            mix-blend-mode: difference;
            transition: transform 0.1s ease;
        }
        
        .cursor-follower {
            position: fixed;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 2px solid var(--accent);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transition: all 0.3s ease;
        }
        
        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 50px;
            background: rgba(15, 15, 35, 0.1);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transform: translateY(-100px);
            animation: slideDown 1s ease 0.5s forwards;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .logo {
            font-size: 2rem;
            font-weight: 900;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 40px;
        }
        
        .nav-link {
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--accent);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at center, rgba(255, 51, 102, 0.1) 0%, transparent 70%);
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 20s infinite ease-in-out;
        }
        
        .shape:nth-child(1) {
            top: 10%;
            left: 10%;
            width: 100px;
            height: 100px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            top: 60%;
            right: 10%;
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, var(--accent), var(--secondary));
            border-radius: 50%;
            animation-delay: 5s;
        }
        
        .shape:nth-child(3) {
            bottom: 20%;
            left: 20%;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--secondary), var(--primary));
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            animation-delay: 10s;
        }
        
        .hero-content {
            text-align: center;
            z-index: 2;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease 1s forwards;
        }
        
        .hero-title {
            font-size: clamp(3rem, 8vw, 8rem);
            font-weight: 900;
            line-height: 0.9;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s ease 1.2s forwards;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 50%, var(--secondary) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 300% 300%;
            animation: gradientShift 3s ease-in-out infinite;
        }
        
        .hero-description {
            font-size: 1.5rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto 40px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease 1.4s forwards;
        }
        
        .cta-button {
            display: inline-block;
            padding: 20px 40px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--light);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease 1.6s forwards;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(255, 51, 102, 0.3);
        }
        
        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0;
            animation: fadeInUp 1s ease 2s forwards;
        }
        
        .scroll-text {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 10px;
        }
        
        .scroll-line {
            width: 2px;
            height: 30px;
            background: linear-gradient(to bottom, var(--accent), transparent);
            animation: scrollPulse 2s ease-in-out infinite;
        }
        
        /* About Section */
        .about {
            padding: 150px 50px;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .section-title {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 900;
            margin-bottom: 30px;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            margin-top: 60px;
        }
        
        .about-text {
            font-size: 1.3rem;
            line-height: 1.8;
            color: var(--gray);
        }
        
        .highlight {
            color: var(--accent);
            font-weight: 600;
        }
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .skill-item {
            padding: 25px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .skill-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .skill-item:hover::before {
            transform: scaleX(1);
        }
        
        .skill-item:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .skill-name {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .skill-level {
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        /* Services Section */
        .services {
            padding: 150px 50px;
            background: rgba(255, 255, 255, 0.02);
        }
        
        .services-container {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 80px;
        }
        
        .service-card {
            padding: 50px 40px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.5s ease;
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .service-card:hover::before {
            opacity: 0.1;
        }
        
        .service-card:hover {
            transform: translateY(-20px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }
        
        .service-icon {
            font-size: 3rem;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }
        
        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        
        .service-description {
            color: var(--gray);
            line-height: 1.6;
            position: relative;
            z-index: 2;
        }
        
        /* Portfolio Section */
        .portfolio {
            padding: 150px 50px;
        }
        
        .portfolio-container {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
            margin-top: 80px;
        }
        
        .portfolio-item {
            aspect-ratio: 16/10;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .portfolio-item:hover {
            transform: translateY(-10px);
        }
        
        .portfolio-image {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--light);
            transition: all 0.5s ease;
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 51, 102, 0.9), rgba(99, 102, 241, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .portfolio-item:hover .portfolio-image {
            transform: scale(1.1);
        }
        
        .portfolio-info {
            text-align: center;
        }
        
        .portfolio-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .portfolio-desc {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        /* Contact Section */
        .contact {
            padding: 150px 50px;
            background: rgba(255, 255, 255, 0.02);
        }
        
        .contact-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .contact-form {
            display: grid;
            gap: 30px;
            margin-top: 60px;
        }
        
        .form-group {
            position: relative;
        }
        
        .form-input {
            width: 100%;
            padding: 20px 25px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            color: var(--light);
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .form-input::placeholder {
            color: var(--gray);
        }
        
        textarea.form-input {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            padding: 20px 40px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border: none;
            border-radius: 50px;
            color: var(--light);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(255, 51, 102, 0.3);
        }
        
        /* Footer */
        .footer {
            padding: 50px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray);
        }
        
        /* Animations */
        @keyframes slideDown {
            to {
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes gradientShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }
        
        @keyframes scrollPulse {
            0%, 100% {
                opacity: 0.5;
                transform: scaleY(1);
            }
            50% {
                opacity: 1;
                transform: scaleY(1.5);
            }
        }
        
        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
        }
        
        .mobile-menu-btn span {
            width: 25px;
            height: 3px;
            background: var(--light);
            transition: 0.3s;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                padding: 20px;
            }
            
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-btn {
                display: flex;
            }
            
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-description {
                font-size: 1.2rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .services-grid,
            .portfolio-grid {
                grid-template-columns: 1fr;
            }
            
            .portfolio-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            
            .about,
            .services,
            .portfolio,
            .contact {
                padding: 100px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">Bilal</div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="hero-content">
            <p class="hero-subtitle">Creative Frontend Developer</p>
            <h1 class="hero-title">
                I'm <span class="gradient-text">Bilal</span>
            </h1>
            <p class="hero-description">
                Crafting exceptional digital experiences with cutting-edge animations and modern web technologies
            </p>
            <a href="#portfolio" class="cta-button">View My Work</a>
        </div>
        <div class="scroll-indicator">
            <span class="scroll-text">Scroll Down</span>
            <div class="scroll-line"></div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="about">
        <h2 class="section-title">About <span class="gradient-text">Me</span></h2>
        <div class="about-content">
            <div class="about-text">
                <p>I'm a passionate frontend developer with expertise in creating <span class="highlight">modern web experiences</span>. I specialize in Laravel, WordPress, GSAP animations, and Tailwind CSS.</p>
                <br>
                <p>My goal is to build websites that not only look stunning but also provide seamless user interactions and <span class="highlight">memorable experiences</span>.</p>
            </div>
            <div class="skills-grid">
                <div class="skill-item">
                    <div class="skill-name">Laravel</div>
                    <div class="skill-level">Expert</div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">WordPress</div>
                    <div class="skill-level">Advanced</div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">GSAP</div>
                    <div class="skill-level">Expert</div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">Tailwind</div>
                    <div class="skill-level">Expert</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="services">
        <div class="services-container">
            <h2 class="section-title">My <span class="gradient-text">Services</span></h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">💻</div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">Custom websites with modern UI/UX and advanced animations that captivate users and drive engagement.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">Clean, intuitive interfaces designed with user experience in mind, ensuring maximum usability and aesthetic appeal.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3 class="service-title">Responsive Design</h3>
                    <p class="service-description">Mobile-first approach ensuring your website looks perfect and functions flawlessly across all devices and screen sizes.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="portfolio-container">
            <h2 class="section-title">My <span class="gradient-text">Projects</span></h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image">🚀</div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">Project Alpha</h3>
                            <p class="portfolio-desc">Modern web application with advanced animations</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">⚡</div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">Project Beta</h3>
                            <p class="portfolio-desc">E-commerce platform with seamless UX</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">✨</div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">Project Gamma</h3>
                            <p class="portfolio-desc">Interactive portfolio with GSAP animations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="contact-container">
            <h2 class="section-title">Get In <span class="gradient-text">Touch</span></h2>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" class="form-input" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-input" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Bilal | All Rights Reserved</p>
    </footer>
    
    <script>
        // Custom cursor functionality
        const cursor = document.querySelector('.cursor');
        const follower = document.querySelector('.cursor-follower');
        
        let mouseX = 0, mouseY = 0;
        let followerX = 0, followerY = 0;
        
        // Update cursor position immediately
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            
            // Update cursor position instantly
            cursor.style.left = mouseX + 'px';
            cursor.style.top = mouseY + 'px';
        });
        
        // Smooth follower animation
        function animateFollower() {
            followerX += (mouseX - followerX) * 0.1;
            followerY += (mouseY - followerY) * 0.1;
            
            follower.style.left = followerX + 'px';
            follower.style.top = followerY + 'px';
            
            requestAnimationFrame(animateFollower);
        }
        animateFollower();
        
        // Hover effects for interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .portfolio-item, .service-card, .skill-item');
        
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.transform = 'scale(2)';
                follower.style.transform = 'scale(1.5)';
                cursor.style.background = 'var(--accent)';
            });
            
            el.addEventListener('mouseleave', () => {
                cursor.style.transform = 'scale(1)';
                follower.style.transform = 'scale(1)';
                cursor.style.background = 'var(--primary)';
            });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Message sent successfully! (This is a demo)');
            this.reset();
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = this.querySelector('input[type="text"]').value;
            const email = this.querySelector('input[type="email"]').value;
            const message = this.querySelector('textarea').value;
            
            // Simple validation
            if (name && email && message) {
                // Simulate form submission
                const submitBtn = this.querySelector('.submit-btn');
                const originalText = submitBtn.textContent;
                
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    alert('Message sent successfully! (This is a demo)');
                    this.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 1500);
            } else {
                alert('Please fill in all fields');
            }
        });
        
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('.section-title, .about-text, .skills-grid, .service-card, .portfolio-item, .contact-form').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
        
        // Mobile menu functionality
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        
        if (mobileMenuBtn && navMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                mobileMenuBtn.classList.toggle('active');
            });
        }
        
        // Parallax effect for floating shapes
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const shapes = document.querySelectorAll('.shape');
            
            shapes.forEach((shape, index) => {
                const speed = 0.5 + (index * 0.1);
                shape.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
        
        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
        
        // Skills hover effect
        document.querySelectorAll('.skill-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.style.background = 'rgba(255, 255, 255, 0.1)';
            });
            
            item.addEventListener('mouseleave', () => {
                item.style.background = 'rgba(255, 255, 255, 0.05)';
            });
        });
        
        // Portfolio item click effect
        document.querySelectorAll('.portfolio-item').forEach(item => {
            item.addEventListener('click', () => {
                const title = item.querySelector('.portfolio-title').textContent;
                alert(`Opening ${title} - (This is a demo)`);
            });
        });
        
        // Add scroll-based navbar background
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(15, 15, 35, 0.9)';
            } else {
                navbar.style.background = 'rgba(15, 15, 35, 0.1)';
            }
        });
        
        // Add typing effect to hero subtitle
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.textContent = '';
            
            function type() {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }
        
        // Start typing effect when page loads
        setTimeout(() => {
            const subtitle = document.querySelector('.hero-subtitle');
            if (subtitle) {
                typeWriter(subtitle, 'Creative Frontend Developer', 80);
            }
        }, 2000);
    </script>
</body>
</html>