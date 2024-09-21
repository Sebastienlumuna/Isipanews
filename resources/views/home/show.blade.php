@extends('layout')

@section('title',$post->Titre )

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">{{ $post->Titre}}</h1>


            <span class="mb-4">Publié le {{$post->updated_at}}</p>

            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <img src="{{ $post->Image }}" height="90" width="500" class="img-fluid img-center" alt="Description de l'image">
                </div>

            </div>

            <p class="mb-4">   {!! nl2br(e($post->Contenu)) !!}</p>


        </div>
    </div>
</div>


@endsection
