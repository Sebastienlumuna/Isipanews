
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
    @foreach ($posts as $post )
                <div class="col mb-3">
                    <div class="card h-100">
                        <img src="{{ $post->Image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-bold"><a href="#">{{ $post->Titre}}</a></h5>
                              <p class="card-text"><span class="badge bg-primary">{{ $post->categorie ? $post->categorie->name : 'N/A' }}</span> <span class="text-muted">Publié le {{$post->updated_at}} </span></p>
                              <p class="card-text"> {{ $post->extrait }}... <a href="{{ route('show', ['post' => $post]) }}">Lire la suite..</a></p>
                              <div class="d-flex align-items-center justify-content-between mt-3">
                                <div class="d-flex align-items-center">
                                  <img src="{{ asset('images/ellipse_1.jpeg')}}" alt="User" class="rounded-circle me-2" width="30" height="30">
                                  <span>{{ $post->user ? $post->user->name : 'N/A' }}</span>
                                </div>
                                <div>
                                  <span><a href=""><i class='bx bx-comment-detail bx-tada' ></i></a></span> <!-- Replace with actual comment count -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach

        </div>

