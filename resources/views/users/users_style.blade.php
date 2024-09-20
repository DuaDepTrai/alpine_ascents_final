<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    
h3{
    font-family: 'Space Grotesk'; font-size: 25px;
}
.mycontainer{
    width: 100%;
    height: 48vw;
    justify-content: center;
    align-content: center;
    /* Windows Border */
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}

/* Seperators */
.seperate1{
    width: 0.1px;
    background-color: white;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}
.seperate2{
    width: 90%;
    height: 0.1px;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}

/* Buttons */
.btn_personal_infor,.btn_account_setting,.btn_logout{
    display: block;
    width: 80%;
    height: 40px;
    background-color: white;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    font-family: 'Space Grotesk'; font-size: 17px;
}
.changeinfo_confirm,.changeinfo_forgetpass{
    margin-top: 15px;
    margin-right: 20px;
    display: inline-block;
    width: 100px;
    height: 30px;
    background-color: white;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    font-family: 'Space Grotesk'; font-size: 17px;
}
.changeinfo_forgetpass{
    width: 200px;
}

/* Content */
.uac_old_container_infor{
    line-height: 1.6;
}
.avatar{
    margin-left: 38px;
    width: 130px;
    height: 130px;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}

/* Span */
span{
    font-family: 'Space Grotesk';
    font-size: 20px;
}

.infor_field{
    margin-right: 15px;
    font-style: italic;
    font-weight: bold;
}


/* Form, Input */
form{
    margin-left: 35px;
}
input{
    display: block;
    width: 270px;
    background-color: white;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    border-radius: 30px;
}
.changeinfo_spans{
    margin-right: 15px;
    line-height: 2.2;
}

.logout_messagebox{
    display: none;
    width: 350px;
    height: 350px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}
.btn_logout_yes,.btn_logout_no{
    width: 100px;
    margin-left: 47px;
    margin-top: 30px;
}

</style>
<body>
    
</body>
</html>