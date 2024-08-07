@extends('layouts.master1')


@section('title')
   Registered Roles |Funda of web IT
@endsection
        


@section('content')
<div class="container">
<div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Create profile</h4>
            </div>
            <div class="card-body">
           <div class="row">
               <div class="col-md-12">
                    <form action="/update-profile" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="username" value="">
                             </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="username" value="">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="username" value="">
                             </div>
                             <div class="form-group">
                                    <label>Service type</label>
                                     <select name="servicetype" class="form-control" >
                                        <option value="male">2 wheeler</option>
                                        <option value="female">3 wheeler</option>
                                        <option value="female">4 wheeler</option>
                                        <option value="female">All</option>
                                      
                                    </select>
                             </div>
                             <div class="form-group">
                                <label>Gender</label>
                              <select name="usertype" class="form-control" >
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                  
                              </select>
                            </div>
                             <button type="submit" class="btn btn-success">Update</button>
                             <a href="/reg-edit" class="btn btn-danger">Cancel</a>
                      </form> 
               </div>
           </div>
                </div>    
            </div>
          </div>
        </div>
      </div>  

@endsection


@section('scripts')

@endsection

    