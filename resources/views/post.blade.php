@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h3>{{ $post['author'] }}</h3>
        <p>{{ $post['body'] }}</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime deserunt temporibus voluptatem, enim ipsum
            distinctio saepe alias numquam adipisci voluptatibus id provident corrupti error itaque delectus explicabo
            voluptas aspernatur aperiam?</p>
    </article>

    <a href="/posts">Back to Post</a>
@endsection
