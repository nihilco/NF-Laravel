@extends('layouts.main')

@section('title', 'Home')

<?php
$today = \Carbon\Carbon::now();
$newYear = \Carbon\Carbon::createFromDate(2018,1,1);
?>

@section('content')
    <div class="jumbotron jumbotron-fluid" id="jumbotron-index" style="margin-bottom:0;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
        <h2>Overwhelmed? Stressed? Short on time?</h2>
        <h1 class="display-3">Let Schows Estate Sales help.</h1>
        <hr class="my-4">
        <p class="lead">Schows Estate Sales is the answer to the many question associated with settling an estate, downsizing a collection, moving, or just simplifying your lifestyle.  We can help you like we have help others. Our team has a tested process that maximizes your returns while minimizing your stress. Our process is catered towards you and the items you are wishing to sale. We are not an one size fits all estate sale company. Our team customizes its approach to the needs of you, the client, and the material being offer. Schows Estate Sales is the solution to your problems.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
        </p>
    </div>
    </div>
      </div>
    </div>

    <div style="background:#86cae8; color:#fff; padding-top:2em; padding-bottom:2em;text-transform: uppercase;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3>Minimizing Stress - Maximizing Returns</h3>
          </div>
        </div>
      </div>
    </div>

<section style="padding-top:100px; padding-bottom:100px; background-color:#f8f9fa;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Notable Sales</h2>
    <p>These are examples of items we have brokered. Important and valuable objects need attention from specialists. We go beyond researching value to researching where to find those potential clients that will want your item. The results speak for themselves.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <img src="/img/The-Massachusetts-Magazine.jpg" class="block w-100" />
        <h5>The Massachusetts Magazine</h5>
        <p>George Washingtons personal copy of The Massachusetts Magazine Vol 1 - 1789 (including signature and bookplate) chronicling his inauguration...</p>
        <h6>Sold for $138,000.</h6>
      </div>    
      <div class="col-sm-3">
        <img src="/img/Silver-Service.jpg" class="block w-100" />
        <h5>Sterling Tea Service</h5>
    <p>Samuel Kirk & Son repousse sterling silver tea service, 6 pieces, comprised of a swing kettle on stand with burner, coffee pot, tea pot, creamer, covered sugar bowl with lion mask and ring handles...</p>
        <h6>Sold for $11,000.</h6>
      </div>
      <div class="col-sm-3">
        <img src="/img/36-Star-Flag.jpg" class="block w-100" />
        <h5>36-Sar Flag</h5>
        <p>Civil War era American hand-sewn 36-star flag. Descended in the family of Charles Harrod Boyd, who served on General George H. Thomas staff as Captain of the Topographical Engineers, Army of the Cumberland.</p>
        <h6>Sold for $5,500.</h6>
      </div>
    
      <div class="col-sm-3">
        <img src="/img/Oil-on-Canvas.jpg" class="block w-100" />
        <h5>Oil on Canvas</h5>
    <p>Victor Anderson oil on canvas titled "Barn Swallow - Children Playing in Hay Loft", circa 1935. Depicting children swinging from the rafters of a barn onto the hay below, signed lower right, Victor C. Anderson.</p>
        <h6>Sold for $33,600.</h6>
      </div>
    </div>
  </div>
</section>

<section style="padding-top:100px; padding-bottom:100px; background-color:#eed8bd">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2>Heres How To Reach Us</h2>
        <p>We serve the greater Chattanooga area.</p>

    <div class="embed-responsive embed-responsive-4by3">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208917.7731190438!2d-85.37877587939171!3d35.0982149388405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886060408a83e785%3A0x2471261f898728aa!2sChattanooga%2C+TN!5e0!3m2!1sen!2sus!4v1528982749363" width="600" height="450" frameborder="0" style="border:0" class="embed-responsive-item" allowfullscreen></iframe>
    </div>
      </div>
      <div class="col-sm-6">
        <h2>Contact Us Now</h2>
        <p>Please fill out the form below:</p>

    <form class="needs-validation" novalidate>
      <div class="form-row">
        <div class="col-sm-6 mb-3">
          <label for="validationCustom01">First name</label>
          <input type="text" class="form-control" id="validationFirstName" placeholder="John" required>
          <div class="invalid-feedback">
            Please enter a first name.
          </div>
        </div>
        <div class="col-sm-6 mb-3">
          <label for="validationCustom02">Last name</label>
          <input type="text" class="form-control" id="validationLastName" placeholder="Smith" required>
          <div class="invalid-feedback">
            Please enter a last name.
          </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationCustomEmail">Email</label>
          <input type="text" class="form-control" id="validationEmail" placeholder="jsmith@example.com" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please enter an email address.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustomEmail">Phone Number</label>
          <input type="text" class="form-control" id="validationPhoneNumber" placeholder="(123) 456-7890" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please enter a phone number.
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-12 mb-3">
          <label for="validationCustom03">Message</label>
          <textarea class="form-control" id="validationMessage" placeholder="Type your message here..." rows="5" required></textarea>
          <div class="invalid-feedback">
            Please enter a message.
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Send Message</button>
    </form>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
    
      </div>
    </div>
  </div>
</section>
@endsection