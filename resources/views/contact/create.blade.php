@extends('layouts/master', ['title' => 'contact' ])

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 offset-md-2 col-sm-10 col-sm-offset-1">
               <h2>Get In Touch</h2>
               <p class="text-muted">If you having trouble with this service, please <a href="mailto:{{env('MAIL_FROM_ADDRESS')}}">ask for help</a> </p>

               <form action="{{route('contact')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{$errors->has('name') ? 'is-invalid' : 'was-validated'}}" required="required" aria-describedby="helpId" value="{{old('name')}}">
                        {!! $errors->first('name', '<small id="helpId" class="text-danger">:message</small>') !!}
                    </div>

                     <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" required="required" aria-describedby="helpId" value="{{old('email')}}">
                        {!! $errors->first('email', '<small id="helpId" class="text-danger">:message</small>') !!}
                    </div>

                    <div class="form-group">
                        <label for="msg" class="control-label ">Message</label>
                        <textarea name="msg" id="msg" cols="10" rows="5" class="form-control {{$errors->has('message') ? 'is-invalid' : ''}}" required="required" >{{old('msg')}}</textarea>
                        {!! $errors->first('message', '<small id="helpId" class="text-danger">:message</small>') !!}
                    </div>

                    <div class="form-group">
                      <button class="btn btn-light btn-block btn-rounded" type="submit"> Submit Enquiry &raquo; </button>
                    </div>
               </form>
           </div>
       </div>
   </div>
@endsection 



{{-- config.action_mailer.delivery_method = :smtp
config.action_mailer.smtp_settings = {
  :user_name => 'e45609b3a59c47',
  :password => 'f0008179ebb22b',
  :address => 'smtp.mailtrap.io',
  :domain => 'smtp.mailtrap.io',
  :port => '2525',
  :authentication => :cram_md5
} --}}

