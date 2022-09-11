<div class="modal fade" id="addGolongan" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Golongan</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="saveGolongan" action="{{ route('golongan/save') }}" method="POST" class="needs-validation" novalidate="">
          <div>
            <div class="col-md-12">
              <label class="form-label">Nama Golongan</label>
              <input class="form-control" type="text" name="nm_golongan" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Keterangan</label>
              <input class="form-control" type="text" name="ket_golongan" required>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="save" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
