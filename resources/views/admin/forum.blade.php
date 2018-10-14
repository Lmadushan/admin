<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from byrushan.com/projects/mae/1-0/wall.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:25:22 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="vendors/bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">
        <link href="vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
    </head>

    <body data-ma-header="teal">

        <header id="header" class="media">
            <div class="pull-left h-logo">
                <a href="index-2.html" class="hidden-xs">
                    Material
                    <small>admin extended</small>
                </a>

                <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
                    <div class="mc-wrap">
                        <div class="mcw-line top palette-White bg"></div>
                        <div class="mcw-line center palette-White bg"></div>
                        <div class="mcw-line bottom palette-White bg"></div>
                    </div>
                </div>
            </div>

            <ul class="pull-right h-menu">
                <li class="hm-search-trigger">
                    <a href="#" data-ma-action="search-open">
                        <i class="hm-icon zmdi zmdi-search"></i>
                    </a>
                </li>

                <li class="dropdown hidden-xs hidden-sm h-apps">
                    <a data-toggle="dropdown" href="#">
                        <i class="hm-icon zmdi zmdi-apps"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="#">
                                <i class="palette-Red-400 bg zmdi zmdi-calendar"></i>
                                <small>Calendar</small>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="palette-Green-400 bg zmdi zmdi-file-text"></i>
                                <small>Files</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="palette-Light-Blue bg zmdi zmdi-email"></i>
                                <small>Mail</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="palette-Orange-400 bg zmdi zmdi-trending-up"></i>
                                <small>Analytics</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="palette-Purple-300 bg zmdi zmdi-view-headline"></i>
                                <small>News</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="palette-Blue-Grey bg zmdi zmdi-image"></i>
                                <small>Gallery</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href="#"><i class="hm-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li class="hidden-xs">
                            <a data-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a data-action="clear-localstorage" href="#"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-settings"></i> Other Settings</a>
                        </li>
                    </ul>
                </li>
                <li class="hm-alerts" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                    <a href="#"><i class="hm-icon zmdi zmdi-notifications"></i></a>
                </li>
                <li class="dropdown hm-profile">
                    <a data-toggle="dropdown" href="#">
                        <img src="img/profile-pics/1.jpg" alt="">
                    </a>

                    <ul class="dropdown-menu pull-right dm-icon">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="media-body h-search">
                <form class="p-relative">
                    <input type="text" class="hs-input" placeholder="Search for people, files & reports">
                    <i class="zmdi zmdi-search hs-reset" data-ma-action="search-clear"></i>
                </form>
            </div>

        </header>

        <section id="main">
            <aside id="s-user-alerts" class="sidebar">
                <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">
                    <li><a class="sua-messages" href="#sua-messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="sua-notifications" href="#sua-notifications" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="sua-tasks" href="#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="sua-messages">
                        <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">
                            <li><a href="#"><i class="zmdi zmdi-check-all"></i> Mark all</a></li>
                            <li><a href="#"><i class="zmdi zmdi-long-arrow-tab"></i> View all</a></li>
                            <li><a href="#" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="lgi-heading">David Villa Jacobs</div>
                                    <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Candice Barnes</div>
                                    <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Jeannette Lawson</div>
                                    <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Darla Mckinney</div>
                                    <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Rudolph Perez</div>
                                    <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>

                        <a href="#" class="btn btn-float btn-danger m-btn">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                    <div class="tab-pane fade" id="sua-notifications">
                        <ul class="sua-menu list-inline list-unstyled palette-Orange bg">
                            <li><a href="#"><i class="zmdi zmdi-volume-off"></i> Mute</a></li>
                            <li><a href="#"><i class="zmdi zmdi-long-arrow-tab"></i> View all</a></li>
                            <li><a href="#" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="lgi-heading">David Villa Jacobs</div>
                                    <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Candice Barnes</div>
                                    <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Jeannette Lawson</div>
                                    <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Darla Mckinney</div>
                                    <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Rudolph Perez</div>
                                    <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sua-tasks">
                        <ul class="sua-menu list-inline list-unstyled palette-Green-400 bg">
                            <li><a href="#"><i class="zmdi zmdi-time"></i> Archived</a></li>
                            <li><a href="#"><i class="zmdi zmdi-check-all"></i> Mark all</a></li>
                            <li><a href="#" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Google Chrome Extension</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Social Intranet Projects</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Bootstrap Admin Template</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Youtube Client App</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-float btn-danger m-btn">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                </div>
            </aside>

            <aside id="s-main-menu" class="sidebar">
                <div class="smm-header">
                    <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
                </div>

                <ul class="smm-alerts">
                    <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-email"></i>
                    </li>
                    <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-notifications"></i>
                    </li>
                    <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-view-list-alt"></i>
                    </li>
                </ul>

                <ul class="main-menu">
                    <li>
                        <a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a>
                    </li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Headers</a>

                        <ul>
                            <li><a href="alternative-header.html">Altenative</a></li>
                            <li><a href="colored-header.html">Colored</a></li>
                        </ul>
                    </li>
                    <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                    <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                        <ul>
                            <li><a href="tables.html">Normal Tables</a></li>
                            <li><a href="data-tables.html">Data Tables</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                        <ul>
                            <li><a href="form-elements.html">Basic Form Elements</a></li>
                            <li><a href="form-components.html">Form Components</a></li>
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validations.html">Form Validation</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                        <ul>
                            <li><a href="colors.html">Colors</a></li>
                            <li><a href="animations.html">Animations</a></li>
                            <li><a href="box-shadow.html">Box Shadow</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="preloaders.html">Preloaders</a></li>
                            <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="other-components.html">Others</a></li>
                        </ul>
                    </li>
                    <li><a href="flot-charts.html"><i class="zmdi zmdi-trending-up"></i> Flot Charts</a></li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                        <ul>
                            <li><a href="photos.html">Default</a></li>
                            <li><a href="photo-timeline.html">Timeline</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                    <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                    <li class="sub-menu active">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                        <ul>
                            <li><a href="profile-about.html">Profile</a></li>
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="pricing-table.html">Pricing Table</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li class="active"><a href="wall.html">Wall</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login and Sign Up</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                        <ul>
                            <li><a href="form-elements.html">Level 2 link</a></li>
                            <li><a href="form-components.html">Another level 2 Link</a></li>
                            <li class="sub-menu">
                                <a href="#" data-ma-action="submenu-toggle">I have children too</a>

                                <ul>
                                    <li><a href="#">Level 3 link</a></li>
                                    <li><a href="#">Another Level 3 link</a></li>
                                    <li><a href="#">Third one</a></li>
                                </ul>
                            </li>
                            <li><a href="form-validations.html">One more 2</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Wall <small>Yeah, I got wall views as well!. These image grids are generated only using CSS.</small></h2>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card wall-posting">
                                <div class="card-body card-padding">
                                    <textarea class="wp-text" data-auto-size placeholder="Write Something..."></textarea>

                                    <div class="tab-content p-0">
                                        <div class="wp-media tab-pane" id="wpm-image">
                                            Images - Coming soon...
                                        </div>

                                        <div class="wp-media tab-pane" id="wpm-video">
                                            Video Links - Coming soon...
                                        </div>

                                        <div class="wp-media tab-pane" id="wpm-link">
                                            Links - Coming soon...
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled clearfix wpb-actions">
                                    <li class="wpba-attrs">
                                        <ul class="list-unstyled list-inline">
                                            <li><a data-wpba="image" data-toggle="tab" href="#" data-target="#wpm-image"><i class="zmdi zmdi-image"></i></a></li>
                                            <li><a data-wpba="video" data-toggle="tab" href="#" data-target="#wpm-video"><i class="zmdi zmdi-play-circle"></i></a></li>
                                            <li><a data-wpba="link" data-toggle="tab" href="#" data-target="#wpm-link"><i class="zmdi zmdi-link"></i></a></li>
                                        </ul>
                                    </li>

                                    <button class="btn btn-primary btn-sm btn-icon"><i class="zmdi zmdi-check"></i></button>
                                </ul>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/1.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Mallinda Hollaway <small>Posted on 31st Aug 2015 at 07:00</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="img/headers/4.png" style="background-image: url(img/headers/4.png);">
                                            <div class="lightbox-item"></div>
                                        </div>
                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 36</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/1.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/5.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/5.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="pull-right p-0">
                                                <ul class="actions">
                                                    <li class="dropdown" dropdown="">
                                                        <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                            <i class="zmdi zmdi-more-vert"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#">Report</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="media-body">
                                                <a href="#" class="a-title">David Nathan</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                                <p class="m-t-5 m-b-0">Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/4.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Sam Anderson</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                                <p class="m-t-5 m-b-0">Curabitur in arcu quis nulla aliquam condimentum.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/3.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Felix Harper <small>Posted on 29th Aug 2015 at 02:10</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding p-t-0">
                                    <p>Aliquam vel sem ut ligula posuere viverra. Ut dolor nisi, fringilla quis consectetur maximus, finibus vel diam. Duis condimentum, diam in semper congue, tortor orci condimentum urna</p>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 0</span>
                                            <span><i class="zmdi zmdi-favorite"></i> 0</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/2.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Morgan Francis <small>Posted on 2nd Sep 2015 at 17:00</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="media/gallery/2.jpg" style="background-image: url(media/gallery/2.jpg);">
                                            <img src="media/gallery/thumbs/2.jpg">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/3.jpg" style="background-image: url(media/gallery/3.jpg);">
                                            <img src="media/gallery/thumbs/2.jpg" alt="">
                                        </div>
                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 20</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 78</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Samantha Diaz</a> <small class="c-gray m-l-10">1 hour ago...</small>
                                                <p class="m-t-5 m-b-0">Pellentesque mollis fringilla finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/5.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Morgan Francis <small>Posted on 2nd Sep 2015 at 17:00</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="media/gallery/4.jpg" style="background-image: url(media/gallery/4.jpg);">
                                            <img src="media/gallery/thumbs/4.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/5.jpg" style="background-image: url(media/gallery/5.jpg);">
                                            <img src="media/gallery/thumbs/5.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/6.jpg" style="background-image: url(media/gallery/6.jpg);">
                                            <img src="media/gallery/thumbs/6.jpg" alt="">
                                        </div>
                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 20</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 78</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Samantha Diaz</a> <small class="c-gray m-l-10">1 hour ago...</small>
                                                <p class="m-t-5 m-b-0">Pellentesque mollis fringilla finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/2.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>William Morrison <small>Posted on 3rd July 2015 at 7:00</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Nullam dignissim, metus et feugiat porttitor.</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="media/gallery/6.jpg" style="background-image: url(media/gallery/6.jpg);">
                                            <img src="media/gallery/thumbs/6.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/7.jpg" style="background-image: url(media/gallery/7.jpg);">
                                            <img src="media/gallery/thumbs/7.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/8.jpg" style="background-image: url(media/gallery/8.jpg);">
                                            <img src="media/gallery/thumbs/8.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/9.jpg" style="background-image: url(media/gallery/9.jpg);">
                                            <img src="media/gallery/thumbs/5.jpg" alt="">
                                        </div>
                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 100</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 2432</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/1.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/7.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/9.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/8.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/9.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Finn Walking</a> <small class="c-gray m-l-10">3rd July 2015</small>
                                                <p class="m-t-5 m-b-0">Per conubia nostra.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/8.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Benn Holder</a> <small class="c-gray m-l-10">3rd July 2015</small>
                                                <p class="m-t-5 m-b-0">Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Seam Ford</a> <small class="c-gray m-l-10">3rd July 2015</small>
                                                <p class="m-t-5 m-b-0">Praesent bibendum vulputate nulla vitae euismod. Fusce a metus eu ante sagittis viverra sit amet sed odio.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/7.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Johnni Schmidt <small>2nd on Jul 2015 at 02:10</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Morbi non eros nibh. Suspendisse ac nunc faucibus turpis pretium pretium. Nulla metus dui, convallis in lorem id, sodales tincidunt magna....</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="media/gallery/10.jpg" style="background-image: url(media/gallery/10.jpg);">
                                            <img src="media/gallery/thumbs/10.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/11.jpg" style="background-image: url(media/gallery/11.jpg);">
                                            <img src="media/gallery/thumbs/11.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/12.jpg" style="background-image: url(media/gallery/12.jpg);">
                                            <img src="media/gallery/thumbs/12.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/13.jpg" style="background-image: url(media/gallery/13.jpg);">
                                            <img src="media/gallery/thumbs/13.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/14.jpg" style="background-image: url(media/gallery/14.jpg);">
                                            <img src="media/gallery/thumbs/14.jpg" alt="">
                                        </div>
                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 2</span>
                                            <span><i class="zmdi zmdi-favorite"></i> 10</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/4.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/8.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/8.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Jhon Sheamus</a> <small class="c-gray m-l-10">2nd July 2015...</small>
                                                <p class="m-t-5 m-b-0">Vivamus vitae sapien et diam convallis hendrerit et eu leo. Nullam dignissim, metus et feugiat porttitor, nulla metus dapibus est, id eleifend nisi massa ac ante.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/6.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Sham Alexander <small>Posted on 30th July 2015 at 7:02</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Praesent sollicitudin venenatis mi, sed consectetur quam accumsan sollicitudin. Aenean ornare tincidunt odio luctus sagittis. Sed vehicula odio eu tortor iaculis, vel lobortis ipsum interdum. Vivamus vitae efficitur elit, in commodo nulla. Fusce ut odio blandit, feugiat mi vitae, pharetra neque. Mauris laoreet commodo augue eget ornare. Vestibulum hendrerit, turpis eget tristique consequat, risus risus dapibus augue, nec commodo nisi nunc mattis dui. Curabitur tempus nibh eget interdum faucibus.</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="media/gallery/15.jpg" style="background-image: url(media/gallery/15.jpg);">
                                            <img src="media/gallery/thumbs/15.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/16.jpg" style="background-image: url(media/gallery/16.jpg);">
                                            <img src="media/gallery/thumbs/16.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/17.jpg" style="background-image: url(media/gallery/17.jpg);">
                                            <img src="media/gallery/thumbs/17.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/18.jpg" style="background-image: url(media/gallery/18.jpg);">
                                            <img src="media/gallery/thumbs/18.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/19.jpg" style="background-image: url(media/gallery/19.jpg);">
                                            <img src="media/gallery/thumbs/19.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/20.jpg" style="background-image: url(media/gallery/20.jpg);">
                                            <img src="media/gallery/thumbs/20.jpg" alt="">
                                        </div>
                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 0</span>
                                            <span><i class="zmdi zmdi-favorite"></i> 0</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/6.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/5.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Frances Gonzales <small>Posted on 25th July 2015 at 03:12</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Suspendisse dapibus ante ex, non tempor ligula molestie nec. In nisl dui, rutrum in libero id, condimentum fermentum velit. Praesent magna magna, aliquam ut purus sit amet, fringilla placerat ipsum</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="media/gallery/21.jpg" style="background-image: url(media/gallery/21.jpg);">
                                            <img src="media/gallery/thumbs/21.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/22.jpg" style="background-image: url(media/gallery/22.jpg);">
                                            <img src="media/gallery/thumbs/22.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/23.jpg" style="background-image: url(media/gallery/23.jpg);">
                                            <img src="media/gallery/thumbs/23.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/24.jpg" style="background-image: url(media/gallery/24.jpg);">
                                            <img src="media/gallery/thumbs/24.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/5.jpg" style="background-image: url(media/gallery/5.jpg);">
                                            <img src="media/gallery/thumbs/5.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/6.jpg" style="background-image: url(media/gallery/6.jpg);">
                                            <img src="media/gallery/thumbs/6.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/7.jpg" style="background-image: url(media/gallery/7.jpg);">
                                            <img src="media/gallery/thumbs/7.jpg" alt="">
                                        </div>
                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 115</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 1265</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/1.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/6.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/4.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/2.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Stacey Hunt</a> <small class="c-gray m-l-10">30th July 2015</small>
                                                <p class="m-t-5 m-b-0">Mauris elit metus, scelerisque sit amet est sit amet, scelerisque aliquam arcu. Nam sollicitudin risus ipsum.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/4.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Frederick Taylor</a> <small class="c-gray m-l-10">29th July 2015</small>
                                                <p class="m-t-5 m-b-0">Nunc id blandit libero.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Belkin Raed</a> <small class="c-gray m-l-10">27th July 2015</small>
                                                <p class="m-t-5 m-b-0">Nam sollicitudin risus ipsum. Ut scelerisque ac odio eu efficitur. Vestibulum a dolor interdum, molestie ipsum sed, feugiat nisi. Nunc ut consequat est, nec pharetra augue</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/6.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">James Simmons</a> <small class="c-gray m-l-10">23rd July 2015</small>
                                                <p class="m-t-5 m-b-0">Ha ha....</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Wendy Macshaw</a> <small class="c-gray m-l-10">20th July 2015</small>
                                                <p class="m-t-5 m-b-0">Praesent sollicitudin venenatis mi, sed consectetur quam accumsan sollicitudin. Aenean ornare tincidunt odio luctus sagittis. Sed vehicula odio eu tortor iaculis, vel lobortis ipsum interdum.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar-img a-lg" src="img/profile-pics/2.jpg" alt="">
                                        </div>

                                        <div class="media-body m-t-5">
                                            <h2>Shane Wtson <small>Posted on 20th July 2015 at 7:00</small></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body card-padding">
                                    <p>Donec a ipsum eu tellus auctor sodales. Nulla facilisi. Praesent et ex finibus, tempor arcu interdum, facilisis mi. Nunc blandit hendrerit nulla, sed rutrum risus. Nulla eu mollis massa, et laoreet nulla. Ut ut dolor et arcu eleifend elementum ut eget tellus. Vestibulum eu hendrerit mauris. Suspendisse id tortor vel nisl tincidunt interdum.</p>

                                    <div class="wall-img-preview lightbox clearfix">
                                        <div class="wip-item" data-src="media/gallery/6.jpg" style="background-image: url(media/gallery/6.jpg);">
                                            <img src="media/gallery/thumbs/6.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/7.jpg" style="background-image: url(media/gallery/7.jpg);">
                                            <img src="media/gallery/thumbs/7.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/8.jpg" style="background-image: url(media/gallery/8.jpg);">
                                            <img src="media/gallery/thumbs/8.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/9.jpg" style="background-image: url(media/gallery/9.jpg);">
                                            <img src="media/gallery/thumbs/9.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/10.jpg" style="background-image: url(media/gallery/10.jpg);">
                                            <img src="media/gallery/thumbs/10.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/11.jpg" style="background-image: url(media/gallery/11.jpg);">
                                            <img src="media/gallery/thumbs/11.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/12.jpg" style="background-image: url(media/gallery/12.jpg);">
                                            <img src="media/gallery/thumbs/12.jpg" alt="">
                                        </div>
                                        <div class="wip-item" data-src="media/gallery/13.jpg" style="background-image: url(media/gallery/13.jpg);">
                                            <img src="media/gallery/thumbs/13.jpg" alt="">
                                        </div>

                                    </div>

                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 100</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 2432</span>
                                        </li>

                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/1.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/7.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/9.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/8.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wall-comment-list">

                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/9.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Finn Walking</a> <small class="c-gray m-l-10">3rd July 2015</small>
                                                <p class="m-t-5 m-b-0">Per conubia nostra.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/8.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Benn Holder</a> <small class="c-gray m-l-10">3rd July 2015</small>
                                                <p class="m-t-5 m-b-0">Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                            </a>

                                            <div class="media-body">
                                                <a href="#" class="a-title">Seam Ford</a> <small class="c-gray m-l-10">3rd July 2015</small>
                                                <p class="m-t-5 m-b-0">Praesent bibendum vulputate nulla vitae euismod. Fusce a metus eu ante sagittis viverra sit amet sed odio.</p>
                                            </div>

                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 hidden-sm">
                            <div class="card">
                                <div class="card-header">
                                    <h2>About me</h2>
                                </div>

                                <div class="card-body card-padding">
                                    Maecenas malesuada. Nam adipiscing. Etiam vitae tortor. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. <a data-ui-sref="pages.profile.profile-about"><small>Read more...</small></a>
                                </div>
                            </div>

                            <div class="card picture-list">
                                <div class="card-header">
                                    <h2>Photos <small>Cras congue nec lorem eget posuere</small></h2>

                                    <ul class="actions">
                                        <li class="dropdown action-show" dropdown>
                                            <a href="#" dropdown-toggle>
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="#">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="#">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="pl-body clearfix">
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/1.png" alt="">
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/5.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/7.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/8.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/9.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#">
                                            <img src="img/headers/square/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h2>Recent Comments <small>Commodo vel pharetra nisi. Donec velit libero</small></h2>
                                </div>

                                <div class="list-group lg-alt">
                                    <a href="#" class="list-group-item media">
                                        <div class="pull-left">
                                            <img class="avatar-img mCS_img_loaded" src="img/profile-pics/1.jpg" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="lgi-heading">David Villa Jacobs</div>
                                            <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item media">
                                        <div class="pull-left">
                                            <img class="avatar-img mCS_img_loaded" src="img/profile-pics/5.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Candice Barnes</div>
                                            <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item media">
                                        <div class="pull-left">
                                            <img class="avatar-img mCS_img_loaded" src="img/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Jeannette Lawson</div>
                                            <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item media">
                                        <div class="pull-left">
                                            <img class="avatar-img mCS_img_loaded" src="img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Darla Mckinney</div>
                                            <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item media">
                                        <div class="pull-left">
                                            <img class="avatar-img mCS_img_loaded" src="img/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Rudolph Perez</div>
                                            <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                        </div>
                                    </a>
                                </div>

                                <a href="#" class="list-group-item view-more">
                                    <i class="zmdi zmdi-long-arrow-right"></i> View all
                                </a>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    <h2>Contact Information <small>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</small></h2>
                                </div>
                                <div class="card-body card-padding">
                                    <div class="pmo-contact">
                                        <ul>
                                            <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 00971123456789</li>
                                            <li class="ng-binding"><i class="zmdi zmdi-email"></i> malinda.h@gmail.com</li>
                                            <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                                            <li class="ng-binding"><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                                            <li>
                                                <i class="zmdi zmdi-pin"></i>
                                                <address class="m-b-0 ng-binding">
                                                    44-46 Morningside Road,<br>
                                                    Edinburgh,<br>
                                                    Scotland
                                                </address>
                                            </li>
                                        </ul>
                                    </div>

                                    <a class="pmo-map" href="#">
                                        <img src="img/demo/map.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer id="footer">
                Copyright &copy; 2015 Material Admin

                <ul class="f-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </footer>
        </section>

        <!-- Page Loader -->
        <div class="page-loader palette-Teal bg">
            <div class="preloader pl-xl pls-white">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20"/>
                </svg>
            </div>
        </div>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->


        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/functions.js"></script>
        <script src="js/actions.js"></script>
        <script src="js/demo.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/mae/1-0/wall.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:25:41 GMT -->
</html>