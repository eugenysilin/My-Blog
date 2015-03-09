<? include('header.php') ?>
<div class="container content">
    <div class="row page-title">
        <h2>Contact Us</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <h4>You can contact our manager.</h4>
            </div>
            <div class="row">
                <form method="post" action="" class="contact_form">
                    <div class="form-group">
                        <label for="yourName">Your Name</label>
                        <input type="text" class="form-control" id="yourName" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="yourEmail">Your Email</label>
                        <input type="email" class="form-control" id="yourEmail" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="yourMessage">Your Message</label>
                        <textarea class="form-control" id="yourMessage"
                                  placeholder="Your Message" rows="7"></textarea>
                    </div>
                    <input type="submit" class="btn btn-default" id="contact_form_submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div class="block_address">
                <address>
                    <strong>My Blog</strong><br>
                    Roganskaya ave, 150<br>
                    Kharkov, Ukraine<br>
                    <abbr title="Phone">Phone:</abbr> +38(063) 114-38-40
                </address>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>