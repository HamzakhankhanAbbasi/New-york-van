<?php include 'includes/header.php';?>
<section class="inner-section1">
   <div class="container">
      <div class="inner-bannerText">
         <p class="title">Book Online</p>in
         <div class="innerBanner-buttons">
            <a href="javascript:void(0)" class="cta-btn" data-bs-toggle="modal" data-bs-target="#quote-Modal">Quick Quote</a>
            <a href="javascript:void(0)" class="cta-btn">Book Online</a>
         </div>
      </div>
    
   </div>
   
   <div class="floatingForm">
        <div class="formWrap">
            <div class="formController">
                <span>Enquire Now</span>
            </div>
            <form action="">
                <h4>Enquire Now!</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="floatCta">Submit</button>
            </form>
        </div>
    </div>
    
</section>
<section class="inner-section2">
   <div class="container">
      <div class="section-title text-center">
         <p>Book <span>Online</span></p>
      </div>
      <div class="bookOnline-wrap">
         <div class="reservationwrap mb-2">
            <div class="reservationleft">
               <p class="resrvation-text"><i class="fas fa-edit"></i><a hres="#!">New Reservation</a></p>
            </div>
            <form>
               <div class="reservation-form">
                  <div class="email_formleft">
                     <input type="email" id="passengers" class="input-field mb-2" placeholder="Email Address">
                     <p class="form_lefttext">Don't have an account?&nbsp;<a href="#" class="mt-2">Register Now</a></p>
                  </div>
                  <div class="email_formleft">
                     <input type="password" id="passengers" class="input-field mb-2" placeholder="Password">
                     <p><a href="#" class="mt-2">Forgot password?</a></p>
                  </div>
                  <div class="reservation-btn">
                     <div class="resservation-btn1 ">
                        <a href="javascript:void(0)" class="cta-btn">Log in</a>
                     </div>
                     <!--<div class="resservation-btn2">-->
                     <!--   <a href="javascript:void(0)" class="cta-btn">Close</a>-->
                     <!--</div>-->
                  </div>
               </div>
            </form>
         </div>
         <!--bootstrap-5-collapse-start-->
         <div class="container">
            <div class="accordion book-accordian accordion-flush" id="accordionFlushExample">
               <div class="accordion-item">
                  <h2 class="accordion-header show" id="flush-headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     Step 1: Ride Info
                     </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">
                        <form>
                           <div class="row">
                              <div class="col-12 col-md-6 col-lg-6">
                                 <div class="onlineform-wrap">
                                    <div class="online-servicetype mb-4">
                                       <label for="v-type" class="mb-2">Select Service Type</label>
                                       <select class="input-field" id="v-type">
                                          <option selected="selected">Select Vehicle</option>
                                          <option>lorem ipsum</option>
                                          <option>lorem ipsum</option>
                                          <option>lorem ipsum</option>
                                          <option>lorem ipsum</option>
                                       </select>
                                    </div>
                                    <div class="row">
                                       <div class="col-12 col-md-12 col-lg-6 ">
                                          <div class="pickupdate">
                                             <label for="date" class="mb-2">Pick-Up Date</label>
                                             <input type="date" id="date" class="input-field">
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-12 col-lg-6 ">
                                          <div class="pickuptime">
                                             <label for="time" class="mb-2">Pick-Up Time</label>
                                             <input type="time" id="time" class="input-field">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="location-wrap mt-4">
                                       <label for="passengers" class="mb-2">Pick-Up Location</label>
                                       <input type="text" id="passengers" class="input-field">
                                    </div>
                                    <div class="add-itemwrap mb-2 mt-4">
                                       <span class="add-item" id="shoow"><i class="fas fa-plus"></i><a href="#!">Add Stop</a></span>
                                    </div>
                                    <div class="add-input" id="hidde" style="display:none">
                                       <i class="fas fa-ellipsis-v ellip"></i>
                                       <input type="text" id="passengers" class="input-field" placeholder="Add your Stop">
                                       <i class="fas fa-trash delt" id="delete-stop"></i>
                                    </div>
                                    <div class="location-wrap mt-4">
                                       <label for="passengers" class="mb-2">Drop-Off Location</label>
                                       <input type="text" id="passengers" class="input-field">
                                    </div>
                                    <!--minus-plus-->
                                    <div class="row">
                                       <div class="col-12 col-md-12 col-lg-6 ">
                                          <div class="passenger_wrap mt-4">
                                             <label for="passengers" class="mb-2">Number of Passengers</label>
                                             <div class="plus-minus-wrap">
                                                <div class="profile-icon">
                                                   <i class="fas fa-users"></i>
                                                </div>
                                                <div class="number">
                                                   <span class="minus">-</span>
                                                   <input type="text" value="1"/>
                                                   <span class="plus">+</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-12 col-lg-6 ">
                                          <div class="lugage_wrap">
                                             <div class="passenger_wrap mt-4">
                                                <label for="passengers" class="mb-2">Luggage Count</label>
                                                <div class="plus-minus-wrap">
                                                   <div class="profile-icon">
                                                      <i class="fas fa-suitcase"></i>
                                                   </div>
                                                   <div class="number">
                                                      <span class="minus">-</span>
                                                      <input type="text" value="1"/>
                                                      <span class="plus">+</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="add-itemwrap  mt-4">
                                       <span class="add-item" ><i class="fas fa-plus"></i><a href="#!" class="addIcon">Add Child Seat</a></span>
                                    </div>
                                    <!--<div class="childwrap" >-->
                                       <!--counter-start-->
                                    <!--   <div class="passenger_wrap mt-2">-->
                                    <!--      <div class="plus-minus-wrap">-->
                                    <!--         <div class="child-iconselect">-->
                                                <!--child-slect-->
                                    <!--            <div class="online-servicetype">-->
                                    <!--               <select class="input-field" id="v-type">-->
                                    <!--                  <option selected="selected">Infant ages(0-1)</option>-->
                                    <!--                  <option>lorem ipsum</option>-->
                                    <!--                  <option>lorem ipsum</option>-->
                                    <!--                  <option>lorem ipsum</option>-->
                                    <!--                  <option>lorem ipsum</option>-->
                                    <!--               </select>-->
                                    <!--            </div>-->
                                                <!--child-select-end-->
                                    <!--         </div>-->
                                    <!--         <div class="number">-->
                                    <!--            <span class="minus">-</span>-->
                                    <!--            <input type="text" value="1"/>-->
                                    <!--            <span class="plus">+</span>-->
                                    <!--         </div>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                       <!--counter-end-->
                                    <!--   <i class="fas fa-trash delt"></i>-->
                                    <!--</div>-->
                                    
                                    <!--Append Fields In this wrap-->
                                    <div class="additionalFields"></div>
                                
                                    <!--minus-plus-end-->
                                    <div class="foot-icon">
                                       <div class="icon-1">
                                          <span><i class="fas fa-wheelchair"></i>Accessible</span>
                                       </div>
                                       <div class="question-icn">
                                          <span><i class="fas fa-question-circle"></i></span>
                                       </div>
                                       <div class="foot-toggle">
                                           <div class="form-check form-switch">
                                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                              <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                                            </div>
                                          <!--<label class="switch">-->
                                          <!--   <input type="checkbox" />    -->
                                          <!--   <div></div>-->
                                          <!--</label>-->
                                       </div>
                                    </div>
                                    <div class="foot-butn">
                                       <a href="javascript:void(0)" class="cta-btn">Select Vehicle</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-6">
                                 <div class="onlineimage-wrap">
                                    <div class="map-image">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1563266.2141535932!2d-75.84549419706957!3d40.06973880144623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew%20Jersey%2C%20USA!5e0!3m2!1sen!2s!4v1632871502627!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     Step 2: Select Vehicle
                     </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">
                        <div class="row mt-2">
                           <div class="col-12 col-md-6 col-lg-3">
                              <div class="card-wrap">
                                 <div class="head-txt mt-2">
                                    <p>Executive Sedan<span><i class="fas fa-exclamation-circle"></i></span></p>
                                 </div>
                                 <div class="cardonline-imge">
                                    <img src="assets/images/ex-sedan.jpg" class="img-fluid">
                                 </div>
                                 <div class="cardnumwrap">
                                    <div class="cardnumwrap1">
                                       <div class="profile-icon">
                                          <i class="fas fa-users"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                    <div class="cardnumwrap2">
                                       <div class="profile-icon">
                                          <i class="fas fa-suitcase"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btn-wraps">
                                    <div class="btn-wrap1 mt-4">
                                       <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                    </div>
                                    <div class="btn-wrap2 mt-4 mb-4">
                                       <a href="javascript:void(0)" class="cta-btn">Book</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-3">
                              <div class="card-wrap">
                                 <div class="head-txt mt-2">
                                    <p>SUV<span><i class="fas fa-exclamation-circle"></i></span></p>
                                 </div>
                                 <div class="cardonline-imge">
                                    <img src="assets/images/suv.jpg" class="img-fluid">
                                 </div>
                                 <div class="cardnumwrap">
                                    <div class="cardnumwrap1">
                                       <div class="profile-icon">
                                          <i class="fas fa-users"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                    <div class="cardnumwrap2">
                                       <div class="profile-icon">
                                          <i class="fas fa-suitcase"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btn-wraps">
                                    <div class="btn-wrap1 mt-4">
                                       <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                    </div>
                                    <div class="btn-wrap2 mt-4 mb-4">
                                       <a href="javascript:void(0)" class="cta-btn">Book</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-3">
                              <div class="card-wrap">
                                 <div class="head-txt mt-2">
                                    <p>Mercedes Sprint..<span><i class="fas fa-exclamation-circle"></i></span></p>
                                 </div>
                                 <div class="cardonline-imge">
                                    <img src="assets/images/mer.jpg" class="img-fluid">
                                 </div>
                                 <div class="cardnumwrap">
                                    <div class="cardnumwrap1">
                                       <div class="profile-icon">
                                          <i class="fas fa-users"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                    <div class="cardnumwrap2">
                                       <div class="profile-icon">
                                          <i class="fas fa-suitcase"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btn-wraps">
                                    <div class="btn-wrap1 mt-4">
                                       <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                    </div>
                                    <div class="btn-wrap2 mt-4 mb-4">
                                       <a href="javascript:void(0)" class="cta-btn">Book</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-3">
                              <div class="card-wrap">
                                 <div class="head-txt mt-2">
                                    <p>Escalade<span><i class="fas fa-exclamation-circle"></i></span></p>
                                 </div>
                                 <div class="cardonline-imge">
                                    <img src="assets/images/escalade.jpg" class="img-fluid">
                                 </div>
                                 <div class="cardnumwrap">
                                    <div class="cardnumwrap1">
                                       <div class="profile-icon">
                                          <i class="fas fa-users"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                    <div class="cardnumwrap2">
                                       <div class="profile-icon">
                                          <i class="fas fa-suitcase"></i>
                                       </div>
                                       <div class="profile-icon">
                                          <span>3</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btn-wraps">
                                    <div class="btn-wrap1 mt-4">
                                       <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                    </div>
                                    <div class="btn-wrap2 mt-4 mb-4">
                                       <a href="javascript:void(0)" class="cta-btn">Book</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--another-row-->
                           <div class="card2wrap">
                              <div class="row">
                                 <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card-wrap mt-4">
                                       <div class="head-txt mt-2">
                                          <p>Mercedes S-Class<span><i class="fas fa-exclamation-circle"></i></span></p>
                                       </div>
                                       <div class="cardonline-imge">
                                          <img src="assets/images/mercs.jpg" class="img-fluid">
                                       </div>
                                       <div class="cardnumwrap">
                                          <div class="cardnumwrap1">
                                             <div class="profile-icon">
                                                <i class="fas fa-users"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                          <div class="cardnumwrap2">
                                             <div class="profile-icon">
                                                <i class="fas fa-suitcase"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="btn-wraps">
                                          <div class="btn-wrap1 mt-4">
                                             <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                          </div>
                                          <div class="btn-wrap2 mt-4 mb-4">
                                             <a href="javascript:void(0)" class="cta-btn">Book</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card-wrap mt-4">
                                       <div class="head-txt mt-2">
                                          <p>Greeter<span><i class="fas fa-exclamation-circle"></i></span></p>
                                       </div>
                                       <div class="cardonline-imge">
                                          <img src="assets/images/greeter.jpg" class="img-fluid">
                                       </div>
                                       <div class="cardnumwrap">
                                          <div class="cardnumwrap1">
                                             <div class="profile-icon">
                                                <i class="fas fa-users"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                          <div class="cardnumwrap2">
                                             <div class="profile-icon">
                                                <i class="fas fa-suitcase"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="btn-wraps">
                                          <div class="btn-wrap1 mt-4">
                                             <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                          </div>
                                          <div class="btn-wrap2 mt-4 mb-4">
                                             <a href="javascript:void(0)" class="cta-btn">Book</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card-wrap mt-4">
                                       <div class="head-txt mt-2">
                                          <p>van<span><i class="fas fa-exclamation-circle"></i></span></p>
                                       </div>
                                       <div class="cardonline-imge">
                                          <img src="assets/images/van.jpg" class="img-fluid">
                                       </div>
                                       <div class="cardnumwrap">
                                          <div class="cardnumwrap1">
                                             <div class="profile-icon">
                                                <i class="fas fa-users"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                          <div class="cardnumwrap2">
                                             <div class="profile-icon">
                                                <i class="fas fa-suitcase"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="btn-wraps">
                                          <div class="btn-wrap1 mt-4">
                                             <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                          </div>
                                          <div class="btn-wrap2 mt-4 mb-4">
                                             <a href="javascript:void(0)" class="cta-btn">Book</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card-wrap mt-4">
                                       <div class="head-txt mt-2">
                                          <p>Bus 23 Pass<span><i class="fas fa-exclamation-circle"></i></span></p>
                                       </div>
                                       <div class="cardonline-imge">
                                          <img src="assets/images/buy.jpg" class="img-fluid">
                                       </div>
                                       <div class="cardnumwrap">
                                          <div class="cardnumwrap1">
                                             <div class="profile-icon">
                                                <i class="fas fa-users"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                          <div class="cardnumwrap2">
                                             <div class="profile-icon">
                                                <i class="fas fa-suitcase"></i>
                                             </div>
                                             <div class="profile-icon">
                                                <span>3</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="btn-wraps">
                                          <div class="btn-wrap1 mt-4">
                                             <a href="javascript:void(0)" class="cta-btn">Requeste Quote</a>
                                          </div>
                                          <div class="btn-wrap2 mt-4 mb-4">
                                             <a href="javascript:void(0)" class="cta-btn">Book</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--pagination-start-->
                           <div class="row">
                              <div class="col-12 col-md-12 col-lg-12">
                                 <div class="container">
                                    <div class="pagination">
                                       <ul class="pagination-2">
                                          <li class="page-number prev"><a href="#">&laquo;</a></li>
                                          <li class="page-number"><a href="#">1</a></li>
                                          <li class="page-number active"><a href="#">2</a></li>
                                          <li class="page-number"><a href="#">3</a></li>
                                          <li class="page-number"><a href="#">4</a></li>
                                          <li class="page-number"><a href="#">5</a></li>
                                          <li class="page-number"><a href="#">6</a></li>
                                          <li class="page-number"><a href="#">7</a></li>
                                          <li class="page-number"><a href="#">8</a></li>
                                          <li class="page-number"><a href="#">9</a></li>
                                          <li class="page-number"><a href="#">10</a></li>
                                          <li class="page-number prev"><a href="#">&raquo;</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--pagination-end-->
                           <!--another-row-end-->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     Step 3: Final Details
                     </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-12 col-md-6 col-lg-6 p-0">
                              <p class="form_lefttext">Please Log In to your account or continue as guest to book your reservation.</p>
                              <div class="form_leftwrap">
                                 <div class="form_lefttext2 mt-4">
                                    <p class="form_lefttext">Log In to your account</p>
                                 </div>
                                 <div class="email_formleft mt-4">
                                    <label for="passengers" class="mb-2 form_lefttext">Email Address or Username</label>
                                    <input type="email" id="passengers" class="input-field" placeholder="Email Address or Username">
                                 </div>
                                 <div class="email_formleft mt-4">
                                    <label for="passengers" class="mb-2 form_lefttext">Password</label>
                                    <input type="password" id="passengers" class="input-field mb-4" placeholder="Password">
                                    <a href="#" class="mt-4">Forgot password?</a>
                                 </div>
                                 <div class="formleft_footwrap mt-4">
                                    <div class="formleft_foot">
                                       <p class="form_lefttext mb-4">Don't have an account?&nbsp;<a href="#" class="mt-4">Register Now</a></p>
                                    </div>
                                    <div class="form_leftbtn mt-4 mb-4">
                                       <a href="javascript:void(0)" class="cta-btn">Log in</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-lg-6">
                              <div class="form_rightwrap">
                                 <div class="form_lefttext2 mt-4">
                                    <p class="form_lefttext">Continue as guest</p>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                       <div class="email_formleft mt-4">
                                          <label for="passengers" class="mb-2 form_lefttext">First Name</label>
                                          <input type="email" id="passengers" class="input-field" placeholder="First Name ">
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                       <div class="email_formleft mt-4">
                                          <label for="passengers" class="mb-2 form_lefttext">Last Name </label>
                                          <input type="email" id="passengers" class="input-field" placeholder="Last Name">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="email_formleft mt-4">
                                    <label for="passengers" class="mb-2 form_lefttext">Phone number</label>
                                    <input type="number" id="passengers" class="input-field" placeholder="(555) 555-5555">
                                 </div>
                                 <div class="email_formleft mt-4">
                                    <label for="passengers" class="mb-2 form_lefttext">Email Address </label>
                                    <input type="email" id="passengers" class="input-field mb-4" placeholder="Email Address">
                                    <a href="#" class="mt-4">why do we need this data?</a>
                                 </div>
                                 <div class="formleft_footwrap mt-4">
                                    <div class="btn-wrap1 form_leftbtn mt-4 mb-4">
                                       <a href="javascript:void(0)" class="cta-btn">Continue as guest</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--bootstrap-5-collapse-end-->
      </div>
   </div>
</section>
<div class="secBottom-heading">
   <p class="black-heading text-center">Reserve NY Chauffeured Transportation</p>
</div>
<section class="index-sec5">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-6 col-lg-6">
            <div class="indexSec5-image">
               <img src="assets/images/indexSec5-image.jpg" alt="img" class="img-fluid">
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-6">
            <p class="indexSec5-heading">We make sure that <span>EVERY TRIP</span> is comfortable</p>
            <div class="indexSec5-content">
               <div class="row m-0">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="fleet-detailBox mgb-8">
                        <div class="image">
                           <img src="assets/images/icon-01.png" alt="img" class="img-fluid">
                        </div>
                        <div class="content">
                           <p><strong>Late-Model Vehicles</strong>
                              <span>Diverse Selection</span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="fleet-detailBox mgb-8">
                        <div class="image">
                           <img src="assets/images/icon-02.png" alt="img" class="img-fluid">
                        </div>
                        <div class="content">
                           <p><strong>24/7 Dispatch</strong>
                              <span>& Customer Support</span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="fleet-detailBox mgb-8">
                        <div class="image">
                           <img src="assets/images/icon-03.png" alt="img" class="img-fluid">
                        </div>
                        <div class="content">
                           <p><strong>Prompt Service</strong>
                              <span>Always On-Time</span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="fleet-detailBox">
                        <div class="image">
                           <img src="assets/images/icon-04.png" alt="img" class="img-fluid">
                        </div>
                        <div class="content">
                           <p><strong>Children Safety</strong>
                              <span>Car & Booster Seats</span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="fleet-detailBox">
                        <div class="image">
                           <img src="assets/images/icon-05.png" alt="img" class="img-fluid">
                        </div>
                        <div class="content">
                           <p><strong>Competitive Rates</strong>
                              <span>Package Deals</span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                     <div class="fleet-detailBox">
                        <div class="image">
                           <img src="assets/images/icon-06.png" alt="img" class="img-fluid">
                        </div>
                        <div class="content">
                           <p><strong>Professional</strong>
                              <span>Chauffeurs</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="index-sec6">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-12 col-lg-6 mgt-8">
            <div class="indexSec6-content">
               <p class="heading">Use Our <span>Quick Quote Form</span></p>
               <p class="paraghraph">To get a quick price quote, please use the short form, text us,
                  or call us directly, we're always available!
               </p>
            </div>
            <div class="indexSec6-image">
               <img src="assets/images/quote-image.webp" alt="img" class="img-fluid">
            </div>
         </div>
         <div class="col-12 col-md-12 col-lg-6">
            <div class="quoteForm-box">
               <p>Get A Price Quote</p>
               <form>
                  <div class="row m-0">
                     <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <input type="text" placeholder="Name" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <input type="tel" placeholder="Number" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <input type="email" placeholder="Email" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <input type="text" placeholder="Starting Address" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <input type="text" placeholder="Destination Address" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <input type="date" placeholder="mm/dd/yy" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <input type="time" placeholder="" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <input type="text" placeholder="# Passengers" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <input type="text" placeholder="Approx. Hours" class="input-field">
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <select class="input-field">
                           <option selected="selected">Select Service</option>
                           <option>lorem ipsum</option>
                           <option>lorem ipsum</option>
                           <option>lorem ipsum</option>
                           <option>lorem ipsum</option>
                        </select>
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <select class="input-field">
                           <option selected="selected">Select Vehicle</option>
                           <option>lorem ipsum</option>
                           <option>lorem ipsum</option>
                           <option>lorem ipsum</option>
                           <option>lorem ipsum</option>
                        </select>
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <textarea class="input-field" placeholder="Comments"></textarea>
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 mb-2">
                        <button type="submit" class="quote-btn">Get Price Quote</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <p class="black-heading text-center">NY Chauffeured Transportation Services</p>
   </div>
</section>
<section class="index-sec7">
   <div class="container">
      <div class="indexSec7-head">
         <p class="gold-heading mb-4">The Best New York Luxury Transportation
            <span class="black-text">At Competitive Rates</span>
         </p>
         <p class="paraghraph">We offer a diverse fleet of all new luxury sedans, executive SUVs, Mercedes Sprinter Limousines, Executive vans, mini coaches, shuttle and charter buses for all your corporate and personal chauffeured ground transportation needs. We'll customize the rates based on vehicle chosen, group size and budget. Call us first for a competitive price quote!</p>
      </div>
   </div>
</section>
<section class="index-sec9">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-6 col-lg-6">
            <div class="indexSec9-wrap">
               <div class="discount">
                  <p>10% OFF</p>
               </div>
               <div class="detail">
                  <p>Get a <span>client club card</span> and enjoy a discount on next trips</p>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-6">
            <div class="indexSec9-image">
               <img src="assets/images/vipcard.webp" alt="img" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'includes/footer.php';?>