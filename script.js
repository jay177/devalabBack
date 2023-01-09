


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
			let note = movies[index].vote_average
			output += `
			<div class="md:min-w-[150px] max-w-[150px] w-[150px]">
          <a href="">
            <div class=" rounded-lg overflow-hidden w-full relative">
              <img src="${poster}" alt="poster">
              
            </div>
            <div class="w-full flex flex-col content-start relative py-2 px-2">
              <p class="font-semibold text-sm whitespace-normal">${movies[index].title}</p>
              <p class="text-gray-400 text-sm">${year}</p>
            </div>
          </a>
        </div>
			`
		});
		$('#movies').html(output);
	})
	.catch((error) => {
		console.log(error);
	});
}

function getTopMovies(){
  axios.get('https://api.themoviedb.org/3/movie/popular?api_key=40dd86c7e91670949d1810f8b8cf8d3f&language=en-US&page=1')
  .then((response)=>{
    // console.log(response)

    let movies = response.data.results;
    console.log(movies)
    length

    let output = ''
    for (let index = 0; index < movies.length; index++){
      poster = "https://image.tmdb.org/t/p/original/" + movies[index].poster_path;
      
      let date = movies[index].release_date;
      let year = date.slice(0,4);
      let note = movies[index].vote_average
      output += `
      <div class="md:min-w-[150px] max-w-[150px]">
          <a href="">
            <div class=" rounded-lg overflow-hidden w-full relative">
              <img src="${poster}" alt="poster" class="">
              <div class="absolute top-1 right-1 w-[38px] h-[38px] rounded-full bg-zinc-700 flex justify-center items-center p-[4px]">
                <div class="bg-green-400 w-full h-full rounded-full flex justify-center items-center  ">
                  <p class="font-bold text-xs">${note*10}%</p>
                </div>
              </div>
            </div>
            <div class="w-full flex flex-col content-start relative py-2 px-2">
              <p class="font-semibold text-sm">${movies[index].title}</p>
              <p class="text-gray-400 text-sm">${year}</p>
            </div>
          </a>
        </div>
      `;
    }
    $("#topMovies").html(output);

  })
  .catch((error)=>{
    console.log(error)
  })
}

function getTopRated(){
  axios.get('https://api.themoviedb.org/3/movie/top_rated?api_key=40dd86c7e91670949d1810f8b8cf8d3f&language=en-US&page=1')
  .then((response)=>{
    // console.log(response)

    let movies = response.data.results;
    console.log(movies)
    length

    let output = ''
    for (let index = 0; index < movies.length; index++){
      poster = "https://image.tmdb.org/t/p/original/" + movies[index].poster_path;
      
      let date = movies[index].release_date;
      let year = date.slice(0,4);
      let note = movies[index].vote_average
      output += `
      <div class="md:min-w-[150px] md:max-w-[150px]">
          <a href="">
            <div class=" rounded-lg overflow-hidden w-full relative">
              <img src="${poster}" alt="poster">
              <div class="absolute top-1 right-1 w-[38px] h-[38px] rounded-full bg-zinc-700 flex justify-center items-center p-[4px]">
                <div class="bg-green-400 w-full h-full rounded-full flex justify-center items-center  ">
                  <p class="font-bold text-xs">${note*10}%</p>
                </div>
              </div>
            </div>
            <div class="w-full flex flex-col content-start relative py-2 px-2">
              <p class="font-semibold text-sm">${movies[index].title}</p>
              <p class="text-gray-400 text-sm">${year}</p>
            </div>
          </a>
        </div>
      `;
    }
    $("#topRated").html(output);

  })
  .catch((error)=>{
    console.log(error)
  })
}


document.getElementById('action').onclick = function() {
  let genre = "28"
}​;​

