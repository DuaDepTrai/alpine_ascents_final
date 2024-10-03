@extends('layouts.app')

@section('content')
<div class="banner-image">
    <div class="header-image">
        <div class="header-text-wrapper">
            <div class="header-text">
                <span>
                    <h3>{{ $tour->name }} With Alpine Ascents</h3>
                </span>
            </div><!-- .header-text -->
        </div><!-- .header-text-wrapper -->
    </div><!-- .header-image -->
    </div><!-- .header-image -->
</div><!-- .banner-image -->
<div class="page-titles">
    <div class="container">
        <h1></h1>
    </div><!-- .container -->
</div><!-- .page-titles -->
<div id="secondary-navigation">
    <nav id="site-navigation" class="main-navigation" role="navigation"> <button class="menu-toggle"
            aria-controls="primary-menu" aria-expanded="false">DETAILS <i class="fas fa-angle-down"
                aria-hidden="true"></i></button>
        <div class="menu-primary-links-container">
            <div class="menu-mount-kilimanjaro-container">
                <ul id="menu-primary-links" class="menu">

                </ul>
            </div>
        </div><!-- .menu-primary-links-container -->
    </nav>
</div><!-- #secondary-navigation -->
<div id="page" class="site"> <a class="skip-link screen-reader-text" href="#content">Skip to
        content</a>
    <div id="content" class="site-content">
        <script type="text/javascript">
            function getHash() {
                return document.location.hash.substr(1);
            }
            jQuery(document).ready(function($) {
                if (document.location.hash != '') {
                    $('#sectionName').html(getHash());
                }
                $(window).bind('hashchange', function() {
                    $('#sectionName').html(getHash());
                });
                $('ul.tabs').each(function() {
                    // For each set of tabs, we want to keep track of
                    // which tab is active and its associated content
                    var $active, $content, $links = $(this).find(
                        'a'); // If the location.hash matches one of the links, use that as the active tab.
                    // If no match is found, use the first link as the initial active tab.
                    $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
                    $active.addClass('active');
                    $content = $($active[0].hash);
                    // Hide the remaining content
                    $links.not($active).each(function() {
                        $(this.hash).hide();
                    });
                    // Bind the click event handler
                    $(this).on('click', 'a', function(e) {
                        // Make the old tab inactive.
                        $active.removeClass('active');
                        $content.hide();
                        // Update the variables with the new link and content
                        $active = $(this);
                        $content = $(this.hash);
                        // Make the tab active.
                        $active.addClass('active');
                        $content.show();
                        // Prevent the anchor's default click action
                        e.preventDefault();
                    });
                });
                $('.faq_question').click(function() {
                    if ($(this).parent().is('.open')) {
                        $(this).closest('.faq').find('.faq_answer_container').animate({
                            'height': '0'
                        }, 500);
                        $(this).closest('.faq').removeClass('open');
                        $(this).parent().find('.accordion-button-icon').removeClass('fa-minus').addClass(
                            'fa-plus');
                    } else {
                        var newHeight = $(this).closest('.faq').find('.faq_answer').height() + 'px';
                        $(this).closest('.faq').find('.faq_answer_container').animate({
                            'height': newHeight
                        }, 500);
                        $(this).closest('.faq').addClass('open');
                        $(this).parent().find('.accordion-button-icon').removeClass('fa-plus').addClass(
                            'fa-minus');
                    }
                });
            });
        </script>
        <div id="tabs" style="width: 70%; margin: 0 auto;">
            <div class="tab-wrapper container">
                <ul class="tabs group nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" name="about" href="#about">Location</a></li>
                    <li class="nav-item"><a class="nav-link" name="Feature" href="#Feature">Feature</a></li>
                    <li class="nav-item"><a class="nav-link" name="Best_Time" href="#Best_Time">Best Time</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" name="Checking_Routes"
                            href="#Checking_Routes">Checking
                            Routes</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" name="Direction" href="#Direction">Direction</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" name="Essential_Items"
                            href="#Essential_Items">Essential
                            Items</a>
                    </li>
                </ul>
            </div><!-- .tab-wrapper .container -->
            <div id="tab-block">
                <div class="container">
                    <div class="page-margin">
                        <div id="about" class="tab-content">
                            <div class="sb-content-wrapper">
                                <div class="sb-content">
                                    <h2 class="section-title">Where is it?ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</h2>
                                    <div>
                                        {!! str_replace('.', '.<br>', $tour->location) !!}
                                </div>
                                </div><!-- .sb-content -->
                            </div><!-- .sb-content-wrapper -->
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class='actnew'>{{ $tour->name }} Prices</h2>
                                    <p>{{ number_format($tour->price, 0, ',', '.') }} VNĐ (<em>based on 5
                                            climber team</em>)</p>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <div class="orange-btn"><a href="/order">Order</a>
                                    <a href="/galleries">Gallery</a></div>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <h2 class='actnew'>Other notes</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->caution) !!}</strong><br /></p>
                                    <h2 class='actnew'>Participation Requirements</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->requirements) !!}</strong><br /></p>
                                </div><!-- .widget -->
                            </div><!-- .sidebar -->
                        </div><!-- #about -->
                        <div id="Feature" class="tab-content">
                            <div class="sb-content-wrapper">
                                <div class="sb-content">
                                    <h2 class="section-title">Wonderful Experience with {{ $tour->name }}ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</h2>
                                    <div>
                                        {!! str_replace('.', '.<br>', $tour->features) !!}
                                    </div>
                                </div><!-- .sb-content -->
                            </div><!-- .sb-content-wrapper -->
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class='actnew'>{{ $tour->name }} Prices</h2>
                                    <p>{{ number_format($tour->price, 0, ',', '.') }} VNĐ (<em>based on 5
                                            climber team</em>)</p>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <div class="orange-btn"><a href="/order">Order</a>
                                    <a href="/galleries">Gallery</a></div>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <h2 class='actnew'>Other notes</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->caution) !!}</strong><br /></p>
                                    <h2 class='actnew'>Participation Requirements</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->requirements) !!}</strong><br /></p>
                                </div><!-- .widget -->
                            </div><!-- .sidebar -->
                        </div><!-- #Feature -->
                        <div id="Best_Time" class="tab-content">
                            <div class="sb-content-wrapper">
                                <div class="sb-content">
                                    <h2 class="section-title">The ideal time of year to exploreㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</h2>
                                    <div>
                                        {!! str_replace('.', '.<br>', $tour->besttime) !!}
                                </div>
                                </div><!-- .sb-content -->
                            </div><!-- .sb-content-wrapper -->
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class='actnew'>{{ $tour->name }} Prices</h2>
                                    <p>{{ number_format($tour->price, 0, ',', '.') }} VNĐ (<em>based on 5
                                            climber team</em>)</p>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <div class="orange-btn"><a href="/order">Order</a>
                                    <a href="/galleries">Gallery</a></div>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <h2 class='actnew'>Other notes</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->caution) !!}</strong><br /></p>
                                    <h2 class='actnew'>Participation Requirements</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->requirements) !!}</strong><br /></p>
                                </div><!-- .widget -->
                            </div><!-- .sidebar -->
                        </div><!-- #Best_Time -->
                        <div id="Checking_Routes" class="tab-content">
                            <div class="sb-content-wrapper">
                                <div class="sb-content">
                                    <h2 class="section-title">The route to conquerㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</h2>
                                    <div>
                                        {!! str_replace('.', '.<br>', $tour->trekkingroutes) !!}
                                </div>
                                </div><!-- .sb-content -->
                            </div><!-- .sb-content-wrapper -->
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class='actnew'>{{ $tour->name }} Prices</h2>
                                    <p>{{ number_format($tour->price, 0, ',', '.') }} VNĐ (<em>based on 5
                                            climber team</em>)</p>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <div class="orange-btn"><a href="/order">Order</a>
                                    <a href="/galleries">Gallery</a></div>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <h2 class='actnew'>Other notes</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->caution) !!}</strong><br /></p>
                                    <h2 class='actnew'>Participation Requirements</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->requirements) !!}</strong><br /></p>
                                </div><!-- .widget -->
                            </div><!-- .sidebar -->
                        </div><!-- #Checking_Routes -->
                        <div id="Direction" class="tab-content" style="height: 510px;">
                            <div class="sb-content-wrapper">
                                <div class="sb-content">
                                    <h2 class="section-title">How to get thereㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</h2>
                                    <div>
                                        {!! str_replace('.', '.<br>', $tour->directions) !!}
                                </div>

                                </div><!-- .sb-content -->
                            </div><!-- .sb-content-wrapper -->
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class='actnew'>{{ $tour->name }} Prices</h2>
                                    <p>{{ number_format($tour->price, 0, ',', '.') }} VNĐ (<em>based on 5
                                            climber team</em>)</p>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <div class="orange-btn"><a href="/order">Order</a>
                                    <a href="/galleries">Gallery</a></div>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <h2 class='actnew'>Other notes</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->caution) !!}</strong><br /></p>
                                    <h2 class='actnew'>Participation Requirements</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->requirements) !!}</strong><br /></p>
                                </div><!-- .widget -->
                            </div><!-- .sidebar -->
                        </div><!-- #Direction -->
                        <div id="Essential_Items" class="tab-content" style="height: 510px;">
                            <div class="sb-content-wrapper">
                                <div class="sb-content">
                                    <h2 class="section-title">Essential itemsㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</h2>
                                    <div>
                                        {!! str_replace('.', '.<br>', $tour->items) !!}
                                </div>
                                </div><!-- .sb-content -->
                            </div><!-- .sb-content-wrapper -->
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class='actnew'>{{ $tour->name }} Prices</h2>
                                    <p>{{ number_format($tour->price, 0, ',', '.') }} VNĐ (<em>based on 5
                                            climber team</em>)</p>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <div class="orange-btn"><a href="/order">Order</a>
                                    <a href="/galleries">Gallery</a></div>
                                </div><!-- .widget -->
                                <div class="widget">
                                    <h2 class='actnew'>Other notes</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->caution) !!}</strong><br /></p>
                                    <h2 class='actnew'>Participation Requirements</h2>
                                    <p><strong>{!! str_replace('.', '.<br>', $tour->requirements) !!}</strong><br /></p>
                                </div><!-- .widget -->
                            </div><!-- .sidebar -->
                        </div><!-- #Essential_Items -->
                    </div><!-- .page-margin -->
                </div><!-- .container -->
            </div><!-- #tab-block -->
        </div><!--#tabs-->
    </div><!-- #content -->
@endsection

@push('styles')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://www.alpineascents.com/xmlrpc.php">
    <!--[if LTE IE 9]><link rel="stylesheet" type="text/css" href="https://www.alpineascents.com/wp-content/themes/alpine-ascents/css/ie9.css"> <![endif]-->
    <link rel="stylesheet" type="text/css"
        href="https://www.alpineascents.com/wp-content/themes/alpine-ascents/style.css" media="screen" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <!-- Jetpack Site Verification Tags -->
    <!-- This site is optimized with the Yoast SEO plugin v23.4 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Climb Mount Everest - Alpine Ascents | Mount Everest Guides</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <style type="text/css">
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWVAexQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4gaVc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4gaVc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs169vsUZiYA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs1_FvsUZiYA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZosUZiYA.ttf) format('truetype');
        }
    </style>
    <style>
        .site-footer {
    background-color: #f8f8f8;
    padding: 20px 0;
}

.container {
    display: flex;
    justify-content: flex-start; /* Căn trái các phần tử */
    flex-wrap: wrap;
}

.footer-left {
    flex: 1;
    padding: 10px;
    max-width: 50%;
    margin-left: 0; /* Đẩy sát lề trái */
}

.footer-right {
    flex: 1;
    padding: 10px;
    max-width: 50%;
    text-align: center;
}

.footer-right img {
    max-width: 100%;
    height: auto;
    width: 350px; /* Đặt chiều rộng cố định */
    height: 150px; /* Đặt chiều cao cố định */
}

h3 {
    margin-top: 0;
}
</style>
<style>
    .header-image {
        background-image: url('/{{ $tour->image }}');
    }
</style>
    <meta name="description"
        content="With 25+ years of experience on Everest, Alpine Ascents is recognized as the premier guide service to provide you a rewarding experience on Mount Everest." />
    <link rel="canonical" href="https://www.alpineascents.com/climbs/mount-everest/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Climb Mount Everest - Alpine Ascents | Mount Everest Guides" />
    <meta property="og:description"
        content="With 25+ years of experience on Everest, Alpine Ascents is recognized as the premier guide service to provide you a rewarding experience on Mount Everest." />
    <meta property="og:url" content="https://www.alpineascents.com/climbs/mount-everest/" />
    <meta property="og:site_name" content="Alpine Ascents International" />
    <meta property="article:modified_time" content="2024-06-11T17:42:05+00:00" />
    <meta property="og:image" content="https://www.alpineascents.com/wp-content/uploads/2016/07/everest-ff1.jpg" />
    <meta property="og:image:width" content="1500" />
    <meta property="og:image:height" content="900" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Climb Mount Everest - Alpine Ascents | Mount Everest Guides" />
    <meta name="twitter:description"
        content="With 25+ years of experience on Everest, Alpine Ascents is recognized as the premier guide service to provide you a rewarding experience on Mount Everest." />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.alpineascents.com/climbs/mount-everest/","url":"https://www.alpineascents.com/climbs/mount-everest/","name":"Climb Mount Everest - Alpine Ascents | Mount Everest Guides","isPartOf":{"@id":"https://www.alpineascents.com/#website"},"primaryImageOfPage":{"@id":"https://www.alpineascents.com/climbs/mount-everest/#primaryimage"},"image":{"@id":"https://www.alpineascents.com/climbs/mount-everest/#primaryimage"},"thumbnailUrl":"https://i0.wp.com/www.alpineascents.com/wp-content/uploads/2016/06/everest-thumb.jpg?fit=381%2C387&ssl=1","datePublished":"2016-03-31T22:20:41+00:00","dateModified":"2024-06-11T17:42:05+00:00","description":"With 25+ years of experience on Everest, Alpine Ascents is recognized as the premier guide service to provide you a rewarding experience on Mount Everest.","breadcrumb":{"@id":"https://www.alpineascents.com/climbs/mount-everest/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.alpineascents.com/climbs/mount-everest/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://www.alpineascents.com/climbs/mount-everest/#primaryimage","url":"https://i0.wp.com/www.alpineascents.com/wp-content/uploads/2016/06/everest-thumb.jpg?fit=381%2C387&ssl=1","contentUrl":"https://i0.wp.com/www.alpineascents.com/wp-content/uploads/2016/06/everest-thumb.jpg?fit=381%2C387&ssl=1","width":381,"height":387,"caption":"Everest Base Camp Trek"},{"@type":"BreadcrumbList","@id":"https://www.alpineascents.com/climbs/mount-everest/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.alpineascents.com/"},{"@type":"ListItem","position":2,"name":"Climbs","item":"https://www.alpineascents.com/climbs/"},{"@type":"ListItem","position":3,"name":"Mount Everest"}]},{"@type":"WebSite","@id":"https://www.alpineascents.com/#website","url":"https://www.alpineascents.com/","name":"Alpine Ascents International","description":"International Mountain Climbing and Climbing School","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.alpineascents.com/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"}]}</script> <!-- / Yoast SEO plugin. -->
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//use.fontawesome.com' />
    <link rel='dns-prefetch' href='//stats.wp.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//v0.wordpress.com' />
    <link rel='dns-prefetch' href='//i0.wp.com' />
    <link rel='dns-prefetch' href='//c0.wp.com' />
    <link rel="alternate" type="application/rss+xml" title="Alpine Ascents International » Feed"
        href="https://www.alpineascents.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Alpine Ascents International » Comments Feed"
        href="https://www.alpineascents.com/comments/feed/" />
    <link rel='stylesheet' id='mediaelement-css'
        href='https://c0.wp.com/c/6.6.1/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css'
        href='https://c0.wp.com/c/6.6.1/wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css'
        media='all' />
    <style id='jetpack-sharing-buttons-style-inline-css' type='text/css'>
        .jetpack-sharing-buttons__services-list {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 0;
            list-style-type: none;
            margin: 5px;
            padding: 0
        }

        .jetpack-sharing-buttons__services-list.has-small-icon-size {
            font-size: 12px
        }

        .jetpack-sharing-buttons__services-list.has-normal-icon-size {
            font-size: 16px
        }

        .jetpack-sharing-buttons__services-list.has-large-icon-size {
            font-size: 24px
        }

        .jetpack-sharing-buttons__services-list.has-huge-icon-size {
            font-size: 36px
        }

        @media print {
            .jetpack-sharing-buttons__services-list {
                display: none !important
            }
        }

        .editor-styles-wrapper .wp-block-jetpack-sharing-buttons {
            gap: 0;
            padding-inline-start: 0
        }

        ul.jetpack-sharing-buttons__services-list.has-background {
            padding: 1.25em 2.375em
        }
    </style>
    <link rel='stylesheet' id='client_portal-css'
        href='https://www.alpineascents.com/wp-content/mu-plugins/aa-client-portal-wp-plugin/public/css/client_portal-public.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='jQueryUICSS-css'
        href='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='Bootstrap4CSSMin-css'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css?ver=6.6.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wcpf-plugin-style-css'
        href='https://www.alpineascents.com/wp-content/plugins/woocommerce-product-filters/assets/css/plugin.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://c0.wp.com/p/woocommerce/9.2.3/assets/css/woocommerce-layout.css' type='text/css'
        media='all' />
    <style id='woocommerce-layout-inline-css' type='text/css'>
        .infinite-scroll .woocommerce-pagination {
            display: none;
        }
    </style>
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://c0.wp.com/p/woocommerce/9.2.3/assets/css/woocommerce-smallscreen.css' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://c0.wp.com/p/woocommerce/9.2.3/assets/css/woocommerce.css' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href='https://c0.wp.com/c/6.6.1/wp-includes/css/dashicons.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sliderpro-plugin-style-css'
        href='https://www.alpineascents.com/wp-content/plugins/sliderpro/public/assets/css/slider-pro.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='aa-woo-style-css'
        href='https://www.alpineascents.com/wp-content/themes/alpine-ascents/aa-woo-style.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='ubermenu-css'
        href='https://www.alpineascents.com/wp-content/plugins/ubermenu/pro/assets/css/ubermenu.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ubermenu-font-awesome-all-css'
        href='https://www.alpineascents.com/wp-content/plugins/ubermenu/assets/fontawesome/css/all.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='jetpack_css-css' href='https://c0.wp.com/p/jetpack/13.7/css/jetpack.css'
        type='text/css' media='all' />
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js">
    </script>
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/jquery/jquery-migrate.min.js"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/jquery/ui/core.min.js"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/jquery/ui/datepicker.min.js"
        id="jquery-ui-datepicker-js"></script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        /* <![CDATA[ */
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
        /* ]]> */
    </script>
    <script type="text/javascript" id="client_portal-js-extra">
        /* <![CDATA[ */
        var cartCount = {
            "count": "0"
        };
        var client_portal_notifications = [];
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.alpineascents.com/wp-content/mu-plugins/aa-client-portal-wp-plugin/public/js/client_portal-public.js"
        id="client_portal-js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js?ver=6.6.1"
        id="BootstrapJSBundleMin-js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js?ver=6.6.1"
        id="jQueryValidate-js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js?ver=6.6.1"
        id="jQueryValidateAddMeth-js"></script>
    <script type="text/javascript" src="https://use.fontawesome.com/576795f398.js?ver=6.6.1" id="FontAwesome4.7-js">
    </script>
    <script type="text/javascript" id="registrationJS-js-extra">
        /* <![CDATA[ */
        var anonRegistrationUrl = "https:\/\/admin.alpineascents.com\/api\/registration\/anon\/new";
        var aaAjax = {
            "url": "https:\/\/www.alpineascents.com\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.alpineascents.com/wp-content/mu-plugins/aa-client-portal-wp-plugin/public/js/registration.js"
        id="registrationJS-js"></script>
    <script type="text/javascript" id="tripJS-js-extra">
        /* <![CDATA[ */
        var aaAjax = {
            "url": "https:\/\/www.alpineascents.com\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.alpineascents.com/wp-content/mu-plugins/aa-client-portal-wp-plugin/public/js/trip.js"
        id="tripJS-js"></script>
    <script type="text/javascript" id="climberPortalModalJS-js-extra">
        /* <![CDATA[ */
        var climberPortal = {
            "url": "https:\/\/www.alpineascents.com",
            "adminAjax": "https:\/\/www.alpineascents.com\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.alpineascents.com/wp-content/mu-plugins/aa-client-portal-wp-plugin/public/js/modal.js"
        id="climberPortalModalJS-js"></script>
    <script type="text/javascript" src="//www.alpineascents.com/wp-content/plugins/revslider/sr6/assets/js/rbtools.min.js"
        defer async id="tp-tools-js"></script>
    <script type="text/javascript" src="//www.alpineascents.com/wp-content/plugins/revslider/sr6/assets/js/rs6.min.js" defer
        async id="revmin-js"></script>
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/jquery/ui/mouse.min.js"
        id="jquery-ui-mouse-js"></script>
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/jquery/ui/slider.min.js"
        id="jquery-ui-slider-js"></script>
    <script type="text/javascript"
        src="https://www.alpineascents.com/wp-content/plugins/woocommerce-product-filters/assets/js/front-vendor.js"
        id="wcpf-plugin-vendor-script-js"></script>
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/underscore.min.js" id="underscore-js">
    </script>
    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://c0.wp.com/c/6.6.1/wp-includes/js/wp-util.min.js" id="wp-util-js"></script>
    <script type="text/javascript" src="https://c0.wp.com/p/woocommerce/9.2.3/assets/js/accounting/accounting.min.js"
        id="accounting-js"></script>
    <script type="text/javascript" id="wcpf-plugin-script-js-extra">
        /* <![CDATA[ */
        var WCPFData = {
            "registerEntities": {
                "Project": {
                    "id": "Project",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_project",
                    "label": "Project",
                    "default_options": {
                        "urlNavigation": "query",
                        "filteringStarts": "auto",
                        "urlNavigationOptions": [],
                        "useComponents": ["pagination", "sorting", "results-count", "page-title", "breadcrumb"],
                        "paginationAjax": true,
                        "sortingAjax": true,
                        "productsContainerSelector": ".products",
                        "paginationSelector": ".woocommerce-pagination",
                        "resultCountSelector": ".woocommerce-result-count",
                        "sortingSelector": ".woocommerce-ordering",
                        "pageTitleSelector": ".woocommerce-products-header__title",
                        "breadcrumbSelector": ".woocommerce-breadcrumb",
                        "multipleContainersForProducts": true
                    },
                    "is_grouped": true,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Project\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Project\\Filter_Component",
                    "variations": false
                },
                "BoxListField": {
                    "id": "BoxListField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Box List",
                    "default_options": {
                        "itemsSource": "attribute",
                        "itemsDisplay": "all",
                        "queryType": "or",
                        "itemsDisplayHierarchical": true,
                        "displayHierarchicalCollapsed": false,
                        "displayTitle": true,
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "cssClass": "",
                        "actionForEmptyOptions": "hide",
                        "displayProductCount": true,
                        "productCountPolicy": "for-option-only",
                        "multiSelect": true,
                        "boxSize": "45px"
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Box_list\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Box_List\\Filter_Component",
                    "variations": true
                },
                "CheckBoxListField": {
                    "id": "CheckBoxListField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Checkbox",
                    "default_options": {
                        "itemsSource": "attribute",
                        "itemsDisplay": "all",
                        "queryType": "or",
                        "itemsDisplayHierarchical": true,
                        "displayHierarchicalCollapsed": false,
                        "displayTitle": true,
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "cssClass": "",
                        "actionForEmptyOptions": "hide",
                        "displayProductCount": true,
                        "productCountPolicy": "for-option-only",
                        "seeMoreOptionsBy": "scrollbar",
                        "heightOfVisibleContent": 12
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Check_Box_List\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Check_Box_List\\Filter_Component",
                    "variations": true
                },
                "DropDownListField": {
                    "id": "DropDownListField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Drop Down",
                    "default_options": {
                        "itemsSource": "attribute",
                        "itemsDisplay": "all",
                        "queryType": "or",
                        "itemsDisplayHierarchical": true,
                        "displayHierarchicalCollapsed": false,
                        "displayTitle": true,
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "cssClass": "",
                        "actionForEmptyOptions": "hide",
                        "displayProductCount": true,
                        "productCountPolicy": "for-option-only",
                        "titleItemReset": "Show all"
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Drop_Down_List\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Drop_Down_List\\Filter_Component",
                    "variations": true
                },
                "ButtonField": {
                    "id": "ButtonField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Button",
                    "default_options": {
                        "cssClass": "",
                        "action": "reset"
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Button\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Button\\Filter_Component",
                    "variations": true
                },
                "ColorListField": {
                    "id": "ColorListField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Colors",
                    "default_options": {
                        "itemsSource": "attribute",
                        "itemsDisplay": "all",
                        "queryType": "or",
                        "itemsDisplayHierarchical": true,
                        "displayHierarchicalCollapsed": false,
                        "displayTitle": true,
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "cssClass": "",
                        "actionForEmptyOptions": "hide",
                        "displayProductCount": true,
                        "productCountPolicy": "for-option-only",
                        "optionKey": "colors"
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Color_List\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Color_List\\Filter_Component",
                    "variations": true
                },
                "RadioListField": {
                    "id": "RadioListField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Radio",
                    "default_options": {
                        "itemsSource": "attribute",
                        "itemsDisplay": "all",
                        "queryType": "or",
                        "itemsDisplayHierarchical": true,
                        "displayHierarchicalCollapsed": false,
                        "displayTitle": true,
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "cssClass": "",
                        "actionForEmptyOptions": "hide",
                        "displayProductCount": true,
                        "productCountPolicy": "for-option-only",
                        "titleItemReset": "Show all",
                        "seeMoreOptionsBy": "scrollbar",
                        "heightOfVisibleContent": 12
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Radio_List\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Radio_List\\Filter_Component",
                    "variations": true
                },
                "TextListField": {
                    "id": "TextListField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Text List",
                    "default_options": {
                        "itemsSource": "attribute",
                        "itemsDisplay": "all",
                        "queryType": "or",
                        "itemsDisplayHierarchical": true,
                        "displayHierarchicalCollapsed": false,
                        "displayTitle": true,
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "cssClass": "",
                        "actionForEmptyOptions": "hide",
                        "displayProductCount": true,
                        "productCountPolicy": "for-option-only",
                        "multiSelect": true,
                        "useInlineStyle": false
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Text_List\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Text_List\\Filter_Component",
                    "variations": true
                },
                "PriceSliderField": {
                    "id": "PriceSliderField",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Price slider",
                    "default_options": {
                        "minPriceOptionKey": "min-price",
                        "maxPriceOptionKey": "max-price",
                        "optionKey": "price",
                        "optionKeyFormat": "dash",
                        "cssClass": "",
                        "displayMinMaxInput": true,
                        "displayTitle": true,
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "displayPriceLabel": true
                    },
                    "is_grouped": false,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Price_Slider\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Field\\Price_Slider\\Filter_Component",
                    "variations": false
                },
                "SimpleBoxLayout": {
                    "id": "SimpleBoxLayout",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Simple Box",
                    "default_options": {
                        "displayToggleContent": true,
                        "defaultToggleState": "show",
                        "cssClass": ""
                    },
                    "is_grouped": true,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Layout\\Simple_Box\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Layout\\Simple_Box\\Filter_Component",
                    "variations": false
                },
                "ColumnsLayout": {
                    "id": "ColumnsLayout",
                    "class": "WooCommerce_Product_Filter_Plugin\\Entity",
                    "post_type": "wcpf_item",
                    "label": "Columns",
                    "default_options": {
                        "columns": [{
                            "entities": [],
                            "options": {
                                "width": "50%"
                            }
                        }]
                    },
                    "is_grouped": true,
                    "editor_component_class": "WooCommerce_Product_Filter_Plugin\\Layout\\Columns\\Editor_Component",
                    "filter_component_class": "WooCommerce_Product_Filter_Plugin\\Layout\\Columns\\Filter_Component",
                    "variations": false
                }
            },
            "messages": {
                "selectNoMatchesFound": "No matches found"
            },
            "selectors": {
                "productsContainer": ".products",
                "paginationContainer": ".woocommerce-pagination",
                "resultCount": ".woocommerce-result-count",
                "sorting": ".woocommerce-ordering",
                "pageTitle": ".woocommerce-products-header__title",
                "breadcrumb": ".woocommerce-breadcrumb"
            },
            "pageUrl": "https:\/\/www.alpineascents.com\/climbs\/mount-everest\/",
            "isPaged": "",
            "scriptAfterProductsUpdate": "",
            "scrollTop": "no",
            "priceFormat": {
                "currencyFormatNumDecimals": 0,
                "currencyFormatSymbol": "$",
                "currencyFormatDecimalSep": ".",
                "currencyFormatThousandSep": ",",
                "currencyFormat": "%s%v"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.alpineascents.com/wp-content/plugins/woocommerce-product-filters/assets/build/js/plugin.js"
        id="wcpf-plugin-script-js"></script>
    <script type="text/javascript" id="wcpf-plugin-script-js-after">
        /* <![CDATA[ */
        (function() {
            window.addEventListener('load', function() {
                jQuery(window).on('wcpf_update_products', function() {
                    jQuery(document.body).trigger('jetpack-lazy-images-load');
                });
                jQuery(document).on('berocket_lmp_end', function() {
                    jQuery(document.body).trigger('jetpack-lazy-images-load');
                });
                jQuery(document).on('yith_infs_added_elem', function() {
                    jQuery(document.body).trigger('jetpack-lazy-images-load');
                });
            });
        })();
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://c0.wp.com/p/woocommerce/9.2.3/assets/js/jquery-blockui/jquery.blockUI.min.js" id="jquery-blockui-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/www.alpineascents.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://c0.wp.com/p/woocommerce/9.2.3/assets/js/frontend/add-to-cart.min.js"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="https://c0.wp.com/p/woocommerce/9.2.3/assets/js/js-cookie/js.cookie.min.js"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://c0.wp.com/p/woocommerce/9.2.3/assets/js/frontend/woocommerce.min.js"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="https://www.alpineascents.com/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://www.alpineascents.com/wp-json/wp/v2/pages/128" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://www.alpineascents.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.1" />
    <meta name="generator" content="WooCommerce 9.2.3" />
    <link rel='shortlink' href='https://wp.me/PaFqHI-24' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://www.alpineascents.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.alpineascents.com%2Fclimbs%2Fmount-everest%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://www.alpineascents.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.alpineascents.com%2Fclimbs%2Fmount-everest%2F&format=xml" />
    <style id="ubermenu-custom-generated-css">
        /** Font Awesome 4 Compatibility **/
        .fa {
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            font-family: FontAwesome;
        }

        /** UberMenu Responsive Styles (Breakpoint Setting) **/
        @media screen and (min-width: 1011px) {
            .ubermenu {
                display: block !important;
            }

            .ubermenu-responsive .ubermenu-item.ubermenu-hide-desktop {
                display: none !important;
            }

            .ubermenu-responsive.ubermenu-retractors-responsive .ubermenu-retractor-mobile {
                display: none;
            }

            /* Top level items full height */
            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-nav {
                display: flex;
                align-items: stretch;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0 {
                display: flex;
                flex-direction: column;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target {
                flex: 1;
                display: flex;
                align-items: center;
                flex-wrap: wrap;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target>.ubermenu-target-divider {
                position: static;
                flex-basis: 100%;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target.ubermenu-item-layout-image_left>.ubermenu-target-text {
                padding-left: 1em;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target.ubermenu-item-layout-image_right>.ubermenu-target-text {
                padding-right: 1em;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target.ubermenu-item-layout-image_above,
            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target.ubermenu-item-layout-image_below {
                flex-direction: column;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-submenu-drop {
                top: 100%;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item-level-0:not(.ubermenu-align-right)+.ubermenu-item.ubermenu-align-right {
                margin-left: auto;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target.ubermenu-content-align-left {
                justify-content: flex-start;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target.ubermenu-content-align-center {
                justify-content: center;
            }

            .ubermenu.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-target.ubermenu-content-align-right {
                justify-content: flex-end;
            }

            /* Force current submenu always open but below others */
            .ubermenu-force-current-submenu .ubermenu-item-level-0.ubermenu-current-menu-item>.ubermenu-submenu-drop,
            .ubermenu-force-current-submenu .ubermenu-item-level-0.ubermenu-current-menu-ancestor>.ubermenu-submenu-drop {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
                margin: 0 !important;
                top: auto !important;
                height: auto;
                z-index: 19;
            }

            /* Invert Horizontal menu to make subs go up */
            .ubermenu-invert.ubermenu-horizontal .ubermenu-item-level-0>.ubermenu-submenu-drop,
            .ubermenu-invert.ubermenu-horizontal.ubermenu-items-vstretch .ubermenu-item.ubermenu-item-level-0>.ubermenu-submenu-drop {
                top: auto;
                bottom: 100%;
            }

            .ubermenu-invert.ubermenu-horizontal.ubermenu-sub-indicators .ubermenu-item-level-0.ubermenu-has-submenu-drop>.ubermenu-target>.ubermenu-sub-indicator {
                transform: rotate(180deg);
            }

            /* Make second level flyouts fly up */
            .ubermenu-invert.ubermenu-horizontal .ubermenu-submenu .ubermenu-item.ubermenu-active>.ubermenu-submenu-type-flyout {
                top: auto;
                bottom: 0;
            }

            /* Clip the submenus properly when inverted */
            .ubermenu-invert.ubermenu-horizontal .ubermenu-item-level-0>.ubermenu-submenu-drop {
                clip: rect(-5000px, 5000px, auto, -5000px);
            }

            /* Invert Vertical menu to make subs go left */
            .ubermenu-invert.ubermenu-vertical .ubermenu-item-level-0>.ubermenu-submenu-drop {
                right: 100%;
                left: auto;
            }

            .ubermenu-invert.ubermenu-vertical.ubermenu-sub-indicators .ubermenu-item-level-0.ubermenu-item-has-children>.ubermenu-target>.ubermenu-sub-indicator {
                right: auto;
                left: 10px;
                transform: rotate(90deg);
            }

            .ubermenu-vertical.ubermenu-invert .ubermenu-item>.ubermenu-submenu-drop {
                clip: rect(-5000px, 5000px, 5000px, -5000px);
            }

            /* Vertical Flyout > Flyout */
            .ubermenu-vertical.ubermenu-invert.ubermenu-sub-indicators .ubermenu-has-submenu-drop>.ubermenu-target {
                padding-left: 25px;
            }

            .ubermenu-vertical.ubermenu-invert .ubermenu-item>.ubermenu-target>.ubermenu-sub-indicator {
                right: auto;
                left: 10px;
                transform: rotate(90deg);
            }

            .ubermenu-vertical.ubermenu-invert .ubermenu-item>.ubermenu-submenu-drop.ubermenu-submenu-type-flyout,
            .ubermenu-vertical.ubermenu-invert .ubermenu-submenu-type-flyout>.ubermenu-item>.ubermenu-submenu-drop {
                right: 100%;
                left: auto;
            }

            .ubermenu-responsive-toggle {
                display: none;
            }
        }

        @media screen and (max-width: 1010px) {

            .ubermenu-responsive-toggle,
            .ubermenu-sticky-toggle-wrapper {
                display: block;
            }

            .ubermenu-responsive {
                width: 100%;
                max-height: 600px;
                visibility: visible;
                overflow: visible;
                -webkit-transition: max-height 1s ease-in;
                transition: max-height .3s ease-in;
            }

            .ubermenu-responsive.ubermenu-mobile-accordion:not(.ubermenu-mobile-modal):not(.ubermenu-in-transition):not(.ubermenu-responsive-collapse) {
                max-height: none;
            }

            .ubermenu-responsive.ubermenu-items-align-center {
                text-align: left;
            }

            .ubermenu-responsive.ubermenu {
                margin: 0;
            }

            .ubermenu-responsive.ubermenu .ubermenu-nav {
                display: block;
            }

            .ubermenu-responsive.ubermenu-responsive-nocollapse,
            .ubermenu-repsonsive.ubermenu-no-transitions {
                display: block;
                max-height: none;
            }

            .ubermenu-responsive.ubermenu-responsive-collapse {
                max-height: none;
                visibility: visible;
                overflow: visible;
            }

            .ubermenu-responsive.ubermenu-responsive-collapse {
                max-height: 0;
                overflow: hidden !important;
                visibility: hidden;
            }

            .ubermenu-responsive.ubermenu-in-transition,
            .ubermenu-responsive.ubermenu-in-transition .ubermenu-nav {
                overflow: hidden !important;
                visibility: visible;
            }

            .ubermenu-responsive.ubermenu-responsive-collapse:not(.ubermenu-in-transition) {
                border-top-width: 0;
                border-bottom-width: 0;
            }

            .ubermenu-responsive.ubermenu-responsive-collapse .ubermenu-item .ubermenu-submenu {
                display: none;
            }

            .ubermenu-responsive .ubermenu-item-level-0 {
                width: 50%;
            }

            .ubermenu-responsive.ubermenu-responsive-single-column .ubermenu-item-level-0 {
                float: none;
                clear: both;
                width: 100%;
            }

            .ubermenu-responsive .ubermenu-item.ubermenu-item-level-0>.ubermenu-target {
                border: none;
                box-shadow: none;
            }

            .ubermenu-responsive .ubermenu-item.ubermenu-has-submenu-flyout {
                position: static;
            }

            .ubermenu-responsive.ubermenu-sub-indicators .ubermenu-submenu-type-flyout .ubermenu-has-submenu-drop>.ubermenu-target>.ubermenu-sub-indicator {
                transform: rotate(0);
                right: 10px;
                left: auto;
            }

            .ubermenu-responsive .ubermenu-nav .ubermenu-item .ubermenu-submenu.ubermenu-submenu-drop {
                width: 100%;
                min-width: 100%;
                max-width: 100%;
                top: auto;
                left: 0 !important;
            }

            .ubermenu-responsive.ubermenu-has-border .ubermenu-nav .ubermenu-item .ubermenu-submenu.ubermenu-submenu-drop {
                left: -1px !important;
                /* For borders */
            }

            .ubermenu-responsive .ubermenu-submenu.ubermenu-submenu-type-mega>.ubermenu-item.ubermenu-column {
                min-height: 0;
                border-left: none;
                float: left;
                /* override left/center/right content alignment */
                display: block;
            }

            .ubermenu-responsive .ubermenu-item.ubermenu-active>.ubermenu-submenu.ubermenu-submenu-type-mega {
                max-height: none;
                height: auto;
                /*prevent overflow scrolling since android is still finicky*/
                overflow: visible;
            }

            .ubermenu-responsive.ubermenu-transition-slide .ubermenu-item.ubermenu-in-transition>.ubermenu-submenu-drop {
                max-height: 1000px;
                /* because of slide transition */
            }

            .ubermenu .ubermenu-submenu-type-flyout .ubermenu-submenu-type-mega {
                min-height: 0;
            }

            .ubermenu.ubermenu-responsive .ubermenu-column,
            .ubermenu.ubermenu-responsive .ubermenu-column-auto {
                min-width: 50%;
            }

            .ubermenu.ubermenu-responsive .ubermenu-autoclear>.ubermenu-column {
                clear: none;
            }

            .ubermenu.ubermenu-responsive .ubermenu-column:nth-of-type(2n+1) {
                clear: both;
            }

            .ubermenu.ubermenu-responsive .ubermenu-submenu-retractor-top:not(.ubermenu-submenu-retractor-top-2) .ubermenu-column:nth-of-type(2n+1) {
                clear: none;
            }

            .ubermenu.ubermenu-responsive .ubermenu-submenu-retractor-top:not(.ubermenu-submenu-retractor-top-2) .ubermenu-column:nth-of-type(2n+2) {
                clear: both;
            }

            .ubermenu-responsive-single-column-subs .ubermenu-submenu .ubermenu-item {
                float: none;
                clear: both;
                width: 100%;
                min-width: 100%;
            }

            /* Submenu footer content */
            .ubermenu .ubermenu-submenu-footer {
                position: relative;
                clear: both;
                bottom: auto;
                right: auto;
            }

            .ubermenu.ubermenu-responsive .ubermenu-tabs,
            .ubermenu.ubermenu-responsive .ubermenu-tabs-group,
            .ubermenu.ubermenu-responsive .ubermenu-tab,
            .ubermenu.ubermenu-responsive .ubermenu-tab-content-panel {
                /** TABS SHOULD BE 100%  ACCORDION */
                width: 100%;
                min-width: 100%;
                max-width: 100%;
                left: 0;
            }

            .ubermenu.ubermenu-responsive .ubermenu-tabs,
            .ubermenu.ubermenu-responsive .ubermenu-tab-content-panel {
                min-height: 0 !important;
                /* Override Inline Style from JS */
            }

            .ubermenu.ubermenu-responsive .ubermenu-tabs {
                z-index: 15;
            }

            .ubermenu.ubermenu-responsive .ubermenu-tab-content-panel {
                z-index: 20;
            }

            /* Tab Layering */
            .ubermenu-responsive .ubermenu-tab {
                position: relative;
            }

            .ubermenu-responsive .ubermenu-tab.ubermenu-active {
                position: relative;
                z-index: 20;
            }

            .ubermenu-responsive .ubermenu-tab>.ubermenu-target {
                border-width: 0 0 1px 0;
            }

            .ubermenu-responsive.ubermenu-sub-indicators .ubermenu-tabs>.ubermenu-tabs-group>.ubermenu-tab.ubermenu-has-submenu-drop>.ubermenu-target>.ubermenu-sub-indicator {
                transform: rotate(0);
                right: 10px;
                left: auto;
            }

            .ubermenu-responsive .ubermenu-tabs>.ubermenu-tabs-group>.ubermenu-tab>.ubermenu-tab-content-panel {
                top: auto;
                border-width: 1px;
            }

            .ubermenu-responsive .ubermenu-tab-layout-bottom>.ubermenu-tabs-group {
                /*position:relative;*/
            }

            .ubermenu-reponsive .ubermenu-item-level-0>.ubermenu-submenu-type-stack {
                /* Top Level Stack Columns */
                position: relative;
            }

            .ubermenu-responsive .ubermenu-submenu-type-stack .ubermenu-column,
            .ubermenu-responsive .ubermenu-submenu-type-stack .ubermenu-column-auto {
                /* Stack Columns */
                width: 100%;
                max-width: 100%;
            }

            .ubermenu-responsive .ubermenu-item-mini {
                /* Mini items */
                min-width: 0;
                width: auto;
                float: left;
                clear: none !important;
            }

            .ubermenu-responsive .ubermenu-item.ubermenu-item-mini>a.ubermenu-target {
                padding-left: 20px;
                padding-right: 20px;
            }

            .ubermenu-responsive .ubermenu-item.ubermenu-hide-mobile {
                /* Hiding items */
                display: none !important;
            }

            .ubermenu-responsive.ubermenu-hide-bkgs .ubermenu-submenu.ubermenu-submenu-bkg-img {
                /** Hide Background Images in Submenu */
                background-image: none;
            }

            .ubermenu.ubermenu-responsive .ubermenu-item-level-0.ubermenu-item-mini {
                min-width: 0;
                width: auto;
            }

            .ubermenu-vertical .ubermenu-item.ubermenu-item-level-0 {
                width: 100%;
            }

            .ubermenu-vertical.ubermenu-sub-indicators .ubermenu-item-level-0.ubermenu-item-has-children>.ubermenu-target>.ubermenu-sub-indicator {
                right: 10px;
                left: auto;
                transform: rotate(0);
            }

            .ubermenu-vertical .ubermenu-item.ubermenu-item-level-0.ubermenu-relative.ubermenu-active>.ubermenu-submenu-drop.ubermenu-submenu-align-vertical_parent_item {
                top: auto;
            }

            .ubermenu.ubermenu-responsive .ubermenu-tabs {
                position: static;
            }

            /* Tabs on Mobile with mouse (but not click) - leave space to hover off */
            .ubermenu:not(.ubermenu-is-mobile):not(.ubermenu-submenu-indicator-closes) .ubermenu-submenu .ubermenu-tab[data-ubermenu-trigger="mouseover"] .ubermenu-tab-content-panel,
            .ubermenu:not(.ubermenu-is-mobile):not(.ubermenu-submenu-indicator-closes) .ubermenu-submenu .ubermenu-tab[data-ubermenu-trigger="hover_intent"] .ubermenu-tab-content-panel {
                margin-left: 6%;
                width: 94%;
                min-width: 94%;
            }

            /* Sub indicator close visibility */
            .ubermenu.ubermenu-submenu-indicator-closes .ubermenu-active>.ubermenu-target>.ubermenu-sub-indicator-close {
                display: block;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .ubermenu.ubermenu-submenu-indicator-closes .ubermenu-active>.ubermenu-target>.ubermenu-sub-indicator {
                display: none;
            }

            .ubermenu .ubermenu-tabs .ubermenu-tab-content-panel {
                box-shadow: 0 5px 10px rgba(0, 0, 0, .075);
            }

            /* When submenus and items go full width, move items back to appropriate positioning */
            .ubermenu .ubermenu-submenu-rtl {
                direction: ltr;
            }

            /* Fixed position mobile menu */
            .ubermenu.ubermenu-mobile-modal {
                position: fixed;
                z-index: 9999999;
                opacity: 1;
                top: 0;
                left: 0;
                width: 100%;
                width: 100vw;
                max-width: 100%;
                max-width: 100vw;
                height: 100%;
                height: calc(100vh - calc(100vh - 100%));
                height: -webkit-fill-available;
                max-height: calc(100vh - calc(100vh - 100%));
                max-height: -webkit-fill-available;
                border: none;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                overflow-y: auto !important;
                /* for non-accordion mode */
                overflow-x: hidden !important;
                overscroll-behavior: contain;
                transform: scale(1);
                transition-duration: .1s;
                transition-property: all;
            }

            .ubermenu.ubermenu-mobile-modal.ubermenu-mobile-accordion.ubermenu-interaction-press {
                overflow-y: hidden !important;
            }

            .ubermenu.ubermenu-mobile-modal.ubermenu-responsive-collapse {
                overflow: hidden !important;
                opacity: 0;
                transform: scale(.9);
                visibility: hidden;
            }

            .ubermenu.ubermenu-mobile-modal .ubermenu-nav {
                flex: 1;
                overflow-y: auto !important;
                overscroll-behavior: contain;
            }

            .ubermenu.ubermenu-mobile-modal .ubermenu-item-level-0 {
                margin: 0;
            }

            .ubermenu.ubermenu-mobile-modal .ubermenu-mobile-close-button {
                border: none;
                background: none;
                border-radius: 0;
                padding: 1em;
                color: inherit;
                display: inline-block;
                text-align: center;
                font-size: 14px;
            }

            .ubermenu.ubermenu-mobile-modal .ubermenu-mobile-footer .ubermenu-mobile-close-button {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .ubermenu.ubermenu-mobile-modal .ubermenu-mobile-footer .ubermenu-mobile-close-button .ubermenu-icon-essential,
            .ubermenu.ubermenu-mobile-modal .ubermenu-mobile-footer .ubermenu-mobile-close-button .fas.fa-times {
                margin-right: .2em;
            }

            /* Header/Footer Mobile content */
            .ubermenu .ubermenu-mobile-header,
            .ubermenu .ubermenu-mobile-footer {
                display: block;
                text-align: center;
                color: inherit;
            }

            /* Accordion submenus mobile (single column tablet) */
            .ubermenu.ubermenu-responsive-single-column.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-item>.ubermenu-submenu-drop,
            .ubermenu.ubermenu-responsive-single-column.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-tab>.ubermenu-tab-content-panel {
                box-sizing: border-box;
                border-left: none;
                border-right: none;
                box-shadow: none;
            }

            .ubermenu.ubermenu-responsive-single-column.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-item.ubermenu-active>.ubermenu-submenu-drop,
            .ubermenu.ubermenu-responsive-single-column.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-tab.ubermenu-active>.ubermenu-tab-content-panel {
                position: static;
            }

            /* Accordion indented - remove borders and extra spacing from headers */
            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu.ubermenu-submenu-drop,
            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu .ubermenu-item-header.ubermenu-has-submenu-stack>.ubermenu-target {
                border: none;
            }

            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu .ubermenu-item-header.ubermenu-has-submenu-stack>.ubermenu-submenu-type-stack {
                padding-top: 0;
            }

            /* Accordion dropdown indentation padding */
            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-item>.ubermenu-target,
            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-tab-content-panel .ubermenu-item>.ubermenu-target {
                padding-left: calc(var(--ubermenu-accordion-indent) * 2);
            }

            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-item>.ubermenu-target,
            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-tab-content-panel .ubermenu-tab-content-panel .ubermenu-item>.ubermenu-target {
                padding-left: calc(var(--ubermenu-accordion-indent) * 3);
            }

            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-item>.ubermenu-target,
            .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-tab-content-panel .ubermenu-tab-content-panel .ubermenu-tab-content-panel .ubermenu-item>.ubermenu-target {
                padding-left: calc(var(--ubermenu-accordion-indent) * 4);
            }

            /* Reverse Accordion dropdown indentation padding */
            .rtl .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-item>.ubermenu-target,
            .rtl .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-tab-content-panel .ubermenu-item>.ubermenu-target {
                padding-left: 0;
                padding-right: calc(var(--ubermenu-accordion-indent) * 2);
            }

            .rtl .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-item>.ubermenu-target,
            .rtl .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-tab-content-panel .ubermenu-tab-content-panel .ubermenu-item>.ubermenu-target {
                padding-left: 0;
                padding-right: calc(var(--ubermenu-accordion-indent) * 3);
            }

            .rtl .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-submenu-drop .ubermenu-item>.ubermenu-target,
            .rtl .ubermenu.ubermenu-mobile-accordion-indent .ubermenu-submenu-drop .ubermenu-tab-content-panel .ubermenu-tab-content-panel .ubermenu-tab-content-panel .ubermenu-item>.ubermenu-target {
                padding-left: 0;
                padding-right: calc(var(--ubermenu-accordion-indent) * 4);
            }

            .ubermenu-responsive-toggle {
                display: block;
            }
        }

        @media screen and (max-width: 480px) {
            .ubermenu.ubermenu-responsive .ubermenu-item-level-0 {
                width: 100%;
            }

            .ubermenu.ubermenu-responsive .ubermenu-column,
            .ubermenu.ubermenu-responsive .ubermenu-column-auto {
                min-width: 100%;
            }

            .ubermenu .ubermenu-autocolumn:not(:first-child),
            .ubermenu .ubermenu-autocolumn:not(:first-child) .ubermenu-submenu-type-stack {
                padding-top: 0;
            }

            .ubermenu .ubermenu-autocolumn:not(:last-child),
            .ubermenu .ubermenu-autocolumn:not(:last-child) .ubermenu-submenu-type-stack {
                padding-bottom: 0;
            }

            .ubermenu .ubermenu-autocolumn>.ubermenu-submenu-type-stack>.ubermenu-item-normal:first-child {
                margin-top: 0;
            }

            /* Accordion submenus mobile */
            .ubermenu.ubermenu-responsive.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-item>.ubermenu-submenu-drop,
            .ubermenu.ubermenu-responsive.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-tab>.ubermenu-tab-content-panel {
                box-shadow: none;
                box-sizing: border-box;
                border-left: none;
                border-right: none;
            }

            .ubermenu.ubermenu-responsive.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-item.ubermenu-active>.ubermenu-submenu-drop,
            .ubermenu.ubermenu-responsive.ubermenu-mobile-accordion.ubermenu-interaction-press .ubermenu-tab.ubermenu-active>.ubermenu-tab-content-panel {
                position: static;
            }
        }

        /** UberMenu Custom Menu Styles (Customizer) **/
        /* main */
        .ubermenu.ubermenu-main {
            background: none;
            border: none;
            box-shadow: none;
        }

        .ubermenu.ubermenu-main .ubermenu-item-level-0>.ubermenu-target {
            border: none;
            box-shadow: none;
        }

        .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-submenu-drop.ubermenu-submenu-align-left_edge_bar,
        .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-submenu-drop.ubermenu-submenu-align-full_width {
            left: 0;
        }

        .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-item-level-0.ubermenu-active>.ubermenu-submenu-drop,
        .ubermenu.ubermenu-main.ubermenu-horizontal:not(.ubermenu-transition-shift) .ubermenu-item-level-0>.ubermenu-submenu-drop {
            margin-top: 0;
        }

        .ubermenu-main.ubermenu-transition-fade .ubermenu-item .ubermenu-submenu-drop {
            margin-top: 0;
        }

        .ubermenu-main .ubermenu-item-level-0>.ubermenu-target {
            font-size: 18px;
            text-transform: uppercase;
            color: #000000;
            padding-left: 15px;
            padding-right: 15px;
        }

        .ubermenu-main .ubermenu-nav .ubermenu-item.ubermenu-item-level-0>.ubermenu-target {
            font-weight: normal;
        }

        .ubermenu.ubermenu-main .ubermenu-item-level-0:hover>.ubermenu-target,
        .ubermenu-main .ubermenu-item-level-0.ubermenu-active>.ubermenu-target {
            color: #ff5200;
        }

        .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-item>.ubermenu-target,
        .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-parent>.ubermenu-target,
        .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-ancestor>.ubermenu-target {
            color: #ff5200;
        }

        .ubermenu-main .ubermenu-item.ubermenu-item-level-0>.ubermenu-highlight {
            color: #ff5200;
        }

        .ubermenu-main .ubermenu-item-level-0>.ubermenu-target,
        .ubermenu-main .ubermenu-item-level-0>.ubermenu-custom-content.ubermenu-custom-content-padded {
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .ubermenu-main.ubermenu-sub-indicators .ubermenu-item-level-0.ubermenu-has-submenu-drop>.ubermenu-target:not(.ubermenu-noindicator) {
            padding-right: 30px;
        }

        .ubermenu-main.ubermenu-sub-indicators .ubermenu-item-level-0.ubermenu-has-submenu-drop>.ubermenu-target.ubermenu-noindicator {
            padding-right: 15px;
        }

        .ubermenu-main .ubermenu-submenu.ubermenu-submenu-drop {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            color: #8c8c8c;
        }

        .ubermenu-main .ubermenu-submenu .ubermenu-highlight {
            color: #eeee22;
        }

        .ubermenu-main .ubermenu-item-normal>.ubermenu-target {
            color: #333333;
        }

        .ubermenu.ubermenu-main .ubermenu-item-normal>.ubermenu-target:hover,
        .ubermenu.ubermenu-main .ubermenu-item-normal.ubermenu-active>.ubermenu-target {
            color: #ff5200;
        }

        .ubermenu-main .ubermenu-item-normal.ubermenu-current-menu-item>.ubermenu-target {
            color: #ff5200;
        }

        .ubermenu-responsive-toggle.ubermenu-responsive-toggle-main {
            font-size: 35px;
            color: #00a8f7;
        }

        .ubermenu-responsive-toggle.ubermenu-responsive-toggle-main:hover {
            color: #ff5200;
        }

        .ubermenu-main,
        .ubermenu-main .ubermenu-target,
        .ubermenu-main .ubermenu-nav .ubermenu-item-level-0 .ubermenu-target,
        .ubermenu-main div,
        .ubermenu-main p,
        .ubermenu-main input {
            font-family: 'Oswald', sans-serif;
        }

        /** UberMenu Custom Menu Item Styles (Menu Item Settings) **/
        /* 51892 */
        .ubermenu .ubermenu-item.ubermenu-item-51892>.ubermenu-target {
            background: #ff5200;
            color: #ffffff;
        }

        .ubermenu .ubermenu-item.ubermenu-item-51892.ubermenu-active>.ubermenu-target,
        .ubermenu .ubermenu-item.ubermenu-item-51892>.ubermenu-target:hover,
        .ubermenu .ubermenu-submenu .ubermenu-item.ubermenu-item-51892.ubermenu-active>.ubermenu-target,
        .ubermenu .ubermenu-submenu .ubermenu-item.ubermenu-item-51892>.ubermenu-target:hover {
            background: #ff5200;
        }

        .ubermenu .ubermenu-item.ubermenu-item-51892.ubermenu-active>.ubermenu-target,
        .ubermenu .ubermenu-item.ubermenu-item-51892:hover>.ubermenu-target,
        .ubermenu .ubermenu-submenu .ubermenu-item.ubermenu-item-51892.ubermenu-active>.ubermenu-target,
        .ubermenu .ubermenu-submenu .ubermenu-item.ubermenu-item-51892:hover>.ubermenu-target {
            color: #ffffff;
        }

        .ubermenu .ubermenu-item.ubermenu-item-51892.ubermenu-current-menu-item>.ubermenu-target,
        .ubermenu .ubermenu-item.ubermenu-item-51892.ubermenu-current-menu-ancestor>.ubermenu-target {
            background: #ff5200;
            color: #ffffff;
        }

        .ubermenu .ubermenu-submenu.ubermenu-submenu-id-51892 {
            background-color: #ff5200;
        }

        /** UberMenu Custom Tweaks (General Settings) **/
        .ubermenu .ubermenu-item.ubermenu-current-page-ancestor>.ubermenu-target {
            color: #ff5200;
        }

        .ubermenu-main .ubermenu-item-level-0>.ubermenu-target {
            padding: 3px 12px;
        }

        /* Status: Loaded from Transient */
    </style><!-- site-navigation-element Schema optimized by Schema Pro -->
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Seven Summits Column","url":"#ubermenu-column"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Seven Summits Title","url":"#ubermenu-custom_content"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"[Divider]","url":"#ubermenu-divider"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Aconcagua","url":"https:\/\/www.alpineascents.com\/climbs\/aconcagua\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Carstensz Pyramid","url":"https:\/\/www.alpineascents.com\/climbs\/carstensz-pyramid\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Denali","url":"https:\/\/www.alpineascents.com\/climbs\/denali\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Elbrus","url":"https:\/\/www.alpineascents.com\/climbs\/mount-elbrus\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Everest","url":"https:\/\/www.alpineascents.com\/climbs\/mount-everest\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Kilimanjaro","url":"https:\/\/www.alpineascents.com\/climb-kilimanjaro\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Vinson","url":"https:\/\/www.alpineascents.com\/climbs\/mount-vinson\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Additional Information Title","url":"#ubermenu-custom_content"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Private Climbs in Washington","url":"https:\/\/www.alpineascents.com\/climbs\/private-wa\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Women\u2019s Courses and Climbs","url":"https:\/\/www.alpineascents.com\/womens-climbs\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"About The Seven Summits","url":"https:\/\/www.alpineascents.com\/climbs\/seven-summits\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"How to Choose A Guide Service","url":"https:\/\/www.alpineascents.com\/climbs\/choose-guide-service\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Outreach Programs","url":"https:\/\/www.alpineascents.com\/climbs\/climbing-for-a-cause\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Worldwide Climbs Column","url":"#ubermenu-column"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Worldwide Climbs Title","url":"#ubermenu-custom_content"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Manaslu","url":"https:\/\/www.alpineascents.com\/climbs\/manaslu\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Cho Oyu","url":"https:\/\/www.alpineascents.com\/climbs\/cho-oyu\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Great Peaks of Bolivia","url":"https:\/\/www.alpineascents.com\/climbs\/great-peaks-bolivia\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Great Peaks of Peru","url":"https:\/\/www.alpineascents.com\/climbs\/great-peaks-peru\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Island Peak, Nepal","url":"https:\/\/www.alpineascents.com\/climbs\/island-peak\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mera Peak, Nepal","url":"https:\/\/www.alpineascents.com\/climbs\/mera-peak\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mongolia - Mt. Khuiten Climb","url":"https:\/\/www.alpineascents.com\/climbs\/mongolia-trek-climb\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Volcanoes of Ecuador","url":"https:\/\/www.alpineascents.com\/climbs\/chimborazo\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Volcanoes of Iceland","url":"https:\/\/www.alpineascents.com\/climbs\/volcanoes-of-iceland\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Volcanoes of Mexico","url":"https:\/\/www.alpineascents.com\/climbs\/volcanoes-of-mexico\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"The Alps Title","url":"#ubermenu-custom_content"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mont Blanc","url":"https:\/\/www.alpineascents.com\/climbs\/mont-blanc\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"The Matterhorn","url":"https:\/\/www.alpineascents.com\/climbs\/matterhorn\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Eiger","url":"https:\/\/www.alpineascents.com\/climbs\/eiger\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Private Alps Climbs","url":"https:\/\/www.alpineascents.com\/climbs\/private-alps-climbs\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Domestic Climbs Column","url":"#ubermenu-column"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Domestic Climbs Title","url":"#ubermenu-custom_content"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Baker 3 Day","url":"https:\/\/www.alpineascents.com\/climbs\/mount-baker\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Rainier 3 Day Muir","url":"https:\/\/www.alpineascents.com\/climbs\/mount-rainier-climb-muir\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Rainier 4 Day Kautz","url":"https:\/\/www.alpineascents.com\/climbs\/mount-rainier-climb-kautz\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Rainier 4 Day Emmons","url":"https:\/\/www.alpineascents.com\/climbs\/mount-rainier-climb-emmons\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Glacier Peak","url":"https:\/\/www.alpineascents.com\/climbs\/glacier-peak\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Baker North Ridge","url":"https:\/\/www.alpineascents.com\/climbs\/mount-baker-north-ridge\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Forbidden Peak West Ridge","url":"https:\/\/www.alpineascents.com\/climbs\/forbidden-peak\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Shuksan Sulphide Glacier","url":"https:\/\/www.alpineascents.com\/climbs\/mount-shuksan-sulphide-glacier\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Shuksan Fisher Chimneys","url":"https:\/\/www.alpineascents.com\/climbs\/mount-shuksan-fisher-chimneys\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Olympus","url":"https:\/\/www.alpineascents.com\/climbs\/mount-olympus\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Adams South Side","url":"https:\/\/www.alpineascents.com\/climbs\/mount-adams\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Climb + Ski Descent Column","url":"#ubermenu-column"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Climb + Ski Descent Title","url":"#ubermenu-custom_content"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Baker Ski Descent","url":"https:\/\/www.alpineascents.com\/climbs\/baker-ski-descent\/"},{"@context":"https:\/\/schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Mount Adams Ski Descent","url":"https:\/\/www.alpineascents.com\/climbs\/mount-adams-ski-descent\/"}]}</script>
    <!-- / site-navigation-element Schema optimized by Schema Pro --><!-- breadcrumb Schema optimized by Schema Pro -->
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https:\/\/www.alpineascents.com\/","name":"Home"}},{"@type":"ListItem","position":2,"item":{"@id":"https:\/\/www.alpineascents.com\/climbs\/","name":"Climbs"}},{"@type":"ListItem","position":3,"item":{"@id":"https:\/\/www.alpineascents.com\/climbs\/mount-everest\/","name":"Mount Everest"}}]}</script><!-- / breadcrumb Schema optimized by Schema Pro -->
    <style>
        img#wpstats {
            display: none
        }
    </style> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Powered by Slider Revolution 6.7.17 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MZH3SK7');
    </script> <!-- End Google Tag Manager -->
    <style id='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('https://www.alpineascents.com/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://www.alpineascents.com/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <style>

.sb-content-wrapper {
    flex: 1; /* Phần này sẽ chiếm toàn bộ không gian còn lại */
    overflow-y: auto; /* Cho phép cuộn nếu nội dung dài */
    max-height: 500px; /* Chiều cao tối đa mà bạn muốn */
    padding: 10px; /* Thêm padding nếu cần */
}

.sidebar {
    width: 300px; /* Chiều rộng cố định cho sidebar */
    padding: 10px; /* Thêm padding nếu cần */
    background-color: #f8f8f8; /* Thay đổi màu nền nếu cần */
    height: auto; /* Tự động chiều cao */
}
    </style>
    <style id="wpsp-style-frontend"></style>
    <link rel="icon"
        href="https://i0.wp.com/www.alpineascents.com/wp-content/uploads/2019/06/cropped-alpine-ascents-favicon.jpg?fit=32%2C32&ssl=1"
        sizes="32x32" />
    <link rel="icon"
        href="https://i0.wp.com/www.alpineascents.com/wp-content/uploads/2019/06/cropped-alpine-ascents-favicon.jpg?fit=192%2C192&ssl=1"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://i0.wp.com/www.alpineascents.com/wp-content/uploads/2019/06/cropped-alpine-ascents-favicon.jpg?fit=180%2C180&ssl=1" />
    <meta name="msapplication-TileImage"
        content="https://i0.wp.com/www.alpineascents.com/wp-content/uploads/2019/06/cropped-alpine-ascents-favicon.jpg?fit=270%2C270&ssl=1" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        /*
   You can add your own CSS here.
   Click the help icon above to learn more.
   */
        a.prepaid-register-button,
        a.register-button {
            color: #fff !important;
            background: #ff5200;
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            display: block;
            text-align: center;
        }

        a.prepaid-register-button {
            color: #fff;
            background: #1796d9;
        }

        .rev-text h3 {
            font-weight: 700 !important;
        }

        .page-id-43568 {
            background: rgba(232, 240, 243);
        }

        /*actuate*/
        h2.actnew {
            margin-top: 0px;
            margin-bottom: 10px;
            color: #333;
            font-size: 1.1em !important;
            text-transform: uppercase;
            font-weight: 700;
        }

        @media (min-width:960px) {

            .uk-h2,
            h2 {
                font-size: 1.7rem !important;
                line-height: 1.3 !important;
            }
        }

        h2.section-title {
            position: relative;
            text-transform: uppercase;
            font-size: 1.250em !important;
            font-weight: 700 !important;
            color: #333333;
        }

        .slider-button-text {
            font-size: 17px !important;
        }

        .orange-button-rev {
            margin-top: 10px !important;
        }

        body.page-id-3170 #secondary-navigation,
        body.parent-pageid-3170 #secondary-navigation {
            background: linear-gradient(to right, #00a8f7 0%, #00a8f7 70%, transparent 30%, transparent 100%) !important;
        }

        .woocommerce ul.products li.product {
            margin-bottom: 9em !important;
        }

        .product-vendor {
            margin-top: 0 !important;
            color: #4A4A4A;
            font-size: 14px;
        }

        .gear_rental_image {
            width: 100px;
            margin-left: auto;
            margin-right: auto;
        }

        .home-widget-copy-right {
            margin-right: 50px;
        }

        .image-widget {
            margin: 5px;
        }

        .wc-stripe-elements-field,
        .stripe-card-group {
            width: 100%;
        }

        #book-a-trip {
            width: 100%;
        }

        .rev-text>span {
            padding-top: 18px
        }

        .rev-text p {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true, // Bật vòng lặp
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Cho phép nhấp vào phân trang
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000, // Thời gian giữa các slide
            disableOnInteraction: false, // Tiếp tục autoplay khi tương tác
        },
    });
</script>
@endpush

