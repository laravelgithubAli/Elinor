<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{session()->get('success')}}',
            showConfirmButton: false,
            timer: 2300
        })
    </script>
@endif
@if(session()->has('error'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '{{session()->get('error')}}',
            showConfirmButton: false,
            timer: 2300
        })
    </script>
@endif
@if(session()->has('info'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'info',
            title: '{{session()->get('info')}}',
            showConfirmButton: false,
            timer: 2300
        })
    </script>
@endif
