function authUser(f) {
    var url = 'http://localhost/crm_prod/Index/postJs/authorization';
    $.ajax({
        type: "POST",
        url: url,
        data: 'ajax=1&'+$(f).serialize(),
        success: function(txt){
            alert(txt);
        },
        error: function(){
            alert('e:Ошибка сети, попробуйте позже')
        }
    });
    return false;
}

function LogOut(id) {
    var url = 'http://localhost/crm_prod/Index/postJs/logout';
    $.ajax({
        type: "POST",
        url: url,
        data: 'ajax=1',
        success: function(txt){
            alert(txt);
        },
        error: function(){
            alert('e:Ошибка сети, попробуйте позже');
        }
    });
    return false;
}

function recovery (f) 
{
    var url = 'http://localhost/crm_prod/Index/postJs/recovery';
    $.ajax({
        type: "POST",
        url: url,
        data: 'ajax=1&'+$(f).serialize(),
        success: function(txt){
            alert(txt);
        },
        error: function(){
            alert('e:Ошибка сети, попробуйте позже')
        }
    });
    return false;
}

function changePassword (f) 
{
    var url = 'http://localhost/crm_prod/Index/postJs/changePass';
    $.ajax({
        type: "POST",
        url: url,
        data: 'ajax=1&'+$(f).serialize(),
        success: function(text){
            alert(text);
        },
        error: function(){
            alert('e:Ошибка сети, попробуйте позже')
        }
    });
    return false;
}