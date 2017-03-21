@extends('layouts.tabulex_login')
@section('content')
    <div class="container login_employees">

        <div class="row">
            <div class="col-md-3 hidden-sm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-unlock-alt"></i> Log p&aring; Tabulex</h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>Du kan her logge ind p&aring; Tabulex SFO som personal. V&aelig;lg login metode herunder.</p>

                            <button href="#" class="btn btn-primary btn-block">Tabulex Login</button>
                            <button href="#" class="btn btn-primary btn-block">UNI Login</button>
                            <button href="#" class="btn btn-primary btn-block">Login med NemID</button>

                            <hr>
                            <p>Er du for&aelig;ldre skal du skifte til Tabulex for for&aelig;ldre</p>

                            <div class="dropdown clearfix" style="margin-bottom: 15px;">
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Skift Tabulex version <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="small text-right">Hj&aelig;lp til at logge ind <i class="fa fa-question-circle"></i></div>
                        </div>
                    </div>
                </div></div>
            <div class="col-md-9">
                <h1 class="no-margin-top">Velkommen til Tabulex SFO</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-check"></i> Brugertilfredshedsunders&oslash;gelse</h4>
                                <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                            <div class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>K&aelig;re bruger af SFO B&oslash;rn</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
                                    <p>et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                    <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-pencil"></i> Muligheder</h4>
                                <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                            </div>
                            <div class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <h5 class="no-margin-top">Her kan du:</h5>
                                   <ul class="check_list">
                                       <li><i class="fa fa-check" aria-hidden="true"></i> Oprette g&aring;-hjem aftaler</li>
                                       <li><i class="fa fa-check" aria-hidden="true"></i> Oprette legeaftaler</li>
                                       <li><i class="fa fa-check" aria-hidden="true"></i> L&aelig;se nyheder</li>
                                       <li><i class="fa fa-check" aria-hidden="true"></i> Vedligeholdelse</li>
                                       <li><i class="fa fa-check" aria-hidden="true"></i> Sygemelde dit barn</li>
                                       <li><i class="fa fa-check" aria-hidden="true"></i> Sende beskeder til</li>
                                       <li><i class="fa fa-check" aria-hidden="true"></i> Oprette</li>
                                   </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
@endsection

@section('footer_content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>Tabulex SFO</h4>
                <p>Tabulex SFO er uviklet af IST Danmark i t&aelig;t samarbejde med fagfolk p&aring; omr&aring;det.</p>
            </div>
            <div class="col-sm-4">
                <h4>Kontakt</h4>
                <p class="address">
                    IST Danmark<br>
                    Gl. Marbjergvej 8<br>
                    4000 Roskilde<br />
                    http://www.ist.com<br>
                </p>
                <p>
                    E-mail: <a href="mailto:dagtilbud@tabulex.dk">dagtilbud@tabulex.dk</a><br>
                    Tel: 7023 1415
                </p>
            </div>
            <div class="col-sm-4">
                <h4>Skriv til os:</h4>
                <p>Da vi er meget interesseret i at f&aring; tilbagemeldinger fra vores brugere, er du velkommen til at skrive til os, hvis du har forslag til forbedringer. <br>
                    <br>
                    Skriv til os p&aring;: <a href="mailto:dagtilbud@tabulex.dk">dagtilbud@tabulex.dk</a></p>
            </div>
        </div>
    </div>
@endsection