<style>
    
h3{
    font-family: 'Montserrat',sans-serif ; font-size: 25px;
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
    font-family: 'Montserrat',sans-serif ; font-size: 17px;
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
    font-family: 'Montserrat',sans-serif ; font-size: 17px;
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
    font-family: 'Montserrat',sans-serif ;
    font-size: 17px;
}

.infor_field{
    margin-right: 15px;
    font-style: italic;
    font-weight: bold;
}


/* Form, Input */

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
