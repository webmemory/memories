var setcolor={
  ofLinks:function(color){
    var list_b=document.querySelectorAll('a');
    var i=0;
    while(i<list_b.length){
      list_b[i].style.color=color;
      i=i+1}
    },

  ofBackground:function(color){
    document.querySelector('body').style.backgroundColor=color
  },

  ofText:function(color){
    document.querySelector('body').style.color=color
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
