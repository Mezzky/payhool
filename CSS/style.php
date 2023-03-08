<?php header("Content-Type: text/css"); ?>

/* ========== FONT ========== */
@font-face {
    font-family: 'Poppins';
    src: url(./Assets/font/Poppins/Poppins-Light.ttf);
}

/* ========== CSS VARIABLE ========== */
:root{
    --main-color: #0045F3;
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
    color: var(--text-color);
}

input{
    outline: none;
}

/* ========== MAIN STYLE ========== */
/* Login */
.form-body{
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #6c70fd;
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
    gap: 20px;
    width: 80%;
}

.form-container .form-input form .tittle-login{
    display: flex;
    flex-direction: column;
}

.form-container .form-input form .tittle-login h2{
    font-size: 40px;
    color: var(--heading-color);
}

.form-container .form-input form .tittle-login h2:first-child{
    font-weight: 100;
    margin-bottom: -10px;
}

.form-container .form-input form .tittle-login p{
    color: var(--text-color);
    margin-top: -10px;
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

table tbody:nth-child(odd){
    background-color: #E9E9FC;
}