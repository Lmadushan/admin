<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from byrushan.com/projects/mae/1-0/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:22:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>
        
        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
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
                    <li class="sub-menu active">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                        <ul>
                            <li><a href="tables.html">Normal Tables</a></li>
                            <li class="active"><a href="data-tables.html">Data Tables</a></li>
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
                        <h2>Data Table</h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Basic Example <small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric">ID</th>
                                        <th data-column-id="sender">Sender</th>
                                        <th data-column-id="received" data-order="desc">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10238</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>14.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10243</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>19.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10248</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>24.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10253</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>29.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10234</td>
                                        <td>lila@google.com</td>
                                        <td>10.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10239</td>
                                        <td>lila@google.com</td>
                                        <td>15.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10244</td>
                                        <td>lila@google.com</td>
                                        <td>20.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10249</td>
                                        <td>lila@google.com</td>
                                        <td>25.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10237</td>
                                        <td>robert@bingo.com</td>
                                        <td>13.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10242</td>
                                        <td>robert@bingo.com</td>
                                        <td>18.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10247</td>
                                        <td>robert@bingo.com</td>
                                        <td>23.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10252</td>
                                        <td>robert@bingo.com</td>
                                        <td>28.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10236</td>
                                        <td>simon@yahoo.com</td>
                                        <td>12.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10241</td>
                                        <td>simon@yahoo.com</td>
                                        <td>17.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10246</td>
                                        <td>simon@yahoo.com</td>
                                        <td>22.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10251</td>
                                        <td>simon@yahoo.com</td>
                                        <td>27.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10235</td>
                                        <td>tim@microsoft.com</td>
                                        <td>11.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10240</td>
                                        <td>tim@microsoft.com</td>
                                        <td>16.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10245</td>
                                        <td>tim@microsoft.com</td>
                                        <td>21.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10250</td>
                                        <td>tim@microsoft.com</td>
                                        <td>26.10.2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-selection" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                                        <th data-column-id="sender">Sender</th>
                                        <th data-column-id="received" data-order="desc">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10238</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>14.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10243</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>19.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10248</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>24.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10253</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>29.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10234</td>
                                        <td>lila@google.com</td>
                                        <td>10.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10239</td>
                                        <td>lila@google.com</td>
                                        <td>15.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10244</td>
                                        <td>lila@google.com</td>
                                        <td>20.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10249</td>
                                        <td>lila@google.com</td>
                                        <td>25.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10237</td>
                                        <td>robert@bingo.com</td>
                                        <td>13.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10242</td>
                                        <td>robert@bingo.com</td>
                                        <td>18.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10247</td>
                                        <td>robert@bingo.com</td>
                                        <td>23.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10252</td>
                                        <td>robert@bingo.com</td>
                                        <td>28.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10236</td>
                                        <td>simon@yahoo.com</td>
                                        <td>12.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10241</td>
                                        <td>simon@yahoo.com</td>
                                        <td>17.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10246</td>
                                        <td>simon@yahoo.com</td>
                                        <td>22.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10251</td>
                                        <td>simon@yahoo.com</td>
                                        <td>27.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10235</td>
                                        <td>tim@microsoft.com</td>
                                        <td>11.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10240</td>
                                        <td>tim@microsoft.com</td>
                                        <td>16.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10245</td>
                                        <td>tim@microsoft.com</td>
                                        <td>21.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10250</td>
                                        <td>tim@microsoft.com</td>
                                        <td>26.10.2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
                        </div>

                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric">ID</th>
                                    <th data-column-id="sender">Sender</th>
                                    <th data-column-id="received" data-order="desc">Received</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                                </tr>
                            </thead>
                            <tbody>
                                                        <tr>
                                    <td>10238</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>14.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10243</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>19.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10248</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>24.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10253</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>29.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10234</td>
                                    <td>lila@google.com</td>
                                    <td>10.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10239</td>
                                    <td>lila@google.com</td>
                                    <td>15.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10244</td>
                                    <td>lila@google.com</td>
                                    <td>20.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10249</td>
                                    <td>lila@google.com</td>
                                    <td>25.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10237</td>
                                    <td>robert@bingo.com</td>
                                    <td>13.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10242</td>
                                    <td>robert@bingo.com</td>
                                    <td>18.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10247</td>
                                    <td>robert@bingo.com</td>
                                    <td>23.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10252</td>
                                    <td>robert@bingo.com</td>
                                    <td>28.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10236</td>
                                    <td>simon@yahoo.com</td>
                                    <td>12.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10241</td>
                                    <td>simon@yahoo.com</td>
                                    <td>17.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10246</td>
                                    <td>simon@yahoo.com</td>
                                    <td>22.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10251</td>
                                    <td>simon@yahoo.com</td>
                                    <td>27.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10235</td>
                                    <td>tim@microsoft.com</td>
                                    <td>11.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10240</td>
                                    <td>tim@microsoft.com</td>
                                    <td>16.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10245</td>
                                    <td>tim@microsoft.com</td>
                                    <td>21.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10250</td>
                                    <td>tim@microsoft.com</td>
                                    <td>26.10.2013</td>
                                </tr>
                            </tbody>
                        </table>
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
        <script src="vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="js/functions.js"></script>
        <script src="js/actions.js"></script>
        <script src="js/demo.js"></script>

        <!-- Data Table -->
        <script type="text/javascript">
            $(document).ready(function(){
                //Basic Example
                $("#data-table-basic").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                });
                
                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });
                
                //Command Buttons
                $("#data-table-command").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    formatters: {
                        "commands": function(column, row) {
                            return "<button type=\"button\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " + 
                                "<button type=\"button\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    }
                });
            });
        </script>
    </body>
  
<!-- Mirrored from byrushan.com/projects/mae/1-0/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:22:48 GMT -->
</html>