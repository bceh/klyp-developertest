const colors = {
  // colors for background
  red: "rgb(209, 118, 118)",
  green: "rgb(74, 167, 74)",
  blue: "rgb(110, 110, 251)",
  yellow: "rgb(232, 232, 112)",
};

const results = new Map(); // caching of search results

const movieContainer = document.querySelector(".movie-container");
const home = document.querySelector(".home");

const omdbapi = "http://www.omdbapi.com/?i=tt3896198&apikey=1465e5bb";

const handleClick = async function (color) {
  home.style.display = "none";
  const searchfield = `&t=${color}`;
  try {
    const data =
      results.get(color) ||
      (await fetch(omdbapi + searchfield).then((res) => res.json()));
    const movie = `<div class="movie" style="height: 100vh; width:100%; background-color: ${colors[color]}">
        <div class="movie-content">
            <button class="btn btn-secondary" onClick="handleBack()">Back</button>
            <h4 class="movie-title">${data.Title}</h4>
            <div class="row">
              <div class="col-4 p-3">
                <img
                  class="ml-2 movie-image"
                  src="${data.Poster}"
                />
              </div>
              <div class="col-8 p-3">
                <p>year: ${data.Year}</p>
                <p>runtime: ${data.Runtime}</p>
              </div>
            </div>
        </div>
      </div>`;
    movieContainer.insertAdjacentHTML("afterbegin", movie);
    results.has(color) || results.set(color, data);
  } catch (err) {
    alert(err);
  }
};
const handleBack = function () {
  movieContainer.innerHTML = "";
  home.style.display = "block";
};
