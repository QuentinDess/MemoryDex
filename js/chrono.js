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
     if(s <= 9){
    span[1].innerHTML=": 0"+s+" s";
     }
    else{
     span[1].innerHTML=":"+ s+" s";
    }

};
//démarre mon chronomètre au chargment de la page

document.addEventListener("onload", start());


