        <footer class="page-footer purple">
            <div class="container">

                <div class="row">

                    <div class="col l6 s12">
                        <h5 class="light">Malgadi Books</h5>
                        <p class="grey-text text-lighten-4 footer-description">Malgadi books is a start-up organisation run by college students to provide academic engineering text books and reference books at reasonable rates to students pursuing engineering. We here at Malgadi intend to develop the platform whereby selling engineering textbooks on fingertips and help college students with their studies. Along with this, we also actively organize workshops and seminars in colleges to bestow technical knowledge to students.</p>
                        
                        <div class="row">
                            <div class="col s12">
                                <p class="grey-text text-lighten-4 footer-description"><b>Malgadi</b> is a subsidiary company of <b><a href="http://heavensolarenergy.com" target="_BLANK">Heaven Solar <i class="fa fa-external-link" aria-hidden="true"></i></a></b>.</p>
                            </div>
                            <div class="col s8 m4 l6">
                                <img src="./images/heaven-solar-logo.png" alt="Heaven Solar Logo" class="responsive-img">
                            </div>
                        </div>

                    </div>

                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text light">Links</h5>
                        <ul class="light">
                            <li><a class="grey-text text-lighten-3" href="<?php echo BaseAddress; ?>">Home</a></li>
                            <li><a class="grey-text text-lighten-3" href="cart.php">My Cart</a></li>
                            <li><a class="grey-text text-lighten-3" href="track.php">Track Order</a></li>
                            <li><a class="grey-text text-lighten-3" href="review.php">Review Us</a></li>
                            <li><a class="grey-text text-lighten-3" href="#contact-form">Contact</a></li>
                            <li><a class="grey-text text-lighten-3" href="about.php">About Us</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://malgadi.co.in">Malgadi.co.in</a></li>
                        </ul>
                    </div>

                    <div class="col l4 s12 offset-l2 footer-social">
                        <h5 class="white-text light">Social</h5>
                        <a target="_blank" href="https://www.facebook.com/malgadi.co.in/"><i class="fa fa-facebook-official"></i></a>
                        <a target="_blank" href="https://www.instagram.com/malgadi_ndd/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UC37swT-hpPGfXfg01CTPOBQ"><i class="fa fa-youtube-play"></i></a>
                    </div>

                    <div class="col l4 s12 offset-l2 footer-social">
                        <h5 class="white-text light">Contact</h5>
                        <a class="grey-text text-lighten-4" href="mailto:malgadibooks@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        <a class="grey-text text-lighten-4 modal-trigger" href="#contactModal"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    </div>

                    <div class="col l4 s12 offset-l2 footer-social">
                        <h5 class="white-text light">Source</h5>
                        <a class="grey-text text-lighten-4" href="https://github.com/malgadi-nadiad/Books" target="_BLANK"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </div>

                </div>

                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text light">Contact Form</h5>
                        <p class="grey-text text-lighten-4 light">Send us your Queries.</p>
                        <div class="row">
                            <form id="contact-form" class="scrollspy">
                            <div class="col l6 m4 s10 input-field">
                                <input placeholder="Name" type="text" class="white" autocomplete="name" id="ContactName" required>
                            </div>
                            <div class="col l6 m4 s10 input-field">
                                <input placeholder="Email" type="email" class="white" autocomplete="email" id="ContactEmail" required>
                            </div>
                            <div class="col l6 m4 s10 input-field">
                                <input placeholder="Mobile" type="number" class="white" autocomplete="tel-national" id="ContactPhone" required>
                            </div>
                            <div class="col l12 m12 s10 input-field">
                                <textarea placeholder="Your Message" class="materialize-textarea white charCounter" id="ContactMessage" data-length="1200" required></textarea>
                            </div>
                            </form>
                            <div class="col s12">
                                <button class="waves-effect waves-light btn-large blue darken-2" form="contact-form" type="submit" id="contact-submit">Send <i class="fa fa-paper-plane right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer-copyright">
                <div class="container">

                    <div class="col s12 center">
                        &copy; <?php echo date("Y");?> <a href="https://parthshahk.github.io/" target="_BLANK" class="credits">Parth Shah</a> <i class="fa fa-external-link credits-link" aria-hidden="true"></i>
                    </div>

                    <div class="col s12 center">
                        Released under the <a href="https://opensource.org/licenses/MIT" target="_BLANK" class="credits">MIT</a> License
                    </div>

                    <div id="contactModal" class="modal bottom-sheet">
                        <div class="modal-content black-text">
                            <ul class="collection">
                                <?php
                                    $contacts = file_get_contents("./json/contacts.json");
                                    $contacts = json_decode($contacts,true);
                                    foreach ($contacts as $contact) {
                                ?>
                                <li class="collection-item avatar">
                                    <img src="<?php echo BaseAddress; ?><?php echo $contact['image']; ?>" alt="<?php echo $contact['name']; ?>" class="circle">
                                    <span class="title contact-title grey-text text-darken-3"><?php echo $contact['name']; ?></span>
                                    <p class="contact-number grey-text text-darken-3">(+91) <?php echo $contact['phone']; ?></p>
                                    <a href="tel:<?php echo $contact['phone']; ?>" class="secondary-content"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <div id="modal-contact-success" class="modal">
                <div class="modal-content">
                    <h4 class="light green-text text-darken-1 center">Thank You!</h4>
                    <p class="ligth center">Your message has been submitted successfully.<br>We will respond to you as soon as possible.</p>
                </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>
        <div id="modal-contact-failure" class="modal">
                <div class="modal-content">
                    <h4 class="light red-text text-darken-1 center">Oops!</h4>
                    <p class="ligth center">Sorry, suspicious activity was detected in your message or the content was too long.<br>Please try again or contact us directly.</p>
                </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-light btn-flat">Close</a>
            </div>
        </div>
        <script src="<?php echo BaseAddress; ?>/js/materialize.min.js"></script>
        <script src="<?php echo BaseAddress; ?>/js/script.js?q=3"></script>
        <script src="https://use.fontawesome.com/25db837a52.js"></script>
    </body>
</html>