<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="{{$page_keywords ?? ''}}" />
	<meta name="author" content="{{$page_author ?? 'CRUD Starter'}}" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{$page_description ?? ''}}" />
	<meta property="og:title" content="{{$page_description ?? ''}}" />
	<meta property="og:description" content="{{$page_description ?? ''}}" />
	<meta property="og:image" content="https://jobie.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>{{ ($page_title ?? null) ? get_setting('appname').' : '.strip_tags($page_title ?? '') : "Admin Area" }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets_jb/images/favicon.png">
    <link href="/assets_jb/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets_jb/vendor/chartist/css/chartist.min.css">
	<!-- Vectormap -->
    <link href="/assets_jb/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="/assets_jb/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/assets_jb/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="/assets_jb/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/assets_jb/css/style.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="66.5px" height="66.5px">
					<g><path class="svg-logo-circle" fill-rule="evenodd"  fill="rgb(64, 24, 157)"
					 d="M32.999,66.000 C14.774,66.000 -0.000,51.225 -0.000,33.000 C-0.000,14.775 14.774,-0.000 32.999,-0.000 C51.225,-0.000 66.000,14.775 66.000,33.000 C66.000,51.225 51.225,66.000 32.999,66.000 Z"/></g><g><path class="svg-logo-icon-text" fill-rule="evenodd"  stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="rgb(255, 255, 255)"
					 d="M58.273,11.788 L53.346,35.007 C52.729,37.824 51.661,40.116 50.142,41.883 C48.623,43.602 46.868,44.939 44.874,45.894 C42.928,46.849 40.840,47.470 38.609,47.757 C36.379,48.091 34.243,48.258 32.202,48.258 C29.829,48.258 27.788,48.091 26.080,47.757 C24.371,47.470 22.852,47.040 21.523,46.467 C20.242,45.894 19.079,45.202 18.035,44.390 C16.991,43.530 15.947,42.599 14.902,41.597 L17.181,30.780 L30.565,30.780 C30.565,30.924 30.493,31.282 30.351,31.855 C30.256,32.380 30.138,33.025 29.995,33.789 C29.853,34.553 29.710,35.389 29.568,36.296 C29.473,37.203 29.426,38.039 29.426,38.803 C29.426,39.281 29.473,39.782 29.568,40.307 C29.663,40.832 29.829,41.334 30.066,41.811 C30.304,42.241 30.636,42.623 31.063,42.958 C31.538,43.244 32.107,43.387 32.771,43.387 C34.006,43.387 34.979,42.886 35.690,41.883 C36.450,40.832 37.114,38.946 37.683,36.224 L44.858,2.204 C50.110,4.228 54.714,7.552 58.273,11.788 Z"/>
					</g>
				</svg>
				<svg class="brand-title" width="101.5px" height="29.5px">
				<path class="svg-logo-text-path" fill-rule="evenodd"  stroke="rgb(0, 0, 0)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="rgb(64, 24, 157)"
				 d="M99.505,17.384 C99.302,18.169 98.998,18.840 98.593,19.398 L87.915,19.398 C87.813,19.955 87.737,20.487 87.687,20.994 C87.661,21.501 87.649,21.957 87.649,22.362 C87.649,22.590 87.661,22.843 87.687,23.122 C87.712,23.401 87.763,23.667 87.839,23.920 C87.940,24.148 88.067,24.351 88.219,24.528 C88.396,24.680 88.637,24.756 88.941,24.756 C89.169,24.756 89.422,24.680 89.701,24.528 C90.005,24.376 90.296,24.161 90.575,23.882 C90.879,23.603 91.158,23.261 91.411,22.856 C91.690,22.451 91.905,21.995 92.057,21.488 L98.289,21.488 L97.301,25.554 C96.794,25.883 96.211,26.162 95.553,26.390 C94.894,26.618 94.197,26.808 93.463,26.960 C92.728,27.087 91.981,27.175 91.221,27.226 C90.461,27.302 89.739,27.340 89.055,27.340 C87.788,27.340 86.610,27.226 85.521,26.998 C84.432,26.770 83.482,26.377 82.670,25.820 C81.860,25.263 81.214,24.528 80.733,23.616 C80.277,22.679 80.049,21.526 80.049,20.158 C80.049,18.917 80.239,17.701 80.619,16.510 C81.024,15.319 81.683,14.268 82.595,13.356 C83.532,12.419 84.773,11.671 86.319,11.114 C87.890,10.557 89.840,10.278 92.171,10.278 C94.704,10.278 96.604,10.671 97.871,11.456 C99.163,12.241 99.809,13.470 99.809,15.142 C99.809,15.826 99.708,16.573 99.505,17.384 ZM92.589,13.280 C92.335,13.001 92.032,12.862 91.677,12.862 C91.271,12.862 90.892,13.001 90.537,13.280 C90.208,13.533 89.904,13.888 89.625,14.344 C89.346,14.775 89.093,15.281 88.865,15.864 C88.637,16.421 88.447,17.017 88.295,17.650 L92.627,17.650 C92.678,17.346 92.728,17.029 92.779,16.700 C92.830,16.421 92.868,16.117 92.893,15.788 C92.944,15.459 92.969,15.155 92.969,14.876 C92.969,14.090 92.842,13.559 92.589,13.280 ZM79.024,8.340 C78.644,8.644 78.201,8.872 77.694,9.024 C77.188,9.176 76.668,9.252 76.136,9.252 C75.123,9.252 74.274,9.011 73.590,8.530 C72.906,8.049 72.564,7.289 72.564,6.250 C72.564,5.693 72.678,5.199 72.906,4.768 C73.134,4.312 73.438,3.945 73.818,3.666 C74.224,3.362 74.679,3.134 75.186,2.982 C75.718,2.830 76.263,2.754 76.820,2.754 C77.808,2.754 78.644,2.995 79.328,3.476 C80.012,3.957 80.354,4.705 80.354,5.718 C80.354,6.301 80.227,6.807 79.974,7.238 C79.746,7.669 79.429,8.036 79.024,8.340 ZM75.832,27.036 L68.118,27.036 L71.576,10.696 L79.366,10.696 L75.832,27.036 ZM67.055,19.550 C66.878,20.411 66.625,21.311 66.295,22.248 C65.967,23.160 65.523,23.996 64.966,24.756 C64.433,25.516 63.750,26.137 62.914,26.618 C62.103,27.099 61.128,27.340 59.988,27.340 C59.304,27.340 58.632,27.264 57.974,27.112 C57.340,26.960 56.757,26.757 56.226,26.504 C55.719,26.251 55.263,25.959 54.857,25.630 C54.478,25.275 54.199,24.921 54.021,24.566 L53.755,24.566 L52.045,27.036 L45.890,27.036 L51.286,1.500 L59.076,1.500 L56.605,13.128 L56.871,13.128 C57.707,12.165 58.645,11.481 59.683,11.076 C60.747,10.645 61.799,10.430 62.838,10.430 C63.724,10.430 64.459,10.569 65.042,10.848 C65.650,11.101 66.131,11.456 66.485,11.912 C66.840,12.368 67.093,12.913 67.245,13.546 C67.397,14.179 67.473,14.851 67.473,15.560 C67.473,15.915 67.448,16.447 67.397,17.156 C67.347,17.865 67.233,18.663 67.055,19.550 ZM59.304,14.572 C59.152,14.243 58.860,14.078 58.429,14.078 C57.923,14.078 57.454,14.268 57.024,14.648 C56.592,15.003 56.276,15.307 56.074,15.560 L54.591,22.362 C54.769,22.666 54.997,22.957 55.276,23.236 C55.579,23.515 55.934,23.654 56.340,23.654 C56.948,23.654 57.454,23.337 57.859,22.704 C58.265,22.045 58.594,21.285 58.847,20.424 C59.101,19.537 59.279,18.663 59.379,17.802 C59.506,16.915 59.569,16.257 59.569,15.826 C59.569,15.319 59.481,14.901 59.304,14.572 ZM42.082,24.908 C40.156,26.529 37.370,27.340 33.722,27.340 C30.606,27.340 28.377,26.745 27.034,25.554 C25.590,24.312 24.868,22.451 24.868,19.968 C24.868,18.321 25.198,16.827 25.856,15.484 C26.540,14.141 27.515,13.027 28.782,12.140 C30.631,10.899 33.165,10.278 36.382,10.278 C39.397,10.278 41.588,10.810 42.956,11.874 C44.400,12.989 45.122,14.838 45.122,17.422 C45.122,19.018 44.856,20.462 44.324,21.754 C43.792,23.021 43.045,24.072 42.082,24.908 ZM37.180,13.432 C37.054,13.052 36.762,12.862 36.306,12.862 C35.622,12.862 35.027,13.229 34.520,13.964 C34.039,14.699 33.646,15.573 33.342,16.586 C33.038,17.599 32.810,18.638 32.658,19.702 C32.531,20.766 32.468,21.627 32.468,22.286 C32.468,23.933 32.912,24.756 33.798,24.756 C34.431,24.756 34.976,24.401 35.432,23.692 C35.914,22.983 36.293,22.121 36.572,21.108 C36.851,20.069 37.054,19.005 37.180,17.916 C37.332,16.801 37.408,15.839 37.408,15.028 C37.408,14.319 37.332,13.787 37.180,13.432 ZM20.309,23.996 C19.499,24.908 18.561,25.617 17.497,26.124 C16.459,26.631 15.344,26.960 14.154,27.112 C12.963,27.289 11.823,27.378 10.733,27.378 C9.467,27.378 8.378,27.289 7.466,27.112 C6.554,26.960 5.743,26.732 5.033,26.428 C4.350,26.124 3.729,25.757 3.171,25.326 C2.614,24.870 2.057,24.376 1.500,23.844 L2.716,18.106 L9.859,18.106 C9.859,18.182 9.821,18.372 9.745,18.676 C9.695,18.955 9.632,19.297 9.556,19.702 C9.480,20.107 9.404,20.551 9.328,21.032 C9.277,21.513 9.252,21.957 9.252,22.362 C9.252,22.615 9.277,22.881 9.328,23.160 C9.379,23.439 9.467,23.705 9.594,23.958 C9.720,24.186 9.897,24.389 10.126,24.566 C10.379,24.718 10.683,24.794 11.038,24.794 C11.696,24.794 12.216,24.528 12.595,23.996 C13.001,23.439 13.356,22.438 13.659,20.994 L17.497,2.906 L25.744,2.906 L22.020,20.348 C21.690,21.843 21.120,23.059 20.309,23.996 Z"/>
				</svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="#" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="#" data-bs-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search something here...">
									<div class="input-group-append">
										<button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.5678 26.5202C22.8079 26.5202 23.0447 26.6115 23.2249 26.7856C24.3769 27.8979 26.0572 28.2683 27.551 27.8047C26.5897 25.802 26.4564 23.5075 27.2014 21.383C28.126 18.7398 28.3577 16.0905 27.3055 13.4334C26.381 11.0992 24.5971 9.15994 22.3395 8.05408C22.4784 8.79455 22.5484 9.54903 22.5484 10.3115C22.5484 13.5478 21.304 16.5916 19.0444 18.8823C16.7846 21.1733 13.7553 22.4615 10.5147 22.5097C9.91267 22.5191 9.31331 22.4837 8.72073 22.4056C10.5017 25.5274 13.8606 27.5606 17.5516 27.6153C19.1663 27.6403 20.7166 27.302 22.1604 26.6125C22.2904 26.5503 22.4296 26.5202 22.5678 26.5202Z" fill="#3E4954"/>
										<path d="M10.541 0.00236249C4.79223 -0.111786 0.0134501 4.53885 -0.000411333 10.2863C-0.00380737 11.6906 0.270302 13.052 0.814361 14.3331C0.822262 14.3517 0.829608 14.3706 0.836262 14.3897C1.58124 16.5142 1.4481 18.8086 0.486678 20.8114C1.98059 21.2748 3.66073 20.9046 4.81275 19.7922C5.09656 19.518 5.5212 19.449 5.8773 19.6192C7.3209 20.3087 8.87143 20.648 10.486 20.6221C16.1898 20.5374 20.6576 16.0085 20.6576 10.3117C20.6576 4.73921 16.1193 0.114501 10.541 0.00236249ZM4.81898 11.8517C3.99305 11.8517 3.32348 11.1832 3.32348 10.3587C3.32348 9.53414 3.99305 8.86568 4.81898 8.86568C5.64492 8.86568 6.31449 9.53414 6.31449 10.3587C6.31442 11.1832 5.64492 11.8517 4.81898 11.8517ZM10.3286 11.8517C9.50268 11.8517 8.8331 11.1832 8.8331 10.3587C8.8331 9.53414 9.50268 8.86568 10.3286 8.86568C11.1545 8.86568 11.8241 9.53414 11.8241 10.3587C11.8241 11.1832 11.1545 11.8517 10.3286 11.8517ZM15.8383 11.8517C15.0124 11.8517 14.3428 11.1832 14.3428 10.3587C14.3428 9.53414 15.0124 8.86568 15.8383 8.86568C16.6642 8.86568 17.3338 9.53414 17.3338 10.3587C17.3338 11.1832 16.6642 11.8517 15.8383 11.8517Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">18</span>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.45251 25.6682C10.0606 27.0357 11.4091 28 13.0006 28C14.5922 28 15.9407 27.0357 16.5488 25.6682C15.4266 25.7231 14.2596 25.76 13.0006 25.76C11.7418 25.76 10.5748 25.7231 9.45251 25.6682Z" fill="#3E4954"/>
										<path d="M25.3531 19.74C23.8769 17.8785 21.3995 14.2195 21.3995 10.64C21.3995 7.09073 19.1192 3.89758 15.7995 2.72382C15.7592 1.21406 14.5183 0 13.0006 0C11.4819 0 10.2421 1.21406 10.2017 2.72382C6.88095 3.89758 4.60064 7.09073 4.60064 10.64C4.60064 14.2207 2.12434 17.8785 0.647062 19.74C0.154273 20.3616 0.00191325 21.1825 0.240515 21.9363C0.473484 22.6721 1.05361 23.2422 1.79282 23.4595C3.08755 23.8415 5.20991 24.2715 8.44676 24.491C9.84785 24.5851 11.3543 24.64 13.0007 24.64C14.646 24.64 16.1524 24.5851 17.5535 24.491C20.7914 24.2715 22.9127 23.8415 24.2085 23.4595C24.9477 23.2422 25.5268 22.6722 25.7597 21.9363C25.9983 21.1825 25.8448 20.3616 25.3531 19.74Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">52</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black">Oda Dink</span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="/assets_jb/app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="/assets_jb/email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="/assets_jb/page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		@include('CrudStarter::layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
						<div class="card bg-primary">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-2 me-3 feature-icon rounded">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M30.25 5.75H28.5V2.25C28.5 1.78587 28.3156 1.34075 27.9874 1.01256C27.6593 0.684374 27.2141 0.5 26.75 0.5C26.2859 0.5 25.8407 0.684374 25.5126 1.01256C25.1844 1.34075 25 1.78587 25 2.25V5.75H11V2.25C11 1.78587 10.8156 1.34075 10.4874 1.01256C10.1592 0.684374 9.71413 0.5 9.25 0.5C8.78587 0.5 8.34075 0.684374 8.01256 1.01256C7.68437 1.34075 7.5 1.78587 7.5 2.25V5.75H5.75C4.35761 5.75 3.02226 6.30312 2.03769 7.28769C1.05312 8.27226 0.5 9.60761 0.5 11V12.75H35.5V11C35.5 9.60761 34.9469 8.27226 33.9623 7.28769C32.9777 6.30312 31.6424 5.75 30.25 5.75Z" fill="white"/>
											<path d="M0.5 30.25C0.5 31.6424 1.05312 32.9777 2.03769 33.9623C3.02226 34.9469 4.35761 35.5 5.75 35.5H30.25C31.6424 35.5 32.9777 34.9469 33.9623 33.9623C34.9469 32.9777 35.5 31.6424 35.5 30.25V16.25H0.5V30.25Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body text-end feature-icon-text">
										<p class="fs-18 text-white mb-2">Interviews</p>
										<span class="fs-48 text-white font-w600">86</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
						<div class="card bg-info overflow-hidden">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-2 me-3 feature-icon rounded">
										<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M38.4998 10.4995H35.0002V38.4999H38.4998C40.4245 38.4999 42 36.9238 42 34.9992V13.9992C42 12.075 40.4245 10.4995 38.4998 10.4995Z" fill="white"/>
											<path d="M27.9998 10.4995V6.9998C27.9998 5.07515 26.4243 3.49963 24.5001 3.49963H17.4998C15.5756 3.49963 14.0001 5.07515 14.0001 6.9998V10.4995H10.5V38.4998H31.5V10.4995H27.9998ZM24.5001 10.4995H17.4998V6.99929H24.5001V10.4995Z" fill="white"/>
											<path d="M3.50017 10.4995C1.57551 10.4995 0 12.075 0 13.9997V34.9997C0 36.9243 1.57551 38.5004 3.50017 38.5004H6.99983V10.4995H3.50017Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body text-end feature-icon-text">
										<p class="fs-18 text-white mb-2">Apply</p>
										<span class="fs-48 text-white font-w600">75</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
						<div class="card bg-success">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-2 me-3 feature-icon rounded">
										<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M15.1811 22.0083C15.065 21.9063 14.7968 21.6695 14.7015 21.5799C12.3755 19.3941 10.8517 15.9712 10.8517 12.1138C10.8517 5.37813 15.4868 0.0410156 21.001 0.0410156C26.5152 0.0410156 31.1503 5.37813 31.1503 12.1138C31.1503 15.9679 29.6292 19.3884 27.3094 21.5778C27.2118 21.6699 26.9384 21.9116 26.8238 22.0125L26.8139 22.1799C26.8789 23.1847 27.554 24.0553 28.5232 24.3626C35.7277 26.641 40.9507 32.0853 41.8276 38.538C41.9483 39.3988 41.6902 40.2696 41.1198 40.9254C40.5495 41.5813 39.723 41.9579 38.8541 41.9579C32.4956 41.9591 9.50672 41.9591 3.14818 41.9591C2.2787 41.9591 1.4518 41.5824 0.881242 40.9263C0.31068 40.2701 0.0523763 39.3989 0.172318 38.5437C1.05145 32.0851 6.27444 26.641 13.4777 24.3628C14.4504 24.0544 15.1263 23.1802 15.1885 22.1722L15.1811 22.0083Z" fill="white"/>
										</svg>

									</span>
									<div class="media-body text-end feature-icon-text">
										<p class="fs-18 text-white mb-2">Profile</p>
										<span class="fs-48 text-white font-w600">45</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card bg-secondary">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-2 me-3 feature-icon rounded">
										<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M40.614 9.36994C40.443 8.22658 39.8679 7.18234 38.9932 6.4265C38.1184 5.67067 37.0018 5.25328 35.8457 5.25H6.1543C4.99822 5.25328 3.88159 5.67067 3.00681 6.4265C2.13203 7.18234 1.55701 8.22658 1.38599 9.36994L21 22.0618L40.614 9.36994Z" fill="white"/>
											<path d="M21.7127 24.7274C21.5003 24.8647 21.2529 24.9378 21 24.9378C20.7471 24.9378 20.4997 24.8647 20.2873 24.7274L1.3125 12.4503V31.9081C1.31389 33.1918 1.82445 34.4225 2.73217 35.3302C3.63988 36.238 4.87061 36.7485 6.15431 36.7499H35.8457C37.1294 36.7485 38.3601 36.238 39.2678 35.3302C40.1755 34.4225 40.6861 33.1918 40.6875 31.9081V12.449L21.7127 24.7274Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body text-end feature-icon-text">
										<p class="fs-18 text-white mb-2">Message</p>
										<span class="fs-48 text-white font-w600">93</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card d-flex flex-xl-column flex-sm-column flex-md-row flex-column">
									<div class="card-body text-center profile-bx">
										<div class="profile-image mb-4">
											<img src="images/avatar/1.jpg" class="rounded-circle" alt="">
										</div>
										<h4 class="fs-22 text-black mb-1">Oda Dink</h4>
										<p class="mb-4">Programmer</p>
										<div class="row">
											<div class="col-4 p-0">
												<div class="d-inline-block mb-2 relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(255, 142, 38)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>7/9</span>
													<small class="text-black">66%</small>
												</div>
												<span class="d-block">PHP</span>
											</div>
											<div class="col-4 p-0">
												<div class="d-inline-block mb-2 relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(62, 168, 52)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>4/9</span>
													<small class="text-black">31%</small>
												</div>
												<span class="d-block">Vue</span>
											</div>
											<div class="col-4 p-0">
												<div class="d-inline-block mb-2 relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(34, 172, 147)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>2/9</span>
													<small class="text-black">7%</small>
												</div>
												<span class="d-block">Laravel</span>
											</div>
										</div>
									</div>
									<div class="card-body col-xl-12 col-md-6 col-sm-12 activity-card">
										<h4 class="fs-18 text-black mb-3">Recent Activities</h4>
										<div class="media mb-4">
											<span class="p-3 border me-3 rounded">
												<svg class="primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.3955 10.8038C19.9733 10.8038 19.5767 10.8742 19.2057 11.0213V4.79104H12.9883C13.1226 4.42004 13.193 4.01066 13.193 3.58849C13.193 1.60554 11.5874 0 9.60447 0C7.62152 0 6.01598 1.60554 6.01598 3.58849C6.01598 4.01066 6.08634 4.41365 6.22067 4.79104H0.00958252V11.7441C0.642845 11.1684 1.48719 10.8102 2.4083 10.8102C4.39125 10.8102 5.99679 12.4158 5.99679 14.3987C5.99679 16.3817 4.39125 17.9872 2.4083 17.9872C1.48719 17.9872 0.642845 17.629 0.00958252 17.0533V24H19.2121V17.7697C19.5831 17.9104 19.9797 17.9872 20.4019 17.9872C22.3912 17.9872 23.9904 16.3817 23.9904 14.3987C23.9904 12.4158 22.3912 10.8038 20.3955 10.8038Z" fill="#40189D"/>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-1 text-black font-w500">Your application has accepted in <strong>3 Vacancy</strong></p>
												<span class="fs-14">12h ago</span>
											</div>
										</div>
										<div class="media mb-4">
											<span class="p-3 border me-3 rounded">
												<svg class="primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.3955 10.8038C19.9733 10.8038 19.5767 10.8742 19.2057 11.0213V4.79104H12.9883C13.1226 4.42004 13.193 4.01066 13.193 3.58849C13.193 1.60554 11.5874 0 9.60447 0C7.62152 0 6.01598 1.60554 6.01598 3.58849C6.01598 4.01066 6.08634 4.41365 6.22067 4.79104H0.00958252V11.7441C0.642845 11.1684 1.48719 10.8102 2.4083 10.8102C4.39125 10.8102 5.99679 12.4158 5.99679 14.3987C5.99679 16.3817 4.39125 17.9872 2.4083 17.9872C1.48719 17.9872 0.642845 17.629 0.00958252 17.0533V24H19.2121V17.7697C19.5831 17.9104 19.9797 17.9872 20.4019 17.9872C22.3912 17.9872 23.9904 16.3817 23.9904 14.3987C23.9904 12.4158 22.3912 10.8038 20.3955 10.8038Z" fill="#40189D"/>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-1 text-black font-w500">Your application has accepted in <strong>3 Vacancy</strong></p>
												<span class="fs-14">12h ago</span>
											</div>
										</div>
										<div class="media mb-4">
											<span class="p-3 border me-3 rounded">
												<svg class="primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.3955 10.8038C19.9733 10.8038 19.5767 10.8742 19.2057 11.0213V4.79104H12.9883C13.1226 4.42004 13.193 4.01066 13.193 3.58849C13.193 1.60554 11.5874 0 9.60447 0C7.62152 0 6.01598 1.60554 6.01598 3.58849C6.01598 4.01066 6.08634 4.41365 6.22067 4.79104H0.00958252V11.7441C0.642845 11.1684 1.48719 10.8102 2.4083 10.8102C4.39125 10.8102 5.99679 12.4158 5.99679 14.3987C5.99679 16.3817 4.39125 17.9872 2.4083 17.9872C1.48719 17.9872 0.642845 17.629 0.00958252 17.0533V24H19.2121V17.7697C19.5831 17.9104 19.9797 17.9872 20.4019 17.9872C22.3912 17.9872 23.9904 16.3817 23.9904 14.3987C23.9904 12.4158 22.3912 10.8038 20.3955 10.8038Z" fill="#40189D"/>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-1 text-black font-w500">Your application has accepted in <strong>3 Vacancy</strong></p>
												<span class="fs-14">12h ago</span>
											</div>
										</div>
										<div class="media">
											<span class="p-3 border me-3 rounded">
												<svg class="primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.3955 10.8038C19.9733 10.8038 19.5767 10.8742 19.2057 11.0213V4.79104H12.9883C13.1226 4.42004 13.193 4.01066 13.193 3.58849C13.193 1.60554 11.5874 0 9.60447 0C7.62152 0 6.01598 1.60554 6.01598 3.58849C6.01598 4.01066 6.08634 4.41365 6.22067 4.79104H0.00958252V11.7441C0.642845 11.1684 1.48719 10.8102 2.4083 10.8102C4.39125 10.8102 5.99679 12.4158 5.99679 14.3987C5.99679 16.3817 4.39125 17.9872 2.4083 17.9872C1.48719 17.9872 0.642845 17.629 0.00958252 17.0533V24H19.2121V17.7697C19.5831 17.9104 19.9797 17.9872 20.4019 17.9872C22.3912 17.9872 23.9904 16.3817 23.9904 14.3987C23.9904 12.4158 22.3912 10.8038 20.3955 10.8038Z" fill="#40189D"/>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-1 text-black font-w500">Your application has accepted in <strong>3 Vacancy</strong></p>
												<span class="fs-14">12h ago</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0 flex-wrap">
										<h4 class="fs-20 text-black me-4 mb-2">Vacancy Stats</h4>
										<div class="form-check custom-checkbox mb-3">
											<input type="checkbox" class="form-check-input" id="customCheckBox1" required>
											<label class="form-check-label" for="customCheckBox1">Application Sent</label>
										</div>
										<div class="form-check custom-checkbox mb-3">
											<input type="checkbox" class="form-check-input" id="customCheck1" required>
											<label class="form-check-label" for="customCheck1">Interviews</label>
										</div>
										<div class="form-check custom-checkbox mb-3">
											<input type="checkbox" class="form-check-input" id="customCheck2" required>
											<label class="form-check-label" for="customCheck2">Rejected</label>
										</div>
										<select class="form-control style-1 default-select mt-3 mt-sm-0">
											<option>Monthly</option>
											<option>Weekly</option>
											<option>Daily</option>
										</select>
									</div>
									<div class="card-body">	
										<canvas id="lineChart" class="Vacancy-chart"></canvas>
										<div class="d-flex flex-wrap align-items-center justify-content-center mt-3">
											<div class="fs-14 text-black me-4">
												<svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="19" height="19" rx="9.5" fill="#4E36E2"/>
												</svg>
												Application Sent
											</div>
											<div class="fs-14 text-black me-4">
												<svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="19" height="19" rx="9.5" fill="#1BD084"/>
												</svg>
												Interviews
											</div>
											<div class="fs-14 text-black">
												<svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="19" height="19" rx="9.5" fill="#FF424D"/>
												</svg>
												Rejected
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<h4 class="fs-20 text-black mb-sm-4 mt-sm-0 mt-2  mb-2">Recomended Jobs</h4>
								<div class="testimonial-one owl-carousel">
									<div class="items">
										<div class="card shadow">
											<div class="card-body">	
												<div class="media mb-2">
													<div class="media-body">
														<p class="mb-1">Maximoz Team</p>
														<h4 class="fs-20 text-black">PHP Progammer</h4>
													</div>
													<svg class="ms-3" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M0 8.72727C0 3.90733 3.90733 0 8.72727 0H51.2727C56.0927 0 60 3.90733 60 8.72727V51.2727C60 56.0927 56.0927 60 51.2727 60H8.72727C3.90733 60 0 56.0927 0 51.2727V8.72727Z" fill="#D3D3D3"/>
														<path d="M0 8.72727C0 3.90733 3.90733 0 8.72727 0H51.2727C56.0927 0 60 3.90733 60 8.72727V51.2727C60 56.0927 56.0927 60 51.2727 60H8.72727C3.90733 60 0 56.0927 0 51.2727V8.72727Z" fill="#3144F3"/>
														<path d="M15.4662 15.4665C17.3565 13.5761 19.6007 12.0766 22.0705 11.0536C24.5403 10.0305 27.1875 9.50399 29.8608 9.50399C32.5342 9.50399 35.1813 10.0305 37.6512 11.0536C40.121 12.0766 42.3652 13.5761 44.2555 15.4665C46.1459 17.3568 47.6453 19.6009 48.6684 22.0708C49.6914 24.5406 50.218 27.1878 50.218 29.8611C50.218 32.5345 49.6914 35.1816 48.6684 37.6515C47.6453 40.1213 46.1458 42.3655 44.2555 44.2558L37.0582 37.0585C38.0033 36.1133 38.7531 34.9912 39.2646 33.7563C39.7761 32.5214 40.0394 31.1978 40.0394 29.8611C40.0394 28.5245 39.7761 27.2009 39.2646 25.966C38.7531 24.731 38.0033 23.609 37.0582 22.6638C36.113 21.7186 34.9909 20.9689 33.756 20.4574C32.5211 19.9458 31.1975 19.6826 29.8608 19.6826C28.5242 19.6826 27.2006 19.9458 25.9657 20.4574C24.7307 20.9689 23.6087 21.7186 22.6635 22.6638L15.4662 15.4665Z" fill="#8FD7FF"/>
														<path d="M15.4661 44.2558C11.6484 40.4381 9.50365 35.2601 9.50365 29.8611C9.50365 24.462 11.6484 19.2841 15.4661 15.4664C19.2838 11.6487 24.4617 9.50395 29.8608 9.50395C35.2598 9.50394 40.4378 11.6487 44.2555 15.4664L37.0581 22.6637C35.1493 20.7549 32.5603 19.6825 29.8608 19.6825C27.1613 19.6825 24.5723 20.7549 22.6635 22.6638C20.7546 24.5726 19.6822 27.1616 19.6822 29.8611C19.6822 32.5606 20.7546 35.1496 22.6635 37.0584L15.4661 44.2558Z" fill="white"/>
													</svg>
												</div>
												<span class="text-primary font-w500 d-block mb-3">$14,000 - $25,000</span>
												<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
												<div class="d-flex align-items-center mt-4">
													<a href="companies.html" class="btn btn-primary light btn-rounded me-auto">REMOTE</a>
													<span class="text-black font-w500 ps-3">London, England</span>
												</div>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="card shadow">
											<div class="card-body">	
												<div class="media mb-2">
													<div class="media-body">
														<p class="mb-1">Klean n Clin Studios</p>
														<h4 class="fs-20 text-black">Senior Programmer</h4>
													</div>
													<svg class="ms-3" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M0 8.72727C0 3.90733 3.90733 0 8.72727 0H51.2727C56.0927 0 60 3.90733 60 8.72727V51.2727C60 56.0927 56.0927 60 51.2727 60H8.72727C3.90733 60 0 56.0927 0 51.2727V8.72727Z" fill="#D3D3D3"/>
														<path d="M0 8.72727C0 3.90733 3.90733 0 8.72727 0H51.2727C56.0927 0 60 3.90733 60 8.72727V51.2727C60 56.0927 56.0927 60 51.2727 60H8.72727C3.90733 60 0 56.0927 0 51.2727V8.72727Z" fill="#FE8024"/>
														<path d="M15.4662 15.4665C17.3565 13.5761 19.6007 12.0766 22.0705 11.0536C24.5403 10.0305 27.1875 9.50398 29.8608 9.50398C32.5342 9.50399 35.1813 10.0305 37.6512 11.0536C40.121 12.0766 42.3652 13.5761 44.2555 15.4665C46.1459 17.3568 47.6453 19.6009 48.6684 22.0708C49.6914 24.5406 50.218 27.1878 50.218 29.8611C50.218 32.5345 49.6914 35.1816 48.6684 37.6515C47.6453 40.1213 46.1458 42.3655 44.2555 44.2558L37.0582 37.0585C38.0033 36.1133 38.7531 34.9912 39.2646 33.7563C39.7761 32.5214 40.0394 31.1978 40.0394 29.8611C40.0394 28.5245 39.7761 27.2009 39.2646 25.966C38.7531 24.731 38.0033 23.609 37.0582 22.6638C36.113 21.7186 34.9909 20.9689 33.756 20.4574C32.5211 19.9458 31.1975 19.6826 29.8608 19.6826C28.5242 19.6826 27.2006 19.9458 25.9657 20.4574C24.7307 20.9689 23.6087 21.7186 22.6635 22.6638L15.4662 15.4665Z" fill="white"/>
														<path d="M15.4661 44.2558C11.6484 40.4381 9.50364 35.2601 9.50364 29.8611C9.50363 24.462 11.6484 19.2841 15.4661 15.4664C19.2838 11.6487 24.4617 9.50395 29.8608 9.50395C35.2598 9.50394 40.4377 11.6487 44.2554 15.4664L37.0581 22.6637C35.1493 20.7549 32.5603 19.6825 29.8608 19.6825C27.1613 19.6825 24.5723 20.7549 22.6634 22.6638C20.7546 24.5726 19.6822 27.1616 19.6822 29.8611C19.6822 32.5606 20.7546 35.1496 22.6634 37.0584L15.4661 44.2558Z" fill="white"/>
													</svg>
												</div>
												<span class="text-primary font-w500 d-block mb-3">$14,000 - $25,000</span>
												<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
												<div class="d-flex align-items-center mt-4">
													<a href="companies.html" class="btn btn-primary light btn-rounded me-auto">REMOTE</a>
													<span class="text-black font-w500 ps-3">Manchester, England</span>
												</div>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="card shadow">
											<div class="card-body">	
												<div class="media mb-2">
													<div class="media-body">
														<p class="mb-1">Maximoz Team</p>
														<h4 class="fs-20 text-black">Intern UX Designer</h4>
													</div>
													<svg class="ms-3" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M0 8.72727C0 3.90733 3.90733 0 8.72727 0H51.2727C56.0927 0 60 3.90733 60 8.72727V51.2727C60 56.0927 56.0927 60 51.2727 60H8.72727C3.90733 60 0 56.0927 0 51.2727V8.72727Z" fill="#D3D3D3"/>
														<path d="M0 8.72727C0 3.90733 3.90733 0 8.72727 0H51.2727C56.0927 0 60 3.90733 60 8.72727V51.2727C60 56.0927 56.0927 60 51.2727 60H8.72727C3.90733 60 0 56.0927 0 51.2727V8.72727Z" fill="#FE8024"/>
														<path d="M15.4662 15.4665C17.3565 13.5761 19.6007 12.0766 22.0705 11.0536C24.5403 10.0305 27.1875 9.50398 29.8608 9.50398C32.5342 9.50399 35.1813 10.0305 37.6512 11.0536C40.121 12.0766 42.3652 13.5761 44.2555 15.4665C46.1459 17.3568 47.6453 19.6009 48.6684 22.0708C49.6914 24.5406 50.218 27.1878 50.218 29.8611C50.218 32.5345 49.6914 35.1816 48.6684 37.6515C47.6453 40.1213 46.1458 42.3655 44.2555 44.2558L37.0582 37.0585C38.0033 36.1133 38.7531 34.9912 39.2646 33.7563C39.7761 32.5214 40.0394 31.1978 40.0394 29.8611C40.0394 28.5245 39.7761 27.2009 39.2646 25.966C38.7531 24.731 38.0033 23.609 37.0582 22.6638C36.113 21.7186 34.9909 20.9689 33.756 20.4574C32.5211 19.9458 31.1975 19.6826 29.8608 19.6826C28.5242 19.6826 27.2006 19.9458 25.9657 20.4574C24.7307 20.9689 23.6087 21.7186 22.6635 22.6638L15.4662 15.4665Z" fill="white"/>
														<path d="M15.4661 44.2558C11.6484 40.4381 9.50364 35.2601 9.50364 29.8611C9.50363 24.462 11.6484 19.2841 15.4661 15.4664C19.2838 11.6487 24.4617 9.50395 29.8608 9.50395C35.2598 9.50394 40.4377 11.6487 44.2554 15.4664L37.0581 22.6637C35.1493 20.7549 32.5603 19.6825 29.8608 19.6825C27.1613 19.6825 24.5723 20.7549 22.6634 22.6638C20.7546 24.5726 19.6822 27.1616 19.6822 29.8611C19.6822 32.5606 20.7546 35.1496 22.6634 37.0584L15.4661 44.2558Z" fill="white"/>
													</svg>
												</div>
												<span class="text-primary font-w500 d-block mb-3">$14,000 - $25,000</span>
												<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
												<div class="d-flex align-items-center mt-4">
													<a href="companies.html" class="btn btn-primary light btn-rounded me-auto">FULTIME</a>
													<span class="text-black font-w500 ps-3">London, England</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="d-sm-flex align-items-center mb-3 mt-sm-0 mt-2">
							<h4 class="text-black fs-20 me-auto">Featured Companies</h4>
							<a href="companies.html" class="btn btn-primary light btn-rounded">View More
								<svg class="ms-3" width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M23.5607 5.93941L18.2461 0.62482C17.9532 0.331898 17.5693 0.185461 17.1854 0.185461C16.8015 0.185461 16.4176 0.331898 16.1247 0.62482C15.539 1.21062 15.539 2.16035 16.1247 2.74615L18.8787 5.50005L1.5 5.50005C0.671578 5.50005 0 6.17163 0 7.00005C0 7.82848 0.671578 8.50005 1.5 8.50005L18.8787 8.50005L16.1247 11.254C15.539 11.8398 15.539 12.7895 16.1247 13.3753C16.7106 13.9611 17.6602 13.9611 18.2461 13.3753L23.5607 8.06069C24.1464 7.47495 24.1464 6.52516 23.5607 5.93941Z" fill="#40189D"/>
								</svg>
							</a>
						</div>
						<div class="testimonial-two owl-carousel">
							<div class="items">
								<div class="card">
									<div class="card-body">
										<div class="media">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#40C7CF"/>
												<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
												<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
											</svg>
											<div class="media-body">
												<h6 class="fs-16 text-black font-w600">Herman-Carter</h6>
												<span class="text-primary font-w500">21 Vacancy</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="card">
									<div class="card-body">
										<div class="media">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#6EC061"/>
												<path d="M39.8144 66.9577C36.25 66.9577 32.7205 66.2556 29.4273 64.8916C26.1342 63.5275 23.142 61.5282 20.6216 59.0077C18.1011 56.4873 16.1018 53.4951 14.7377 50.2019C13.3737 46.9088 12.6716 43.3793 12.6716 39.8148C12.6716 36.2504 13.3737 32.7208 14.7377 29.4277C16.1018 26.1346 18.1011 23.1424 20.6216 20.6219C23.142 18.1015 26.1342 16.1021 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672L39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184C28.9578 31.4786 27.9581 32.9747 27.2761 34.6213C26.5941 36.2678 26.243 38.0326 26.243 39.8148C26.243 41.597 26.5941 43.3618 27.2761 45.0084C27.9581 46.6549 28.9578 48.151 30.218 49.4113C31.4782 50.6715 32.9743 51.6712 34.6209 52.3532C36.2675 53.0352 38.0322 53.3863 39.8144 53.3863L39.8144 66.9577Z" fill="white"/>
												<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
											</svg>
											<div class="media-body">
												<h6 class="fs-16 text-black font-w600">Funk Inc.</h6>
												<span class="text-primary font-w500">21 Vacancy</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="card">
									<div class="card-body">
										<div class="media">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#F3C831"/>
												<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="white"/>
												<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
											</svg>
											<div class="media-body">
												<h6 class="fs-16 text-black font-w600">Williamson Inc</h6>
												<span class="text-primary font-w500">21 Vacancy</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="card">
									<div class="card-body">
										<div class="media">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#F331E0"/>
												<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#F331E0"/>
												<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="#B60DA5"/>
											</svg>
											<div class="media-body">
												<h6 class="fs-16 text-black font-w600">Donnelly Ltd.</h6>
												<span class="text-primary font-w500">21 Vacancy</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="card">
									<div class="card-body">
										<div class="media">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#9B70A1"/>
												<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="white"/>
												<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
											</svg>
											<div class="media-body">
												<h6 class="fs-16 text-black font-w600">Herman-Carter</h6>
												<span class="text-primary font-w500">21 Vacancy</span>
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
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
				

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/assets_jb/vendor/global/global.min.js"></script>
	<script src="/assets_jb/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="/assets_jb/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="/assets_jb/vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="/assets_jb/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="/assets_jb/js/dashboard/dashboard-1.js"></script>
	
    <script src="/assets_jb/js/custom.min.js"></script>
	<script src="/assets_jb/js/deznav-init.js"></script>
	
    
	<script>
		  
		
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			function checkDirection() {
				var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
				if(htmlClassName == 'rtl') {
					return true;
				} else {
					return false;
				
				}
			}
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: false,
				left:true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					800:{
						items:2
					},	
					991:{
						items:2
					},			
					
					1200:{
						items:2
					},
					1600:{
						items:2
					}
				}
			})		
			jQuery('.testimonial-two').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: true,
				left:true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},	
					991:{
						items:3
					},			
					
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})					
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
</body>
</html>