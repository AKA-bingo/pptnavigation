$(document).ready(function(){

    $("#backup").click(function(){
        window.location.href="chtml.php";
    });

    $("#chtml_modify_btn").click(function(){
        $(".err").hide();
        if($("#label").val()==""){
            $(".err").html("请输入标签名");
            $(".err").show();
        } else {
            $.post("../function/chtml_modify.php",
                {
                hid:$("#hid").val(),
                ch_code:$("#ch_code").val()
                },
                function(data, status){
                    status = $.trim(status);
                    data = $.trim(data);
                    if(status=="success"&&data=="success"){
                        window.location.href="chtml.php";
                    } else if(status=="success"&&data=="error"){
                        $(".err").html("修改无效");
                        $(".err").show();
                    } else{
                        $(".err").html(data);
                        $(".err").show();
                    }
                });
        }
    });

});
