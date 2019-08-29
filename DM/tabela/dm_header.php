<?php
session_start();
require_once 'dm_konekcija.php';
if(!isset($_SESSION['id']))
{
    header('Location: dm_login.php');
}
$id=$_SESSION['id'];

?>
<html>
    <head>
        <style>
            * {box-sizing:border-box;}
            .row:after, .row:before {content:"";display:table;clear:both;}
            form {width:100%;margin-left:100px}
            body {font-family:Verdana;}
            .col-12{width:100%}
            #vrh{background-color:#660066;color:white;height:100px;margin-top:0px;margin-left:0px;margin-right:0px;padding-top:20px;padding-left:10px;font-size:30px}
            #dno{background-color:#660066;color:white;width:100%;height:40px;bottom:0;right:0;margin-bottom:0;padding-top:10px;float:left;list-style-type:none}
            li{display:inline;list-style-type:none}
            .header{font-family:Comic Sans MS;font-size:50px}
            #horisti{opacity:0.3}
            #pravni{font-size:15px;float:right}
            a{text-decoration:none;color:white;width:342px;height:80px;border:none;font-size:20px}
            a:hover{transform:scale(0.95);transition:0.5s;background-color:#cc6699}
            h1{font-family:Comic Sans MS}
            span{font-family:Comic Sans MS;font-size:20px}
            label{margin-left:0px}
            input{float:right}
            input[type='radio'] {transform: scale(2);margin-right:50px}
            .linija{width:300px;margin-right:50px;padding-left:5px;padding-top:5px;padding-bottom:5px;background-color:#d6d6c2}
            .potvr{width:100px;font-size:20px;font-weight:bold;background-color:#b7b795;margin-right:150px}
            .kontejner{position:relative;}
            .tekst{position: absolute;bottom:50px;right:200px}
            th{background-color:#e69100}
            table{width:1000px;padding-left:50px;padding-bottom:200px}
            .celije{width:50px;height:20px;text-align:left}
        </style>
    </head>
    <body>
		<div class="row">
			<div class="col-12">
				<ul id="vrh">
					<li class="header">&#127926;Horisti</li>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href='home.php'>&#127968;Home</a></li>
                    &nbsp;&nbsp;
                    <li><a href='dm_prijatelji_tabela.php'>&#128107;Prijatelji</a></li>
                    &nbsp;&nbsp;
                    <li><a href='dm_profil.php'><img src="pevac1b.jpg">Profil</a></li>
                    &nbsp;&nbsp;
                    <li><a href='editt.php'><img src="pevac1b.jpg">Izmeni profil</a></li>
                    &nbsp;&nbsp;
                    <li><a href='izmeniSifru.php'>&#128271;Izmeni šifru</a></li>
                    &nbsp;&nbsp;
                    <li><a href='dm_logout.php'>&#128378;Logout</a></li>
				</ul>
			</div>
		</div>
	    <div class="row">
			<div class="col-12">
				<div class="kontejner">
					<img src="hor2a.jpg" id="horisti">
						<div class="tekst">