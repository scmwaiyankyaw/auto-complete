<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 Autocomplete Search using Bootstrap Typeahead JS - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Auto complete</h1>
      <input type="text" class="typeahead form-control">
    </div>

    <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
    </script>
  </body>
</html>
