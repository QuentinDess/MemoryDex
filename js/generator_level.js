
//pour savoir si je cible le pokemon 
// if (document.target.queryselectorAll(good image) or document.target.length = 1)
// ==> ca voudrat dire que si je cible la bonne image  ou la seule image qui n'a que un de longueur)
 let divPikaElt= document.querySelectorAll(".sprite_pika");
 
// console.log(divPikaElt);
divPikaElt.forEach(element =>{ 
   
        let img=document.createElement("img");
        img.src = "./image_pika/image0.png";
        img.setAttribute("class", "bad_guess");
        element.appendChild(img);
        
    
    
    });

let img2=document.createElement("img");
img2.setAttribute("class", "good_guess");
img2.src="./image_pika/image1.png";
let special_div=document.querySelector(` .div${ Math.floor(Math.random() * 16)}`);
special_div.replaceChild(img2, special_div.childNodes[1]);
//compteur avant de faire disparaitre les img

setTimeout(function () {
    divPikaElt.forEach(element =>{
        element.childNodes[1].classList.toggle("opacity");
    
    });   
}, 1000);
// faire disparaitre les image après un certain temps



//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.toggle("opacity");
        element.style.background="red";
       
        
    })
})
//gestion du 2eme level
let divSalaElt= document.querySelectorAll(".sprite_sala");
//click sur le bon pokémon 
document.querySelector(".good_guess").addEventListener("click", function(){
    document.querySelector(".good_guess").classList.toggle("opacity");
    document.querySelector(".good_guess").style.background="green";
    setTimeout(function(){
        document.querySelector(".pika").classList.add("none");
        document.querySelector(".sala").classList.remove("none");},3000);
    setTimeout(function(){
        divSalaElt.forEach(element =>{
            element.childNodes[1].classList.toggle("opacity");
    })}, 4000);
    
        
        
    })
    
       
        
    


 
// console.log(divPikaElt);
divSalaElt.forEach(element =>{ 
   
        let img=document.createElement("img");
        img.src = "./image_sala/image0.png";
        img.setAttribute("class", "bad_guess");
        element.appendChild(img);

    
    });

let img3=document.createElement("img");
img3.setAttribute("class", "good_guess1");
img3.src="./image_sala/image1.png";
let special_div_sala=document.querySelector(` .div_sala${ Math.floor(Math.random() * 16)}`);
special_div_sala.replaceChild(img3, special_div_sala.childNodes[1]);


//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess1").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.style.background="red";
       
        
    })
})
//click sur le bon pokémon 
document.querySelector(".good_guess1").addEventListener("click", function(){
    document.querySelector(".good_guess1").classList.remove("opacity");
    document.querySelector(".good_guess1").style.background="green";
    setTimeout(function(){
        document.querySelector(".sala").classList.add("none");
        document.querySelector(".cara").classList.remove("none");},3000);
    setTimeout(function(){
        divCaraElt.forEach(element =>{
            element.childNodes[1].classList.toggle("opacity");
    })}, 4000);
    
   
       
        
})

////////////
//////////////
//3eme niveau

let divCaraElt= document.querySelectorAll(".sprite_cara");


divCaraElt.forEach(element =>{ 
    
        let img=document.createElement("img");
        img.src = "./image_cara/image0.png";
        img.setAttribute("class", "bad_guess3");
        element.appendChild(img);
        
    
    
    });

let img4=document.createElement("img");
img4.setAttribute("class", "good_guess3");
img4.src="./image_cara/image1.png";
let special_div_cara=document.querySelector(` .div_cara${ Math.floor(Math.random() * 16)}`);
special_div_cara.replaceChild(img4, special_div_cara.childNodes[1]);



//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess3").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.style.background="red";
        
        
    })
})
    //click sur le bon pokémon 
document.querySelector(".good_guess3").addEventListener("click", function(){
    document.querySelector(".good_guess3").classList.remove("opacity");
    document.querySelector(".good_guess3").style.background="green";
    setTimeout(function(){
        document.querySelector(".cara").classList.add("none");
        document.querySelector(".bulbi").classList.remove("none");},3000);
    setTimeout(function(){
        divBulbiElt.forEach(element =>{
            element.childNodes[1].classList.toggle("opacity");
    })}, 4000);
    
  
           
            
})
      
let divBulbiElt= document.querySelectorAll(".sprite_bulbi");
 
// console.log(divPikaElt);
divBulbiElt.forEach(element =>{ 
    
        let img=document.createElement("img");
        img.src = "./image_bulbi/image0.png";
        img.setAttribute("class", "bad_guess4");
        element.appendChild(img);
        
    
    
    });

let img5=document.createElement("img");
img5.setAttribute("class", "good_guess4");
img5.src="./image_bulbi/image1.png";
let special_div_bulbi=document.querySelector(` .div_bulbi${ Math.floor(Math.random() * 16)}`);
special_div_bulbi.replaceChild(img5, special_div_bulbi.childNodes[1]);


//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess4").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.style.background="red";
        
        
    })
})
//click sur le bon pokémon 
document.querySelector(".good_guess4").addEventListener("click", function(){
    document.querySelector(".good_guess4").classList.remove("opacity");
    document.querySelector(".good_guess4").style.background="green";
    setTimeout(function(){
        document.querySelector(".bulbi").classList.add("none");
        document.querySelector(".melo").classList.remove("none");},3000);
    setTimeout(function(){
        divMeloElt.forEach(element =>{
            element.childNodes[1].classList.toggle("opacity");
    })}, 4000);   
              
});
      
let divMeloElt= document.querySelectorAll(".sprite_melo");
 
// console.log(divPikaElt);
divMeloElt.forEach(element =>{ 
    
        let img=document.createElement("img");
        img.src = "./image_melo/image0.png";
        img.setAttribute("class", "bad_guess5");
        element.appendChild(img);
        
    
    
    });

let img6=document.createElement("img");
img6.setAttribute("class", "good_guess5");
img6.src="./image_melo/image1.png";
let special_div_melo=document.querySelector(` .div_melo${ Math.floor(Math.random() * 16)}`);
special_div_melo.replaceChild(img6, special_div_melo.childNodes[1]);


//click sur le mauvais pokémon
document.querySelectorAll(".bad_guess5").forEach(element =>{
    element.addEventListener("click", function(){
        element.classList.remove("opacity");
        element.style.background="red";
        
        
    })
})
document.querySelector(".good_guess5").addEventListener("click", function(){
    document.querySelector(".good_guess5").classList.remove("opacity");
    document.querySelector(".good_guess5").style.background="green";
    setTimeout(function(){
        clearInterval(t);
        // creer un form
        let formEltChrono = document.createElement("form");
        formEltChrono.setAttribute("methode","POST");
        formEltChrono.setAttribute("action","../test.php");
        formEltChrono.classList.add("opacity");
        document.querySelector("main").appendChild(formEltChrono);
        //cree mon input pour inserer la valeur du chron
        let inputEltChrono=document.createElement("input");
        inputEltChrono.setAttribute("type","text");
        inputEltChrono.innerHTML= Number(s)+ (Number(mn)*60)
        formEltChrono.appendChild(inputEltChrono);
        //je submit mon form grace à une méthode qui submit directement 
        formEltChrono.submit();},3000);               
});
// lors du dernier click sur le bon boutton
// document.querySelector("button").addEventListener("click", function(){
//   clearInterval(t);
//   // creer un form
//   let formEltChrono = document.createElement("form");
//   // formEltChrono.setAttribute("methode="POST", action="envoi vers la page du create bdd pour Game);
//   //formEltChrono.classList.add("none") ==> je ne veux pas qu'on le voit
//   document.querySelector("main").appendChild(formEltChrono);
//   //cree mon input pour inserer la valeur du chron
//   let inputEltChrono=document.createElement("input");
//   //inputEltChrono.setAttribute("type=text");
//   inputEltChrono.innerHTML= Number(s)+ (Number(mn)*60)
//   formEltChrono.appendChild(inputEltChrono);
//   //je submit mon form grace à une méthode qui submit directement 

//   formEltChrono.submit();
// })
