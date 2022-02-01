  // Funktion, welche dafür sorgt, dass immer der aktive Tab auch im Footer die Klasse "active" erhält
  function change_active_footer (pathname){
    $(".nav-id-" + pathname).addClass("active");  
  }