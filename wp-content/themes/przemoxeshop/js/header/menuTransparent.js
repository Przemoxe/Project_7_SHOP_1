window.addEventListener('DOMContentLoaded', () => {

    let header = document.querySelector("header .main-navigation-transparent");

    header.addEventListener('click', () => {
        console.log('elo');

    })

    console.log(window.scrollY);
    document.addEventListener('scroll', () => {
        
        if(window.scrollY > 63){
            header.classList.add("main-navigation-not-transparent");
        }
        else{
            header.classList.remove("main-navigation-not-transparent");
        }
        
    })


    
});

