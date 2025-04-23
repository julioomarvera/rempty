function login(){
    deshabilitarboton("btn_login", 1);
    $.ajax({
        url: "connections/exeLogin.php",
        type: "POST",
        data: $("#frm_login").serialize(),  //Enviando el formulario
        success: function (data) {
            var json = JSON.parse(data);
            if(json.res == 1){
                // alert('Hola');
                window.location.assign(json.goto);
            }
            else{
                // alert('Hola');
                $('#error').html(custom_alert('danger', '', json.goto, 1, 1));
                $('#frm_login')[0].reset();
                $("#user").focus();
                habilitaboton("btn_login");
            }
        }
    });
}
