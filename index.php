<div id="warning-message">
  <div class="text-center">
    <img class="img-fluid" src="img/Banner.jpg" alt="" />
    <h5 class="d-lg-none d-block hstylecursive text-center">Please Rotate your phone to</h5>
    <p class="hstylecapital">Landscape Mode!</p>
  </div>
</div>
<form action="send.php" method="post" name="surveyForm">
  <div id="wrapper" class="siema">
    <div>
      <div class="innersiema">
        <section class="box-shadow">
          <div class="tablet-container">
            <div class="text-center">
              <img class="img-fluid w-50 p-3" src="img/size-mattress.png" alt="" />
            </div>
            <div class="row text-center">
              <div class="col">
                <img class="img-fluid" src="img/single.png" alt="" />
              </div>
              <div class="col">
                <img class="img-fluid" src="img/double.png" alt="" />
              </div>
              <div class="col">
                <img class="img-fluid" src="img/queen.png" alt="" />
              </div>
              <div class="col">
                <img class="img-fluid" src="img/king.png" alt="" />
              </div>
            </div>
            <div class="row">
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeSingle" name="size" type="checkbox" value="single" />
                <span class="checkbox-custom rectangular">Single</span>
              </label>
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeDouble" name="size" type="checkbox" value="double" />
                <span class="checkbox-custom rectangular">Double</span>
              </label>
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeQueen" name="size" type="checkbox" value="queen" />
                <span class="checkbox-custom rectangular">Queen</span>
              </label>
              <label class="checkbox-inline p-4 col checkbox-label checkSize">
                <input class="sizeKing" name="size" type="checkbox" value="king" />
                <span class="checkbox-custom rectangular">King</span>
              </label>
            </div>
          </div>
        </section>
        <section class="box-shadow noOfSleepersBg">
          <div id="filters">
            <div>
              <div class="text-center">
                <img class="img-fluid w-50 p-3" src="img/sleepers-heading.png" alt="" />
              </div>
              <div class="row text-center">
                <div class="col">
                  <img class="img-fluid" src="img/sleeper-1.png" alt="" />
                </div>
                <div class="col">
                  <img class="img-fluid" src="img/sleeper-2.png" alt="" />
                </div>
                <div class="col">
                  <img class="img-fluid" src="img/sleeper-3.png" alt="" />
                </div>
                <div class="col">
                  <img class="img-fluid" src="img/sleeper-4.png" alt="" />
                </div>
              </div>
              <div class="row">
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper1" name="sleepers" type="checkbox" value="1" />
                  <span class="checkbox-custom rectangular">1</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper2" name="sleepers" type="checkbox" value="2" />
                  <span class="checkbox-custom rectangular">2</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper3" name="sleepers" type="checkbox" value="3" />
                  <span class="checkbox-custom rectangular">3</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkSleepers">
                  <input class="noOfSleeper4" name="sleepers" type="checkbox" value="4" />
                  <span class="checkbox-custom rectangular">4</span>
                </label>
              </div>
            </div>
          </div>
        </section>
        <section class="box-shadow-padding box-shadow">
          <div class="text-center">
            <img class="img-fluid w-50" src="img/sleeping-position.png" alt="" />
          </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/back-position.png" alt="" />
                  </td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/side-position.png" alt="" />
                  </td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 pl-md-0" src="img/stomach-position.png" alt="" />
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <label class="checkPositionS1">
                      <input name="position1" type="checkbox" value="Back" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS1">
                      <input name="position1" type="checkbox" value="Side" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS1">
                      <input name="position1" type="checkbox" value="Stomach" />
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <label class="checkPositionS2">
                      <input name="position2" type="checkbox" value="Back" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS2">
                      <input name="position2" type="checkbox" value="Side" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS2">
                      <input name="position2" type="checkbox" value="Stomach" />
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <label class="checkPositionS3">
                      <input name="position3" type="checkbox" value="Back" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS3">
                      <input name="position3" type="checkbox" value="Side" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS3">
                      <input name="position3" type="checkbox" value="Stomach" />
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <label class="checkPositionS4">
                      <input name="position4" type="checkbox" value="Back" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS4">
                      <input name="position4" type="checkbox" value="Side" />
                    </label>
                  </td>
                  <td>
                    <label class="checkPositionS4">
                      <input name="position4" type="checkbox" value="Stomach" />
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section class="box-shadow-padding box-shadow backPainBg">
          <div class="text-center">
            <img class="img-fluid w-50" src="img/bad-back-pain.png" alt="" />
          </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 p-2" src="img/rarely.png" alt="" />
                  </td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 p-2" src="img/sometimes.png" alt="" />
                  </td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 p-2" src="img/often.png" alt="" />
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <label class="checkBackPainS1">
                      <input name="backpain1" type="checkbox" value="Rarely" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS1">
                      <input name="backpain1" type="checkbox" value="Sometimes" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS1">
                      <input name="backpain1" type="checkbox" value="Often" />
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <label class="checkBackPainS2">
                      <input name="backpain2" type="checkbox" value="Rarely" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS2">
                      <input name="backpain2" type="checkbox" value="Sometimes" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS2">
                      <input name="backpain2" type="checkbox" value="Often" />
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <label class="checkBackPainS3">
                      <input name="backpain3" type="checkbox" value="Rarely" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS3">
                      <input name="backpain3" type="checkbox" value="Sometimes" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS3">
                      <input name="backpain3" type="checkbox" value="Often" />
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <label class="checkBackPainS4">
                      <input name="backpain4" type="checkbox" value="Rarely" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS4">
                      <input name="backpain4" type="checkbox" value="Sometimes" />
                    </label>
                  </td>
                  <td>
                    <label class="checkBackPainS4">
                      <input name="backpain4" type="checkbox" value="Often" />
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section id="filters" class="box-shadow-padding box-shadow">
          <div class="text-center">
            <img class="img-fluid w-50" src="img/mattress-feel.png" alt="" />
          </div>
          <div class="">
            <table class="table table-bordered text-center table-responsive">
              <thead>
                <tr>
                  <td class="align-middle">Sleeper</td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 p-1" src="img/soft-feel.png" alt="" />
                  </td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 p-1" src="img/medium-feel.png" alt="" />
                  </td>
                  <td>
                    <img class="img img-fluid img-fluid-table w-100 p-1" src="img/firm-feel.png" alt="" />
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr class="filter-attributes">
                  <td>1</td>
                  <td>
                    <label class="checkFeelTypeS1">
                      <input name="feel1" type="checkbox" value="SOFT" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS1">
                      <input name="feel1" type="checkbox" value="MEDIUM" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS1">
                      <input name="feel1" type="checkbox" value="FIRM" />
                    </label>
                  </td>
                </tr>
                <tr class="filter-attributes">
                  <td>2</td>
                  <td>
                    <label class="checkFeelTypeS2">
                      <input name="feel2" type="checkbox" value="SOFT" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS2">
                      <input name="feel2" type="checkbox" value="MEDIUM" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS2">
                      <input name="feel2" type="checkbox" value="FIRM" />
                    </label>
                  </td>
                </tr>
                <tr class="filter-attributes">
                  <td>3</td>
                  <td>
                    <label class="checkFeelTypeS3">
                      <input name="feel3" type="checkbox" value="SOFT" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS3">
                      <input name="feel3" type="checkbox" value="MEDIUM" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS3">
                      <input name="feel3" type="checkbox" value="FIRM" />
                    </label>
                  </td>
                </tr>
                <tr class="filter-attributes">
                  <td>4</td>
                  <td>
                    <label class="checkFeelTypeS4">
                      <input name="feel4" type="checkbox" value="SOFT" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS4">
                      <input name="feel4" type="checkbox" value="MEDIUM" />
                    </label>
                  </td>
                  <td>
                    <label class="checkFeelTypeS4">
                      <input name="feel4" type="checkbox" value="FIRM" />
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section class="box-shadow"
          style="background-image: url('img/special-offer-background.png'); height: 224px; background-repeat: no-repeat; background-size: 100% 224px;">
          <div>
            <div>
              <div class="row filter-attributes" style="position: relative; top: 100px;">
                <label class="checkbox-inline p-4 col checkbox-label checkOffers">
                  <input name="offer" type="checkbox" value="30" />
                  <span class="checkbox-custom rectangular">30% Off</span>
                </label>
                <label class="checkbox-inline p-4 col checkbox-label checkOffers">
                  <input name="offer" type="checkbox" value="40" />
                  <span class="checkbox-custom rectangular">40% Off</span>
                </label>
              </div>
            </div>
          </div>
        </section>
        <section class="box-shadow">
          <div class="text-center">
            <img class="img-fluid w-50 p-3" src="img/budget-heading.png" alt="" />
          </div>
          <div class="row text-center">
            <div class="col">
              <img class="img-fluid" src="img/budget-Rs-10000.png" alt="" />
            </div>
            <div class="col">
              <img class="img-fluid" src="img/budget-Rs.11-20000.png" alt="" />
            </div>
            <div class="col">
              <img class="img-fluid" src="img/budget-Rs.21-35000.png" alt="" />
            </div>
            <div class="col">
              <img class="img-fluid" src="img/budget-Rs.35000-plus.png" alt="" />
            </div>
          </div>
          <div class="row filter-attributes">
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input name="budget" type="checkbox" value="Less than 10,000" />
              <span class="checkbox-custom rectangular">Less than 10,000</span>
            </label>
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input name="budget" type="checkbox" value="11,000-20,000" />
              <span class="checkbox-custom rectangular">11,000-20,000</span>
            </label>
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input name="budget" type="checkbox" value="21,000-35,000" />
              <span class="checkbox-custom rectangular">21,000-35,000</span>
            </label>
            <label class="col pl-5 pl-md-0 pt-5 checkbox-label checkBudget">
              <input name="budget" type="checkbox" value="Above 35,000" />
              <span class="checkbox-custom rectangular">Above 35,000</span>
            </label>
          </div>
        </section>
        <section class="text-center box-shadow"
          style="background-image: url('img/have-mattress-background.png'); height: 100%; background-repeat: no-repeat; background-size: 100% 100%;">
          <div class="text-center">
            <img class="img-fluid w-50 p-3" src="img/have-mattress-heading.png" alt="" />
          </div>
          <label>
            <input id="cbshow" type="checkbox" />
          </label>
          <div id="divshow" class=" text-center" style="display: none;">
            <h5 class="center p-2" style="color: #135498;">Your current Mattress Details</h5>
            <div class="row m-0">
              <input class="col m-1 previousMattressTextBox" name="brand-name" type="text"
                placeholder="Enter Brand Name" />
              <input class="col m-1 previousMattressTextBox" name="model-name" type="text"
                placeholder="Enter Model Name" />
              <input class="col m-1 previousMattressTextBox" name="year-of-use" type="text"
                placeholder="Enter Year Of Use" />
            </div>
            <div class="row mt-3" style="text-align: center; font-weight: bold;">
              <div class="col p-1">Soft</div>
              <div class="col p-1">Medium</div>
              <div class="col p-1">Firm</div>
            </div>
            <div class="row">
              <div class="radio-group">
                <input id="feel1" name="customerFeel" type="radio" value="1" />
                <label for="feel1">1</label>
                <input id="feel2" name="customerFeel" type="radio" value="2" />
                <label for="feel2">2</label>
                <input id="feel3" name="customerFeel" type="radio" value="3" />
                <label for="feel3">3</label>
                <input id="feel4" name="customerFeel" type="radio" value="4" />
                <label for="feel4">4</label>
                <input id="feel5" name="customerFeel" type="radio" value="5" />
                <label for="feel5">5</label>
                <input id="feel6" name="customerFeel" type="radio" value="6" />
                <label for="feel6">6</label>
                <input id="feel7" name="customerFeel" type="radio" value="7" />
                <label for="feel7">7</label>
                <input id="feel8" name="customerFeel" type="radio" value="8" />
                <label for="feel8">8</label>
                <input id="feel9" name="customerFeel" type="radio" value="9" />
                <label for="feel9">9</label>
                <input id="feel10" name="customerFeel" type="radio" value="10" />
                <label for="feel10">10</label>
              </div>
            </div>
            <div class="row mt-3" style="text-align: center; font-weight: bold;">
              <div class="col p-1">Rarely</div>
              <div class="col p-1">Sometimes</div>
              <div class="col p-1">Often</div>
            </div>
            <div class="row">
              <div class="radio-group">
                <input id="relief1" name="customerRelief" type="radio" value="1" />
                <label for="relief1">1</label>
                <input id="relief2" name="customerRelief" type="radio" value="2" />
                <label for="relief2">2</label>
                <input id="relief3" name="customerRelief" type="radio" value="3" />
                <label for="relief3">3</label>
                <input id="relief4" name="customerRelief" type="radio" value="4" />
                <label for="relief4">4</label>
                <input id="relief5" name="customerRelief" type="radio" value="5" />
                <label for="relief5">5</label>
                <input id="relief6" name="customerRelief" type="radio" value="6" />
                <label for="relief6">6</label>
                <input id="relief7" name="customerRelief" type="radio" value="7" />
                <label for="relief7">7</label>
                <input id="relief8" name="customerRelief" type="radio" value="8" />
                <label for="relief8">8</label>
                <input id="relief9" name="customerRelief" type="radio" value="9" />
                <label for="relief9">9</label>
                <input id="relief10" name="customerRelief" type="radio" value="10" />
                <label for="relief10">10</label>
              </div>
            </div>
          </div>
        </section>
        <section class="box-shadow ml-1 mr-1 personalDetailsBg">
          <div class="text-center">
            <img class="img-fluid w-50 p-3" src="img/personal-details-white-color-heading.png" alt="" />
          </div>
          <div class="row m-2">
            <input class="col m-3" style="height: 50px;" name="name" required="" type="text"
              placeholder="Enter your Name" />
            <input class="col m-3" style="height: 50px;" name="phone" required="" type="tel"
              placeholder="Enter your Contact No." />
          </div>
          <div class="row m-2">
            <input class="col m-3" style="height: 50px;" name="email" required="" type="email"
              placeholder="Enter your Email Id" />
            <input class="col m-3" style="height: 50px;" name="address" required="" type="address"
              placeholder="Enter your Address" />
          </div>
        </section>
        <section class="text-center"
          style="background-image: url('img/show-perfect-mattress-CTA-background.png'); background-repeat: no-repeat; background-size: 100% 100px; height: 100px;">
          <div class="">
            <span style="font-size: 55px;">
              <input id="showResult" class="btn btn-danger" type="button" value="Show My Perfect Mattress"
                data-toggle="modal" data-target="#allResult" />
              <input id="none" class="btn btn-danger text-center" type="reset" value="Reset" />
              <button class="btn btn-success" type="submit">Email My Perfect Mattress</button>
            </span>
            <div class="text-center">
              <img class="img-fluid w-50 m-5 p-3" src="img/mattress-matching-needs-heading.png" alt="" />
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</form>
<div id="allResult" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal"> &times; </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <button class="btn btn-primary prev">prev</button>
          <button class="btn btn-primary next">next</button>
          <button class="btn btn-danger">
            <em id="sortPrice" class="fas fa-sort-amount-up-alt">
            </em>
          </button>
          <button class="btn btn-danger " style="height: 38px;" data-toggle="modal" data-target="#exampleModal">
            <label class="text-light p-0" for="">
              <em id="filterMenuBtn" class="fas fa-filter text-light" style="max-height: 16px;">filters</em>
            </label>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="exampleModal" class="modal fade" style="height: 100vh !important; width: 100vw !important;" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="exampleModalLabel" class="modal-title">All Filters</h5>
        <button class="close" type="button" data-dismiss="modal"> &times; </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div id="menuLeft" class="col-6">
              <button class="btn btn-block btn-info" data-value="Length">Length</button>
              <button class="btn btn-block btn-info" data-value="Width">Width</button>
              <button class="btn btn-block btn-info" data-value="Thickness">Thickness</button>
              <button class="btn btn-block btn-info" data-value="Type">Type</button>
            </div>
            <div class="col-6">
              <div id="optionRight">
                <div id="optionType">
                  <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" value="Natural Latex" />
                    <label class="form-check-label"> natural latex </label>
                  </div>
                  <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" value="Memory Foam" />
                    <label class="form-check-label"> memory foam </label>
                  </div>
                  <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" value="Rebonded Foam" />
                    <label class="form-check-label"> rebonded foam </label>
                  </div>
                  <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" value="Pocket Spring" />
                    <label class="form-check-label"> pocket spring </label>
                  </div>
                  <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" value="Bonnell Spring" />
                    <label class="form-check-label"> bonnell spring </label>
                  </div>
                  <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" value="Rubberised Coir" />
                    <label class="form-check-label"> rubberised coir </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Apply Filters</button>
        <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>