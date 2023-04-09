jQuery(document).ready(function(){

jQuery(document).on("click", ".save", function(){
    var name = jQuery(".name").val();
    var email = jQuery(".email").val();
    var phone = jQuery(".phone").val();
    var status = jQuery(".status").val();
    jQuery.ajax({
        url: "process.php",
        type: "POST",
        data:{
           name:name,
           email:email,
           phone:phone,
           status:status,
           action:"insert"
        },
        success: function(res){
            jQuery(".message").html('<div class="alert alert-success">'+res+'</div>');
            jQuery(".message").fadeOut("slow");
            jQuery(".name").val("");
            jQuery(".email").val("");
            jQuery(".phone").val("");
            jQuery(".status").val("");
            show();
        }
    })
})
show();
function show(){
    jQuery.ajax({

        url:"process.php",
        type: "POST",
        data:{
            action:"show",  
        },
        success: function(res){
          jQuery(".t_data").html(res);
        }
    })
}

jQuery(document).on("click", ".btn_delete",function(){

    var id = jQuery(this).val();
    jQuery("#deleteItem").modal("show");
    jQuery(".btn_yes").val(id);
   

})
jQuery(document).on("click",".btn_yes",function(){
    var id = jQuery(this).val();
    
    jQuery.ajax({

        url:"process.php",
        type: "POST",
        data:{
            id:id,
            action:"delete" 
        },
        success: function(res){
        //   alert(res);
        show();
        jQuery("#deleteItem").modal("hide");
          
        }
    })
})

jQuery(document).on("click",".edit",function(){

    var id = jQuery(this).val();
    jQuery(".save").hide();
    jQuery(".update").show();
    
   
    jQuery.ajax({
        url:"process.php",
        type:"POST",
        dataType:"json",
        data:{
            id:id,
            action:"findData",
        },
        success:function(res){
            console.log(res);
            jQuery(".name").val(res.name);
            jQuery(".email").val(res.email);
            jQuery(".phone").val(res.phone);
            jQuery(".status").val(res.status);
            jQuery(".update").val(res.id);
        }
    })

})

jQuery(document).on("click",".update",function(){
    var id = jQuery(this).val();
    var name = jQuery(".name").val();
    var email = jQuery(".email").val();
    var phone = jQuery(".phone").val();
    var status = jQuery(".status").val();
    jQuery.ajax({
        url:"process.php",
        type:"POST",
        data:{
            name:name,
            email:email,
            phone:phone,
            status:status,
            action:"update",
            id:id
            
        },
        success: function(res){
            jQuery(".message").html('<div class="alert alert-success">'+res+'</div>');
            jQuery(".message").fadeOut("slow");
            jQuery(".name").val("");
            jQuery(".email").val("");
            jQuery(".phone").val("");
            jQuery(".status").val("");
            
            show();
            jQuery(".save").show();
            jQuery(".update").hide();   
            // alert(res);
        }
    })

})

})