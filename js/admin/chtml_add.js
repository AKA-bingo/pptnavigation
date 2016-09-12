$(document).ready(function(){

    $("#add_chtml_btn").click(function(){
        $(".err").hide();
        if($("#label").val()==""){
            $(".err").html("请输入标签名");
            $(".err").show();
        } else {
            $.post("../function/chtml_add.php",
                {
                label:$("#label").val(),
                ch_code:$("#ch_code").val(),
                ch_note:$("#ch_note").val()
                },
                function(data, status){
                    status = $.trim(status);
                    data = $.trim(data);
                    if(status=="success"&&data=="success"){
                        window.location.href="chtml.php";
                    } else if(status=="success"&&data=="chtmlexit"){
                        $(".err").html("标签名已存在");
                        $(".err").show();
                    } else if(status=="success"&&data=="fail"){
                        $(".err").html("添加失败");
                        $(".err").show();
                    } else{
                        $(".err").html(data);
                        $(".err").show();
                    }
                });
        }
    });

});
