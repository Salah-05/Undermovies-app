<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $film['Title'] }}</title>
    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <body id="#top">

        <!--
      - #HEADER
    -->

        <header class="header" data-header>
            <header class="header" data-header>
                @include('frontend.components.header')
            </header>
        </header>





        <main>
            <article>

                <!--
          - #MOVIE DETAIL
        -->

                <section class="movie-detail">
                    <div class="container">

                        <figure class="movie-detail-banner">

                            <img src="{{ $film['Poster'] }}" alt="{{ $film['Title'] }}">

                            <button class="play-btn">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </button>

                        </figure>

                        <div class="movie-detail-content">

                            <p class="detail-subtitle">New Episodes</p>

                            <h1 class="h1 detail-title">
                                <strong>{{ $film['Title'] }}</strong>
                            </h1>

                            <div class="meta-wrapper">

                                <div class="badge-wrapper">
                                    <div class="badge badge-fill">PG 13</div>

                                    <div class="badge badge-outline">HD</div>
                                </div>

                                <div class="ganre-wrapper">
                                    <a href="#">{{ $film['Genre'] }}</a>



                                </div>

                                <div class="date-time">

                                    <div>
                                        <ion-icon name="calendar-outline"></ion-icon>

                                        <time datetime="{{ $film['Year'] }}">{{ $film['Year'] }}</time>
                                    </div>

                                    <div>
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="{{ $film['Runtime'] }}"> {{ $film['Runtime'] }} </time>


                                        
                                    </div>


                                </div>

                            </div>

                            <p class="storyline">
                                <strong style="color: hsl(249, 98%, 67%)"> Country : <span
                                        style="color: white">{{ $film['Country'] }}</span> </strong>
                                <strong style="color: hsl(249, 98%, 67%)">Language : <span
                                        style="color: white">{{ $film['Language'] }}</span> </strong>
                                <br><br>
                                {{ $film['Plot'] }}
                            </p>

                            <div class="details-actions">

                                <button class="share">
                                    <ion-icon name="share-social"></ion-icon>

                                    <span>Share</span>
                                </button>

                                <div class="title-wrapper">
                                    <p class="title">Prime Video</p>

                                    <p class="text">Streaming Channels</p>
                                </div>

                                <button class="btn btn-primary">
                                    <ion-icon name="play"></ion-icon>

                                    <span>Watch Now</span>
                                </button>

                            </div>

                            <a href="{{ $film['Poster'] }}" download class="download-btn">
                                <span>Download</span>

                                <ion-icon name="download-outline"></ion-icon>
                            </a>

                        </div>

                    </div>
                </section>






                <!--
      - #FOOTER
    -->

                <footer class="footer">

                    <div class="footer-top">
                        <div class="container">

                            <div class="footer-brand-wrapper">

                                <a href="{{ route('home') }}" class="logo">
                                    <img src="{{ asset('image/series/logo.png') }}" width="100px"
                                        alt="Filmlane logo">
                                </a>

                                <ul class="footer-list">

                                    <li>
                                        <a href="{{ route('home') }}" class="footer-link">Home</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('films') }}" class="footer-link">Movie</a>
                                    </li>

                                    <li>
                                        <a href="#" class="footer-link">TV Show</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('series') }}" class="footer-link">Web Series</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pricing') }}" class="footer-link">Pricing</a>
                                    </li>

                                </ul>

                            </div>

                            <div class="divider"></div>

                            <div class="quicklink-wrapper">

                                <ul class="quicklink-list">

                                    <li>
                                        <a href="#" class="quicklink-link">Faq</a>
                                    </li>

                                    <li>
                                        <a href="#" class="quicklink-link">Help center</a>
                                    </li>

                                    <li>
                                        <a href="#" class="quicklink-link">Terms of use</a>
                                    </li>

                                    <li>
                                        <a href="#" class="quicklink-link">Privacy</a>
                                    </li>

                                </ul>

                                <ul class="social-list">

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-facebook"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-twitter"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-pinterest"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>



                </footer>





                <!--
      - #GO TO TOP
    -->

                <a href="#top" class="go-top" data-go-top>
                    <ion-icon name="chevron-up"></ion-icon>
                </a>







                <script src="{{ asset('js/home.js') }}"></script>

                <!--
      - ionicon link
    -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</body>

</html>
