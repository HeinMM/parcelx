
@extends("layouts.master")
@section("content")

<div class="form-group">
    <label for="itemName">Selected Item Name</label>
    <input type="text" class="form-control itemName" id="itemName" value="{{old('itemName')}}" readonly>
</div>




<!-- Button trigger modal -->
<button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" id="itemModal">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <select class="form-control" id="itemSelect">

                    <option  value=10>testing1</option>
                    <option value=20>testing2</option>
                    <option value=30>testing3</option>

            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="buttonshow" type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
        </div>
      </div>
    </div>
  </div>





@endsection
@push('script')
  {{-- @vite("resources/js/showModel.js"); --}}
@endpush
