@extends('layouts.app')

@section('content')


    <div class="contrainer mb-3">
      
        <div class="row">
            <div class="col-lg-20">
               <button class="btn btn-primary btn-lg"> Employee list</button>
            </div>
            <div class="col-lg-6 d-flex justify-content-lg-end align-items-center">
               <a href="{{ url('/employee/add') }}" class="btn btn-outline-dark btn-lg"> Add Employee</a>
             </div>
        </div>
        <!----tabel---->
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Joining_date</th>
                <th scope="col">mobile</th>
                <th scope="col">created_at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($employees as $key=>$employee)
                    <tr>
                    
                    

                    <td>{{$key+1}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->joining_date}}</td>
                    <td>{{{$employee->mobile}}}</td>
                    <td>{{$employee->created_at}}</td>
                    <td>
                    <a href="" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                    <a href="" class="btn btn-danger">Delete</a>
                    </td>
                        
                    
                  </tr>
            @endforeach 
            </tbody>
          </table>
    </div>

@endsection

  