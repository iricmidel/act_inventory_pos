window.onload = onloadAll();

  setInterval(onloadAll, 100)

function onloadAll(){
  timeZ();
  loadnowserving();
  loadnextserving();
}

function timeZ(){
  var today = new Date();

  var dy = today.getDay();
  var dd = today.getDate();
  var mm = today.getMonth()+1;
  var yy = today.getFullYear();
  var tt = today.getHours();
  var mn = today.getMinutes();

  if(dy == 1){
    var day = "Monday"
  }else if(dy == 2){
    var day = "Tuesday"
  }else if(dy == 3){
    var day = "Wednesday"
  }else if(dy == 4){
    var day = "Thursday"
  }else if(dy == 5){
    var day = "Friday"
  }else if(dy == 6){
    var day = "Saturday"
  }else if(dy == 7){
    var day = "Sunday"
  }

  if(mm == 1){
    var monthh = "January"
  }else if(mm == 2){
    var monthh = "Febuary"
  }else if(mm == 3){
    var monthh = "March"
  }else if(mm == 4){
    var monthh = "April"
  }else if(mm == 5){
    var monthh = "May"
  }else if(mm == 6){
    var monthh = "June"
  }else if(mm == 7){
    var monthh = "July"
  }else if(mm == 8){
    var monthh = "August"
  }else if(mm == 9){
    var monthh = "September"
  }else if(mm == 10){
    var monthh = "October"
  }else if(mm == 11){
    var monthh = "November"
  }else if(mm == 12){
    var monthh = "December"
  }

  if(tt == 13){
    var time = 1;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 14){
    var time = 2;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 15){
    var time = 3;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 16){
    var time = 4;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 17){
    var time = 5;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 18){
    var time = 6;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 19){
    var time = 7;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 20){
    var time = 8;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 21){
    var time = 9;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 22){
    var time = 10;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 23){
    var time = 11;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt == 24){
    var time = 12;
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+time+":"+mn+" "+"PM");
  }else if(tt <= 12){
    $('#timeZ').html(monthh+" "+dd+","+" "+yy+" "+" "+tt+":"+mn+" "+"PM");
  }



  $('#dayZ').html(day);


}

function loadnowserving(){
    $.ajax({

      url: "../Backend/que_controller.php",
      type: "POST",
      data: {func:10},
      success: function(result){

        $('#nowshowingid').html(result);

      }

    });
  }

function loadnextserving(){

  $.ajax({

    url: "../Backend/que_controller.php",
    type: "POST",
    data: {func:11},
    success: function(result){

      $('#listcusutomer').html(result);
    }

  });

}
