@extends('layouts.tabulex')
@section('content')
    <div id="content-div" class="style-guide">
        <div class="content-div__wrapper">

            @if(!empty($main_menu_items))
                @foreach($main_menu_items as $menu_items)
                    <div class="row guide-parts" id="<?= urlencode($menu_items['url']) ?>" style="display: none;">
                        <div class="col-sm-12">
                            <h1><?= $menu_items['label'] ?></h1>
                        </div>

                    @foreach($snippets[$menu_items['url']] as $snippet)
                            <div class="col-sm-12">
                                <h3 class="underlined"><?= $snippet['title'] ?><a name="<?= preg_replace('/\W+/','',$snippet['title']) ?>" class="style_anchor"></a></h3>
                            </div>
                            <div class="col-md-12">
                                @if($snippet['desc'])
                                    <?= $snippet['desc'] ?>
                                @else
                                    <div class="alert alert-danger">This element is not done!</div>
                                @endif
                            <!--</div>
                            <div class="col-sm-12">-->
                                <div class="panel panel-default panel-no-header panel-guide">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            Example:
                                        </h5>
                                    </div>
                                    <div class="panel-body">
                                        <!--<h5>Example:</h5>-->
                                        <div><?= str_replace(["{code}","{/code}"],"",$snippet['code']) ?></div>
                                        <?php
                                        preg_match_all("'{code}(.*?){/code}'si", $snippet['code'], $match);
                                        ?>
                                        @if($match[1])
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <pre><code class="html"><?php
                                                    foreach($match[1] as $val){
                                                        echo htmlentities($val);
                                                    }
                                                ?></code></pre>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

                @endforeach


            @else

                Error: No style elements found!

            @endif
       </div>
    </div>
@endsection
