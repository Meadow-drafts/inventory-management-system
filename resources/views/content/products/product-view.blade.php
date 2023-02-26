@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">DataTables /</span>Products</h4>

<div class="card">
  <h5 class="card-header">Products</h5>
  <button type="button" class="btn btn-sm btn-primary new w-25 py-2 mb-3"  data-bs-toggle="modal" data-bs-target="#smallModal">
    Add
  </button>
  
  <!-- Create/Add Modal -->
  <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Add Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="addForm"  action="" method="post" name="addForm" class="form-horizontal" novalidate="">
              <div class="row">
                <div class="col mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" id="name" class="form-control" placeholder="Product Name">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="supplier_id" class="form-label">Supplier Id</label>
                  <input type="number" id="supplier_id" class="form-control" placeholder="Enter Phone Number">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity">
                </div>
              </div>             
              <div class="row g-2">
                <div class="col mb-0">
                  <label class="form-label" for="price">Price</label>
                  <input type="number" class="form-control" id="price" placeholder="Price">
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
  <!-- Add to stock Modal -->
  <div class="modal fade" id="stockOutModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Add to Stock</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="addForm"  action="" method="post" name="addForm" class="form-horizontal" novalidate="">
              <div class="row">
                <div class="col mb-3">
                  <label for="product_id" class="form-label">Product ID</label>
                  <input type="number" id="product_id" class="form-control" placeholder="Enter Product ID">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="supplier_id" class="form-label">Supplier Id</label>
                  <input type="number" id="supplier_id" class="form-control" placeholder="Enter Phone Number">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity">
                </div>
              </div>             
              <div class="row g-2">
                <div class="col mb-0">
                  <label class="form-label" for="amount">Amount</label>
                  <input type="number" class="form-control" id="amount" placeholder="Amount">
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

  
 <!-- DataTable for Products   -->
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Product ID</th>
          <th>Supplier ID</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($Products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->supplier_id}}</td>
          <td>{{$product->quantity}}</td>
          <td><span class="badge bg-label-primary me-1">{{$product->price}}</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#stockOutModal"><i class="bx bx-edit-alt me-1"></i>Add Stock</a>
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
