function showResponse(id)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:route,
        type:'post',
        data:{id:id},
        success:function(response)
        {
            $(".bd-example-modal-lg").modal("show")
            $("#title").hide()
            $("#title_icon").hide()
            $("#create_button").hide()
            $("#title_label").hide()
            $("#description").val(response.response)
            $("#decription_label").html("Yanıt")
            $("#description").attr("disabled",true)
        }
    })
}
