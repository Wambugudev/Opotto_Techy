@extends('layouts.basic')
@section('content')
<div class="card mt-lg-5">
    <div class="card-header">
        <div class="row">
            <div class="col-10">
                Ask for a inquiry
            </div>
            <div class="col-2">
                <a class="btn btn-primary float-right" href="{{route('services.create')}}">Add Services</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class=" form-control {{$errors->has('name') ? 'is-invalid' : ''}}">

                 @if ($errors->has('name'))
                     <div class="invalid-feedback">
                                 <strong>{{$errors->first('name')}}</strong>
                             </div>
                 @endif
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class=" form-control {{$errors->has('email') ? 'is-invalid' : ''}}">
                @if ($errors->has('name'))
                <div class="invalid-feedback">
                            <strong>{{$errors->first('name')}}</strong>
                        </div>
            @endif
              </div>

              <div class="form-group">
                <label for="tellNO">Telephone number</label>
                <input type="number" name="tellNO" id="tellNO" class=" form-control {{$errors->has('tellNO') ? 'is-invalid' : ''}}">
                @if ($errors->has('tellNO'))
                <div class="invalid-feedback">
                            <strong>{{$errors->first('tellNO')}}</strong>
                        </div>
                @endif
              </div>


              <div class="form-group">
                <label for="service">Service Category</label>
                <select class=" form-control {{$errors->has('email') ? 'is-invalid' : ''}}"  name="service" id="service">
                      @foreach ($services as $service)
                <option class=" mt-3 " data-toggle="tooltip" data-placement="bottom" title="{{$service->description}}" value="{{$service->id}}">{{$service->title}}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('category'))
                     <div class="invalid-feedback">
                                 <strong>{{$errors->first('service')}}</strong>
                             </div>
                 @endif
              </div>

              <div class="form-group">
                <label for="budget">Budget</label>
                <select class=" form-control {{$errors->has('budget') ? 'is-invalid' : ''}}" name="budget" id="budget">
                      <option class=" mt-3 " selected>Budget</option>
                      <option class=" mt-3 " value="ksh1 To ksh1000">Between ksh1 to ksh1000</option>
                      <option class=" mt-3 " value="ksh1000 To ksh5000">Between ksh1000 to ksh5000</option>
                      <option class=" mt-3 " value="ksh5000 To ksh20,000">Between ksh5000 to ksh20,000</option>
                      <option class=" mt-3 " value="ksh20,000 To ksh50,000">Between ksh20,000 to ksh50,000</option>
                      <option class=" mt-3 " value="Above Ksh50,000">Above ksh50,000</option>
                  </select>
                  @if ($errors->has('budget'))
                     <div class="invalid-feedback">
                                 <strong>{{$errors->first('budget')}}</strong>
                             </div>
                 @endif
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit Inquiry</button>
              </div>

        </form>

    </div>
</div>

@endsection
