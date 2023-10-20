$(window).scroll(function(event) {
    // var scrollLeft = $(window).scrollLeft();
    var scrollTop = $(window).scrollTop();
   
    if(scrollTop >= 50){
    // Estilos para el contenedor
    //   document.getElementById('test').style.backgroundColor='';
    //   document.getElementById('test').style.backdropFilter='blur(10px)';
    //   document.getElementById('test').style.boxShadow='0 1px 8px #000 ';
      document.getElementById('test').style.width='100%';
    //   document.getElementById('test').style.height='-80px !important';
      document.getElementById('test').style.position='fixed';
      document.getElementById('test').style.top='0px';
      document.getElementById('test').style.zIndex='100';
      document.getElementById('test').style.transitionDelay="1s";
      
    
    //   style="height:100px; position:fixed; z-index:100; width:100%; top:0px;"
    }
  
   if(scrollTop < 50){
    // Estilos para el contenedor
    //   document.getElementById('test').style.backgroundColor='';
    //   document.getElementById('test').style.boxShadow='none';
      document.getElementById('test').style.transition="all ease 0.3s";  
    //   document.getElementById('test').style.position='relative';
    
    }
  
  });