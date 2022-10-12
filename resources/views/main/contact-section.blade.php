<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <p>
        <b>DROP US A LINE.</b> <br>
        Open for more communication with you. <br>
        Use this form for any requests and suggestions.
      </p>
    </div>

    <div class="row">
      
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Cross Road View, Complex Building, <br> Charles Rubia Rd, Nairobi CBD</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>airwebref@gmail.com <br> info@airweb.co.ke</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+254 722-552-491 <br>+254 733-221-876 <br> +254 729-117-333</p>
          </div>

          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.2783742214!2d36.8285446!3d-1.2820161!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbbb781b12f48614b!2sAirweb%20Refrigeration%20(EA)%20Ltd!5e0!3m2!1sen!2ske!4v1665551609331!5m2!1sen!2ske"
            frameborder="0"
            style="border:0; width: 100%; height: 290px;" 
            allowfullscreen
            >
          </iframe>
        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="{{ route('contacts.store') }}" method="post" class="php-email-form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section>
