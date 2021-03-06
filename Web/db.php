<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php" ?>
        <script src="js/db.js"></script>
    </head>
    <body>
        <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light" id="mainMenu"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="container">
            <br>
            <div class="row">
                <div class="col">
                    <table class="table table-active bg-light table-bordered">
                        <tr>
                            <td>
                                <h2 id="text_title">Motor Configuraton Database</h2>
                                <br>
                                <div class="input-group">
                                    <span class = "input-group-addon w-75">
                                        <select class="form-control" id="motor-select"></select>
                                    </span>
                                    <span class = "input-group-addon w-25">
                                        <button class="browse btn btn-primary" type="button"><i class="icons icon-list2"></i> <span id="text_select">Select Motor</span></button>
                                    </span>
                                </div>
                                <br><br>
                                <div class="input-group">
                                    <span class = "input-group-addon pull-left w-50">
                                        <img class="rounded m-2" src="" id="motor-image"/>
                                    </span>
                                    <span class = "input-group-addon pull-left w-50">
                                        <ul class="m-2" id="motor-info"></ul>
                                        <br>
                                        <div id="motor-tune"></div>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>