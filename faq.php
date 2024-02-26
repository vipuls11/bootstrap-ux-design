<?php
include ("header.php");
?>
<style>




/* @media (max-width: 768px) {
} */

body {
  font-size: 17px;
}

.main-title {
    margin-top: 30px;
  margin-bottom: 24px;
  text-align: center;
  font-family: "Abril Fatface", cursive;
 font-size: 17px;
  color: #2e8074;
  display: flex;
  justify-content: center;
  align-items: center;
}
.main-title:before, .main-title:after {
  content: "";
  display: block;
  margin: 0 10px;
  flex: 1;
  border-bottom: 1px solid #2e8074;
}

.wrapper {
  width: 60%;
  margin: auto;
  font-family: "Source Sans Pro", sans-serif;
}
@media (max-width: 768px) {
  .wrapper {
    width: auto;
    padding: 0 4px;
  }
}

input[type=radio] {
  display: none;
}
input[type=radio]:checked + .item .title {
  color: #fff;
  border-color: #2e8074;
  background-color: #2e8074;
}
input[type=radio]:checked + .item .title:after {
  transform: rotate(180deg);
}
input[type=radio]:checked + .item .content {
  margin-top: 4px;
  margin-bottom: 4px;
  height: auto;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s, opacity 0.7s;
  
}

.item {
  display: block;
  margin-bottom: 20px;
}

.title {
   
  padding: 	10px 20px;
  border-radius: 4px;
  color: #2e8074;
  border: 1px solid;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.2s;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.title:after {
  content: "▼";
  display: inline-block;
  font-size: 12px;
}

.content {
  width: 95%;
  margin: 0 auto;
  padding: 0 4px;
  line-height: 1.6;
  color: #2e8074;
  border: 1px solid;
  border-width: 0 1px;
  height: 0;
  opacity: 0;
  visibility: hidden;
  transition: all 0.2s;
}
.faq-contact{
    text-align: center;
    font-size: 17px;
    color: #2e8074;
}
.faq-contact-heading{
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 40px;
}
.number{
    font-size: 12px;
}
.faq-contact-subheading{
    font-weight: 500;
}
.font-icon{
    font-size: 40px;
    margin-bottom: 20px;
}
.sub-cat{
    width: 90%;
    margin:auto;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 14px;    
}
.sub-cat a{
    text-decoration: none;
    color: black;
}
</style>
<div class="container-fluid">
<div class="sub-cat" style=""><span><a href="">Home 
</a>|<a href=""> Faq's</a></span></div>
<div class="wrapper">
    <div class="faq-contact">
    <h3 class="faq-contact-heading">Help & Contact</h3>
    <h4 class="faq-contact-subheading text-black">Have A Question</h4>
    
    <div class="row my-3">
        <div class="col">
            <div class="font-icon"><i class="fa-regular fa-message"></i></div>
            <p class="fs-4 m-0">Chat with Us</p>
        </div>
        <div class="col">
        <div  class="font-icon"><i class="fa-solid fa-phone"></i></div>
        <p class="fs-4 m-0">Call Us At</p>
        <p class="number m-0 text-black" style="">+91 00000 00000</p>
        </div>
        <div class="col">
        <div  class="font-icon"><i class="fa-regular fa-envelope"></i></div>
            <p class="fs-4 m-0">Chat with Us</p>
        </div>
    </div>

    <p class="m-0 px-2" style="font-size: 13px;">The toll free number is only applicable for domestic orders within India. For international customers or deliveries please reach us out through whatsapp, Live chat or email.</p>
    </div>
  <div class="main-title">FAQ's</div>
  <input type="radio" id="radioYour Account" name="accordion" checked="checked"/>
  <label class="item" for="radioYour Account">
    <div class="title">Your Account</div>
    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</div>
  </label>
  <input type="radio" id="radioPayment &amp; Pricing" name="accordion"/>
  <label class="item" for="radioPayment &amp; Pricing">
    <div class="title">Payment &amp; Pricing</div>
    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</div>
  </label>
  <input type="radio" id="radioReturns &amp; Refunds" name="accordion"/>
  <label class="item" for="radioReturns &amp; Refunds">
    <div class="title">Returns &amp; Refunds</div>
    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</div>
  </label>
  <input type="radio" id="radioShipping &amp; Pickup" name="accordion"/>
  <label class="item" for="radioShipping &amp; Pickup">
    <div class="title">Shipping &amp; Pickup</div>
    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</div>
  </label>
  <input type="radio" id="radioViewing &amp; Changing Orders" name="accordion"/>
  <label class="item" for="radioViewing &amp; Changing Orders">
    <div class="title">Viewing &amp; Changing Orders</div>
    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</div>
  </label>
</div>
</div>