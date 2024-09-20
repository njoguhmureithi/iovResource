@extends('layouts.admin-layout')

@section('content')

<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         @if($errors->has('email'))
            <div class="col-sm-12">
               <div class="iq-card">
                  <span class="error">{{ $errors->get('name') }}</span>
               </div>
            </div>
         @endif
        
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Add Categories</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <form method="POST" action="{{ route('admin.sermons-category.store') }}">
                     @csrf
                     <div class="form-group">
                        <label>Category Name:</label>
                        <input type="text" name="name" id="name" required class="form-control">
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                     <button type="reset" class="btn btn-danger">Reset</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection