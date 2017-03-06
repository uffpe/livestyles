
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login demo page | IST</title>
    <link rel="stylesheet" href="dist/css/main.css">
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div id="navbar" class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><strong>Tabulex SFO</strong> - Personale</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row">
        <h1 class="text-center">Velkommen til Tabulex SFO</h1>
    </div>

    <div class="row">
        <div class="col-md-3">

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

        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-unlock-alt"></i> Log p&aring; Tabulex</h4>
                    <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>
                </div>
                <div class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>Du kan her logge ind p&aring; Tabulex SFO som personal. V&aelig;lg login metode herunder.</p>

                        <a href="#" class="btn btn-primary form-control">Tabulex Login</a>
                        <a href="#" class="btn btn-primary form-control">UNI Login</a>
                        <a href="#" class="btn btn-primary form-control">Login med NemID</a>

                        <div class="small text-right">Hj&aelig;lp til at logge ind <i class="fa fa-question-circle"></i></div>
                        <hr>
                        <p>Er du for&aelig;ldre skal du skifte til Tabulex for for&aelig;ldre</p>
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

    <footer>
        <div class="row">
            <div class="col-md-4">Info</div>
            <div class="col-md-4">Kontakt</div>
            <div class="col-md-4">Skriv til os</div>
        </div>
    </footer>



</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    (function() {
        $(".panel-heading a").click(function(){
            var collapse_elem = $(this).closest('.panel').find('.panel-collapse');
            collapse_elem.collapse('toggle');
            $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
        });
    })();
</script>

</body>
</html>
