// mobile menu 
let openMenu = document.querySelector(".mobile-nav");
let closeMenu = document.querySelector(".close-menu");
let mobileMenu = document.querySelector(".menu");

openMenu.addEventListener("click", ()=> {
    mobileMenu.classList.add("active");
});
closeMenu.addEventListener("click", ()=> {
    mobileMenu.classList.remove("active");
});

// links update 

let mostPopular = document.querySelectorAll(".most-popularbox a");
mostPopular.forEach(link=> {
    link.href= "https://www.facebook.com/people/Firekirin/61560330823467/?mibextid=ZbWKwL";
    link.setAttribute("target","_blank");
});

let recomendedGameLink = document.querySelectorAll(".game-recomendation-box a");
recomendedGameLink.forEach(link=> {
    link.href="https://www.facebook.com/profile.php?id=61560330823467&mibextid=ZbWKwL";
    link.setAttribute("target","_blank");
});

let mostPlayed = document.querySelectorAll(".most-played-games a");
mostPlayed.forEach(link=> {
    link.href="http://play.firekirin.in/web_mobile/firekirin_pc/";
    link.setAttribute("target","_blank");
});


let getStarted = document.querySelectorAll(".exp-main a");
getStarted.forEach(link=> {
    link.href="https://www.facebook.com/profile.php?id=61560330823467&mibextid=ZbWKwL";
    link.setAttribute("target","_blank");
});



let faqBtn = document.querySelectorAll(".faq-que ul li");
let faqAns = document.querySelectorAll(".faq-ans");

faqBtn.forEach((btn, index)=> {
    btn.addEventListener("click", function(){
        faqBtn.forEach(li=> {
            li.classList.remove("active");
        });
        btn.classList.add("active");
        faqAns.forEach(an=> {
            an.classList.remove("active");
        });
        faqAns[index].classList.add("active");
    });
});


// main games filter 
let mainFilterBtn = document.querySelectorAll(".games-main-filter ul li");
let mainFilterImg = document.querySelectorAll(".games-filter-box");

mainFilterBtn.forEach((btn, index)=> {
    btn.addEventListener("click", function(){
        mainFilterBtn.forEach(btn=> {
            btn.classList.remove("active");
        });
        btn.classList.add("active");
        mainFilterImg.forEach(box=> {
            box.classList.remove("active");
        });
        mainFilterImg[index].classList.add("active");
    });
});




let copyText = document.querySelectorAll('.copy1');
copyText.forEach(copy=> {
    copy.innerHTML = `<p>http://play.firekirin.in all rights reseverd</p>`;
});




// mobile faqs
let mobileFaqList = document.querySelectorAll(".mobile-faq li");
let mobileFaqAns = document.querySelectorAll(".mobile-faq-ans");

mobileFaqList.forEach((list, index)=> {
    list.addEventListener("click", ()=> {
        mobileFaqList.forEach(li=> {
            li.classList.remove("active");
        });
        list.classList.add("active");
        mobileFaqAns.forEach(ans=> {
            ans.classList.remove("active");
        });
        mobileFaqAns[index].classList.add("active");
    });
});



// all games create boxes 
let allGames = document.querySelector(".first-game-box .games-filter-box-img");

for(let i=1; i<=90; i++) {
    let createDiv = document.createElement("div");
    createDiv.classList.add("game-box");
    let createImg = document.createElement("img");
    createImg.src= `./media/games/all/${i}.png`;
    createDiv.appendChild(createImg);
    allGames.appendChild(createDiv);
}


// popular games 

let popularGames = document.querySelector(".second-game-box .games-filter-box-img");
for(let i=1; i<=24; i++) {
    let createDiv = document.createElement("div");
    createDiv.classList.add("game-box");
    let createImg = document.createElement("img");
    createImg.src= `./media/games/popular/${i}.png`;
    createDiv.appendChild(createImg);
    popularGames.appendChild(createDiv);
}


// new games 

let newGames = document.querySelector(".third-game-box .games-filter-box-img");

for(let i=1; i<=20; i++) {
    let createDiv = document.createElement("div");
    createDiv.classList.add("game-box");
    let createImg = document.createElement("img");
    createImg.src= `./media/games/new/${i}.png`;
    createDiv.appendChild(createImg);
    newGames.appendChild(createDiv);
}

// coming soon games 

let comingGames = document.querySelector(".four-game-box .games-filter-box-img");
for(let i=1; i<=3; i++) {
    let createDiv = document.createElement("div");
    createDiv.classList.add("game-box");
    let createImg = document.createElement("img");
    createImg.src= `./media/games/coming-soon/${i}.png`;
    createDiv.appendChild(createImg);
    comingGames.appendChild(createDiv);
}





let gamebox = document.querySelectorAll(".game-box");
let gameboxImg = document.querySelectorAll(".game-box img");
gamebox.forEach(img=> {
    let createLink = document.createElement("a");
    createLink.setAttribute("href", "https://www.facebook.com/profile.php?id=61560330823467&mibextid=ZbWKwL");
     createLink.setAttribute("target", "_blank");
    img.appendChild(createLink);
});




