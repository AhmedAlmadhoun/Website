

{{-- name	id_number	phone	email	gender	address	notes	status	 --}}

<div class="form-group">
    <label for="title">{{ __('site.title') }}</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}">
</div>

<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="image">
  </div>
  <div id="holder" style="margin-top:15px;max-height:100px;"></div>


  <div class="form-group">
    <label for="link">{{ __('site.link') }}</label>
    <input type="text" name="link" id="link" class="form-control" value="{{ $news->link }}">
</div>

<div class="form-group">
    <label for="details">{{ __('site.details') }}</label>
    <textarea class="form-control" id="" rows="3" name="details">
        {{ $news->details }}
    </textarea>
  </div>




