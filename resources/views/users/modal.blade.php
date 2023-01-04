
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form class="" action="{!! route('users.store') !!}" method="post">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <label class="mt-4">Fullname</label>
            <input type="text"required name="name" class="form-control" id="name" value="">
          </div>

          <div class="col-md-12">
            <label class="mt-4">Email</label>
            <input type="text"required name="email" class="form-control" id="email" value="">
          </div>

          <div class="col-md-12">
            <label class="mt-4">Password</label>
            <input type="password"required name="password" class="form-control" id="password" value="">
          </div>

          <div class="col-md-12">
            <label class="mt-4">Repeat Password</label>
            <input required type="password" name="passwordR" class="form-control" id="passwordR" value="">
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
  </div>
</div>
