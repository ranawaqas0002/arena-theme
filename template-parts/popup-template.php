
<style>
/* POPUP Step 2 */
/* .popup-step-2{
    width: 200% !important;
} */

/* .step-2 {
    width: 200%;
} */
/* .col-md-6.mt-3.mt-md-0.popup-step-2 {
    width: 200%;
} */
.cf7mls_next.cf7mls_btn.action-button{
    width: 100%
}
.modal-body input[type="text"], .modal-body input[type="text"], .modal-body input[type="email"], .modal-body input[type="text"] input[type="tel"], .modal-body input[type="text"] select {
    height: 50px;
    line-height: 50px;
    font-size: 16px !important;
    background-color: #fff !important;
    border: none;
    color: #000000 !IMPORTANT;
    opacity: 1 !important;
}
button, select {
    text-transform: none;
    border: none !important;
}
textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required{
    border: none !important;
    height: 150px;
    padding-top: 10px !important;
}
input.wpcf7-form-control.has-spinner.wpcf7-submit {
    max-width: 600px !important;
    width: 100% !important;
    height: 44px;
    background-image: none !important;
    padding: 0px !important;
    filter: none;
    background-color: #000000 !important;
}
.submit-button{
    height: 70px !important;
}
/* Popup */
.modal-dialog {
  max-width: 1300px !important;
  height: 400px !important;
}
.popup-content {
  max-height: 100%;
  overflow-y: auto;
}
.modal-body {
  padding: 15px;
}
.img-container {
	text-align: center;
  	max-height: 100%;
}
.modal-content {
height: 100% !important;
}
.modal-body .close{
    right: 90px !important;
    top: 40px !important;
    background-color: #ffffff !important;
    border-radius: 50%;
    font-size: 26px !important;

}
button.popup-btn {
background-color: black;
color: #ffffff;
height: 44px;
max-width: 500px;
width: 100%;
letter-spacing: 5px;
font-size: 12px;
}

.modal-body {
  background-color: #F6F5F2;
  padding: 70px 130px !important;
}
img.img-fluid {
max-width: 420px;
width: 100%;
max-height: 552px;
height: 100%;
}
h2.popup-h2{
  font-size: 36px !important;
  font-weight: 400 !important;
  color: black;
  margin-bottom: 15px;
}
p.popup-p{
  font-size: 16px !important;
  line-height: 24px !important;
  font-weight: 300;
  color: #000000;
  margin-bottom: 40px !important;
}
.row {
display: flex;
align-items: center;
}


.form-group2 p{
margin-bottom: 10px !important;
}
button.popup-btn-2 {
  margin-top: 0px !important;
}
#exampleModal .col-md-6.mt-3.mt-md-0 {
  padding-right: 90px !important;
}
button#cf7mls-next-btn-cf7mls_step-1 {
    max-width: 520px !important;
    width: 100% !important;
    height: 44px;
    background-color: #000000;
    font-size: 16px !important;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 0px !important;
    padding: 0px;
}
select.form-control {
    box-shadow: none !important;
}
@media (min-width: 768px) and (max-width: 992px) {
    #exampleModal .col-md-6.mt-3.mt-md-0{
        padding-right: 0px !important;
    }
    .modal-body{
        padding: 30px 70px !important;
    }
    .modal-content {
    width: 700px;
}
.modal-dialog.modal-dialog-centered {
    justify-content: center;
}
img.img-fluid{
    max-width: 200px !important;
    width: 100% !important;
}
button#cf7mls-next-btn-cf7mls_step-1{
    max-width: 690px !important;
    width: 100%;
}
}
@media only screen and (max-width:768px) {
#exampleModal input.linebt {
  margin-left: 0px !important;
}
.modal-body {
    padding: 80px 30px !important;
}
h2.popup-h2 {
    font-size: 22px !important;
}
p.popup-p{
    font-size: 16px !important
}
button#cf7mls-next-btn-cf7mls_step-1{
    max-width: 550px !important;
    width: 100% !important;
}
.modal-body .close {
    right: 20px !important;
    top: 45px !important;
}
}
@media only screen and (max-width:415px) {
  #mainlogo{
    font-size: 16px !important;
    letter-spacing: 6px !important ;
  }
}
</style>

<!-- Popup Trigger Button -->

<section class="pt-220 ">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Open Popup
</button>
</section>

<!-- Popup Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <div class="container-fluid popup-content ">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="row popup-row">
            <!-- Image on the left for desktop, on top for mobile -->
            <div class="col-lg-6 img-container column-img-1">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/popup-book.png" alt="Image" class="img-fluid">
            </div>
            <!-- Text and form on the right for desktop, below for mobile -->
            <div class="col-lg-6 mt-3 mt-md-0 popup-step-2">
              <h2 class="popup-h2">7 Steps to Selling Your Business in 2023</h2>
              <p class="popup-p">Get a simple, free, easy-to-follow email course with daily actionable steps that work.</p>
              <?php echo apply_shortcodes( '[contact-form-7 id="2922" title="Popup Form"]' ); ?>
              <!-- Newsletter Form -->

                <!-- <button type="button" class="popup-btn-2" data-dismiss="modal">NEXT</button> -->

            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
