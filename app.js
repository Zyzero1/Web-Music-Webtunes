const music = new Audio('sound/1.mp3');

// create Array

const songs = [
    {
        id:'1',
        songName:` Dj Malam Pagi x Hamil Duluan <br>
        <div class="subtitle">DJ PIMI</div>`,
        poster:"img/1.jpeg"
    },
    {
        id:'2',
        songName:` Seventeen <br>
        <div class="subtitle">JKT48</div>`,
        poster:"img/2.jpeg"
    },
    {
        id:'3',
        songName:` Fortune Cookie in Love <br>
        <div class="subtitle">JKT48</div>`,
        poster:"img/3.jpeg"
    },
    {
        id:'4',
        songName:` Penjaga Hati <br>
        <div class="subtitle">Nadhif Basalamah</div>`,
        poster:"img/4.jpeg"
    },
    {
        id:'5',
        songName:` Nemen  <br>
        <div class="subtitle">NDX AKA</div>`,
        poster:"img/5.jpeg"
    },
    {
        id:'6',
        songName:` Ponytail dan Shu-shu<br>
        <div class="subtitle">JKT48</div>`,
        poster:"img/6.jpeg"
    },
    {
        id:'7',
        songName:` Radio <br>
        <div class="subtitle">Lana Del Rey</div>`,
        poster:"img/7.jpeg"
    },
    {
        id:'8',
        songName:` Birth <br>
        <div class="subtitle">JKT48</div>`,
        poster:"img/8.jpeg"
    },
    {
        id:'9',
        songName:` Golden Hour Remix <br>
        <div class="subtitle">JVKE x Fuji Kaze</div>`,
        poster:"img/9.jpeg"
    },
    {
        id:'10',
        songName:` Until I found you <br>
        <div class="subtitle">Stephen Sanchez</div>`,
        poster:"img/10.jpeg"
    },
    {
        id:'11',
        songName:` Heavy Rotation <br>
        <div class="subtitle">JKT48</div>`,
        poster:"img/11.jpeg"
    },
    {
        id:'12',
        songName:` Nanti Kita Seperti Ini <br>
        <div class="subtitle">Batas Senja</div>`,
        poster:"img/12.jpeg"
    },
    {
        id:'13',
        songName:` Stereo Hearts <br>
        <div class="subtitle">Maroon 5</div>`,
        poster:"img/13.jpeg"
    },
    {
        id:'14',
        songName:` Monokrom <br>
        <div class="subtitle">Tulus</div>`,
        poster:"img/14.jpeg"
    },
    {
        id:'15',
        songName:` Full Senyum Sayang <br>
        <div class="subtitle">Evan Loss</div>`,
        poster:"img/15.jpeg"
    },
    {
        id:'16',
        songName:` Los Dol <br>
        <div class="subtitle">Denny Caknan</div>`,
        poster:"img/16.jpeg"
    },
    {
        id:'17',
        songName:` Dalan Liyane <br>
        <div class="subtitle">Hendra Kumbara</div>`,
        poster:"img/17.jpeg"
    },
    {
        id:'18',
        songName:` Paradise <br>
        <div class="subtitle">Coldplay</div>`,
        poster:"img/18.jpeg"
    },
    {
        id:'19',
        songName:` Viva la Vida <br>
        <div class="subtitle">Coldplay</div>`,
        poster:"img/19.jpeg"
    },
    {
        id:'20',
        songName:` A Sky Full of Stars <br>
        <div class="subtitle">Coldplay</div>`,
        poster:"img/20.jpeg"
    },
    {
        id:'21',
        songName:` Hissatsu Teleport <br>
        <div class="subtitle">JKT48</div>`,
        poster:"img/21.jpeg"
    },
]

Array.from(document.getElementsByClassName('songItem')).forEach((element, i)=>{
    element.getElementsByTagName('img')[0].src = songs[i].poster;
    element.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
})

// search data start
let search_results = document.getElementsByClassName('search_results')[0];

songs.forEach(element => {
    const {id, songName, poster} = element;
    // console.log(poster);
    let card = document.createElement('a');
    card.classList.add('card');
    card.href = "#" + id;
    card.innerHTML = `
    <img src="${poster}" alt="">
                        <div class="content">
                            ${songName}
                        </div>
    `;
    search_results.appendChild(card);
    card.addEventListener('click', ()=>{
        playSelectedSong(id);
    })
});

let input = document.getElementsByTagName('input')[0];

input.addEventListener('keyup', ()=>{
    let input_value = input.value.toUpperCase();
    let items = search_results.getElementsByTagName('a');

    for (let index = 0; index < items.length; index++) {
        let as = items[index].getElementsByClassName('content')[0];
        let text_value = as.textContent || as.innerHTML;

        if (text_value.toUpperCase().indexOf(input_value) > -1) {
            items[index].style.display = "flex";
        } else {
            items[index].style.display = "none";
        }

        if (input.value == 0) {
            search_results.style.display = "none";
        } else {
            search_results.style.display = "";
        }

    }
})

// search data end

let masterPlay = document.getElementById('masterPlay');
let wave = document.getElementsByClassName('wave')[0];

masterPlay.addEventListener('click',()=>{
    if (music.paused || music.currentTime <=0) {
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active2');
    } else {
        music.pause();
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
        wave.classList.remove('active2');
    }
} )

const makeAllPlays = () =>{
    Array.from(document.getElementsByClassName('playListPlay')).forEach((element)=>{
            element.classList.add('bi-play-circle-fill');
            element.classList.remove('bi-pause-circle-fill');
    })
}
const makeAllBackgrounds = () =>{
    Array.from(document.getElementsByClassName('songItem')).forEach((element)=>{
            element.style.background = "rgb(105, 105, 170, 0)";
    })
}

let index = 0;
let poster_master_play = document.getElementById('poster_master_play');
let title = document.getElementById('title');
Array.from(document.getElementsByClassName('playListPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{
        index = e.target.id;
        makeAllPlays();
        e.target.classList.remove('bi-play-circle-fill');
        e.target.classList.add('bi-pause-circle-fill');
        music.src = `sound/${index}.mp3`;
        poster_master_play.src =`img/${index}.jpeg`;
        music.play();
        let song_title = songs.filter((ele)=>{
            return ele.id == index;
        })
        
        song_title.forEach(ele =>{
            let {songName} = ele;
            title.innerHTML = songName;
        })
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active2');
        music.addEventListener('ended',()=>{
            masterPlay.classList.add('bi-play-fill');
            masterPlay.classList.remove('bi-pause-fill');
            wave.classList.remove('active2');
        })
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('songItem'))[`${index-1}`].style.background = "rgb(105, 105, 170, .1)";
    })
})

function playSelectedSong(songId) {
    // Dapatkan informasi lagu berdasarkan ID
    let selectedSong = songs.find(song => song.id === songId);

    // Pastikan lagu ditemukan
    if (selectedSong) {
        // Atur sumber musik dan poster sesuai lagu yang dipilih
        music.src = `sound/${songId}.mp3`;
        poster_master_play.src = `img/${songId}.jpeg`;

        // Memainkan lagu
        music.play();

        // Mengatur judul lagu
        title.innerHTML = selectedSong.songName;

        // Mengubah ikon pemutaran di playlist
        makeAllPlays();
        document.getElementById(songId).classList.remove('bi-play-circle-fill');
        document.getElementById(songId).classList.add('bi-pause-circle-fill');

        // Mengubah latar belakang lagu yang dipilih
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('songItem'))[songId - 1].style.background = "rgb(105, 105, 170, .1)";

        // Mengatur tampilan wave saat bermain
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active2');

        // Menambahkan event listener untuk menghentikan animasi wave saat lagu selesai
        music.addEventListener('ended', () => {
            masterPlay.classList.add('bi-play-fill');
            masterPlay.classList.remove('bi-pause-fill');
            wave.classList.remove('active2');
        });
    }
}


let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate',()=>{
    let music_curr = music.currentTime;
    let music_dur = music.duration;

    let min = Math.floor(music_dur/60);
    let sec = Math.floor(music_dur%60);
    if (sec<10) {
        sec = `0${sec}`
    }
    currentEnd.innerText = `${min}:${sec}`;

    let min1 = Math.floor(music_curr/60);
    let sec1 = Math.floor(music_curr%60);
    if (sec1<10) {
        sec1 = `0${sec1}`
    }
    currentStart.innerText = `${min1}:${sec1}`;

    let progressbar = parseInt((music.currentTime/music.duration)*100);
    seek.value = progressbar;
    let seekbar = seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
})

seek.addEventListener('change', ()=>{
    music.currentTime = seek.value * music.duration/100;
})

music.addEventListener('ended', ()=>{
    masterPlay.classList.add('bi-play-fill');
    masterPlay.classList.remove('bi-pause-fill');
    wave.classList.remove('active2');
})

let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_dot = document.getElementById('vol_dot');
let vol_bar = document.getElementsByClassName('vol_bar')[0];

vol.addEventListener('change', ()=>{
    if (vol.value == 0) {
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.add('bi-volume-mute-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
    }
    if (vol.value > 0) {
        vol_icon.classList.add('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-mute-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
    }
    if (vol.value > 50) {
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-mute-fill');
        vol_icon.classList.add('bi-volume-up-fill');
    }

    let vol_a = vol.value;
    vol_bar.style.width = `${vol_a}%`;
    vol_dot.style.left = `${vol_a}%`;
    music.volume = vol_a/100;
})


let back = document.getElementById('back');
let next = document.getElementById('next');

back.addEventListener('click', () => {
    let prevIndex = parseInt(index) - 1;
    if (prevIndex < 1) {
        prevIndex = songs.length;
    }
    index = prevIndex;

    music.src = `sound/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpeg`;

    let songTitle = songs.find(song => song.id === `${index}`);
    if (songTitle) {
        title.innerHTML = `${songTitle.songName}`;
    }

    // Memeriksa apakah lagu sebelumnya sedang diputar
    if (!music.paused && music.currentTime > 0) {
        // Jika iya, ubah ikon tombol menjadi ikon pause
        document.getElementById(`${index + 1}`).classList.remove('bi-play-circle-fill');
        document.getElementById(`${index + 1}`).classList.add('bi-pause-circle-fill');
    }

    music.play();

    // Mengatur ulang ikon pemutaran di seluruh playlist
    makeAllPlays();

    document.getElementById(`${index}`).classList.remove('bi-play-circle-fill');
    document.getElementById(`${index}`).classList.add('bi-pause-circle-fill');

    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";

    // Mengatur tampilan wave saat bermain
    masterPlay.classList.remove('bi-play-fill');
    masterPlay.classList.add('bi-pause-fill');
    wave.classList.add('active2');

    // Menambahkan event listener untuk menghentikan animasi wave saat lagu selesai
    music.addEventListener('ended', () => {
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
        wave.classList.remove('active2');
    });
});

next.addEventListener('click', () => {
    let nextIndex = parseInt(index) + 1; // Calculate the next index
    if (nextIndex > songs.length) {
        nextIndex = 1; // Reset to the first song if reaching the end
    }
    index = nextIndex; // Update the index

    music.src = `sound/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpeg`;

    // Update the song title
    let songTitle = songs.find(song => song.id === `${index}`);
    if (songTitle) {
        title.innerHTML = `${songTitle.songName}`;
    }

    if (!music.paused && music.currentTime > 0) {
        // Jika iya, ubah ikon tombol menjadi ikon pause
        document.getElementById(`${index - 1}`).classList.remove('bi-play-circle-fill');
        document.getElementById(`${index - 1}`).classList.add('bi-pause-circle-fill');
    }
    music.play();

    makeAllPlays();
    document.getElementById(`${index}`).classList.remove('bi-play-circle-fill');
    document.getElementById(`${index}`).classList.add('bi-pause-circle-fill');

    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";

    // Mengatur tampilan wave saat bermain
    masterPlay.classList.remove('bi-play-fill');
    masterPlay.classList.add('bi-pause-fill');
    wave.classList.add('active2');

    // Menambahkan event listener untuk menghentikan animasi wave saat lagu selesai
    music.addEventListener('ended', () => {
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
        wave.classList.remove('active2');
    });
});


let left_scroll = document.getElementById('left_scroll');
let right_scroll = document.getElementById('right_scroll');
let pop_song = document.getElementsByClassName('pop_song')[0];

left_scroll.addEventListener('click', ()=>{
    pop_song.scrollLeft -= 330;
})
right_scroll.addEventListener('click', ()=>{
    pop_song.scrollLeft += 330;
})


let left_scrolls = document.getElementById('left_scrolls');
let right_scrolls = document.getElementById('right_scrolls');
let item = document.getElementsByClassName('item')[0];

left_scrolls.addEventListener('click', ()=>{
    item.scrollLeft -= 330;
})
right_scrolls.addEventListener('click', ()=>{
    item.scrollLeft += 330;
})

// app.js

// Fungsi untuk memainkan lagu berdasarkan data lagu yang diberikan
function playSong(songData) {
    // Dapatkan elemen-elemen yang dibutuhkan dari DOM
    const audioPlayer = document.getElementById('audioPlayer');
    const titleElement = document.getElementById('title');
    const posterElement = document.getElementById('poster_master_play');

    // Setel sumber lagu, judul, dan gambar poster
    audioPlayer.src = `sound/${songData.id}.mp3`;
    titleElement.innerHTML = songData.songName;
    posterElement.src = songData.poster;

    // Memainkan lagu
    audioPlayer.play();
}

// Data lagu Seventeen dari JKT48
const seventeenSongData = {
    id: '2',
    songName: `Seventeen <br><div class="subtitle">JKT48</div>`,
    poster: "img/2.jpeg"
};

// Menangani klik tombol "PLAY"
const playButton = document.querySelector('.buttons button');
playButton.addEventListener('click', function () {
    playSelectedSong(seventeenSongData.id);
});



