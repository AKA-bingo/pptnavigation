$(document).ready(function(){


    $("#logbtn").click(function(){
        if($("#usr").val()==""){
            $(".err").html("请输入用户名！");
            $(".err").show();
        } else if($("#psw").val()==""){
            $(".err").html("请输入密码！");
            $(".err").show();
        }else {
            $.post("../function/login.php",
                {
                usr:$("#usr").val(),
                psw:$("#psw").val()
                },
                function(data, status){
                    status = $.trim(status);
                    data = $.trim(data);
                    if(status=="success"&&data=="success"){
                        if($("#rmbcheck").is(':checked')){
                            $.cookie("usr",$("#usr").val(),{expires:18});
                            $.cookie("psw",$("#psw").val(),{expires:18});
                        }else{
                            $.cookie("usr","");
                            $.cookie("psw","");
                        }
                        window.location.href="../admin/admin.php";
                    } else if(status=="success"&&data=="usrerror"){
                        $(".err").html("用户名不存在！");
                        $(".err").show();
                    } else if(status=="success"&&data=="pswerror"){
                        $(".err").html("密码错误！");
                        $(".err").show();
                    } else {
                        $(".err").html("服务器未响应！");
                        $(".err").show();		    
                    }
                });
        }
    });

});
