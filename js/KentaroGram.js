window.addEventListener('load', (event) => {  
  var window_w = window.innerWidth;

  narrowScreen(window_w);
});


window.addEventListener('resize', (event) => {  
  var window_w = window.innerWidth;

  narrowScreen(window_w);
});


// 画面サイズによるsidebarの表示/非表示制御function
function narrowScreen(window_w){
  if(window_w < 993){
    document.getElementById("pc-nav").style.display = "none";
    document.getElementById("phone-nav").style.display = "block";
    if(document.getElementById("sidebar")){
      document.getElementById("sidebar").style.display = "none";
    }
    if(document.getElementById("bulb")){
      document.getElementById("bulb").style.display = "none";
    }
	 if(document.getElementById("hiding_mickey")){
      document.getElementById("hiding_mickey").style.display = "none";
    }
  }else{
    // blockにするとPCメニューが縦並びになるので代わりに""を入れる
    document.getElementById("pc-nav").style.display = "";
    document.getElementById("phone-nav").style.display = "none";

    if(document.getElementById("sidebar")){
      document.getElementById("sidebar").style.display = "block";
    }
    if(document.getElementById("bulb")){
      document.getElementById("bulb").style.display = "block";
    }
	 if(document.getElementById("hiding_mickey")){
      document.getElementById("hiding_mickey").style.display = "block";
    }
  }
}

// アコーディオンメニューの初期非表示
document.getElementById("phone-nav-lists").style.display = "none";

var acordion_button_count = 0;

// アコーディオンメニューの表示・非表示の切り替え
function AcordionControl(){
  if(acordion_button_count % 2 == 0){
    document.getElementById("phone-nav-lists").style.display = "block";
  }else{
    document.getElementById("phone-nav-lists").style.display = "none";
  }
  acordion_button_count += 1;
}