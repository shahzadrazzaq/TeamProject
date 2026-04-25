<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>

    <!-- Section 1 - contact  -->

    <div class="contact-section">
        <div class="contact-details" data-aos="fade-right" data-aos-duration="2000">
            <h1>Contact us</h1>
            <p class="contact-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum ea totam illo
                consequatur neque!</p>
            <p class="contact-email"><span><img class="contact-img" src="Conatct_images/contact.svg"
                        alt="contact-image missing"></span>123@123.com</p>
            <p class="contact-number"><span><img class="contact-img" src="Conatct_images/contact 2.svg"
                        alt="contact-image missing"></span>+889-776-899</p>
        </div>
        <form id="contactForm" class="contact-form" data-aos="fade-left" data-aos-duration="2000">
            <div class="form">
                <input type="text" name="user_name" placeholder="Enter Name" required>
                <input type="email" name="user_email" placeholder="Enter Email" required>

                <input type="number" name="user_phone" placeholder="Enter Phone Number">
                <select name="user_option">
                    <option>Select Option</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <textarea name="message" placeholder="Enter Your Message" required></textarea>

                <button type="submit">Submit Now</button>
            </div>
            <div id="successMessage" class="success-message">
                Message sent successfully!
            </div>
        </form>
    </div>


    <!-- Section 2 - Location  -->

    <div class="location">
        <div class="location-details" data-aos="fade-up" data-aos-duration="2000">
            <h2>Our Location</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo porro perferendis unde harum rem neque
                provident placeat maiores quasi necessitatibus.</p>
            <div class="address-1"><span><img src="Conatct_images/location_icon.png"
                        alt="location-img missing"></span>3891 Ranchview Dr. Richardson,
                California 62639</div>
            <div class="address-2"><span><img src="Conatct_images/location_icon.png"
                        alt="location-img missing"></span>4140 Parker Rd. Allentown, New Mexico 31134</div>
        </div>
    </div>


    <!-- Section 3 - FAQs  -->

    <section class="faq-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-right" data-aos-duration="2000">Frequently Asked Questions</h2>

            <div class="faq-container">
                <div class="faq-item active" data-aos="fade-left" data-aos-duration="2000">
                    <div class="faq-header">
                        <span>What services does your real estate firm offer?</span>
                        <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-body">
                        <p>Our real estate firm offers a range of services, including buying and selling homes, property
                            management, rental services, and real estate investment advice.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-right" data-aos-duration="2000">
                    <div class="faq-header">
                        <span>How can I buy a home through your firm?</span>
                        <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-body" data-aos="fade-right" data-aos-duration="2000">
                        <p>You can start by browsing our properties or contacting one of our expert agents to guide you
                            through the process.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-left" data-aos-duration="2000">
                    <div class="faq-header">
                        <span>Can your firm help me sell my home?</span>
                        <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-body">
                        <p>Yes, we provide full-service marketing and professional photography to help you get the best
                            price.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-right" data-aos-duration="2000">
                    <div class="faq-header">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis facere odio voluptatibus
                            sunt consectetur ducimus, temporibus blanditiis vitae, nobis aperiam est perspiciatis ea eos
                            possimus veniam ut? Esse, non cumque.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-left" data-aos-duration="2000">
                    <div class="faq-header">
                        <span>Lorem ipsum dolor sit amet.</span>
                        <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus incidunt quas eius
                            doloribus iusto recusandae laboriosam quibusdam voluptatibus aperiam corrupti.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="contact.js">
    </script>
</body>

</html>