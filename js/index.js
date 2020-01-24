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

      $("#exampleModal").on("show.bs.modal", () => {
        addTofilterMenu(selectLength, "#optionLength");
        addTofilterMenu(selectWidth, "#optionWidth");
        addTofilterMenu(selectThickness, "#optionThickness");
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