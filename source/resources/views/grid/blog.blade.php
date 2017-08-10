<div class="quote-container">
    <a href="{{route('blog', ['id' => $blog->id])}}" title="{{$blog->title}}">
        <h2>{{$blog->_title}}</h2>
    </a>
    <p class="text">{{$blog->_text}}</p>
    @if(isset($_GET['admin']))
        <a href="" >Nový blog</a>
    @endif
</div>