@extends('layouts.tabulex')
@section('content')
    <div id="content-div">
        <div class="content-div__wrapper">
            @foreach($snippets as $snippet)
                <div class="row">
                    <?= $snippet ?>
                    <div class="col-sm-12">
                        <pre><code class="html"><?= htmlentities($snippet) ?></code></pre>
                    </div>
                </div>
                <hr>
            @endforeach

            <div class="row">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Insert here"></textarea>
            </div>
       </div>
    </div>
@endsection
