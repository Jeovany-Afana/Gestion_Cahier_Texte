<!doctype html>
<html lang="en">

<head>
<title>:: Iconic University :: Students Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendor/morrisjs/morris.css" />

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/main.css">

</head>
<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                <a href="index.html">ICONIC</a>
            </div>

            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                    <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="page-login.html" class="icon-menu"><i class="fa fa-power-off"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- main left menu -->
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pro. Chandler Bing</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="doctor-profile.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>Exp</small>
                        <h6>14</h6>
                    </li>
                    <li class="col-4">
                        <small>Awards</small>
                        <h6>13</h6>
                    </li>
                    <li class="col-4">
                        <small>Clients</small>
                        <h6>213</h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul class="metismenu li_animation_delay">
                            <li><a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-tag"></i><span>Apps</span></a>
                                <ul>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="app-inbox.html">Inbox App</a></li>
                                    <li><a href="app-chat.html">Chat App</a></li>
                                    <li><a href="app-contact.html">Contact list</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa  fa-user-circle"></i><span>Professors</span> </a>
                                <ul>
                                    <li><a href="add-professors.html">Add Professors</a></li>
                                    <li><a href="professors-list.html">Professors List</a></li>
                                    <li><a href="professors-profile.html">Professors Profile</a></li>
                                    <li><a href="professors-leave.html">Leave Request</a></li>
                                    <li><a href="attendance.html">Attendance</a></li>
                                    <li><a href="noticeboard.html">Noticeboard</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i><span>Students</span> </a>
                                <ul>
                                    <li><a href="students-add.html">Add Students</a></li>
                                    <li><a href="students-list.html">Students List</a></li>
                                    <li class="active"><a href="students-profile.html">Students Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-user"></i><span>Parents</span> </a>
                                <ul>
                                    <li><a href="parents-add.html">Add Parents</a></li>
                                    <li><a href="parents-list.html">Parents List</a></li>
                                </ul>
                            </li>
                            <li><a href="hostel.html"><i class="fa fa-tag"></i>Hostel</a></li>
                            <li><a href="transport.html"><i class="fa fa-taxi"></i>Transport</a></li>
                            <li><a href="departments.html"><i class="fa fa-building"></i>Departments</a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-graduation-cap"></i><span>Courses</span> </a>
                                <ul>
                                    <li><a href="course-list.html">All Courses</a></li>
                                    <li><a href="course-add.html">Add Courses</a></li>
                                    <li><a href="course-info.html">Courses Info</a></li>
                                </ul>
                            </li>
                            <li><a href="library.html"><i class="fa fa-book"></i>Library</a></li>
                            <li><a href="classroom.html"><i class="fa fa-sitemap"></i>Classes</a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-cc-visa"></i><span>Payments</span> </a>
                                <ul>
                                    <li><a href="payments.html">Payments</a></li>
                                    <li><a href="payments-add.html">Add Payment</a></li>
                                    <li><a href="payments-invoice.html">Invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="our-centres.html"><i class="fa fa-map"></i>University Centres</a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-folder"></i><span>File Manager</span></a>
                                <ul>
                                    <li><a href="file-dashboard.html">Dashboard</a></li>
                                    <li><a href="file-documents.html">Documents</a></li>
                                    <li><a href="file-media.html">Media</a></li>
                                    <li><a href="file-images.html">Images</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Authentication" class="has-arrow"><i class="fa fa-lock"></i><span>Authentication</span></a>
                                <ul>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                    <li><a href="page-404.html">Page 404</a></li>
                                    <li><a href="page-403.html">Page 403</a></li>
                                    <li><a href="page-500.html">Page 500</a></li>
                                    <li><a href="page-503.html">Page 503</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="fa fa-tag"></i><span>Extra Pages</span></a>
                                <ul>
                                    <li><a href="page-blank.html">Blank Page</a></li>
                                    <li><a href="page-profile.html">Profile</a></li>
                                    <li><a href="page-gallery.html">Image Gallery</a></li>
                                    <li><a href="page-timeline.html">Timeline</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-search-results.html">Search Results</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-testimonials.html">Testimonials</a></li>
                                    <li><a href="page-faq.html">FAQs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="Chat">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="right_chat list-unstyled li_animation_delay">
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">chrisfox@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Jogelucky@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Isabella@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                    <span class="message">FolisiseChosielie@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Alexander <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Alexander@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Isabella@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="images/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                    <span class="message">FolisiseChosielie@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="app-contact.html" class="btn btn-block btn-primary">View all Doctors</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="red"><div class="red"></div></li>
                    </ul>

                    <ul class="list-unstyled font_setting mt-3">
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                                <span class="custom-control-label">Nunito Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                                <span class="custom-control-label">Ubuntu Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                                <span class="custom-control-label">Raleway Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                                <span class="custom-control-label">IBM Plex Google Font</span>
                            </label>
                        </li>
                    </ul>

                    <ul class="list-unstyled mt-3">
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-switch">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable Dark Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-rtl">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable RTL Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-high-contrast">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable High Contrast Mode!</span>
                        </li>
                    </ul>

                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Allowed Notifications</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>

                    <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                    <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
                </div>
                <div class="tab-pane" id="question">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="list-unstyled question">
                        <li class="menu-heading">HOW-TO</li>
                        <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                        <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                        <li><a href="javascript:void(0);">Website Analytics</a></li>
                        <li class="menu-heading">ACCOUNT</li>
                        <li><a href="javascript:void(0);">Cearet New Account</a></li>
                        <li><a href="javascript:void(0);">Change Password?</a></li>
                        <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                        <li class="menu-heading">BILLING</li>
                        <li><a href="javascript:void(0);">Payment info</a></li>
                        <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                        <li class="menu-button mt-3">
                            <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- rightbar icon div -->
    <div class="right_icon_bar">
        <ul>
            <li><a href="app-inbox.html"><i class="fa fa-envelope"></i></a></li>
            <li><a href="app-chat.html"><i class="fa fa-comments"></i></a></li>
            <li><a href="app-calendar.html"><i class="fa fa-calendar"></i></a></li>
            <li><a href="file-dashboard.html"><i class="fa fa-folder"></i></a></li>
            <li><a href="app-contact.html"><i class="fa fa-id-card"></i></a></li>
            <li><a href="blog-list.html"><i class="fa fa-globe"></i></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Students Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Students</li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card member-card">
                        <div class="header primary-bg">
                            <h4 class="m-t-10 text-light">Eliana Smith</h4>
                        </div>
                        <div class="member-img">
                            <a href="javascript:void(0);"><img src="images/lg/avatar2.jpg" class="rounded-circle" alt="profile-image"></a>
                        </div>
                        <div class="body">
                            <div class="row text-center border-bottom pb-2">
                                <div class="col-md-6 border-right">
                                    <label class="d-block text-muted mb-1">Name</label>
                                    <h6>Eliana Smith</h6>
                                </div>
                                <div class="col-md-6">
                                    <label class="d-block text-muted mb-1">Class</label>
                                    <h6>BCA Sem1</h6>
                                </div>
                            </div>
                            <div class="row text-center mt-2 border-bottom pb-2">
                                <div class="col-md-6 border-right">
                                    <label class="d-block text-muted mb-1">Email ID</label>
                                    <h6>will.smith@info.com</h6>
                                </div>
                                <div class="col-md-6">
                                    <label class="d-block text-muted mb-1">Phone</label>
                                    <h6>+123 456 789</h6>
                                </div>
                            </div>
                            <div class="row text-center mt-2 border-bottom pb-2">
                                <div class="col-md-12">
                                    <label class="d-block text-muted mb-1">Address</label>
                                    <h6>85 Bay Drive, New Port Richey, FL 34653</h6>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="social-links list-unstyled mb-0">
                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="instagram" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Progress</strong> Report</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled">
                                <li>
                                    <div>Computer</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Sport</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>English</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Design</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card" id="timeline">
                        <div class="body">
                            <div class="timeline-item green" date-is="21-02-2020">
                                <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
                                <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA</span>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                    <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                    <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-bubbles"></i> Comment</a>
                                    <div class="collapse m-t-10" id="collapseExample">
                                        <div class="well">
                                            <form>
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="timeline-item blue" date-is="21-02-2020 - Yesterday">
                                <h5>Oeehhh, that's awesome.. Me too!</h5>
                                <span><a href="javascript:void(0);" title="">Katherine Lumaad</a> Oakland, CA</span>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                    <div class="timeline_img m-b-20">
                                        <img class="w-25" src="images/blog/blog-page-4.jpg" alt="Awesome Image">
                                        <img class="w-25" src="images/blog/blog-page-2.jpg" alt="Awesome Image">
                                    </div>
                                    <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                    <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="icon-bubbles"></i> Comment</a>
                                    <div class="collapse m-t-10" id="collapseExample1">
                                        <div class="well">
                                            <form>
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item warning" date-is="21-02-2020">
                                <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
                                <span><a href="javascript:void(0);" title="">Gary Camara</a> San Francisco, CA</span>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                    <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                    <a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="icon-bubbles"></i> Comment</a>
                                    <div class="collapse m-t-10" id="collapseExample2">
                                        <div class="well">
                                            <form>
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
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

</div>

<!-- Javascript -->
<script src="bundles/libscripts.bundle.js"></script>
<script src="bundles/vendorscripts.bundle.js"></script>

<!-- page js file -->
<script src="bundles/mainscripts.bundle.js"></script>
<script src="../../js/pages/student-profile.js"></script>
</body>
</html>
