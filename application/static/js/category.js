$(".add").click(function () {
     var cid=$(this).attr("attr");

     $("input[type=hidden]").val(cid);
     $("<div class='mask'>").appendTo("body").css({
         width:"100%",
         height:"100%",
         opacity:0.3,
         background:"#000",
         position:"absolute",
         letf:0,
         top:0,
     })
    $(".addpanner").css("display","block");
})

$(".addpanner .close").click(function () {
      $(".addpanner").css("display","none");
      $(".mask").remove();
})

//修改
var cid;
$(".edit").click(function () {
    cid=$(this).attr("attr");
    var pid=$(this).attr("pid");
    // $("input[type=hidden]").val(cid);
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#000",
        position:"absolute",
        letf:0,
        top:0,
    })
    $(".editpanner").css("display","block");

    //修改信息查询
    $.ajax({
        url:"/server/mvc-test/index.php/admin/category/show",
        data:{cid},
        dataType:"json",
        success:function (e) {
            $(".editpanner input[name=cname]").val(e["cname"]);
            if(e["isshow"]==1){
                $('#ishow option:eq(0)').prop("selected",true)
            }else {
                $('#ishow option:eq(1)').prop("selected",true)
            }
            $(".editpanner input[name=tep_name]").val(e["tpl_name"]);
            $(".editpanner textarea").val(e["info"]);
        }
    })

    $.ajax({
        url:"/server/mvc-test/index.php/admin/category/getOption",
        dataType: "json",
        success:function (e) {

            tree(e,1,cid,pid)

            $("#opts").html(str)
            str="<option value='0'>一级</option>"
        }

    })
})

//修改内容

$(".editpanner input[type=button]").click(function () {
    var data=($(".editpanner form").serialize()+"&cid="+cid);
    $.ajax({
        url:"/server/mvc-test/index.php/admin/category/editcon",
        data:data,
        success:function (e) {
            alert(e)
           if(e=="ok"){
             location.reload();
           }
        }
    })
})
var str="<option value='0'>一级</option>";

function str_repeat(str,num) {
    var result="";
     for(var i=0;i<num;i++){
           result+=str;
     }
     return result;
}
function tree(data,$i,cid,pid) {
    for (var i = 0; i < data.length; i++) {
        if (data[i].child) {
            if (data[i].cid != cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "'selected>" + str_repeat("&nbsp;&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                }
            }
            tree(data[i].child, $i + 1, cid, pid);
        } else {
            if (data[i].cid != cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                }
            }
        }


    }
}
$(".editpanner .close").click(function () {
    $(".editpanner").css("display","none");
    $(".mask").remove();
})
