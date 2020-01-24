<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css' />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/dr-back-favicon.png" />
  <title>Find your perfect mattress</title>
  <style type="text/css">
    body {
      width: 100%;
      max-width: 100rem;
      margin: 0 auto;
    }

    img {
      width: 100%;
    }

    .siema {
      margin: 1rem 0;
    }
  </style>

  <style type="text/css">
    .hstylecursive{
      font-family: 'Great Vibes', cursive;
      color: #13539a;
      font-size: 50px;
      font-weight: bold;
    }
    .hstylecapital{
      font-family: sans-serif;
      color: #13539a;
      font-size: 50px;
      font-weight: bold;
    }
    .checkbox-custom:hover {
      background-color: #cf1b24;
      color: white;
    }

    .checkbox-custom {
      background-color: white;
      color: black;
      border: 2px solid #e7e7e7;
    }
    .noOfSleepersBg{
	    background-image: url(img/sleepers-background.png);
    }
    .backPainBg{
	    background-image: url(img/back-pain-background.png);
    }
    .personalDetailsBg{
	    background-image: url(img/personal-details-background.png);
    }
    td {
    color: #13539a;
    font-weight: 500;
    font-variant: all-petite-caps;
    font-size: 20px;
	}
	td.align-middle {
    font-size: 25px;
	}
  </style>
</head>

<body>
  <div class="siema">
    <div>
      <div class="innersiema">
        <!-- <section class="row box-shadow  ml-1 mr-1">
          <div class="col-lg-5 col-md-7 p-lg-5 text-left d-flex flex-column text-center">
            <h3>Personal Info.</h3><br>
            <div class="d-flex justify-content-between p-2">
              <input class="input-res" placeholder="Enter Name" type="text" name="name" required>
            </div>
            <div class="d-flex justify-content-between p-2">
              <input class="input-res" placeholder="Enter Phone" type="tel" name="phone" required>
            </div>
            <div class="d-flex justify-content-between p-2">
              <input class="input-res" placeholder="Enter Email" type="email" name="email" required>
            </div>
            <div class="d-flex justify-content-between p-2">
              <input class="input-res" placeholder="Enter Address" type="address" name="address" required>
            </div>
          </div>
          <div class="col p-5 text-right tablet-date d-none d-lg-block">
            <h3>Date : <span id="currentDate"></span></h3>
          </div>
        </section> -->
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
        <section class="box-shadow">
          <div class="tablet-container">
            <!-- <h5 class="d-lg-none d-block hstylecursive text-center">Select Size of <p class="hstylecapital">MATTRESS</p></h5>
            <h3 class="d-lg-block d-none hstylecursive text-center">Select Size of <p class="hstylecapital">MATTRESS</p></h3> -->
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
              <!-- <h5 class="d-lg-none d-block text-center">How many Sleepers ? <br>(Please Select)</h5>
              <h3 class="d-lg-block d-none text-center">How many Sleepers ? <br>(Please Select)</h3> -->
              <!-- <h5 class="d-lg-none d-block hstylecursive text-center">Select No. of <p class="hstylecapital">SLEEPERS</p></h5>
              <h3 class="d-lg-block d-none hstylecursive text-center">Select No. of <p class="hstylecapital">SLEEPERS</p></h3> -->
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
          <!-- <h3 class="d-lg-block d-none text-center  m-sm-2 m-xs-1">What is your primary sleeping
            position
            ? <br>(Please &#9989;)</h3>
          <h6 class="d-lg-none d-block text-center  m-sm-2 m-xs-1">What is your primary sleeping
            position
            ? <br>(Please &#9989;)</h6> -->
            <div class="text-center">
            	<img class="img-fluid w-50" src="img/sleeping-position.png">
            </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td><img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/back-position.png">
                    <!-- <figcaption>Back</figcaption> -->
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/side-position.png">
                    <!-- <figcaption>Side</figcaption> -->
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/stomach-position.png">
                    <!-- <figcaption>Stomach</figcaption> -->
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
          <!-- <h3 class="d-lg-block d-none text-center  m-sm-2 m-xs-1">Do you ever wake up with bad back
            pain
            ? <br>(Please &#9989;)</h3>
          <h6 class="d-lg-none d-block text-center  m-sm-2 m-xs-1">Do you ever wake up with bad back
            pain
            ? <br>(Please &#9989;)</h6> -->
            <div class="text-center">
            	<img class="img-fluid w-50" src="img/bad-back-pain.png">
            </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-2" src="img/rarely.png">
                    <!-- <figcaption>Rarely</figcaption> -->
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-2" src="img/sometimes.png">
                    <!-- <figcaption>Sometimes</figcaption> -->
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-2" src="img/often.png">
                    <!-- <figcaption>Often</figcaption> -->
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
          <!-- <h3 class="d-lg-block d-none text-center  m-sm-2 m-xs-1">What type of mattress feel do you
            prefer? <br>(Please &#9989;)</h3>
          <h6 class="d-lg-none d-block text-center  m-sm-2 m-xs-1">What type of mattress feel do you
            prefer? <br>(Please &#9989;)</h6> -->
            <div class="text-center">
            	<img class="img-fluid w-50" src="img/mattress-feel.png">
            </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-1" src="img/soft-feel.png">
                    <!-- <figcaption>Soft <br class="brOnlyForResponsiveness"> Feel</figcaption> -->
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-1" src="img/medium-feel.png">
                    <!-- <figcaption>Medium <br class="brOnlyForResponsiveness"> Feel</figcaption> -->
                  </td>
                  <td><img class="img img-fluid img-fluid-table w-100 p-1" src="img/firm-feel.png">
                    <!-- <figcaption>Firm <br class="brOnlyForResponsiveness"> Feel</figcaption> -->
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
              <!-- <h5 class="d-lg-none d-block text-center">Select Offers <br>(Please Select)</h5>
              <h3 class="d-lg-block d-none text-center">Select Offers <br>(Please Select)</h3> -->
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
          <h3 class="text-center">What is your budget ? <br>(Please Select)</h3>
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
        <section class="text-center">
          <div class="row pt-5">
            <h3 class="mx-auto"> Did you had a Mattress before? (Please &#9989;)</h3>
          </div>
          <label><input type="checkbox" id="cbshow"></label>
        </section>
        <section id="divshow" class=" text-center box-shadow" style="display: none;">
          <h5 class="center">Your current Mattress Details</h5>
          <div class="block">
            <input type="text" name="brand-name" class="input-res" placeholder="Enter Brand Name">
          </div>
          <div class="block">
            <input type="text" name="model-name" class="input-res" placeholder="Enter Model Name">
          </div>
          <div class="block">
            <input type="text" name="year-of-use" class="input-res" placeholder="Enter Year Of Use">
          </div>
          <!-- new -->
          <div class="row mt-3" style="text-align: center; font-weight: bold;">
            <div class="col p-1">Soft</div>
            <div class="col p-1">Medium</div>
            <div class="col p-1">Firm</div>
          </div>
          <div class="row" style="height: 10px;">
            <div class="col" style="background-color: #bcbdc0;"></div>
            <div class="col" style="background-color: #6c6d70;"></div>
            <div class="col" style="background-color: #231f20;"></div>
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
            <div class="col" style="background-color: #bcbdc0;"></div>
            <div class="col" style="background-color: #6c6d70;"></div>
            <div class="col" style="background-color: #231f20;"></div>
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
        <div>
          
            <!-- starts -->
            <section class="text-center">
              <div class="">
                <h3 class="">Your Perfect Mattress</h3>
                <span>
                  <input type="button" id="showResult" class="btn btn-danger" value="Show My Perfect Mattress">
                  <input class="btn btn-danger text-center" type='reset' id='none' value='Reset'></input>
                  <!-- <input type="button" id="hideResult" class="btn btn-info" value="Hide My Perfect Mattress"> -->
                  <input type="submit" value="Email My Perfect Mattress" class="btn btn-success">
                  <div id="outputNo"></div>
                </span>
              </div>
              <div>
                <div class='sections' id="productList">
                  <div class="sortingFilters">
                    <div class="fixed-bottom text-center mb-3">
                      <button class="btn btn-danger">
                        <i class="fas fa-sort-amount-up-alt" id="sortPrice"></i>
                      </button>
                      <button class="btn btn-danger " data-toggle="modal" data-target="#exampleModal"
                        style="height:38px;">
                        <label for="" class="text-light p-0"><i class="fas fa-filter text-light" id="filterMenuBtn"
                            style="max-height:16px;"></i>filters</label>
                      </button>
                    </div>
                  </div>
                  <div class="deepshit">
                  <!-- <div class="slider">
                  </div> -->
                </div>
                <button class="prev">prev</button>
                <button class="next">next</button>
              </div>
            </section>
            <!-- ends -->
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
  <script src="js/selectUser.js"></script>
  <script src="js/productlayer.js"></script>
  <script src="js/filter.js"></script>
  <script src="js/selection.js"></script>
  <script src="js/index.js"></script>
  <script src="https://pawelgrzybek.com/siema/assets/siema.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    // outer
    const mySiema = new Siema();
    // inner
    const myInnerSiema = new Siema({
      selector: '.innersiema',
      perPage: 1
    });
    document.querySelector('.prev').addEventListener('click', () => deepShit.prev(3));
    document.querySelector('.next').addEventListener('click', () => deepShit.next(3));

    // Add a function that generates pagination to prototype
    Siema.prototype.addPagination = function () {
      var _this = this;

      var _loop = function _loop(i) {
        var pagination = document.createElement('i');
        pagination.classList.add("far");
        pagination.classList.add("fa-circle");
        pagination.classList.add("text-primary");
      pagination.addEventListener('click', function () {
        // this.classList.toggle("fas");
        // this.classList.toggle("far");
          return _this.goTo(i);
        });
        _this.selector.appendChild(pagination);
      };

      for (var i = 0; i < this.innerElements.length; i++) {
        _loop(i);
      }
    };

    // Trigger pagination creator
    myInnerSiema.addPagination();
    
  </script>
</body>

</html>