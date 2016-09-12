$(document).ready(function(){


    $("#ws_add_btn").click(function(){
        $(".err").hide();    
        if($("#ws_name").val()==""){
            $(".err").html("请输入网站名");
            $(".err").show();
    　　　　} else if($("#ws_url").val()==""){
            $(".err").html("请输入网站链接");
            $(".err").show();        
        } else {
            $.post("../function/website_add.php",
            {
            ws_name:$("#ws_name").val(),
            ws_url:$("#ws_url").val(),
            ws_memo:$("#ws_memo").val(),
            cid:$("#cid").val(),
            ws_priority:$("#ws_priority").val()
            },
            function(data, status){
                status = $.trim(status);
                data = $.trim(data);
                if(status=="success"&&data=="success"){
                    window.location.href="web.php";
                } else if(status=="success"&&data=="website_exit"){
                    $(".err").html("网站名或链接已存在");
                    $(".err").show();
                } else if(status=="success"&&data=="fail"){
                    $(".err").html("添加失败");
                    $(".err").show();
                } else{
                    $(".err").html("未响应");
                    $(".err").show();
                }
            });
        }
       
    });


});
