<?php header("Content-Type: text/css"); ?>
/* ========== CSS VARIABLE ========== */
:root{
    --main-color: #0045F3;
    --second-color: #535AFF;
    --danger-color: #FF3434;
    --heading-color: #2F2F2F;
    --text-color: #1F1F1F;
}

/* ========== CSS RESET ========== */
html,
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

/* ========== MAIN STYLE ========== */

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