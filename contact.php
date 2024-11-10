<?php 

$page = 'contact';
$pageTitle	= 'Weimer Insurance | CONTACT US';
$description = 'Contact Weimer Insurance to finalize your insurance needs.'; 

include 'components/header.php'; 

?>

		<!-- Banner -->
        <div id="banner-wrapper">
            <div id="banner-services">
                <div class="row">
                    <div class="col-7 col-12-medium">
                        <h2>Contact Us Today!</h2>
                    </div>
                </div>
                <img class="service-banner" src="assets/images/contact-us.jpg" />
            </div>
        </div>

						<!-- Main -->
                        <div id="main-wrapper">
                            <div class="container">
                                <div id="content">
                                    <div class="row aln-top">
                                    <!-- Content -->
                                        <div class="col-6 col-6-medium col-12-small">
                                            <h2>Send a message</h2>
                                            <p>Use the form below to email us directly.</p>
                                            <form method="post">
                                                <label for="name">Name</label>
                                                <input type="text" name="name"/>
                                                <label for="phone">Phone</label>
                                                <input type="tel" name="phone"/>
                                                <label for="email">Email</label>
                                                <input type="email" name="email"/>
                                                <label for="message">Message</label>
                                                <textarea name="message"></textarea>
                                            </form>
                                        </div>

                                        <div class="col-6 col-6-medium col-12-small">        
                                            <h2>Visit our office</h2>
                                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.120379739276!2d-80.6212254!3d41.066089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8833efe4d46f56ff%3A0x997a26536f263fb9!2s3449%20Lenox%20Ave%2C%20Youngstown%2C%20OH%2044502%2C%20USA!5e1!3m2!1sen!2sca!4v1728177569321!5m2!1sen!2sca" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

<?php include 'components/footer.php'; ?>