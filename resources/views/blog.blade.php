@extends('layouts.app')

@section('title', 'project')

@section('content')
    @if($data)
        <div class="blogContent">
            <div class="container">
                <div class="blogContentFlex">
                    <div class="blogContentNews">
                        @foreach($data as $post)
                            <div class="blogContentItem">
                                <div class="blogImgWrapper">
                                    <img src="{{url($post->image)}}">
                                </div>
                                <div class="blogContentHeader">
                                    <div class="blogDate">
                                        <div class="blogDateNum">{{substr($post->date, 0, 2)}}</div>
                                        <div class="blogDateYear">{{substr($post->date, 2)}}</div>
                                    </div>
                                    <div class="blogTitle">
                                        <h2>{{$post->title}}</h2>
                                    </div>
                                </div>
                                <div class="blogContentText">
                                    {{strlen($post->body)>100 ? substr($post->body, 0 , 100) . '...' : $post->body}}
                                </div>
                                <a href="/blog/{{$post->id}}" class="newsButton">подробнее</a>
                            </div>
                        @endforeach
                    </div>

                    @if($fresh)
                        @include('includes.blog-sidebar', ['fresh' => $fresh])
                    @endif

                </div>
                {{$data->appends(request()->input())->links()}}
            </div>
        </div>
    @endif
@endsection