<div class="modal fade" id="addPtk" tabindex="-1" role="dialog" aria-labelledby="addPtkLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPtkLabel">Add Jenis PTK</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ptk/save') }}" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <div class="col-md-12">
              <label class="form-label">Nama Jenis PTK</label>
              <input class="form-control" type="text" name="nm_ptk" required>
              @error('nm_ptk')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-12">
              <label class="form-label">Keterangan</label>
              <input class="form-control" type="text" name="ket_ptk" required>
              @error('ket_ptk')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
