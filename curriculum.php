<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum – Rehan School</title>
    <style>
        /* Same amazing CSS as index.php - copied for internal use */
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
        .levels { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .level { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        footer { background-color: #007bff; color: white; text-align: center; padding: 10px; }
        @media (max-width: 768px) { nav ul { flex-direction: column; } }
    </style>
</head>
<body>
    <header>
        <h1>Curriculum</h1>
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
        <div class="section">
            <h2>Overview</h2>
            <p>The curriculum at Rehan School is based on the founder's life experiences in travel, business, and networking. It evolves with new technologies and focuses on developing global citizens with skills in communication, collaboration, problem-solving, and more.</p>
        </div>
        <div class="section">
            <h2>Levels</h2>
            <div class="levels">
                <div class="level">
                    <h3>Level One (5th Grade)</h3>
                    <p>Graphic design, ChatGPT, interview taking and giving, video making, learning via AI, yoga, meditation, ethics, TEDx.</p>
                </div>
                <div class="level">
                    <h3>Level Two (6th Grade)</h3>
                    <p>Continuation of Level One, introduction of life mission (“Wala”), networking, freelancing to earn $100/month.</p>
                </div>
                <div class="level">
                    <h3>Level Three (7th Grade)</h3>
                    <p>All Level Two topics, freelancing target $300/month.</p>
                </div>
                <div class="level">
                    <h3>Level Four (8th Grade)</h3>
                    <p>All Level Three, start a startup related to Wala, aim to sell for $1M by 12th grade.</p>
                </div>
                <div class="level">
                    <h3>Level Six (13th Grade)</h3>
                    <p>Preparation for GED and Matric exams.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Rehan School. All Rights Reserved.</p>
    </footer>
</body>
</html>
