@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('mdb/css/addons/datatables.min.css') }}">
<style>
table { overflow-x: auto; overflow-y: none; }
.section-heading {
    font-weight: 700 !important;
    text-transform: uppercase;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-3 mb-3">
            <div class="card coming-card">
                <div class="card-body text-center">
                    <h1 class="section-heading">{{ $attends }}</h1>
                    <p>Coming</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card not-attends-card">
                <div class="card-body text-center">
                    <h1 class="section-heading">{{ $notattends }}</h1>
                    <p>Will Not Attend</p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    Reponse
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="response-table" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">Contact</th>
                                    <th class="th-sm">Response</th>
                                    <th class="th-sm">Note</th>
                                    <th class="th-sm">Date</th>
                                    <th class="th-sm">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('mdb/js/addons/datatables.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#response-table').DataTable({
            // "scrollX": true,
			// scrollY: '50vh',
        	// scrollCollapse: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('getresponses') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'contact',
                    name: 'contact'
                },
                {
                    data: 'response',
                    name: 'response'
                },
                {
                    data: 'note',
                    name: 'note'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action', 
                    orderable: false, 
                    searchable: false
                }
            ],
        });
        $(document).on('click', '.anchor_delete', function(e) {
            e.preventDefault();
            var $this = $(this);
            swal({
                title: 'Are you sure?',
                text: 'You want to delete this response?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: 'DELETE',
                        url: $this.data('href'),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(result) {
                            if (result == 'success'){
                                location.reload();
                            }
                        }
                    });
                } else if (
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    const toast = swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    toast({
                        type: 'error',
                        title: 'Cancelled. Your data is safe.'
                    })
                }
            })  
        });
    });

</script>
@endsection
