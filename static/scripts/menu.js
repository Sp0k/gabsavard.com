function Rotating() {
    let myClass = document.getElementById("hamburger")

    if (myClass.classList.contains("rotated")) myClass.classList.remove("rotated");
    else myClass.classList.add("rotated");
}
