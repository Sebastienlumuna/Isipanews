
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
    @foreach ($posts as $post )
                <div class="col mb-3">
                    <div class="card h-100">
                        <a href="{{ route('show', ['post' => $post]) }}">
                            <img src="{{ $post->Image }}" class="card-img-top" alt="...">
                        </a>
                            <div class="card-body">
                              <h5 class="card-title fw-bold"><a href="{{ route('show', ['post' => $post]) }}">{{ $post->Titre}}</a></h5>
                              <p class="card-text"><span class="badge bg-primary">{{ $post->categorie ? $post->categorie->name : 'N/A' }}</span> <span class="text-muted">Publié le {{$post->updated_at}} </span></p>
                               <a href="{{ route('show', ['post' => $post]) }}"><p class="card-text"> {{ $post->extrait }}...</p></a>
                            </div>
                          </div>
                        </div>
                      @endforeach

        </div>

