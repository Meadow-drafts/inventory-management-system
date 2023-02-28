@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
@endsection

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Basic</h4>

  <div class="card">
    <h5 class="card-header">Table Header & Footer</h5>
    <button type="button" class="btn btn-primary w-25"  data-bs-toggle="modal" data-bs-target="#addModal">
      Add
    </button>
    <!-- Small Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
{{--      <div class="modal-dialog modal-sm" role="document">--}}
{{--        <div class="modal-content">--}}
{{--          <div class="modal-header">--}}
{{--            <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--          </div>--}}
{{--          <div class="modal-body">--}}
{{--            <form  action="" method="POST" class="form-horizontal " >--}}
{{--              @csrf--}}
{{--              <div class="row">--}}
{{--                <div class="col mb-3">--}}
{{--                  <label for="name" class="form-label">Name</label>--}}
{{--                  <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" >--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="row g-2">--}}
{{--                <div class="col mb-0">--}}
{{--                  <label class="form-label" for="price">Price</label>--}}
{{--                  <input type="number" class="form-control" name="price" id="price" placeholder="">--}}
{{--                </div>--}}
{{--                <button type="submit"  id="btn-save" class="btn btn-primary">Save changes</button>--}}
{{--                <button type="reset" class="btn btn-outline-secondary mt-5" data-bs-dismiss="modal">Close</button>--}}
{{--            </form>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--      </div>--}}
    </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
{{--    <div class="modal-dialog modal-sm" role="document">--}}
{{--      <div class="modal-content">--}}
{{--        <div class="modal-header">--}}
{{--          <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>--}}
{{--          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--        <div class="modal-body">--}}
{{--          <form id="exampleForm"  name="exampleForm" action="" method="POST" class="form-horizontal " >--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="example_id" id="example_id">--}}
{{--            <div class="row">--}}
{{--              <div class="col mb-3">--}}
{{--                <label for="name" class="form-label">Name</label>--}}
{{--                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" >--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="row g-2">--}}
{{--              <div class="col mb-0">--}}
{{--                <label class="form-label" for="price">Price</label>--}}
{{--                <input type="number" class="form-control" name="price" id="price" placeholder="">--}}
{{--              </div>--}}
{{--              <button type="submit"  id="saveBtn" value="create" class="btn btn-primary">Save changes</button>--}}
{{--              <button type="reset" class="btn btn-outline-secondary mt-5" data-bs-dismiss="modal">Close</button>--}}
{{--          </form>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--    </div>--}}
  </div>
  <div  id="card-content" class="table-responsive text-nowrap card">
    <div id="load" style="justify-content: center; margin-bottom: 10px; margin-top: 10px">
      @include('loaders.loader-sm')
    </div>
    <table id="summary-table"  class="table">
      <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
      </thead>
      <tbody>
      </tbody>
      <tfoot class="table-border-bottom-0">
      <tr>
        <th>Project</th>
        <th>Client</th>

      </tr>
      </tfoot>
    </table>
  </div>
  </div>
@endsection


{{--@section('script')--}}
{{--  <script type="text/javascript">--}}
{{--    $(function () {--}}
{{--      $.ajaxSetup({--}}
{{--        headers: {--}}
{{--          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--        }--}}
{{--      });--}}

{{--      $('body').on('click', '.editExample', function (){--}}
{{--        const example_id = $(this).data('id');--}}
{{--        $.get("{{route('example.index')}} + '/' + example_id + '/edit', function(data)"){--}}
{{--        $('#saveBtn').val("edit-example");--}}
{{--        $('#editModal').modal('show');--}}
{{--        $('#example_id').val(data.id);--}}
{{--        $('#name').val(data.name);--}}
{{--        $('#age').val(data.age);--}}

{{--        }--}}
{{--      })--}}

{{--    });--}}

{{--  </script>--}}

{{--@endsection--}}
