$(document).ready(function(){


    $("#add_cat_btn").click(function(){
        $(".err").hide();
        if($("#cat_name").val()==""){
            $(".err").html("请输入板块名");
            $(".err").show();
        } else {
            $.post("../function/cat_add.php",
                {
                cat_name:$("#cat_name").val(),
                cat_memo:$("#cat_memo").val(),
                cat_icon:$("#cat_icon").val(),
                cat_priority:$("#cat_priority").val(),
                parent_cat:$("#parent_cat").val()
                },
                function(data, status){
                    status = $.trim(status);
                    data = $.trim(data);
                    if(status=="success"&&data=="success"){
                        window.location.href="category_list.php";
                    } else if(status=="success"&&data=="catexit"){
                        $(".err").html("板块名已存在");
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
