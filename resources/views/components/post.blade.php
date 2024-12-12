
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
    @foreach ($posts as $post )
                <div class="col mb-3">
                    <div class="card h-100">
                        <a href="{{ route('show', ['post' => $post]) }}">
                            <img src="{{ $post->Image }}" class="card-img-top" alt="...">
                        </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <small class="text-muted"> {{$post->updated_at->format('d F Y H:i')}}</small>
                                    <small class="text-danger"><a href="{{ route('postbycategorie', ['categorie' => $post->categorie])}}" class="">{{ $post->categorie ? $post->categorie->name : 'N/A' }}</a></small>
                                </div>
                              <h5 class="card-title fw-bold"><a href="{{ route('show', ['post' => $post]) }}">{{ $post->Titre}}</a></h5>
                               <a href="{{ route('show', ['post' => $post]) }}"><p class="card-text"> {{ $post->extrait }}...</p></a>
                            </div>
                          </div>
                        </div>  
                      @endforeach

        </div>
