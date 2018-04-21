<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> TEST PHP </title>
    </head>

    <body class="bg-light">
        <br>
        <p> HALOO </p>
        <div class="container">
            <br>   
            <center><img src="foto2.jpg" class="img-fluid rounded-circle" alt="Twitter"></center>
            <br>
            <div class="container-fluid">
                <div class="border shadow p-4 mb-4 bg-white">
                    <center>
                    <h1>Twitter SPAM Detector</h1>
                    <p> Created by:<br>
                        Rahmat Nur Ibrahim Santosa - 13516009 <br>
                        Rinda Nur Hafizha - 13516151 <br>
                        Haifa Fadhila Ilma - 13516076 <br>
                    </p>

                    <!-- <?php
                        print "<h1>Twitter SPAM Detector</h1>";
                        $variable = "name";
                        $variable = "name";
                        $variable = "name";
                        $literally = 'My $variable will not print!';
                        
                        print ($literally. "\n");
                        print "<br>";
                        
                        $literally = "My $variable will print!";
                        print($literally);

                        print "<br>";
                
                    ?> -->
                </div>
                </center>
                <br>
                
            </div>

            <form action="<?php $_PHP_SELF ?>" method="GET" id="main_form">
                <div class="form-group">
                    <label for="user">Username:</label>
                    <input type="text" class="form-control" id="user" placeholder="Enter username" name="user" value="<?php echo $_GET["user"]; ?>">
                </div>
                <div class="form-group">
                    <label for="sel1">Metode Pencarian:</label>
                    <select class="form-control" id="sel1" name="alg">
                        <option <?php if($_GET["alg"] == '0') {echo("selected");} ?> value="0">KMP</option>
                        <option <?php if($_GET["alg"] == '1') {echo("selected");} ?> value="1">BM</option>
                        <option <?php if($_GET["alg"] == '2') {echo("selected");} ?> value="2">Regex</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="key">Keyword:</label>
                    <input type="text" class="form-control" id="keyword" placeholder="Enter keyword" name="key" value=<? echo $_GET["key"]; ?>>
                </div>
                <!-- <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div> -->
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
            <br>
            <!-- <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1>Hello. My Name is Bernat. </h1>
                    <p>I'm currently studying at Informatics Engineering.</p>
                </div>        
            </div>

            <table class="table table-striped"> 
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</th>
                        <td>13516009</th>
                        <td>Rahmat Nur Ibrahim Santosa</th>                    
                    </tr>
                    <tr>
                        <td>2</th>
                        <td>13916001</th>
                        <td>Maudy Ayunda</th>                    
                    </tr>
                    <tr>
                        <td>3</th>
                        <td>13916002</th>
                        <td>Raisa Adriana</th>                    
                    </tr>             
                </tbody>
            </table>

            <div class="container-fluid">
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Indicates a successful or positive action.
                </div>
            </div> -->
        </div>
    </body>
</html>