<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School – Where seventh-grade students learn to earn $500 a month</title>
    <style>
        /* Internal CSS - Amazing, real-looking, professional design with modern aesthetics */
        body { font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: #f4f7fa; color: #333; line-height: 1.6; }
        header { background-color: #007bff; color: white; padding: 20px; text-align: center; }
        nav { background-color: #0056b3; padding: 10px; }
        nav ul { list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; }
        nav ul li { margin: 0 15px; }
        nav ul li a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        nav ul li a:hover { color: #ffd700; }
        .container { max-width: 1200px; margin: 20px auto; padding: 20px; }
        .section { margin-bottom: 40px; }
        .section h2 { color: #007bff; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        .features { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .feature { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .feature:hover { transform: translateY(-5px); }
        .stats { display: flex; justify-content: space-around; text-align: center; }
        .stat { background: #e9f7ff; padding: 20px; border-radius: 8px; width: 30%; }
        .testimonials { display: flex; flex-direction: column; gap: 20px; }
        .testimonial { background: white; padding: 15px; border-left: 5px solid #007bff; border-radius: 4px; }
        .articles { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .article { background: white; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        footer { background-color: #007bff; color: white; text-align: center; padding: 10px; }
        /* Responsive design */
        @media (max-width: 768px) {
            nav ul { flex-direction: column; }
            .stats { flex-direction: column; }
            .stat { width: 100%; margin-bottom: 20px; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Rehan School</h1>
        <p>Where seventh-grade students learn to earn $500 a month</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="curriculum.php">Curriculum</a></li>
            <li><a href="facilitators.php">Facilitators</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="section" id="introduction">
            <h2>Introduction</h2>
            <p>Founded by Rehan Allahwala, our mission is to end poverty in Pakistan by equipping students with problem-solving capabilities. We help students earn Rs. 25,000 per month from freelancing and positively impact 10 million human beings through their life mission.</p>
        </div>
        <div class="section" id="features">
            <h2>Unique Features</h2>
            <div class="features">
                <div class="feature">
                    <h3>AI-Enabled Education</h3>
                    <p>As the first AI-enabled school in Pakistan, we offer advanced learning tools for the digital age.</p>
                </div>
                <div class="feature">
                    <h3>Holistic Development</h3>
                    <p>Modern classrooms, labs, and sports facilities for overall growth.</p>
                </div>
                <div class="feature">
                    <h3>Entrepreneurial Focus</h3>
                    <p>Empower students to earn while learning with marketable skills.</p>
                </div>
            </div>
        </div>
        <div class="section" id="stats">
            <h2>Statistics</h2>
            <div class="stats">
                <div class="stat">
                    <h3>10+</h3>
                    <p>Team Members</p>
                </div>
                <div class="stat">
                    <h3>100+</h3>
                    <p>Students</p>
                </div>
                <div class="stat">
                    <h3>2</h3>
                    <p>Campuses</p>
                </div>
            </div>
        </div>
        <div class="section" id="testimonials">
            <h2>Testimonials</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <p>“Rehan School is simply outstanding! From the space-themed principal’s office to the innovative “Maker and Breaker Space,” this school is a beacon of creativity.”</p>
                </div>
                <div class="testimonial">
                    <p>“Rehan School Online Academy: Empowering students through technology to earn $500 monthly, promoting UN’s Sustainable Development Goals.”</p>
                </div>
            </div>
        </div>
        <div class="section" id="articles">
            <h2>Latest Articles</h2>
            <div class="articles">
                <div class="article">
                    <h3>Rehan School Wins Bold Award 2024</h3>
                    <p>Venice, Italy – In a landmark achievement, Rehan School Pakistan has been honored with the prestigious Bold Award 2024 in the Boldest Social Impact category.</p>
                </div>
                <!-- Add more if needed -->
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Rehan School. All Rights Reserved.</p>
    </footer>
</body>
</html>
