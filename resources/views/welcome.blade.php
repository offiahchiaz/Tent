<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Short Term Rental, Apartments, Homes | @yield('title', 'Tent')</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css-new/sb-admin-2.min.css" rel="stylesheet">
        <link href="css-new/custom-css.css" rel="stylesheet">
        
    </head>
    <body class="antialiased" id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4 fixed-top" style="padding-bottom: 15px;">
                        <div style="padding-left: 100px;">
                            <a class="navbar-brand" href="/"><h4>Tent</h4></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item no-arrow">
                                <a class="nav-link" style="color: #413e5f;" href="{{ url('/apartments') }}">Apartments</a>
                            </li>
    
                            <div class="topbar-divider d-none d-sm-block"></div>
    
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item no-arrow">
                                        {{-- <a class="nav-link" style="color: #413e5f;" href="{{ route('dashboard') }}">Home</a> --}}
                                        <a class="nav-link" style="color: #413e5f;" href="{{ url('/dashboard') }}" >Dashboard</a>
                                    </li>
                                    
                                    @else
                                        <li class="nav-item no-arrow">
                                            <a  class="nav-link" style="color: #413e5f;" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item no-arrow">
                                            <a class="nav-link" style="color: #413e5f;" href="{{ route('register') }}">Register</a>
                                        </li>
                                        @endif
                                @endauth
                            @endif
                          </ul>
                        </div>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container" style="padding-top: 150px;">

                        <!-- Page Heading -->
                        {{-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> --}}

                        <div class="row mb-4">
                            <div class="col-md-8 mb-4 pr-10">
                            

                                <div>
                                    <p id="welcome-p">
                                        Find the most<br>
                                        comfortable living spaces
                                        <span id="welcome-span">.</span>
                                    </p>

                                    <div class="input-group mb-3">
                                        <input type="text" id="search-text" class="form-control" placeholder="Where would you love to stay?" 
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="user-testimonial">
                                    <div id="profile-div"></div>
                                    <p id="profile-review">Thoroughly enjoyed my Spleet space, ticks all the boxes. 😁</p>
                                    <p id="profile-name">Ifeanyi</p>
                                    <small id="member-designation">Tent member</small>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div id="welcome-div"></div>
                                {{-- <img class="rounded" src="{{ asset('img/welcome2.png')}}" alt="" width="400" height="600"> --}}
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.container -->

                    <div style="background: #fff; padding-top: 40px;">
                        <div class="container">
                            <div class="row" style="padding-bottom: 100px;">
    
                                <div class="col-md-10 mb-4">
                                    <p id="p-whyTent_subtitle">Why Tent</p>
    
                                    <p id="p-whyTent_title">
                                        Vibrant cities.<br>
                                        Beautiful and move-in ready homes.
                                    </p>
    
                                    <p id="p-whyTent_text">
                                        We offer you access to premium residential solutions, with as little hassle as possible. We do<br> 
                                        what we can to help you get the best out of living in the city, no matter how short or long the<br> 
                                        space between your stay.
                                    </p>
                                </div>
                            </div>
    
                            <div class="row" style="padding-bottom: 100px;">
                                <div class="col-md-3 mb-4" style="padding-right: 40px;">
                                    <div id="whyTent-image"></div>
                                </div>
    
                                <div class="col-md-2 mb-4"></div>
    
                                
    
                                <div class="col-md-7 mb-4">
                                    <div class="row" style="padding-top: 10px; padding-bottom: 80px;">
                                        <div class="col-md-6">
                                            <img class="mb-1" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNTkiIHZpZXdCb3g9IjAgMCA2MCA1OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTQ1Ljc3NzcgMTUuMjEzMkgxLjI0NDcyQzAuNTU3MzMgMTUuMjEzMiAwIDE0LjY1NTggMCAxMy45Njg0VjQuNDI1MTRDMCAzLjczNzc1IDAuNTU3MzMgMy4xODA0MiAxLjI0NDcyIDMuMTgwNDJINDUuNzc3N0M0Ni40NjUxIDMuMTgwNDIgNDcuMDIyNCAzLjczNzc1IDQ3LjAyMjQgNC40MjUxNFYxMy45Njg0QzQ3LjAyMjQgMTQuNjU1OCA0Ni40NjUxIDE1LjIxMzIgNDUuNzc3NyAxNS4yMTMyWk0yLjQ4OTQ1IDEyLjcyMzdINDQuNTMzVjUuNjY5ODdIMi40ODk0NVYxMi43MjM3WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNOS4xOTY4NyA4Ljg1MTA0QzguNTA5NDggOC44NTEwNCA3Ljk1MjE1IDguMjkzNzEgNy45NTIxNSA3LjYwNjMxVjEuMjQ0NzJDNy45NTIxNSAwLjU1NzMzIDguNTA5NDggMCA5LjE5Njg3IDBDOS44ODQyNyAwIDEwLjQ0MTYgMC41NTczMyAxMC40NDE2IDEuMjQ0NzJWNy42MDYzMUMxMC40NDE2IDguMjkzNzEgOS44ODQyNyA4Ljg1MTA0IDkuMTk2ODcgOC44NTEwNFoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTE1LjU1ODQgOC44NTEwNEMxNC44NzExIDguODUxMDQgMTQuMzEzNyA4LjI5MzcxIDE0LjMxMzcgNy42MDYzMVYxLjI0NDcyQzE0LjMxMzcgMC41NTczMyAxNC44NzExIDAgMTUuNTU4NCAwQzE2LjI0NTggMCAxNi44MDMyIDAuNTU3MzMgMTYuODAzMiAxLjI0NDcyVjcuNjA2MzFDMTYuODAzMiA4LjI5MzcxIDE2LjI0NTggOC44NTEwNCAxNS41NTg0IDguODUxMDRaIiBmaWxsPSIjMEYwQzNEIi8+CjxwYXRoIGQ9Ik0zMS40NjM0IDguODUxMDRDMzAuNzc2IDguODUxMDQgMzAuMjE4NiA4LjI5MzcxIDMwLjIxODYgNy42MDYzMVYxLjI0NDcyQzMwLjIxODYgMC41NTczMyAzMC43NzYgMCAzMS40NjM0IDBDMzIuMTUwNyAwIDMyLjcwODEgMC41NTczMyAzMi43MDgxIDEuMjQ0NzJWNy42MDYzMUMzMi43MDgxIDguMjkzNzEgMzIuMTUwNyA4Ljg1MTA0IDMxLjQ2MzQgOC44NTEwNFoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTM3LjgyNTUgOC44NTEwNEMzNy4xMzgxIDguODUxMDQgMzYuNTgwOCA4LjI5MzcxIDM2LjU4MDggNy42MDYzMVYxLjI0NDcyQzM2LjU4MDggMC41NTczMyAzNy4xMzgxIDAgMzcuODI1NSAwQzM4LjUxMjkgMCAzOS4wNzAzIDAuNTU3MzMgMzkuMDcwMyAxLjI0NDcyVjcuNjA2MzFDMzkuMDcwMyA4LjI5MzcxIDM4LjUxMjkgOC44NTEwNCAzNy44MjU1IDguODUxMDRaIiBmaWxsPSIjMEYwQzNEIi8+CjxwYXRoIGQ9Ik0xMi4wMzIxIDIxLjU3NDlIOS41NDI3QzguODU1MyAyMS41NzQ5IDguMjk3OTcgMjEuMDE3NiA4LjI5Nzk3IDIwLjMzMDJDOC4yOTc5NyAxOS42NDI4IDguODU1MyAxOS4wODU0IDkuNTQyNyAxOS4wODU0SDEyLjAzMjFDMTIuNzE5NSAxOS4wODU0IDEzLjI3NjkgMTkuNjQyOCAxMy4yNzY5IDIwLjMzMDJDMTMuMjc2OSAyMS4wMTc2IDEyLjcxOTUgMjEuNTc0OSAxMi4wMzIxIDIxLjU3NDlaIiBmaWxsPSIjMEYwQzNEIi8+CjxwYXRoIGQ9Ik0yNC43NTYgMjEuNTc0OUgyMi4yNjY1QzIxLjU3OTEgMjEuNTc0OSAyMS4wMjE4IDIxLjAxNzYgMjEuMDIxOCAyMC4zMzAyQzIxLjAyMTggMTkuNjQyOCAyMS41NzkxIDE5LjA4NTQgMjIuMjY2NSAxOS4wODU0SDI0Ljc1NkMyNS40NDM0IDE5LjA4NTQgMjYuMDAwNyAxOS42NDI4IDI2LjAwMDcgMjAuMzMwMkMyNi4wMDA3IDIxLjAxNzYgMjUuNDQzNCAyMS41NzQ5IDI0Ljc1NiAyMS41NzQ5WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNMzcuNDc5NyAyMS41NzQ5SDM0Ljk5MDNDMzQuMzAyOSAyMS41NzQ5IDMzLjc0NTUgMjEuMDE3NiAzMy43NDU1IDIwLjMzMDJDMzMuNzQ1NSAxOS42NDI4IDM0LjMwMjkgMTkuMDg1NCAzNC45OTAzIDE5LjA4NTRIMzcuNDc5N0MzOC4xNjcxIDE5LjA4NTQgMzguNzI0NCAxOS42NDI4IDM4LjcyNDQgMjAuMzMwMkMzOC43MjQ0IDIxLjAxNzYgMzguMTY3MSAyMS41NzQ5IDM3LjQ3OTcgMjEuNTc0OVoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTExLjg5OTEgMjcuOTM3SDkuNjc1ODJDOC45ODg0MiAyNy45MzcgOC40MzEwOSAyNy4zNzk2IDguNDMxMDkgMjYuNjkyMkM4LjQzMTA5IDI2LjAwNDggOC45ODg0MiAyNS40NDc1IDkuNjc1ODIgMjUuNDQ3NUgxMS44OTkxQzEyLjU4NjUgMjUuNDQ3NSAxMy4xNDM4IDI2LjAwNDggMTMuMTQzOCAyNi42OTIyQzEzLjE0MzggMjcuMzc5NiAxMi41ODY1IDI3LjkzNyAxMS44OTkxIDI3LjkzN1oiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTI0LjY1OTkgMjcuOTM3SDIyLjM2MjVDMjEuNjc1MSAyNy45MzcgMjEuMTE3OCAyNy4zNzk2IDIxLjExNzggMjYuNjkyMkMyMS4xMTc4IDI2LjAwNDggMjEuNjc1MSAyNS40NDc1IDIyLjM2MjUgMjUuNDQ3NUgyNC42NTk5QzI1LjM0NzMgMjUuNDQ3NSAyNS45MDQ2IDI2LjAwNDggMjUuOTA0NiAyNi42OTIyQzI1LjkwNDYgMjcuMzc5NiAyNS4zNDczIDI3LjkzNyAyNC42NTk5IDI3LjkzN1oiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTM3LjQ3OTcgMjcuOTM3SDM0Ljk5MDNDMzQuMzAyOSAyNy45MzcgMzMuNzQ1NSAyNy4zNzk2IDMzLjc0NTUgMjYuNjkyMkMzMy43NDU1IDI2LjAwNDggMzQuMzAyOSAyNS40NDc1IDM0Ljk5MDMgMjUuNDQ3NUgzNy40Nzk3QzM4LjE2NzEgMjUuNDQ3NSAzOC43MjQ0IDI2LjAwNDggMzguNzI0NCAyNi42OTIyQzM4LjcyNDQgMjcuMzc5NiAzOC4xNjcxIDI3LjkzNyAzNy40Nzk3IDI3LjkzN1oiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTExLjg4MzIgMzQuMjk4NUg5LjY5MTU2QzkuMDA0MTcgMzQuMjk4NSA4LjQ0Njg0IDMzLjc0MTIgOC40NDY4NCAzMy4wNTM4QzguNDQ2ODQgMzIuMzY2NCA5LjAwNDE3IDMxLjgwOTEgOS42OTE1NiAzMS44MDkxSDExLjg4MzJDMTIuNTcwNiAzMS44MDkxIDEzLjEyNzkgMzIuMzY2NCAxMy4xMjc5IDMzLjA1MzhDMTMuMTI3OSAzMy43NDEyIDEyLjU3MDYgMzQuMjk4NSAxMS44ODMyIDM0LjI5ODVaIiBmaWxsPSIjMEYwQzNEIi8+CjxwYXRoIGQ9Ik0yNC41OTk4IDM0LjI5ODVIMjIuNDIyN0MyMS43MzUzIDM0LjI5ODUgMjEuMTc4IDMzLjc0MTIgMjEuMTc4IDMzLjA1MzhDMjEuMTc4IDMyLjM2NjQgMjEuNzM1MyAzMS44MDkxIDIyLjQyMjcgMzEuODA5MUgyNC41OTk4QzI1LjI4NzIgMzEuODA5MSAyNS44NDQ1IDMyLjM2NjQgMjUuODQ0NSAzMy4wNTM4QzI1Ljg0NDUgMzMuNzQxMiAyNS4yODcyIDM0LjI5ODUgMjQuNTk5OCAzNC4yOTg1WiIgZmlsbD0iIzBGMEMzRCIvPgo8Y2lyY2xlIGN4PSI0NS45MTY1IiBjeT0iNDQuMTUzMiIgcj0iMTMuODMwMyIgZmlsbD0iI0ZDRkJGRCIvPgo8cGF0aCBkPSJNNDUuNzc3NyA1OC4xNTYzQzM4LjA3NTMgNTguMTU2MyAzMS44MDkxIDUxLjg5MDEgMzEuODA5MSA0NC4xODc3QzMxLjgwOTEgMzYuNDg1NCAzOC4wNzUzIDMwLjIxODYgNDUuNzc3NyAzMC4yMTg2QzUzLjQ4IDMwLjIxODYgNTkuNzQ2OCAzNi40ODU0IDU5Ljc0NjggNDQuMTg3N0M1OS43NDY4IDUxLjg5MDEgNTMuNDggNTguMTU2MyA0NS43Nzc3IDU4LjE1NjNaTTQ1Ljc3NzcgMzIuNzA4MUMzOS40NDgzIDMyLjcwODEgMzQuMjk4NiAzNy44NTc4IDM0LjI5ODYgNDQuMTg3N0MzNC4yOTg2IDUwLjUxNzEgMzkuNDQ4MyA1NS42NjY4IDQ1Ljc3NzcgNTUuNjY2OEM1Mi4xMDc2IDU1LjY2NjggNTcuMjU3MyA1MC41MTcxIDU3LjI1NzMgNDQuMTg3N0M1Ny4yNTczIDM3Ljg1NzggNTIuMTA3NiAzMi43MDgxIDQ1Ljc3NzcgMzIuNzA4MVoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTMzLjk4OCA0MC42NjA5SDEuMjQ0NzJDMC41NTczMyA0MC42NjA5IDAgNDAuMTAzNiAwIDM5LjQxNjJWMTMuOTY4NkMwIDEzLjI4MTIgMC41NTczMyAxMi43MjM5IDEuMjQ0NzIgMTIuNzIzOUg0NS43Nzc3QzQ2LjQ2NTEgMTIuNzIzOSA0Ny4wMjI0IDEzLjI4MTIgNDcuMDIyNCAxMy45Njg2VjMxLjQ2MzRDNDcuMDIyNCAzMi4xNTA4IDQ2LjQ2NTEgMzIuNzA4MiA0NS43Nzc3IDMyLjcwODJDNDEuMDgyNiAzMi43MDgyIDM2LjkwNzggMzUuNTI0NiAzNS4xNDE2IDM5Ljg4MzZDMzQuOTUxNCA0MC4zNTM0IDM0LjQ5NDkgNDAuNjYwOSAzMy45ODggNDAuNjYwOVpNMi40ODk0NSAzOC4xNzE0SDMzLjE3NjdDMzUuMzExOCAzMy42ODczIDM5LjYxMzYgMzAuNzA2MSA0NC41MzMgMzAuMjczNFYxNS4yMTMzSDIuNDg5NDVWMzguMTcxNFoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTQ1Ljc3NzcgMzUuMTk3NUM0NS4wOTAzIDM1LjE5NzUgNDQuNTMzIDM0LjY0MDIgNDQuNTMzIDMzLjk1MjhWMzEuNDYzNEM0NC41MzMgMzAuNzc2IDQ1LjA5MDMgMzAuMjE4NiA0NS43Nzc3IDMwLjIxODZDNDYuNDY1MSAzMC4yMTg2IDQ3LjAyMjQgMzAuNzc2IDQ3LjAyMjQgMzEuNDYzNFYzMy45NTI4QzQ3LjAyMjQgMzQuNjQwMiA0Ni40NjUxIDM1LjE5NzUgNDUuNzc3NyAzNS4xOTc1WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNNDUuNzc3NyA1OC4xNTY0QzQ1LjA5MDMgNTguMTU2NCA0NC41MzMgNTcuNTk5MSA0NC41MzMgNTYuOTExN1Y1NC40MjIyQzQ0LjUzMyA1My43MzQ4IDQ1LjA5MDMgNTMuMTc3NSA0NS43Nzc3IDUzLjE3NzVDNDYuNDY1MSA1My4xNzc1IDQ3LjAyMjQgNTMuNzM0OCA0Ny4wMjI0IDU0LjQyMjJWNTYuOTExN0M0Ny4wMjI0IDU3LjU5OTEgNDYuNDY1MSA1OC4xNTY0IDQ1Ljc3NzcgNTguMTU2NFoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTU4LjUwMjEgNDUuNDMyNEg1Ni4wMTI2QzU1LjMyNTIgNDUuNDMyNCA1NC43Njc5IDQ0Ljg3NTEgNTQuNzY3OSA0NC4xODc3QzU0Ljc2NzkgNDMuNTAwMyA1NS4zMjUyIDQyLjk0MyA1Ni4wMTI2IDQyLjk0M0g1OC41MDIxQzU5LjE4OTUgNDIuOTQzIDU5Ljc0NjggNDMuNTAwMyA1OS43NDY4IDQ0LjE4NzdDNTkuNzQ2OCA0NC44NzUxIDU5LjE4OTUgNDUuNDMyNCA1OC41MDIxIDQ1LjQzMjRaIiBmaWxsPSIjMEYwQzNEIi8+CjxwYXRoIGQ9Ik0zNS41NDMzIDQ1LjQzMjRIMzMuMDUzOUMzMi4zNjY1IDQ1LjQzMjQgMzEuODA5MSA0NC44NzUxIDMxLjgwOTEgNDQuMTg3N0MzMS44MDkxIDQzLjUwMDMgMzIuMzY2NSA0Mi45NDMgMzMuMDUzOSA0Mi45NDNIMzUuNTQzM0MzNi4yMzA3IDQyLjk0MyAzNi43ODggNDMuNTAwMyAzNi43ODggNDQuMTg3N0MzNi43ODggNDQuODc1MSAzNi4yMzA3IDQ1LjQzMjQgMzUuNTQzMyA0NS40MzI0WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNNDkuNDg1MSA0OS41MzE0QzQ5LjA3ODUgNDkuNTMxNCA0OC42Nzk4IDQ5LjMzMjYgNDguNDQxIDQ4Ljk2NjJMNDQuNzM0OCA0My4yNzY4QzQ0LjM4MTYgNDIuNzM0NiA0NC41MDI2IDQyLjAxMjYgNDUuMDEzMSA0MS42MTUxTDQ5LjA5OTIgMzguNDM0QzQ5LjY0MDcgMzguMDExIDUwLjQyMjkgMzguMTA3NiA1MC44NDYgMzguNjUxNkM1MS4yNjg0IDM5LjE5MzcgNTEuMTcxMSAzOS45NzU5IDUwLjYyODQgNDAuMzk4M0w0Ny40NDU0IDQyLjg3NjlMNTAuNTI2OSA0Ny42MDcyQzUwLjkwMTkgNDguMTgzMyA1MC43Mzk2IDQ4Ljk1NDYgNTAuMTYzNCA0OS4zMjk2QzQ5Ljk1MzcgNDkuNDY2NCA0OS43MTc5IDQ5LjUzMTQgNDkuNDg1MSA0OS41MzE0WiIgZmlsbD0iIzYyRTJBQSIvPgo8L3N2Zz4K" alt="date-image">
                                            <p class="mb-4 reason-title">Suitable duration</p>
                                            <p class="reason-text">Find fully furnished spaces suited<br> to the duration of your stay; a few<br> nights, or a few months.</p>
                                        </div>
    
                                        <div class="col-md-6">
                                            <img class="mb-1" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTQiIGhlaWdodD0iNTQiIHZpZXdCb3g9IjAgMCA1NCA1NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3QgeD0iMTkiIHk9IjMxIiB3aWR0aD0iMTYiIGhlaWdodD0iMjEiIHJ4PSIyIiBmaWxsPSIjRkNGQkZEIi8+CjxwYXRoIGQ9Ik01MC42MjUgMEgzLjM3NUMyLjQ3OTg5IDAgMS42MjE0NSAwLjM1NTU3OSAwLjk4ODUxNSAwLjk4ODUxNEMwLjM1NTU3OSAxLjYyMTQ1IDAgMi40Nzk4OSAwIDMuMzc1TDAgMjguMTI1QzAgMjkuMDIwMSAwLjM1NTU3OSAyOS44Nzg1IDAuOTg4NTE1IDMwLjUxMTVDMS42MjE0NSAzMS4xNDQ0IDIuNDc5ODkgMzEuNSAzLjM3NSAzMS41SDE0LjYyNVYyOS4yNUgzLjM3NUMzLjA3NjYzIDI5LjI1IDIuNzkwNDggMjkuMTMxNSAyLjU3OTUgMjguOTIwNUMyLjM2ODUzIDI4LjcwOTUgMi4yNSAyOC40MjM0IDIuMjUgMjguMTI1VjMuMzc1QzIuMjUgMy4wNzY2MyAyLjM2ODUzIDIuNzkwNDggMi41Nzk1IDIuNTc5NUMyLjc5MDQ4IDIuMzY4NTMgMy4wNzY2MyAyLjI1IDMuMzc1IDIuMjVINTAuNjI1QzUwLjkyMzQgMi4yNSA1MS4yMDk1IDIuMzY4NTMgNTEuNDIwNSAyLjU3OTVDNTEuNjMxNSAyLjc5MDQ4IDUxLjc1IDMuMDc2NjMgNTEuNzUgMy4zNzVWMjguMTI1QzUxLjc1IDI4LjQyMzQgNTEuNjMxNSAyOC43MDk1IDUxLjQyMDUgMjguOTIwNUM1MS4yMDk1IDI5LjEzMTUgNTAuOTIzNCAyOS4yNSA1MC42MjUgMjkuMjVIMzkuMzc1VjMxLjVINTAuNjI1QzUxLjUyMDEgMzEuNSA1Mi4zNzg1IDMxLjE0NDQgNTMuMDExNSAzMC41MTE1QzUzLjY0NDQgMjkuODc4NSA1NCAyOS4wMjAxIDU0IDI4LjEyNVYzLjM3NUM1NCAyLjQ3OTg5IDUzLjY0NDQgMS42MjE0NSA1My4wMTE1IDAuOTg4NTE0QzUyLjM3ODUgMC4zNTU1NzkgNTEuNTIwMSAwIDUwLjYyNSAwVjBaIiBmaWxsPSIjMEYwQzNEIi8+CjxwYXRoIGQ9Ik0xMC4xMjUgMjUuODc1QzEwLjEyNSAyNi4xNzM0IDEwLjI0MzUgMjYuNDU5NSAxMC40NTQ1IDI2LjY3MDVDMTAuNjY1NSAyNi44ODE1IDEwLjk1MTYgMjcgMTEuMjUgMjdIMTYuODc1VjI0Ljc1SDEyLjI4MTZDMTIuMDQ1NSAyMy4zNjg4IDExLjM4NjYgMjIuMDk1IDEwLjM5NTggMjEuMTA0MkM5LjQwNSAyMC4xMTM0IDguMTMxMTYgMTkuNDU0NSA2Ljc1IDE5LjIxODRWMTIuMjgxNkM4LjEzMTE2IDEyLjA0NTUgOS40MDUgMTEuMzg2NiAxMC4zOTU4IDEwLjM5NThDMTEuMzg2NiA5LjQwNSAxMi4wNDU1IDguMTMxMTYgMTIuMjgxNiA2Ljc1SDE2Ljg3NVY0LjVIMTEuMjVDMTAuOTUxNiA0LjUgMTAuNjY1NSA0LjYxODUzIDEwLjQ1NDUgNC44Mjk1MUMxMC4yNDM1IDUuMDQwNDggMTAuMTI1IDUuMzI2NjMgMTAuMTI1IDUuNjI1QzEwLjEyNSA2LjgxODQ3IDkuNjUwODkgNy45NjMwNyA4LjgwNjk4IDguODA2OThDNy45NjMwNyA5LjY1MDg5IDYuODE4NDcgMTAuMTI1IDUuNjI1IDEwLjEyNUM1LjMyNjYzIDEwLjEyNSA1LjA0MDQ4IDEwLjI0MzUgNC44Mjk1MSAxMC40NTQ1QzQuNjE4NTMgMTAuNjY1NSA0LjUgMTAuOTUxNiA0LjUgMTEuMjVWMjAuMjVDNC41IDIwLjU0ODQgNC42MTg1MyAyMC44MzQ1IDQuODI5NTEgMjEuMDQ1NUM1LjA0MDQ4IDIxLjI1NjUgNS4zMjY2MyAyMS4zNzUgNS42MjUgMjEuMzc1QzYuODE4NDcgMjEuMzc1IDcuOTYzMDcgMjEuODQ5MSA4LjgwNjk4IDIyLjY5M0M5LjY1MDg5IDIzLjUzNjkgMTAuMTI1IDI0LjY4MTUgMTAuMTI1IDI1Ljg3NVoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTQxLjcxODQgMjQuNzVIMzcuMTI1VjI3SDQyLjc1QzQzLjA0ODQgMjcgNDMuMzM0NSAyNi44ODE1IDQzLjU0NTUgMjYuNjcwNUM0My43NTY1IDI2LjQ1OTUgNDMuODc1IDI2LjE3MzQgNDMuODc1IDI1Ljg3NUM0My44NzUgMjQuNjgxNSA0NC4zNDkxIDIzLjUzNjkgNDUuMTkzIDIyLjY5M0M0Ni4wMzY5IDIxLjg0OTEgNDcuMTgxNSAyMS4zNzUgNDguMzc1IDIxLjM3NUM0OC42NzM0IDIxLjM3NSA0OC45NTk1IDIxLjI1NjUgNDkuMTcwNSAyMS4wNDU1QzQ5LjM4MTUgMjAuODM0NSA0OS41IDIwLjU0ODQgNDkuNSAyMC4yNVYxMS4yNUM0OS41IDEwLjk1MTYgNDkuMzgxNSAxMC42NjU1IDQ5LjE3MDUgMTAuNDU0NUM0OC45NTk1IDEwLjI0MzUgNDguNjczNCAxMC4xMjUgNDguMzc1IDEwLjEyNUM0Ny4xODE1IDEwLjEyNSA0Ni4wMzY5IDkuNjUwODkgNDUuMTkzIDguODA2OThDNDQuMzQ5MSA3Ljk2MzA3IDQzLjg3NSA2LjgxODQ3IDQzLjg3NSA1LjYyNUM0My44NzUgNS4zMjY2MyA0My43NTY1IDUuMDQwNDggNDMuNTQ1NSA0LjgyOTUxQzQzLjMzNDUgNC42MTg1MyA0My4wNDg0IDQuNSA0Mi43NSA0LjVIMzcuMTI1VjYuNzVINDEuNzE4NEM0MS45NTQ1IDguMTMxMTYgNDIuNjEzNCA5LjQwNSA0My42MDQyIDEwLjM5NThDNDQuNTk1IDExLjM4NjYgNDUuODY4OCAxMi4wNDU1IDQ3LjI1IDEyLjI4MTZWMTkuMjE4NEM0NS44Njg4IDE5LjQ1NDUgNDQuNTk1IDIwLjExMzQgNDMuNjA0MiAyMS4xMDQyQzQyLjYxMzQgMjIuMDk1IDQxLjk1NDUgMjMuMzY4OCA0MS43MTg0IDI0Ljc1VjI0Ljc1WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNNi43NSA0LjVINC41VjYuNzVINi43NVY0LjVaIiBmaWxsPSIjMEYwQzNEIi8+CjxwYXRoIGQ9Ik00OS41IDQuNUg0Ny4yNVY2Ljc1SDQ5LjVWNC41WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNNDkuNSAyNC43NUg0Ny4yNVYyN0g0OS41VjI0Ljc1WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNNi43NSAyNC43NUg0LjVWMjdINi43NVYyNC43NVoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTMxLjUgMjkuMjVIMjIuNUMyMS4wMDg3IDI5LjI1MTggMTkuNTc5IDI5Ljg0NSAxOC41MjQ1IDMwLjg5OTVDMTcuNDcgMzEuOTU0IDE2Ljg3NjggMzMuMzgzNyAxNi44NzUgMzQuODc1VjQ4LjM3NUMxNi44NzY4IDQ5Ljg2NjMgMTcuNDcgNTEuMjk2IDE4LjUyNDUgNTIuMzUwNUMxOS41NzkgNTMuNDA1IDIxLjAwODcgNTMuOTk4MiAyMi41IDU0SDMxLjVDMzIuOTkxMyA1My45OTgyIDM0LjQyMSA1My40MDUgMzUuNDc1NSA1Mi4zNTA1QzM2LjUzIDUxLjI5NiAzNy4xMjMyIDQ5Ljg2NjMgMzcuMTI1IDQ4LjM3NVYzNC44NzVDMzcuMTIzMiAzMy4zODM3IDM2LjUzIDMxLjk1NCAzNS40NzU1IDMwLjg5OTVDMzQuNDIxIDI5Ljg0NSAzMi45OTEzIDI5LjI1MTggMzEuNSAyOS4yNVYyOS4yNVpNMzQuODc1IDQ4LjM3NUMzNC44NzUgNDkuMjcwMSAzNC41MTk0IDUwLjEyODUgMzMuODg2NSA1MC43NjE1QzMzLjI1MzYgNTEuMzk0NCAzMi4zOTUxIDUxLjc1IDMxLjUgNTEuNzVIMjIuNUMyMS42MDQ5IDUxLjc1IDIwLjc0NjQgNTEuMzk0NCAyMC4xMTM1IDUwLjc2MTVDMTkuNDgwNiA1MC4xMjg1IDE5LjEyNSA0OS4yNzAxIDE5LjEyNSA0OC4zNzVWMzQuODc1QzE5LjEyNSAzMy45Nzk5IDE5LjQ4MDYgMzMuMTIxNCAyMC4xMTM1IDMyLjQ4ODVDMjAuNzQ2NCAzMS44NTU2IDIxLjYwNDkgMzEuNSAyMi41IDMxLjVIMjUuODc1VjM3LjEyNUgyMi41VjM5LjM3NUgzMS41VjM3LjEyNUgyOC4xMjVWMzEuNUgzMS41QzMyLjM5NTEgMzEuNSAzMy4yNTM2IDMxLjg1NTYgMzMuODg2NSAzMi40ODg1QzM0LjUxOTQgMzMuMTIxNCAzNC44NzUgMzMuOTc5OSAzNC44NzUgMzQuODc1VjQ4LjM3NVoiIGZpbGw9IiMwRjBDM0QiLz4KPHBhdGggZD0iTTIzLjk1NDYgMy43MDQ1OUwxOS40NTQ2IDguMjA0NTlDMTkuMjQzNyA4LjQxNTU2IDE5LjEyNTIgOC43MDE2NSAxOS4xMjUyIDguOTk5OTZDMTkuMTI1MiA5LjI5ODI3IDE5LjI0MzcgOS41ODQzNyAxOS40NTQ2IDkuNzk1MzRMMjMuOTU0NiAxNC4yOTUzTDI1LjU0NTQgMTIuNzA0NkwyMi45NjU4IDEwLjEyNUgzMC4zNzVDMzAuNjc1NSAxMC4xMDU2IDMwLjk3NjYgMTAuMTUwNiAzMS4yNTg0IDEwLjI1NjhDMzEuNTQwMSAxMC4zNjMxIDMxLjc5NiAxMC41MjgxIDMyLjAwODkgMTAuNzQxMUMzMi4yMjE4IDEwLjk1NCAzMi4zODY5IDExLjIwOTggMzIuNDkzMSAxMS40OTE2QzMyLjU5OTQgMTEuNzczMyAzMi42NDQzIDEyLjA3NDUgMzIuNjI1IDEyLjM3NVYxNC42MjVIMzQuODc1VjEyLjM3NUMzNC44OTI2IDExLjc3OTIgMzQuNzg4MiAxMS4xODYyIDM0LjU2ODMgMTAuNjMyM0MzNC4zNDg0IDEwLjA3ODQgMzQuMDE3NSA5LjU3NTI3IDMzLjU5NjEgOS4xNTM4NUMzMy4xNzQ3IDguNzMyNDMgMzIuNjcxNiA4LjQwMTYgMzIuMTE3NyA4LjE4MTY3QzMxLjU2MzcgNy45NjE3NSAzMC45NzA3IDcuODU3MzggMzAuMzc1IDcuODc0OTZIMjIuOTY1OEwyNS41NDU0IDUuMjk1MzRMMjMuOTU0NiAzLjcwNDU5WiIgZmlsbD0iIzBGMEMzRCIvPgo8cGF0aCBkPSJNMTkuMTI1IDE4QzE5LjEwNzQgMTguNTk1NyAxOS4yMTE4IDE5LjE4ODcgMTkuNDMxNyAxOS43NDI3QzE5LjY1MTYgMjAuMjk2NiAxOS45ODI1IDIwLjc5OTcgMjAuNDAzOSAyMS4yMjExQzIwLjgyNTMgMjEuNjQyNSAyMS4zMjg0IDIxLjk3MzQgMjEuODgyMyAyMi4xOTMzQzIyLjQzNjMgMjIuNDEzMiAyMy4wMjkzIDIyLjUxNzYgMjMuNjI1IDIyLjVIMzEuMDM0M0wyOC40NTQ2IDI1LjA3OTZMMzAuMDQ1NCAyNi42NzA0TDM0LjU0NTQgMjIuMTcwNEMzNC43NTYzIDIxLjk1OTQgMzQuODc0OCAyMS42NzMzIDM0Ljg3NDggMjEuMzc1QzM0Ljg3NDggMjEuMDc2NyAzNC43NTYzIDIwLjc5MDYgMzQuNTQ1NCAyMC41Nzk2TDMwLjA0NTQgMTYuMDc5NkwyOC40NTQ2IDE3LjY3MDRMMzEuMDM0MyAyMC4yNUgyMy42MjVDMjMuMzI0NSAyMC4yNjkzIDIzLjAyMzQgMjAuMjI0NCAyMi43NDE2IDIwLjExODFDMjIuNDU5OSAyMC4wMTE5IDIyLjIwNCAxOS44NDY4IDIxLjk5MTEgMTkuNjMzOUMyMS43NzgyIDE5LjQyMSAyMS42MTMxIDE5LjE2NTEgMjEuNTA2OSAxOC44ODM0QzIxLjQwMDYgMTguNjAxNiAyMS4zNTU3IDE4LjMwMDUgMjEuMzc1IDE4VjE1Ljc1SDE5LjEyNVYxOFoiIGZpbGw9IiM2MkUyQUEiLz4KPC9zdmc+Cg==" alt="payment-image">
                                            <p class="mb-4 reason-title">Flexible payment</p>
                                            <p class="reason-text">Spleet offers daily, monthly or<br> quarterly payment terms, to fit your<br> unique schedule.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="mb-1" src="https://spleet.africa/static/img/cosharing.17e763d.svg" alt="co-sharing-image">
                                            <p class="mb-4 reason-title">Co-sharing option</p>
                                            <p class="reason-text">Choose between our private<br> spaces, or living in affordable<br> shared spaces with verified<br> housemates.</p>
                                        </div>
    
                                        <div class="col-md-6">
                                            <img class="mb-1" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTMiIGhlaWdodD0iNTYiIHZpZXdCb3g9IjAgMCA1MyA1NiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIyIDQyQzMzLjA0NTcgNDIgNDIgMzMuMDQ1NyA0MiAyMkM0MiAxMC45NTQzIDMzLjA0NTcgMiAyMiAyQzEwLjk1NDMgMiAyIDEwLjk1NDMgMiAyMkMyIDMzLjA0NTcgMTAuOTU0MyA0MiAyMiA0MloiIHN0cm9rZT0iIzBGMEMzRCIgc3Ryb2tlLXdpZHRoPSIzIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yNi45MTI3IDE1SDI0LjIxODJWMTguNUgyMS42NzY0TDE5LjcyOTEgMTVIMTcuNDA1NVYxOC41SDE0VjIwLjg1NzFIMTcuNDA1NVYyMi40Mjg2SDE0VjI0Ljc4NTdIMTcuNDA1NVYyOC43MTQzSDIwLjEwNTVWMjQuNzg1N0gyMi40MTU0TDI0LjYyMTggMjguNzE0M0gyNi45MTI3VjI0Ljc4NTdIMzBWMjIuNDI4NkgyNi45MTI3VjIwLjg1NzFIMzBWMTguNUgyNi45MTI3VjE1Wk0yNC4yMTgyIDIyLjQyODZWMjAuODU3MUgyMi45ODc5TDIzLjg2MjIgMjIuNDI4NkgyNC4yMTgyWk0yMS4wOTE1IDIyLjQyODZMMjAuMjA5IDIwLjg1NzFIMjAuMTA1NVYyMi40Mjg2SDIxLjA5MTVaIiBmaWxsPSIjNjJFMkFBIi8+CjxwYXRoIGQ9Ik01MS4wMTcgNTMuNDg3MUwzNS4zNDU3IDM2Ljc5MDYiIHN0cm9rZT0iIzBGMEMzRCIgc3Ryb2tlLXdpZHRoPSIzIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==" alt="charge-image">
                                            <p class="mb-4 reason-title">No hidden charges</p>
                                            <p class="reason-text">For homes at tent there are no<br> extra or hidden charges. Pay once,<br> Pay all.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                {{-- <div class="col-md-10 text-center">
                                    You are three steps away from better living.
                                </div> --}}
    
                                <div class="col-md-4">
                                    <div class="step-group">
                                        <span class="step-number">01</span>
                                        <hr class="step-line">
                                    </div>
                                    <div class="step-detail">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTQwLjYwOTcgMjkuMTI5NkMzMy44ODYgMjkuMTI5NiAyOC40MDQ2IDM0LjYxMSAyOC40MDQ2IDQxLjMzNDdDMjguNDA0NiA0OC4wNTg0IDMzLjg4NiA1My41NDEyIDQwLjYwOTcgNTMuNTQxMkM0My42Mzg5IDUzLjU0MTIgNDYuNDEwNCA1Mi40MjE1IDQ4LjU0NzggNTAuNTgzOUw0OS4zNTEzIDUxLjM4NzRMNDguMjE1NSA1Mi41MjMyQzQ3Ljk0NjcgNTIuNzkyNCA0Ny43OTU4IDUzLjE1NzMgNDcuNzk1OCA1My41Mzc3QzQ3Ljc5NTggNTMuOTE4MSA0Ny45NDY3IDU0LjI4MyA0OC4yMTU1IDU0LjU1MjNMNTYuODMyMiA2My4xNzA0QzU3LjEwMTUgNjMuNDM5NiA1Ny40NjY3IDYzLjU5MDggNTcuODQ3NSA2My41OTA4QzU4LjIyODIgNjMuNTkwOCA1OC41OTM0IDYzLjQzOTYgNTguODYyNyA2My4xNzA0TDYzLjE3MTggNTguODYxM0M2My40NDA1IDU4LjU5MjEgNjMuNTkxNSA1OC4yMjcyIDYzLjU5MTUgNTcuODQ2OEM2My41OTE1IDU3LjQ2NjQgNjMuNDQwNSA1Ny4xMDE1IDYzLjE3MTggNTYuODMyM0w1NC41NTM2IDQ4LjIxNDFDNTQuNDE3MiA0OC4wNzg0IDU0LjI1NSA0Ny45NzE1IDU0LjA3NjUgNDcuODk5N0M1My44OTggNDcuODI3OSA1My43MDY5IDQ3Ljc5MjcgNTMuNTE0NSA0Ny43OTYyQzUzLjE0MjkgNDcuODAyMiA1Mi43ODggNDcuOTUyIDUyLjUyNDUgNDguMjE0MUw1MS4zODQ1IDQ5LjM1NDFMNTAuNDk0MSA0OC40NjM3QzUxLjk0OCA0Ni40NTQ4IDUyLjgxNDggNDMuOTk1MiA1Mi44MTQ4IDQxLjMzNDdDNTIuODE0OCAzNC42MTEgNDcuMzMzNCAyOS4xMjk2IDQwLjYwOTcgMjkuMTI5NlpNNDAuNjA5NyAzMi4wMDI4QzQ1Ljc4MTMgMzIuMDAyOCA0OS45NDMgMzYuMTYzMSA0OS45NDMgNDEuMzM0N0M0OS45NDMgNDYuNTA2NCA0NS43ODEzIDUwLjY2OCA0MC42MDk3IDUwLjY2OEMzNS40MzggNTAuNjY4IDMxLjI3NjQgNDYuNTA2NCAzMS4yNzY0IDQxLjMzNDdDMzEuMjc2NCAzNi4xNjMxIDM1LjQzOCAzMi4wMDI4IDQwLjYwOTcgMzIuMDAyOFpNNTMuNTM1NiA1MS4yNjEyTDYwLjEyMzMgNTcuODQ0N0w1Ny44NDQ3IDYwLjEyMzRMNTEuMjU2OSA1My41NDEyTDUzLjUzNTYgNTEuMjYxMloiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0yMC40NDI3IDAuNjQ1ODAyTDAuNzc2MjIyIDEzLjU2ODhDMC4zNjczMTIgMTMuODM3MiAwLjEyMzE3OSAxNC4yOTU0IDAuMTI4Mzg1IDE0Ljc4NDZMMC40MTAyMzYgNDAuNjMwOEMwLjQxODcyOSA0MS40MTc4IDEuMDU5MSA0Mi4wNTEzIDEuODQ2MTMgNDIuMDUxM0gyNC44MjA1VjM5LjE3OTVIMy4yNjY2MUwzLjAwODU5IDE1LjUzNzdMMjEuMjI1MSAzLjU2ODE1TDM5LjE3OTUgMTUuNTM3N0wzOS4xNzI0IDI1LjUzNzFMNDIuMDQ0MiAyNS41Mzk4TDQyLjA1MTMgMTQuNzcwNkM0Mi4wNTE3IDE0LjI5IDQxLjgxMTcgMTMuODQxMSA0MS40MTE4IDEzLjU3NDVMMjIuMDI3MiAwLjY1MTM1QzIxLjc4NjYgMC40OTA5ODIgMjEuNTAzMSAwLjQwNjg2OSAyMS4yMjE0IDAuNDEwMTI1QzIwLjkzOTYgMC40MTI4MzkgMjAuNjcyIDAuNDk1MDM2IDIwLjQ0MjcgMC42NDU2MzZWMC42NDU4MDJaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K" alt="find home image">
                                        <p class="detail-title">Find Your Home</p>
                                        <p class="detail-text">Browse our bouquet of homes and choose your favourite space.</p>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <div class="step-group">
                                        <span class="step-number">02</span>
                                        <hr class="step-line">
                                    </div>
                                    <div class="step-detail">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgiIGhlaWdodD0iNjEiIHZpZXdCb3g9IjAgMCA1OCA2MSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTU0Ljk4ODcgMC41NzY0MTZIMy43MTUwNUMyLjE0NDU2IDAuNTc2NDE2IDAuODY2NTE2IDEuOTE2NjcgMC44NjY1MTYgMy41NjM2MVY1Ny4zMzNDMC44NjY1MTYgNTguOTggMi4xNDQ1NiA2MC4zMjAyIDMuNzE1MDUgNjAuMzIwMkg1NC45ODg3QzU2LjU1OTIgNjAuMzIwMiA1Ny44MzcyIDU4Ljk4IDU3LjgzNzIgNTcuMzMzVjMuNTYzNjFDNTcuODM3MiAxLjkxNjY3IDU2LjU1OTIgMC41NzY0MTYgNTQuOTg4NyAwLjU3NjQxNlpNNTQuOTg4NyA1OC4zMjg4SDMuNzE1MDVDMy4xOTE4NyA1OC4zMjg4IDIuNzY1NTQgNTcuODgxNyAyLjc2NTU0IDU3LjMzM1YxMC41MzM3SDEzLjIxMDJWOC41NDIyNkgyLjc2NTU0VjMuNTYzNjFDMi43NjU1NCAzLjAxNDk2IDMuMTkxODcgMi41Njc4OCAzLjcxNTA1IDIuNTY3ODhINTQuOTg4N0M1NS41MTE4IDIuNTY3ODggNTUuOTM4MiAzLjAxNDk2IDU1LjkzODIgMy41NjM2MVY4LjU0MjI2SDE4LjkwNzJWMTAuNTMzN0g1NS45MzgyVjU3LjMzM0M1NS45MzgyIDU3Ljg4MTcgNTUuNTExOCA1OC4zMjg4IDU0Ljk4ODcgNTguMzI4OFoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0xNy4wMDgyIDguNTQyMjdIMTUuMTA5MlYxMC41MzM3SDE3LjAwODJWOC41NDIyN1oiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik00Ni40NDMxIDQuNTU5MzNINDQuNTQ0MVY2LjU1MDc5SDQ2LjQ0MzFWNC41NTkzM1oiIGZpbGw9IiM2MkUyQUEiLz4KPHBhdGggZD0iTTUwLjI0MTEgNC41NTkzM0g0OC4zNDIxVjYuNTUwNzlINTAuMjQxMVY0LjU1OTMzWiIgZmlsbD0iIzYyRTJBQSIvPgo8cGF0aCBkPSJNNTQuMDM5MiA0LjU1OTMzSDUyLjE0MDFWNi41NTA3OUg1NC4wMzkyVjQuNTU5MzNaIiBmaWxsPSIjNjJFMkFBIi8+CjxwYXRoIGQ9Ik0zMC4zMDE0IDQzLjM5MjhWMzguNDE0MkMzMC4zMDE0IDM2Ljc2NzIgMjkuMDIzMyAzNS40MjcgMjcuNDUyOCAzNS40MjdIOC40NjI2QzYuODkyMSAzNS40MjcgNS42MTQwNiAzNi43NjcyIDUuNjE0MDYgMzguNDE0MlY0My4zOTI4QzUuMDg5OTMgNDMuMzkyOCA0LjY2NDU1IDQzLjgzODkgNC42NjQ1NSA0NC4zODg1VjUyLjM1NDRWNTQuMzQ1OEM0LjY2NDU1IDU0Ljg5NTUgNS4wODk5MyA1NS4zNDE2IDUuNjE0MDYgNTUuMzQxNkM2LjEzODE5IDU1LjM0MTYgNi41NjM1NyA1NC44OTU1IDYuNTYzNTcgNTQuMzQ1OFY1My4zNTAxSDI5LjM1MThWNTQuMzQ1OEMyOS4zNTE4IDU0Ljg5NTUgMjkuNzc3MiA1NS4zNDE2IDMwLjMwMTQgNTUuMzQxNkMzMC44MjU1IDU1LjM0MTYgMzEuMjUwOSA1NC44OTU1IDMxLjI1MDkgNTQuMzQ1OFY1Mi4zNTQ0VjQ0LjM4ODVDMzEuMjUwOSA0My44Mzg5IDMwLjgyNTUgNDMuMzkyOCAzMC4zMDE0IDQzLjM5MjhaTTcuNTEzMDkgMzguNDE0MkM3LjUxMzA5IDM3Ljg2NTUgNy45Mzk0MiAzNy40MTg0IDguNDYyNiAzNy40MTg0SDI3LjQ1MjhDMjcuOTc2IDM3LjQxODQgMjguNDAyMyAzNy44NjU1IDI4LjQwMjMgMzguNDE0MlY0My4zOTI4SDI2LjUwMzNWNDAuNDA1NkMyNi41MDMzIDM5Ljg1NiAyNi4wNzc5IDM5LjQwOTkgMjUuNTUzOCAzOS40MDk5SDE5Ljg1NjdDMTkuMzMyNiAzOS40MDk5IDE4LjkwNzIgMzkuODU2IDE4LjkwNzIgNDAuNDA1NlY0My4zOTI4SDE3LjAwODJWNDAuNDA1NkMxNy4wMDgyIDM5Ljg1NiAxNi41ODI4IDM5LjQwOTkgMTYuMDU4NyAzOS40MDk5SDEwLjM2MTZDOS44Mzc0OSAzOS40MDk5IDkuNDEyMTEgMzkuODU2IDkuNDEyMTEgNDAuNDA1NlY0My4zOTI4SDcuNTEzMDlWMzguNDE0MlpNMjQuNjA0MyA0My4zOTI4SDIwLjgwNjJWNDEuNDAxNEgyNC42MDQzVjQzLjM5MjhaTTE1LjEwOTIgNDMuMzkyOEgxMS4zMTExVjQxLjQwMTRIMTUuMTA5MlY0My4zOTI4Wk02LjU2MzU3IDQ1LjM4NDNIMTAuMzYxNkgxNi4wNTg3SDE5Ljg1NjdIMjUuNTUzOEgyOS4zNTE4VjUxLjM1ODdINi41NjM1N1Y0NS4zODQzWiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTkuNDEyMSAzMy40MzU1QzkuOTM2MjMgMzMuNDM1NSAxMC4zNjE2IDMyLjk4OTQgMTAuMzYxNiAzMi40Mzk4VjMxLjQ0NEgyNS41NTM4VjMyLjQzOThDMjUuNTUzOCAzMi45ODk0IDI1Ljk3OTIgMzMuNDM1NSAyNi41MDMzIDMzLjQzNTVDMjcuMDI3NCAzMy40MzU1IDI3LjQ1MjggMzIuOTg5NCAyNy40NTI4IDMyLjQzOThWMzAuNDQ4M1YyMi40ODI1QzI3LjQ1MjggMjEuOTMyOCAyNy4wMjc0IDIxLjQ4NjcgMjYuNTAzMyAyMS40ODY3VjE2LjUwODFDMjYuNTAzMyAxNC44NjEyIDI1LjIyNTMgMTMuNTIwOSAyMy42NTQ4IDEzLjUyMDlIMTIuMjYwNkMxMC42OTAxIDEzLjUyMDkgOS40MTIxIDE0Ljg2MTIgOS40MTIxIDE2LjUwODFWMjEuNDg2N0M4Ljg4Nzk3IDIxLjQ4NjcgOC40NjI1OSAyMS45MzI4IDguNDYyNTkgMjIuNDgyNVYzMC40NDgzVjMyLjQzOThDOC40NjI1OSAzMi45ODk0IDguODg3OTcgMzMuNDM1NSA5LjQxMjEgMzMuNDM1NVpNMTAuMzYxNiAyMy40NzgySDE0LjE1OTdIMjEuNzU1N0gyNS41NTM4VjI5LjQ1MjZIMTAuMzYxNlYyMy40NzgyWk0yMC44MDYyIDIxLjQ4NjdIMTUuMTA5MlYxOS40OTUzSDIwLjgwNjJWMjEuNDg2N1pNMTEuMzExMSAxNi41MDgxQzExLjMxMTEgMTUuOTU5NCAxMS43Mzc1IDE1LjUxMjQgMTIuMjYwNiAxNS41MTI0SDIzLjY1NDhDMjQuMTc3OSAxNS41MTI0IDI0LjYwNDMgMTUuOTU5NCAyNC42MDQzIDE2LjUwODFWMjEuNDg2N0gyMi43MDUzVjE4LjQ5OTZDMjIuNzA1MyAxNy45NDk5IDIyLjI3OTkgMTcuNTAzOCAyMS43NTU3IDE3LjUwMzhIMTQuMTU5N0MxMy42MzU1IDE3LjUwMzggMTMuMjEwMSAxNy45NDk5IDEzLjIxMDEgMTguNDk5NlYyMS40ODY3SDExLjMxMTFWMTYuNTA4MVoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0zNy44OTc1IDI3LjQ2OTdIMzQuMDk5NUMzMy41NzUzIDI3LjQ2OTcgMzMuMTUgMjcuOTE1OCAzMy4xNSAyOC40NjU0VjMyLjQ0ODNDMzMuMTUgMzIuOTk4IDMzLjU3NTMgMzMuNDQ0IDM0LjA5OTUgMzMuNDQ0SDM3Ljg5NzVDMzguNDIxNyAzMy40NDQgMzguODQ3IDMyLjk5OCAzOC44NDcgMzIuNDQ4M1YyOC40NjU0QzM4Ljg0NyAyNy45MTU4IDM4LjQyMTcgMjcuNDY5NyAzNy44OTc1IDI3LjQ2OTdaTTM2Ljk0OCAzMS40NTI2SDM1LjA0OVYyOS40NjExSDM2Ljk0OFYzMS40NTI2WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTU0LjAzOTEgMTkuNDk1M0g0MC43NDZWMjEuNDg2OEg1NC4wMzkxVjE5LjQ5NTNaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNNTQuMDM5MiAyOS40NjExSDQwLjc0NlYzMS40NTI2SDU0LjAzOTJWMjkuNDYxMVoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik00MC40Njc4IDE1LjgwNDFDNDAuMDk2NSAxNS40MTQ4IDM5LjQ5NjQgMTUuNDE0OCAzOS4xMjUyIDE1LjgwNDFMMzcuNTA0NCAxNy41MDM4SDM0LjA5OTRDMzMuNTc1MyAxNy41MDM4IDMzLjE0OTkgMTcuOTQ5OSAzMy4xNDk5IDE4LjQ5OTZWMjIuNDgyNUMzMy4xNDk5IDIyLjYxMTkgMzMuMTc1NSAyMi43NDE0IDMzLjIyMyAyMi44NjI4QzMzLjMxODkgMjMuMTA1OCAzMy41MDQxIDIzLjMgMzMuNzM2NyAyMy40MDE1QzMzLjg1MjUgMjMuNDUxMyAzMy45NzYgMjMuNDc4MiAzNC4wOTk0IDIzLjQ3ODJIMzcuODk3NUMzOC40MjE2IDIzLjQ3ODIgMzguODQ3IDIzLjAzMjEgMzguODQ3IDIyLjQ4MjVWMTguOTExOEw0MC40Njc4IDE3LjIxMjFDNDAuODM5MSAxNi44MjI3IDQwLjgzOTEgMTYuMTkzNCA0MC40Njc4IDE1LjgwNDFaTTM1LjYwNTMgMTkuNDk1M0wzNS4wNDg5IDIwLjA3ODhWMTkuNDk1M0gzNS42MDUzWk0zNi45NDggMjEuNDg2N0gzNi4zOTE1TDM2Ljk0OCAyMC45MDMyVjIxLjQ4NjdaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K" alt="book a space">
                                        <p class="detail-title">Book a space</p>
                                        <p class="detail-text">Look through our available options and make your preferred selection.</p>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <div class="step-group">
                                        <span class="step-number">03</span>
                                        <hr class="step-line">
                                    </div>   
                                    <div class="step-detail">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTMiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA5MyA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIxLjIwNzUgMjMuNzgxNEg5LjU4MDI1QzguNzYwMjQgMjMuNzgxNCA4LjA5NDczIDIzLjA4MTMgOC4wOTQ3MyAyMi4yMTdWOS44MzM4N0M4LjA5NDczIDguOTcwMjggOC43NjAyNCA4LjI2OTQ0IDkuNTgwMjUgOC4yNjk0NEgyMS4yMDY3QzIyLjAyNjcgOC4yNjk0NCAyMi42OTIyIDguOTY5NSAyMi42OTIyIDkuODMzODdWMjIuMjE3QzIyLjY5MyAyMy4wODA1IDIyLjAyNzUgMjMuNzgxNCAyMS4yMDc1IDIzLjc4MTRaTTExLjA2NTggMjAuNjUyNUgxOS43MjEyVjExLjM5ODNIMTEuMDY1OFYyMC42NTI1WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTU5LjQxNjcgMTcuNDE5M0g0NS4wMjkzQzQ0LjIwOTMgMTcuNDE5MyA0My41NDM4IDE2LjcxOTIgNDMuNTQzOCAxNS44NTQ5QzQzLjU0MzggMTQuOTkxMyA0NC4yMDkzIDE0LjI5MDQgNDUuMDI5MyAxNC4yOTA0SDU5LjQxNzRDNjAuMjM3NCAxNC4yOTA0IDYwLjkwMjkgMTQuOTkwNSA2MC45MDI5IDE1Ljg1NDlDNjAuOTAyMiAxNi43MTkyIDYwLjIzNzQgMTcuNDE5MyA1OS40MTY3IDE3LjQxOTNaIiBmaWxsPSIjNjJFMkFBIi8+CjxwYXRoIGQ9Ik00MC40NzEgMzMuMjk5Nkg5LjU4MDI1QzguNzYwMjQgMzMuMjk5NiA4LjA5NDczIDMyLjU5OTUgOC4wOTQ3MyAzMS43MzUxQzguMDk0NzMgMzAuODcwOCA4Ljc2MDI0IDMwLjE3MDcgOS41ODAyNSAzMC4xNzA3SDQwLjQ3MDNDNDEuMjkwMyAzMC4xNzA3IDQxLjk1NTggMzAuODcwOCA0MS45NTU4IDMxLjczNTFDNDEuOTU1OCAzMi41OTk1IDQxLjI5MSAzMy4yOTk2IDQwLjQ3MSAzMy4yOTk2WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTQwLjQ3MSA0MS44OTU4SDkuNTgwMjVDOC43NjAyNCA0MS44OTU4IDguMDk0NzMgNDEuMTk1NyA4LjA5NDczIDQwLjMzMTNDOC4wOTQ3MyAzOS40Njc3IDguNzYwMjQgMzguNzY2OSA5LjU4MDI1IDM4Ljc2NjlINDAuNDcwM0M0MS4yOTAzIDM4Ljc2NjkgNDEuOTU1OCAzOS40NjcgNDEuOTU1OCA0MC4zMzEzQzQxLjk1NjUgNDEuMTk0OSA0MS4yOTEgNDEuODk1OCA0MC40NzEgNDEuODk1OFoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik00NS44MTg5IDUwLjAyNzFINS4yMDkwOEMyLjc1MTI4IDUwLjAyNzEgMC43NTI1MDIgNDcuOTIyMiAwLjc1MjUwMiA0NS4zMzM4VjQuODMxNDJDMC43NTI1MDIgMi4yNDI5OCAyLjc1MTI4IDAuMTM4MTIzIDUuMjA5MDggMC4xMzgxMjNINjMuNzg4NkM2Ni4yNDY0IDAuMTM4MTIzIDY4LjI0NTEgMi4yNDI5OCA2OC4yNDUxIDQuODMxNDJWMjQuMjI0NUM2OC4yNDUxIDI1LjA4ODEgNjcuNTc5NiAyNS43ODg5IDY2Ljc1OTYgMjUuNzg4OUM2NS45Mzk2IDI1Ljc4ODkgNjUuMjc0MSAyNS4wODg4IDY1LjI3NDEgMjQuMjI0NVY0LjgzMTQyQzY1LjI3NDEgMy45Njg2MSA2NC42MDc4IDMuMjY2OTkgNjMuNzg4NiAzLjI2Njk5SDUuMjA5MDhDNC4zODk4MSAzLjI2Njk5IDMuNzIzNTUgMy45Njg2MSAzLjcyMzU1IDQuODMxNDJWNDUuMzMzOEMzLjcyMzU1IDQ2LjE5NjYgNC4zODk4MSA0Ni44OTgyIDUuMjA5MDggNDYuODk4Mkg0NS44MTg5QzQ2LjYzODkgNDYuODk4MiA0Ny4zMDQ0IDQ3LjU5ODMgNDcuMzA0NCA0OC40NjI3QzQ3LjMwNDQgNDkuMzI3IDQ2LjYzODkgNTAuMDI3MSA0NS44MTg5IDUwLjAyNzFaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNODkuMTQxMyA0MC42NDQ0SDg4Ljg4NUw4My43NDg4IDMyLjM2NjdDODIuOTY4OSAzMS4xODYxIDgxLjcxMzcgMzAuNDgxNCA4MC4zOTAxIDMwLjQ4MTRINjMuOTM0OUM2Mi41Njg5IDMwLjQ4MTQgNjEuMjg5OSAzMS4yMjIgNjAuNDkgMzIuNTAwNkw1NS43MDU4IDQwLjY0NDRINTUuNDc0MUM1My40MjYzIDQwLjY0NDQgNTEuNzYwMyA0Mi4zOTg4IDUxLjc2MDMgNDQuNTU1MVY1MS40OTgxQzUxLjc2MDMgNTMuNjU0MyA1My40MjYzIDU1LjQwODggNTUuNDc0MSA1NS40MDg4SDU3LjI5NDZDNTcuOTM2MyA1Ny42Njc4IDU5LjkyNTUgNTkuMzIwMiA2Mi4yNzU2IDU5LjMyMDJDNjQuNjI1NyA1OS4zMjAyIDY2LjYxNDggNTcuNjY3OCA2Ny4yNTU4IDU1LjQwOTVINzcuMzU5NkM3OC4wMDA2IDU3LjY2ODYgNzkuOTg5NyA1OS4zMjAyIDgyLjMzOTggNTkuMzIwMkM4NC42ODk5IDU5LjMyMDIgODYuNjc5IDU3LjY2NzggODcuMzIgNTUuNDA5NUg4OS4xNDEzQzkxLjE4OTEgNTUuNDA5NSA5Mi44NTUxIDUzLjY1NTEgOTIuODU1MSA1MS40OTg4VjQ0LjU1NTlDOTIuODU1MSA0Mi4zOTg4IDkxLjE4OTEgNDAuNjQ0NCA4OS4xNDEzIDQwLjY0NDRaTTgxLjI4NTggMzQuMTE1N0w4NS4zMzYxIDQwLjY0NDRINzMuNzkzNlYzMy42MTAzSDgwLjM5MDFDODAuNzQ2NiAzMy42MTAzIDgxLjA4MTYgMzMuODA4MSA4MS4yODU4IDM0LjExNTdaTTYyLjk5NDUgMzQuMTg1QzYzLjIxOTYgMzMuODI1MiA2My41NzA5IDMzLjYxMDMgNjMuOTM1NiAzMy42MTAzSDcwLjgyMjVWNDAuNjQ0NEg1OS4xOTk4TDYyLjk5NDUgMzQuMTg1Wk02Mi4yNzU2IDU2LjE5MTRDNjEuMDQ3IDU2LjE5MTQgNjAuMDQ3MyA1NS4xMzg1IDYwLjA0NzMgNTMuODQ1MUM2MC4wNDczIDUyLjU1MDkgNjEuMDQ3IDUxLjQ5ODggNjIuMjc1NiA1MS40OTg4QzYzLjUwNDEgNTEuNDk4OCA2NC41MDM4IDUyLjU1MTcgNjQuNTAzOCA1My44NDUxQzY0LjUwMzggNTUuMTM5MyA2My41MDQxIDU2LjE5MTQgNjIuMjc1NiA1Ni4xOTE0Wk04Mi4zNDA1IDU2LjE5MTRDODEuMTEyIDU2LjE5MTQgODAuMTEyMyA1NS4xMzg1IDgwLjExMjMgNTMuODQ1MUM4MC4xMTIzIDUyLjU1MDkgODEuMTEyIDUxLjQ5ODggODIuMzQwNSA1MS40OTg4QzgzLjU2OTEgNTEuNDk4OCA4NC41Njg4IDUyLjU1MTcgODQuNTY4OCA1My44NDUxQzg0LjU2ODggNTUuMTM5MyA4My41NjkxIDU2LjE5MTQgODIuMzQwNSA1Ni4xOTE0Wk04OS44ODQgNTEuNDk4OEM4OS44ODQgNTEuOTMwMyA4OS41NTEzIDUyLjI4MDcgODkuMTQxMyA1Mi4yODA3SDg3LjMyMDhDODYuNjc5OCA1MC4wMjE2IDg0LjY5MDcgNDguMzcgODIuMzQwNSA0OC4zN0M3OS45OTA0IDQ4LjM3IDc4LjAwMTMgNTAuMDIyNCA3Ny4zNjAzIDUyLjI4MDdINjcuMjU1OEM2Ni42MTQ4IDUwLjAyMTYgNjQuNjI1NyA0OC4zNyA2Mi4yNzU2IDQ4LjM3QzU5LjkyNTUgNDguMzcgNTcuOTM2MyA1MC4wMjI0IDU3LjI5NTMgNTIuMjgwN0g1NS40NzQ4QzU1LjA2NDggNTIuMjgwNyA1NC43MzIxIDUxLjkyOTUgNTQuNzMyMSA1MS40OTg4VjQ0LjU1NTlDNTQuNzMyMSA0NC4xMjQ0IDU1LjA2NDggNDMuNzc0IDU1LjQ3NDggNDMuNzc0SDg5LjE0MTNDODkuNTUxMyA0My43NzQgODkuODg0IDQ0LjEyNTIgODkuODg0IDQ0LjU1NTlWNTEuNDk4OFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=" alt="pay and move in">
                                        <p class="detail-title">Pay and move in</p>
                                        <p class="detail-text">Make payment and prepare to move into your new home!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer" style="margin-top: 100px; background: #0f0c3d;">
                    <div class="container my-auto">    
                        <div class="copyright my-auto" >
                            <span style="font-weight: 500; font-size: 12px; line-height: 18px; color: #fff; margin-right: 30px;">&copy; Tent 2021</span>
                            <span  style="font-weight: 500; font-size: 12px; line-height: 18px; color: #fff; margin-right: 50px;">Privacy</span>
                            <span  style="font-weight: 500; font-size: 12px; line-height: 18px; color: #fff; margin-right: 50px;">Terms</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js-new/sb-admin-2.min.js"></script>

    </body>
</html>
