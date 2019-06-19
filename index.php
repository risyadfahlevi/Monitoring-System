<?php session_start();
//Aktifkan session

require 'config/koneksi.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Monitoring</title>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            body {
                margin-top:70px;
            }

            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                transition: opacity 200ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {opacity:1; pointer-events: auto;}
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: linear-gradient(#fff, #aaa);
            }
            .close:hover { background:#00d9ff; }
            .close {
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                text-align: center;
                top: -10px;
                right: -12px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 12px;
                box-shadow: 1px 1px 3px #000;
            }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        </style>

        <!--script untuk disable klik kanan-->
		<script>
				var isNS = (navigator.appName == "Netscape") ? 1 : 0;

				if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);

				function mischandler(){
				return false;
				}

				function mousehandler(e){
				var myevent = (isNS) ? e : event;
				var eventbutton = (isNS) ? myevent.which : myevent.button;
				if((eventbutton==2)||(eventbutton==3 )) return false;
				}
				document.oncontextmenu = mischandler;
				document.onmousedown = mousehandler;
				document.onmouseup = mousehandler;

		</script>

        <!--script untuk disable ctrl + u, ctrl + s, ctrl + shift + i, ctrl + shift + j, dan F12-->
		<script>
				document.onkeydown = function(e) {
						if (e.ctrlKey &&
							(e.keyCode == 85 || e.keyCode == 83 || e.keyCode == 123 ))
						    {
							return false;
						    }
                        else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)|| (event.keyCode == 123)) {
                            return false;
                        }
				};
		</script>
    </head>
    <BODY oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	
	

        <?php //mengambil file menu.php
        require 'akun.php';
        ?>

        <?php //mengambil file menu.php
        require 'menu.php';
        ?>

        <?php //mengambil file menu.php
        require 'content.php';
        ?>


        <?php //mengambil file menu.php
        require 'footer.php';
        ?>

        <script src="Assets/js/jquery.js" type="text/javascript"></script>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script src="Assets/js/disablerc.js" type="text/javascript"></script>
		

        <script type="text/javascript" >
                $(function () {
                    $('#dtskripsi').dataTable();
                });
    </script>

    </body>

    </html>
