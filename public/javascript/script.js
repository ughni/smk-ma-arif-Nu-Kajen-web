// buat navbar
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.sticky-navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});






// api
$.ajax({
    url: 'http://www.omdbapi.com/?apikey=25dcdba3&s=harry potter',
    success: result => {
        const movie = result.Search;
        let cards = '';
        movie.forEach(m => {
            cards += `<div class="col-md-4 d-flex justify-content-center pb-5 pt-5 ">
                            <div class="card">
                                <img src="${m.Poster}" whith class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">${m.Title}</h5>
                                    <p>${m.Year}</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">${m.imdbID}</a>
                                </div>
                            </div>
                        </div>`;
        })
        $('.row-container').html(cards)
    },
    error: (e) => {
        console.log(e)
    }
});

$.ajax({
    url: 'http://www.omdbapi.com/?apikey=25dcdba3&s=dilan',
    success: dilan => {
        const movie = dilan.Search;
        let cards = '';
        movie.forEach(m => {
            cards += `<div class="col-md-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="${m.Poster}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">${m.TItle}</h5>
                                        <p class="card-text"><small class="text-body-secondary">${m.Year}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
        });
        $('.dilann').html(cards);
    }
})















// // api
// const inputButton = document.querySelector('.input-button');
// inputButton.addEventListener('click', async function () {
//     const inptuSearch = document.querySelector('.input-search');

//     const movie = await getMovies(inptuSearch.value);


// })


// function getMovies() {
//     return fetch('http://www.omdbapi.com/?apikey=25dcdba3&s=dilan')
//         .then(response => {
//             if (!response) {
//                 throw new Error(response.statusText)
//             }
//             return response.json();
//         })
//         .then(response => {
//             if (response.Response === 'false') {
//                 throw new Error(response.Error);
//             }
//             return response.Search;
//         });
// };



// function showCard(m) {
//     return `<div class="col">
//                 <div class="card" style="width: 18rem;">
//                     <img src="${m.Poster}" class="card-img-top" alt="...">
//                     <div class="card-body">
//                         <h5 class="card-title">${m.Title}</h5>
//                         <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">${m.imdbID}</a>
//                     </div>
//                 </div>
//             </div>`;
// };


// function showMovieDetail(m) {
//     return `<div class="container-fluid">
//                 <div class="row">
//                 <div class="col-md-3">
//                     <img src="${m.Poster}" class="img-fluid">
//                 </div>
//                 <div class="col">
//                     <div class="col-md">
//                     <ul class="list-group">
//                         <li class="list-group-item active" aria-current="true">${m.Title} (${m.Year})</li>
//                         <li class="list-group-item"><strong>${m.Director}</strong></li>
//                         <li class="list-group-item"><strong>${m.Actors}</strong></li>
//                         <li class="list-group-item"><strong>${m.Writer}</strong></li>
//                         <li class="list-group-item"><strong>${m.Plot}</strong></li>
//                     </ul>
//                     </div>
//                 </div>
//                 </div>
//             </div>`
// };
