<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biyan's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awsome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">SB</div>
            <ul class="nav-links">
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills">Skils</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/profile.php?id=100013076825316"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-x"></i></a></li>
                <li><a href="https://www.instagram.com/shallombiyan?igsh=YzljYk1ODg3Zg=="><i class="fab fa-instagram"></i></a></li>
            </ul>
            <div class="search-box">
                <input type="text" placeholder="Seaech...">
            </div>
        </div>
    </nav>

    <section id="profile">
        <div class="container">
            <img src="assets/mata.png" alt="Photo" class="profile-photo">
            <h1>Shallom Biyan</h1>
            <p>Someone with many desires but no action.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Hello! I am Shallom Biyan, someone who wants to master many things, including coding. I enjoy bringing unique ideas to life and always seek new challenges to enhance my skills.</p>
    </section>

    <section id="skills">
        <div class="container">
            <h2>Skills</h2>
            <div class="skill">
                <label for="html-css">HTML & CSS</label>
                <progress id="html-css" value="50" max="100"></progress>
            </div>
            <div class="skill">
                <label for="javascript">Consturct 3</label>
                <progress id="javascript" value="60" max="100"></progress>
            </div>
            <div class="skill">
                <label for="react-angular">Blender 3D</label>
                <progress id="react-angular" value="85" max="100"></progress>
            </div>
            <div class="skill">
                <label for="nodejs">Canva</label>
                <progress id="nodejs" value="75" max="100"></progress>
            </div>
            <div class="skill">
                <label for="php-mysql">Pixel Studio</label>
                <progress id="php-mysql" value="70" max="100"></progress>
            </div>
            <div class="skill">
                <label for="bootstrap-tailwind">Microsoft Office</label>
                <progress id="bootstrap-tailwind" value="80" max="100"></progress>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <div class ="portfolio-container">
                <div class ="portfolio-item">
                    <img src="assets/aaaa.jpg" alt="Project 1">
                    <div class="portfolio-info">
                        <h3>SB</h3>
                        <p>This is my first pixel art project.</p>
                    </div>
                </div>
                <div class ="portfolio-item">
                    <img src="assets/p.gif" alt="Project 2">
                    <div class="portfolio-info">
                        <h3>Heavy Rotation</h3>
                        <p>
                        "You know where this reference is from, right?"</p>
                    </div>
                </div>
                <div class ="portfolio-item">
                    <img src="assets/lemar.png" alt="Project 3">
                    <div class="portfolio-info">
                        <h3>Guitar</h3>
                        <p>Just a guitar.</p>
                    </div>
                </div>
                <div class ="portfolio-item">
                    <img src="assets/pring.png" alt="Project 4">
                    <div class="portfolio-info">
                        <h3>The Last Supper</h3>
                        <p>Kharisma Bahari's warteg supremacy.</p>
                    </div>
                </div>
                <div class ="portfolio-item">
                    <img src="assets/pilah.png" alt="Project 5">
                    <div class="portfolio-info">
                        <h3>Pilah Sampah</h3>
                        <p>This is my final project for the module: Construct 3. You can play it if you <a href="https://supafurai.itch.io/pilahsampah">click this</a>.</p>
                    </div>
                </div>
                <div class ="portfolio-item">
                    <img src="assets/balap.png" alt="Project 6">
                    <div class="portfolio-info">
                        <h3>Street Racing</h3>
                        <p>A simple racing game that you can play if you <a href="https://supafurai.itch.io/streetracing">click this</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="blog">
    <h2>Blog</h2>
    <div class="blog-container">
        <div class="blog-item">
            <img src="assets/first.png" alt="Blog Image 1">
            <h3>My First HTML Project</h3>
            <p>My first experience learning HTML was very enjoyable.</p>
            <a href="blog.html"><button>Learn More</button></a>
        </div>
        <div class="blog-item">
            <img src="assets/rumah2.png" alt="Blog Image 2">
            <h3>My First Project at Blender 3D</h3>
            <p>At first, I was very confused because there were so many features.</p>
            <a href="asstes/blog.html"><button>Learn More</button></a>
        </div>
        <div class="blog-item">
            <img src="assets/baju.png" alt="Blog Image 3">
            <h3>T-shirt</h3>
            <p>I tried designing clothes.</p>
            <a href="assets/blog.html"><button>Learn More</button></a>
        </div>
    </div>
</div>


    <section id="contact">
        <div class="container">
            <h2>Contact</h2>
            <div class="contact-row">
                <div class="contact-info">
                    <br><br><br><br><br><br><br>
                    <p>Email: shallombiyan@gmail.com</p>
                    <br>
                    <p>Phone: +6284616962065</p>
                    <br>
                    <p>Location: Special Region of Yogyakarta, Indonesia</p>
                    <br>
                </div>
                <div class="contact-form">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <img src="assets/nam.png" alt="name">
                            <input type="text" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <img src="assets/ismailbinmail.png" alt="email">
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <img src="assets/tepon.png" alt="message">
                            <textarea name="message" id="message"></textarea>
                        </div>
                        <button type="submit" >Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Created with love Magang Soraya 2024</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>