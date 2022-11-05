 <!-- ***** Reservation Us Area Starts ***** -->
 <section class="section" id="reservation">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 align-self-center">
              <div class="left-text-content">
                  <div class="section-heading">
                      <h6>Contact Us</h6>
                      <h2>You can just walkin to our restaurant or make reservation for better expeience</h2>
                    </div>
                    <p><b>Address:</b><br> Level 13,Hamid Tower,Gulshan Circle 2 1212 Dhaka,Dhaka Division,Bangladesh</p>
                    <div class="row">
                      <div class="col-lg-6">
                          <div class="phone">
                              <i class="fa fa-phone"></i>
                              <h4>Phone Numbers</h4>
                              <span><a href="#">+088 01316-048262</a><br><a href="#">+088 01316-047867</a></span>
                            </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="message">
                              <i class="fa fa-envelope"></i>
                              <h4>Emails</h4>
                              <span><a href="#">www.TheRedChamber.com</a><br><a href="#">RedChember@info.com</a></span>
                            </div>
                      </div>
                  </div>
              </div>
          </div>

          
          <div class="col-lg-6">
              <div class="contact-form">
                <form id="contact" action="{{ url('reservation') }}" method="post">

                    @csrf

                    <div class="row">
                      <div class="col-lg-12">
                          <h4>Table Reservation</h4>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                      </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <input type="num" name="guest" placeholder="Number of Guests">
                       </div>
                      <div class="col-lg-6">
                          <div id="filterDate2">    
                            <div class="input-group date" data-date-format="dd/mm/yyyy">
                              <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                              <div class="input-group-addon" >
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-md-6 col-sm-12">
                        

                        <input type="time" name="time">
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <a href="google.com">
                          <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                        </a>
                        </fieldset>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ***** Reservation Area Ends ***** -->