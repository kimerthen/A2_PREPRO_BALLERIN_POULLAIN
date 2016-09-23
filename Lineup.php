<?php
include "head.php";
?>

<body class="artist-background">

    <?php
    include "navbar.php";
    ?>
    
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/plat.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Line-up</h1>
                        <hr class="small">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container"style="margin-top:30px; margin-bottom:30px">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal">
                    <img src="img/DreamNation_timetable.jpg" style="width:100%;height:auto;">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Line-up</h4>
                            </div>
                            <div class="modal-body">
                                <img src="img/DreamNation_timetable.jpg" style="width:100%;height:auto;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
include "footer.php";
?>

</body>
</html>