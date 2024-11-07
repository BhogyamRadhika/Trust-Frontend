@extends('layouts.landingpage')

<style>
    .button-container {
        display: flex;
        justify-content: flex-end;
        padding: 20px;
        margin-right: 3%;
    }

    .right-bottom {
        padding: 10px 20px;
        background: linear-gradient(to right, #1F2B7B, #27AE60);
        /* Gradient background */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        /* transition: background 0.3s ease; */
    }

    .card {
        position: relative;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 350px;
        padding: 10px;
        margin: 2px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
    }

    .card h3 {
        margin: 0;
        color: #333;
        font-size: 1em;
        text-align: left;
        margin-left: 6px;
        margin-top: 10px;
    }

    .card p {
        margin: 10px 0;
        color: #333;
        background-color: #fef6e7;
        padding: 5px;
        border-radius: 5px;
        font-size: 1em;
        font-weight: bold;
        text-align: left;
    }

    .card h5 {
        margin: 10px 0;
        color: #e67e22;
        background-color: #fef6e7;
        padding: 5px;
        border-radius: 5px;
        font-size: 1.15em;
        font-weight: bold;
        text-align: left;
    }

    .badge {
        position: absolute;
        top: -10px;
        right: 5px;
        background-color: #e74c3c;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9em;
        font-weight: bold;
    }

    .card .price-container {
        display: flex;
        justify-content: left;
        align-items: left;
        margin: 10px 0;
    }

    .card .price {
        font-size: 1.2em;
        color: #e74c3c;
        margin-right: 10px;
        text-align: left;
    }

    .card .price del {
        color: #888;
        margin-right: 5px;
    }

    .card .offer-price {
        font-size: 1.4em;
        color: #27ae60;
        margin-right: 70px;
    }

    .card .buttons {
        display: flex;
        flex-direction: row;
        gap: 20px;
        margin-top: 10px;
    }

    .card .add-to-cart {
        background-color: #009247;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        /* margin-left: 10px; */
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .card .add-to-cart:hover {
        background-color: #009147;
    }

    .card .more-details {
        background-color: #1F2B7B;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .card .more-details:hover {
        background-color: #1F4B5B;
    }

    .image-container img {
        width: 100%;
        /* Default for smaller screens */
        height: auto;
        margin-bottom: 20px;
        background-color: white;
        /* Maintain aspect ratio */
    }

    @media (min-width: 768px) {
        .image-container img {
            width: 50%;
            /* For larger screens (desktops) */
        }
    }

    @media (min-width: 768px) {
        .card {
            max-width: 350px;
            /* For larger screens (desktops) */
        }
    }


    .image-section {
        width: 35%;
        /* Adjust image container width */
    }

    .image-section img {
        max-width: 100%;
        align-items: center;
        border-radius: 10px;
        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.01); */
    }

    @media only screen and (max-width: 767px) {
        .image-section img {
            display: none;
        }
    }

    .cursor {
        animation: blink 0.7s infinite;
    }

    @keyframes blink {
        0% {
            border-right-color: gray;
        }

        50% {
            border-right-color: transparent;
        }

        100% {
            border-right-color: gray;
        }
    }
</style>
@section('content')
<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
    class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
</a>

<div class="floating-scanner">
    <div class="scanner-content">
        <img src="img/eDOSwithouttext.png" alt="Download TRUSTlab App" class="qr-code">
        <p>Download TRUSTlab App</p>
    </div>
</div>

<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/sliderimage1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text">
                            <h1>At TRUSTlab, we are committed to delivering accurate test results that can aid in
                                <span>Faster and Better cure to Patient Health Challenges</span>
                            </h1>
                            <p>Our state-of-the-art facilities and experienced professionals ensure you receive
                                top-notch diagnostic services. Trust us for comprehensive, precise, and timely
                                health insights.</p>
                            <div class="button">
                                <!-- <a href="login.html" class="btn">Book Appointment</a> -->
                                <a href="tel:+917440075400" class="btn primary">Call Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/sliderimage2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text">
                            <h1>At TRUSTlab, Excellence in Clinical Lab Operations means delivering accurate
                                results in the
                                <span> shortest possible time. </span>
                            </h1>
                            <p>Our advanced technology and skilled team work diligently to deliver precise
                                reports swiftly. Count on us for reliable diagnostics that meet your schedule.
                            </p>
                            <div class="button">
                                <!-- <a href="login.html" class="btn">Book Appointment</a> -->
                                <a href="tel:+917440075400" class="btn primary">Call Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/sliderimage.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>At TRUSTlab, we take responsibility for achieving excellence and maintaining our
                                commitment to <span>each patient, every healthcare professional and more
                                    broadly, to society.</span></h1>
                            <!-- <p>We put patients first with our compassionate approach and dependable services.
										Our dedicated team ensures every patient receives personalized and accurate
										diagnostics.</p> -->
                            <div class="button">
                                <!-- <a href="login.html" class="btn">Book Appointment</a> -->
                                <a href="tel:+917440075400" class="btn primary">Call Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="single-content">
                                <!-- <span>PATIENTS & INDIVIDUALS</span> -->
                                <h4>Patients & Individuals</h4>
                                <p>Log in to your patient account to view your test results, schedule
                                    appointments, and manage your health profile with ease.</p>
                                <a href="comingsoon.html">Login<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-prescription"></i>
                            </div>
                            <div class="single-content">
                                <!-- <span>PATIENTS & INDIVIDUALS</span> -->
                                <h4>Healthcare Professionals</h4>
                                <p>Calling all medical professionals! Sign in to your doctor account to access
                                    patient records, manage appointments, and collaborate with colleagues
                                    seamlessly.
                                </p>
                                <a href="comingsoon.html">Login<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">

                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <!-- <div class="single-content">
										<span>Donec luctus</span>
										<h4>Opening Hours</h4>
										<ul class="time-sidual">
											<li class="day">Monday - Friday <span>8.00-20.00</span></li>
											<li class="day">Saturday <span>9.00-18.30</span></li>
											<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div> -->
                            <div class="single-content">
                                <!-- <span>PATIENTS & INDIVIDUALS</span> -->
                                <h4>Corporates & Providers</h4>
                                <p>Corporate partners, welcome aboard! Log in to your corporate account to
                                    streamline employee health programs, access health reports</p>
                                <a href="comingsoon.html">Login<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/End Start schedule Area -->

<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title milestone">
                    <h2 style="line-height: 120%; text-align: center;">Prioritizing patients, <br>delivering
                        precise diagnostic solutions </h2>
                    <img src="img/section-img.png" alt="#">
                    <!-- <p>Empowering medical professionals with invaluable insights to enhance patient care and
								drive better health outcomes.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left milestone">
                    <h3 class="caveat-cursive whath3" style="font-size: 35px;">That's What We Do Best!</h3>
                    <!-- <p>At TRUSTlab Diagnostics, we are committed to revolutionizing the healthcare industry
								through precision diagnostics and compassionate care. Founded on the principles of
								accuracy, reliability, and patient-centric service, we strive to deliver excellence in
								every test we conduct. </p>
							
							<div class="row milestone">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Precision and Accuracy </li>
										<li><i class="fa fa-caret-right"></i>Patient-Centric Approach</li>
										<li><i class="fa fa-caret-right"></i>Experienced Team</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Quality Commitment</li>
										<li><i class="fa fa-caret-right"></i>Advanced Facilities</li>
										<li><i class="fa fa-caret-right"></i>Continuous Innovation</li>
									</ul>
								</div>
							</div> -->
                </div>
                <!-- End Choose Left -->
            </div>
        </div>

        <div class="video-container milestone">
            <video id="myVideo" class="video" controls controlsList="nodownload" poster="/img/bgintro.png">
                <source src="img/Intro.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

</section>

<!-- <div style="text-align: center;" class="image-container">
            <img src="img/y-put-trust.png" style="padding: 50px;" />

        </div> -->

<!-- Start Feautes -->

<!--/ End Feautes -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay background-video">
    <video autoplay loop muted>
        <source src="img/fun2.mp4" type="video/mp4">

    </video>
    <div class="container">
        <div class="row milestone">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-people"></i>
                    <div class="content">
                        <span class="counter">980000</span>
                        <p>Patients Tested</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-prescription"></i>
                    <div class="content">
                        <span class="counter">1840000</span>
                        <p>Reports Delivered</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-medical-sign-alt"></i>
                    <div class="content">
                        <span class="counter">185</span>
                        <p>Doctors Associated</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-briefcase"></i>
                    <div class="content">
                        <span class="counter">800</span>
                        <p>Network Partners</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>




<div class="container" style="padding-top: 7%; text-align: center; padding-bottom: 7%; font-weight: bold;">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title milestone">
                <h2 style="line-height: 120%; text-align: center; font-weight: bolder;">Our Quality Commitment</h2>
                <!-- <img src="img/section-img.png" alt="#"> -->
                <!-- <p>Empowering medical professionals with invaluable insights to enhance patient care and
							drive better health outcomes.</p> -->
            </div>
        </div>
    </div>
    <!-- <h2 style="font-size: 40px; font-style: bold;">Our <span style="color: #009247; font-weight: bold;">Quality</span> Commitment</h style="font-size: 34px;"> -->
    <img src="img/QC.png" style="margin-top: -20px;" width="90%" class="milestone" alt="Quality Reports brings TRUST">
    <h3 class="qah3">"Our pursuit to attain the highest standards of quality in medical diagnostics is a given, but it
        is the attention to detail and care that we invest to achieve this quality of work that sets us apart from the
        rest and makes us the preferred choice of Medical Diagnostics Partner".</h3>
</div>



<section style="margin-top: 50px;">


    <!-- <div class="section-title">
			<h2>Directory of Services</h2>
			<img src="img/section-img.png" alt="#">
			
		</div> -->

    <div class="form-container">
        <h2 style="text-align: center; color: white;">Directory of Services</h2>
        <div class="milestone">
            <div class="theimagecen">
                <img src="img/divider.png">
            </div>
            <form class="search-form">
                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="text" id="keyword" name="keyword" placeholder="Enter keyword">
                </div>

                <div class="form-group">
                    <label for="test-name">Test Name</label>
                    <input type="text" id="test-name" name="test-name" placeholder="Enter test name">
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="disease">Disease</label>
                    <select id="disease" name="disease">
                        <option value="">- Any -</option>
                        <option value="disease1">Abortions</option>
                        <option value="disease2">Allergy</option>
                        <option value="disease2">Anaemia</option>
                        <option value="disease2">Cancer</option>
                        <option value="disease2">Infection</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="speciality">Speciality</label>
                    <select id="speciality" name="speciality">
                        <option value="">- Any -</option>
                        <option value="speciality1">Allergy specialist</option>
                        <option value="speciality2">Cardiologist</option>
                        <option value="speciality2">Diabetologist</option>
                        <option value="speciality2">Gynaecologist</option>
                        <option value="speciality2">Nephrologist</option>

                    </select>
                </div>

                <div class="button-group">
                    <!-- <button type="submit" class="thebtn search-btn">Search</button> -->
                    <button href="https://edos.mytrustlab.com/" class="thebtn search-btn">Search</button>
                    <button type="reset" class="thebtn reset-btn">Reset</button>
                </div>
            </form>
        </div>

</section>

<!-- <div class="healthcontainer">
		
		<div class="form-section milestone">
			<h4 class="formhead ">Health Risk Assessment 🩺</h4>

			<form id="healthQuiz">
				<div class="question">
					<label>1. How often do you exercise?</label>
					<select name="exercise">
						<option value="1">Select</option>
						<option value="2">Rarely or Never</option>
						<option value="3">Once a Week</option>
						<option value="4">2-3 Times a Week</option>
						<option value="5">4 or More Times a Week</option>
					</select>
				</div>

				<div class="question">
					<label>2. How would you describe your diet?</label>
					<select name="diet">
						<option value="1">Select</option>
						<option value="2">Unhealthy (junk food, soda, etc.)</option>
						<option value="3">Somewhat unhealthy</option>
						<option value="4">Moderately healthy</option>
						<option value="5">Very healthy (fruits, vegetables, etc.)</option>
					</select>
				</div>

				<div class="question">
					<label>3. Do you smoke?</label>
					<select name="smoke">
						<option value="1">Select</option>
						<option value="2">Yes</option>
						<option value="3">No</option>
					</select>
				</div>

				<div class="question">
					<label>4. How much water do you drink daily?</label>
					<select name="water">
						<option value="1">Select</option>
						<option value="2">Less than 1 liter</option>
						<option value="3">1-2 liters</option>
						<option value="4">2-3 liters</option>
						<option value="5">More than 3 liters</option>
					</select>
				</div>

				<button type="button" onclick="calculateRisk()">Submit</button>

				<div class="result" id="resultBox">
					<p id="resultText"></p>
				</div>
			</form>
		</div>

		
		<div class="image-section">
			<img src="img/assesment.jpg" alt="Health Assessment Image">
		</div>
	</div> -->



<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 thehomecontent">
                <div class="content div1 milestone">
                    <h2>Thinking Home Collection? <br>Think <span style="font-size: 50px;">TRUSTlab!</span><br>Call
                        @ 74400 75400</h2>
                    <p>Experience the convenience and reliability of our home collection services.<br /> TRUSTlab
                        brings precise diagnostics right to your doorstep.</p>


                    <!-- <div style="text-align: center;" class="image-container">
								<img src="img/BloodKit.png"  />
								
							</div> -->
                    <div class="button milestone">
                        <a href="contact.html" class="btn">Contact Now</a>
                        <a href="contact.html" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>

                <div class="div2 milestone">
                    <div>
                        <img src="img/2dbloodkit.png" width="80%" class="image-content" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->

<!-- Start Appointment -->
<section class="appointment" id="bookappointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We're Always Here to Answer You. Call us Now - <span class="typewriter" id="typewriter-text"
                            style="color:#009247;"></span></h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Our dedicated team is available around the clock to provide you with all the information and
                        support you need.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input name="email" type="email" placeholder="Email">
								</div>
							</div> -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-2 col-8">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <p>( Our team will be contacting you shortly! )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image milestone">
                    <img src="img/custom.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Appointment -->

<section class="Feautes section" id="blurred-gradient-section">
    <div class="container">
        <div class="row milestone">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Relax, Your Test Samples are in Trusted Hands!</h2>
                    <img src="img/section-img.png" alt="#">
                    <p style="color: #ffffff;">With a commitment to accuracy and reliability, we meticulously
                        process each biological sample, ensuring precise results and timely delivery.</p>
                </div>
            </div>
        </div>
        <div class="row milestone">
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-ui-check"></i>
                    </div>
                    <h3>NABL Certified</h3>
                    <p>Ensuring the highest standards of quality and accuracy in laboratory testing.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Experienced Doctors</h3>
                    <p>Providing specialized care backed by decades of expertise.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-architecture-alt"></i>
                    </div>
                    <h3>Advanced Technology</h3>
                    <p>Streamlining healthcare services for efficient and reliable delivery systems.</p>
                </div>
                <!-- End Single features -->
            </div>
        </div>
    </div>
</section>
<!--/ End Fun-facts -->

<!-- Start Why choose -->

<!--/ End Why choose -->



<!-- Start portfolio -->

<!--/ End portfolio -->

<!-- Start service -->
<!-- <section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html">General Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.html">Teeth Whitening</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.html">Heart Surgery</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="service-details.html">Ear Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="service-details.html">Vision Problems</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="service-details.html">Blood Transfusion</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						
					</div>
				</div>
			</div>
		</section> -->
<!--/ End service -->

<!-- Pricing Table -->
<!-- <section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-ui-cut"></i>
								</div>
								<h4 class="title">Plastic Suggery</h4>
								<div class="price">
									<p class="amount">$199<span>/ Per Visit</span></p>
								</div>	
							</div>
							
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-tooth"></i>
								</div>
								<h4 class="title">Teeth Whitening</h4>
								<div class="price">
									<p class="amount">$299<span>/ Per Visit</span></p>
								</div>	
							</div>
							
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							
							<div class="table-head">
								<div class="icon">
									<i class="icofont-heart-beat"></i>
								</div>
								<h4 class="title">Heart Suggery</h4>
								<div class="price">
									<p class="amount">$399<span>/ Per Visit</span></p>
								</div>	
							</div>
							
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
								<li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							
						</div>
					</div>
				
				</div>	
			</div>	
		</section>	 -->
<!--/ End Pricing Table -->



<!-- Start Blog Area -->
<section class="blog section milestone" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2><span class="caveat">Stay Updated with the Latest Health news, articles from
                            TRUSTlab</span></h2>
                    <img src="img/section-img.png" alt="#">
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202406/for-women--seed-cycling-should-align-with-the-four-phases-of-their-menstrual-cycle-244746693-16x9.jpg?VersionId=oDKP_d3Ma9PsXxvf.qyOo4rxm9W2Df5K&size=690:388"
                            alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">22 Aug, 2020</div>
                            <h2><a href="https://www.indiatoday.in/information/story/9-vital-womens-health-screenings-prioritize-regular-check-ups-2547359-2024-06-03"
                                    target="_blank">9 vital women's health screenings</a></h2>
                            <p class="text">In this article, we'll delve into the essential health screenings every
                                woman should undergo to safeguard her health.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/blogg2.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Jul, 2020</div>
                            <h2><a href="https://economictimes.indiatimes.com/jobs/fresher/eyeing-a-healthcare-career-here-are-the-trending-roles-skills-and-pay-brackets-you-should-know/articleshow/111190548.cms"
                                    target="_blank">Eyeing a healthcare career? Here are the trending roles</a></h2>
                            <p class="text">The Indian healthcare has seen a lot of growth in past few years and is
                                becoming an economic backbone of the nation.</p>
                        </div>
                    </div>

                </div>
                <a href="newsroom.html" class="btn"
                    style="margin-top: 30px; align-content:center; margin-left: 80px;">More News Articles</a>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/blogg3.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">05 Jan, 2020</div>
                            <h2><a href="https://www.news18.com/lifestyle/health-and-fitness-important-tests-to-undertake-to-detect-dangerous-diseases-like-aids-8865572.html"
                                    target="_blank">Important Tests to Undertake to Detect Diseases like AIDS</a>
                            </h2>
                            <p class="text">Early detection of AIDS (Acquired Immunodeficiency Syndrome) is crucial
                                for effective treatment and management. </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>


        </div>

    </div>

</section>

<!-- <div class="container" style="text-align: center;">
			<img src="img/TRUST_Flaag_map.gif"/>
		</div> -->
<!-- End Blog Area -->

<!-- Start clients -->
<!-- <div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
<!--/Ens clients -->



<!-- Start Newsletter Area -->
<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text ">
                    <h6>Sign up for our newsletter</h6>
                    <p class="">Stay updated with our latest news and offers.<br> Subscribe to our newsletter today!
                    </p>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-form ">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required=""
                            type="email">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
        </div>


        <hr style="margin-top: 40px;">

        <div class="footcontainer">
            <!-- <h2>Blood Tests Near You</h2> -->
            <div class="footcolumns">
                <div>
                    <p>• Blood Test in Hyderabad</p>
                    <p>• Blood Test in Secunderabad</p>
                    <p>• Blood Test in Tarnaka</p>
                    <p>• Blood Test in Banjara Hills</p>
                    <p>• Blood Test in Jubliee Hills</p>
                    <p>• Blood Test in Hi-Tech City</p>
                    <p>• Blood Test in Begumpet</p>
                    <p>• Blood Test in Ameerpet</p>
                    <p>• Blood Test in Punjagutta</p>
                    <p>• Blood Test in Sanathnagar</p>
                    <p>• Blood Test in Erragadda</p>
                    <p>• Blood Test in Borabanda</p>
                    <p>• Blood Test in Moti Nagar</p>
                    <p>• Blood Test in Prakash Nagar</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Gachibowli</p>
                    <p>• Blood Test in Nanakramguda</p>
                    <p>• Blood Test in Madhapur</p>
                    <p>• Blood Test in Kothaguda</p>
                    <p>• Blood Test in Film Nagar</p>
                    <p>• Blood Test in Yousufguda</p>
                    <p>• Blood Test in Srinagar colony</p>
                    <p>• Blood Test in Kukatpally</p>
                    <p>• Blood Test in Allwyn Colony</p>
                    <p>• Blood Test in Bachupally</p>
                    <p>• Blood Test in KPHB Colony</p>
                    <p>• Blood Test in Nizampet</p>
                    <p>• Blood Test in Pragathi Nagar</p>
                    <p>• Blood Test in Moosapet</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Chilkalguda</p>
                    <p>• Blood Test in Kavadiguda</p>
                    <p>• Blood Test in Padmarao Nagar</p>
                    <p>• Blood Test in Pan bazar</p>
                    <p>• Blood Test in Parsigutta</p>
                    <p>• Blood Test in Patny</p>
                    <p>• Blood Test in Rani Gunj</p>
                    <p>• Blood Test in RP Road</p>
                    <p>• Blood Test in Sindhi Colony</p>
                    <p>• Blood Test in Sitaphalmandi</p>
                    <p>• Blood Test in Warsiguda</p>
                    <p>• Blood Test in Addagutta</p>
                    <p>• Blood Test in Tukaramgate</p>
                    <p>• Blood Test in Malkajgiri</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Bowenpally</p>
                    <p>• Blood Test in Karkhana</p>
                    <p>• Blood Test in Marredpally</p>
                    <p>• Blood Test in Sikh Village</p>
                    <p>• Blood Test in Trimulgherry</p>
                    <p>• Blood Test in Vikrampuri</p>
                    <p>• Blood Test in Nagaram</p>
                    <p>• Blood Test in Dammaiguda</p>
                    <p>• Blood Test in Rampally</p>
                    <p>• Blood Test in Alwal</p>
                    <!-- Add more items here -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Newsletter Area -->
@endsection