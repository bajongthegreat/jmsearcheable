
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.css" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/searcheable.css" rel="stylesheet">

    <style type="text/css">
      .main {
      margin-top: 50px;
      }

      .prettyprint {
        margin-top: 15px;
      }
    </style>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">jmSearcheable</a>
        </div>
      
      </div>
    </div>


    <div class="container main">
      <h2>Demo</h2>
          <p> The project uses a php file to hold a dummy JSON object to have something to retreive in our AJAX request.</p>
      </div>
       

     


       <div class="container" style="margin-top: 30px;">


              <div class="container">
         <input class="form-control" id="search">   
      <div id="searchResultContainer"></div>
       </div>


      <div class="page-header"> <h4> Returning a result with Anchor tag </h4> </div>


      <pre class="prettyprint">


         $('#search_with_anchor').jmSearcheable({ 
          url: 'search.php',
          urlWithID: true,
          idField: 'employee_work_id',
          fadeOut: 'slow',
          format: 'employee_work_id: - :lastname'
      });

    
        </pre>
     


           <div class="page-header"> <h4> Returning a result without Anchor tag </h4> </div>



      <pre class="prettyprint">


         $('#searchii').jmSearcheable({ 
          url: 'search.php',
          urlWithID: false,
          idField: 'employee_work_id',
          fadeOut: 'slow',
          format: 'employee_work_id: - :lastname'
      });

    
        </pre>

        
     
       </div>

      




      <hr>

      <div class="container">
        <footer>
        <p> jmSearcheable &copy; 2014 <span> <i>James Norman Mones Jr.</i></span></p>
      </footer>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

   
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <script src="js/jmsearcheable.js"></script>
    <script>
    
      $('#search').jmSearcheable({
          url: 'search.php',
          urlWithID: false,
          idField: 'employee_work_id',
          fadeOut: 'slow',
          format: 'employee_work_id: - :lastname'
      });


  


    </script>
  </body>
</html>
