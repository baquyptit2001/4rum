<div class="input-box">
    <label class="fs-14 text-black fw-medium mb-0">Question Title</label>
    <p class="fs-13 pb-3 lh-20">Be specific and imagine you’re asking a question to another person</p>
    @if ($errors->has('title'))
        <p class="fs-13 pb-3 lh-20 text-danger">{{ $errors->first('title') }}</p>
    @endif
    <div class="form-group">
        <input class="form-control form--control" value="{{ isset($question->title) ? $question->title : null }}" type="text" name="title" placeholder="e.g. How to fullstack in 1 week with thousand dollars salary ?">
    </div>
</div>
<div class="input-box">
    <label class="fs-14 text-black fw-medium mb-0">Details</label>
    <p class="fs-13 pb-3 lh-20">Include all the information someone would need to answer your question</p>
    @if ($errors->has('title'))
        <p class="fs-13 pb-3 lh-20 text-danger">{{ $errors->first('body') }}</p>
    @endif
    <div class="form-group">
        <textarea class="form-control form--control" name="body" rows="10" cols="40" placeholder="How to build a snowman ?">{{ isset($question->body) ? $question->body : null }}</textarea>
    </div>
</div>
<div class="input-box pt-2">
    <div class="form-group">
        <div class="custom-control custom-checkbox fs-13 mb-1">
            <input type="checkbox" class="custom-control-input" id="notifiedMe">
            <label class="custom-control-label custom--control-label" for="notifiedMe">Get notified by email when someone answers this question.</label>
        </div>
        <div class="custom-control custom-checkbox fs-13">
            <input type="checkbox" class="custom-control-input" id="youAgreeCheckBox">
            <label class="custom-control-label custom--control-label" for="youAgreeCheckBox">By asking your question, you agree to the <a href="privacy-policy.html" class="text-color hover-underline">Privacy Policy.</a></label>
        </div>
    </div>
    <div class="btn-box">
        <button type="submit" class="btn theme-btn">{{ $button_text }}</button>
        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary p-2">Cancel</a>
    </div>
</div>