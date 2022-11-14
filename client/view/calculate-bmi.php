<?php include_once './layout/header.php'?>    <!-- Menu Area End -->

    <!-- Header Start -->
    <header class="page-banner-area bmi-page-banner">
        <div class="section-overlay d-flex">
            <div class="container">
                <div class="header-caption text-left">
                    <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s"
                        data-wow-delay=".5s">BMI Calculator</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <li class="breadcrumb-item text-capitalize"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active text-capitalize" aria-current="page">BMI Calculator</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Calculate BMI Area Start -->
    <section class="calculate-bmi-area">
        <div class="container">
            <!--Row Start-->
            <div class="row">

                <!-- Column Start-->
                <div class="col-sm-12">
                    <h2 class="section-heading color-dark">What is BMI</h2>
                    <h3 class="section-subheading">Body mass index is a value derived from the mass and height of a
                        person. The BMI is defined as the body mass divided by the
                        square of the body height, and is universally expressed in units of kg/m², resulting from mass
                        in kilograms and height in metres</h3>
                </div>
                <!-- Column End-->

            </div>
            <!--Row End-->

            <!--Row Start-->
            <div class="row bmi-wrapper">
                <!-- Column Start-->
                <div class="col-sm-6">
                    <div class="bmi-box">
                        <h3 class="color-dark">BMI Calculator Chart</h3>
                        <table class="bmi-calculator-chart-table">
                            <tr>
                                <th>BMI</th>
                                <th>Weight Status</th>
                            </tr>
                            <tr>
                                <td>Below 18.5</td>
                                <td>Underweight</td>
                            </tr>
                            <tr>
                                <td>18.5 to 24.9</td>
                                <td>Healthy</td>
                            </tr>
                            <tr>
                                <td>25.0 to 29.9</td>
                                <td>Overweight</td>
                            </tr>
                            <tr>
                                <td>30 and Above</td>
                                <td>Obese</td>
                            </tr>
                        </table>
                        <p><span class="bmi-star">*</span> <span class="color-dark">BMR</span> Metabolic Rate / <span
                                class="color-dark">BMI</span> Body Mass Index</p>
                    </div>
                </div>
                <!-- Column End-->

                <!-- Column Start-->
                <div class="col-sm-6">
                    <div class="bmi-box">
                        <h3 class="color-dark">Calculate Your BMI</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dui.
                            Aenean massa.</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Height / cm" id="height">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Weight / kg"
                                            id="user-weight">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Age" id="age">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control custom-select">
                                            <option>Gender:</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>She-Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control custom-select">
                                            <option>Select an activity factor:</option>
                                            <option>Activity factor 1</option>
                                            <option>Activity factor 2</option>
                                            <option>Activity factor 3</option>
                                            <option>Activity factor 4</option>
                                            <option>Activity factor 5</option>
                                        </select>
                                    </div>
                                    <div class="contact-sub-btn">
                                        <button type="button" class="btn btn-effect section-button">Calculate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Column End-->
            </div>
            <!--Row End-->
        </div>
    </section>
    <!-- Calculate BMI Area End -->

    <!-- Footer Start -->
<?php include_once './layout/footer.php'?>