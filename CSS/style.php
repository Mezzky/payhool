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
    margin: 0;
}

html,
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow-x: hidden;
}

::-webkit-scrollbar{
    width: 10px;
}

::-webkit-scrollbar-track{
    background-color: #abaeff;
}

::-webkit-scrollbar-thumb{
    background-color: #535AFF;
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

.icon-xsm{
    width: 18px;
}

.icon-sm{
    width: 24px;
}

.icon-md{
    width: 34px;
}

button{
    cursor: pointer;
}

/* .logout-btn{
    position: fixed;
    top: 10px;
    right: 10px;
} */

/* ========== MAIN STYLE ========== */
header{
    display: flex;
    flex-direction: column;
    width: 230px;
    align-items: center;
    position: fixed;
    left: 0;
    height: 100vh;
    background-color: var(--main-color);
    padding: 30px 0;
    gap: 30px;
}

header .logo a{
    color: white;
    font-size: 30px;
}

header nav{
    align-self: flex-end;
}

header nav ul{
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
    align-items: center;
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

header footer{
    position: absolute;
    bottom: 16px;
    border-top: 2px solid var(--second-color);
    padding: 10px 20px 20px;
    margin-bottom: 20px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}

header footer p{
    padding-bottom: 10px;
    font-size: 14px;
    font-weight: 500;
    color: white;
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
    margin-bottom: 1px;
}

.form-container .form-input form .tittle-login p{
    font-weight: 500;
    color: var(--text-color);
    margin: 10px 0;
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
.table-container{
    /* background-color: #0036c0; */
    padding-top: 20px;
    padding-left: 260px;
    padding-right: 30px;
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.table-container .tittle{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
}

.table-container .tittle .tittle-left{
    display: flex;
    flex-direction: column;
}

.table-container .tittle .tittle-left p{
    /* background-color: #546eaf; */
    color: var(--text-color);
    font-weight: 600;
}

.table-container .tittle .tittle-right{
    display: flex;
    align-items: center;
    width: 70%;
    gap: 20px;
    /* background-color: #ff0000; */
}

.table-container .tittle .tittle-right form{
    width: 100%;
    display: flex;
    gap: 5px;
}

.table-container .tittle .tittle-right form input{
    width: 100%;
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid var(--text-color);
}

.table-container .tittle .tittle-right form button{
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px;
    border-radius: 5px;
    border: none;
    background-color: var(--second-color);
    transition: 100ms all;
}
.table-container .tittle .tittle-right form button:hover{
    background-color: #7b80ff;
}

.table-container .table-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: end;
}

.table-container .table-content > a{
    color: var(--main-color);
    transition: 300ms all;
}
.table-container .table-content > a:hover{
    transform: translateX(-5px);
}

.table-container .table-content table{
    width: 100%;
    border-collapse: separate;
    border: 1px solid white;
    border-spacing: 0 20px;
    border-radius: 5px;
    /* overflow: hidden; */
}

.table-container .table-content table thead tr, tbody tr{
    box-shadow: 0px 0px 0px 1px black;
    border-radius: 5px;
}

.table-container .table-content table thead{
    background-color: #D2D2D2;
}

.table-container .table-content table thead tr th{
    font-weight: bold;
}

.table-container .table-content table tbody:nth-child(odd){
    background-color: #E9E9FC;
}

.table-container .table-content table tbody tr td .btn{
    display: flex;
    gap: 5px;
}

.table-container .table-content table tbody tr td .btn > a{
    background-color: var(--danger-color);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    border-radius: 5px;
    transition: 300ms all;
}
.table-container .table-content table tbody tr td .btn > a:last-child{
    background-color: var(--second-color);
}

.table-container .table-content table tbody tr td .btn > a:hover{
    opacity: .8;
}