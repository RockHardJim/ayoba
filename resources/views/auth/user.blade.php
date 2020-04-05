@extends('partials.app')

@section('content')
    <div class="login segments-page">
        <div class="container">
            <div class="contact-title">
                <h3>Enrol Your User Account</h3>
            </div>
            <div class="wrap-form">
                <form id="user_submit" method="POST" action="{{ route('ajax.use') }}">
                    <input type="text" name="user" id="user" placeholder="" readonly>
                    <button id="user_submit" type="submit" class="button">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="application/javascript">
        var msisdn = Ayoba.getMsisdn();
        $('#user').value = msisdn
    </script>

@endsection