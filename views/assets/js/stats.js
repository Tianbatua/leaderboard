$(function(){
  $(".updatestats").click(function(){
    $("#note").hide();
    $("#op_name").text($(this).attr('value'));
    $("#op").show();
    $("#fivepts").val($(this).attr('id'));
  });
  $("#fivepts").click(function(){
    $.ajax({
      type: "post",
      data: "playerid="+$(this).val(),
      url: "../controllers/addFivePts.php",
      success: function(result){
        location.reload();
      }
    });
  }); 
});
