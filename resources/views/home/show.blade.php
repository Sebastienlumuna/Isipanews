@extends('layout')

@section('title',$post->Titre )

@section('content')
 <!-- Article Section -->
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- Article Header -->
            <div class="article-header">
                <h1 class="article-title">{{ $post->Titre}}</h1>
                <p class="article-meta">{{$post->updated_at->format('d F Y H:i')}}</p>
                <img src="{{ str_starts_with($post->Image, 'http') ? $post->Image : asset('storage/'. $post->Image ) }}" alt="..." width="800" height="800">
            </div>

            <!-- Article Content -->
            <div class="article-content">
                <div class="article-body">
                    <p style="text-align: justify;">
                        {!! nl2br(e($post->Contenu)) !!}
                    </p>                    <!-- Add more paragraphs as needed -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
