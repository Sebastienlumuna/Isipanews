<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Deconnexion</h1>

        </div>
        <div class="modal-body">
          Voulez-vous vous deconnectez ?
        </div>
        <div class="modal-footer">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Deconnexion</button>
        </form>
        </div>
      </div>
    </div>
  </div>
