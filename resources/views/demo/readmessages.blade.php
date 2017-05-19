@extends('layouts.tabulex-parent')
@section('content')

    <!-- Sub-header Navbar -->
    <nav id="sub-header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">

                <li class="navbar-back">
                    <a href="#" title="Tilbage">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        <span class="hidden-xs">Tilbage</span>
                    </a>
                </li>
                <li>
                    <a href="#replyfield" title="Besvar" data-scrollto="replyfield">
                        <i class="fa fa-mail-reply" aria-hidden="true"></i>
                        <span class="hidden-xs">Besvar</span>
                    </a>
                </li>


            </ul><!-- /.navbar_right -->
        </div><!-- /.container -->
    </nav>

    <div id="content-div">
        <div class="content-div_wrapper">
            <div class="container-fluid">
                <div class="page-header">
                    <h2>Dette er emne-titel som for er lidt lang, bare for at teste hvordan det kommer til at se ud</h2>
                </div><!-- /.page-header -->


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title"><i class="fa fa-envelope" aria-hidden="true"></i>
                            Deltagere: Clark Kent og Peter Parker
                        </span>
                    </div>

                    <div class="panel-body">
                        <!-- Message panel -->
                        <div class="panel panel-default panel-message-right" aria-label="Message from Clark Kent">
                            <div class="panel-heading">
                                <h4 class="panel-title">Clark Kent<span class="panel-date">16/05-2017 kl. 14:40</span></h4>
                            </div>

                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis lectus quis sem lacinia nonummy. Proin mollis lorem non dolor. In hac habitasse platea dictumst. Nulla ultrices odio. Donec augue. Phasellus dui. Maecenas facilisis nisl vitae nibh. Proin vel seo est vitae eros pretium dignissim. Aliquam aliquam sodales orci. Suspendisse potenti. Nunc adipiscing euismod arcu. Quisque facilisis mattis lacus. Fusce bibendum, velit in venenatis viverra, tellus ligula dignissim felis, quis euismod mauris tellus ut urna. Proin scelerisque. Nulla in mi. Integer ac leo. Nunc urna ligula, gravida a, pretium vitae, bibendum nec, ante. Aliquam ullamcorper iaculis lectus. Sed vel dui. Etiam lacinia risus vitae lacus. Aliquam elementum imperdiet turpis. In id metus. Mauris eu nisl. Nam pharetra nisi nec enim. Nulla aliquam, tellus sed laoreet blandit, eros urna vehicula lectus, et vulputate mauris arcu ut arcu. Praesent eros metus, accumsan a, malesuada et, commodo vel, nulla. Aliquam sagittis auctor sapien. Morbi a nibh.
                            </div>

                            <div class="panel-footer">
                                <div class="file-list">
                                    <a href="#" data-id="" title="Download this file">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <span class="file-title">File-title-A.pdf</span>
                                        <span class="file-info">(0.750 mb)</span>
                                    </a>
                                    <a href="#" data-id="" title="Download this file">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <span class="file-title">The title on file B.pdf</span>
                                        <span class="file-info">(3.422 mb)</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Message panel -->
                        <div class="panel panel-default panel-message-left" aria-label="Message from Peter Parker">
                            <div class="panel-heading">
                                <h4 class="panel-title">Peter Parker<span class="panel-date">16/05-2017 kl. 14:40</span></h4>
                            </div>

                            <div class="panel-body">
                                Quisque facilisis mattis lacus. Fusce bibendum, velit in venenatis viverra, tellus ligula dignissim felis, quis euismod mauris tellus ut urna. Proin scelerisque.
                            </div>

                        </div>


                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->


                {{--<button type="button" class="btn btn-primary" style="width: 100%;" onclick="$('.well').show(); $(this).hide();">Skriv dit svar her</button>--}}

                <h4 id="replyheader">Skriv dit svar her:<a name="replyfield"></a></h4>

                <div class="well" >

                    <!-- Textarea with editor  -->
                    <div id="editor" aria-labelledby="replyheader">
                        <textarea name="textareaName" id="this-editor"></textarea>
                    </div>

                    <script type="text/javascript" src="https://www.devsfoweb.dk/lib/ckeditor/ckeditor.js"></script>

                    <script type="text/javascript">
                        CKEDITOR.replace("this-editor");
                    </script>

                </div><!-- /.well -->

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
