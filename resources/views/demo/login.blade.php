@extends('layouts.tabulex_login')
@section('content')
    <div class="container login_employees">

        <div class="row">
            <h1 class="text-center">Velkommen til Tabulex SFO</h1>
        </div>

        <div class="row">

            <div class="col-md-4 col-md-push-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-unlock-alt"></i> Log p&aring; Tabulex</h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>Du kan her logge ind p&aring; Tabulex SFO som personal. V&aelig;lg login metode herunder.</p>

                            <button href="#" class="btn btn-primary form-control">Tabulex Login</button>
                            <button href="#" class="btn btn-primary form-control">UNI Login</button>
                            <button href="#" class="btn btn-primary form-control">Login med NemID</button>

                            <div class="small text-right">Hj&aelig;lp til at logge ind <i class="fa fa-question-circle"></i></div>
                            <hr>
                            <p>Er du for&aelig;ldre skal du skifte til Tabulex for for&aelig;ldre</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-md-pull-4">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-pencil"></i> Muligheder</h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                    </div>
                    <div class="panel-collapse collapse in">
                        <div class="panel-body">
                            Her kan du:
                            <ul>
                                <li>Oprette g&aring;-hjem aftaler</li>
                                <li>Oprette legeaftaler</li>
                                <li>L&aelig;se nyheder</li>
                                <li>Vedligeholdelse</li>
                                <li>Sygemelde dit barn</li>
                                <li>Sende beskeder til</li>
                                <li>Oprette</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-check"></i> Brugertilfredshedsunders&oslash;gelse</h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>K&aelig;re bruger af SFO B&oslash;rn</p>
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
            <div class="col-md-4">
                <h4>Tabulex SFO</h4>
                <p>Tabulex SFO er uviklet af IST Danmark i t&aelig;t samarbejde med fagfolk p&aring; omr&aring;det.</p>
            </div>
            <div class="col-md-4">
                <h4>Kontakt</h4>
                <p class="address">IST Danmark</p>
            </div>
            <div class="col-md-4">
                <h4>Skriv til os:</h4>
                <p>Da vi er meget interesseret i at f&aring; tilbagemeldinger fra vores brugere, er du velkommen til at skrive til os, hvis du har forslag til forbedringer. <br>
                    <br>
                    Skrive til os p&aring;: <a href="mailto:dagtilbud@tabulex.dk">dagtilbud@tabulex.dk</a></p>
            </div>
        </div>
    </div>
@endsection