let album = document.querySelector('.modal-form')
let open = document.querySelector('.modal-open')
let close = document.querySelector('.modal-close')

open.addEventListener('click', function(){
  album.classList.remove('hidden')
})

close.addEventListener('click', function(){
  album.classList.add('hidden')
})


$(document).ready(() => {
  $('#searchForm').on('input', (e) => {

      let searchText = $('#searchText').val();

      if (searchText == null) {
          console.log(true);
      }

      getMovies(searchText);
      e.preventDefault();
  })
})


function getMovies(searchText) {

  axios.get('https://api.themoviedb.org/3/search/movie?api_key=5ec279387e9aa9488ef4d00b22acc451&query=' + searchText)
      //  axios.get('http://www.omdbapi.com/?apikey=a15bc27e&s=' + searchText)
      .then((response) => {
          console.log(response);

          let movies = response.data.results;
          let output = '';
          let output1 = '';
          $.each(movies, (index, movie) => {

              if (movie.poster_path === null) {
                  poster = "../image/default-movie.png";
              } else {
                  poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
              }

              let date = movie.release_date;

              let year = date.slice(0, 4);
              output += `
                      <div class="col-md-3 box">
                        <div class="movieBox">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img">
                          <div class="browse-movie-bottom">
                              <a href="#" onclick="movieSelected('${movie.id}')" class="browse-movie-title">${movie.title}</a>
                              <div class="browse-movie-year">${year}</div>
                              <button type="submit" class="button" onclick="movieSelected1('${movie.id}')">Movie Details</button>
                          </div>
                          </div>
                      </div>
              `
          });
          $('#movies').html(output);
      })
      .catch((error) => {
          console.log(error);
      });
}