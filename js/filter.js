$(document).ready(() => {
    $("#btns-filter").hide();
    date = new Date();
    const [currDate, currMonth, currYear] = [
      date.getDate() < 10 ? "0" + date.getDate() : date.getDate(),
      date.getMonth() < 10 ? "0" + (date.getMonth() + 1) : date.getMonth() + 1,
      date.getFullYear()
  ];
    $("#currentDate").text(`${currDate}/${currMonth}/${currYear}`);
    const budgetsLimit = {
      "Less than 10,000": [0, 10000],
      "11,000-20,000": [10001, 20000],
      "21,000-35,000": [25001, 35000],
      "Above 35,000": [35001, 1000000],
      default: [0, 1000000]
    };
  
    //reset function
    resetResult = () => {
      $(".deepshit").empty();
      $("#btns-filter").hide();
      $("#outputNo").text("");
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
  
    // reset
    $("[type='reset']").click(() => {
      resetResult();
    });
  
    //show Result
    $("#showResult").click(() => {
      $("#resultSection img").hide();
      arrFilters = {};
      resetResult();
      // console.clear();
      $("#selectThickness,#selectLength,#selectWidth").empty();
      $("#btns-filter").show();
  
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
      sortedLimit = budgetsLimit[budgets[0]];
  
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
      outputNo =
        filteredImages.length == 0
          ? "No Matches Found"
          : `${filteredImages.length} results Found`;
      for (i = 0; i < filteredImages.length; i++) {
        html =
          html +
          `
  <div class="card mx-auto" style="max-height:80vh">
    <img src="${filteredImages[i].src}" alt="" class="card-img-top img-fluid">
    <div class="">
      <table class="table table-bordered text-center">
        <tr>        
          <td class="border-dark">Size</td>
          <td class="border-dark">${filteredImages[i].length/12}' &times ${filteredImages[i].width/12}'</td>
        </tr>
        <tr>
          <td class="border-dark">Thickness</td>
          <td class="border-dark">${filteredImages[i].thickness}"</td>
        </tr>
        <tr>
          <td class="border-dark">MRP</td>
          <td class="border-dark text-danger">&#8377 <del>${thousands_separators(filteredImages[i].mrp)}<del> </td>
        </tr>
        <tr>
          <td class="border-dark">Offer Price</td>
          <td class="border-dark">&#8377 ${thousands_separators(filteredImages[i].price)}</td>
        </tr>
        <tr>
          <td class="border-dark">Discount</td>
          <td class="border-dark">${filteredImages[i].offer} %</td>
        </tr>
      </table>
    </div>
  </div>
          `;
         
      }
          html+=`<input type='hidden' name='leastID' value="${filteredImages.sort()[0].id}">`;
      html+=`<input type='hidden' name='leastsrc' value="${filteredImages.sort()[0].src.replace(/ /,"%20")}">`;
      html+=`<input type='hidden' name='leastlength' value="${filteredImages.sort()[0].length}">`;
      html+=`<input type='hidden' name='leastwidth' value="${filteredImages.sort()[0].width}">`;
      html+=`<input type='hidden' name='leastthickness' value="${filteredImages.sort()[0].thickness}">`;
      html+=`<input type='hidden' name='leastmrp' value="${filteredImages.sort()[0].mrp}">`;
      html+=`<input type='hidden' name='leastprice' value="${filteredImages.sort()[0].price}">`;
      html+=`<input type='hidden' name='leastoffer' value="${filteredImages.sort()[0].offer}">`;
      html+=`<input type='hidden' name='midID' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].id}">`;
      html+=`<input type='hidden' name='midsrc' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].src.replace(/ /,"%20")}">`;
      html+=`<input type='hidden' name='midlength' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].length}">`;
      html+=`<input type='hidden' name='midwidth' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].width}">`;
      html+=`<input type='hidden' name='midthickness' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].thickness}">`;
      html+=`<input type='hidden' name='midmrp' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].mrp}">`;
      html+=`<input type='hidden' name='midprice' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].price}">`;
      html+=`<input type='hidden' name='midoffer' value="${filteredImages.sort()[Math.round((filteredImages.length-1)/2)].offer}">`;
      html+=`<input type='hidden' name='highID' value="${filteredImages.sort()[filteredImages.length-1].id}">`;
      html+=`<input type='hidden' name='highsrc' value="${filteredImages.sort()[filteredImages.length-1].src.replace(/ /,"%20")}">`;
      html+=`<input type='hidden' name='highlength' value="${filteredImages.sort()[filteredImages.length-1].length}">`;
      html+=`<input type='hidden' name='highwidth' value="${filteredImages.sort()[filteredImages.length-1].width}">`;
      html+=`<input type='hidden' name='highthickness' value="${filteredImages.sort()[filteredImages.length-1].thickness}">`;
      html+=`<input type='hidden' name='highmrp' value="${filteredImages.sort()[filteredImages.length-1].mrp}">`;
      html+=`<input type='hidden' name='highprice' value="${filteredImages.sort()[filteredImages.length-1].price}">`;
      html+=`<input type='hidden' name='highoffer' value="${filteredImages.sort()[filteredImages.length-1].offer}">`;
      
      // $(".deepshit").append(html);
      $("#outputNo").text(outputNo);
       // deep shit
      //  deepShit = new Siema({
      //   selector: '.deepshit',
      //   perPage: 3
      // });
  
    
      
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
  