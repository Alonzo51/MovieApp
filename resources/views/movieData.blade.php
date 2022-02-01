<input id="movie-id" type="hidden" name="movie_id" value="{{ $movie->id }}" />
<input id="movie-api-id" type="hidden" name="movie-api-id" value="{{ $movie->additionalApiDataId }}" />
<div class="mb-3">
    <small class="text-muted">@lang('app.movie_name')</small>
    <br />
    <p class="display-4">{{ $movie->name }}</p>
</div>
<div class="row mb-3">
    <div class="col-6 mx-auto">
        <img class="img-fluid" src="{{ $movie->boxart }}" />
    </div>
</div>
<div class="mb-3">
    <small class="text-muted">@lang('app.rating')</small>
    <br />
    <p id="movie-rating" class="display-4"></p>
</div>
<div class="mb-3">
    <small class="text-muted">@lang('app.overview')</small>
    <br />
    <p id="movie-overview"></p>
</div>
