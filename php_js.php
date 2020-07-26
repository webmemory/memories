<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php&js</title>
  </head>
<body>

<h2>쓰기</h2>
<h3>php</h3>
<p><....  echo "My first PHP script!"; <br>
<....  echo 1+5; ?><br>
<....  print "Hello world!"<br>
<....  print 1+5>
</p>
    ---><br>
<?php
echo "My first PHP script!<br>";
echo 1+5;
echo "<br>";
print "Hello world!<br>";
print 1+5
?>
<h3>javascript</h3>
<p><...document.write("Hello JavaScript!") <br>
<...document.write(1+5) ><br>

</p>

---><br>
<script>
document.write("Hello JavaScript!<br>");
document.write(1+5)
// alert("alert")
console.log(5 + 6);


</script>
<p>*참고:consol.log(1+5) 라고 한 다음, 브라우져를 실행하고 f12키를 누르면 개발자창의
console 창에 결과가 표시된다. 디버깅을 위한 것.<br>
이것을 거꾸로 하여 개발자화면으로 들어가 console창을 열고 거기에 코딩을 하고
엔터를 치면 브라우져 화면에 그 결과가 뜬다. 간단한 테스팅을 위해 사용한다.<br><br>
*참고:alert(1+5) 라고 하고 실행하면 별도의 윈도우가 열리면서 결과가 출력된다.</p>
<hr>

<h3>javascript 쓰기2:<br>
...document.getElementById("demo").innerHTML</h3>
<p id="demo">자바스크립트는 HTML element를 찾아서 (with id="demo") <br>
  그 엘리먼트의 내용(innerHTML)을 원하는 것으로 바꿔 쓸 수 있다.</p>
<button type="button"
onclick='document.getElementById("demo").innerHTML
="This example uses the method to find an element"+
"with(id=demo) <br>and changes the content"+
" in that element (innerHTML) "'>Click me!</button>

<p>*코딩 문서의 텍스트에 " ",' '가 들어 있으면 무조건 안 된다.<br>
코딩 문서에서 텍스트에 줄바꿈이 들어가서도 안 된다.<br>
코딩문서를 보기 좋게 하기 위해 줄바꿈을 해 놓고 싶으면 " "+" "를 사용한다.<br>
출력된 웹페이지에 텍스트를 줄바꿈되어 있게 하기 위해 코딩 속에 br 을
사용할 수는 있다</p>

<xmp>
  <p id="demo">
  자바스크립트는 HTML element를 찾아서 (with id="demo") <br>
  그 엘리먼트의 내용(innerHTML)을 원하는 것으로 바꿔 쓸 수 있다.</p>

  <button type="button"
  onclick='document.getElementById("demo").innerHTML
  ="This example uses the method to find an element"+
  "with(id=demo) <br>and changes the content"+
  " in that element (innerHTML) "'>Click me!</button>

  <button type="button"에서 type="button"은 없어도 작동된다
</xmp>

<h3>javascript 쓰기3:<br>
...document.getElementById("demo_img").src</h3>
<p>텍스트를 바꿔 써 넣을 때에는 innerHTML을 사용하지만, src를 사용하면
이미지도 바꿔 넣을 수 있다</p>
<button type="button"
 onclick='document.getElementById("demo_img").src
 ="bulbon.gif"'>Turn on!</button>

<img id="demo_img" src="bulboff.gif" style="width:100px">

 <button type="button"
  onclick='document.getElementById("demo_img").src
  ="bulboff.gif"'>Turn off!</button><br><br>

<p>document.getElementById("demo_img").style.(width)=...<br>
을 사용하여 특정 엘리먼트의 스타일도 바꿔 쓸 수 있다.</p>
  이미지 크기 :
  <button type="button"
   onclick='document.getElementById("demo_img").style.width
   ="70px"'>smaller!</button>
 <button type="button"
  onclick='document.getElementById("demo_img").style.width
  ="150px"'>larger</button>
  <button type="button"
   onclick='document.getElementById("demo_img").style.width
   ="100px"'>original</button>
   <p>document.getElementById("demo_img").style.(display)=...<br>
   을 사용하여 특정 엘리먼트의 스타일을 보이게/안 보이기 바꿔 쓸 수 있다.</p>
     이미지 보이기 :
   <button type="button" onclick="document.getElementById('demo_img').
   style.display='none'">Hide Image!</button>
   <button type="button" onclick="document.getElementById('demo_img').
   style.display='inline'">Show Image!</button>
<xmp>
  이미지 바꾸기

  <button type="button"
   onclick='document.getElementById("demo_img").src
   ="bulbon.gif"'>Turn on!</button>

  <img id="demo_img" src="bulboff.gif" style="width:50px">

   <button type="button"
    onclick='document.getElementById("demo_img").src
    ="bulboff.gif"'>Turn off!</button><br>

    *<button>이나 <img>모두 인라인 엘리먼트이므로 코딩된 순서에 따라
      좌에서 우로 표시되게 된다.
 스타일 바꾸기1

    이미지크기 : <button type="button"
     onclick='document.getElementById("demo_img").style.width
     ="70px"'>smaller image!</button>
   <button type="button"
    onclick='document.getElementById("demo_img").style.width
    ="150px"'>larger image!</button>
    <button type="button"
     onclick='document.getElementById("demo_img").style.width
     ="100px"'>original image!</button>

 스타일 바꾸기2

  이미지 보이기 :
   <button type="button" onclick="document.getElementById('demo_img').
   style.display='none'">Hide Image!</button>
   <button type="button" onclick="document.getElementById('demo_img').
   style.display='inline'">Show Image!</button>


</xmp>

<h3>페이지 프린트 아웃 버튼</h3>
<p>Click the button to print the current page.</p>

<button onclick="window.print()">Print this page</button>
<xmp>
  코드
  <button onclick="window.print()">Print this page</button>
</xmp>

<
  </body>
  </html>
