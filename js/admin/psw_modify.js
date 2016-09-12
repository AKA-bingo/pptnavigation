$(document).ready(function(){


    $("#psw_modify_btn").click(function(){
        $(".err").hide();
        if($("#old_psw").val()==""){
            $(".err").html("请输入旧密码！");
            $(".err").show();
        } else if($("#psw").val()==""){
            $(".err").html("请输入新密码！");
            $(".err").show();
        } else if($("#psw2").val()==""){
            $(".err").html("请输入确认密码！");
            $(".err").show();
        } else if($("#psw2").val() != $("#psw").val()){
            $(".err").html("密码输入不一致！");
            $(".err").show();
        } else {
            $.post("../function/psw_modify.php",
                {
                aid:$("#aid").val(),
                old_psw:$("#old_psw").val(),
                psw:$("#psw").val()
                },
                function(data, status){
                    status = $.trim(status);
                    data = $.trim(data);
                    if(status=="success"&&data=="success"){
                        window.location.href="admin.php";
                    } else if(status=="success"&&data=="psw_error"){
                        $(".err").html("密码错误！");
                        $(".err").show();
                    } else if(status=="success"&&data=="fail"){
                        $(".err").html("修改失败！");
                        $(".err").show();
                    } else{
                        $(".err").html("无响应，请重试！");
                        $(".err").show();
                    }
                });
        }
    });

});
