<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="css/styles.css" />
    <!-- box icon -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Portfolio</title>
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">Farhan.</a>

      <i class="bx bx-menu" id="menu-icon"></i>
      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Service</a>
        <a href="#project">Project</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>

    <!-- home section  -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Muhammad Farhan Yousaf</h1>
        <h3>And I'm a <span class="multiple-text"> </span></h3>



        
        <p>
          Passionate full-stack developer with expertise in both front-end and back-end development, skilled in crafting intuitive and responsive user interfaces using HTML, CSS, and JavaScript, while also proficient in Laravel for building robust and scalable back-end solutions. Committed to delivering seamless web experiences that drive user engagement and business success, with a strong focus on clean code and efficient functionality across the entire development stack.
        </p>
        <div class="social-media">
          <a href="https://www.facebook.com/profile.php?id=100008825046900&mibextid=LQQJ4d"><i class="bx bxl-facebook"></i></a>
          {{-- <a href="#"><i class="bx bxl-twitter"></i></a> --}}
          <a href="https://www.instagram.com/farhandevportfolio?igsh=MTBybzZ0dzJyb3V2aA%3D%3D&utm_source=qr"><i class="bx bxl-instagram"></i></a>
          <a href="www.linkedin.com/in/farhan-yousaf-37a256251"><i class="bx bxl-linkedin"></i></a>
        </div>
        <a href="#" class="btn" id="downloadCV">Download CV</a>
      </div>
      <div class="home-img">
        <img src="img/About1.png" alt="" />
      </div>
    </section>

    <!-- about Section  -->
    <section class="about" id="about">
      <div class="about-img">
        <img src=img/About1.png alt="" />
      </div>
      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Full-Stack Developer!</h3>
        <p>
          As a computer science graduate and full-stack developer with over 1 year of hands-on experience, I possess strong technical skills in HTML, CSS, JavaScript, and PHP, along with extensive experience in the Laravel framework for back-end development. I have a solid understanding of front-end technologies and am adept at creating responsive, user-centered web applications. A fast learner, strong communicator, and dedicated team player, I am committed to continuous learning and professional growth. I am eager to apply my expertise in both front-end and back-end development to build efficient and innovative solutions.
        </p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>
    <!-- service section -->
    <section class="services" id="services">
      <h2 class="heading">Our <span>Services</span></h2>
      <div class="services-container">
        <div class="services-box">
          <i class="bx bx-code-alt"></i>
          <h3>Web Development</h3>
          <p> Elevate your online presence with my professional web development services. Combining modern, responsive design with seamless functionality, I create custom solutions that not only look great but also deliver measurable results. Let's work together to build impactful digital experiences that engage your audience and drive success. </p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="services-box">
          <i class="bx bxs-paint"></i>
          <h3>Web Desining</h3>
          <p>
            Elevate your brand's digital identity with our expert web design
            services. Our creative team blends stunning aesthetics with
            intuitive user experiences, delivering visually captivating websites
            that effectively engage and convert visitors into loyal customers.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="services-box">
          <i class="bx bx-bar-chart-alt"></i>
          <h3>Graphic Designing</h3>
          <p>
            Elevate your brand and captivate your audience with my exceptional graphic design services. 
            I blend creativity and strategy to produce stunning visuals that effectively communicate 
            your message. From logos and branding to marketing materials and digital content, 
            I craft designs that leave a lasting impression and drive engagement.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>
    </section>
    <!-- project section  -->
    <section class="project" id="project">
      <h2 class="heading">Latest <span>Projects</span></h2>

      <div class="project-container">
        <div class="project-box">
          <img src="img/project (1).jpeg" alt="project1 pic" />
          <div class="project-layer">
            <h4>Web Design</h4>
            <p>
              Transform your online presence with my innovative web design services. 
              I focus on creating visually appealing and user-friendly websites that 
              not only captivate visitors but also enhance functionality. By combining 
              aesthetics with the latest design trends, I ensure that your website stands out 
              and effectively communicates your brand's message, driving engagement and conversions.
            </p>            
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="img/project (2).jpeg" alt="project1 pic" />
          <div class="project-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
              explicabo incidunt sint. Numquam, autem maxime?
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="img/project (3).jpeg" alt="project1 pic" />
          <div class="project-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
              explicabo incidunt sint. Numquam, autem maxime?
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="img/project (4).jpeg" alt="project1 pic" />
          <div class="project-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
              explicabo incidunt sint. Numquam, autem maxime?
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="img/project (5).jpeg" alt="project1 pic" />
          <div class="project-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
              explicabo incidunt sint. Numquam, autem maxime?
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="img/project (6).jpeg" alt="project1 pic" />
          <div class="project-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
              explicabo incidunt sint. Numquam, autem maxime?
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- contact secction -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>
        <form id="contactForm" method="POST" action="/send-contact-mail">
          <div class="input-box">
            <input type="text" name="name" placeholder="Full Name" required />
            <input type="email" name="email" placeholder="Email Address" required />
          </div>
          <div class="input-box">
            <input type="number" name="mobile" placeholder="Mobile Number" required />
            <input type="text" name="subject" placeholder="Email Subject" required />
          </div>
          <textarea
            name="message"
            cols="30"
            rows="10"
            placeholder="Your Message"
            required
          ></textarea>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" value="Send Message" class="btn" />
        </form>
      </section>
      

    <!-- footer  -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2024 by Farhan Yousaf | All Right Reserved</p>
      </div>
      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <!-- scroll reveal -->

    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed script  -->

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script src="js/script.js"></script>


    <!-- Include jQuery and SweetAlert libraries in your HTML -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
  $(document).ready(function() {
    $('#downloadCV').on('click', function(e) {
      e.preventDefault(); // Prevent default anchor click behavior

      Swal.fire({
        title: 'Download CV',
        text: 'Are you sure you want to download your CV?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, download it!'
      }).then((result) => {
        if (result.isConfirmed) {
          // If user clicks "Yes", initiate the download via AJAX
          $.ajax({
            url: '/storage/cv/farhan_resume.pdf',
            // Use forward slashes for the path
            method: 'GET',
            xhrFields: {
              responseType: 'blob' // Set the response type to blob for file download
            },
            success: function(data) {
              // Create a blob object from the data
              const blob = new Blob([data], { type: 'application/pdf' });
              const url = window.URL.createObjectURL(blob);
              const a = document.createElement('a');
              a.href = url;
              a.download = 'farhan_CV.pdf'; // Specify the name of the downloaded file
              document.body.appendChild(a);
              a.click();
              a.remove();
              window.URL.revokeObjectURL(url); // Cleanup the URL object
            },
            error: function() {
              Swal.fire('Error!', 'There was an error downloading your CV.', 'error');
            }
          });
        }
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
       $(document).ready(function() {
    $('form').on('submit', function(e) {
        e.preventDefault();

        // Get form data
        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var message = $('textarea[name="message"]').val();

        // Format the message
        var text = "Name: " + name + "\nEmail: " + email + "\nMessage: " + message;

        // WhatsApp message link
        var phone = "+923110855471"; // Replace with your WhatsApp number (with country code, no +)
        var whatsappUrl = "https://wa.me/" + phone + "?text=" + encodeURIComponent(text);

        // Open WhatsApp chat in new window/tab (works on mobile and desktop)
        window.open(whatsappUrl, '_blank');

        // Optionally show success message (though user will likely be redirected)
        Swal.fire({
            title: 'Redirecting...',
            text: 'You will be redirected to WhatsApp to send your message.',
            icon: 'info',
            confirmButtonText: 'OK'
        });
    });
});


            
        </script>

        

  </body>
</html>
