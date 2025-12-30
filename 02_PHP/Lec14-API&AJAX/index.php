<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API & AJAX Demo</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary" onclick="loadData()">
            Load Data
        </button>
        <button class="btn btn-secondary" onclick="hideData()">
            Hide Data
        </button>
        <div class="container mt-5">
            
        <table class="table-bordered">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Email</th>
            </thead>
            <tbody id="data">
                <tr>
                    <td colspan="4">No Data Found.</td>
                </tr>
            </tbody>
        </table>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    function loadData() {
        $.get('api/students.php', function (res) {
         $("#data").html("");

         res.forEach(st => {
            $("#data").append(
                `<tr>
                    <td>${st.id}</td>
                    <td>${st.name}</td>
                    <td>${st.course}</td>
                    <td>${st.email}</td>
                </tr>`
            );
         });

        });
    }

        function hideData() {        
         $("#data").html("");
         $("#data").append(`<tr><td colspan="4">No Data Found.</td>`);
    }
</script>  
</body>
</html>