
//pour savoir si je cible le pokemon 
// if (document.target.queryselectorAll(good image) or document.target.length = 1)
// ==> ca voudrat dire que si je cible la bonne image  ou la seule image qui n'a que un de longueur)
 let divPikaElt= document.querySelectorAll(".sprite_pika");
 
// console.log(divPikaElt);
divPikaElt.forEach(element =>{ 
   
        let img=document.createElement("img");
        img.src = "../image/image_pika/image0.png";
        img.setAttribute("class", "bad_guess");
        element.appendChild(img);
        
    
    
    });

let img2=document.createElement("img");
img2.setAttribute("class", "good_guess");
img2.src="../image/image_pika/image1.png";
let special_div=document.querySelector(` .div${ Math.floor(Math.random() * (16-1) + 1 )}`);
special_div.replaceChild(img2, special_div.childNodes[1]);
//compteur avant de faire disparaitre les img

setTimeout(function () {
    divPikaElt.forEach(element =>{
        element.childNodes[1].classList.add("opacity");
    
    });   
}, 500);
// faire disparaitre les image après un certain temps



//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.parentElement.style.background="red";
       
        
    })
})
//gestion du 2eme level
let divSalaElt= document.querySelectorAll(".sprite_sala");
//click sur le bon pokémon 
document.querySelector(".good_guess").addEventListener("click", function(){
    document.querySelector(".good_guess").classList.toggle("opacity");
    document.querySelector(".good_guess").parentElement.style.background="green";
    let messgEndLevel= document.createElement("div");
    messgEndLevel.classList.add("MsgLvl");
    //mettre un Z index devant le reste
    document.querySelector(".level_container").appendChild(messgEndLevel);
    let p_Msg_lvl=document.createElement("p");
    p_Msg_lvl.setAttribute("class", "p_Msg_lvl");
    p_Msg_lvl.style.marginTop="15%";
    p_Msg_lvl.style.color="#fff";
    p_Msg_lvl.innerHTML="Fin du Niveau";
    messgEndLevel.appendChild(p_Msg_lvl);
    setTimeout(function(){
        document.querySelector(".pika").classList.add("none");
        document.querySelector(".sala").classList.remove("none");
        document.querySelector('.MsgLvl').classList.add("none");},3000);
    setTimeout(function(){
      
        divSalaElt.forEach(element =>{
            element.childNodes[1].classList.add("opacity");
    })}, 3500);
    
        
        
    })
    
       
        
    


 
// console.log(divPikaElt);
divSalaElt.forEach(element =>{ 
   
        let img=document.createElement("img");
        img.src = "../image/image_sala/image0.png";
        img.setAttribute("class", "bad_guess1");
        element.appendChild(img);

    
    });

let img3=document.createElement("img");
img3.setAttribute("class", "good_guess1");
img3.src="../image/image_sala/image1.png";
let special_div_sala=document.querySelector(` .div_sala${ Math.floor(Math.random() * (16-1) + 1 )}`);
special_div_sala.replaceChild(img3, special_div_sala.childNodes[1]);


//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess1").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.parentElement.style.background="red";
       
        
    })
})

//click sur le bon pokémon 
document.querySelector(".good_guess1").addEventListener("click", function(){
    document.querySelector(".good_guess1").classList.remove("opacity");
    document.querySelector(".good_guess1").parentElement.style.background="green";
    document.querySelector(".MsgLvl").classList.remove("none");
    setTimeout(function(){
        
        document.querySelector(".sala").classList.add("none");
        document.querySelector(".cara").classList.remove("none");
        document.querySelector(".MsgLvl").classList.add("none");
    },3000);
        
    setTimeout(function(){
        
        divCaraElt.forEach(element =>{
            element.childNodes[1].classList.add("opacity");
    })}, 3500);
    
   
       
        
})

////////////
//////////////
//3eme niveau

let divCaraElt= document.querySelectorAll(".sprite_cara");


divCaraElt.forEach(element =>{ 
    
        let img=document.createElement("img");
        img.src = "../image/image_cara/image0.png";
        img.setAttribute("class", "bad_guess3");
        element.appendChild(img);
        
    
    
    });

let img4=document.createElement("img");
img4.setAttribute("class", "good_guess3");
img4.src="../image/image_cara/image1.png";
let special_div_cara=document.querySelector(` .div_cara${ Math.floor(Math.random() * (16-1) + 1 )}`);
special_div_cara.replaceChild(img4, special_div_cara.childNodes[1]);



//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess3").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.parentElement.style.background="red";
        
        
    })
})
    //click sur le bon pokémon 
document.querySelector(".good_guess3").addEventListener("click", function(){
    document.querySelector(".good_guess3").classList.remove("opacity");
    document.querySelector(".good_guess3").parentElement.style.background="green";
    document.querySelector(".MsgLvl").classList.remove("none");
    setTimeout(function(){
       
        document.querySelector(".cara").classList.add("none");
        document.querySelector(".bulbi").classList.remove("none");
        document.querySelector(".MsgLvl").classList.add("none");},3000);
    setTimeout(function(){
   
        divBulbiElt.forEach(element =>{
            element.childNodes[1].classList.add("opacity");
    })}, 3500);
    
  
           
            
})
      
let divBulbiElt= document.querySelectorAll(".sprite_bulbi");
 
// console.log(divPikaElt);
divBulbiElt.forEach(element =>{ 
    
        let img=document.createElement("img");
        img.src = "../image/image_bulbi/image0.png";
        img.setAttribute("class", "bad_guess4");
        element.appendChild(img);
        
    
    
    });

let img5=document.createElement("img");
img5.setAttribute("class", "good_guess4");
img5.src="../image/image_bulbi/image1.png";
let special_div_bulbi=document.querySelector(` .div_bulbi${ Math.floor(Math.random() * (16-1) + 1 )}`);
special_div_bulbi.replaceChild(img5, special_div_bulbi.childNodes[1]);


//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess4").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.parentElement.style.background="red";
        
        
    })
})
//click sur le bon pokémon 
document.querySelector(".good_guess4").addEventListener("click", function(){
    document.querySelector(".good_guess4").classList.remove("opacity");
    document.querySelector(".good_guess4").parentElement.style.background="green";
    document.querySelector(".MsgLvl").classList.remove("none");
    setTimeout(function(){
        
        document.querySelector(".bulbi").classList.add("none");
        document.querySelector(".melo").classList.remove("none");
        document.querySelector(".MsgLvl").classList.add("none");},3000);
    setTimeout(function(){

        divMeloElt.forEach(element =>{
            element.childNodes[1].classList.add("opacity");
    })}, 3500);   
              
});
      
let divMeloElt= document.querySelectorAll(".sprite_melo");
 
// console.log(divPikaElt);
divMeloElt.forEach(element =>{ 
    
        let img=document.createElement("img");
        img.src = "../image/image_melo/image0.png";
        img.setAttribute("class", "bad_guess5");
        element.appendChild(img);
        
    
    
    });

let img6=document.createElement("img");
img6.setAttribute("class", "good_guess5");
img6.src="../image/image_melo/image1.png";
let special_div_melo=document.querySelector(` .div_melo${ Math.floor(Math.random() * (16-1) + 1 )}`);
special_div_melo.replaceChild(img6, special_div_melo.childNodes[1]);


//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess5").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.parentElement.style.background="red";
        
        
    })
})
document.querySelector(".good_guess5").addEventListener("click", function(){
    document.querySelector(".good_guess5").classList.remove("opacity");
    document.querySelector(".good_guess5").parentElement.style.background="green";
    setTimeout(function(){
        alert("vous avez terminé le mini-jeu");
        clearInterval(t);
        // creer un form
        let formEltChrono = document.createElement("form");
        formEltChrono.setAttribute("methode","GET");
        formEltChrono.setAttribute("action","../db/insert_highscore.php");
        formEltChrono.classList.add("opacity");
        document.querySelector("main").appendChild(formEltChrono);
        //cree mon input pour inserer la valeur du chron
        let inputEltChrono=document.createElement("input");
        inputEltChrono.setAttribute("type","text");
        inputEltChrono.setAttribute("name","score");
        inputEltChrono.value= Number(s)+ (Number(mn)*60)
        formEltChrono.appendChild(inputEltChrono);
        debugger;
        //je submit mon form grace à une méthode qui submit directement 
        formEltChrono.submit();},3000);               
});



//FONCTION MESSAGE FIN DE NIVEAU 
function MsgLvl() {
    let messgEndLevel= document.createElement("div");
    messgEndLevel.classList.add("MsgLvl");
    //mettre un Z index devant le reste
    messgEndLevel.innerHTML="Fin du Niveau";
    document.querySelector("main").appendChild(messgEndLevel);
    setTimeout(function() {
        document.querySelector('.MsgLvl').classList.add("none")
      },3000);
}


