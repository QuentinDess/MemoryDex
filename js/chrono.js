// je crée mes variable pour le chronomètre
// je crée un variable de selection pour selection le bloc span qui contient les min et S
let span = document.querySelectorAll("span");
// je crée une variable qui sera modifié par la fonction chrono tout les 100 millisecondes (setInterval(fonction,100))
let time;
let ms=0;
let s=0;
let mn=0;
 
 /*La fonction "start" démarre un appel répétitive de la fonction update_chrono par une cadence de 100 milliseconde en utilisant setInterval et désactive le bouton "start" */

function start(){
 t =setInterval(chrono,100);
}
/*La fonction chrono incrémente le nombre de millisecondes par 1 <==> 1*cadence = 100 */
function chrono(){
  ms+=1;
  /*si ms=10 <==> ms*cadence = 1000ms <==> 1s alors on incrémente le nombre de secondes*/
     if(ms==10){
      ms=1;
      s+=1;
     }
     /*on teste si s=60 pour incrémenter le nombre de minute*/
     if(s==60){
      s=0;
      mn+=1;
     }
    
     /*afficher les nouvelle valeurs*/
    
     span[0].innerHTML=mn+" min";
     span[1].innerHTML=s+" s";
    

};
//démarre mon chronomètre au chargment de la page

document.addEventListener("onload", start());
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