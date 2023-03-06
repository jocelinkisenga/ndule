// La partie recherche et login modal
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let afficheResultSearch = document.querySelector('#search-bar');
let toggleSearch = document.querySelector('.toggle-search');

toggleSearch.addEventListener('click', ()=>{
    searchBar.classList.remove('active');
    searchBtn.classList.toggle('icon-times');
    toggleSearch.classList.remove('active');
})


window.onscroll = () =>{
    searchBtn.classList.remove('icon-times');
    searchBar.classList.remove('active');
    loginForm.classList.remove('active');
}

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('icon-times');
    searchBar.classList.toggle('active');
    toggleSearch.classList.add('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});
// Partie controle des informations venant de l'utilisateur au niveau de la connexion
//Get the value from the input
let regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
let email = document.getElementById("email");
let password = document.getElementById("password");
let ErrorMessage1 = document.querySelector(".small1");
let ErrorMessage2 = document.querySelector(".small2");
let form = document.getElementById("form");

form.addEventListener('submit', (e) => {
    
    if(email.value !="" || password.value !=""){
        if(email.value.match(regex)){
            if(password.value.length >= 4){
                
            }else{
                e.preventDefault();
                ErrorMessage2.style.color = "#da3400";
                ErrorMessage2.innerText = "Mot de passe minimum 4 caractères !";
            }
        }else{
            e.preventDefault();
            ErrorMessage1.style.color = "red" ;
            ErrorMessage1.innerText = "L'e-mail n'est pas correct !"; 
        }
    }else{
        e.preventDefault();
        ErrorMessage1.style.color = "#da3400";
        ErrorMessage1.innerText = "Veuillez remplir tous les champs !";
        ErrorMessage2.style.color = "#da3400";
        ErrorMessage2.innerText = "Veuillez remplir tous les champs !";
    } 
    
});