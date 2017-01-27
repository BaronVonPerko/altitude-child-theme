<form id="altitudeChildContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php') ?>">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Your Name" id="name" name="name" required="required" />
    </div>

    <div class="form-group">
        <input type="email" class="form-control" placeholder="Your Email" id="email" name="email" required="required" />
    </div>

    <div class="form-group">
        <textarea name="message" id="message" class="form-control" required="required" placeholder="Your Message"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default ac-button">Submit</button>
    </div>

    <div class="message-sent">
        <h1>Your message has been sent.</h1>
    </div>

</form>