@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">DataTables/</span> Customers</h4>

<div class="card">
  <h5 class="card-header">Customers</h5>
  <button type="button" class="btn btn-sm btn-primary new w-25 py-2 mb-3"  data-bs-toggle="modal" data-bs-target="#smallModal">
    Add
  </button>

  <!-- Create/Add Modal -->
  <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Create customer </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form  action="{{route('customer-store')}}" method="POST" class="form-horizontal" novalidate="">
            @csrf
              <div class="row">
                <div class="col mb-3">
                  <label for="customer_name" class="form-label">Name</label>
                  <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Enter Name">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone Number">
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label class="form-label" for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="col mb-0">
                  <label class="form-label" for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                </div>
                <button type="submit"  id="btn-save" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Edit Modal -->
{{--  <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">--}}
{{--      <div class="modal-dialog modal-sm" role="document">--}}
{{--        <div class="modal-content">--}}
{{--          <div class="modal-header">--}}
{{--            <h5 class="modal-title" id="exampleModalLabel2">Edit Customer</h5>--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--          </div>--}}
{{--          <div class="modal-body">--}}
{{--            <form action="{{ route('customer-update/',$customer->id) }}" method="POST" class="form-horizontal" novalidate="">--}}
{{--              @csrf--}}
{{--                @method('PATCH')--}}
{{--                <div class="row">--}}
{{--                  <div class="col mb-3">--}}
{{--                    <label for="customer_name" class="form-label">Name</label>--}}
{{--                    <input type="text" id="customer_name" name="customer_name" value="{{$customer->customer_name}}" class="form-control" placeholder="Enter Name">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                  <div class="col mb-3">--}}
{{--                    <label for="phone" class="form-label">Phone</label>--}}
{{--                    <input type="text" id="phone" name="phone" value="{{$customer->phone}}" class="form-control" placeholder="Enter phone Number">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="row g-2">--}}
{{--                  <div class="col mb-0">--}}
{{--                    <label class="form-label" for="email">Email</label>--}}
{{--                    <input type="text" name="email" value="{{$customer->email}}" class="form-control" id="email" placeholder="Enter Email">--}}
{{--                  </div>--}}
{{--                  <div class="col mb-0">--}}
{{--                    <label class="form-label" for="address">Address</label>--}}
{{--                    <input type="text" name="address" value="{{$customer->address}}" class="form-control" id="address" placeholder="Enter Address">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                  <button type="submit"  id="btn-save" class="btn btn-primary">Save changes</button>--}}
{{--                  <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--            </form>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

  <!-- DataTable for Customers   -->
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Address</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($Customers as $customer)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$customer->customer_name}}</strong></td>
          <td>{{$customer->phone}}</td>
          <td>{{$customer->email}}</td>
          <td><span class="badge bg-label-primary me-1">{{$customer->address}}</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('customer-update', $customer->id) }}" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach

      </tbody>
      <tfoot class="table-border-bottom-0">
        <tr>
          <th colspan="5">Project</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection
