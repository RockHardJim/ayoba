@extends('partials.app')

@section('content')
    <div class="login segments-page">
        <div class="container">
            <div class="contact-title">
                <h3>Enrol Your User Account</h3>
            </div>
            <div class="wrap-form">
                <form id="user_form" method="POST" action="{{ route('ajax.use') }}">
                    <input type="text" name="user" id="user" placeholder="" readonly>
                    <button id="user_submit" type="submit" class="button">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="application/javascript">
        $(function() {
            'use strict';
            var msisdn = Ayoba.getMsisdn();
            $('#user').value = msisdn;

            $("#user_submit").on('submit',(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('ajax.use') }}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend : function()
                    {
                        $.LoadingOverlay("show");
                        $('#user_submit').attr("disabled", true);
                    },
                    success: function(response)
                    {
                        if(response.status == 'failed')
                        {
                            $.LoadingOverlay("hide");
                            $('#user_submit').attr("disabled", false);
                            iziToast.error({
                                title: 'Error',
                                message: response.data
                            });
                        }
                        else
                        {
                            $.LoadingOverlay("hide");
                            window.location.replace(server + "/register/profile");
                        }
                    },
                    error: function(e)
                    {
                        $.LoadingOverlay("hide");
                        $('#user_submit').attr("disabled", false);
                        iziToast.error({
                            transitionIn: 'flipInX',
                            transitionOut: 'flipOutX',
                            progressBarColor: 'rgb(0, 255, 184)',
                            title: 'Error',
                            message: e
                        });
                    }
                });
            }));
        });
    </script>

@endsection