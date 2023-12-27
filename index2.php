<?php
    session_start();

    // Check if the session variable is set
    if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
        // Display the pop-up in JavaScript
        echo "<script type='text/javascript'> alert('Login successful'); </script>";

        // Reset the session variable to avoid showing the pop-up again on page refresh
        $_SESSION['login_success'] = false;
    }
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
    <script>
        // Function to show a pop-up with the message "Login successful"
        function showLoginSuccessPopup() {
            alert("Login successful");
        }

        // You can call this function when needed, for example, after a successful login.
        // Example: showLoginSuccessPopup();
    </script>
    <header class="index2-header">
        <div class="menu_side">
            <div class="navbar">
                <div class="menu">
                    <span></span>
                    <i class="bi bi-list"><img src="webtunes.png" alt="wt"></i>
                    <h6>Webtunes</h6>
                </div>
            </div>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-house-door-fill"></i> Beranda</h4>
                <h4 class="active" onclick="goToPlaylist()"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpeg" alt="DJ">
                    <h5>
                        Dj Malam Pagi x Hamil Duluan
                        <div class="subtitle">DJ PIMI</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/1.jpeg" alt="DJ">
                    <h5>
                        Dj Malam Pagi x Hamil Duluan
                        <div class="subtitle">DJ PIMI</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/1.jpeg" alt="DJ">
                    <h5>
                        Dj Malam Pagi x Hamil Duluan
                        <div class="subtitle">DJ PIMI</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/1.jpeg" alt="DJ">
                    <h5>
                        Dj Malam Pagi x Hamil Duluan
                        <div class="subtitle">DJ PIMI</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/1.jpeg" alt="DJ">
                    <h5>
                        Dj Malam Pagi x Hamil Duluan
                        <div class="subtitle">DJ PIMI</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/1.jpeg" alt="DJ">
                    <h5>
                        Dj Malam Pagi x Hamil Duluan
                        <div class="subtitle">DJ PIMI</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/1.jpeg" alt="DJ">
                    <h5>
                        Dj Malam Pagi x Hamil Duluan
                        <div class="subtitle">DJ PIMI</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>
            </div>
        </div>
    
    
        <div class="song_side">
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
                            <div class="content">
                                Dj Malam Pagi x Hamil Duluan
                                <div class="subtitle">DJ PIMI</div>
                            </div>
                        </a> -->

                    </div>
                </div>
                <div class="user">
                    <img src="img/profile.png" alt="User" title="Zy1">
                </div>
            </nav>
            <div class="content">
                
                <h1>JKT 48-Seventeen</h1>
                <p>
                    Di tempat kulahir dan dibesarkan Di kota yang dekat laut ini
                    <br>
                    Setelah sekian lama aku pulang Sudah ada shopping mall berdiri
                </p>
                <div class="buttons">
                    <button>PLAY</button>
                </div>

            </div>
            
            <div class="popular_song">
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
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                        <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="item">
                    <li>
                        <img src="img/2.jpeg" alt="freya" title="JKT48">
                    </li>
                    <li>
                        <img src="img/1.jpeg" alt="DJ" title="DJ PIMI">
                    </li>
                    <li>
                        <img src="img/4.jpeg" alt="nadhif" title="Nadhif Basalamah">
                    </li>
                    <li>
                        <img src="img/5.jpeg" alt="nemen" title="NDX AKA">
                    </li>
                    <li>
                        <img src="img/14.jpeg" alt="tulus" title="Tulus">
                    </li>
                    <li>
                        <img src="img/23.jpeg" alt="5" title="Maroon 5">
                    </li>
                    <li>
                        <img src="img/24.jpeg" alt="lana" title="Lana Del Rey">
                    </li>
                    <li>
                        <img src="img/9.jpeg" alt="jvke" title="JVKE x Fuji Kaze">
                    </li>
                    <li>
                        <img src="img/10.jpeg" alt="stephen" title="Stephen Sanchez">
                    </li>
                    <li>
                        <img src="img/22.jpeg" alt="senja" title="Batas Senja">
                    </li>
                    <li>
                        <img src="img/16.jpeg" alt="denny" title="Los Dol">
                    </li>
                    <li>
                        <img src="img/17.jpeg" alt="dalan" title="Hendra Kumbara">
                    </li>
                    <li>
                        <img src="img/15.jpeg" alt="evan" title="Evan Loss">
                    </li>
                    <li>
                        <img src="img/25.jpeg" alt="chris" title="Coldplay">
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
            <script>
                function goToPlaylist() {
                    window.location.href = 'index3.php';
                }
            </script>
        </div>
    </header>
    <script src="app.js"></script>
</body>

</html>