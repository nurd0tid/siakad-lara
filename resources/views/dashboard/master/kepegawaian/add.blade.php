<div class="modal fade" id="addKepegawaian" tabindex="-1" role="dialog" aria-labelledby="addKepegawaianLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addKepegawaianLabel">Add Kepegawaian</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kepegawaian/save') }}" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <div class="col-md-12">
              <label class="form-label" for="validationCustom01">Nama Kepegawaian</label>
              <input class="form-control" id="validationCustom01" type="text" name="nm_kepegawaian" required>
              @error('nm_kepegawaian')
                <div class="valid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-12">
              <label class="form-label" for="validationCustom01">Keterangan</label>
              <input class="form-control" id="validationCustom01" type="text" name="ket_kepegawaian" required>
              @error('ket_kepegawaian')
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
