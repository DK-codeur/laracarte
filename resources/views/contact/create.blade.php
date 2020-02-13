@extends('layouts/master', ['title' => 'contact' ])

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 offset-md-2 col-sm-10 col-sm-offset-1">
               <h2>Get In Touch</h2>
               <p class="text-muted">If you having trouble with this service, please <a href="mailto:dk-codeur@dk.net">ask for help</a> </p>

               <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>

                     <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="required" aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" cols="10" rows="5" class="form-control" required="required"></textarea>
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>

                    <div class="form-group">
                      <button class="btn btn-light btn-block btn-rounded"> Submit Enquiry &raquo; </button>
                    </div>
               </form>
           </div>
       </div>
   </div>
@endsection 