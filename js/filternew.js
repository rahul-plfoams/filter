$(() => {
    //UI
    $(".sortingFilters").hide();

    //*date
    const date = new Date();
    const [currDate, currMonth, currYear] = [
        date.getDate() < 10 ? "0" + date.getDate() : date.getDate(),
        date.getMonth() < 10 ? "0" + (date.getMonth() + 1) : date.getMonth() + 1,
        date.getFullYear()
    ];
    const budgetsLimit = {
        "Less than 10,000": [0, 10000],
        "11,000-20,000": [10001, 20000],
        "21,000-35,000": [25001, 35000],
        "Above 35,000": [35001, 1000000],
        default: [0, 1000000]
      };
    
    $("#currentDate").text(`${currDate}/${currMonth}/${currYear}`);

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

  $("#showResult").click(() => {
    arrFilters = {};
    $(".sortingFilters").show();
    getSelection();
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

  //get values from objects and store in array
  getVal = array => {
    resArray = [];
    array.forEach(element => $(element).val()==parseInt($(element).val())?resArray.push(parseInt($(element).val())):resArray.push($(element).val()));
    return resArray;
  };
});