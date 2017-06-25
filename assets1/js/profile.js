var f=document.getElementById('file');
document.getElementById('disp').innerHTML=f.value;
f.onload=check;
f.onchange=check;
f.onkeyup=check;
function check()
{
    document.getElementById('disp').innerHTML=f.value;
}
function up()
{
    if(f.value)
        document.f2.submit();
    else
        document.getElementById('disp').innerHTML="No file selected. Please select a file using the '+' button";
}