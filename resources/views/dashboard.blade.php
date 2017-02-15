@extends('layouts\master')

@section('content')

    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5"></textarea>
                </div>
                <button typo="button" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people sy?</h3></header>
            <article class="post">
                <p>Blablablablablablab</p>
                <div class="info">
                    Posted by Max on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>

@endsection