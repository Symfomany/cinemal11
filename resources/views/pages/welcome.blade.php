@extends('layout')

@section('content')
    <h3><i class="fa fa-dashboard"></i> Homepage</h3>

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-tile text-center br-a br-light">
                <div class="panel-body bg-light">
                    <i class="fa fa-film text-muted fs45 br64 bg-light dark p15 ph20 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nbMovies }}</h1>
                    <h6 class="text-system">NB Films actifs</h6>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="panel panel-tile text-center">
                <div class="panel-body bg-primary light">
                    <i class="fa fa-comments text-muted fs45 br64 bg-primary p15 ph20 mt10"></i>
                    <h1 class="fs35 mbn">11</h1>
                    <h6 class="text-white">NB de commentaire validés</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-tile text-center">
                <div class="panel-body bg-info light">
                    <i class="fa fa-dollar text-muted fs45 br64 bg-info p15 ph20 mt10"></i>
                    <h1 class="fs35 mbn">14000000€</h1>
                    <h6 class="text-white">Budget Total</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-tile text-center">
                <div class="panel-body bg-success light">
                    <i class="fa fa-clock-o text-muted fs45 br64 bg-success p15 ph20 mt10"></i>
                    <h1 class="fs35 mbn">3h</h1>
                    <h6 class="text-white">Durée moyenne</h6>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-md-6">

            <!-- User Group Widget -->
            <div class="panel user-group-widget">
                <div class="panel-heading">
                    <span class="panel-icon">
                      <i class="fa fa-users"></i>
                    </span>
                    <span class="panel-title"> 10 derniers utilisateurs</span>
                </div>
                <div class="panel-menu">
                    <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                        <input type="text" class="form-control" placeholder="Search user...">
                    </div>
                </div>
                <div class="panel-body panel-scroller pn scroller scroller-active" style="max-height: 513px;"><div class="scroller-bar" style="height: 512px;"><div class="scroller-track" style="height: 502px; margin-bottom: 5px; margin-top: 5px;"><div class="scroller-handle" style="height: 345.684px; top: 76.3569px;"></div></div></div><div class="scroller-content">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="assets/img/avatars/1.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/2.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/3.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/4.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-md-3">
                                <img src="assets/img/avatars/5.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/6.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/1.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/2.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-md-3">
                                <img src="assets/img/avatars/3.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/4.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/5.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/6.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-md-3">
                                <img src="assets/img/avatars/1.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/2.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/3.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/4.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-md-3">
                                <img src="assets/img/avatars/5.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/6.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/1.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatars/2.jpg" class="user-avatar">
                                <div class="caption">
                                    <h5>Mike Pavlov
                                        <br>
                                        <small> Designer</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="panel listgroup-widget">
                <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-tag"></i>
    </span>
                    <span class="panel-title"> Tag Group</span>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge badge-primary">14</span>
                        Nb de films
                    </li>
                    <li class="list-group-item">
                        <span class="badge badge-success">9</span>
                        Nb de Catégorie
                    </li>
                    <li class="list-group-item">
                        <span class="badge badge-info">11</span>
                        Nb d'acteurs
                    </li>
                    <li class="list-group-item">
                        <span class="badge badge-warning">18</span>
                        Nb de réalisateurs
                    </li>
                    <li class="list-group-item">
                        <span class="badge badge-danger">22</span>
                        Nb d'utilisateurs
                    </li>

                </ul>
            </div>
            <div class="panel tagcloud-widget">
                <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-pencil"></i>
    </span>
                    <span class="panel-title"> 10 tags les plus présents</span>
                </div>
                <div class="panel-body">
                    <span class="label label-primary">Photoshop</span>
                    <span class="label label-primary">Fireworks</span>
                    <span class="label label-primary">Dreamweaver</span>
                    <span class="label label-primary">Sublime</span>
                    <span class="label label-primary">Firefox</span>
                    <span class="label label-primary">Chrome</span>
                    <span class="label label-primary">Microsoft</span>
                    <span class="label label-primary">Apple</span>
                    <span class="label label-primary">Google</span>
                    <span class="label label-primary">Facebook</span>
                    <span class="label label-primary">Twitter</span>
                    <span class="label label-primary">LinkedIn</span>
                    <span class="label label-primary">Design</span>
                </div>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="bs-component">
                <div class="panel">
                    <div class="panel-heading">
                      <span class="panel-icon">
                        <i class="fa fa-clock-o"></i>
                      </span>
                        <span class="panel-title"> Activity/Timeline Widget</span>
                    </div>
                    <div class="panel-body ptn pbn p10">
                        <ol class="timeline-list">
                            <li class="timeline-item">
                                <div class="timeline-icon bg-dark light">
                                    <span class="fa fa-tags"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Michael</b> Added to his store:
                                    <a href="#">Ipod</a>
                                </div>
                                <div class="timeline-date">1:25am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-dark light">
                                    <span class="fa fa-tags"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Sara</b> Added his store:
                                    <a href="#">Notebook</a>
                                </div>
                                <div class="timeline-date">3:05am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-success">
                                    <span class="fa fa-usd"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Admin</b> created invoice for:
                                    <a href="#">Software</a>
                                </div>
                                <div class="timeline-date">4:15am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-success">
                                    <span class="fa fa-usd"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Admin</b> created invoice for:
                                    <a href="#">Apple</a>
                                </div>
                                <div class="timeline-date">7:45am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-success">
                                    <span class="fa fa-usd"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Admin</b> created invoice for:
                                    <a href="#">Software</a>
                                </div>
                                <div class="timeline-date">4:15am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-success">
                                    <span class="fa fa-usd"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Admin</b> created invoice for:
                                    <a href="#">Apple</a>
                                </div>
                                <div class="timeline-date">7:45am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-dark light">
                                    <span class="fa fa-tags"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Michael</b> Added his store:
                                    <a href="#">Ipod</a>
                                </div>
                                <div class="timeline-date">8:25am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-system">
                                    <span class="fa fa-fire"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Admin</b> created invoice for:
                                    <a href="#">Software</a>
                                </div>
                                <div class="timeline-date">4:15am</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-icon bg-dark light">
                                    <span class="fa fa-tags"></span>
                                </div>
                                <div class="timeline-desc">
                                    <b>Sara</b> Added to his store:
                                    <a href="#">Notebook</a>
                                </div>
                                <div class="timeline-date">3:05am</div>
                            </li>
                        </ol>
                    </div>
                </div>
                <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>

        </div>
    </div>
@endsection