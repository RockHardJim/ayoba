$(function(){
    "use strict";

    var server = 'https://ayoba.tdigital.dev';
    var loginurl = '/login';
    var registerurl = '/register';

    $(document).ready(function() {
        isRegistered();
    });

    function isRegistered(){
        if(window.location.href != server + loginurl || window.location.href != server + registerurl){
            $.LoadingOverlay("show");
            var user = msisdn();
            fetch(server + '/ajax/user/' + user)
                .then(response => {
                    if(response.status == 'failed'){
                        $.LoadingOverlay("hide");
                        window.location.replace(server + "/register/user");
                    }else{
                        $.LoadingOverlay("hide");
                        window.location.replace(server + "/home");
                    }
                })
        } else {
            return true;
        }
    }

    function msisdn() {
        return Ayoba.getMsisdn();
    }
});