@extends('layouts.main', ['title' => 'Блог о путешествиях'])

@section('content')

<main class="blog" style="margin-top: -100px;">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Блог о путешествиях</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="blog-post-category">{{ $post->category->title }}</p>
                        @auth()
                            <form action="{{ route('post.likes.store', $post->id) }}" method="post">
                                @csrf
                                <span>{{ $post->liked_users_count }}</span>
                                <button type="submit" class="border-0 bg-transparent">
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart" style="color: #f64343;"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif
                                </button>
                            </form>
                        @endauth
                        @guest()
                            <div>
                                <span>{{ $post->liked_users_count }}</span>
                                <i class="far fa-heart"></i>
                            </div>
                        @endguest
                    </div>
                    <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="mx-auto" style="margin-top: -100px;">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach($randomPosts as $randomPost)
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ 'storage/' . $randomPost->preview_image }}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{ $randomPost->category->title }}</p>
                            <a href="{{ route('post.show', $randomPost->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $randomPost->title }}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Популярные посты</h5>
                    <ul class="post-list">
                        @foreach($likedPosts as $likedPost)
                            <li class="post h-25">
                                <a href="{{ route('post.show', $likedPost->id) }}" class="post-permalink media">
                                    <img src="{{ 'storage/' . $likedPost->preview_image }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{ $likedPost->title }}</h6>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Категории</h5>
                    <a href="{{ route('category.index') }}">
                    <img src="{{ asset('assets/images/category.jpg') }}" alt="categories" class="w-100">
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
