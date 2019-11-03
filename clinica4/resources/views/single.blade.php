@extends('layouts/app1')
@section('content')


        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
                 style="background-image: url(assets/images/backgrounds/page-header-4.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>News</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <div class="blog-article">

                            <div class="blog-article-thumbnail">

                                <a class="date" href="#">
                                    <small>Jan</small>
                                    <span>15</span>
                                    <small>2019</small>
                                </a>
                                <a href="news-single.html"><img src="{{ asset ('assets/images/blog/image-5.jpg')}}" alt=""></a>

                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a href="news-single.html">Causes and treatment of gingivitis</a></h4>

                            <div class="blog-article-details">
                                by <a class="author" href="#">Admin</a>
                                in <a class="category" href="#">Stomatology</a>
                                <a class="comments" href="#">2 comments</a>
                            </div><!-- blog-article-details -->

                            <div class="blog-article-content">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque odio, pulvinar ut urna
                                    ut, venenatis vene natis nisi. Nulla tempus. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed neque odio, pulvinar ut urna ut, venenatis venenatis nisinulla tempus.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet metus
                                    pellentesque, iaculis nisl convallis, posuere orci. Ut in metus sed magna gravida porta.
                                    Aliquam eu mi quam. Ut placerat auctor lacus, vel viverra nisi finibus eget. Aenean et nibh
                                    id dolor fringilla aliquet. Nam rutrum, tellus id placerat congue, justo eros venenatis nisl,
                                    sed tincidunt justo purus ut mauris. Nullam ultricies magna vel felis suscipit, eu varius
                                    dolor cursus. In hac habitasse platea dictumst. Suspendisse tempor faucibus enim. Donec
                                    euismod lobortis justo, et vestibulum purus mattis vitae. Quisque rutrum, quam sed gravida
                                    congue, quam sapien iaculis felis, ut eleifend libero risus eu nisl. Sed dui lectus,
                                    sollicitudin sed tellus at, accumsan finibus metus. Suspendisse ac imperdiet nisi. Aenean
                                    urna diam, scelerisque at eros sed, vulputate tincidunt nibh. Quisque rutrum, quam sed
                                    gravida congue, quam sapien iaculis felis, ut eleifend libero risus eu nisl. Sed dui lectus,
                                    sollicitudin sed tellus at, accumsan finibus metus. Suspendisse ac imperdiet nisi.</p>

                            </div><!-- blog-article-content -->

                        </div><!-- blog-article -->

                        <div class="blog-article-author">

                            <img src="{{ asset ('assets/images/blog/blog-post/post-author.jpg')}}" alt="">

                            <div class="blog-article-author-details">

                                <h6>Daniel Wilson <span>(Author)</span></h6>

                                <p>Pellentesque et erat accumsan, porttitor ipsum at, accumsan enim. Nulla sodales eros eget
                                    gravida ultricies. Mauris vel mattis sem. Morbi dui risus, dictum quis.</p>

                            </div><!-- blog-article-author-details -->

                        </div><!-- blog-article-author -->

                        <h6 class="commentlist-title">Comments (2)</h6>

                        <ul class="commentlist">
                            <li class="comment depth-1">
                                <div class="comment-body">

                                    <div class="comment-meta">

                                        <div class="comment-author">

                                            <img class="avatar" src="{{ asset ('assets/images/blog/blog-post/author-comment-1.jpg')}}" alt="">
                                            <a class="fn" href="#">Jane Doe</a>
                                            <span class="says">says:</span>

                                        </div><!-- comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#">Jan 22, 2019</a>
                                        </div><!-- comment-metadata -->

                                    </div><!-- comment-meta -->

                                    <div class="comment-content">

                                        <p>Morbi accumsan odio lacus, sollicitudin pulvinar magna vulputate sed. Aliquam
                                            non rutrum massa, sed dictum magna. Cum sociis natoque penatibus et magnis dis
                                            parturient montes.</p>

                                    </div><!--  comment-content -->

                                    <div class="reply">
                                        <a class="comment-reply-link" href="#">Reply</a>
                                    </div><!-- reply -->

                                </div><!-- comment-body -->
                            </li>
                            <li class="comment depth-1">
                                <div class="comment-body">

                                    <div class="comment-meta">

                                        <div class="comment-author">

                                            <img class="avatar" src="{{ asset ('assets/images/blog/blog-post/author-comment-2.jpg')}}" alt="">
                                            <a class="fn" href="#">Jane Smith</a>
                                            <span class="says">says:</span>

                                        </div><!-- comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#">Jan 22, 2019</a>
                                        </div><!-- comment-metadata -->

                                    </div><!-- comment-meta -->

                                    <div class="comment-content">

                                        <p>Accumsan odio lacus, sollicitudin pulvinar magna vulputate sed. Aliquam non
                                            rutrum massa, sed dictum magna. Cum sociis natoque penatibus et magnis dis
                                            parturient montes.</p>

                                    </div><!--  comment-content -->

                                    <div class="reply">
                                        <a class="comment-reply-link" href="#">Reply</a>
                                    </div><!-- reply -->

                                </div><!-- comment-body -->
                            </li>
                        </ul>

                        <h6 class="commentform-title">Leave a comment</h6>

                        <form id="commentform" name="commentform" novalidate method="post" action="#">
                            <fieldset>

                                <p class="commentform-author">
                                    <input id="name" class="col-12" type="text" name="name" placeholder="" required>
                                    <span></span>
                                    <label for="name">Name</label>
                                </p>

                                <p class="commentform-email">
                                    <input id="email" class="col-12" type="text" name="email" placeholder="" required>
                                    <span></span>
                                    <label for="email">E-mail</label>
                                </p>

                                <p class="commentform-url">
                                    <input id="url" class="col-12" type="text" name="url" placeholder="" required>
                                    <span></span>
                                    <label for="url">URL</label>
                                </p>

                                <p class="commentform-comment">
                                    <textarea id="comment" class="col-12" name="comment" rows="6" cols="25" placeholder="" required></textarea>
                                    <span></span>
                                    <label for="comment">Comment</label>
                                </p>

                                <p class="commentform-submit">
                                    <button class="btn btn-default btn-outline waves waves-dark" id="submit" type="submit" name="submit" value="">Send
                                        comment <i class="decode-icon-cursor"></i></button>
                                </p>

                            </fieldset>
                        </form>

                    </div><!-- col -->
                    <div class="col-md-4 pl-xl-5">

                        <div class="widget widget-search">

                            <form name="search" novalidate method="get" action="#">
                                <fieldset>
                                    <input id="s" type="search" name="search" placeholder="" required>
                                    <label for="s">Search</label>
                                    <span></span>
                                    <input type="submit" name="submit" value="">
                                </fieldset>
                            </form>

                        </div><!-- widget-search -->

                        <div class="widget widget-archives">

                            <h6 class="widget-title">Archives</h6>

                            <ul>
                                <li><a href="#">January 2019</a></li>
                                <li><a href="#">December 2018</a></li>
                                <li><a href="#">November 2018</a></li>
                                <li><a href="#">October 2018</a></li>
                                <li><a href="#">September 2018</a></li>
                                <li><a href="#">August 2018</a></li>
                            </ul>

                        </div><!-- widget-archives -->

                        <div class="widget widget-categories">

                            <h5 class="widget-title">Specialities</h5>

                            <ul>
                                <li><a href="#">Internal Medicine</a></li>
                                <li><a href="#">Emergency medicine</a></li>
                                <li><a href="#">Medical tests</a></li>
                                <li><a href="#">Dental surgery</a></li>
                                <li><a href="#">Plastic surgery</a></li>
                                <li><a href="#">Orthopedic surgery</a></li>
                            </ul>

                        </div><!-- widget-categories -->

                        <div class="widget widget-recent-posts">

                            <h5 class="widget-title">Latest News</h5>

                            <ul>
                                <li>
                                    <a class="post-title" href="#">10 Strangest Medical Cases</a>
                                    <div class="post-details">
                                        by <a class="post-author" href="#">admin</a>
                                        <a class="post-date" href="#">Jan 15, 2019</a>
                                    </div><!-- post-details -->
                                </li>
                                <li>
                                    <a class="post-title" href="#">Treatment of gingivitis</a>
                                    <div class="post-details">
                                        by <a class="post-author" href="#">admin</a>
                                        <a class="post-date" href="#">Jan 12, 2019</a>
                                    </div><!-- post-details -->
                                </li>
                                <li>
                                    <a class="post-title" href="#">An 'Universal' blood test</a>
                                    <div class="post-details">
                                        by <a class="post-author" href="#">admin</a>
                                        <a class="post-date" href="#">Jan 10, 2019</a>
                                    </div><!-- post-details -->
                                </li>
                            </ul>

                        </div><!-- widget-recent-posts -->

                        <div class="widget widget-text">

                            <h5 class="widget-title">Quote of day</h5>

                            <div>

                                <blockquote>
                                    <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo efficitur turpis
                                        vitae efficitur. Etiam a accumsan libero eu nisl odio porttitor commodo elit.&quot;</p>
                                </blockquote>

                            </div>

                        </div><!-- widget-text -->

                        <div class="widget widget-tags">

                            <h6 class="widget-title">Tags</h6>

                            <div>

                                <a href="#">surgery</a>
                                <a href="#">medical</a>
                                <a href="#">doctor</a>
                                <a href="#">clinic</a>
                                <a href="#">patient</a>
                                <a href="#">blood</a>
                                <a href="#">heart</a>
                                <a href="#">dental</a>
                                <a href="#">brain</a>

                            </div>

                        </div><!-- widget-tags -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- PAGE CONTENT -->

@endsection