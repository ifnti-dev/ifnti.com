//===============INDEXATION =============================
//---------------second---------------------------
const deuxsem = document.getElementById('deux');
const troistrim = document.getElementById('trois');
//---------------première---------------------------
const deuxsem2 = document.getElementById('deux2');
const troistrim2 = document.getElementById('trois2');
//--------------terminal ----------------------------
const deuxsem3 = document.getElementById('deux3');
const troistrim3 = document.getElementById('trois3');


//------------------buttonradio--------------------
const seconde = document.querySelector('.rad1');
const premiere = document.querySelector('.rad2');
const terminal = document.querySelector('.rad3');
const examens = document.querySelector('.rad4');




//=================AFFICHAGE TABLEAUX =================
//-----------------affichage des tableau ---------------------------------
const trimmestre2 = document.querySelector('.trim2');
const trimmestre3 = document.querySelector('.trim3');

const pre_trimmestre2 = document.querySelector('.trim22');
const pre_trimmestre3 = document.querySelector('.trim33');

const ter_trimmestre2 = document.querySelector('.trim222');
const ter_trimmestre3 = document.querySelector('.trim333');

//------------------------------------------------------------------------
const epates1 = document.querySelector('.etape1');
const epates2 = document.querySelector('.etape2');
const epates3 = document.querySelector('.etape3');
const epates4 = document.querySelector('.etape4');

console.log(epates3 );


//====================TOGGLE =================================
//-----------------------fonctions de manipulations----------------------
deuxsem.addEventListener('click', (e)=>{
    e.preventDefault();
    trimmestre2.classList.toggle('trimo2');
});
troistrim.addEventListener('click', (e)=>{
    e.preventDefault();
    trimmestre3.classList.toggle('trimo3');
});
//-------------------------fonctions première -------------------------
deuxsem2.addEventListener('click', (e)=>{
    e.preventDefault();
    pre_trimmestre2.classList.toggle('pretrimo2');
});

troistrim2.addEventListener('click', (e)=>{
    e.preventDefault();
    pre_trimmestre3.classList.toggle('pretrimo3');
});

//-----------------------fonctions terminal--------------------

deuxsem3.addEventListener('click', (e)=>{
    e.preventDefault();
    ter_trimmestre2.classList.toggle('tertrimo2');
});

troistrim3.addEventListener('click', (e)=>{
    e.preventDefault();
    ter_trimmestre3.classList.toggle('tertrimo3');
});









//-----------------------fonction d'étaps--------------------------------
premiere.addEventListener('click', (e) => {
    e.preventDefault();
    epates1.style.display = 'none';
    epates2.classList.toggle('etap2');
});


terminal.addEventListener('click', (e) => {
    e.preventDefault();
    epates2.style.display = 'none';
    epates3.classList.toggle('etap3');
});

examens.addEventListener('click', (e) => {
    e.preventDefault();
    epates3.style.display = 'none';
    epates4.classList.toggle('etap4');
});

