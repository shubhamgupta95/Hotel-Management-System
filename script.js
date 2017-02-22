var i=0;
var path=new Array();

path[0]="images/1.jpg";
path[1]="images/2.jpg";
path[2]="images/3.jpg";
path[3]="images/4.jpg";
path[4]="images/5.jpg";
var j=0;

function sld()
{
//imag1.setAttribute("src",path[i]);
document.slide.src=path[i];
if(i<path.length-1)
i++;
else
i=0;
setInterval("sld()",4000);
}
window.onload=sld;