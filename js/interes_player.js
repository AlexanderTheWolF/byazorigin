 Player();
    
    function Player(){
      vars={"m":"video","file":"img/pvh.mp4","uid":"player"};
      player = new Uppod(vars);
      document.getElementById('player').addEventListener('start',onStart,false);
      document.getElementById('player').addEventListener('play',onPlay,false);
      document.getElementById('player').addEventListener('pause',onPause,false);
      document.getElementById('player').addEventListener('stop',onStop,false);
      document.getElementById('player').addEventListener('end',onEnd,false);
      document.getElementById('player').addEventListener('time',onTime,false);
      document.getElementById('player').addEventListener('played',onPlayed,false);
      document.getElementById('player').addEventListener('error',onError,false);
      document.getElementById('player').addEventListener('fullscreen',onFull,false);
      document.getElementById('player').addEventListener('exitfullscreen',onExitFull,false);
      document.getElementById('player').addEventListener('seeking',onSeeking,false);
      document.getElementById('player').addEventListener('seeked',onSeeked,false);
    }
    function onStart(e){
      trace(e.type);
    }
    function onPlay(e){
      trace(e.type);
    }
    function onPause(e){
      trace(e.type);
    }
    function onStop(e){
      trace(e.type);
    }
    function onEnd(e){
      trace(e.type);
    }
    function onTime(e){
      trace(e.type+': '+player.EventDetail(e.type));
    }
    function onPlayed(e){
      trace(e.type+': '+player.EventDetail(e.type));
    }
    function onError(e){
      trace(e.type+': '+player.EventDetail(e.type));
    }
    function onFull(e){
      trace(e.type);
    }
    function onExitFull(e){
      trace(e.type);
    }
    function onSeeking(e){
      trace(e.type);
    }
    function onSeeked(e){
      trace(e.type);
    }
    function Resize(){
      document.getElementById('player').style.width='300px';
      document.getElementById('player').style.height='281px';
      player.Resize();
    }
    function trace(str){
      document.getElementById('trace').innerHTML=document.getElementById('trace').innerHTML + (document.getElementById('trace').innerHTML!=''?'<br>':'') + str;
    }