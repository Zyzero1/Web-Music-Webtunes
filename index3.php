<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style3.css">
    <title>Webtunes</title>
</head>

<body>
    <header>
        <div class="menu_side2">
            <div class="navbar">
                <div class="menu">
                    <span></span>
                    <i class="bi bi-list"><img src="webtunes.png" alt="wt"></i>
                    <h6 class="active" onclick="goToBeranda()">Webtunes</h6>
                </div>
            </div>
            <div class="playlist">
                <h4 class="active" onclick="goToBeranda()"><span></span><i class="bi bi-house-door-fill"></i> Beranda</h4>
                <h4 class="active" ><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
            </div>
        </div>
        

        <div class="song_side2">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                    <div class="search_results">
                         <!-- <a href="" class="card">
                            <img src="img/1.jpeg" alt="">
                            <div class="content2">
                                Dj Malam Pagi x Hamil Duluan
                                <div class="subtitle">DJ PIMI</div>
                            </div>
                        </a>  -->

                    </div>
                </div>
                <div class="user">
                    <img src="img/profile.png" alt="User" title="Zy1">
                </div>
            </nav>
            <div class="content2">
                <div class="img">
                    <img src="note.jpg" alt="Music">
                </div>
                <h1>Playlist</h1>
                <p>
                    Playlist lagu populer
                    <br>
                    17 lagu
                </p>
                <div class="buttons">
                    <button id="playButton">PLAY</button>
                </div>
            </div>
            <div class="popular_song2">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                        <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li> 
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li> 
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li> 
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li> 
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpeg" alt="DJ">
                            <i class="bi playListPlay bi-play-circle-fill" id="21"></i>
                        </div>
                        <h5>Dj Malam Pagi x Hamil Duluan
                            <br>
                            <div class="subtitle">DJ PIMI</div>
                        </h5>
                    </li> 
                </div>
            </div>  
        </div>

        <div class="master_play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/1.jpeg" alt="DJ" id="poster_master_play">
            <h5 id="title">Dj Malam Pagi x Hamil Duluan<br>
                <div class="subtitle">DJ PIMI</div>
            </h5>
            <div class="icon">
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>

            <div class="vol">
                <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>

        <script>
            function goToBeranda() {
                window.location.href = 'index2.php';
            }
        </script>
        <script>
            // Function to handle the click event on the "PLAY" button
            function playButtonClicked() {
                playSelectedSong('1'); // Play the song with ID 1
            }
        
            // Add an event listener to the "PLAY" button
            document.getElementById('playButton').addEventListener('click', playButtonClicked);
        </script>
    </header>
    <script src="app.js"></script>
</body>

</html>
