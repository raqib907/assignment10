
<html>
<head>
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
<header>

    <nav>
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
        </ul>
    </nav>
</header>
<div class="featured-post">

    <div>
        <h2>Latest Blog Post</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis massa purus. Sed nec congue sapien, vel tincidunt justo. Nullam in ipsum at magna iaculis sodales.</p>
        <a href="#">Read More</a>
    </div>
</div>
<div class="content">
    <marquee>
        <h1>Welcome to my website!</h1>
    </marquee>
    <div>

        <p>

        <form method="post" action="process.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Submit">
        </form>

        </p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</body>
</html>