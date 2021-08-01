const cookieBox=document.querySelector(".Cookies1"),
acceptBtn = cookieBox.querySelector("button");

acceptBtn.onclick = ()=>{
    document.cookie="CookieBy=KrzysztofCukier; max-age="+60*60*24*30;
    if(document.cookie){
        cookieBox.classList.add("hide");
    } else{
        alert("Ciasteczka nie mogą być ustawione! Proszę odblokuj tę stronę z ustawień twojej przeglądarki.");
    }
}
let checkCookie = document.cookie.indexOf("CookieBy=KrzysztofCukier");
checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");