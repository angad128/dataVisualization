<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HighChart</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Date picker -->
       

        <script src="https://code.highcharts.com/highcharts.js"></script>
           
   

       <!-- Custom styles for this template -->
       <style type="text/css">
            body {
                min-height: 75rem;
                padding-top: 4.5rem;
            }
        </style>
  </head>

  <!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
    <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

    <!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!--Font Awesome (added because you use icons in your prepend/append)-->
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />


  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><i class="fas fa-chart-bar fa-2x"></i>DataVisulization</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          
        </ul>
        
      </div>
    </nav>

    <main role="main" class="container" style="margin-top:10px;">
      <div class="jumbotron" style="padding: 10px;margin: auto;">
        <form class="form-inline">
            
          <h5><label class="mb-2">From:</label></h5>
          <input type="text" class="form-control mb-2 mr-sm-2" name="fdate" data-provide="datepicker-inline" id="fromDate" placeholder="From Date">


          <h5><label class="mb-2">To:</label></h5>
          <input type="text" class="form-control mb-2 mr-sm-2" name="ldate" data-provide="datepicker-inline" id="toDate" placeholder="To Date">

          <h5><label class="mb-2">Chart-Type:</label></h5>
          <select class="form-control mb-2 mr-sm-2" id="chart">
            <option></option>
            <option>LineChart</option>
          </select>

          <button style="margin-left: 20px;" type="submit" class="btn btn-success mb-2"><i class="fas fa-chart-line"></i>Generate Report</button>
        </form>
      </div>
    </main>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $(document).ready(function(){
            var fdate_input=$('input[name="fdate"]'); //our first date input has the name "fdate"
            var ldate_input=$('input[name="ldate"]'); //our first date input has the name "fdate"
            
        })
    </script>
    
  </body>
</html>



