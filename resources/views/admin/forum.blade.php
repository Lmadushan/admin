@extends('admin.layouts.app')
@section('content')
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
@endsection