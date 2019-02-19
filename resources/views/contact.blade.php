<div class="container-fluid">
    <div class="section-header">
      <h3>Contact Us</h3>
    </div>
    <div class="row wow fadeInUp">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-md-5 info">
            <i class="ion-ios-location-outline"></i>
            <p>Calle 2a # 8a -15, Socorro</p>
          </div>
          <div class="col-md-4 info">
            <i class="ion-ios-email-outline"></i>
            <p>go.juangomez23@gmail.com</p>
          </div>
          <div class="col-md-3 info">
            <i class="ion-ios-telephone-outline"></i>
            <p>+57 318-831-5485</p>
          </div>
        </div>
        <div class="form">
          <form action={{route('contact')}} method="post" role="form" class="contactForm">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-lg-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center">
                <button type="submit" title="Send Message" id='btn-contact' class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>