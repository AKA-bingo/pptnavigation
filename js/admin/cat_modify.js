$(document).ready(function(){

    $("#backup").click(function(){
        window.location.href="category_list.php";
    });

    $("#cat_modify_btn").click(function(){
        $(".err").hide();
        if($("#cat_name").val()==""){
            $(".err").html("请输入板块名");
            $(".err").show();
        } else {
            $.post("../function/cat_modify.php",
                {
                cat_name:$("#cat_name").val(),
                cat_memo:$("#cat_memo").val(),
                cat_icon:$("#cat_icon").val(),
                cat_priority:$("#cat_priority").val(),
                parent_cat:$("#parent_cat").val(),
                cid:$("#cid").val()
                },
                function(data, status){
                    status = $.trim(status);
                    data = $.trim(data);
                    if(status=="success"&&data=="success"){
                        window.location.href="category_list.php";
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
