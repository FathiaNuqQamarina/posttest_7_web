// mode gelap/ darkmode
var element = document.body;

function ubahWarna() {
    element.classList.toggle("gelap");
}

const tombol = document.querySelector("#btn");
tombol.addEventListener("click", function(){
    alert("Anda Akan Beralih Ke Situs Youtube ");
});

// addEventListener
const section1 = document.querySelector("#s1");
section1.addEventListener("click", function(){
    const detail1 = document.querySelector("#detail1");
    detail1.style.display = "block";
});

const section2 = document.querySelector("#s2");
section2.addEventListener("click", function(){
    const detail2 = document.querySelector("#detail2");
    detail2.style.display = "block";
});

const section3 = document.querySelector("#s3");
section3.addEventListener("click", function(){
    const detail3 = document.querySelector("#detail3");
    detail3.style.display = "block";
});



// // notifikasi box
// setTimeout(function(){
//     document.querySelector('.box-notif').style.top = "0"
// },1000);


// document.querySelector('#Izinkan').onclick = async() =>{
//     localStorage.setItem('notif', 'true');
//     notifIzin();
// }

// function notifIzin(){
//     if(localStorage.getItem('notif', 'true')){
//         document.querySelector('.box-notif').style.display = 'none'
//     }
// }
// notifIzin();


// document.querySelector('#Blokir').onclick = async() =>{
//     localStorage.setItem('notif', 'false');
//     notifBlok();
// }

// function notifBlok(){
//     if(localStorage.getItem('notif', 'false')){
//         document.querySelector('.box-notif').style.display = 'none'
//     }
// }
// notifBlok();




