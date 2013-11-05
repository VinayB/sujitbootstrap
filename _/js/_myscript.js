$(function() {

//Make menu Automatically 
$('ul.nav li.dropdown').hover(function(){
 $('.dropdown-menu',this).fadeIn();
},function(){
$('.dropdown-menu',this).fadeOut('fast');
}); //hover 
}); 