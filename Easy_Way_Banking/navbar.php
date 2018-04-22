<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
            <a class="navbar-brand" href="index.php">Easy Way Banking</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

        <?php
        if (isset($_SESSION['username'])){

            echo '
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="careers.php">Careers</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li> <a href="signing.php" id="tile5"><i class="fa fa-lock"></i> LogOut</a></li>';
        }


        else{
            echo '                
                <li><a href="signing.php">Sign in</a></li>
                <li><a href="signup.php">Sign up</a></li>
                 ';
        }
        ?>

            </ul>



        </div>
    </div>
</nav>