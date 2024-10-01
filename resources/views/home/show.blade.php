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
                <p class="article-meta">Publié le {{$post->updated_at}}</p>
                <img src="{{ $post->Image }}" alt="Valider des numéros de téléphone">
            </div>

            <!-- Article Content -->
            <div class="article-content">
                <div class="article-body">
                    <p>
                        {!! nl2br(e($post->Contenu)) !!}
                    </p>
                    <!-- Add more paragraphs as needed -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
