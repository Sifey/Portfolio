const sliders = document.querySelectorAll(".slider-container");

var sliderObject = [];

sliders.forEach((slider, index) => {
    const child = slider.querySelectorAll(".slide-content")
    const obj = {
        id: slider.id,
        el: slider,
        child,
        index,
        currentIndex: 0,
        previousIndex: undefined,
        directionNext: true,
        lock: false
    }
    sliderObject.push(obj);
})

const previous = document.querySelectorAll(".previous")
const next = document.querySelectorAll(".next")

previous.forEach(e => {
    e.addEventListener("click", handlePrevious)
})
next.forEach(e => {
    e.addEventListener("click", handleNext)
})

function handlePrevious(e) {
    const el = sliderObject.find(elem => elem.id === e.target.id)
    if (el.lock) return;
    el.lock = true;
    el.currentIndex--;
    el.directionNext = false;

    if (el.currentIndex < 0) el.currentIndex = el.child.length - 1;

    displaySlide(el.index);
}


function handleNext(e) {
    const el = sliderObject.find(elem => elem.id === e.target.id)
    if (el.lock) return;
    el.lock = true;
    el.currentIndex++;
    el.directionNext = true;

    if (el.currentIndex === el.child.length) el.currentIndex =  0;

    displaySlide(el.index);
}

function displaySlide(index) {
    const obj = sliderObject[index];
    obj.previousIndex = [...obj.child].findIndex(e => e.classList.contains("active"));

    slideOut(index);
}

function slideOut(index) {
    const obj = sliderObject[index];

    slideAnimation({
        el : obj.child[obj.currentIndex],
        props: {
            display: "block",
            transform : `translateX(${obj.directionNext ? "-100%" : "100%"})`,
            opacity : "0" 
        }
    });

    setTimeout(() => {
        const anim = {
            el: obj.child[obj.previousIndex],
            props: {
                display: "block",
                transition : "transform 0.4s cubic-bezier(.13,-0.53,.83,.67), opacity 0.4s",
                transform : `translateX(${obj.directionNext ? "100%" : "-100%"})`,
                opacity : "0" 
            }
        }
    
        obj.child[obj.previousIndex].addEventListener("transitionend", slideIn(index));
    
        slideAnimation(anim);
    }, 20);
}

function slideIn(index) {
    const obj = sliderObject[index];

    const anim = {
        el : obj.child[obj.currentIndex],
        props: {
            display : "block",
            transition : "transform 0.4s ease-out, opacity 0.4s",
            transform : `translateX(0%)`,
            opacity : "1" 
        }
    }
    
    slideAnimation(anim);

    obj.child[obj.previousIndex].removeEventListener("transitionend", slideIn);
    setTimeout(() => {
        obj.child[obj.previousIndex].classList.remove("active");
        obj.child[obj.previousIndex].style.display = "none";
        obj.child[obj.previousIndex].style.transform = "translateX(0%)";
    
        obj.child[obj.currentIndex].classList.add("active");
        obj.lock = false;
    }, 400);

}

function slideAnimation(anim) {
    for (const prop in anim.props) {
        anim.el.style[prop] = anim.props[prop];
    }
}