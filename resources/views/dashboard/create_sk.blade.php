@extends('master')
@section('konten')
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="my-3">Form Add Data Syarat & Ketentuan</h2>
          <form action="{{route('sk.s')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="syarat" class="col-sm-2 col-form-label">Syarat</label>
                <div class="col-sm-10">
                  <textarea name="syarat" id="syarat" class="form-control summernote"></textarea>
                </div>
              </div>
            <div class="row mb-3">
              <label for="ketentuan" class="col-sm-2 col-form-label">Ketentuan</label>
              <div class="col-sm-10">
                <textarea name="ketentuan" id="ketentuan" class="form-control summernote"></textarea>
              </div>
            </div>
            <div class="form-group row"> 
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Data</button>
                <button type="reset" class="btn btn-secondary">Reset Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('text-field')
<script type="text/javascript">
  $(document).ready(function() {
    $('.summernote').summernote({
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  });
</script>
@endpush