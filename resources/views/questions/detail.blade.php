@extends('layouts.layout')

@section('content')
<section class="hero-area bg-white shadow-sm overflow-hidden pt-40px pb-40px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <h2 class="section-title pb-2 fs-24 lh-34">Find the best answer to your technical question, <br>
                        help others answer theirs
                    </h2>
                    <p class="lh-26">If you are going to use a passage of Lorem Ipsum, you need to be sure there
                        <br> isn't anything embarrassing hidden in the middle of text.
                    </p>
                    <ul class="generic-list-item pt-3">
                        <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24"
                                    width="20px" fill="#6c727c">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z" />
                                </svg></span> Anybody can ask a question</li>
                        <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24"
                                    width="20px" fill="#6c727c">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" /></svg></span>
                            Anybody can answer</li>
                        <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512"
                                    width="20px">
                                    <path fill="#6c727c"
                                        d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                                    </path>
                                </svg></span> The best answers are voted up and rise to the top</li>
                    </ul>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="hero-btn-box text-right py-3">
                    <a href="{{ route('questions.create') }}" class="btn theme-btn">Ask a Question</a>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="question-main-bar mb-50px">
                    <div class="question-highlight">
                        <div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
                            <div class="media-body">
                                <h5 class="fs-20"><a href="{{ $question->url }}">{{ $question->title }}</a></h5>
                                <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                    <div class="pr-3">
                                        <span>Asked</span>
                                        <span class="text-black">{{ $question->created_date_full }}</span>
                                    </div>
                                    <div class="pr-3">
                                        <span>By</span>
                                        <span class="text-black">{{ $question->user->name }}</span>
                                    </div>
                                    <div class="pr-3">
                                        <span class="pr-1">Viewed</span>
                                        <span class="text-black">{{ $question->views.' '.str_plural('view', $question->views) }}</span>
                                    </div>
                                </div>
                                <div class="tags">
                                    <a href="#" class="tag-link">javascript</a>
                                    <a href="#" class="tag-link">jquery</a>
                                    <a href="#" class="tag-link">attribute</a>
                                </div>
                            </div>
                        </div><!-- end media -->
                    </div><!-- end question-highlight -->
                    <div class="question d-flex">
                        <div class="votes votes-styled w-auto">
                            <livewire:vote :question="$question">
                        </div><!-- end votes -->
                        <div class="question-post-body-wrap flex-grow-1">
                            <div class="question-post-body">
                                {!! $question->body_html !!}
                            </div><!-- end question-post-body -->
                            <div class="question-post-user-action">
                                <div class="post-menu">
                                    <div class="btn-group">
                                        <button class="btn dropdown-toggle after-none" type="button"
                                            id="shareDropdownMenu" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Share</button>
                                        <div class="dropdown-menu dropdown--menu dropdown--menu-2 mt-2"
                                            aria-labelledby="shareDropdownMenu">
                                            <div class="py-3 px-4">
                                                <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                <form action="#" class="copy-to-clipboard">
                                                    <span class="text-success-message">Link Copied!</span>
                                                    <input type="text"
                                                        class="form-control form--control form-control-sm copy-input"
                                                        value="https://disilab.com/q/66552850/15319675">
                                                    <div
                                                        class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                        <a href="#" class="btn-text copy-btn">Copy link</a>
                                                        <ul class="social-icons social-icons-sm">
                                                            <li><a href="#" class="bg-8 text-white shadow-none"
                                                                    title="Share link to this question on Facebook"><i
                                                                        class="la la-facebook"></i></a></li>
                                                            <li><a href="#" class="bg-9 text-white shadow-none"
                                                                    title="Share link to this question on Twitter"><i
                                                                        class="la la-twitter"></i></a></li>
                                                            <li><a href="#" class="bg-dark text-white shadow-none"
                                                                    title="Share link to this question on DEV"><i
                                                                        class="lab la-dev"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- btn-group -->
                                    <a href="#" class="btn">Edit</a>
                                    <button class="btn">Follow</button>
                                </div><!-- end post-menu -->
                                <div class="media media-card user-media owner align-items-center">
                                    <a href="user-profile.html" class="media-img d-block">
                                        <img src="{{ asset('images/img3.jpg') }}" alt="avatar">
                                    </a>
                                    <div
                                        class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                            <div class="stats fs-12 d-flex align-items-center lh-18">
                                                <span class="text-black pr-2">224,110</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball gold"></span>16</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball silver"></span>93</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball"></span>136</span>
                                            </div>
                                        </div>
                                        <small class="meta d-block text-right">
                                            <span class="text-black d-block lh-18">asked</span>
                                            <span class="d-block lh-18 fs-12">6 hours ago</span>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card user-media align-items-center">
                                    <a href="user-profile.html" class="media-img d-block">
                                        <img src="{{ asset('images/img4.jpg') }}" alt="avatar">
                                    </a>
                                    <div
                                        class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="user-profile.html">Kevin Martin</a></h5>
                                            <div class="stats fs-12 d-flex align-items-center lh-18">
                                                <span class="text-black pr-2">6,514</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball gold"></span>3</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball silver"></span>35</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball"></span>48</span>
                                            </div>
                                        </div>
                                        <a href="revisions.html" class="meta d-block text-right fs-13 text-color">
                                            <span class="d-block lh-18">edited</span>
                                            <span class="d-block lh-18 fs-12">6 hours ago</span>
                                        </a>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end question-post-user-action -->
                            <div class="comments-wrap">
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score">1</span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">Where are you trying to get <code
                                                    class="code">prodId</code>?</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user"
                                                title="15,467 reputation">Majed Badawi</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">In a separate js file. @MajedBadawi</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user owner"
                                                title="224,110 reputation">Arden Smith</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">@MajedBadawi I just updated the code to show
                                                where I'm trying to get it.</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user owner"
                                                title="224,110 reputation">Arden Smith</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">Your are missing quotes <code
                                                    class="code">data-productId=$product->id</code> Your markup
                                                breaks after that</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user"
                                                title="6,514 reputation">Kevin Martin</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">This doesn't work either: <code
                                                    class="code">data-productId="$product->id"</code>. @Kevin
                                                Martin</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user owner"
                                                title="224,110 reputation">Arden Smith</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="comment-form">
                                    <div class="comment-link-wrap text-center">
                                        <a class="collapse-btn comment-link" data-toggle="collapse"
                                            href="#addCommentCollapse" role="button" aria-expanded="false"
                                            aria-controls="addCommentCollapse"
                                            title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add
                                            a comment</a>
                                    </div>
                                    <div class="collapse border-top border-top-gray mt-2 pt-3"
                                        id="addCommentCollapse">
                                        <form method="post" class="row pb-3">
                                            <div class="col-lg-12">
                                                <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                <div class="divider mb-2"><span></span></div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Name</label>
                                                    <div class="form-group">
                                                        <input
                                                            class="form-control form--control form-control-sm fs-13"
                                                            type="text" name="text" placeholder="Your name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Email (Address never made
                                                        public)</label>
                                                    <div class="form-group">
                                                        <input
                                                            class="form-control form--control form-control-sm fs-13"
                                                            type="text" name="text" placeholder="Your email">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Website</label>
                                                    <div class="form-group">
                                                        <input
                                                            class="form-control form--control form-control-sm fs-13"
                                                            type="text" name="text" placeholder="Website link">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Message</label>
                                                    <div class="form-group">
                                                        <textarea
                                                            class="form-control form--control form-control-sm fs-13"
                                                            name="message" rows="5"
                                                            placeholder="Your comment here..."></textarea>
                                                        <div class="d-flex flex-wrap align-items-center pt-2">
                                                            <div
                                                                class="badge bg-gray border border-gray mr-3 fw-regular fs-13">
                                                                [named hyperlinks] (https://example.com)</div>
                                                            <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                            <div class="mr-3 font-italic fs-13">_italic_</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div
                                                    class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                    <div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="getNewComments">
                                                            <label
                                                                class="custom-control-label custom--control-label"
                                                                for="getNewComments">Notify me of new comments vai
                                                                email.</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="getNewPosts">
                                                            <label
                                                                class="custom-control-label custom--control-label"
                                                                for="getNewPosts">Notify me of new posts vai
                                                                email.</label>
                                                        </div>
                                                    </div>
                                                    <button
                                                        class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray"
                                                        type="submit">Post Comment</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </form>
                                    </div><!-- end collapse -->
                                </div>
                            </div><!-- end comments-wrap -->
                        </div><!-- end question-post-body-wrap -->
                    </div>
                    <div class="subheader d-flex align-items-center justify-content-between">
                        <div class="subheader-title">
                            <h3 class="fs-16">1 Answer</h3>
                        </div><!-- end subheader-title -->
                        <div class="subheader-actions d-flex align-items-center lh-1">
                            <label class="fs-13 fw-regular mr-1 mb-0">Order by</label>
                            <div class="w-100px">
                                <select class="select-container">
                                    <option value="active">active</option>
                                    <option value="oldest">oldest</option>
                                    <option value="votes" selected="selected">votes</option>
                                </select>
                            </div>
                        </div><!-- end subheader-actions -->
                    </div><!-- end subheader -->
                    @foreach ($question->answer as $answer)
                        <div class="answer-wrap d-flex">
                            <div class="votes votes-styled w-auto">
                                <div id="vote2" class="upvotejs">
                                    <a class="upvote upvote-on" data-toggle="tooltip" data-placement="right"
                                        title="This question is useful"></a>
                                    <span class="count">{{ $answer->votes_count }}</span>
                                    <a class="downvote" data-toggle="tooltip" data-placement="right"
                                        title="This question is not useful"></a>
                                    <a class="star check{{ $answer->accepted_answer }}" data-toggle="tooltip" data-placement="right"
                                        title="The question owner accepted this answer"></a>
                                </div>
                            </div>
                            <div class="answer-body-wrap flex-grow-1">
                                <div class="answer-body">
                                    {!! $answer->body_html !!}
                                </div><!-- end answer-body -->
                                <div class="question-post-user-action">
                                    <div class="post-menu">
                                        <div class="btn-group">
                                            <button class="btn dropdown-toggle after-none" type="button"
                                                id="shareDropdownMenuTwo" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Share</button>
                                            <div class="dropdown-menu dropdown--menu dropdown--menu-2 mt-2"
                                                aria-labelledby="shareDropdownMenuTwo">
                                                <div class="py-3 px-4">
                                                    <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                    <form action="#" class="copy-to-clipboard">
                                                        <span class="text-success-message">Link Copied!</span>
                                                        <input type="text"
                                                            class="form-control form--control form-control-sm copy-input"
                                                            value="https://disilab.com/q/66552850/15319675">
                                                        <div
                                                            class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                            <a href="#" class="btn-text copy-btn">Copy link</a>
                                                            <ul class="social-icons social-icons-sm">
                                                                <li><a href="#" class="bg-8 text-white shadow-none"
                                                                        title="Share link to this question on Facebook"><i
                                                                            class="la la-facebook"></i></a></li>
                                                                <li><a href="#" class="bg-9 text-white shadow-none"
                                                                        title="Share link to this question on Twitter"><i
                                                                            class="la la-twitter"></i></a></li>
                                                                <li><a href="#" class="bg-dark text-white shadow-none"
                                                                        title="Share link to this question on DEV"><i
                                                                            class="lab la-dev"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- btn-group -->
                                        <a href="#" class="btn">Edit</a>
                                        <button class="btn">Follow</button>
                                    </div><!-- end post-menu -->
                                    <div class="media media-card user-media align-items-center">
                                        <a href="user-profile.html" class="media-img d-block">
                                            <img src="{{ asset('images/img4.jpg') }}" alt="avatar">
                                        </a>
                                        <div class="media-body d-flex align-items-center justify-content-between">
                                            <div>
                                                <h5 class="pb-1"><a href="user-profile.html">{{ $answer->user->name }}</a></h5>
                                                <div class="stats fs-12 d-flex align-items-center lh-18">
                                                    <span class="text-black pr-2">15.5k</span>
                                                    <span class="pr-2 d-inline-flex align-items-center"><span
                                                            class="ball gold"></span>3</span>
                                                    <span class="pr-2 d-inline-flex align-items-center"><span
                                                            class="ball silver"></span>10</span>
                                                    <span class="pr-2 d-inline-flex align-items-center"><span
                                                            class="ball"></span>26</span>
                                                </div>
                                            </div>
                                            <small class="meta d-block text-right">
                                                <span class="text-black d-block lh-18">answered</span>
                                                <span class="d-block lh-18 fs-12">{{ $answer->created_date_full }}</span>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card user-media align-items-center">
                                        <div class="media-body d-flex align-items-center justify-content-end">
                                            <a href="revisions.html" class="meta d-block text-right fs-13 text-color">
                                                <span class="d-block lh-18">edited</span>
                                                <span class="d-block lh-18 fs-12">8 hours ago</span>
                                            </a>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end question-post-user-action -->
                                <div class="comments-wrap">
                                    <ul class="comments-list">
                                        <li>
                                            <div class="comment-actions">
                                                <span class="comment-score">1</span>
                                            </div>
                                            <div class="comment-body">
                                                <span class="comment-copy">Ah excellent! Thank you!</span>
                                                <span class="comment-separated">-</span>
                                                <a href="user-profile.html" class="comment-user owner"
                                                    title="224,110 reputation">Arden Smith</a>
                                                <span class="comment-separated">-</span>
                                                <a href="#" class="comment-date">8 hours ago</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="comment-form">
                                        <div class="comment-link-wrap text-center">
                                            <a class="collapse-btn comment-link" data-toggle="collapse"
                                                href="#addCommentCollapseTwo" role="button" aria-expanded="false"
                                                aria-controls="addCommentCollapseTwo"
                                                title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add
                                                a comment</a>
                                        </div>
                                        <div class="collapse border-top border-top-gray mt-2 pt-3"
                                            id="addCommentCollapseTwo">
                                            <form method="post" class="row pb-3">
                                                <div class="col-lg-12">
                                                    <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                    <div class="divider mb-2"><span></span></div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="fs-13 text-black lh-20">Name</label>
                                                        <div class="form-group">
                                                            <input
                                                                class="form-control form--control form-control-sm fs-13"
                                                                type="text" name="text" placeholder="Your name">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="fs-13 text-black lh-20">Email (Address never made
                                                            public)</label>
                                                        <div class="form-group">
                                                            <input
                                                                class="form-control form--control form-control-sm fs-13"
                                                                type="text" name="text" placeholder="Your email">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="fs-13 text-black lh-20">Website</label>
                                                        <div class="form-group">
                                                            <input
                                                                class="form-control form--control form-control-sm fs-13"
                                                                type="text" name="text" placeholder="Website link">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="fs-13 text-black lh-20">Message</label>
                                                        <div class="form-group">
                                                            <textarea
                                                                class="form-control form--control form-control-sm fs-13"
                                                                name="message" rows="5"
                                                                placeholder="Your comment here..."></textarea>
                                                            <div class="d-flex flex-wrap align-items-center pt-2">
                                                                <div
                                                                    class="badge bg-gray border border-gray mr-3 fw-regular fs-13">
                                                                    [named hyperlinks] (https://example.com)</div>
                                                                <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                                <div class="mr-3 font-italic fs-13">_italic_</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div
                                                        class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                        <div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="getNewCommentsTwo">
                                                                <label
                                                                    class="custom-control-label custom--control-label"
                                                                    for="getNewCommentsTwo">Notify me of new comments
                                                                    vai email.</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="getNewPostsTwo">
                                                                <label
                                                                    class="custom-control-label custom--control-label"
                                                                    for="getNewPostsTwo">Notify me of new posts vai
                                                                    email.</label>
                                                            </div>
                                                        </div>
                                                        <button
                                                            class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray"
                                                            type="submit">Post Comment</button>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                            </form>
                                        </div><!-- end collapse -->
                                    </div>
                                </div><!-- end comments-wrap -->
                            </div><!-- end answer-body-wrap -->
                        </div><!-- end answer-wrap -->
                    @endforeach
                    <div class="subheader">
                        <div class="subheader-title">
                            <h3 class="fs-16">Your Answer</h3>
                        </div><!-- end subheader-title -->
                    </div><!-- end subheader -->
                    <div class="post-form">
                        <form method="post" action="{{ route('questions.answer') }}" class="pt-3">
                            @csrf
                            <input type="hidden" name="question_id" value="{{ $question->id }}">
                            <div class="input-box">
                                <label class="fs-14 text-black lh-20 fw-medium">Body</label>
                                <div class="form-group">
                                    <textarea
                                        class="form-control form--control form-control-sm fs-13 user-text-editor"
                                        rows="6" name="body"
                                        placeholder="Your answer here...">
                                    </textarea>
                                </div>
                            </div>
                            <button class="btn theme-btn theme-btn-sm" type="submit">Post Your Answer</button>
                        </form>
                    </div>
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Number Achievement</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color">980k</span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-2">610k</span>
                                        <p class="fs-14">Answers</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-3">650k</span>
                                        <p class="fs-14">Answer accepted</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">320k</span>
                                        <p class="fs-14">Users</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">To get answer of question <a href="signup.html"
                                            class="text-color hover-underline">Join<i
                                                class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-3">
                                <svg class="mr-2" width="18" height="18" viewBox="0 0 18 18" fill="#6c727c">
                                    <path
                                        d="M1 6l8 5 8-5V4L9 9 1 4c0-1.1.9-2 2-2h12c1.09 0 2 .91 2 2v10c0 1.09-.91 2-2 2H3c-1.09 0-2-.91-2-2V6z">
                                    </path>
                                </svg>
                                <h3 class="fs-17">Love this site?</h3>
                            </div>
                            <div class="divider"><span></span></div>
                            <p class="fs-14 lh-20 py-3">Get the <span class="text-dark fw-medium">weekly
                                    newsletter!</span> In it, you'll get:</p>
                            <ul class="generic-list-item generic-list-item-bullet fs-14 pb-3">
                                <li class="lh-20">The week's top questions and answers</li>
                                <li class="lh-20">Important community announcements</li>
                                <li class="lh-20">Questions that need answers</li>
                            </ul>
                            <button class="btn theme-btn theme-btn-gray w-100">Sign up for the digest</button>
                            <p class="fs-14 pt-1 text-center">See an example newsletter</p>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Related Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How to select the dom element with
                                                event.target</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How can you cut an onion without
                                                crying?</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How to change the behavior of dropdown
                                                buttons in HTML</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Tags</h3>
                            <div class="divider"><span></span></div>
                            <div class="tags pt-4">
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">analytics</a>
                                    <span class="item-multiplier fs-13">
                                        <span>×</span>
                                        <span>32924</span>
                                    </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">computer</a>
                                    <span class="item-multiplier fs-13">
                                        <span>×</span>
                                        <span>32924</span>
                                    </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">python</a>
                                    <span class="item-multiplier fs-13">
                                        <span>×</span>
                                        <span>32924</span>
                                    </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">javascript</a>
                                    <span class="item-multiplier fs-13">
                                        <span>×</span>
                                        <span>32924</span>
                                    </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">c#</a>
                                    <span class="item-multiplier fs-13">
                                        <span>×</span>
                                        <span>32924</span>
                                    </span>
                                </div><!-- end tag-item -->
                                <div class="collapse" id="showMoreTags">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">java</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">swift</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">html</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">angular</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">flutter</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">machine-language</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                </div><!-- end collapse -->
                                <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags"
                                    role="button" aria-expanded="false" aria-controls="showMoreTags">
                                    <span class="collapse-btn-hide">Show more<i
                                            class="la la-angle-down ml-1 fs-11"></i></span>
                                    <span class="collapse-btn-show">Show less<i
                                            class="la la-angle-up ml-1 fs-11"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="ad-card">
                        <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                        <div class="ad-banner mb-4 mx-auto">
                            <span class="ad-text">290x500</span>
                        </div>
                    </div><!-- end ad-card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<section class="footer-area pt-80px bg-dark position-relative">
    <span class="vertical-bar-shape vertical-bar-shape-1"></span>
    <span class="vertical-bar-shape vertical-bar-shape-2"></span>
    <span class="vertical-bar-shape vertical-bar-shape-3"></span>
    <span class="vertical-bar-shape vertical-bar-shape-4"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Company</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Legal Stuff</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Help</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Connect with us</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                        <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                        <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <hr class="border-top-gray my-5">
    <div class="container">
        <div class="row align-items-center pb-4 copyright-wrap">
            <div class="col-lg-6">
                <a href="index.html" class="d-inline-block">
                    <img src="{{ asset('images/logo-white.png') }}" alt="footer logo" class="footer-logo">
                </a>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <p class="copyright-desc text-right fs-14">Copyright &copy; 2021 <a
                        href="https://techydevs.com/">TechyDevs</a> Inc.</p>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection