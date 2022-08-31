<div class="modal fade" id="editPtk" tabindex="-1" role="dialog" aria-labelledby="editPtkLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPtkLabel">Edit Jenis PTK</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataPtk" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <input class="form-control" id="id_ptk" type="hidden" name="id_ptk">
            <div class="col-md-12">
              <label class="form-label" for="nm_ptk">Nama Jenis PTK</label>
              <input class="form-control" id="nm_ptk" type="text" name="nm_ptk" required>
              @error('nm_ptk')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-12">
              <label class="form-label" for="ket_ptk">Keterangan</label>
              <input class="form-control" id="ket_ptk" type="text" name="ket_ptk" required>
              @error('ket_ptk')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="update" type="submit">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
