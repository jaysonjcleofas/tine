@if (session('status'))
    <script>
        $(function() {
            swal({
                // title: '{{ session('type') == 'success' ? 'Success!' : 'Oops!' }}',
                title: '{!! ucwords(session('status')) !!}!',
                type: '{!! session('type') !!}',
                confirmButtonText: 'Ok'
            })
        });
    </script>
@endif