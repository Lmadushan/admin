<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from byrushan.com/projects/mae/1-0/form-components.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:22:48 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">

        <link href="vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
        <link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/farbtastic/farbtastic.css" rel="stylesheet">
        <link href="vendors/bower_components/chosen/chosen.min.css" rel="stylesheet">
        <link href="vendors/summernote/dist/summernote.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
        
        <!-- Following CSS are used only for the Demp purposes thus you can remove this anytime. -->
        <style type="text/css">
            .toggle-switch .ts-label {
                min-width: 130px;
            }
        </style>
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
                    <li class="sub-menu active">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                        <ul>
                            <li><a href="form-elements.html">Basic Form Elements</a></li>
                            <li class="active"><a href="form-components.html">Form Components</a></li>
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
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                        <ul>
                            <li><a href="profile-about.html">Profile</a></li>
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="pricing-table.html">Pricing Table</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="wall.html">Wall</a></li>
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
                        <h2>Form Components</h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Input Groups <small>Extend form controls by adding text or buttons before, after, or on both sides of any text-based inputs.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5">Basic Example</p>
                            <small>Place one add-on or button on either side of an input. You may also place one on both sides of an input.</small>

                            <br/><br/>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Home Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Landscape">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-landscape"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Weather">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-sun"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Flight">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-airplane"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Location">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-my-location"></i></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-arrow-missed"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Internet">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-globe"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Notifications">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-plus-circle-o"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Layers">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-layers "></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-portable-wifi"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Messages">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-dialpad"></i></span>
                                    </div>
                                </div>
                            </div>

                            <br/><br/>
                            <p class="c-black f-500 m-b-5 m-t-20">Floating Labels</p>
                            <small>Basic example for input groups with floating labels</small>

                            <br/>
                            <br/>
                            <br/>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Full Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Location</label>
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-my-location"></i></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Layers</label>
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-layers "></i></span>
                                    </div>
                                </div>
                            </div>


                            <br/>

                            <p class="c-black f-500 m-b-5 m-t-20">Different Sizes</p>
                            <small>You may use the extra sizing classes to change size of the feilds.</small>

                            <br/><br/>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control input-lg" placeholder="Weather">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Weather">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control input-sm" placeholder="Weather">
                                </div>
                            </div>
                        </div>

                        <br/>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Input Mask <small>An inputmask helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers etc...</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Date</label>
                                        <input type="text" class="form-control input-mask" data-mask="00/00/0000" placeholder="eg: 23/05/2014">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Time</label>
                                        <input type="text" class="form-control input-mask" data-mask="00:00:00" placeholder="eg: 23:06:55">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Date Time</label>
                                        <input type="text" class="form-control input-mask" data-mask="00/00/0000 00:00:00" placeholder="eg: 00/00/0000 00:00:00">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>CEP</label>
                                        <input type="text" class="form-control input-mask" data-mask="00000-000" placeholder="eg: 00000-000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control input-mask" data-mask="000-00-0000000" placeholder="eg: 000-00-0000000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Phone with Odd</label>
                                        <input type="text" class="form-control input-mask" data-mask="(00) 0000-0000" placeholder="eg: (00) 0000-0000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>US Phone Number</label>
                                        <input type="text" class="form-control input-mask" data-mask="(000) 000-0000" placeholder="eg: (000) 000-0000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>CPF</label>
                                        <input type="text" class="form-control input-mask" data-mask="000.000.000-00" placeholder="eg: 000.000.000-00">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Money</label>
                                        <input type="text" class="form-control input-mask" data-mask="000.000.000.000.000,00" placeholder="eg: 000.000.000.000.000,00">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>IP Address</label>
                                        <input type="text" class="form-control input-mask" data-mask="000.000.000.000" placeholder="eg: 000.000.000.000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Percentage</label>
                                        <input type="text" class="form-control input-mask" data-mask="00000,00%" placeholder="eg: 00000,00%">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group fg-line">
                                        <label>Credit Card</label>
                                        <input type="text" class="form-control input-mask" data-mask="0000 0000 0000 0000" placeholder="eg: 0000 0000 0000 0000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Custom Select <small>A custom select for Bootstrap using it's Dropdown component</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 m-b-15 c-black">Basic Example</p>

                                    <select class="selectpicker">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 m-b-15 c-black">Serach Option</p>

                                    <select class="selectpicker" data-live-search="true">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Tent</option>
                                        <option>Flashlight</option>
                                        <option>Toilet Paper</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 m-b-15 c-black">Option Groups</p>

                                    <select class="selectpicker">
                                        <optgroup label="Picnic">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Disabled Options</p>

                                    <select class="selectpicker">
                                        <option disabled="disabled">Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Mustard</option>
                                        <option disabled="disabled">Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row m-t-20">

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Multi Select</p>

                                    <select class="selectpicker" multiple>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Toasted</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Limit Selection - Set to 2</p>

                                    <select class="selectpicker"  multiple data-max-options="2" title='Choose some of...'>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Plain</option>
                                        <option>Steamed</option>
                                        <option>Toasted</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Display Count</p>

                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Chosen <small>Make long, unwieldy select boxes more user friendly.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Basic Example</p>
                                    <select class="chosen" data-placeholder="Choose a Country...">
                                        <option></option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Disabled Items</p>
                                    <select class="chosen" data-placeholder="Choose a Country...">
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option disabled value="Afghanistan">Afghanistan</option>
                                        <option disabled value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option disabled value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Multiple Example</p>
                                    <select class="chosen" multiple data-placeholder="Choose a Country...">
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Option Group</p>
                                    <select class="chosen" data-placeholder="Your Favorite Football Team">
                                        <optgroup label="NFC EAST">
                                            <option>Dallas Cowboys</option>
                                            <option>New York Giants</option>
                                            <option>Philadelphia Eagles</option>
                                            <option>Washington Redskins</option>
                                        </optgroup>
                                        <optgroup label="NFC NORTH">
                                            <option>Chicago Bears</option>
                                            <option>Detroit Lions</option>
                                            <option>Green Bay Packers</option>
                                            <option>Minnesota Vikings</option>
                                        </optgroup>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Toggle Switch <small>Material Desing look alike Toggle Switches based on Radio Box.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="f-500 c-black m-b-5">Basic Examples</p>
                            <small>Default and Disabled options</small>
                            <br/>
                            <br/>
                            <br/>

                            <div class="row m-b-20">
                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch">
                                        <label for="ts1" class="ts-label">Toggle Swith Default</label>
                                        <input id="ts1" type="checkbox" hidden="hidden">
                                        <label for="ts1" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch disabled">
                                        <label for="tsd" class="ts-label">Toggle Swith Disabled</label>
                                        <input id="tsd" type="checkbox" hidden="hidden" checked="checked" disabled="disabled">
                                        <label for="tsd" class="ts-helper"></label>
                                    </div>
                                </div>
                            </div>

                            <p class="f-500 c-black m-b-5">Optional Color schemes</p>
                            <small>Use the given data attribute to change the color scheme of the Toggle Switch</small>
                            <br/>
                            <br/>
                            <br/>

                            <div class="row">
                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="red">
                                        <label for="ts2" class="ts-label">Toggle Swith Red</label>
                                        <input id="ts2" type="checkbox" hidden="hidden">
                                        <label for="ts2" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="blue">
                                        <label for="ts3" class="ts-label">Toggle Swith Blue</label>
                                        <input id="ts3" type="checkbox" hidden="hidden">
                                        <label for="ts3" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="green">
                                        <label for="ts4" class="ts-label">Toggle Swith Green</label>
                                        <input id="ts4" type="checkbox" hidden="hidden">
                                        <label for="ts4" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="cyan">
                                        <label for="ts5" class="ts-label">Toggle Swith Cyan</label>
                                        <input id="ts5" type="checkbox" hidden="hidden">
                                        <label for="ts5" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="lime">
                                        <label for="ts6" class="ts-label">Toggle Swith Lime</label>
                                        <input id="ts6" type="checkbox" hidden="hidden">
                                        <label for="ts6" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="amber">
                                        <label for="ts7" class="ts-label">Toggle Swith Amber</label>
                                        <input id="ts7" type="checkbox" hidden="hidden">
                                        <label for="ts7" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="purple">
                                        <label for="ts8" class="ts-label">Toggle Swith Purple</label>
                                        <input id="ts8" type="checkbox" hidden="hidden">
                                        <label for="ts8" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="pink">
                                        <label for="ts9" class="ts-label">Toggle Swith Pink</label>
                                        <input id="ts9" type="checkbox" hidden="hidden">
                                        <label for="ts9" class="ts-helper"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Input Slider <small>noUiSlider is a range slider without bloat. It offers a ton off features, and it is as small, lightweight and minimal as possible, which is great for mobile use on the many supported devices.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="f-500 c-black m-b-20">Basic Example</p>

                            <div class="input-slider m-b-25" data-is-start="35"></div>

                            <br/>

                            <p class="f-500 c-black m-b-20">Range Slider</p>

                            <div class="input-slider-range m-b-25"></div>

                            <br/>

                            <p class="f-500 c-black m-b-20">Output Value with tap and drag</p>

                            <div class="m-b-20 clearfix">
                                <div class="input-slider-values m-b-15"></div>
                                <strong class="pull-left text-muted" id="value-upper"></strong>
                                <strong class="pull-right text-muted" id="value-lower"></strong>
                            </div>

                            <br/>

                            <p class="f-500 c-black m-b-5">Optional ColoR Schemes</p>
                            <small>Use the given data attribute to change the color scheme of the Toggle Switch</small>

                            <br/>
                            <br/>
                            <br/>

                            <div class="input-slider m-b-25" data-is-start="35" data-is-color="red"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="blue" data-is-start="95"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="cyan" data-is-start="20"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="amber" data-is-start="55"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="green" data-is-start="70"></div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Date Time Picker <small>Date/time picker widget based on twitter bootstrap</small></h2>
                        </div>

                        <div class="card-padding card-header">

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="c-black f-500 m-b-20">Basic Example</p>

                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                            <div class="dtp-container fg-line">
                                            <input type='text' class="form-control date-time-picker" placeholder="Click here...">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <p class="c-black f-500 m-b-20">Date Picker</p>

                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                            <div class="dtp-container fg-line">
                                            <input type='text' class="form-control date-picker" placeholder="Click here...">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <p class="c-black f-500 m-b-20">Time Picker</p>

                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                            <div class="dtp-container fg-line">
                                            <input type='text' class="form-control time-picker" placeholder="Click here...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Color Picker <small>Simplt HEX and HSL color picker with customizable options</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#03A9F4" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#03A9F4"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#8BC34A" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#8BC34A"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#F44336" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#F44336"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#FFC107" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#FFC107"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>HTML Editor <small>Super Simple WYSIWYG Editor on Bootstrap</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="f-500 c-black m-b-20">Basic Example</p>

                            <div class="html-editor"></div>

                            <br/>
                            <br/>

                            <p class="f-500 c-black m-b-5">Click to edit</p>
                            <small>You can edit content on the fly</small>

                            <br/>
                            <br/>

                            <div class="m-b-10">
                                <button class="btn btn-primary btn-sm hec-button">Click here to edit the following content</button>
                                <button class="btn btn-success btn-sm hec-save" style="display:none;">Save</button>
                            </div>
                            <div class="html-editor-click">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula erat sit amet aliquam vehicula. Aliquam aliquet et risus et consequat. Quisque ultrices nulla eu magna vulputate, quis varius massa tempor. Suspendisse sed condimentum purus, eget consequat dolor. Fusce aliquet ultricies porta. Nunc semper commodo leo at maximus. Duis maximus maximus leo, id lobortis nisi aliquam sit amet. Nullam vel ex id augue scelerisque congue sit amet eget urna.
                            </div>

                            <br/>
                            <br/>

                            <p class="c-black f-500 m-b-5">Air-mode</p>
                            <small>Air-mode gives clearer interface with hiddened toolbar. To reveal toolbar, select a text below where you want to shape up.</small>

                            <br/>
                            <br/>

                            <div class="html-editor-airmod" contenteditable="true">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod quam vel lacinia facilisis. Sed condimentum nisi vel ante maximus, sit amet vestibulum leo euismod. Curabitur viverra faucibus nisi eu molestie. Donec convallis finibus felis porttitor tristique. Nulla pretium est et ante dignissim,
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Autocomplete <small>Typeahead.js is a flexible JavaScript library that provides a strong foundation for building robust autocompletes.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="fg-line">
                                        <input type="text" class="typeahead form-control" placeholder="States of USA">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="fg-line">
                                        <input type="text" class="typeahead form-control" placeholder="States of USA">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="fg-line">
                                        <input type="text" class="typeahead form-control" placeholder="States of USA">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Simple File Input <small>The file input plugin allows you to create a visually appealing file or image input widgets</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="f-500 c-black m-b-20">Basic Example</p>

                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-primary btn-file m-r-10">
                                            <span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="...">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                                    </div>
                                </div>
                            </div>

                            <br/>
                            <br/>

                            <p class="f-500 c-black m-b-20">Image Preview</p>

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="...">
                                    </span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>

                            <br/>
                            <br/>
                            <p><em>Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</em></p>
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

        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
        <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
        <script src="vendors/summernote/dist/summernote-updated.min.js"></script>


        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="vendors/bower_components/chosen/chosen.jquery.min.js"></script>
        <script src="vendors/fileinput/fileinput.min.js"></script>
        <script src="vendors/input-mask/input-mask.min.js"></script>
        <script src="vendors/farbtastic/farbtastic.min.js"></script>


        <script src="js/functions.js"></script>
        <script src="js/actions.js"></script>
        <script src="js/demo.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/mae/1-0/form-components.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:23:00 GMT -->
</html>