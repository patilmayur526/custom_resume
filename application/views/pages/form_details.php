<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Resume Generator
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="../../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../../assets/demo/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="../../assets/css/style1.css" />
</head>

<body class="" style="background-color: #ddd;">
	<div style="margin-top : 100px;">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<a class="navbar-brand" href="#pablo">Some Detail for Your Resume</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
				</button>

			</div>
		</nav>
		<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
											<img class="img" src="../../assets/img/faces/leonardo-da-vinci.jpg" />
										</a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-gray">Resume Founder</h6>
                                <h4 class="card-title">Leonardo Da Vinci</h4>
                                <h6 class="card-title">Some Gyaan!!</h6>
                                <p class="card-description">
                                    Leonardo di ser Piero da Vinci was an Italian Renaissance polymath. According to data available online, Leonardo da Vinci invented the first professional profile in 1482, which we call as the résumé. The word Resume originated from French résumé“to summarize”, and from Latin resumere “to take back”.
                                </p>
                                <a href="https://www.linkedin.com/pulse/20140602023614-28126547-who-invented-the-resume-the-da-vinci-code" class="btn btn-primary btn-round">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <form action="ThemeSelector">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Edit Profile</h4>
                                    <p class="card-category">Complete your profile</p>
                                    <ul class="nav nav-pills nav-pills-primary" role="tablist" style="margin: 0 auto;text-align: center;">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true" style="color: #ffffff;font-weight: 500;">
														Profile
													</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false" style="color: #ffffff;font-weight: 500;">
														School/College Details
													</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false" style="color: #ffffff;font-weight: 500;">
														Experiences and Other
													</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>


                                    <div class="tab-content tab-space">
                                        <div class="tab-pane active" id="link1" aria-expanded="true">
                                            <div class="card-body">

                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">User Contact</label>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Email address</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Git address</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Fist Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Last Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Address</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label-control">Datetime Picker</label>
                                                            <input type="text" class="form-control datetimepicker" value="21/06/2018" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Age</label>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">City</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Country</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Postal Code</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>


                                            </div>
                                        </div>
                                        <div class="tab-pane" id="link2" aria-expanded="false">
                                            <div class="card-body">
                                                <p>
                                                    <a class="btn btn-primary" data-toggle="collapse" href="#schooldetails" aria-expanded="false" aria-controls="schooldetails">
																School Deatils
															</a>
                                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collegedetails" aria-expanded="false" aria-controls="collegedetails">
																College Details
															</button>
                                                </p>
                                                <div class="collapse" id="schooldetails">
                                                    <div class="card card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">School Name</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">SSC Percentage</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Primary College Name</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">HSC Percentage</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="collegedetails">
                                                    <div class="card card-body">

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Degree College Name</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Branch</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Current Aggregrate Pointer </label>
                                                                    <input type="number" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check form-group form-check-inline">
                                                                    <label class="form-check-label">
																				<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Running KT
																				<span class="form-check-sign">
																					<span class="check"></span>
																				</span>
																			</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="link3" aria-expanded="false">
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Achivements</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h6 class="card-title">Select The Languages YOu Know</h6>
                                                        <?php 
                                                                $languages= array("C", "C++", "Java", "C#", "Python", "Basic Front End", "Angular", "React", "PHP", "php Frame Work");
                                                                $count = 1;
                                                                foreach( $languages as $language)
                                                                {
                                                            ?>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">
																		<input class="form-check-input" type="checkbox" id="inlineCheckbox<?php echo $count; ?>" value="option1">
																		<?php echo $language;?>
																		<span class="form-check-sign">
																			<span class="check"></span>
																		</span>
																	</label>
                                                        </div>
                                                        <?php } ?>

                                                        <form class="form-horizontal" method="post">
                                                            <div id="add-project">
                                                                <div class="form-group row" id="item1">
                                                                    <div class="col-md-4">
                                                                        <label style="display:block">Project Name</label>
                                                                        <input type="text" placeholder="Name of the project">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>Project Description</label>
                                                                        <input type="text" placeholder="Description">
                                                                    </div>
                                                                    <div class="col-md-2" id="item1_add_button">
                                                                        <label for="" style="display:block">&nbsp;</label>
                                                                        <button type="button" class="btn btn-primary btn-sm" onclick="generateElements('2')" class=""><i class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <form class="form-horizontal" method="post">
                                                            <div id="add-achievements">
                                                                <div class="form-group row" id="item1">
                                                                    <div class="col-md-4">
                                                                        <label style="display:block">Achievements</label>
                                                                        <input type="text" placeholder="Your Achievement">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>Achievement Description</label>
                                                                        <input type="text" placeholder="Description">
                                                                    </div>
                                                                    <div class="col-md-2" id="item1_add_button">
                                                                        <label for="" style="display:block">&nbsp;</label>
                                                                        <button type="button" class="btn btn-primary btn-sm" onclick="generateElements2('2')" class=""><i class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>



                                                        <button type="submit" class="btn btn-primary pull-right"> Proceed </button>

                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                            </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
	</div>
	<footer class="footer">
		<div class="container-fluid">
			<div class="copyright float-right">
				&copy;
				<script>
					document.write(new Date().getFullYear())

				</script>, made with <i class="material-icons">favorite</i> Web Development Mini Project.
			</div>
		</div>
	</footer>
	</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<!--  Google Maps Plugin    -->
	<script src="../../assets/js/plugins/moment.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/date-picker.min.js" type="text/javascript"></script>

	<!--    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
	<!-- Chartist JS -->
	<script src="../../assets/js/plugins/chartist.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="../../assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="../../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../../assets/demo/demo.js"></script>
	<script src="../../assets/js/custom.js"></script>
	<script src="../../assets/js/project.js"></script>
	<script src="../../assets/js/achievement.js"></script>
	<script>
    
		$(document).ready(function() {
			// Javascript method's body can be found in ../../assets/js/demos.js
			md.initDashboardPageCharts();

		});

	</script>
</body>

</html>
