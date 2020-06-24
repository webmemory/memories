var setcolor={
  ofLinks:function(color){
    // var list_b=document.querySelectorAll('a');
    // var i=0;
    // while(i<list_b.length){
    //   list_b[i].style.color=color;
    //   i=i+1}
    $('a').css('color',color)
    },

  ofBackground:function(color){
    document.querySelector('body').style.backgroundColor=color
    // $('body').css('color',color)
    // body 에 jquery 사용하면 오류가 발생함.
  },

  ofText:function(color){
    document.querySelector('body').style.color=color
    // $('body').css('color',color)
        // body 에 jquery 사용하면 오류가 발생함.
  }
};

function nightDayHandler(self){

  if(self.value==='to night mode'){

    setcolor.ofLinks('powderblue');
    setcolor.ofBackground('black');
    setcolor.ofText('white');
    self.value='to day mode'
  }
  else{

    setcolor.ofLinks('blue');
    setcolor.ofBackground('white');
    setcolor.ofText('black');
    self.value='to night mode'
  }

};
