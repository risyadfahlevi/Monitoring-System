<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

<style type="text/css">
    body {
        display: block;
        margin-left: 5.1in;
        margin-right: auto;
        width:1300px;
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

<div class="col-sm-3 col-xs-12" align="center">
    <!--Jika terjadi login error tampilkan pesan ini-->
    <?php if(isset($_GET['error']) ) {?>
        <div class="alert alert-danger">Sorry! Login Failed, Try Again..</div>
    <?php }?>

    <?php if (isset($_SESSION['username'])) { ?>
        <div class="alert alert-info">
            <strong>Welcome <?=$_SESSION['nama']?></strong>
        </div>
        <?php
    } else { ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="proses_login.php" method="post">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" name="user" class="form-control input-sm"
                               placeholder="Username" required="" autocomplete="off"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" name="pwd" class="form-control input-sm"
                               placeholder="Password" required="" autocomplete="off"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" name="login" value="login" class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                            Login
                        </button>
                    </div>
            </form>
        </div>
    </div>
    <div class="panel-footer">
        <a href="index.php" class="btn btn-success btn-sm">
            Back To Dashboard </a>
    </div>
<?php } ?>
</div>
<div class="row">
        <div class="col-xs-12">
            | Monitoring Posco ICT |
        </div>
    </div>