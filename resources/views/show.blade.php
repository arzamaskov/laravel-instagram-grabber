@extends ('layouts.master')

@section ('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1>Instagram Grabber</h1>
        <div class="msg">
            <div class="lead text-muted">That's what we have found for you. If you want more, try again.</div>
        </div>

        @include('layouts.form')

    </div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach ($links_list as $links)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="image-container">
                        <img class="card-img-top" src="{{ $links['img'] }}">
                    </div>
                    <div class="card-body">
                        <div class="btn-group d-flex justify-content-between align-items-center">
                            <a href="{{ $links['link'] }}" target="_blank" role="button" class="btn btn-secondary">Instagram</a>
                            <form class="form-add">
                                <input type="hidden" class="img_src" name="url" value="{{ $links['img'] }}">
                                <input type="hidden" class="insta_link" name="url_inst" value="{{ $links['link'] }}">
                                {{ csrf_field() }}
                                <button type="submit" class="like btn btn-outline-secondary">Add to
                                favorite</button>
                            </form>
                            <form class="form-delete">
                                <input type="hidden" class="img_src" name="url" value="{{ $links['img'] }}">
                                <input type="hidden" class="insta_link" name="url_inst" value="{{ $links['link'] }}">
                                {{ csrf_field() }}
                                <button type="submit" class="dislike btn btn-outline-secondary d-none">Remove from
                                favorite</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
