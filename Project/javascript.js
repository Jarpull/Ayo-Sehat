window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);    
});

document.getElementById("login").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
    document.querySelector(".login").style.display = "flex";
});

document.querySelector(".login .close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
    document.querySelector(".login").style.display = "none";
});

document.querySelector(".regist .close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
    document.querySelector(".regist").style.display = "none";
});

document.getElementById("regis").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
    document.querySelector(".regist").style.display = "flex";
});

document.getElementById("masuk").addEventListener("click", function(){
    document.querySelector(".regist").style.display = "none";
    document.querySelector(".login").style.display = "flex";
});

document.getElementById("daftar").addEventListener("click", function(){
    document.querySelector(".regist").style.display = "flex";
    document.querySelector(".login").style.display = "none";
});
