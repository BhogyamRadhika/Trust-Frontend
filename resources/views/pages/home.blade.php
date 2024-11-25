@extends('layouts.landingpage')

@section('content')
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
        padding: 20px;
        margin: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        width: 100%;
        /* Make it flexible within the grid */
        box-sizing: border-box;
    }

    @media (max-width: 768px) {

        .card {
            margin: 5px;
            /* Reduce margin to fit better on small screens */
        }
    }

    .card h3 {
        margin: 0;
        color: #333;
        font-size: 1em;
        text-align: left;
        margin-left: 6px;
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



    /* Container Styling */
    /* Container Styling */
    .tab-container {
        width: 100%;
        max-width: 1500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
        text-align: center;
        /* Centering the content */
    }

    /* Tabs Styling */
    .indextabs {
        display: flex;
        justify-content: center;
        /* Centering the tab buttons */
        list-style: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .indextabs li {
        flex: 0;
        /* Remove flex growing to make buttons smaller */
        padding: 10px 20px;
        /* Reduced padding to make buttons smaller */
        background-color: #e9ecef;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 16px;
        /* Smaller font */
        margin: 0 5px;
        /* Add margin between buttons */
    }

    .indextabs li.active {
        background: linear-gradient(90deg, #009247, #1F2B7B);
        color: #fff;
    }

    .indextabs li:hover {
        background-color: #1F2B7B;
        color: #fff;
    }

    /* Tab Content Styling */
    .tab-content {
        display: none;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    .tab-content.active {
        display: block;
    }

    .package-info,
    .test-info {
        text-align: center;
    }

    /* .package-info h2,
        .test-info h2 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        .package-info p,
        .test-info p {
            font-size: 18px;
            color: #6c757d;
        } */

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .indextabs {
            flex-direction: row;
            /* Keep buttons side-by-side on mobile */
            padding: 2px 2px;
            justify-content: center;
            /* Centering buttons */
        }

        .indextabs li {
            flex: 1;
            /* Make buttons take equal width on mobile */
            margin-bottom: 0;
            /* Remove bottom margin to keep side-by-side */
            font-size: 14px;
            /* Smaller font for mobile */
        }


    }
</style>

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

<div class="myfixedbanner">
    <img class="banner-image landscape" src="img/bodybanner.svg" alt="img" />
    <!-- <img src="img/bodypotrait.svg" alt="Banner" class="banner-image portrait"> -->
</div>

<!-- Button to trigger modal -->

<!-- Modal Structure -->
<div id="custom-modal" class="mymodal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>

        <div class="modal-header">
            <h2 class="modal-title">Lifestyle Health Checkup</h2>
        </div>

        <div class="modal-body">
            <div class="modal-description">
                <h3>Laboratory Tests:</h3>
                <ul class="test-list">
                    <li>Total Cholesterol</li>
                    <li>Low-density Lipoprotein</li>
                    <li>High-Density Lipoprotein</li>
                    <li>Triglycerides</li>
                    <li>Non-HDL Cholesterol</li>
                    <li>C-reactive Protein</li>
                    <li>Lipoprotein-A</li>
                    <li>CBC</li>
                </ul>
                <p class="test-overview">Overview: 8 Tests</p>
            </div>

            <div class="modal-image-container">
                <img src="img/lifestylepackage.png" alt="Heart Package" class="modal-image">
            </div>
        </div>

        <div class="modal-icons">
            <div class="icon-item">
                <span class="fa fa-home"></span>
                <p>Home Collection<br><span class="available">Available</span></p>
            </div>
            <div class="icon-item">
                <span class="fa fa-motorcycle"></span>
                <p>Walk-In<br><span class="available">Available</span></p>
            </div>
            <div class="icon-item">
                <span class="fa fa-users"></span>
                <p>Customer Care<br><span class="available">24/7</span></p>
            </div>
        </div>

        <div class="modal-footer">
            <p class="modal-price">₹ 1,566</p>
            <p class="price-note">Including taxes & fees</p>
            <button class="btn-book-now-footer">Add to Cart</button>
        </div>
    </div>
</div>



<section>
    <div class="tab-container">
        <ul class="indextabs">
            <li class="tab-link active" data-tab="tab-packages">Packages</li>
            <li class="tab-link" data-tab="tab-profiles">Profiles</li>
            <li class="tab-link" data-tab="tab-tests">Tests</li>
        </ul>

        <div id="tab-packages" class="tab-content active">
            <!-- Content for Packages Tab -->
            <div class="package-info">
                <div class="section-title" style="margin-top: 10px;">
                    <h2>Popular Packages</h>
                </div>

                <div class="main-container milestone">
                    @foreach ($groupedData as $data)
                        <div class="box">
                            <div class="card">
                                <div class="badge">50% Off</div>
                                <h3>{{ $data['package']['title'] }}</h3>
                                @foreach ($data['tests'] as $test)
                                    <p>Includes <span
                                            style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">{{ count($test['parameters']) }}</span>
                                        Parameters</p>
                                    <div class="price-container">
                                        <div class="price">
                                            <del>₹{{ number_format($test['test_actual_price'], 0) }}</del>
                                            <span
                                                class="offer-price">₹{{ number_format($test['test_actual_price'] * 0.5, 0) }}</span>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a onclick="openPackageModal('{{ $data['package']['title'] }}')" class="more-details"
                                            style="color: white;">More Details</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="custom_package_modal_{{ $data['package']['title'] }}" class="mymodal">
                            <div class="modal-content">
                                <span class="close-btn"
                                    onclick="closeModal('{{ $data['package']['title'] }}')">&times;</span>

                                <form action="https://secure.payu.in/_payment" method="POST">
                                    @csrf

                                    <input type="hidden" name="key" value="{{ $key }}">
                                    <input type="hidden" name="txnid" value="{{ $txnid }}">
                                    <input type="hidden" name="amount"
                                        value="{{ number_format($test['test_actual_price'] * 0.5, 2, '.', '') }}">
                                    <input type="hidden" name="productinfo" value="{{ $productinfo }}">
                                    <input type="hidden" name="firstname" value="{{ $firstname }}">
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <input type="hidden" name="phone" value="{{ $phone }}">
                                    <input type="hidden" name="surl" value="{{ $surl }}">
                                    <input type="hidden" name="furl" value="{{ $furl }}">
                                    <input type="hidden" name="hash" value="{{ $hash }}">



                                    @php
                                            $hashString = "{$payuConfig['salt']}|{$txnid}|{$amount}|{$data['package']['title']}|{$firstname}|{$email}|||||||||||{$payuConfig['salt']}";
                                            $hash = strtolower(hash('sha512', $hashString));
                                        @endphp
                                    <input type="hidden" name="hash" value="{{ $hash }}">

                                    <div class="modal-header">
                                        <h2 class="modal-title">{{ $data['package']['title'] }}</h2>
                                    </div>

                                    <div class="modal-body">
                                        @foreach ($data['tests'] as $test)
                                            <div class="modal-description">
                                                <h3>Laboratory Tests:</h3>
                                                <ul class="test-list">
                                                    <li>{{ implode(', ', $test['disease']) }}</li>
                                                </ul>
                                                <p class="test-overview">Overview: 8 Tests</p>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="modal-footer">
                                        <p class="modal-price">₹ {{ number_format($test['test_actual_price'] * 0.5, 0) }}
                                        </p>
                                        <p class="price-note">Including taxes & fees</p>
                                        <button type="submit" class="btn-book-now-footer">Proceed to Pay</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    @endforeach
                </div>

                <script>
                    function openPackageModal(packageTitle) {
                        var modal = document.getElementById("custom_package_modal_" + packageTitle);
                        modal.style.display = "block";
                    }

                    function closeModal(packageTitle) {
                        var modal = document.getElementById("custom_package_modal_" + packageTitle);
                        modal.style.display = "none";
                    }

                    window.onclick = function (event) {
                        var modals = document.querySelectorAll('.mymodal');
                        modals.forEach(function (modal) {
                            if (event.target === modal) {
                                modal.style.display = "none";
                            }
                        });
                    };
                </script>






                <div class="packcontainer">
                    <!-- Section 1: Test by Health Risks -->
                    <div class="packsection">
                        <h2 style="margin-top: -10px;">Packages curated to assess Health Condition</h2>
                        <!-- <div class="section-title" style="margin-top: 10px;">
                                    <h2>Packages curated to assess Health Condition</h>
                                </div> -->
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://www.pathkindlabs.com/assets/img/icon_.png" alt="Alcohol">
                                        <p>Alcohol</p>
                                    </div> -->
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_1.png" alt="Allergy">
                                <p>Allergy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_4.png" alt="Cancer">
                                <p>Cancer</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_5.png" alt="Diabetes">
                                <p>Diabetes</p>
                                <button>Know More</button>
                            </div>

                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Organ Function</h2>
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg" alt="Heart">
                                        <p>Heart</p>
                                        <button>Know More</button>
                                    </div> -->
                            <div class="item">
                                <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg"
                                    alt="Heart">
                                <p>Heart</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://media.istockphoto.com/id/1165026110/vector/liver-icon-in-trendy-flat-style-people-body-part.jpg?s=612x612&w=0&k=20&c=vfxV0nyhy4VMdCJhf8M4xpPDOQiLK8owPQLCWdlbpi0="
                                    alt="Liver">
                                <p>Liver</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/5570/5570758.png" alt="Kidney">
                                <p>Kidney</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.flaticon.com/512/966/966044.png" alt="Bone">
                                <p>Bone</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                <p>Thyroid</p>
                                <button>Know More</button>
                            </div>
                            <!-- <div class="item">
                                        <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                        <p>Thyroid</p>
                                        <button>Know More</button>
                                    </div> -->
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Lifestyle Choices</h2>
                        <div class="items">
                            <div class="item">
                                <img src="img/gym.png" alt="Heart">
                                <p>Fitness</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/stress.png" alt="Heart">
                                <p>Stress</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/sleep.png" alt="Heart">
                                <p>Poor Sleep</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/tension.png" alt="Heart">
                                <p>Hypertension</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/sexual-health.png" alt="Heart">
                                <p>Sexual health</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/smokers.png" alt="Heart">
                                <p>Smokers</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/alcohol.png" alt="Liver">
                                <p>Alcoholics</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <!-- ---------------------------------------------------- -->


        <div id="tab-profiles" class="tab-content">
            <!-- Content for Packages Tab -->
            <div class="package-info">
                <div class="section-title" style="margin-top: 10px;">
                    <h2>Popular Profiles</h>
                </div>
                <div class="main-container">

                    @forelse ($profiles as $item)
                    <div class="box">
                        <div class="card">
                            <div class="badge">50% Off</div>
                            <h3>{{$item['test_name']}}</h3>
                            <p>Includes <span
                                    style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">{{ count($item['parameters']) }}</span>
                                Parameters</p>
                            <div class="price-container">
                                <div class="price">
                                    <del>₹{{ number_format($item['test_actual_price'], 0) }}</del>
                                    <span
                                        class="offer-price">₹{{ number_format($item['test_actual_price'] * 0.5, 0) }}</span>

                                </div>
                            </div>
                            <div class="buttons">
                                <a href="#" class="more-details">More Details</a>
                                <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="packcontainer">
                    <!-- Section 1: Test by Health Risks -->
                    <div class="packsection">
                        <h2 style="margin-top: -10px;">Packages curated to assess Health Condition</h2>
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://www.pathkindlabs.com/assets/img/icon_.png" alt="Alcohol">
                                        <p>Alcohol</p>
                                    </div> -->
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_1.png" alt="Allergy">
                                <p>Allergy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_4.png" alt="Cancer">
                                <p>Cancer</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_5.png" alt="Diabetes">
                                <p>Diabetes</p>
                                <button>Know More</button>
                            </div>

                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Organ Function</h2>
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg" alt="Heart">
                                        <p>Heart</p>
                                        <button>Know More</button>
                                    </div> -->
                            <div class="item">
                                <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg"
                                    alt="Heart">
                                <p>Heart</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://media.istockphoto.com/id/1165026110/vector/liver-icon-in-trendy-flat-style-people-body-part.jpg?s=612x612&w=0&k=20&c=vfxV0nyhy4VMdCJhf8M4xpPDOQiLK8owPQLCWdlbpi0="
                                    alt="Liver">
                                <p>Liver</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/5570/5570758.png" alt="Kidney">
                                <p>Kidney</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.flaticon.com/512/966/966044.png" alt="Bone">
                                <p>Bone</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                <p>Thyroid</p>
                                <button>Know More</button>
                            </div>
                            <!-- <div class="item">
                                        <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                        <p>Thyroid</p>
                                        <button>Know More</button>
                                    </div> -->
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Lifestyle Choices</h2>
                        <div class="items">
                            <div class="item">
                                <img src="img/gym.png" alt="Heart">
                                <p>Fitness</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/stress.png" alt="Heart">
                                <p>Stress</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/sleep.png" alt="Heart">
                                <p>Poor Sleep</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/tension.png" alt="Heart">
                                <p>Hypertension</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/sexual-health.png" alt="Heart">
                                <p>Sexual health</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/smokers.png" alt="Heart">
                                <p>Smokers</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/alcohol.png" alt="Liver">
                                <p>Alcoholics</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <div id="tab-tests" class="tab-content">
            <div class="section-title" style="margin-top: 10px;">
                <h2>Popular Tests</h>
            </div>
            <div class="main-container">

                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>1, 25-Dihydroxy Vitamin D3</h3>
                        <!-- <p>Includes <span
                                      style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">52</span>
                                  Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹4300</del>
                                <span class="offer-price">₹3400</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>1, 25-Dihydroxy Vitamin D3</h3>
                        <!-- <p>Includes <span
                                        style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">52</span>
                                    Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹4300</del>
                                <span class="offer-price">₹3400</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Albumin</h3>
                        <!-- <p>Includes <span
                                      style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">08</span>
                                  Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹480</del>
                                <span class="offer-price">₹150</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Bilirubin Total</h3>
                        <!-- <p>Includes <span
                                      style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">21</span>
                                  Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹500</del>
                                <span class="offer-price">₹230</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Calcium-Urine</h3>
                        <!-- <p>Includes <span
                                  style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">52</span>
                              Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹480</del>
                                <span class="offer-price">₹250</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Cholesterol-Total</h3>
                        <!-- <p>Includes <span
                                  style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">08</span>
                              Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹360</del>
                                <span class="offer-price">₹170</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Glucose Fasting-Urine</h3>
                        <!-- <p>Includes <span
                                  style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">21</span>
                              Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹150</del>
                                <span class="offer-price">₹75</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content for Tests Tab -->
            <div class="test-info" style="margin-top: 30px;">
                <div class="">
                    <!-- Section 1: Test by Health Risks -->
                    <div class="packsection">
                        <h2>Tests curated to assess Organ Function</h2>
                        <div class="items">
                            <div class="item">
                                <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg"
                                    alt="Heart">
                                <p>Heart</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://media.istockphoto.com/id/1165026110/vector/liver-icon-in-trendy-flat-style-people-body-part.jpg?s=612x612&w=0&k=20&c=vfxV0nyhy4VMdCJhf8M4xpPDOQiLK8owPQLCWdlbpi0="
                                    alt="Liver">
                                <p>Liver</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/5570/5570758.png" alt="Kidney">
                                <p>Kidney</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.flaticon.com/512/966/966044.png" alt="Bone">
                                <p>Bone</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                <p>Thyroid</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <!-- Section 2: Test by Health Conditions -->
                    <div class="packsection">
                        <h2 style="margin-top: 30px;">Tests curated to assess Health Condition</h2>
                        <div class="items">
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_1.png" alt="Allergy">
                                <p>Allergy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <!-- <div class="item">
                                        <img src="https://www.pathkindlabs.com/assets/img/icon_4.png" alt="Cancer">
                                        <p>Cancer</p>
                                    </div> -->
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_5.png" alt="Diabetes">
                                <p>Diabetes</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_8.png" alt="Fever">
                                <p>Fever</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_6.png" alt="Pregnancy">
                                <p>Pregnancy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_7.png" alt="Hepatitis">
                                <p>Hepatitis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/gut.png" alt="Hepatitis">
                                <p>Gut Micro</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Tests curated to assess Lifestyle Choices</h2>
                        <div class="items">
                            <div class="item">
                                <img src="img/gym.png" alt="Heart">
                                <p>Fitness Freaks</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/stress.png" alt="Heart">
                                <p>Stress</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/sleep.png" alt="Heart">
                                <p>Poor Sleep</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/tension.png" alt="Heart">
                                <p>Hypertension</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/sexual-health.png" alt="Heart">
                                <p>Sexual health</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/smokers.png" alt="Heart">
                                <p>Smokers</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/alcohol.png" alt="Liver">
                                <p>Alcoholics</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- Add your dynamic tests content here -->
            </div>
        </div>
    </div>

</section>


<section>

    <div class="form-container" style="margin-top: 1%;">
        <h2 style="text-align: center; color: white;">Directory of Services</h2>
        <div>
            <div class="theimagecen">
                <img src="img/divider.png">
            </div>
            <form class="search-form">
                <div class="form-group">
                    <label for="keyword" style="color: white;">Keyword</label>
                    <input type="text" id="keyword" name="keyword" placeholder="Enter keyword">
                </div>

                <div class="form-group">
                    <label for="test-name" style="color: white;">Test Name</label>
                    <input type="text" id="test-name" name="test-name" placeholder="Enter test name">
                </div>

                <div class="form-group">
                    <label for="disease" style="color: white;">Disease</label>
                    <select id="disease" name="disease">
                        <option value="">- Any -</option>
                        <option value="disease1">Abortions</option>
                        <option value="disease2">Allergy</option>
                        <option value="disease2">Anaemia</option>
                        <option value="disease2">Cancer</option>
                        <option value="disease2">Infection</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="speciality" style="color: white;">Speciality</label>
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

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 thehomecontent">
                <div class="content div1 milestone">
                    <p style="font-size: 1.2rem; font-weight: bold;">Your health is too important for a
                        waiting room.</p>
                    <h2>Think Home Collection <br>Think <span
                            style="font-size: 50px; margin-top: -50px;">TRUSTlab!</span><br>Call
                        @ 74400 75400</h2>
                    <p>Experience the convenience and reliability of our home collection services.<br />
                        TRUSTlab
                        brings precise diagnostics right to your doorstep.</p>


                    <!-- <div style="text-align: center;" class="image-container">
								<img src="img/BloodKit.png"  />
								
							</div> -->
                    <div class="button milestone">
                        <a href="contact.html" class="btn">Contact Now</a>
                        <a href="membership.html" class="btn second">Learn More<i
                                class="fa fa-long-arrow-right"></i></a>
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
                    <h2>We're always here to talk to you. Call us Now - <span class="typewriter" id="typewriter-text"
                            style="color:#009247;"></span></h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Our dedicated team is available around the clock to provide you with all the information
                        and support you need.</p>
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

<section class="download-app-section"
    style="background-color: #ffffff; padding: 40px 0; text-align: center; margin-bottom: 20px;">
    <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
        <!-- Mobile App Image -->
        <div class="app-image" style="flex: 1; min-width: 300px; padding: 20px;">
            <img src="img/mobilemockup.png" alt="Download the TRUSTlab Mobile App"
                style="max-width: 100%; height: auto;">
        </div>

        <!-- Download Text & Buttons -->
        <div class="app-details" style="flex: 1; min-width: 300px; padding: 20px;">
            <h2 style="font-size: 28px; margin-bottom: 20px;">Access health anytime with the TRUSTlab Mobile App
            </h2>
            <p style="font-size: 16px; margin-bottom: 20px;">Book home collections, find test packages, access
                your health records, and more—right at your fingertips.</p>
            <!-- App Store Buttons -->
            <div class="download-buttons">
                <a href="your-app-store-link" target="_blank">
                    <img src="img/appstore.png" alt="Download on the App Store"
                        style="width: 150px; margin-right: 10px;">
                </a>
                <a href="your-google-play-link" target="_blank">
                    <img src="img/playstore.png" alt="Get it on Google Play" style="width: 150px;">
                </a>
            </div>
        </div>
    </div>
</section>



<!-- Start Newsletter Area -->
<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text ">
                    <h6>Sign up for our newsletter</h6>
                    <p class="">Stay updated with our latest news and offers.<br> Subscribe to our newsletter
                        today!
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