<?php
	header("Content-type: text/css; charset:UTF-8");
	
?>	

body {
font-family: Arial;
}
table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 100%;
}
tr:nth-child(even) {
	background-color: #dddddd;
}
td, th {
	padding: 8px;
	width:100px;
	border: 1px solid #dddddd;
	text-align: left;				
}
.form-container {
	padding: 20px;
	background: #F0F0F0;
	border: #e0dfdf 1px solid;				
	border-radius: 2px;
}
* {
	box-sizing: border-box;
}

.columnClass {
	float: left;
	padding: 10px;
}

.row:after {
	content: "";
	display: table;
	clear: both;
}

.btn {
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 200px;
	border-radius: 2px;
	background-color: #f1f1f1;
	cursor: pointer;
}

.btn:hover {
	background-color: #ddd;
}

.btn.active {
	background-color: #666;
	color: white;
}
