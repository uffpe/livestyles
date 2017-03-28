@extends('layouts.tabulex')
@section('content')
    <div id="content-div">
        <div class="content-div__wrapper">

            @foreach($snippets as $snippet)
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="underlined"><?= $snippet['title'] ?></h3>
                        <div class="panel panel-default panel-no-header panel-guide">
                            <div class="panel-body">
                                <?= $snippet['desc'] ?>
                                <h5>Eksempel:</h5>
                                <div><?= str_replace(["{code}","{/code}"],"",$snippet['code']) ?></div>
                                <div class="row">
                                    <div class="col-sm-12" style="margin-top:1em;">
                                        <pre><code class="html"><?php
                                            preg_match_all("'{code}(.*?){/code}'si", $snippet['code'], $match);
                                            foreach($match[1] as $val){
                                                echo htmlentities($val);
                                            }
                                        ?></code></pre>
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
