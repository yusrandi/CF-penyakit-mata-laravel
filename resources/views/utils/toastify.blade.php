<script>
    @if (Session::has('message'))
        Toastify({
        text: "{{ session('message') }}",
        duration: 3000,
        close:true,
        gravity:"top",
        position: "right",
        backgroundColor: "#4fbe87",
        }).showToast();
    @endif


    @if (Session::has('error'))
        Toastify({
        text: "{{ session('error') }}",
        duration: 3000,
        close:true,
        gravity:"top",
        position: "right",
        backgroundColor: "#f3616d",
        }).showToast();
    @endif
</script>
