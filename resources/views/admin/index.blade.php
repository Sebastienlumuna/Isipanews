@extends('admin.adminlayout')

@section('title', 'Admin')
@section('content')

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('admin.post.index')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Dashboard</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Image Icon -->
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profil')}}">
                  <i class='bx bx-user'></i>
                  Mon profil
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('home')}}">
                  <i class='bx bx-user'></i>
                  Voir les posts
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout')}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class='bx bx-log-out'></i>
                  Se déconnecter
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<div class="container py-5">
    <div class="page-inner">
      <div class="container">
        <div class="page-inner">
          <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
              <h3 class="fw-bold mb-3">Dashboard</h3>
              <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
            </div>
          </div>
        </div>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Table Section -->
        <div class="container">
            <div class="page-inner">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center">
                        <a href="{{ route('admin.post.create')}}" class="btn btn-primary btn-round ms-auto">
                          <i class="bi bi-plus"></i> Nouveau post
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <!-- Table responsive container -->
                      <div class="table-responsive">
                        <table id="add-row" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>Titre</th>
                              <th>Lien</th>
                              <th style="width: 10%">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($posts as $post)
                            <tr>
                              <td>{{ $post->Titre }}</td>
                              <td><a href="{{ route('show', ['post' => $post]) }}" target="_blank">Voir..</a></td>
                              <td>
                                <div class="form-button-action">
                                  <a href="{{ route('admin.post.edit', ['post' => $post])}}" class="btn btn-link" title="Edit">
                                    <i class="bi bi-pencil-fill text-primary"></i>
                                  </a>
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $post->id }}" class="btn btn-link" title="Remove">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>

                            <!-- Delete Modal for each post -->
                            <div class="modal fade" id="deleteModal-{{ $post->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $post->id }}" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $post->id }}">Supprimer</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    Voulez-vous supprimer ce post ?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <form method="POST" action="{{ route('admin.post.destroy', ['post' => $post->id]) }}">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>

<!-- Logout Modal -->
<x-modal/>
