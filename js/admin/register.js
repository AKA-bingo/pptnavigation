$(document).ready(function(){


    $("#regbtn").click(function(){
        $(".err").hide();
        if($("#usr").val()==""){
            $(".err").html("请输入用户名！");
            $(".err").show();
        } else if($("#psw").val()==""){
            $(".err").html("请输入密码！");
            $(".err").show();
        } else if($("#psw2").val()==""){
            $(".err").html("请确认密码！");
            $(".err").show();
        } else if($("#psw2").val() != $("#psw").val()){
            $(".err").html("密码输入不一致！");
            $(".err").show();
        } else {
            $.post("../function/register.php",
                {
                usr:$("#usr").val(),
                psw:$("#psw").val()
                },
                function(data, status){
                    status = $.trim(status);
                    data = $.trim(data);
                    if(status=="success"&&data=="success"){
                        //$(".err").html("注册成功！");
                        //$(".err").show();
                        window.location.href="admin_list.php";
                    } else if(status=="success"&&data=="fail"){
                        $(".err").html("注册失败！");
                        $(".err").show();
                    } else if(status=="success"&&data=="userexit"){
                        $(".err").html("注册失败！用户名已存在！");
                        $(".err").show();
                    } else{
                        $(".err").html("无响应，请重试！");
                        $(".err").show();
                    }
                });
        }
    });

});
