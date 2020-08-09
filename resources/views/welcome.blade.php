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
        <form action="{{route('inquiry.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{old('name')}}" placeholder="eg: John Doe" id="name" class=" form-control {{$errors->has('name') ? 'is-invalid' : ''}}">

                 @if ($errors->has('name'))
                     <div class="invalid-feedback">
                                 <strong>{{$errors->first('name')}}</strong>
                             </div>
                 @endif
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="eg: joe@rem.com" class=" form-control {{$errors->has('email') ? 'is-invalid' : ''}}">
                @if ($errors->has('email'))
                <div class="invalid-feedback">
                            <strong>{{$errors->first('email')}}</strong>
                        </div>
            @endif
              </div>

              <div class="form-group">
                <label for="telephoneNumber">Telephone number</label>
                <input type="number" name="telephoneNumber" id="telephoneNumber" value="{{old('telephoneNumber')}}" placeholder="eg: 07######## (Optional)" class=" custom-control form-control {{$errors->has('telephoneNumber') ? 'is-invalid' : ''}}">
                @if ($errors->has('telephoneNumber'))
                <div class="invalid-feedback">
                            <strong>{{$errors->first('telephoneNumber')}}</strong>
                        </div>
                @endif
              </div>


              <div class="form-group">
                <label for="service">Service Category</label>
                <select class=" form-control {{$errors->has('service') ? 'is-invalid' : ''}}" name="service" id="service">
                      @foreach ($services as $service)
                <option class=" mt-3 " data-toggle="tooltip" data-placement="bottom" title="{{$service->description}}" value="{{$service->title}}">{{$service->title}}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('service'))
                     <div class="invalid-feedback">
                                 <strong>{{$errors->first('service')}}</strong>
                             </div>
                 @endif
              </div>

              <div class="form-group">
                <label for="description">Description</label>
            <textarea name="description" value="{{old('description')}}" placeholder="Describe the service that you would want. (optional)" id="description" cols="5" rows="5" class=" form-control {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description')}}</textarea>

                @if ($errors->has('description'))
                    <div class="invalid-feedback">
                                <strong>{{$errors->first('description')}}</strong>
                            </div>
                @endif
            </div>


              <div class="form-group">
                <label for="budget">Budget</label>
                <select class=" form-control {{$errors->has('budget') ? 'is-invalid' : ''}}"name="budget" id="budget">
                      <option class=" mt-3 ">Budget</option>
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

@section('contact')
<div class="card-group">
    <div class="card">
        <div class=" text-center card-header">
            <h3>Get in touch</h3>
            <h4>Ipsum dolor tempus commodo adipiscing</h4>
        </div>
        <div class="card-body">
            <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="contactname">Name</label>
                    <input placeholder="Name" type="text" name="contactname" id="tellNo" value="{{old('contactname')}}"  class="form-control {{$errors->has('contactname') ? 'is-invalid' : ''}}">
                    @if ($errors->has('contactname'))
                    <div class="invalid-feedback">
                                <strong>{{$errors->first('contactname')}}</strong>
                            </div>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="contactemail">Email</label>
                    <input type="email" name="contactemail" id="contactemail" value="{{old('contactemail')}}" placeholder="Email" class=" form-control {{$errors->has('contactemail') ? 'is-invalid' : ''}}">
                    @if ($errors->has('contactemail'))
                    <div class="invalid-feedback">
                                <strong>{{$errors->first('contactemail')}}</strong>
                            </div>
                @endif
                  </div>
                <div class="form-group">
                    <label for="message">Message</label>
                <textarea name="message" value="{{old('message')}}" placeholder="Write your message here." id="message" cols="5" rows="5" class=" form-control {{$errors->has('message') ? 'is-invalid' : ''}}">{{old('message')}}</textarea>

                    @if ($errors->has('message'))
                        <div class="invalid-feedback">
                                    <strong>{{$errors->first('message')}}</strong>
                                </div>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
