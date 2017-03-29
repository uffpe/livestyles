@extends('layouts.tabulex')
@section('content')
    <div id="content-div">
        <div class="content-div__wrapper">

            @if(!empty($main_menu_items))
                @foreach($main_menu_items as $menu_items)
                    <div class="row">
                        <div class="col-sm-12">
                            <h1><?= $menu_items['label'] ?></h1>

                    @foreach($snippets[$menu_items['url']] as $snippet)
                                <h3 class="underlined"><a name="<?= urlencode($snippet['title']) ?>"><?= $snippet['title'] ?></a></h3>
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
                    @endforeach
        </div>
    </div>

                @endforeach


            @else

                Hvorfor virker dette ikke?

            @endif
       </div>
    </div>
@endsection
