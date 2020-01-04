$(document).ready(() => {
  $(".sortingFilters").hide();
  date = new Date();
  const [currDate, currMonth, currYear] = [
    date.getDate() < 10 ? "0" + date.getDate() : date.getDate(),
    date.getMonth() < 10 ? "0" + (date.getMonth() + 1) : date.getMonth() + 1,
    date.getFullYear()
];
  $("#currentDate").text(`${currDate}/${currMonth}/${currYear}`);
  // const budgetsLimit = {
  //   "Less than 10,000": [0, 10000],
  //   "11,000-20,000": [10001, 20000],
  //   "21,000-35,000": [25001, 35000],
  //   "Above 35,000": [35001, 1000000],
  //   default: [0, 1000000]
  // };

  //reset function
  resetResult = () => {
    $(".sections#productList ul").empty();
    $(".sortingFilters").hide();
  };

  //funtion for single Selection in checkbox
  $("input:checkbox").click(event => {
    var box = $(event.target);
    if ($(box).is(":checked")) {
      var group = "input:checkbox[name='" + box.attr("name") + "']";
      $(group).prop("checked", false);
      $(box).prop("checked", true);
    } else {
      $(box).prop("checked", false);
    }
  });

  // show/hide previous mattress info
  $("#cbshow").click(function() {
    $("#divshow").toggle(this.checked);
  });

  // reset
  $("[type='reset']").click(() => {
    resetResult();
  });

  //show Result
  $("#showResult").click(() => {
    arrFilters = {};
    resetResult();
    // console.clear();
    $("#selectThickness,#selectLength,#selectWidth").empty();
    $(".sortingFilters").show();

    getSelection();

    const functionFilters = {
      price: price => price < sortedLimit[1] && price >= sortedLimit[0]
    };

    //all filters function
    filteredImages = filterSequence(Products, arrFilters, functionFilters);

    //select sorting
    selectThickness = [...new Set(filteredImages.map(item => item.thickness))];
    selectLength = [...new Set(filteredImages.map(item => item.length))];
    selectWidth = [...new Set(filteredImages.map(item => item.width))];
    layerTypes=[];
    filteredImages.filter(item=>item.hasOwnProperty("layers")).forEach(item=>item.layers.forEach(sub=>layerTypes.push(sub)));
    selectType=[...new Set(layerTypes.sort())];

    genHtml(filteredImages);
  });

  

  getSelection = () => {
    //getValues
    arrFilters.feel = [
      ...new Set(getVal($("input[name^='feel']:checked").toArray()))
    ];
    arrFilters.size = getVal($("input[name='size']:checked").toArray());
    arrFilters.offer = getVal($("input[name='offer']:checked").toArray());
    budgets = getVal($("input[name='budget']:checked").toArray());
    if (!budgets.length) {
      budgets = ["default"];
    }
    //sorting Limit
    // sortedLimit = budgetsLimit[budgets[0]];

    const functionFilters = {
      price: price => price < sortedLimit[1] && price >= sortedLimit[0]
    };
  };

  filterSequence = (data, array, fn) => {
    return filterArray(filterPlainArray(data, array), fn);
  };

  addValuetoDropdown = (array, id) => {
    $(id).empty();
    $(id).append("<option selected disabled>Default</option>");
    array.forEach(item => {
      $(id).append(`<option name="${item}">${item}</option>`);
    });
  };
  //generate Output
  genHtml = filteredImages => {
    html = "";
    addValuetoDropdown(selectThickness, "#selectThickness");
    addValuetoDropdown(selectLength, "#selectLength");
    addValuetoDropdown(selectWidth, "#selectWidth");
    html =
      filteredImages.length == 0
        ? "No Matches Found"
        : `${filteredImages.length} results Found<br>`;
        for (i = 0; i < filteredImages.length; i++) {
          html = html + `<li class="grid-products large-boxes m-2"><img src="${filteredImages[i].src}"
       class="grid-variants img-fluid">
        <table class="table table-bordered">
        <tr>
          <td class="border-dark w-50">Size</td>
          <td class="border-dark w-50">${filteredImages[i].length} &times ${filteredImages[i].width} </td>
        </tr>
        <tr>
          <td class="border-dark w-50">Thickness</td>
          <td class="border-dark w-50">${filteredImages[i].thickness}</td>
        </tr>
        <tr>
          <td class="border-dark w-50">Feel Level</td>
          <td class="border-dark w-50">${filteredImages[i].level}</td>
        </tr>
        <tr>
        <td class="border-dark w-50">Price</td>
        <td class="border-dark w-50">&#8377 ${thousands_separators(filteredImages[i].price)} 
        </td>
        </tr>
        <tr>
        <td class="border-dark" colspan="2"><a class="btn btn-danger btn-lg" href="
        ${filteredImages[i].url}?type=${filteredImages[i].size}&size=${filteredImages[i].length}x${filteredImages[i].width}&thickness=${filteredImages[i].thickness}">Buy Now</a>
        </td>
        </tr>
      </table>
      
       </li>`;
      }
    $(".sections#productList ul").append(html);
  };
  //get values from objects and store in array
  getVal = array => {
    resArray = [];
    array.forEach(element => $(element).val()==parseInt($(element).val())?resArray.push(parseInt($(element).val())):resArray.push($(element).val()));
    return resArray;
  };
  // ignores case-sensitive
  const getValue = value =>
    typeof value === "string" ? value.toUpperCase() : value;
  //filter using functions
  function filterArray(array, filters) {
    const filterKeys = Object.keys(filters);
    return array.filter(item => {
      // validates all filter criteria
      return filterKeys.every(key => {
        // ignores non-function predicates
        if (typeof filters[key] !== "function") return true;
        return filters[key](item[key]);
      });
    });
  }
  //filter array filters
  function filterPlainArray(array, filters) {
    const filterKeys = Object.keys(filters);
    return array.filter(item => {
      // validates all filter criteria
      return filterKeys.every(key => {
        // ignores an empty filter
        if (!filters[key].length) return true;
        return filters[key].find(
          filter => getValue(filter) === getValue(item[key])
        );
      });
    });
  }

  function thousands_separators(num)
  {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  }
});
