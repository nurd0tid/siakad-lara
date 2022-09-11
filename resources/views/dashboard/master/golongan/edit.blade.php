<div class="modal fade" id="editGolongan" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Golongan</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataGolongan" method="put" action="{{ url('/master/golongan/update') }}" class="needs-validation" novalidate="">
          <div>
            <input class="form-control" id="id_golongan" type="hidden" name="id_golongan">
            <div class="col-md-12">
              <label class="form-label">Nama Golongan</label>
              <input class="form-control" id="nm_golongan" type="text" name="nm_golongan" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Keterangan</label>
              <input class="form-control" id="ket_golongan" type="text" name="ket_golongan" required>
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
