@foreach($Examples as $example)
  <tr>
    <td><i class="fab fa-angular fa-lg text-danger me-3">

      </i> <strong>{{$example['name']}}</strong></td>
    <td>{{$example['age']}}</td>
    <td>
      <div class="dropdown">
        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
        <div class="dropdown-menu">
{{--          edit--}}
          <a href="javascript:void(0);"
             class="edit dropdown-item "
             data-bs-toggle="modal" ><i class="bx bx-edit-alt me-1"></i>
              data-url ="{{route('example.update',$example['id'])}}"
              data-name = "{{$example['name']}}"
              data-age = "{{$example['age']}}"
             Edit</a>
{{--          delete--}}
          <a href="javascript:void(0);"
             class="dropdown-item" ><i class="bx bx-trash me-1"></i>
             data-url = "{{route('example.destroy',$example['id']) }}"
             data-name = "{{$example['id']}}"
            Delete</a>
        </div>
      </div>
    </td>

  </tr>
@endforeach
