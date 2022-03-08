<div class="modal fade" id="contactForm" role="dialog">
        <div class="modal-dialog modal-lg p-5 pt-0 mt-0 mb-5">
          <div class="modal-content">
            <div class="contact-area-bg">
              <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                  <h3 class="consulting_title">Fill out the form to reach us.</h3>
                </div>

                <div class="col-lg-6 pt-4 consulting_form">
                  <div class="contact-form ">
                  <form id="contactForm" method="POST" action="{{ route('customer.contact-us.store') }}">
                    @csrf
                      <input type="hidden" name="csrfmiddlewaretoken" value="#">
                      <div class="row">
                        <div class="col-md-12" style="right: 60px; bottom: 55px;">
                          <div class="form-group" style="width: 250px;">
                            <input type="text" name="name" id="name" class="form-control" required="true"
                              placeholder="Full Name *">
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group" style="width: 250px;">
                            <input type="text" name="email" id="email" class="form-control" required="true"
                              placeholder="Email *">
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group" style="width: 250px;">
                            <input type="text" name="phone" id="phone" class="form-control"
                              placeholder="Contact number *">
                            <div class="help-block with-errors"></div>
                          </div>
                          
                          <div class="form-group" style="width: 250px;">
                            <select class="form-control" name="service" >
                              <option value="" selected="">Choose your service</option>
                              <option value="Software Development Services">Software Development Services</option>
                              <option value="Front-End Development Service">Front-End Development Service</option>
                              <option value="Website Development">Website Development</option>
                              <option value="Mobile App Development">Mobile App Development</option>
                              <option value="API Development">API Development</option>
                              <option value="UI/UX Design and Development">UI/UX Design and Development"</option>
                              <option value="Other services">Other services</option>
                            </select>
                          </div>
                          <div class="form-group" style="width:500px;">
                            <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                          </div>
                          <div class="col-lg-12 col-md-12 text-center">
                          <input type="submit" value="Submit" class="btn btn-primary consultation_btn"
                            style="pointer-events: all; cursor: pointer;">
                        </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6 text-right">

                  <img src="{{ asset('frontend/Assets/static/img/popin.svg')}}" width="325px" class="consulting_img_mb" />
                </div>
                <span class="" style="position: absolute; top: 20px; right: 20px;"><i class="fa fa-times"
                    data-dismiss="modal" style="cursor: pointer;"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>