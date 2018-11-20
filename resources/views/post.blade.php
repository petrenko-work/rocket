@extends('layouts.app')

@section('title', 'project')

@section('content')

    <div class="blogContent">
        <div class="container">
            <div class="blogContentFlex">

                <div class="blogContentNews">
                    @if($post)
                        <div class="blogContentItem">
                            <div class="blogImgWrapper">
                                <img src="{{url($post->image)}}" alt="image">
                            </div>
                            <div class="blog_oneDate">{{$post->date}}</div>
                            <h1 class="blog_oneHeader">{{$post->title}}</h1>
                            <span class="contentBlock">{{$post->body}}</span>
                        </div>
                    @endif
                    <div class="plusoWrapper">
                        <script>(function () {
                                if (window.pluso) if (typeof window.pluso.start == "function") return;
                                if (window.ifpluso == undefined) {
                                    window.ifpluso = 1;
                                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                    s.type = 'text/javascript';
                                    s.charset = 'UTF-8';
                                    s.async = true;
                                    s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                    var h = d[g]('body')[0];
                                    h.appendChild(s);
                                }
                            })();
                        </script>
                        <center>
                            <div class="pluso" data-background="#ebebeb"
                                 data-options="medium,square,line,horizontal,counter,theme=04"
                                 data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
                        </center>
                    </div>
                    <div class="otherNewsWrapper">
                        @if($other)
                            @foreach($other as $post)
                                <div class="otherNewsItem">
                                    <div class="blogContentItem">
                                        <div class="blogImgWrapper">
                                            <img src="{{url($post->image)}}" alt="image">
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
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="pagination">
                        {{$other->links()}}
                    </div>
                </div>

                @if($fresh)
                    @include('includes.blog-sidebar', ['fresh' => $fresh])
                @endif
            </div>
        </div>
    </div>
@endsection