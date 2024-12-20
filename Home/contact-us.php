
<?php
   include('../Database/connection.php');
  
  
include('header.php');
?>
<div class="contact-box-main">
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="contact-info-left">
                <h2>CONTACT INFO</h2>
                <ul>
                    <li>
                        <p><i class="fas fa-map-marker-alt"></i>Address: Shah Faisal Colony<br>Karachi<br> 75230 </p>
                    </li>
                    <li>
                        <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">03122510275</a></p>
                    </li>
                    <li>
                        <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">arbaznadeem3130@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-sm-12">
            <div class="contact-form-right">
                <h2>GET IN TOUCH</h2>
                <form id="contactForm">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="name" placeholder="Subject" required data-error="Please enter your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include('footer.php');
?>
