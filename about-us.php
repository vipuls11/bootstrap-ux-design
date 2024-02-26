<style>

@-webkit-keyframes scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(calc(-250px * 7));
                }
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(calc(-250px * 7));
                }
            }

            .slider {
                /* background: white; */
                /* box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125); */
                /* background: #F6F6F6; */
                height: 100px;
                margin: auto;
                overflow: hidden;
                position: relative;
                width:100%;
            }

            .slider::before,
            .slider::after {
                /* background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%); */
                content: "";
                height: 100px;
                position: absolute;
                width: 200px;
                z-index: 2;
            }

            .slider::after {
                right: 0;
                top: 0;
                transform: rotateZ(180deg);
            }

            .slider::before {
                left: 0;
                top: 0;
            }

            .slider .slide-track {
                -webkit-animation: scroll 40s linear infinite;
                animation: scroll 40s linear infinite;
                display: flex;
                width: calc(250px * 14);
            }

            .slider .slide {
                height: 100px;
                width: 250px;
            }
</style>
<?php
include "header.php";
?>

<div class="container">
    <h4 class="text-center">About Us</h4>
    <img src="image/about_us.jpg" alt="" class="w-100">

    <div class="text-center">
        <h5>Who Are We</h5>
        <p class="m-0" style="font-size: 12px;">Conversations with hundreds of women across the country revealed a common problem: buying expensive jewellery for momentous events & settling for mediocre designs that failed to keep up with their dynamic lifestyles.</p>
        <p class="m-0" style="font-size: 12px;">CaratLane was founded in 2008 to bridge the gap between exquisite jewellery meant for special occasions and everyday wear, making diamond jewellery accessible, affordable, and a timeless part of your life that you could wear effortlessly every day.</p>
        <p class="m-0 fw-semibold" style="font-size: 14px;">Today, CaratLane stands as India's largest omni-channel jeweller, with a robust presence in more than 100 Indian cities through an extensive network of over 250 retail stores.</p>
    </div>
</div>
<div class="my-4">
        <h5 class="text-center">Featured In</h5>
        <div class="" >
            <div class="container" >
            <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                    alt="" />
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>

    <div class="container d-flex overflow-hidden">
        <div>  
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                    alt="" />
                </div>
        <div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                    alt="" />
        </div>
        <div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                    alt="" />
        </div>
        <div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" />
        </div>
        <div>
        <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" /> -->
        </div>
    </div>

    <div class="container my-3">
    <h5 class="text-black text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            <div class="row g-5 align-items-center justify-content-start text-left my-1">
                <div class="col-lg-6 col-12">
                    <h2 class="text-black mb-3 fw-extrabold">jewellery Diamond</h2>
                    <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores error nihil blanditiis, quidem deleniti ab sequi rerum reiciendis, saepe dignissimos modi labore. Unde soluta iusto consequatur quidem, alias quas fugiat error tempora. <br> <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores error nihil blanditiis, quidem deleniti ab sequi rerum reiciendis, saepe dignissimos modi labore. Unde soluta iusto consequatur quidem, alias quas fugiat error tempora.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores error nihil blanditiis, quidem deleniti ab sequi rerum reiciendis, saepe dignissimos modi labore. Unde soluta iusto consequatur quidem, alias quas fugiat error tempora. <br><br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores error nihil blanditiis, quidem deleniti ab sequi rerum reiciendis, saepe dignissimos modi labore. Unde soluta iusto consequatur quidem, alias quas fugiat error tempora.
                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <img src="image/scheduleapp.jpg" alt="" class="w-100">
                </div>
            </div>
    </div>