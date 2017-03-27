@extends('layouts.tabulex')
@section('content')
    <div id="content-div">
        <div class="content-div__wrapper">
<?
//        $category = 'basic';
//        if( !empty($_POST["style"]) ) $category = $_POST["style"];

?>
            @foreach($snippets as $snippet)
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="underlined"><?= $snippet['title'] ?></h3>
                        <?= $snippet['desc'] ?>
                        <div class="panel panel-default panel-no-header">
                            <div class="panel-body">
                                <h5>Eksempel:</h5>
                                <?= $snippet['code'] ?>
                                <div class="row">
                                    <div class="col-sm-12" style="margin-top:1em;">
                                        <pre><code class="html"><?= htmlentities($snippet['code']) ?></code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

{{--            <div class="row">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Insert here"></textarea>
            </div>--}}
       </div>
    </div>
@endsection
