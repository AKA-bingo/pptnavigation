$(document).ready(function(){

    $("#backup").click(function(){
        window.location.href="web.php";
    });

    $("#ws_modify_btn").click(function(){
        $(".err").hide();    
        if($("#ws_name").val()==""){
            $(".err").html("请输入网站名");
            $(".err").show();
    　　　　} else if($("#ws_url").val()==""){
            $(".err").html("请输入网站链接");
            $(".err").show();        
        } else {
            $.post("../function/website_modify.php",
            {
            ws_name:$("#ws_name").val(),
            ws_url:$("#ws_url").val(),
            ws_memo:$("#ws_memo").val(),
            cid:$("#cid").val(),
            wid:$("#wid").val(),
            ws_priority:$("#ws_priority").val()
            },
            function(data, status){
                status = $.trim(status);
                data = $.trim(data);
                if(status=="success"&&data=="success"){
                    window.location.href="web.php";
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
