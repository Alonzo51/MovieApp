<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- App CSS -->
    <link href="css/style.css" rel="stylesheet">

    <title>Movie App</title>
</head>
<body>
<div class="container-fluid my-5">
    <h1 class="display-1 text-center">Movie App</h1>

    <div class="row mt-5">
        <!-- BEGIN GENRE FORM -->

        <div class="col-12 col-md-4 mx-auto">
            <div class="bg-dark p-5">
                <label for="movie-genres" class="text-muted mb-1">@lang('app.genres')</label>
                <select id="movie-genres" class="form-control rounded-0">
                    <option>@lang('app.select_genre')</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>

                <br />

                <button id="genre-request" class="btn btn-primary rounded-0">Submit</button>
            </div>
        </div>

        <!-- END GENRE FORM -->
        <!-- BEGIN MOVIE DATA -->

        <div id="movie-data" class="col-12 col-md-4 mx-auto bg-dark p-5"></div>

        <!-- END MOVIE DATA -->
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/movieapp.js"></script>
</body>
</html>
