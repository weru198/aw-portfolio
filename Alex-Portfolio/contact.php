<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contact | Alex Waweru</title>

    <link rel="stylesheet"
          href="css/style.css">

    <link rel="stylesheet"
          href="css/responsive.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<body>


<!-- ================= NAVIGATION ================= -->

<header class="header">

    <nav class="navbar">

        <a href="index.html" class="logo">
            AW
        </a>


        <div class="nav-links" id="navLinks">

            <a href="index.html">Home</a>

            <a href="index.html#about">About</a>

            <a href="index.html#skills">Skills</a>

            <a href="projects.html">Projects</a>

            <a href="index.html#certifications">Training</a>

            <a href="contact.php">Contact</a>

            <a href="assets/Alex-Waweru-CV.pdf"
               class="nav-cv"
               download>

                <i class="fas fa-download"></i>
                Download CV

            </a>

        </div>


        <button class="menu-toggle"
                id="menuToggle"
                aria-label="Open navigation">

            <i class="fas fa-bars"></i>

        </button>

    </nav>

</header>


<!-- ================= CONTACT HERO ================= -->

<section class="contact-hero">

    <div>

        <p class="section-subtitle">
            Get In Touch
        </p>

        <h1>
            Let's Connect
        </h1>

        <p>
            I'm open to opportunities, internships, collaborations,
            and projects involving IT support, networking,
            cybersecurity, and web development.
        </p>

    </div>

</section>


<!-- ================= CONTACT SECTION ================= -->

<section class="contact-section">

<?php if (isset($_GET['status'])): ?>

    <?php if ($_GET['status'] === 'success'): ?>

        <div class="form-message success">
            <i class="fas fa-circle-check"></i>
            Your message was sent successfully. Thank you for reaching out!
        </div>

    <?php elseif ($_GET['status'] === 'error'): ?>

        <div class="form-message error">
            <i class="fas fa-circle-exclamation"></i>
            Please complete all the required fields.
        </div>

    <?php elseif ($_GET['status'] === 'invalid-email'): ?>

        <div class="form-message error">
            <i class="fas fa-circle-exclamation"></i>
            Please enter a valid email address.
        </div>

    <?php elseif ($_GET['status'] === 'failed'): ?>

        <div class="form-message error">
            <i class="fas fa-circle-exclamation"></i>
            Your message could not be sent. Please try again later.
        </div>

    <?php endif; ?>

<?php endif; ?>
    <div class="contact-grid">


        <!-- CONTACT INFORMATION -->

        <div class="contact-info">

            <p class="section-subtitle">
                Contact
            </p>

            <h2>
                Have a project or opportunity?
            </h2>

            <p>
                Feel free to reach out through any of the platforms
                below. I'll be happy to connect and discuss
                opportunities or technical projects.
            </p>


            <!-- EMAIL -->

            <a href="mailto:YOUR_EMAIL@example.com"
               class="contact-item">

                <div class="contact-icon">

                    <i class="fas fa-envelope"></i>

                </div>

                <div>

                    <span>
                        Email
                    </span>

                    <strong>
                        wawerue688@gmail.com
                    </strong>

                </div>

            </a>


            <!-- GITHUB -->

            <a href="https://github.com/weru198"
               target="_blank"
               class="contact-item">

                <div class="contact-icon">

                    <i class="fab fa-github"></i>

                </div>

                <div>

                    <span>
                        GitHub
                    </span>

                    <strong>
                        View My GitHub
                    </strong>

                </div>

            </a>


            <!-- LINKEDIN -->

            <a href="https://www.linkedin.com/in/alexweru/"
               target="_blank"
               class="contact-item">

                <div class="contact-icon">

                    <i class="fab fa-linkedin"></i>

                </div>

                <div>

                    <span>
                        LinkedIn
                    </span>

                    <strong>
                        Connect With Me
                    </strong>

                </div>

            </a>


            <!-- CV -->

            <a href="assets/Alex-Waweru-CV.pdf"
               class="contact-item"
               download>

                <div class="contact-icon">

                    <i class="fas fa-file-pdf"></i>

                </div>

                <div>

                    <span>
                        Resume
                    </span>

                    <strong>
                        Download My CV
                    </strong>

                </div>

            </a>

        </div>


        <!-- CONTACT FORM -->

        <div class="contact-form-container">

            <h3>
                Send a Message
            </h3>

            <p>
                Have an opportunity or question? Send me a message.
            </p>


            <form
                action="send-message.php"
                method="POST"
                class="contact-form">


                <div class="form-group">

                    <label for="name">
                        Your Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your name"
                        required>

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        required>

                </div>


                <div class="form-group">

                    <label for="subject">
                        Subject
                    </label>

                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        placeholder="What is this about?"
                        required>

                </div>


                <div class="form-group">

                    <label for="message">
                        Message
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Write your message..."
                        required></textarea>

                </div>


                <button
                    type="submit"
                    class="btn-primary">

                    Send Message

                    <i class="fas fa-paper-plane"></i>

                </button>

            </form>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div>

        <a href="index.html"
           class="logo">

            AW

        </a>

        <p>
            Networking,IT & Cybersecurity Portfolio
        </p>

    </div>


    <div class="footer-socials">

        <a href="https://github.com/weru198"
           target="_blank">

            <i class="fab fa-github"></i>

        </a>

        <a href="https://www.linkedin.com/in/alexweru/"
           target="_blank">

            <i class="fab fa-linkedin"></i>

        </a>

        <a href="mailto:wawerue688@gmail.com">

            <i class="fas fa-envelope"></i>

        </a>

    </div>


    <p class="copyright">
        © 2026 Alex Waweru. All rights reserved.
    </p>

</footer>


<script src="js/script.js"></script>

</body>

</html>