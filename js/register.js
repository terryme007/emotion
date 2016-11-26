/**
 * Created by Administrator on 2016/11/25.
 */

function sendScode(){
    var tel= $("#tel").val();
    if(tel==""){
        alert("请输入手机号！");
        return;
    }
    jQuery.ajax({
        url: interface,
        type: "POST",
        data: {
            random: new Date().getTime(),
            api:"goway.emotion.user.send_scode",
            u_tel:tel
        },
        success: function (response) {
            response = eval("(" + response + ")");
            if (response.success) {
                alert(response.info);
            } else {
                alert(response.info);
            }
        },
        error: function (response) {
            alert("请求失败！");

        }
    });
}

function register(){
    if($("#tel").val()==""){
        alert("请输入手机号!");
        return;
    }
    if($("#scode").val()==""){
        alert("请输入验证码!");
        return;
    }
    if($("#name").val()==""){
        alert("请输入用户名!");
        return;
    }
    var pwd=$("#pwd").val();
    if(pwd==""){
        alert("请输入密码!");
        return;
    }
    var repwd=$("#repwd").val();
    if(repwd==""){
        alert("请再次输入密码!");
        return;
    }
    if(pwd!=repwd){
        alert("两次输入的密码不一致");
        return;
    }
    $("#reg_form").ajaxSubmit({
        url: interface,
        dataType: 'json',
        data: {
            random: new Date().getTime(),
            api:"goway.emotion.user.register"
        },
        success: function (data) {
            //data=eval("("+data+")");
            if (data.success)  {
                window.location.href=data.info;
            }else{
                alert(data.info);
            }
        },
        error: function (xhr) {
            alert("请求失败！"+xhr.responseText);
        }
    });
}