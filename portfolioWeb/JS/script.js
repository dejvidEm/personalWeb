const sections = document.querySelectorAll("section");
const links = document.querySelectorAll("ul li a");

window.addEventListener("scroll", ()=> {
    let current = "";

    sections.forEach( section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if(pageYOffset >= sectionTop){
            current = section.getAttribute("id");
        }
    })
    links.forEach( li => {
        li.classList.remove("active");
        if(li.classList.contains(current)){
            li.classList.add("active")
        };
    })
})