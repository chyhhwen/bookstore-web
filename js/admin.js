var requestURL = './lib/fix.json';
var request = new XMLHttpRequest();
var title = [];
var input = [];
var id = [];
var qu_id = [];
var book = [];
var b_input = [];
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() 
{
    title = request.response.title;
    input = request.response.input;
    id = request.response.id;
    qu_id = request.response.qu_id;
    book = request.response.book;
    b_input = request.response.b_input;
}
put_view = (el) =>
{
    var block = "";
    block += "<div class=input>";
    block += "<div class=title><h1>"+ title[2] +"</h1>";
    block += "<input type=submit value=X onclick=leave('#test')></div>";
    block += "<form action='book.php' method=POST>";
    block += "<div class=form>";
    for(var i=0;i<6;i++)
    {
        if(i==3)
        {
            block += "<div class=put><h2>"+ b_input[i] +"</h2>";
            block += "<select name="+ book[i] +">";
            block += "<option>請選擇語言</option>";
            block += "<option>english</option>";
            block += "<option>chinese</option>";
            block += "</select>";
            block += "</div>";
        }
        else
        {
            block += "<div class=put><h2>"+ b_input[i] +"</h2>";
            block += "<input type=text name="+ book[i] +" id="+ book[i] +"></div>";
        }
    }
    block += "<div class=put1><h2>"+ b_input[i] +"</h2>";
    block += "<textarea name="+ book[i] +" id="+ book[i] +" style=height:20vh; rows=3></textarea></div>";
    block += "<div class=put>";
    block += "<input type=submit value=確認 </div>";
    block +="</div>";
    block +="</div>";
    document.querySelector(el).innerHTML = block;
    document.querySelector(el).style.display="block";
}
register_view = (el) =>
{
    var block = "";
    block += "<div class=input>";
    block += "<div class=title><h1>"+ title[1] +"</h1>";
    block += "<input type=submit value=X onclick=leave('#test')></div>";
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
leave = (el) =>
{
    document.querySelector(el).style.display="";
}
reset = () =>
{
    location.href="index.php";
}