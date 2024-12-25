<?php
     echo "This is seyi lufadeju web app"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the official website of Seyi Lufadeju, Cloud Engineer. Explore my skills, projects, and contact details.">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background: linear-gradient(90deg, #0073e6, #003366);
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        header p {
            margin: 5px 0 0;
            font-size: 1.2rem;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: #0073e6;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #005bb5;
        }
        footer {
            background: #003366;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Seyi Lufadeju's World</h1>
        <p>Cloud Engineer | Innovator | Problem Solver</p>
    </header>

    <div class="container">
        <h2>About Me</h2>
        <p>Hello! I'm Seyi Lufadeju, a passionate Cloud Engineer with expertise in cloud architecture, automation, and scalable solutions. Let's build the future together!</p>

        <a href="#projects" class="btn">My Projects</a>
        <a href="#contact" class="btn">Contact Me</a>

        <section id="projects">
            <h2>Projects</h2>
            <p>Coming soon: A showcase of my recent work and contributions to cloud engineering projects.</p>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>Feel free to reach out for collaborations or inquiries.</p>
            <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        </section>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Seyi Lufadeju. All rights reserved.</p>
    </footer>
</body>
</html>

