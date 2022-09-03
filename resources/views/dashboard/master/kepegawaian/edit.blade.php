<div class="modal fade" id="editKepegawaian" tabindex="-1" role="dialog" aria-labelledby="editKepegawaianLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editKepegawaianLabel">Edit Kepegawaian</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataKepegawaian" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <input class="form-control" id="id_kepegawaian" type="hidden" name="id_kepegawaian">
            <div class="col-md-12">
              <label class="form-label" for="nm_kepegawaian">Nama Kepegawaian</label>
              <input class="form-control" id="nm_kepegawaian" type="text" name="nm_kepegawaian" required>
              @error('nm_kepegawaian')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-12">
              <label class="form-label" for="ket_kepegawaian">Keterangan</label>
              <input class="form-control" id="ket_kepegawaian" type="text" name="ket_kepegawaian" required>
              @error('ket_kepegawaian')
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
