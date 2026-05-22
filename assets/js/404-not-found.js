    let focus = document.querySelector(".focus");
    
        document.addEventListener("mousemove",function(e)
        {
            let x = e.pageX;
            let y = e.pageY;
          
            focus.style.background = "radial-gradient(circle at "+x+"px "+y+'px ,rgba(190, 255, 255, 0.2), transparent 40%)'; 
           
        })