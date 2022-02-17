

window.addEventListener('DOMContentLoaded', () => {

    const x = document.querySelector(".row-search div .bi-x");
    const search = document.querySelector(".container-login-search-basket div .bi-search");
    const searchShow = document.querySelector(".search-show");

    
    x.addEventListener("click", function(){
        console.log("zamknąłeś ");
        searchShow.classList.add("search-hided");
        searchShow.classList.remove("search-showed");
    });
    search.addEventListener("click", function(){
        console.log("klik ");
        searchShow.classList.add("search-showed");
        searchShow.classList.remove("search-hided");
    });

    
});



