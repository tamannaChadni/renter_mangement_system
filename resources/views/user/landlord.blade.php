@extends('layouts.main')
{{-- @section('title','Landlord information') --}}
@section('content')
 <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-8">
            <table  class="table text-center">
                <thead>
                    <tr>
                        <th>Landlorder Name</th>
                        <th>Phone number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <div class="input-group">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
              </div>
        </div>
    </div>

 </div>

@endsection
