document.querySelector(".start_game").addEventListener("click", function(){
    let rulesElt=document.createElement("div");
    debugger;
    rulesElt.setAttribute("class", "rulesElt");
    debugger;
    document.querySelector("body").appendChild(rulesElt);
    debugger;
    let img_pika_rules=document.createElement("img");
    debugger;
    img_pika_rules.setAttribute("class", "pika_rules");
    debugger;
    rulesElt.appendChild(img_pika_rules);
    let txt_rules=document.createElement("p");
    txt_rules.setAttribute("class","txt_rules");
    rulesElt.appendChild(txt_rules);
    let anim_div=document.createElement("div");
    anim_div.setAttribute("class", "anim_div");
    rulesElt.appendChild(txt_rules);
});