  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
  <script src="js/selectUser.js"></script>
  <script src="js/productlayer.js"></script>
  <script src="js/filter.js"></script>
  <script src="js/selection.js"></script>
  <script src="js/index.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>
  <script src="https://pawelgrzybek.com/siema/assets/siema.min.js"></script>
  <style>
    .innersiema section {
      width: 100%; 
      margin-right: 10px;
    }
    #allResult .modal-dialog {
      width: 100%;
      height: 100%;
      padding: 0;
      margin:0;
    }
    #allResult .modal-content {
      height: 100%;
      width:100vw;
      border-radius: 0;
      overflow:auto;
    }
    .flickity-page-dots {
    bottom: 2%;
}
  </style>
  <script>
    $('.innersiema').flickity({
      freeScroll: false,
      cellAlign: 'left',
      contain: true
    });
    siemaSlide=()=>{
      deepshit=new Siema({
      selector: '.deepshit',
      perPage: {
        500:1,
    800: 2, 
    1240: 3 
  }
    });}
    $("#allResult").on("show.bs.modal",()=>{
      setTimeout(siemaSlide,200);
      addTofilterMenu(selectLength, "#optionLength");
        addTofilterMenu(selectWidth, "#optionWidth");
        addTofilterMenu(selectThickness, "#optionThickness");
        $("#optionType input").prop("checked",false);
        $("#optionRight").children("div").hide();
        $("#optionLength").show();
    });
    $(".prev").click(()=>deepshit.prev(3));
    $(".next").click(()=>deepshit.next(3));
  </script>
</body>
</html>