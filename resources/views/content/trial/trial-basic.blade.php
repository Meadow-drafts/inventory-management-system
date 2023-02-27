@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Basic</h4>

<div class="card">
  <h5 class="card-header">Table Header & Footer</h5>
  <button type="button" class="btn btn-primary "  id="createNewTrial">
    Add
  </button>
   <!-- Small Modal -->
   <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalHeading"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="trialForm" name="trialForm" class="form-horizontal" novalidate="">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" id="name" name="name" class="form-control" value="" required="" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label class="form-label" for="price">Price</label>
                      <input type="number" class="form-control" id="price" name="price" value="" required="" placeholder="">
                    </div>
                </form>  
                </div>
              </div>
              <div class="modal-footer">
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <input type="hidden" id="trial_id" name="trial_id" value="0">
                <button type="submit"  id="btn-save" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
  <div class="table-responsive text-nowrap">
    <table class="table data-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Actions</th>

      </thead>
      <tbody>
        @foreach ($allTrials as $trial)
        
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3">

          </i> <strong>{{$trial->name}}</strong></td>
          <td>{{$trial->price}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
         
        </tr>
    @endforeach
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

<!-- 
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $.ajaxSetup({
        headers:{
          X-CSRF-TOKEN: $('meta[name="csrf-token"]').attr('content')

        }
      });

      
   
    
    $('#createNewTrial').click(function () {
        $('#btn-save').val("create-trial");
        $('#trial_id').val('');
        $('#trialForm').trigger("reset");
        $('#modalHeading').html("Create New Trial");
        $('#smallModal').modal('show');
    });

    $('body').on('click', '.editTrial', function () {
        var trial_id = $(this).data('id');
        $.get("{{ route('trials.edit') }}" +'/' + trial_id +'/edit', function (data) {
            $('#modalHeading').html("Edit Trial");
            $('#btn-save').val("edit-user");
            $('#smallModal').modal('show');
            $('#trial_id').val(data.id);
            $('#name').val(data.name);
            $('#price').val(data.price);
        })
    });


    $('#btn-save').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
            data: $('#trialForm').serialize(),
            url: "{{ route('trials.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
        
                $('#trialForm').trigger("reset");
                $('#smallModal').modal('hide');
                table.draw();
            
            },
            error: function (data) {
                console.log('Error:', data);
                $('#btn-save').html('Save Changes');
            }
        });
    });

    })

  </script>

@endsection -->