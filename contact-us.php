<?php
include ("header.php");
?>

<style>
    body{
        background: #F0F0F0; 
    }
  .contact-main{
    width: 90%;
   margin: auto;
  }
.contact-cat{
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 14px;    
}
.contact-cat a{
    text-decoration: none;
    color: black;
}
.contact-detail{
    font-size: 14px;
    
}

input[type=text] {
    border:0px; 
  border-bottom: 2px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border-bottom: 2px solid #555;
}
</style>
<div class="contact-main">
<div class="">
<div class="contact-cat" style=""><span><a href="">Home 
</a>|<a href=""> Contact Us</a></span></div>

<div class="row g-3 my-3">
    <div class="col-lg-7 col-12 ">
        <div class="bg-white border px-3">
        <h4 class="py-3 border-bottom" style="color:#ED3318;">CONTACT US</h4>
        <div class="contact-detail my-3">
            <h6 class="" style="color:#ED3318;">Customer Delight</h6>
            <p class="m-0 mb-2" style="font-weight: 500;">Call us at 99999 99999 (9 am-10 pm, 7 days a week)</p>
            <p class="m-0 mb-2" style="font-weight: 500;">or</p>
            <p class="m-0" style="font-weight: 500;">Write to us at <span><a href="" class="" style="text-decoration: none;">jewelwebnet.com</a></span> Corporate Sales</p>
        </div>
        <div class="contact-detail my-3">
        <h6 class="" style="color:#ED3318;">Corporate Sales</h6>   
        <p class="m-0 ">Lorem Ipsum is simply dummy text of the printing and typesettin <span><a href="">corporate.lorem@.com</a></span></p>
        <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesettin  <span><a href="">corporate.sales@bluestone.com</a></span></p>
        </div>
        <div class="contact-detail my-3">
        <h6 class="" style="color:#ED3318;">Corporate Sales</h6> 
        <div class="row g-2">
            <div class="col-lg-6">
            <h6 class="text-primary"><span class="" style="margin-right: 10px;"><i class="fa-solid fa-location-dot"></i></span>Banaglore</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis minima voluptatum nemo incidunt unde ex itaque rerum quam voluptates.</p>
            </div>
            <div class="col-lg-6">
            <h6 class="text-primary"><span class="" style="margin-right: 10px;"><i class="fa-solid fa-location-dot"></i></span>Mumbai</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis minima voluptatum nemo incidunt unde ex itaque rerum quam voluptates.</p>
            </div>
        </div>
        </div>
        <div class="contact-detail my-3">
        <h6 class="" style="color:#ED3318;">Manufactured By</h6> 
        <div class="row g-2">
            <div class="col-lg-6">
            <h6 class="text-primary"><span class="" style="margin-right: 10px;"><i class="fa-solid fa-location-dot"></i></span>Mumbai</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis minima voluptatum nemo incidunt unde ex itaque rerum quam voluptates.</p>
            </div>
        </div>
        </div>
        </div>
    </div>
    <div class="col-lg-5 col-12 ">
        <div class="bg-white border py-2 px-5">
        <h4 class="py-3 border-bottom" style="color:#ED3318;">HAVE A QUESTION?</h4>
        <form action="" class="my-4" method="post">
        <div class="my-3 d-flex justify-content-between align-items-center">
            <label for="">Name</label>
            <input type="text" class="w-75 py-2" placeholder="Your Name" >
        </div>
        <div class="my-3 d-flex justify-content-between align-items-center">
            <label for="">Email</label>
            <input type="text" class="w-75 py-2" placeholder="Your Email" >
        </div>
        <div class="my-3 d-flex justify-content-between align-items-center">
            <label for="">Phone</label>
            <div class="d-flex align-items-center w-75">
            +91<input type="text" class="w-100 py-2" placeholder="Your Phone" >
            </div>
        </div>
        <div class="my-3 d-flex justify-content-between align-items-center">
            <label for="">Query</label>
            <input type="text" class="w-75 py-2" placeholder="Your Query" >
        </div>
        <button type="submit" class="w-100 fw-semibold text-white py-2 mt-4 border" style="background: #ED3318;">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>
</div>