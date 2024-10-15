<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <div class="input-group my-3">
                    <input id="js-inputSearch" type="text" class="form-control" placeholder="Name's Movie">
                    <button class="input-group-text btn btn-primary" id="js-btnSearch">Search</button>
                </div>
            </div>
        </div>
        <div class="row" id="result">

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // su dung Jquery
        $(function() {
            let btnSearch = $('#js-btnSearch');
            let inputSearch = $('#js-inputSearch');
            let showResult = $('#result')
            btnSearch.click(function() {
                let nameMovie = inputSearch.val().trim();
                if (nameMovie.length > 0) {
                    $.ajax({
                        url: "api.php",
                        type: "POST",
                        data: {
                            movie: nameMovie
                        },
                        beforeSend: function() {
                            $(btnSearch).text("Loading ....");
                        },
                        success: function(result) {
                            $(btnSearch).text("Search");
                            result = JSON.parse(result);
                            showResult.html(result.map(data => `
                                <div class="col-sm-12 col-md-3 mb-3">
                                    <div class="card">
                                        <img src="http://image.tmdb.org/t/p/w500${data.poster_path}" class="card-img-top" alt="${data.title}">
                                        <div class="card-body">
                                            <p class="card-text">${data.title}</p>
                                        </div>
                                    </div>
                                </div>
                            `).join(''));
                        }
                    });
                } else {
                    alert("Enter movie");
                }
            });
        });
    </script>
</body>

</html>