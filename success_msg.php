<style>
    #uni_modal .modal-footer{
        display:none;
    }
</style>

<div class="container-fluid">
    <div class="alert alert-success">
        <p>Your Appointment Request has been submitted. The management will reach you as soon as they sees your request. Thank You! You can visit us any hours between 10:00 AM - 5:00 PM. To cancel the appointment please contact us using this number +639197300536</p>
    </div>

    <div class="form-group text-right">
        <button class="btn btn-sm btn-danger btn-flat" type="button" id="cancelBtn"><i class="fa fa-close"></i> Close</button>
    </div>
</div>

<script>
    $(function(){
    $('#uni_modal').on('hide.bs.modal',function(){
        location.reload()
    })

    $('#cancelBtn').click(function(event) {
        event.preventDefault();
        $('#uni_modal').modal('hide');
    });
});

</script>