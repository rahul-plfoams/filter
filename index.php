<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.min.css'/>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="img/dr-back-favicon.png" />
  <base href="/wp-content/themes/storefront/">
  <title>Perfect Match | Bamboo Mattress</title>
</head>

<body>
  <img class="w-100" src="img/Bamboo mattress banner.jpg">
  <div class="container p-0">
    <div id='filters' class="container">
      <form id="formFeed" action="send.php" method="post">
        
        <section class="box-shadow mt-5 mb-5">
          <div class="tablet-container">
            <h5 class="d-lg-none d-block m-3 text-center">What size mattress is needed ? <br>(Please Select)</h5>
            <h3 class="d-lg-block d-none m-5 text-center">What size mattress is needed ? <br>(Please Select)</h3>
            <div class="row text-center" style="height: 100px;">
              <div class="col">
                <img class="img-fluid h-50" src="img/single.png">
              </div>
              <div class="col">
                <img class="img-fluid h-50" src="img/double.png">
              </div>
              <div class="col">
                <img class="img-fluid h-50" src="img/queen.png">
              </div>
              <div class="col">
                <img class="img-fluid h-50" src="img/king.png">
              </div>
            </div>
            <div class="row">
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeSingle" type='checkbox' name='size' value='single'></input>
                <span class="checkbox-custom rectangular">Single</span>
              </label>
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeDouble" type='checkbox' name='size' value='double'></input>
                <span class="checkbox-custom rectangular">Double</span>
              </label>
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeQueen" type='checkbox' name='size' value='queen'></input>
                <span class="checkbox-custom rectangular">Queen</span>
              </label>
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeKing" type='checkbox' name='size' value='king'></input>
                <span class="checkbox-custom rectangular">King</span>
              </label>
            </div>
          </div>
        </section>
        
        <div id="mod">
          <!-- sleeping position starts -->
          <section class="box-shadow-padding mt-5 mb-5 box-shadow">
            <h3 class="d-lg-block d-none text-center m-lg-5 m-md-3 m-sm-2 m-xs-1">What is your primary sleeping position
              ? <br>(Please &#9989;)</h3>
            <h6 class="d-lg-none d-block text-center m-lg-5 m-md-3 m-sm-2 m-xs-1">What is your primary sleeping position
              ? <br>(Please &#9989;)</h6>
            <div class="container">
              <table class="table table-bordered text-center table-responsive">
                <thead>
                  <tr>
                    
                    <td><img class="img img-fluid img-fluid-table" src="img/back.png">
                      <figcaption>Back</figcaption>
                    </td>
                    <td><img class="img img-fluid img-fluid-table" src="img/side.png">
                      <figcaption>Side</figcaption>
                    </td>
                    <td><img class="img img-fluid img-fluid-table" src="img/stomach.png">
                      <figcaption>Stomach</figcaption>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>
                      <label class="checkPositionS1">
                        <input type="checkbox" value="Back" name="position1">
                      </label>
                    </td>
                    <td>
                      <label class="checkPositionS1">
                        <input type="checkbox" value="Side" name="position1">
                      </label>
                    </td>
                    <td>
                      <label class="checkPositionS1">
                        <input type="checkbox" value="Stomach" name="position1">
                      </label>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </section>
          <!-- sleeping position ends -->
          <!-- back pain starts -->
          <section class="box-shadow-padding mt-5 mb-5 box-shadow">
            <h3 class="d-lg-block d-none text-center m-lg-5 m-md-3 m-sm-2 m-xs-1">Do you ever wake up with bad back pain
              ? <br>(Please &#9989;)</h3>
            <h6 class="d-lg-none d-block text-center m-lg-5 m-md-3 m-sm-2 m-xs-1">Do you ever wake up with bad back pain
              ? <br>(Please &#9989;)</h6>
            <div class="container">
              <table class="table table-bordered text-center table-responsive">
                <thead>
                  <tr>
                 
                    <td><img class="img img-fluid img-fluid-table" src="img/rarely.png">
                      <figcaption>Rarely</figcaption>
                    </td>
                    <td><img class="img img-fluid img-fluid-table" src="img/sometimes.png">
                      <figcaption>Sometimes</figcaption>
                    </td>
                    <td><img class="img img-fluid img-fluid-table" src="img/often.png">
                      <figcaption>Often</figcaption>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  
                    <td>
                      <label class="checkBackPainS1">
                        <input type="checkbox" value="Rarely" name="backpain1">
                      </label>
                    </td>
                    <td>
                      <label class="checkBackPainS1">
                        <input type="checkbox" value="Sometimes" name="backpain1">
                      </label>
                    </td>
                    <td>
                      <label class="checkBackPainS1">
                        <input type="checkbox" value="Often" name="backpain1">
                      </label>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </section>
          <!-- back pain ends -->
          <!-- mattress feel starts -->
          <section id="filters" class="box-shadow-padding mt-5 mb-5 box-shadow">
            <h3 class="d-lg-block d-none text-center m-lg-5 m-md-3 m-sm-2 m-xs-1">What type of mattress feel do you
              prefer? <br>(Please &#9989;)</h3>
            <h6 class="d-lg-none d-block text-center m-lg-5 m-md-3 m-sm-2 m-xs-1">What type of mattress feel do you
              prefer? <br>(Please &#9989;)</h6>
            <div class="container">
              <table class="table table-bordered text-center table-responsive">
                <thead>
                  <tr>
                    
                    <td><img class="img img-fluid img-fluid-table" src="img/soft-feel.png">
                      <figcaption>Soft <br class="brOnlyForResponsiveness"> Feel</figcaption>
                    </td>
                    <td><img class="img img-fluid img-fluid-table" src="img/medium-feel.png">
                      <figcaption>Medium <br class="brOnlyForResponsiveness"> Feel</figcaption>
                    </td>
                    <td><img class="img img-fluid img-fluid-table" src="img/firm-feel.png">
                      <figcaption>Firm <br class="brOnlyForResponsiveness"> Feel</figcaption>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="filter-attributes">
                    
                    <td>
                      <label class="checkFeelTypeS1">
                        <input type="checkbox" value="SOFT" name="feel1">
                      </label>
                    </td>
                    <td>
                      <label class="checkFeelTypeS1">
                        <input type="checkbox" value="MEDIUM" name="feel1">
                      </label>
                    </td>
                    <td>
                      <label class="checkFeelTypeS1">
                        <input type="checkbox" value="FIRM" name="feel1">
                      </label>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </section>
          <!-- mattress feel ends -->
        </div>
       
        <section class="box-shadow">
        <h3 class="text-center">What is your budget ? <br>(Please Select)</h3>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div id="range"></div>
            </div>
          </div>
          <div class="row slider-labels">
            <div class="col-xs-6 caption">
              <strong>Min:</strong> <span id="slider-range-value1"></span>
            </div>
            <div class="col-xs-6 text-right caption">
              <strong>Max:</strong> <span id="slider-range-value2"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="min-value" value="">
                <input type="hidden" name="max-value" value="">
            </div>
          </div>
        </div>
      </section>
        
        <section class="text-center">
          <div class="pb-5">
            <h3 class="p-3">Your Perfect Mattress</h3>
            <span>
              <input type="button" id="showResult" class="btn btn-danger" value="Show My Perfect Mattress">
              <input class="btn btn-danger text-center" type='reset' id='none' value='Reset'></input>
              
            </span>
          </div>
          <div>
            <div id="matResult"></div>
          </div>
        </section>
      </form>
    </div>
    <center>
      <div class='sections' id="productList">
        <div class="sortingFilters">
          <div class="fixed-bottom text-center mb-3">
            <button class="btn btn-danger">
              <i class="fas fa-sort-amount-up-alt" id="sortPrice"></i>
            </button>
            <button class="btn btn-danger " data-toggle="modal" data-target="#exampleModal" style="height:38px;">
              <label for="" class="text-light p-0"><i class="fas fa-filter text-light" id="filterMenuBtn"
                  style="max-height:16px;"></i>filters</label>
            </button>
          </div>
        </div>
        <ul class="mb-5">
        </ul>
      </div>
    </center>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true" style="height:100vh !important;width:100vw !important">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">All Filters</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-6" id="menuLeft">
                  <button data-value="Length" class="btn btn-block btn-info">Length</button>
                  <button data-value="Width" class="btn btn-block btn-info">Width</button>
                  <button data-value="Thickness" class="btn btn-block btn-info">Thickness</button>
                  <button data-value="Type" class="btn btn-block btn-info">Type</button>
                </div>
                <div class="col-6">
                  <div id="optionRight">
                    <div id="optionLength">
                    </div>
                    <div id="optionWidth">
                    </div>
                    <div id="optionThickness">
                    </div>
                    <div id="optionType">
                      <div class="form-check text-left">
                        <input class="form-check-input" type="checkbox" value="Natural Latex">
                        <label class="form-check-label">
                        natural latex  
                        </label>
                      </div>
                      <div class="form-check text-left">
                        <input class="form-check-input" type="checkbox" value="Memory Foam">
                        <label class="form-check-label">
                        memory foam
                        </label>
                      </div>
                      <div class="form-check text-left">
                        <input class="form-check-input" type="checkbox" value="Rebonded Foam">
                        <label class="form-check-label">
                        rebonded foam
                        </label>
                      </div>
                      <div class="form-check text-left">
                        <input class="form-check-input" type="checkbox" value="Pocket Spring">
                        <label class="form-check-label">
                        pocket spring
                        </label>
                      </div>
                      <div class="form-check text-left">
                        <input class="form-check-input" type="checkbox" value="Bonnell Spring">
                        <label class="form-check-label">
                        bonnell spring
                        </label>
                      </div>
                      <div class="form-check text-left">
                        <input class="form-check-input" type="checkbox" value="Rubberised Coir">
                        <label class="form-check-label">
                        rubberised coir
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Apply Filters</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
    <script src="js/selectUser.js"></script>
    <script src="js/productbamboo.js"></script>
    <script src="js/filter.js"></script>
    <script src="js/selection.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js'></script>
    <script>


///slider section start
$(()=> {
  
  var slider = document.getElementById('range');

noUiSlider.create(slider, {
    start: [5000, 15000],
    connect: true,
    range: {
        'min': 3000,
        'max': 25000
    },
    step: 1000,
    format: wNumb({
      decimals: 0
  }),


});
  // Set visual min and max values and also update value hidden form inputs
  slider.noUiSlider.on('update', function(values, handle) {
    document.getElementById('slider-range-value1').innerHTML = values[0];
    document.getElementById('slider-range-value2').innerHTML = values[1];
    return sortedLimit=values;
  });
});




///slider section end
      addTofilterMenu = (array, target) => {
        $(target).empty();
        array.sort((a, b) => a - b).forEach(item => {
          $(target).append(`
  <div class="form-check text-left">
    <input class="form-check-input" type="checkbox" value="${item}" >
    <label class="form-check-label">
      ${item}
    </label>
  </div>
  `);
        })
      }

     
      $("#exampleModal").one("show.bs.modal", () => {
        addTofilterMenu(selectLength, "#optionLength");
        addTofilterMenu(selectWidth, "#optionWidth");
        addTofilterMenu(selectThickness, "#optionThickness");
        // addTofilterMenu(selectType, "#optionType");
        $("#optionRight").children("div").hide();
        $("#optionLength").show();
      });
     
        
      
      $("#menuLeft").click(function (event) {
        $("#optionRight").children("div").hide();
        $(eval("option" + event.target.dataset.value)).show();
      });
      $("[data-dismiss='modal']").click(() => {
        resetResult();
        getSelection();
  
        arrFilters.length = [...new Set(getVal($("#optionLength input:checked").toArray()))];
        arrFilters.width = [...new Set(getVal($("#optionWidth input:checked").toArray()))];
        arrFilters.thickness = [...new Set(getVal($("#optionThickness input:checked").toArray()))];
        selectedLayers = [...new Set(getVal($("#optionType input:checked").toArray()))];
        const functionFilters = {
          price: price => price < sortedLimit[1] && price >= sortedLimit[0],
          layers: layers => {
            if (!selectedLayers.length) {
              return true;
            } else {
              for (let i = 0; i < layers.length; i++) {
                if (selectedLayers.includes(layers[i])) {
                  return true;
                }
              }
            }
          }
        };
        filteredImages = filterSequence(Products, arrFilters, functionFilters);
        genHtml(filteredImages.sort((a, b) => a.price - b.price));
        $(".sortingFilters").show();
      });
      $("#sortPrice").click(() => {
        if ($("#sortPrice").hasClass("fa-sort-amount-up-alt")) {
          //sort low to high
          resetResult();
          genHtml(filteredImages.sort((a, b) => b.price - a.price));
          $("#sortPrice").removeClass("fa-sort-amount-up-alt").addClass("fa-sort-amount-up");
          $(".sortingFilters").show();
        } else {
          //sort high to low
          resetResult();
          genHtml(filteredImages.sort((a, b) => a.price - b.price));
          $("#sortPrice").removeClass("fa-sort-amount-up").addClass("fa-sort-amount-up-alt");
          $(".sortingFilters").show();
        }
      })
    </script>
  </div>
</body>

</html>