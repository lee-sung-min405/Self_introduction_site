/*이때까지 작동이 안되었던 이유는 HTML에 head사이에 있다 보니 body를 다 읽기전에 해석해서 이미 끝나서
밑에 적용이 안되었던 거임 즉, button1을 읽었지만 body를 안읽었기 때문에 못찾은 것이다.

이러한 문제를 해결하기 위하여 body밑에 적용하거나, 문서의 내용이 모두 로드되면 할일, 그 할일 안에 
내가 작성한 자바스크립트 내용이 모두 들어와야한다.
위의 내용을 위하여 대상.addEventListener('이벤트의 종류', 할일);
                      이벤트의 종류 = DOMContentLoaded
                      할일 = 함수 = function(){실제로 할일 자바스크립트 내용}*/


document.addEventListener('DOMContentLoaded', function(){ //이 문장의 내용은 위쪽에 기술하였음
     
     
     //버튼 1을 누르면 transform : translate(-100vw)
     //document.querySelector('.button1') button1 이라는 요소를 찾아라
     //addEventListener('click',function() 그것이 클릭이 일어나면 안에 있는 요소를 실행 시켜달라

     //section_3 슬라이드 버튼
     document.querySelector('.button1').addEventListener('click',function(){
          document.querySelector('.container').style.transform='translate(-0vw)';
     });
     document.querySelector('.button2').addEventListener('click',function(){
          document.querySelector('.container').style.transform='translate(-100vw)';
     });
     document.querySelector('.button3').addEventListener('click',function(){
          document.querySelector('.container').style.transform='translate(-200vw)';
     });

     //section_4 리스트 복제
     var slides=document.querySelector('#slides'),

     slide=document.querySelectorAll('#slide_li'),

     currentIdx=0,

     slideCount=slide.length,

     slideWidth=290,

     slideMargin=30,

     prevBtn = document.querySelector('.prev'),

     nextBtn = document.querySelector('.next');

     makeClone();

     function makeClone(){
          for(var i=0; i<slideCount; i++){
               //a.cloneNode(), a.cloneNode(true)
               var cloneSlide= slide[i].cloneNode(true);
               cloneSlide.classList.add('clone');
               //a.appendChild(b) 요소의 뒤에 추가
               slides.appendChild(cloneSlide);
          }
          for(var i=slideCount-1; i>=0; i--){
               var cloneSlide=slide[i].cloneNode(true);
               cloneSlide.classList.add('clone');
               //a.prepend(b) 요소의 앞에 추가
               slides.prepend(cloneSlide);
          }
          updateWidth();
          setInitialPos();

          setTimeout(function(){
               slides.classList.add('animated');
          },100);
     }

     function updateWidth(){
          var currentSlides=document.querySelectorAll('#slide_li');
          var newSlideCount=currentSlides.length;

          var newWidth=(slideWidth+slideMargin)*newSlideCount-slideMargin+'px';
          slides.style.width=newWidth;
     }

     function setInitialPos(){
          var initialTranslateValue=-(slideWidth+slideMargin)*slideCount;
          
          //sldies{transform:translateX(-1000px);}
          slides.style.transform='translateX('+ initialTranslateValue + 'px)';
     }

     nextBtn.addEventListener('click',function(){
          moveSlide(currentIdx+1);
     })
     prevBtn.addEventListener('click',function(){
          moveSlide(currentIdx-1);
     })

     function moveSlide(num){
          slides.style.left=-num*(slideWidth+slideMargin)+'px';
          currentIdx=num;
          console.log(currentIdx,slideCount);
          if(currentIdx == slideCount || currentIdx == -slideCount){
               setTimeout(function(){
                    slides.classList.remove('animated');
                    slides.style.left ='0px';
                    currentIdx =0;
               },500);
               setTimeout(function(){
                    slides.classList.add('animated');
               },600);
          }
     }
});