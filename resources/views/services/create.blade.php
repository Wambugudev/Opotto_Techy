@extends('layouts.basic')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    Add Service
                </div>
                <div class="col-2">
                    <a class="btn btn-link float-right" href="{{route('home')}}">Home</a>
                </div>
            </div>
        </div>
        <div class="card-body">

            <form action="{{route('services.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{old('title')}}" id="title" class=" form-control {{$errors->has('title') ? 'is-invalid' : ''}}">

                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                                    <strong>{{$errors->first('title')}}</strong>
                                </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                <textarea name="description" id="description" cols="5" rows="5" class=" form-control {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description')}}</textarea>

                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                                    <strong>{{$errors->first('description')}}</strong>
                                </div>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create service</button>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('servicesTable')
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                All Services that you offer are printed bellow.
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Service Id</th>
                            <th>Service Title</th>
                            <th>Service Description <span class=" text-info ">(Will appear when hovering)</span></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td><button onclick="handleDelete({{$service->id}})" class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




<form action="" method="post" id="DeleteServiceForm">
    @csrf
    @method('DELETE')
    {{-- The modal below is for the delete service popup! --}}

<div class="modal fade" tabindex="-1" id="deleteService" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Delete Service</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete the service</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Go back</button>
          <button type="submit" class="btn btn-danger">Yes delete</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</form>

@endsection

@section('scripts')
    <script>
        function handleDelete(id)
        {
            var form = document.getElementById('DeleteServiceForm');
            form.action = '' + id;
            $('#deleteService').modal('show');
        }
    </script>
@endsection
