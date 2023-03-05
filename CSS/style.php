<?php header("Content-Type: text/css"); ?>
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

/* ========== CSS VARIABLE ========== */

/* ========== MAIN STYLE ========== */

/* Table */
table{
    border-collapse: separate;
    border-spacing: 0 10px;
}

table thead, tbody{
    border: 2px solid black;
    background-color: red;
}

table thead tr th{
    text-align: left;
}