<?php
require_once 'header.php';
require_once 'navbar.php';
?>


<section class="business-loan-banner-sec">
    <img src="./images/business_loan_banner.jpg" class="img-responsive">
</section>
<section class="business-loan-content">
    <div class="container">
        <h1>Business Loans</h1>
        <p>Being a state commercial Bank, we consider it as our duty to facilitate financial demands of small
            and medium scale business entrepreneurs as well as large scale corporate entities of the country, to
            help them grow and propel the country towards economic prosperity. Financial solutions are catered to
            suit each unique requirement of businesses with tailor-made products.</p>

        <ul>
            <li>For your working capital requirement</li>
            <li>Business expansion (Ex; new markets, new products or new services, new delivery channels)</li>
            <li>To move to a new business premises</li>
            <li>Purchase machinery to keep up with changing technology</li>
            <li>And any other acceptable business purpose</li>
        </ul>
        <button onclick="openNav()">Apply Online</button>
        <p>Want to meet our member?  <a href="appoinments.php">Request an Appointment </a></p>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div class="col-sm-push-2 col-sm-8">
                <div class="loan-form-content">
                    <form class="loanForm" action=" " method="post" enctype="multipart/form-data">
                        <h1>Enter Your Details</h1>
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                            <h2>Step 01</h2>
                            Title<br>
                            <select>
                                <option>Mr</option>
                                <option>Miss</option>
                                <option>Mrs</option>
                            </select><br>
                            First Name
                            <p><input  oninput="this.className = ''" name="fname"></p>
                            Last Name
                            <p><input  oninput="this.className = ''" name="lname"></p>
                            NIC Number
                            <p><input  oninput="this.className = ''" ></p>
                            Email Address
                            <p><input  oninput="this.className = ''" type="email" name="email"></p>
                            Contact Number
                            <p><input  oninput="this.className = ''" name="phone"></p>
                            Relevant to Company
                            <p><input  oninput="this.className = ''" name="relavent"></p>
                            Business Email
                            <p><input  oninput="this.className = ''" type="email"></p>
                        </div>
                        <div class="tab">
                            <h2>Step 02</h2>
                            Business Name
                            <p><input name="business_name" type="text" ></p>
                            Business Address
                            <p><textarea></textarea></p>
                            Telephone Number
                            <p><input  oninput="this.className = ''" name="tele_no"></p>
                            Business Scale
                            <p><input  oninput="this.className = ''" name="business_scale" ></p>
                            How long have been started?
                            <p><input  oninput="this.className = ''" name="period"></p>
                            Business Area
                            <p><input  oninput="this.className = ''" name="business_area"></p>
                        </div>
                        <div class="tab">
                            <h2>Step 03</h2>
                            Upload Your Business Registration Copy
                            <input  type="file" name="file1"><br>
                            Upload Bank Statement
                            <input  type="file" name="file2"><br>
                            Upload Last 3 year financial audit report
                            <input  type="file" name="file3"><br>
                            Upload utility bills for last 3 months
                            <input  type="file" name="file4"><br>
                            Balance sheet of last 2 year
                            <input  type="file" name="file5"><br>
                            Income profit and loss sheet for last 2 years
                            <input  type="file" name="file6"><br>
                            Tax payment document for last 6 months
                            <input  type="file" name="file7"><br>

                        </div>

                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
