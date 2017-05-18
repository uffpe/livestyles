@extends('layouts.tabulex')
@section('content')
    <div id="content-div">
        <div class="content-div__wrapper">
            <nav id="sub-header" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <!-- Navbar links - right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                V&aelig;lg <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#gem"><span class="hidden-xs">Gem alt</span>
                                <i class="fa fa fa-floppy-o" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul><!-- Navbar links - right -->

                </div><!-- /.container-fluid -->
            </nav>

            <div class="container-fluid">
                <div class="page-header">
                    <h2>Stamkort: Bruce Wayne (0A)
                        <div class="pull-right hidden-xs">* Vis p&aring; legeliste <input type="checkbox"></div></h2>
                </div>
                <form class="form-horizontal">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default personal_data">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-address-card"></i> Stamdata</h4>
                                    <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                                </div>
                                <div class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-7 col-lg-6">
                                                <h5>Person data:</h5>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label"><i class="fa fa-phone" aria-hidden="true"></i> Hjem</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="" name="" placeholder="">
                                                            <div class="input-group-addon"><input type="checkbox" name="" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label"><i class="fa fa-mobile" aria-hidden="true"></i> Mobil</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="" name="" placeholder="">
                                                            <div class="input-group-addon"><input type="checkbox" name="" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" id="" name="" placeholder="">
                                                            <div class="input-group-addon"><input type="checkbox" name="" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label"><i class="fa fa-home" aria-hidden="true"></i> Adresse</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                                <textarea class="form-control" name="" readonly="readonly">Wayne Manor
1234 Gotham City</textarea>
                                                            <div class="input-group-addon"><input type="checkbox" name="" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label">CPR-nr.</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="" name="" value="123456-7890" placeholder="" readonly="readonly">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label">Evt. kaldenavn</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="" name="" value="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-lg-6">
                                                <h5>Person billede:</h5>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <img class="img-responsive profile-image" src="http://1.gravatar.com/avatar/767fc9c115a1b989444c755db47feb60?s=400&r=pg&d=mm" alt="">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="btn-toolbar" role="toolbar" aria-label="...">
                                                            <button class="btn btn-default btn-block"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                                                            <button class="btn btn-default btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Slet</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-sm-push-6">
                                                <h5>L&aelig;geoplysninger:</h5>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label">Navn</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="" name="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label">Adresse</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="" name="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label">Postnr./by</label>
                                                    <div class="col-sm-8 no-gutter">
                                                        <div class="col-xs-4 col-sm-5 col-md-4 zip">
                                                            <input type="text" class="form-control" maxlength="4" id="" name="" value="" placeholder="">
                                                        </div>
                                                        <div class="col-xs-8 col-sm-7 col-md-8">
                                                            <input type="text" class="form-control" id="" name="" value="" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label">Telefon</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="" name="" value="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-4 control-label">Web</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">http://</span>
                                                            <input type="text" class="form-control" id="" name="" value="" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-sm-pull-6">
                                                <h5>Intern bem&aelig;rkning:</h5>
                                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                <div class="pull-right small">500 tegn tilbage</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default personal_data">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-list" aria-hidden="true"></i> Tilladelser</h4>
                                    <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                                </div>
                                <div class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12">content here...</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="panel panel-default personal_data">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-users" aria-hidden="true"></i> For&aelig;ldre</h4>
                                    <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                                </div>
                                <div class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12">content here...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default personal_data">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-child" aria-hidden="true"></i> S&oslash;skende</h4>
                                    <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                                </div>
                                <div class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12">content here...</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
