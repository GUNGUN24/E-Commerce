    function func1(){
   var daysInYear = 365.25;
var daysInWeek = 7;
 var yearsInLifetime = prompt("According to you, Number of years in lifetime", " ");        
 const weeks= (yearsInLifetime*daysInYear)/daysInWeek;
    a= document.getElementById("demo").innerHTML= "Average number of weeks in human lifetime is " + weeks;   
 alert(a);
        }