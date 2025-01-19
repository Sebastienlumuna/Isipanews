@extends('admin.adminlayout')

@section('title', 'Création d\'un post')

@section('content')
<section class="form">
    <div class="form-container">
        <h3 class="text-center mb-4"> {{ isset($post->id) ? 'Modification du post' : 'Creation du post' }} </h3>
        <form action="{{ isset($post->id) ?  route('admin.post.update', ['post' => $post]) : route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($post->id))

            @method('PUT')

            @endif

            <!-- Champ Titre -->
            <div class="mb-3">
                <label for="Titre" class="form-label">Titre</label>
                <input type="text" class="form-control @error('Titre') is-invalid @enderror" id="Titre" name="Titre" placeholder="Titre du post" required value="{{ old('Titre', $post->Titre)}}">
                @error('Titre')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Catégorie -->
            <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie</label>
                <select class="form-select @error('categorie_id') is-invalid @enderror" id="categorie" name="categorie_id" required>
                    <option value="" disabled selected>Choisissez une catégorie</option>
                    @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ old('category_id', $post->categorie_id ?? '') == $categorie->id ? 'selected' : '' }}>{{ $categorie->name }}</option>
                    @endforeach
                </select>
                @error('categorie')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Contenu -->
            <div class="mb-3">
                <label for="Contenu" class="form-label">Contenu</label>
                <textarea class="form-control @error('Contenu') is-invalid @enderror" id="Contenu" name="Contenu" rows="5" placeholder="Écrivez ici le contenu de votre post..." required>{{ old('Contenu', $post->Contenu) }} </textarea>
                @error('Contenu')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Image -->
            <div class="mb-3">
                <label for="Image" class="form-label">Image</label>
                @if(isset($post->Image))
                    <div>
                        <img src="{{ asset('storage/' . $post->Image) }}" alt="Image actuelle" style="max-width: 200px; height: auto; display: block; margin-bottom: 10px;">
                    </div>
                @endif
                <input type="file" class="form-control @error('Image') is-invalid @enderror" id="Image" name="Image" accept="image/*" required>
                @error('Image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bouton Soumettre -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Publier</button>
            </div>
        </form>
    </div>
</section>
@endsection
