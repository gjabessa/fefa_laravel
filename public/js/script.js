function myFunction(id) {
  var x = document.getElementById(id);
  if(x.style.display == 'none'){
    x.style.display = '';
  } else {
  	x.style.display = 'none'
  }
}

function slideTransition(){
  var x = document.getElementById('Img');
  var y = document.getElementById('Img1');
  var z = document.getElementById('Img2');
  var a = document.getElementById('Txt');
  var b = document.getElementById('Txt1');
  var c = document.getElementById('Txt2');
  if(x.style.display != 'none'){
    
    x.style.display = 'none';
    y.style.display = 'block';
    a.style.display = 'none';
    b.style.display = 'block';
    
  } else if(y.style.display != 'none') {
    y.style.display = 'none';
    z.style.display = 'block';
    a.style.display = 'block';
    b.style.display = 'none';
  }  else if(z.style.display != 'none'){
    z.style.display = 'none';
    x.style.display = 'block';
    
  }
}

setInterval(function(){slideTransition()},5000)