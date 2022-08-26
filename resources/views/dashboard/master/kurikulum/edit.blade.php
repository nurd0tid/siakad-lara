@foreach ($data as $a)
  <div class="modal fade" id="editKurikulum{{ $a['id_kurikulum'] }}" tabindex="-1" role="dialog"
    aria-labelledby="editKurikulumLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editKurikulumLabel">Edit Kurikulum</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="kurikulum/update/{{ $a['id_kurikulum'] }}" class="needs-validation" novalidate=""
            method="POST">
            @csrf
            @method('PUT')
            <div>
              <div class="col-md-12">
                <label class="form-label" for="validationCustom01">Nama Kurikulum</label>
                <input class="form-control" id="validationCustom01" value="{{ $a['nm_kurikulum'] }}" type="text"
                  name="nm_kurikulum" required>
                @error('nm_kurikulum')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col">
                <div class="form-group m-t-15 m-checkbox-inline mb-0">
                  <label class="form-label" for="validationCustom01">Status</label>
                  <label class="d-block" for="chk-ani1">
                    <input class="checkbox_animated" id="chk-ani1"
                      {{ $a->stts_kurikulum == 'active' ? 'checked' : '' }} type="checkbox" value="active"
                      name="stts_kurikulum">Active
                  </label>
                  <label class="d-block" for="chk-ani2">
                    <input class="checkbox_animated" id="chk-ani2"
                      {{ $a->stts_kurikulum == 'non active' ? 'checked' : '' }} type="checkbox" value="non active"
                      name="stts_kurikulum">Non Active
                  </label>
                </div>
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
@endforeach
@pushOnce('js')
  <script src="../assets/js/form-validation-custom.js"></script>
  <script src="../assets/js/tooltip-init.js"></script>
@endPushOnce
