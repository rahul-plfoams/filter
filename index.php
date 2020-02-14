<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css' />
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/dr-back-favicon.png" />
  <title>Find your perfect mattress</title>
</head>

<body>
	<div id="warning-message">
    <div class="text-center">
		<img class="img-fluid" src="img/Banner.jpg">
		<h5 class="text-center p-2" style="background-color: #13539a; color: white; font-size: 6vw;">Please Rotate your phone to Landscape Mode!</h5>
	</div>
</div>
<form action="send.php" method="post" name="surveyForm">
  <div id="wrapper" class="siema" >
    <div>
      <div class="innersiema">
        
        <section class="box-shadow">
          <div class="tablet-container">
            <div class="text-center">
            	<img class="img-fluid w-50 p-3" src="img/size-mattress.png">
            </div>
            <div class="row text-center">
              <div class="col">
                <img class="img-fluid" src="img/single.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/double.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/queen.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/king.png">
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
        <section class="box-shadow noOfSleepersBg">
          <div id='filters'>
            <div>
              <div class="text-center">
            	<img class="img-fluid w-50 p-3" src="img/sleepers-heading.png">
            </div>
              <div class="row text-center">
              <div class="col">
                <img class="img-fluid" src="img/sleeper-1.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/sleeper-2.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/sleeper-3.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/sleeper-4.png">
              </div>
            </div>
              <div class="row">
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper1" type='checkbox' name='sleepers' value='1'></input>
                  <span class="checkbox-custom rectangular">1</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper2" type='checkbox' name='sleepers' value='2'></input>
                  <span class="checkbox-custom rectangular">2</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper3" type='checkbox' name='sleepers' value='3'></input>
                  <span class="checkbox-custom rectangular">3</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper4" type='checkbox' name='sleepers' value='4'></input>
                  <span class="checkbox-custom rectangular">4</span>
                </label>
              </div>
            </div>
          </div>
        </section>
        <section class="box-shadow-padding  box-shadow">
            <div class="text-center">
            	<img class="img-fluid w-50" src="img/sleeping-position.png">
            </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td><img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/back-position.png">
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/side-position.png">
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/stomach-position.png">
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
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
                <tr>
                  <td>2</td>
                  <td>
                    <label class="checkPositionS2">
                      <input type="checkbox" value="Back" name="position2">
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS2">
                      <input type="checkbox" value="Side" name="position2">
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS2">
                      <input type="checkbox" value="Stomach" name="position2">
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <label class="checkPositionS3">
                      <input type="checkbox" value="Back" name="position3">
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS3">
                      <input type="checkbox" value="Side" name="position3">
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS3">
                      <input type="checkbox" value="Stomach" name="position3">
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <label class="checkPositionS4">
                      <input type="checkbox" value="Back" name="position4">
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS4">
                      <input type="checkbox" value="Side" name="position4">
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS4">
                      <input type="checkbox" value="Stomach" name="position4">
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section class="box-shadow-padding box-shadow backPainBg">
            <div class="text-center">
            	<img class="img-fluid w-50" src="img/bad-back-pain.png">
            </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-2" src="img/rarely.png">
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-2" src="img/sometimes.png">
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-2" src="img/often.png">
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
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
                <tr>
                  <td>2</td>
                  <td>
                    <label class="checkBackPainS2">
                      <input type="checkbox" value="Rarely" name="backpain2">
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS2">
                      <input type="checkbox" value="Sometimes" name="backpain2">
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS2">
                      <input type="checkbox" value="Often" name="backpain2">
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <label class="checkBackPainS3">
                      <input type="checkbox" value="Rarely" name="backpain3">
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS3">
                      <input type="checkbox" value="Sometimes" name="backpain3">
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS3">
                      <input type="checkbox" value="Often" name="backpain3">
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <label class="checkBackPainS4">
                      <input type="checkbox" value="Rarely" name="backpain4">
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS4">
                      <input type="checkbox" value="Sometimes" name="backpain4">
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS4">
                      <input type="checkbox" value="Often" name="backpain4">
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section id="filters" class="box-shadow-padding  box-shadow">
            <div class="text-center">
            	<img class="img-fluid w-50" src="img/mattress-feel.png">
            </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-1" src="img/soft-feel.png">
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-1" src="img/medium-feel.png">
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-1" src="img/firm-feel.png">
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr class="filter-attributes">
                  <td>1</td>
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
                <tr class="filter-attributes">
                  <td>2</td>
                  <td>
                    <label class="checkFeelTypeS2">
                      <input type="checkbox" value="SOFT" name="feel2">
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS2">
                      <input type="checkbox" value="MEDIUM" name="feel2">
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS2">
                      <input type="checkbox" value="FIRM" name="feel2">
                    </label>
                  </td>
                </tr>
                <tr class="filter-attributes">
                  <td>3</td>
                  <td>
                    <label class="checkFeelTypeS3">
                      <input type="checkbox" value="SOFT" name="feel3">
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS3">
                      <input type="checkbox" value="MEDIUM" name="feel3">
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS3">
                      <input type="checkbox" value="FIRM" name="feel3">
                    </label>
                  </td>
                </tr>
                <tr class="filter-attributes">
                  <td>4</td>
                  <td>
                    <label class="checkFeelTypeS4">
                      <input type="checkbox" value="SOFT" name="feel4">
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS4">
                      <input type="checkbox" value="MEDIUM" name="feel4">
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS4">
                      <input type="checkbox" value="FIRM" name="feel4">
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section class="box-shadow" style="background-image: url(img/special-offer-background.png); height: 224px; background-repeat: no-repeat; background-size: 100% 224px;">
          <div>
            <div>
              <div class="row filter-attributes" style="position: relative; top: 100px;">
                <label class="checkbox-inline p-4 col checkbox-label checkOffers">
                  <input type='checkbox' name="offer" value='30'></input>
                  <span class="checkbox-custom rectangular">30% Off</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkOffers">
                  <input type='checkbox' name="offer" value='40'></input>
                  <span class="checkbox-custom rectangular">40% Off</span>
                </label>
              </div>
            </div>
          </div>
        </section>
        <section class="box-shadow">
          <div class="text-center">
            	<img class="img-fluid w-50 p-3" src="img/budget-heading.png">
            </div>
            <div class="row text-center">
              <div class="col">
                <img class="img-fluid" src="img/budget-Rs-10000.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/budget-Rs.11-20000.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/budget-Rs.21-35000.png">
              </div>
              <div class="col">
                <img class="img-fluid" src="img/budget-Rs.35000-plus.png">
              </div>
            </div>
          <div class="row filter-attributes">
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input type='checkbox' name='budget' value='Less than 10,000'></input>
              <span class="checkbox-custom rectangular">Less than 10,000</span>
            </label>
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input type='checkbox' name='budget' value='11,000-20,000'></input>
              <span class="checkbox-custom rectangular">11,000-20,000</span>
            </label>
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input type='checkbox' name='budget' value='21,000-35,000'></input>
              <span class="checkbox-custom rectangular">21,000-35,000</span>
            </label>
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input type='checkbox' name='budget' value='Above 35,000'></input>
              <span class="checkbox-custom rectangular">Above 35,000</span>
            </label>
          </div>
        </section>
        <section class="text-center box-shadow" style="background-image: url(img/have-mattress-background.png); height: 100%; background-repeat: no-repeat; background-size: 100% 100%;">
          <div class="text-center">
            	<img class="img-fluid w-50 p-3" src="img/have-mattress-heading.png">
            </div>
          <label><input type="checkbox" id="cbshow"></label>
          <section id="divshow" class=" text-center" style="display: none;">
          <h5 class="center p-2" style="color: #135498;">Your current Mattress Details</h5>
          <div class="row m-0">
            	<input type="text" name="brand-name" class="col m-1 previousMattressTextBox" placeholder="Enter Brand Name">
            	<input type="text" name="model-name" class="col m-1 previousMattressTextBox" placeholder="Enter Model Name">
            	<input type="text" name="year-of-use" class="col m-1 previousMattressTextBox" placeholder="Enter Year Of Use">
            </div>
          <div class="row mt-3" style="text-align: center; font-weight: bold;">
            <div class="col p-1">Soft</div>
            <div class="col p-1">Medium</div>
            <div class="col p-1">Firm</div>
          </div>
          <div class="row" style="height: 10px;">
            <div class="col" style="background-color: #ffd447;"></div>
            <div class="col" style="background-color: #fdaf1b;"></div>
            <div class="col" style="background-color: #c77c05;"></div>
          </div>
          <div class="row">
            <div class="radio-group">
              <input type="radio" id="feel1" value="1" name="customerFeel">
              <label for="feel1">1</label>
              <input type="radio" id="feel2" value="2" name="customerFeel">
              <label for="feel2">2</label>
              <input type="radio" id="feel3" value="3" name="customerFeel">
              <label for="feel3">3</label>
              <input type="radio" id="feel4" value="4" name="customerFeel">
              <label for="feel4">4</label>
              <input type="radio" id="feel5" value="5" name="customerFeel">
              <label for="feel5">5</label>
              <input type="radio" id="feel6" value="6" name="customerFeel">
              <label for="feel6">6</label>
              <input type="radio" id="feel7" value="7" name="customerFeel">
              <label for="feel7">7</label>
              <input type="radio" id="feel8" value="8" name="customerFeel">
              <label for="feel8">8</label>
              <input type="radio" id="feel9" value="9" name="customerFeel">
              <label for="feel9">9</label>
              <input type="radio" id="feel10" value="10" name="customerFeel">
              <label for="feel10">10</label>
            </div>
          </div>
          <!-- new -->
          <div class="row mt-3" style="text-align: center; font-weight: bold;">
            <div class="col p-1">Rarely</div>
            <div class="col p-1">Sometimes</div>
            <div class="col p-1">Often</div>
          </div>
          <div class="row" style="height: 10px;">
            <div class="col" style="background-color: #ffd447;"></div>
            <div class="col" style="background-color: #fdaf1b;"></div>
            <div class="col" style="background-color: #c77c05;"></div>
          </div>
          <div class="row">
            <div class="radio-group">
              <input type="radio" id="relief1" value="1" name="customerRelief">
              <label for="relief1">1</label>
              <input type="radio" id="relief2" value="2" name="customerRelief">
              <label for="relief2">2</label>
              <input type="radio" id="relief3" value="3" name="customerRelief">
              <label for="relief3">3</label>
              <input type="radio" id="relief4" value="4" name="customerRelief">
              <label for="relief4">4</label>
              <input type="radio" id="relief5" value="5" name="customerRelief">
              <label for="relief5">5</label>
              <input type="radio" id="relief6" value="6" name="customerRelief">
              <label for="relief6">6</label>
              <input type="radio" id="relief7" value="7" name="customerRelief">
              <label for="relief7">7</label>
              <input type="radio" id="relief8" value="8" name="customerRelief">
              <label for="relief8">8</label>
              <input type="radio" id="relief9" value="9" name="customerRelief">
              <label for="relief9">9</label>
              <input type="radio" id="relief10" value="10" name="customerRelief">
              <label for="relief10">10</label>
            </div>
          </div>
        </section>
        </section>

        <section class="box-shadow ml-1 mr-1 personalDetailsBg">
        
        	<div class="text-center">
            	<img class="img-fluid w-50 p-3" src="img/personal-details-white-color-heading.png">
            </div>
            <div class="row m-2">
            	<input style="height: 50px;" class="col m-3" placeholder="Enter your Name" type="text" name="name" required>
            	<input style="height: 50px;" class="col m-3" placeholder="Enter your Contact No." type="tel" name="phone" required>
            </div>
            <div class="row m-2">
            	<input style="height: 50px;" class="col m-3" placeholder="Enter your Email Id" type="email" name="email" required>
            	<input style="height: 50px;" class="col m-3" placeholder="Enter your Address" type="address" name="address" required>
            </div>
        </section>

            <section class="text-center" style="background-image: url(img/show-perfect-mattress-CTA-background.png); background-repeat: no-repeat; background-size: 100% 100px; height: 100px;">
              <div class="">
                <span class="" style="font-size: 55px;">
                  <input type="button" id="showResult" class="btn btn-danger" value="Show My Perfect Mattress">
                  <input class="btn btn-danger text-center" type='reset' id='none' value='Reset'></input>
                  <input type="submit" value="Email My Perfect Mattress" class="btn btn-success" onclick="document.surveyForm.submit()">
                  <div id="outputNo"></div>
                </span>
                
                <div class="text-center">
            	<img class="img-fluid w-50 m-2 p-2 resImg" src="img/mattress-matching-needs-heading.png">
            </div>
              </div>
              <div>
                <div class='sections' id="productList">
                  <div class="deepshit">
                </div>
                
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  </form>
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
                    <div id="optionType" style="">
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
  <script src="js/selectUser.js"></script>
  <script src="js/productlayer.js"></script>
  <script src="js/filter.js"></script>
  <script src="js/selection.js"></script>
  
  <script src="https://pawelgrzybek.com/siema/assets/siema.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="js/index.js"></script>
<style>
.innersiema section {
  width: 100%; /* full width */
  max-height: 100vh; /*height of carousel*/
  /* margin-right: 10px; */
}
.deepshit{
  width:80vw;
  margin:0 auto;
}
.deepshit div{
  width:100%;
  height:50rem;
}
</style>
<script>
 //new script
 new Flickity(".innersiema");

window.onorientationchange = function() { 
    var orientation = window.orientation; 
        switch(orientation) { 
            case 0:
            case 90:
            case -90: window.location.reload(); 
            break; } 
};
</script>
</body>

</html>