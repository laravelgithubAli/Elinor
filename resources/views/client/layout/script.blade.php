<script>

    function like(productId){
        $.ajax({
            type: 'post',
            url: '/likes/' + productId,
            data: {
                _token: "{{csrf_token()}}"
            },
            success: function (data){
                var icon = $('#like-'+productId + '>.material-icons');

                if(icon.hasClass('like')){
                    icon.removeClass('like');
                }else{
                    icon.addClass('like');
                }

                $('#likes_count').text(data.likes_count)
            }
        })
    }

</script>
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
