const navUl = document.querySelector("#navM");
const btnNav = document.querySelector("#nav-btn");

btnNav.addEventListener("click", e =>{
  if(navUl.classList.contains("oculto")){
    navUl.classList.replace("oculto", "visible");
    navUl.classList.add("visibilizar");
  } else if(navUl.classList.contains("ocultar"))
    navUl.classList.replace("ocultar", "visibilizar"); 
  else
    navUl.classList.replace("visibilizar", "ocultar");
});

navUl.addEventListener("click", e =>{
  console.log(e.target.classList.contains("visibilizar"));
  if(e.target.classList.contains("visibilizar"))
    navUl.classList.replace("visibilizar", "ocultar");
});