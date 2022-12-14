@extends('layouts.main')
{{-- @section('title', 'Renter information') --}}
@section('content')
@section('content')
    <style>
        div .box {
            border: 1px solid gray;
            padding: 8px;
        }

        p {
            text-indent: 50px;
            text-align: justify;
            letter-spacing: 3px;

        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="mt-3">
                <div class="box">
                    <p class="text-center">A renter is a person who is paying to live in a residence that does not belong to
                        them. The rental agreements contractually obligate the renter to pay costs not covered by normal
                        insurance.</p>
                    <div>
                        <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal"
                            data-target="#exampleModal" data-whatever="@mdo">Renter information</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Renter</h5>
                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="renterInfo" method="" action="">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="Renter name" class="col-form-label">Renter name</label>
                            <input type="text" class="form-control" id="renter_name" name="renter_name">
                        </div>
                        <div class="form-group">
                            <label for="Phn number" class="col-form-label">Phn number</label>
                            <input type="text" class="form-control" id="phn_number" name="phn_number">
                        </div>
                        <div class="form-group">
                            <label for="Floor" class="col-form-label">Floor</label>
                            <input type="text" class="form-control" id="floor" name="floor">
                        </div>
                        <div class="form-group">
                            <label for="Flat number" class="col-form-label">Flat number</label>
                            <input type="text" class="form-control" id="flat_number" name="flat_number">
                        </div>
                        <div class="form-group">
                            <label for="NID number" class="col-form-label">NID number</label>
                            <input type="text" class="form-control" id="NID" name="NID">
                        </div>
                        <div class="form-group">
                            <label for="Advance amount" class="col-form-label">Advance amount</label>
                            <input type="number" class="form-control" name="advance_amount"id="advance_amount">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#exampleModal').on('submit', 'form', function(e) {
            e.preventDefault();
            // console.log('hhhh');
            var form_data = $(this).serialize();
            // console.log('hi');
            $.ajax({
                method: 'post',
                url: 'renter',
                data: form_data,
                dataType: 'json',

                success:function(response) {
                    // console.log('hhhhh');
                    toastr.success(response.message, response.status);
                },
                error:function(response) {
                    toastr.info(response.message, response.status);
                }
            });
        });
    </script>

@endsection
