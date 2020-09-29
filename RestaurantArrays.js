//the stuff
var ItemName = new Array("Ronin Ramen","Samurai Ramen","Voodoo Chicken Noodle Soup","Brahmin Lo Mein","Kibble Pad Thai","Chap Chae","Pancit","Devil's  Mane Pasta","Pho","Stir Fry");
var ItemDescription = new Array("Signature Curry Chicken Flavor",
"Spicy Tonkatsu Flavor",
"Synthetic Chicken Flavor - a childhood favorite",
"Traditional Chinese Lo Mein with radioactive steak from the Badlands",
"Thai Street Noodles for the masses",
"Savory stir-fried Korean glass Noodles",
"Filipino rice noodles",
"Like Angel hair pasta but not",
"Vietnamese soup consisting of broth, rice noodles, herbs, and meat, sometimes chicken",
"Straight from the Orient. Wok cooked vegetables with a tantilizing sauce from China.",
"Another savory dish from the Orient.");
var ItemPrice = new Array(2.99,2.99,2.99,2.99,5.99,9.99,1.99,2.99,5.99,9.99,2.99,3.99,8.99,8.99,12.99,3.99,8.99);
var ItemPic = new Array("items/roninramen.jpg","items/samurairamen.png","Broccoli.gif","brahmin.png","ChickenFingers.gif","CordonBleu.gif","FrenchFries.gif","GreenBeans.gif","Hamburger.gif","Lasagna.gif","Peas.gif","Salad.gif","VegetableDelight.gif","StirFry.gif","TboneSteak.gif","SweetPotatoes.gif","FriedChicken.gif");

//to chug
var DrinkName = new Array("Synthetic Slum Water","Real Water","Sake");
var DrinkDescription = new Array("For the common folk",
"For the rich corpos",
"For those wanting to forget");
var DrinkPrice = new Array(2.99,299,2.99);
var DrinkPic = new Array("Asparagus.gif","BakedPotatoe.gif","Broccoli.gif");

function printMenu(){
  document.write("<h2 class='blinking'>The Stuff</h2>");
  var i;
  for(i=0; i<ItemName.length; i++){
    document.write("<table><tr><td><input type='checkbox' id='"+ItemName[i]+"' value='"+ i +"' class='cbox'>" + ItemName[i] + "</td><td>" + ItemDescription[i] + "</td><td> ¥" + ItemPrice[i] + "</td></tr></table>");
  }
  document.write("<h2 class='blinking'>To Chug</h2>");
  var j;
  for(j=0; j<DrinkName.length; j++){
    document.write("<table><tr><td><input type='checkbox' id='"+DrinkName[j]+"' value='"+ j +"' class='cbox'>" + DrinkName[j] + "</td><td>" + DrinkDescription[j] + "</td><td> ¥" + DrinkPrice[j] + "</td></tr></table>");
  }
}

var myMusic = document.getElementById("Dust");
function playAudio() {
  myMusic.play();
}
function pauseAudio() {
  myMusic.pause();
}

function checkAll(){
  var items = document.getElementsByClassName('cbox');
  var i;
	for(i = 0; i < items.length; i++){
			items[i].checked = true;
    }
}

function uncheckAll(){
  var items = document.getElementsByClassName('cbox');
  var i;
	for(i = 0; i < items.length; i++){
			items[i].checked = false;
  }
}


var pics = ["box.gif","boxing.gif","drone.gif","deagle.gif","bike.gif", "biking.gif","chess.gif","seoul.jpg","chiner.jpg","wick.gif","ny.jpg","nightcity.gif","beachy.png"];
var colors = ["#FFFF66","#FF355E","#50BFR6", "crimson", "violet", "cyan"];
var borders = ["solid","dotted","dashed","double","groove","ridge","inset","outset"];

var whichPic = Math.floor((Math.random() * pics.length) + 0);
var whichColor = Math.floor((Math.random() * colors.length) + 0);
var whichBorder = Math.floor((Math.random() * borders.length) + 0);

function randVal (min,max)
{
  return (min + Math.floor (Math.random()*(max-min+1)));
}

function makeDiv()
{
  whichPic = Math.floor((Math.random() * 11) + 0);
  whichColor = Math.floor((Math.random() * colors.length) + 0);
  whichBorder = Math.floor((Math.random() * borders.length) + 0);
  document.write("<div style=\"border-style:" +borders[whichBorder] + "; border-color:" + colors[whichColor] + "; position:absolute; border-width:10px; right:"+ randVal(200,1200) +"px;top:"+ randVal(100,800)+"px \"><img src = \"" + pics[whichPic] + "\"width="+randVal(50,300)+"px;></div>");
}

function makeHeader()
{
  document.write("<heading id='myHeader'>My name is JR Gumarin, and I like Boxing, Biking, Chess, Photography, Drones, and Guns!</heading>");
  var heading = document.getElementById("myHeader");
  whichColor = Math.floor((Math.random() * colors.length) + 0);
  heading.style.color = colors[whichColor];
  heading.style.fontFamily = '"Courier New", Courier, monospace';
  heading.style.fontSize = "50px";
  heading.style.borderStyle = "double";
}

function show_image(src, width, height, alt){
  var img = document.createElement("img");
  img.src = src;
  img.width = width;
  img.height = height;
  img.alt = alt;

  document.body.appendChild(img);
}

function orderUp(){
  document.getElementById("menu").style.display = "none";
  document.getElementById("countertop").style.display = "block";
  document.getElementById("receipt").style.display = "block";

  var count = 0;
  var subtotal = 0;
  var tax = .07;
  var tip = .15;
  var total = 0;
  var bowl = "";
  var checkeditembox = document.getElementsByClassName('cbox');
  var allItems = "";
  var str = "";

  for(var i = 0; i<ItemName.length; i++){
    var checkeditem = document.getElementById(ItemName[i]);
    if(checkeditem.checked){
      count++;
      str += checkeditem[i].name + " " + ItemPrice[i] + "<br>";
      subtotal += ItemPrice[i];
      bowl += "<img src=\"items/" + ItemPic[i] + "\">";

      allItems += ItemName[i] + " -$" + ItemPrice[i] + "</span><br>";
      //document.write(bowl);
      document.getElementById('menu').innerHTML += "<img src=\"items/" + ItemPic[i] + "\">";
    }
  }

  //document.getElementById("food").innerHTML =

  tip = tip*subtotal;
  tax = tax*subtotal;
  total = subtotal + tip + tax;

  document.getElementById("receipt").innerHTML = "<table style=\"font-family:Open Sans;font-weight: lighter;background: rgba(236, 236, 236, 0.8);border-radius: 20px;width:200px;\"><tr><th><br><center>Thank you for ordering!</center><br></th></tr><tr><th>" + allItems + "</th></tr><tr><th>SUBTOTAL: " + subtotal.toFixed(2) + "</th></tr><tr><th>TIP: " + tip.toFixed(2) + "</th></tr><tr><th>TAX: " + tax.toFixed(2) + "</th></tr><tr><th>TOTAL: " + total.toFixed(2) + "</th></tr></table>";

}

function newOrder(){
  location.reload();
}

var foodOpaque;
function bite(){
  foodOpaque = foodOpaque - .2;
  document.getElementById("food").style.opacity = foodOpaque;
}

var drinkOpaque;
function sip(){
  drinkOpaque = drinkOpaque - .2;
  document.getElementById("drink").style.opacity = drinkOpaque;
}
