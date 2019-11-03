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
                                <a href="news-single.html"><img src="{{ asset ('images/blog/image-5.jpg')}}" alt=""></a>

                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a href="news-single.html">Causes and treatment of gingivitis</a></h4>

                            <div class="blog-article-details">
                                by <a class="author" href="#">Admin</a>
                                in <a class="category" href="#">Stomatology</a>
                                <a class="comments" href="#">2 comments</a>
                            </div><!-- blog-article-details -->

                            <div class="blog-article-content">

                                <p>Quisque facilisis neque cursus eros pharetra, id hendrerit nunc porta ut nulla lobortis, accumsan arcu vitae, semper
                                    justo. Praesent ante leo, feugiat in lacus non, posuere ultricies nibh. Sed in sapien ut augue volutpat ultrices non
                                    pharetra ante. Suspendisse urna nibh, pellentesque ac tincidunt egestas, luctus non nulla...</p>

                                <a href="news-single.html">Read More</a>

                            </div><!-- blog-article-content -->

                        </div><!-- blog-article -->

                        <div class="blog-article">

                            <div class="blog-article-thumbnail">

                                <a class="date" href="#">
                                    <small>Jan</small>
                                    <span>12</span>
                                    <small>2019</small>
                                </a>
                                <a href="news-single.html"><img src="{{ asset ('asset/images/blog/image-6.jpg')}}" alt=""></a>

                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a href="news-single.html">Is Chemotherapy on the Way Out?</a></h4>

                            <div class="blog-article-details">
                                by <a class="author" href="#">Admin</a>
                                in <a class="category" href="#">Oncology</a>
                                <a class="comments" href="#">4 comments</a>
                            </div><!-- blog-article-details -->

                            <div class="blog-article-content">

                                <p>Praesent ante leo, feugiat in lacus non, posuere ultricies nibh. Sed in sapien ut augue volutpat ultrices non pharetra
                                    ante. Suspendisse urna nibh, pellentesque ac tincidunt egestas, luctus non nulla. Aliquam cursus vitae elit eget
                                    mollis. Duis accumsan rhoncus nunc, sed ultricies...</p>

                                <a href="news-single.html">Read More</a>

                            </div><!-- blog-article-content -->

                        </div><!-- blog-article -->

                        <div class="blog-article">

                            <div class="blog-article-thumbnail">

                                <a class="date" href="#">
                                    <small>Jan</small>
                                    <span>10</span>
                                    <small>2019</small>
                                </a>
                                <a href="news-single.html"><img src="{{ asset ('assets/images/blog/image-7.jpg')}}" alt=""></a>

                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a href="news-single.html">Developing a 'universal' blood test</a></h4>

                            <div class="blog-article-details">
                                by <a class="author" href="#">Admin</a>
                                in <a class="category" href="#">Cardiology</a>
                                <a class="comments" href="#">2 comments</a>
                            </div><!-- blog-article-details -->

                            <div class="blog-article-content">

                                <p>Aliquam erat volutpat. Quisque facilisis neque cursus eros pharetra, id hendrerit nunc porta ut nulla lobortis, accumsan
                                    arcu vitae, semper justo. Praesent ante leo, feugiat in lacus non, posuere ultricies nibh. Sed in sapien ut augue
                                    volutpat ultrices non pharetra ante. Suspendisse urna nibh, pellentesque ac tincidunt egestas...</p>

                                <a href="news-single.html">Read More</a>

                            </div><!-- blog-article-content -->

                        </div><!-- blog-article -->

                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>

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