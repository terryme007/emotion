/**
 * Created by terry on 2016/11/18.
 */
function login(){
    if($("#u_tel").val()==""){
        alert("请输入手机号！");
        return;
    }
    if($("#u_pwd").val()==""){
        alert("请输入密码！");
    }
    $("#login_form").ajaxSubmit({
        url: interface,
        dataType: 'json',
        data: {
            random: new Date().getTime(),
            api:"goway.emotion.login.login_in"
        },
        success: function (data) {
            //data=eval("("+data+")");
            if (data.success)  {
                window.location.href="home.php";
            }else{
                alert(data.info);
            }
        },
        error: function (xhr) {
            alert("请求失败！");
        }
    });
}

function set_footer(){
    if(window.screen.availHeight<490)
        $("footer").css("position","relative");
    else
        $("footer").css("position","absolute");
}