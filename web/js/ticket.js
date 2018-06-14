var day1visite1 = document.getElementById('appbundle_ticket_day1Visite1');
var day1visite2 = document.getElementById('appbundle_ticket_day1Visite2');
var day1visite3 = document.getElementById('appbundle_ticket_day1Visite3');
var day2visite1 = document.getElementById('appbundle_ticket_day2Visite1');
var day2visite2 = document.getElementById('appbundle_ticket_day2Visite2');
var day2visite3 = document.getElementById('appbundle_ticket_day2Visite3');
var optionvisite1 = document.getElementById('appbundle_ticket_optionVisite1');
var optionvisite2 = document.getElementById('appbundle_ticket_optionVisite2');
var optionvisite3 = document.getElementById('appbundle_ticket_optionVisite3');

var day1breakfast1 = document.getElementById('appbundle_ticket_day1Breakfast1');
var day1breakfast2 = document.getElementById('appbundle_ticket_day1Breakfast2');
var day1breakfast3 = document.getElementById('appbundle_ticket_day1Breakfast3');
var day2breakfast1 = document.getElementById('appbundle_ticket_day2Breakfast1');
var day2breakfast2 = document.getElementById('appbundle_ticket_day2Breakfast2');
var day2breakfast3 = document.getElementById('appbundle_ticket_day2Breakfast3');


day1visite1.addEventListener('click', d1visite1)
day1visite2.addEventListener('click', d1visite2)
day1visite3.addEventListener('click', d1visite3)
day2visite1.addEventListener('click', d2visite1)
day2visite2.addEventListener('click', d2visite2)
day2visite3.addEventListener('click', d2visite3)
optionvisite1.addEventListener('click', op1visite1)
optionvisite2.addEventListener('click', op2visite2)
optionvisite3.addEventListener('click', op3visite3)

day1breakfast1.addEventListener('click', d1breakfast1)
day1breakfast2.addEventListener('click', d1breakfast2)
day1breakfast3.addEventListener('click', d1breakfast3)
day2breakfast1.addEventListener('click', d2breakfast1)
day2breakfast2.addEventListener('click', d2breakfast2)
day2breakfast3.addEventListener('click', d2breakfast3)


function d1visite1(event){
    if(day1visite1.checked == true){

        day1visite3.disabled = true;
        day1visite2.disabled = true;
        day1visite3.checked = false;
        day1visite2.checked = false;

        day2visite1.disabled = true;
        optionvisite1.disabled = true;
        day2visite1.checked = false;
        optionvisite1.checked = false;

    }else{
        day1visite3.disabled = false;
        day1visite2.disabled = false;
        day2visite1.disabled = false;
        optionvisite1.disabled = false;
        
    }
    
}
function d1visite2(event){
    if(day1visite2.checked == true){
        day1visite3.disabled = true;
        day1visite1.disabled = true;
        day1visite3.checked = false;
        day1visite1.checked = false;

        day2visite2.disabled = true;
        optionvisite2.disabled = true;
        day2visite2.checked = false;
        optionvisite2.checked = false;


    }else{
        day1visite3.disabled = false;
        day1visite1.disabled = false;
        day2visite2.disabled = false;
        optionvisite2.disabled = false;
    }
    
}
function d1visite3(event){
    if(day1visite3.checked == true){
        day1visite2.disabled = true;
        day1visite1.disabled = true;
        day1visite2.checked = false;
        day1visite1.checked = false;

        day2visite3.disabled = true;
        optionvisite3.disabled = true;
        day2visite3.checked = false;
        optionvisite3.checked = false;

    }else{
        day1visite2.disabled = false;
        day1visite1.disabled = false;
        day2visite3.disabled = false;
        optionvisite3.disabled = false;
    }
    
}
function d2visite1(event){

    if(day2visite1.checked == true){
        day2visite3.disabled = true;
        day2visite2.disabled = true;
        day2visite3.checked = false;
        day2visite2.checked = false;

        day1visite1.disabled = true;
        optionvisite1.disabled = true;
        day1visite1.checked = false;
        optionvisite1.checked = false;

    }else{
        day2visite3.disabled = false;
        day2visite2.disabled = false;

        day1visite1.disabled = false;
        optionvisite1.disabled = false;
    }
  
}

function d2visite2(event){

    if(day2visite2.checked == true){
        day2visite1.disabled = true;
        day2visite3.disabled = true;
        day2visite1.checked = false;
        day2visite3.checked = false;

        day1visite2.disabled = true;
        optionvisite2.disabled = true;
        day1visite2.checked = false;
        optionvisite2.checked = false;
    }else{
        day2visite1.disabled = false;
        day2visite3.disabled = false;

        day1visite2.disabled = false;
        optionvisite2.disabled = false;
    }
  
}

function d2visite3(event){

    if(day2visite3.checked == true){
        day2visite2.disabled = true;
        day2visite1.disabled = true;
        day2visite2.checked = false;
        day2visite1.checked = false;

        day1visite3.disabled = true;
        optionvisite3.disabled = true;
        day1visite3.checked = false;
        optionvisite3.checked = false;
    }else{
        day2visite2.disabled = false;
        day2visite1.disabled = false;

        day1visite3.disabled = false;
        optionvisite3.disabled = false;
    }
  
}

function op1visite1(event){

    if(optionvisite1.checked == true){
        optionvisite2.disabled = true;
        optionvisite3.disabled = true;
        optionvisite2.checked = false;
        optionvisite3.checked = false;

        day1visite1.disabled = true;
        day2visite1.disabled = true;
        day1visite1.checked = false;
        day2visite1.checked = false;
    }else{
        optionvisite2.disabled = false;
        optionvisite3.disabled = false;

        day1visite1.disabled = false;
        day2visite1.disabled = false;
    }
  
}
function op2visite2(event){

    if(optionvisite2.checked == true){
        optionvisite1.disabled = true;
        optionvisite3.disabled = true;
        optionvisite1.checked = false;
        optionvisite3.checked = false;

        day1visite2.disabled = true;
        day2visite2.disabled = true;
        day1visite2.checked = false;
        day2visite2.checked = false;
    }else{
        optionvisite1.disabled = false;
        optionvisite3.disabled = false;

        day1visite2.disabled = false;
        day2visite2.disabled = false;
    }
}

function op3visite3(event){

    if(optionvisite3.checked == true){
        optionvisite1.disabled = true;
        optionvisite2.disabled = true;
        optionvisite1.checked = false;
        optionvisite2.checked = false;

        day1visite3.disabled = true;
        day2visite3.disabled = true;
        day1visite3.checked = false;
        day2visite3.checked = false;
    }else{
        optionvisite1.disabled = false;
        optionvisite2.disabled = false;

        day1visite3.disabled = false;
        day2visite3.disabled = false;
    }
}
// function pour le repas du jour 1
function d1breakfast1(event){
    if(day1breakfast1.checked == true){
        day1breakfast2.disabled = true;
        day1breakfast3.disabled = true;
    }else{
        day1breakfast2.disabled = false;
        day1breakfast3.disabled = false;
    }
}
function d1breakfast2(event){
    if(day1breakfast2.checked == true){
        day1breakfast1.disabled = true;
        day1breakfast3.disabled = true;
    }else{
        day1breakfast1.disabled = false;
        day1breakfast3.disabled = false;
    }
}
function d1breakfast3(event){
    if(day1breakfast3.checked == true){
        day1breakfast1.disabled = true;
        day1breakfast2.disabled = true;
    }else{
        day1breakfast1.disabled = false;
        day1breakfast2.disabled = false;
    }
}
// function pour le repas du jour 2
function d2breakfast1(event){
    if(day2breakfast1.checked == true){
        day2breakfast2.disabled = true;
        day2breakfast3.disabled = true;
    }else{
        day2breakfast2.disabled = false;
        day2breakfast3.disabled = false;
    }
}
function d2breakfast2(event){
    if(day2breakfast2.checked == true){
        day2breakfast1.disabled = true;
        day2breakfast3.disabled = true;
    }else{
        day2breakfast1.disabled = false;
        day2breakfast3.disabled = false;
    }
}
function d2breakfast3(event){
    if(day2breakfast3.checked == true){
        day2breakfast1.disabled = true;
        day2breakfast2.disabled = true;
    }else{
        day2breakfast1.disabled = false;
        day2breakfast2.disabled = false;
    }
}