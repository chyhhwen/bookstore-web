var requestURL = './lib/fix.json';
var request = new XMLHttpRequest();
var title = [];
var input = [];
var id = [];
var qu_id = [];
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() 
{
    title = request.response.title;
    input = request.response.input;
    id = request.response.id;
    qu_id = request.response.qu_id;
}
login_view = (el) =>
{
    var block = "";
    block += "<div class=input>";
    block += "<div class=title><h1>"+ title[0] +"</h1>";
    block += "<input type=submit value=X onclick=login_leave('#test')></div>";
    block += "<form action='client.php' method=POST>";
    block += "<div class=form>";
    for(var i=0;i<2;i++)
    {
        if(i === 1)
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=password name=password id="+ id[i] +"></div>";
        }
        else
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=text name=username id="+ id[i] +"></div>";
        }
    }
    block += "<div class=put>";
    block += "<input type=submit value=確認></div>";
    block += "<input type=hidden value=1 name=check>";
    block += "<div class=pic><img src=./pic/cat2.jpg>";
    block += "</div>";
    block += "</div>";
    block += "</div>";
    document.querySelector(el).innerHTML = block;
    document.querySelector(el).style.display="block";
}
login_leave = (el) =>
{
    document.querySelector(el).style.display="";
}
register_view = (el) =>
{
    var block = "";
    block += "<div class=input>";
    block += "<div class=title><h1>"+ title[1] +"</h1>";
    block += "<input type=submit value=X onclick=login_leave('#test')></div>";
    block += "<form action='client.php' method=POST>";
    block += "<div class=form>";
    for(var i=2;i<6;i++)
    {
        if(i === 3)
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=password name="+ id[i] +" id="+ id[i] +"></div>";
        }
        else
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=text name="+ id[i] +" id="+ id[i] +"></div>";
        }
    }
    block += "<div class=put>";
    block += "<input type=submit value=確認 </div>";
    block += "<input type=hidden value=2 name=check>";
    block +="</div>";
    block +="</div>";
    document.querySelector(el).innerHTML = block;
    document.querySelector(el).style.display="block";
}
register_leave = (el) =>
{
    document.querySelector(el).style.display="";
}
reset = (el) =>
{
    document.querySelector(el).style.display="";
}
login_check = () =>
{

}