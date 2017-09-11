<form method="post" action="{{ route('create') }}" style="max-width: 500px; margin: 0 auto;">
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" class="form-control">
    </div>
    <div class="form-group">
        <label for="tag_line">Tag Line</label>
        <input type="text" name="tag_line" id="tag-line" class="form-control">
    </div>
    <div class="form-group">
        <label for="quote">Quote</label>
        <textarea name="quote" id="quote" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
