@extends('layout')
@section('content')
    <h2>News</h2>

    <ul class="news-list bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

        @foreach($news_list as $news)
            <li class="news-list_element">

                <h3>{{$news->title}}</h3>
                <a href="{{route('news.show', ['id' => $news->id])}}">
                    <img src="{{$news->image}}" alt="">
                </a>
                <p>Category: <b><a href="{{route('news.category.show', ['category_id' => $news->category_id])}}">{{$news->category_name}}</a></b></p>

            </li>
        @endforeach
    </ul>

@endsection
