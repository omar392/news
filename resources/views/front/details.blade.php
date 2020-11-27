@extends('front.layout.master')
@section('content')
<section id="entity_section" class="entity_section">
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <div class="entity_wrapper">
        <div class="entity_title">
            <h1><a href="#">Chevrolet car-saving technology delivers 'superhuman' sight when you need it most</a></h1>
        </div>
        <!-- entity_title -->
    
        <div class="entity_meta"><a href="#" target="_self">10Aug- 2015</a>, by: <a href="#" target="_self">Eric joan</a>
        </div>
        <!-- entity_meta -->
    
        <!-- entity_rating -->
    
    
        <div class="entity_thumb">
            <img class="img-responsive" src="{{asset('front/img/category_img_top.jpg')}}" alt="feature-top">
        </div>
        <!-- entity_thumb -->
    
        <div class="entity_content">
            <p>
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                pain was born and I will give you a complete account of the system, and expound the
                actual teachings of the great explorer of the truth, the master-builder of human
                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                but because those who do not know how to pursue pleasure rationally encounter
                consequences that are extremely painful.
            </p>
    
            <p>
                Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                because it is pain, but because occasionally circumstances occur in which toil and pain
                can procure him some great pleasure. To take a trivial example, which of us ever
                undertakes laborious physical exercise, except to obtain some advantage from it?
            </p>
    
            <blockquote class="pull-left">But I must explain to you how all this mistaken idea of denouncing pleasure
            </blockquote>
            <p> But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                On the other hand, we denounce with righteous indignation and dislike men who are so
                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                that they cannot foresee.Nor again is there anyone who loves or pursues or desires to
                obtain pain of itself, because it is pain, but because occasionally circumstances occur
                in which toil and pain can procure him some great pleasure. To take a trivial example,
                which of us ever undertakes laborious physical exercise, except to obtain some advantage
                from it? Nor again is there anyone who loves or pursues or desires to obtain pain of
                itself, because it is pain, but because occasionally circumstances occur in which toil
                and pain can procure him some great pleasure. To take a trivial example, which of us
                ever
            </p>
    
            <p>
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                pain was born and I will give you a complete account of the system, and expound the
                actual teachings of the great explorer of the truth, the master-builder of human
                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                but because those who do not know how to pursue pleasure rationally encounter
                consequences that are extremely painful.
            </p>
        </div>
        <!-- entity_content -->
    
        <div class="entity_footer">
            
            <!-- entity_tag -->
    
            <div class="entity_social">
                <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
            </div>
            <!-- entity_social -->
    
        </div>
        <!-- entity_footer -->
    
    </div>
    <!-- entity_wrapper -->
    
    <div class="related_news">
        <div class="entity_inner__title header_purple">
            <h2><a href="#">Related News</a></h2>
        </div>
        <!-- entity_title -->
    
        <div class="row">
            <div class="col-md-6">
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{asset('front/img/cat-mobi-sm1.jpg')}}"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>
    
                        <h3 class="media-heading"><a href="single.html" target="_self">Apple launches photo-centric wrist
                            watch for Android</a></h3>
                        <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
    
                        <div class="media_social">
                            <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                            <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related news -->
    
    
    <!--Advertisement-->
    
    <div class="readers_comment">
        <div class="entity_inner__title header_purple">
            <h2>Readers Comment</h2>
        </div>
        <!-- entity_title -->
    
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img alt="64x64" class="media-object" data-src="{{asset('front/img/reader_img1.jpg')}}"
                         src="{{asset('front/img/reader_img1.jpg')}}" data-holder-rendered="true">
                </a>
            </div>
            <div class="media-body">
                <h2 class="media-heading"><a href="#">Sr. Ryan</a></h2>
                But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
    
                <div class="entity_vote">
                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                    <a href="#"><span class="reply_ic">Reply </span></a>
                </div>
            </div>
    
        </div>
        <!-- media end -->
        <!-- media end -->
    </div>
    <!--Readers Comment-->
    
    <div class="widget_advertisement">
        <img class="img-responsive" src="{{asset('front/img/category_advertisement.jpg')}}" alt="feature-top">
    </div>
    <!--Advertisement-->
    
    <div class="entity_comments">
        <div class="entity_inner__title header_black">
            <h2>Add a Comment</h2>
        </div>
        <!--Entity Title -->
    
        <div class="entity_comment_from">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group comment">
                    <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
                </div>
    
                <button type="submit" class="btn btn-submit red">Submit</button>
            </form>
        </div>
        <!--Entity Comments From -->
    
    </div>
    <!--Entity Comments -->
    
    </div>
    <!--Left Section-->
    
    
<div class="col-md-4">
    <div class="widget">
        <div class="widget_title widget_black">
            <h2><a href="#">Most Viewed</a></h2>
        </div>
    
        @foreach ($shareData['most_viewed'] as $item)
        <div class="media">
            <div class="media-left">
            <a href="{{url('/details')}}/{{ $item->slug }}"><img class="media-object" src="{{asset('post')}}/{{ $item->thumb_image }}" alt="{{$item->title}}"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">
                    <a href="{{url('/details')}}/{{ $item->slug }}">{{$item->title}}</a>
                </h3> <span class="media-date"><a href="{{url('/author')}}/{{ $item->creator->id }}">{{date('j F -y',strtotime($item->created_at))}}</a>,  by: <a href="#">{{$item->creator->name}}</a></span>
    
                <div class="widget_article_social">
                    <span>
                    <a href="single.html"><i class="fa fa-comments-o"></i>{{count($item->comments)}}</a> Comments
                    </span>
                </div>
            </div>
        </div>   
         @endforeach
    <p class="widget_divider"><a href="{{url('/category')}}/{{$category->id}}" target="_self">More News&nbsp;&raquo;</a></p>
    </div>
    <!-- Popular News -->
    
    <div class="widget hidden-xs m30">
        <img class="img-responsive adv_img" src="{{asset('front/img/right_add1.jpg')}}" alt="add_one">
        <img class="img-responsive adv_img" src="{{asset('front/img/right_add2.jpg')}}" alt="add_one">
        <img class="img-responsive adv_img" src="{{asset('front/img/right_add3.jpg')}}" alt="add_one">
        <img class="img-responsive adv_img" src="{{asset('front/img/right_add4.jpg')}}" alt="add_one">
    </div>
    <!-- Advertisement -->
    
    
    <!-- Advertisement -->
    
    <div class="widget m30">
        <div class="widget_title widget_black">
            <h2><a href="#">Most Commented</a></h2>
        </div>
        @foreach ($shareData['most_commented'] as $item)
        <div class="media">
            <div class="media-left">
            <a href="{{url('/details')}}/{{ $item->slug }}"><img class="media-object" 
                src="{{asset('post')}}/{{ $item->thumb_image }}" alt="{{$item->title}}" alt="{{$item->title}}"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">
                <a href="{{url('/details')}}/{{$item->slug}}">{{$item->title}}</a>
                </h3>
    
                <div class="media_social">
                    <span><i class="fa fa-comments-o"></i><a href="#">{{$item->comments_count}}</a> Comments</span>
                </div>
            </div>
        </div>
        @endforeach
        <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
    </div>
    <!-- Most Commented News -->
    
    <div class="widget m30">
        <div class="widget_title widget_black">
            <h2><a href="#">Editor Corner</a></h2>
        </div>
        <div class="widget_body"><img class="img-responsive left" src="{{asset('front/img/editor.jpg')}}"
                                      alt="Generic placeholder image">
    
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                users after installed base benefits. Dramatically visualize customer directed convergence without</p>
    
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                users after installed base benefits. Dramatically visualize customer directed convergence without
                revolutionary ROI.</p>
            <button class="btn pink">Read more</button>
        </div>
    </div>
    <!-- Editor News -->
    
    <div class="widget hidden-xs m30">
        <img class="img-responsive add_img" src="{{asset('front/img/right_add7.jpg')}}" alt="add_one">
        <img class="img-responsive add_img" src="{{asset('front/img/right_add7.jpg')}}" alt="add_one">
        <img class="img-responsive add_img" src="{{asset('front/img/right_add7.jpg')}}" alt="add_one">
        <img class="img-responsive add_img" src="{{asset('front/img/right_add7.jpg')}}" alt="add_one">
    </div>
    <!--Advertisement -->
    
    <div class="widget m30">
        <div class="widget_title widget_black">
            <h2><a href="#">Readers Corner</a></h2>
        </div>
        <div class="widget_body"><img class="img-responsive left" src="{{asset('front/img/reader.jpg')}}"
                                      alt="Generic placeholder image">
    
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                users after installed base benefits. Dramatically visualize customer directed convergence without</p>
    
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                users after installed base benefits. Dramatically visualize customer directed convergence without
                revolutionary ROI.</p>
            <button class="btn pink">Read more</button>
        </div>
    </div>
    <!--  Readers Corner News -->
    
    <div class="widget hidden-xs m30">
        <img class="img-responsive widget_img" src="{{asset('front/img/podcast.jpg')}}" alt="add_one">
    </div>
    <!--Advertisement-->
    </div>
    <!-- Right Section -->
    
    </div>
    <!-- Row -->
    
    </div>
    <!-- Container -->
    
    </section>
    <!-- Category News Section -->
    
    <section id="video_section" class="video_section">
        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MJ-jbFdUPns"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                        <!-- embed-responsive -->
    
                    </div>
                    <!-- col-md-6 -->
    
                    <div class="col-md-3">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Jni-vy_5M"></iframe>
                        </div>
                        <!-- embed-responsive -->
    
                        <div class="embed-responsive embed-responsive-4by3 m16">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wQ5Gj0UB_R8"></iframe>
                        </div>
                        <!-- embed-responsive -->
    
                    </div>
                    <!-- col-md-3 -->
    
                    <div class="col-md-3">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UPvJXBI_3V4"></iframe>
                        </div>
                        <!-- embed-responsive -->
    
                        <div class="embed-responsive embed-responsive-4by3 m16">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DTCtj5Wz6BM"></iframe>
                        </div>
                        <!-- embed-responsive -->
    
                    </div>
                    <!-- col-md-3 -->
    
                </div>
                <!-- row -->
    
            </div>
            <!-- well -->
    
        </div>
        <!-- Container -->
    
    
    
    </section>
    <!-- Entity Section Wrapper -->
@endsection