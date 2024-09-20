<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<script>
    
addEventListener('DOMContentLoaded',function(){
    var btn_personal_infor = this.document.getElementById('btn_personal_infor');
    var btn_account_setting = this.document.getElementById('btn_account_setting');
    var btn_logout = this.document.getElementById('btn_logout');
    var logout_messagebox = this.document.getElementById("logout_messagebox");

    var btn_logout_yes = this.document.getElementById('btn_logout_yes');
    var btn_logout_no = this.document.getElementById('btn_logout_no');

    btn_logout.addEventListener('click',function(){
        logout_messagebox.style.display = "block";
        btn_logout_yes.addEventListener('click',function(){
            alert('Log out succesfully');
            logout_messagebox.style.display = "none";
        });

        btn_logout_no.addEventListener('click',function(){
            logout_messagebox.style.display = "none";
        });
    });
});

</script>

<body>
    
</body>
</html>