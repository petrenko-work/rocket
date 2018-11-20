<div class="blogContentSidebar">
    <div class="searchWrapper">
        <form method="get" action="/blog">
            <input type="search" name="search" placeholder="НАЙТИ">
            <input type="submit">
        </form>
    </div>
    <div class="categoryFlexWrapper">
        <div class="categoryFlexItem">
            <h4 class="firstCatHeader">Категории<span class="catDecor"></span></h4>
            <ul class="firstCat">
                <li><a href="#">Продвижение в Инстаграм</a></li>
            </ul>
        </div>
        <div class="categoryFlexItem">
            <h4 class="secondCatHeader">Свежие новости<span class="catDecor"></span></h4>
            <ul class="secondCat">
                @foreach($fresh as $post)
                    <li><a href="/blog/{{$post->id}}">{{$post->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>