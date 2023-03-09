<?php header("Content-Type: text/css"); ?>

/* ========== FONT ========== */
@font-face {
    font-family: 'Poppins';
    src: url(../Assets/font/Poppins/Poppins-Regular.ttf);
}

/* ========== CSS VARIABLE ========== */
:root{
    --main-color: #0036c0;
    --second-color: #535AFF;
    --danger-color: #FF3434;
    --heading-color: #1F1F1F;
    --text-color: #2F2F2F;
    --font-text: 'Poppins', 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

/* ========== CSS RESET ========== */
*{
    font-family: var(--font-text);
}

html,
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow-x: hidden;
}

tr, th, td{
    /* border: 1px solid blue; */
    padding: 10px;
}

table thead tr th{
    color: var(--heading-color);
    text-align: left;
}

table tbody tr td{
    font-weight: 500;
    color: var(--text-color);
}

input{
    outline: none;
}

ul, li{
    list-style: none;
}

a{
    text-decoration: none;
}

.icon-sm{
    width: 24px;
    fill: #1F1F1F;
}

/* ========== MAIN STYLE ========== */
header{
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    width: 230px;
    align-items: center;
    position: fixed;
    left: 0;
    height: 100vh;
    background-color: var(--main-color);
    padding: 30px 0;
    gap: 30px;
}

header .logo{
    /* background-color: var(--danger-color); */
}

header .logo a{
    color: white;
    font-size: 30px;
    /* font-weight: bold; */
}

header nav{
    /* background-color: #1F1F1F; */
    align-self: flex-end;
}

header nav ul{
    /* background-color: #535AFF; */
    /* width: 100px; */
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    gap: 30px;
}

header nav ul a{
    position: relative;
    margin-left: -30px;
    padding: 8px 30px 8px 20px;
    display: flex;
    gap: 20px;
    /* justify-content: center; */
    align-items: center;
    /* background-color: #FF3434; */
    border-radius: 10px 0 0px 10px;
    transition: 300ms all;
}
header nav ul a:hover{
    background-color: white;
}
header nav ul a.active{
    background-color: white;
}

header nav ul a span{
    width: 100%;
    height: 100%;
    color: white;
    transition: 300ms all;
    /* background-color: #1F1F1F; */
}
header nav ul a:hover span{
    color: var(--text-color);
}
header nav ul a.active span{
    color: var(--text-color);
}

header nav ul a .icon-nav{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background-color: var(--danger-color); */
}

header nav ul a .icon-nav img:last-child{
    position: absolute;
    opacity: 0;
    transition: 300ms all;
}
header nav ul a:hover .icon-nav img:last-child{
    opacity: 1;
}
header nav ul a.active .icon-nav img:last-child{
    opacity: 1;
}

/* Login */
.form-body{
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--main-color);
}

.form-container{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.form-container .form-input{
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-container .form-input form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 10px;
    width: 80%;
}

.form-container .form-input form .tittle-login{
    display: flex;
    flex-direction: column;
}

.form-container .form-input form .tittle-login h2{
    font-size: 30px;
    color: var(--heading-color);
}

.form-container .form-input form .tittle-login h2:first-child{
    font-weight: 500;
    margin-bottom: -20px;
}

.form-container .form-input form .tittle-login p{
    font-weight: 500;
    color: var(--text-color);
    margin-top: -20px;
}

.form-container .form-input form .input-box{
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.form-container .form-input form .input-box label{
    color: var(--heading-color);
    font-weight: 600;
}

.form-container .form-input form .input-box input{
    padding: 10px 6px;
    border: 1px solid var(--text-color);
    border-radius: 5px;
}

.form-container .form-input form button{
    margin-top: 10px;
    cursor: pointer;
    background-color: var(--second-color);
    color: white;
    font-weight: 600;
    padding: 16px;
    border-radius: 5px;
    border: none;
    transition: 300ms all;
}
.form-container .form-input form button:hover{
    background-color: rgb(106, 111, 255);
}

.form-container .form-img{
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-container .form-img img{
    width: 400px;
}

/* Table */
table{
    border-collapse: separate;
    border: 1px solid white;
    border-spacing: 0 20px;
    border-radius: 5px;
    /* overflow: hidden; */
}

table thead tr, tbody tr{
    box-shadow: 0px 0px 0px 1px black;
    border-radius: 5px;
}

table thead{
    background-color: #D2D2D2;
}

table thead tr th{
    font-weight: bold;
}

table tbody:nth-child(odd){
    background-color: #E9E9FC;
}