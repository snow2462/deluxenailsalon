function checkKatakana(val) {
    return  /^[ァ-ヶーぁ-ん\-\s]+$/.test(val);   
}

function CheckValidator(form_id) {
    
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var ck_tel = /^([０-９]+－)*[０-９]+$/;
	var ck_tel_normal = /^([0-9]+-)*[0-9]+$/;
    var isRequired = 1;

    jQuery("div.err_box").remove();
    jQuery("form#" + form_id).removeClass("error_input");
    
    jQuery("form#" + form_id + " .requiredf").each(function () 
	{		
        if (jQuery(this).val() == "") 
		{         	
            var msg_error = jQuery(this).attr("msg_error");             
            jQuery(this).addClass("error_input");

                if(msg_error!="")
                {
                    jQuery(this).parent().prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>" + msg_error + "</p></div>");
                }else
                {
                    jQuery(this).parent().prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>" + name + "は必ずご入力ください。</p></div>");
                }    

            isRequired = 0;
        } else
        {
           
            //option email, tell..
            jQuery(this).filter(".email").each(function () 
			{
                if (!ck_email.test(jQuery(this).val())) 
				{
                    jQuery(this).addClass("error_input");
                    jQuery(this).parent().prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>メールアドレスが不適切です。</p></div>");
                    isRequired = 0;
                }
            });

            jQuery(this).filter(".tel").each(function () 
			{
                if (!ck_tel.test(jQuery(this).val()) && !ck_tel_normal.test(jQuery(this).val())) 
				{
                    jQuery(this).addClass("error_input");
                    jQuery(this).parent().prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>数字を入力してください</p></div>");
                    isRequired = 0;
                }
            });
			

        }
    });
	
	// checking katakana
	jQuery("form#" + form_id + " .katakana").each(function ()
	{
		if(jQuery(this).val()!="")
		{	
			if(!checkKatakana(jQuery(this).val())){
				jQuery(this).addClass("error_input");
				jQuery(this).parent().prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>カタカナで入力してください。</p></div>");
				isRequired = 0;
			}
		}
	});
	
	jQuery("form#" + form_id + " .input-age").each(function (){
        if(jQuery(this).val()!="")
        {
            if (!ck_tel.test(jQuery(this).val()) && !ck_tel_normal.test(jQuery(this).val())) {
                    jQuery(this).addClass("error_input");
                    jQuery(this).parent().prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>半角数字で入力してください</p></div>");
                    isRequired = 0;
                }
        }
	});
  
	var hospital = $(":radio[name=hospital-name]:checked").val();
    if (typeof hospital === 'undefined')
    {
        jQuery("#hospital-name").parent().prepend("<div class='err_box'><p style='color:#C00;font-weight:bold;'>希望医院名は必ず選択してください。</p></div>")
            isRequired = 0;
    }else{
            isRequired = 1;
    }
	
    //エラーの際の処理
    if (jQuery("div.err_box").length > 0) {
        var top_header = jQuery("div.err_box:first").offset().top - 150;
        jQuery('html,body').animate({scrollTop: top_header}, 'slow');
        return false;
    }

    if (isRequired)
    {
        return true;
    } else
    {
        return false;
    }
}

