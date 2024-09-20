@extends('layouts.admin-layout')

@section('content')


      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Category Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="{{ route('admin.sermons-category.create') }}" class="btn btn-primary">Add New Category</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                             <thead>
                                 <tr>
                                     <th width="10%">No</th>
                                     <th width="60%">Sermon Category</th>
                                     <th width="20%">Sermons Count</th>
                                     <th width="10%">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                              @foreach($categories as $category)
                                 <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name ?? '' }}</td>
                                    <td>
                                      {{ $category->sermons->count() }}
                                    </td>
                                     <td>
                                        <div class="flex align-items-center list-user-action">
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ route('admin.sermons-category.edit', ['sermons_category' => $category]) }}"><i class="ri-pencil-line"></i></a>
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{ route('admin.sermons-category.destroy', ['sermons_category' => $category]) }}"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                     </td>
                                 </tr>
                              @endforeach
                             </tbody>
                         </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   @endsection