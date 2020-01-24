$(()=>{
  prevHTML=$("#mod").html();
const position=$("[class^=checkPositionS]").parents(".content").html();
        const back=$("[class^=checkBackPainS]").parents(".content").html();
        const feel=$("[class^=checkFeelTypeS]").parents(".content").html();
        
    $("[name='sleepers']").on("change",()=>{
        let selection=$("[name='sleepers']:checked").val();
        $("#mod").html(prevHTML);
        console.log(prevHTML);
        let positionHtml="",backHtml="",feelHtml="";
        for(let i=1;i<=selection;i++){
            positionHtml+="<tr>"+$(".checkPositionS"+i).parents("tr").html()+"</tr>";
            backHtml+="<tr>"+$(".checkBackPainS"+i).parents("tr").html()+"</tr>";
            feelHtml+="<tr>"+$(".checkFeelTypeS"+i).parents("tr").html()+"</tr>";
        }
        $("[class^=checkPositionS]").parents("tbody").html(positionHtml);
        $("[class^=checkBackPainS]").parents("tbody").html(backHtml);
        $("[class^=checkFeelTypeS]").parents("tbody").html(feelHtml);
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
    });
})