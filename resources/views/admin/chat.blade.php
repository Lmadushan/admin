@extends('admin.layouts.app')
@section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Messages</h2>
                    </div>

                    <div class="card clearfix" id="messages">
                        <div class="ms-menu">
                            <div class="ms-user clearfix palette-Teal-400 bg">
                                <img src="img/profile-pics/1.jpg" alt="">
                                <div>Signed in as <br/> m-hollaway@gmail.com</div>
                            </div>

                            <div class="list-group lg-alt m-t-10">
                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/4.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Davil Parnell</div>
                                        <small class="lgi-text">Fierent fastidii recteque ad pro</small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/2.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Ann Watkinson</div>
                                        <small class="lgi-text">Cum sociis natoque penatibus </small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Marse Walter</div>
                                        <small class="lgi-text">Suspendisse sapien ligula</small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/2.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Jeremy Robbins</div>
                                        <small class="lgi-text">Phasellus porttitor tellus nec</small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/4.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Reginald Horace</div>
                                        <small class="lgi-text">Quisque consequat arcu eget</small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/5.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Shark Henry</div>
                                        <small class="lgi-text">Nam lobortis odio et leo maximu</small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/2.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Paul Van Dack</div>
                                        <small class="lgi-text">Nam posuere purus sed velit auctor sodales</small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/1.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">James Anderson</div>
                                        <small class="lgi-text">Vivamus imperdiet sagittis quam</small>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="#">
                                    <div class="pull-left">
                                        <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Kane Williams</div>
                                        <small class="lgi-text">Suspendisse justo nulla luctus nec</small>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="ms-body">
                            <div class="action-header clearfix palette-Teal-400 bg">
                                <div class="ah-label hidden-xs palette-White text">Marsh Walter</div>

                                <div class="menu-collapse visible-xs" data-ma-action="message-toggle">
                                    <div class="mc-wrap">
                                        <div class="mcw-line top palette-White bg"></div>
                                        <div class="mcw-line center palette-White bg"></div>
                                        <div class="mcw-line bottom palette-White bg"></div>
                                    </div>
                                </div>

                                <ul class="actions a-alt">
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-check"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-time"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-expanded="true">
                                            <i class="zmdi zmdi-sort"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Latest</a>
                                            </li>
                                            <li>
                                                <a href="#">Oldest</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-expanded="true">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Refresh</a>
                                            </li>
                                            <li>
                                                <a href="#">Message Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="list-group lg-alt">
                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div>
                                            <div class="msb-item">
                                                Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et. Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                                            </div>
                                        </div>
                                        <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 09:00</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-right">
                                        <img class="avatar-img" src="img/profile-pics/8.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="msb-item">
                                                Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="msb-item">
                                                Condimentum est rutrum lobortis.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="msb-item">
                                                :)
                                            </div>
                                        </div>
                                        <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 09:30</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="msb-item">
                                                Etiam ex arcumentum
                                            </div>
                                        </div>
                                        <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 09:33</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-right">
                                        <img class="avatar-img" src="img/profile-pics/8.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="msb-item">
                                                Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
                                            </div>
                                        </div>
                                        <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 10:10</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="msb-item">
                                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros. Etiam finibus tristique ante, vitae rhoncus sapien volutpat eget
                                            </div>
                                        </div>
                                        <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 10:24</small>
                                    </div>
                                </div>

                                <div class="ms-reply">
                                    <textarea placeholder="What's on your mind..."></textarea>

                                    <button><i class="zmdi zmdi-mail-send"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection